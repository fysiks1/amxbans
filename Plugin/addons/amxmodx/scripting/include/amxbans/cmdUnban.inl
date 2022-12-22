/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * AMX Bans - http://www.amxbans.net
 *  Include - cmdUnban
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


#if defined _cmdunban_included
    #endinput
#endif
#define _cmdunban_included

public cmdUnban(id, level, cid)
{
	/* Checking if the admin has the right access */
	if (!cmd_access(id,level,cid,2))
		return PLUGIN_HANDLED;
	
	read_argv(1, g_choicePlayerAuthid[id], charsmax(g_choicePlayerAuthid[]));
	
	new authid[36];
	new authip[16];
	
	if (contain(g_choicePlayerAuthid[id], "STEAM_") == 0)
		copy(authid, charsmax(authid), g_choicePlayerAuthid[id]);
	else
		copy(authip, charsmax(authip), g_choicePlayerAuthid[id]);
	
	new pquery[512];
	formatex(pquery, charsmax(pquery), "SELECT * FROM `%s%s` \
	WHERE (`player_id` = '%s' OR `player_ip` = '%s') AND `expired` = 0", \
	g_dbPrefix, tbl_bans, authid, authip);
	
	new data[2];
	data[0] = id;
	SQL_ThreadQuery(g_SqlX, "cmd_unban_1", pquery, data, 2);
	
	return PLUGIN_HANDLED;
}

public cmd_unban_1(failstate, Handle:query, error[], errnum, data[], size)
{
	new id = data[0];
	
	new bool:serverCmd = false;
	/* Determine if this was a server command or a command issued by a player in the game */
	if (id == 0)
		serverCmd = true;
	
	if (failstate)
	{
		new szQuery[256];
		SQL_GetQueryString(query, szQuery, 255);
		MySqlX_ThreadError(szQuery, error, errnum, failstate, 6);
	}
	else
	{
		if (SQL_NumResults(query) == 1)
		{
			new banid = SQL_ReadResult(query, 0);
			new admin_nick[100];
			mysql_get_username_safe(id, admin_nick, 99);
			
			if (serverCmd)
			{
				new servernick[100];
				get_pcvar_string(pcvar_server_nick, servernick, 99);
				if (strlen(servernick))
					copy(admin_nick, charsmax(admin_nick), servernick);
			}
			
			new pquery[512];
			formatex(pquery, charsmax(pquery), "INSERT INTO `%s%s` \
			(`id`, `bid`, `edit_time`, `admin_nick`, `edit_reason`) \
			VALUES ('', '%d', UNIX_TIMESTAMP(NOW()), '%s', 'Unbanned in-game')", \
			g_dbPrefix, tbl_bans_edit, banid, admin_nick);
			
			data[1] = banid;
			
			SQL_ThreadQuery(g_SqlX, "cmd_unban_2", pquery, data, 2);
		}
		else if (SQL_NumResults(query) == 0)
		{
			if (serverCmd)
				server_print("[AMXBans] %L", LANG_SERVER, "PLAYER_NOT_BANNED", g_choicePlayerAuthid[id]);
			else
				console_print(id, "[AMXBans] %L", id, "PLAYER_NOT_BANNED", g_choicePlayerAuthid[id]);
		}
		else
		{
			if (serverCmd)
				server_print("[AMXBans] %L", LANG_SERVER, "TOO_MANY_BANS", g_choicePlayerAuthid[id], SQL_NumResults(query));
			else
				console_print(id, "[AMXBans] %L", id, "TOO_MANY_BANS", g_choicePlayerAuthid[id], SQL_NumResults(query));
		}
	}
}

public cmd_unban_2(failstate, Handle:query, error[], errnum, data[], size)
{
	new banid = data[1];
	
	if (failstate)
	{
		new szQuery[256];
		SQL_GetQueryString(query, szQuery, 255);
		MySqlX_ThreadError(szQuery, error, errnum, failstate, 6);
	}
	else
	{
		new pquery[512];
		formatex(pquery, charsmax(pquery), "UPDATE `%s%s` \
		SET `ban_length` = '-1', `expired` = '1' \
		WHERE `bid` = %d", \
		g_dbPrefix, tbl_bans, banid);
		
		SQL_ThreadQuery(g_SqlX, "cmd_unban_3", pquery, data, 2);
	}
}

public cmd_unban_3(failstate, Handle:query, error[], errnum, data[], size)
{
	new id = data[0];
	
	new bool:serverCmd = false;
	/* Determine if this was a server command or a command issued by a player in the game */
	if (id == 0)
		serverCmd = true;
	
	if (failstate)
	{
		new szQuery[256];
		SQL_GetQueryString(query, szQuery, 255);
		MySqlX_ThreadError(szQuery, error, errnum, failstate, 6);
	}
	else
	{
		if (serverCmd)
		{
			server_print("%L", "UNBAN_CONSOLE", LANG_SERVER, g_choicePlayerAuthid[id]);
		}
		else
		{
			console_print(id, "%L", "UNBAN_CONSOLE", id, g_choicePlayerAuthid[id]);
		}
		
		log_amx("[AMXBans] %L", "LOG_UNBAN", LANG_SERVER, "CONSOLE", 0, "CONSOLE", "", g_choicePlayerAuthid[id]);
	}
}