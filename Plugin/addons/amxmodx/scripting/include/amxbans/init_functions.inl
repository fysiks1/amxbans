/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * AMX Bans - http://www.amxbans.net
 *  Include - init_functions
 * 
 * Copyright (C) 2014  Ryan "YamiKaitou" LeBlanc
 * Copyright (C) 2009, 2010  Thomas Kurz
 * Copyright (C) 2003, 2004  Ronald Renes / Jeroen de Rover
 * 
 * 
 *  This program is free software; you can redistribute it and/or modify it
 *  under the terms of the GNU General Public License as published by the
 *  Free Software Foundation; either version 2 of the License, or (at
 *  your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful, but
 *  WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 *  General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software Foundation,
 *  Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 *  In addition, as a special exception, the author gives permission to
 *  link the code of this program with the Half-Life Game Engine ("HL
 *  Engine") and Modified Game Libraries ("MODs") developed by Valve,
 *  L.L.C ("Valve"). You must obey the GNU General Public License in all
 *  respects for all of the code used other than the HL Engine and MODs
 *  from Valve. If you modify this file, you may extend this exception
 *  to your version of the file, but you are not obligated to do so. If
 *  you do not wish to do so, delete this exception statement from your
 *  version.
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


#if defined _init_functions_included
    #endinput
#endif
#define _init_functions_included

#include <amxmodx>
#include <amxmisc>
#include <sqlx>
#include <time>
/*********************  Banmod online  ********************/
public banmod_online(id)
{
	// This is a new way of getting the port number
	new ip_port[100]
	get_pcvar_string(pcvar_serverip,ip_port,99)
	if(contain(ip_port,":") == -1) {
		get_user_ip(0, ip_port, 99, 0) // Takes in the whole IP:port string.. (0 is always the server)
	}
	strtok(ip_port, g_ip, 90, g_port, 9, ':')

	if ( get_pcvar_num(pcvar_debug) >= 1 )
	{
		server_print("[AMXBans] The server IP:PORT is: %s:%s", g_ip, g_port)
		log_amx("[AMXBans] The server IP:PORT is: %s:%s", g_ip, g_port)
	}
	new pquery[1024]
	formatex(pquery, charsmax(pquery), "SELECT `motd_delay` FROM `%s%s` WHERE address = '%s:%s'", g_dbPrefix, tbl_serverinfo,g_ip,g_port)
	
	new data[1]
	data[0] = id

	SQL_ThreadQuery(g_SqlX, "banmod_online_", pquery, data, 1)
}

public banmod_online_(failstate, Handle:query, error[], errnum, data[], size)
{
	new id = data[0]

	new timestamp = get_systime(0)
	new servername[100]
	mysql_get_servername_safe(servername,charsmax(servername))
	new modname[32]
	get_modname(modname,charsmax(modname))

	if (failstate) {
		new szQuery[256]
		SQL_GetQueryString(query,szQuery,255)
		MySqlX_ThreadError( szQuery, error, errnum, failstate, 1 )
		return PLUGIN_HANDLED
	}
	
	new pquery[1024]
	
	if (!SQL_NumResults(query)) {
		if ( get_pcvar_num(pcvar_debug) >= 1 ) {
			server_print("[AMXBans] INSERT INTO `%s%s` VALUES ('', %i,'%s', '%s:%s', '%s', '', '%s', '', '', '0')", g_dbPrefix, tbl_serverinfo, timestamp, servername, g_ip, g_port, modname, PLUGINVERSION)
			log_amx("[AMXBans] INSERT INTO `%s%s` VALUES ('', %i,'%s', '%s:%s', '%s', '', '%s', '', '', '0')", g_dbPrefix, tbl_serverinfo, timestamp, servername, g_ip, g_port, modname, PLUGINVERSION)
		}
		
		formatex(pquery, charsmax(pquery),"INSERT INTO `%s%s` (timestamp, hostname, address, gametype, amxban_version, amxban_menu) VALUES \
			(%i, '%s', '%s:%s', '%s', '%s', 1)", g_dbPrefix, tbl_serverinfo, timestamp, servername, g_ip, g_port, modname, PLUGINVERSION)
	} else {
		new kick_delay_str[10]
		SQL_ReadResult(query, 0, kick_delay_str, 9)

		if (floatstr(kick_delay_str)>2.0) {
			kick_delay=floatstr(kick_delay_str)
		} else {
			kick_delay=10.0
		}

		if ( get_pcvar_num(pcvar_debug) >= 1 ) {
			server_print("AMXBANS DEBUG] UPDATE `%s%s` SET timestamp=%i,hostname='%s',gametype='%s',amxban_version='%s', amxban_menu=1 WHERE address = '%s:%s'", g_dbPrefix, tbl_serverinfo, timestamp, servername, modname, PLUGINVERSION, g_ip, g_port)
			log_amx("[AMXBANS DEBUG] UPDATE `%s%s` SET timestamp=%i,hostname='%s',gametype='%s',amxban_version='%s', amxban_menu=1 WHERE address = '%s:%s'", g_dbPrefix, tbl_serverinfo, timestamp, servername, modname, PLUGINVERSION, g_ip, g_port)
		}
		formatex(pquery, charsmax(pquery), "UPDATE `%s%s` SET timestamp='%i',hostname='%s',gametype='%s',amxban_version='%s', amxban_menu='1' WHERE address = '%s:%s'", g_dbPrefix, tbl_serverinfo, timestamp, servername, modname, PLUGINVERSION, g_ip, g_port)
	
	}
	new data[1]

	//formatex(pquery, charsmax(pquery), "UPDATE `%s%s` SET timestamp='%i',hostname='%s',gametype='%s',amxban_version='%s', amxban_menu='1' WHERE address = '%s:%s'", g_dbPrefix, tbl_serverinfo, timestamp, servername, modname, PLUGINVERSION, g_ip, g_port)

	data[0] = id

	SQL_ThreadQuery(g_SqlX, "banmod_online_update", pquery, data, 1)
	
	log_amx("[AMXBans] %L", LANG_SERVER, "SQL_BANMOD_ONLINE", PLUGINVERSION)
	
	return PLUGIN_CONTINUE
}

public banmod_online_insert(failstate, Handle:query, error[], errnum, data[], size)
{
	if (failstate) {
		new szQuery[256]
		SQL_GetQueryString(query,szQuery,255)
		MySqlX_ThreadError(szQuery, error, errnum, failstate, 2)
	}
}

public banmod_online_update(failstate, Handle:query, error[], errnum, data[], size)
{
	if (failstate)
	{
		new szQuery[256]
		SQL_GetQueryString(query,szQuery,255)
		MySqlX_ThreadError(szQuery, error, errnum, failstate, 3)
	}
}

/************  Start fetch reasons  *****************/
public cmdFetchReasons(id,level,cid) {
	if (!cmd_access(id,level,cid,1))
		return PLUGIN_HANDLED
		
	fetchReasons(id)
	return PLUGIN_HANDLED
}
public fetchReasons(id) {
	new data[1], pquery[1024]
	formatex(pquery, charsmax(pquery), "SELECT re.reason,re.static_bantime FROM %s%s as re,%s%s as rs ,%s%s as si \
				WHERE si.address = '%s:%s' AND si.reasons = rs.setid and rs.reasonid = re.id \
				ORDER BY re.id", g_dbPrefix, tbl_reasons, g_dbPrefix, tbl_reasons_to_set, g_dbPrefix, tbl_serverinfo, g_ip,g_port)
	
	data[0] = id
	SQL_ThreadQuery(g_SqlX, "fetchReasons_", pquery, data, 1)
	
	return PLUGIN_HANDLED
}

public fetchReasons_(failstate, Handle:query, error[], errnum, data[], size)
{
	if (failstate) {
		new szQuery[256]
		MySqlX_ThreadError( szQuery, error, errnum, failstate, 5 )
	}
	new aNum
	if (!SQL_NumResults(query)) {
		server_print("[AMXBans] %L",LANG_SERVER,"NO_REASONS")
		new temp[128]
		formatex(temp,charsmax(temp), "%L", LANG_SERVER, "REASON_1")
		ArrayPushReasons(temp,0)
		formatex(temp,charsmax(temp), "%L", LANG_SERVER, "REASON_2")
		ArrayPushReasons(temp,0)
		formatex(temp,charsmax(temp), "%L", LANG_SERVER, "REASON_3")
		ArrayPushReasons(temp,0)
		formatex(temp,charsmax(temp), "%L", LANG_SERVER, "REASON_4")
		ArrayPushReasons(temp,0)
		formatex(temp,charsmax(temp), "%L", LANG_SERVER, "REASON_5")
		ArrayPushReasons(temp,0)
		formatex(temp,charsmax(temp), "%L", LANG_SERVER, "REASON_6")
		ArrayPushReasons(temp,0)
		formatex(temp,charsmax(temp), "%L", LANG_SERVER, "REASON_7")
		ArrayPushReasons(temp,0)
	
		server_print("[AMXBans] %L",LANG_SERVER,"SQL_LOADED_STATIC_REASONS")
		log_amx("[AMXBans] %L",LANG_SERVER,"SQL_LOADED_STATIC_REASONS")

		aNum = 7

		return PLUGIN_HANDLED
	} else {
		new reason[128]
		new reason_time
		while(SQL_MoreResults(query)) {
			SQL_ReadResult(query, 0, reason,charsmax(reason))
			reason_time=SQL_ReadResult(query,1)
			ArrayPushReasons(reason,reason_time)
			SQL_NextRow(query)
			aNum++
		}
	}
	
	if (aNum == 1)
		server_print("[AMXBans] %L", LANG_SERVER, "SQL_LOADED_REASON" )
	else
		server_print("[AMXBans] %L", LANG_SERVER, "SQL_LOADED_REASONS", aNum )
	
	return PLUGIN_HANDLED
}
ArrayPushReasons(reason[],bantime) {
	ArrayPushString(g_banReasons,reason)
	ArrayPushCell(g_banReasons_Bantime,bantime)
}