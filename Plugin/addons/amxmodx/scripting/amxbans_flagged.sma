/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * AMX Bans - http://www.amxbans.net
 *  Plugin - Flagged
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

#define PLUGINNAME "AMXBans Flagged"
#define PLUGINAUTHOR "YamiKaitou"
new const PLUGINVERSION[] = "6.13";

/*
^x01 is Yellow
^x03 is Team Color
^x04 is Green
*/

#include <amxmodx>
#include <amxmisc>
#include "include/amxbans_main.inc"
//#include "amxbans/color_chat.inl"

new authid[33][35],ip[33][22],reason[33][100]//,Float:left[33]
new flagged_end[33]
new g_maxplayers

public plugin_init() {
	register_plugin(PLUGINNAME, PLUGINVERSION, PLUGINAUTHOR);
	g_maxplayers=get_maxplayers()
//	color_chat_init()
	register_dictionary("amxbans.txt")
}
public amxbans_player_flagged(id,sec_left,reas[]) {
		
	if(!is_user_connected(id)) return PLUGIN_HANDLED
	if(sec_left) {
		flagged_end[id]=get_systime()+sec_left
	} else {
		flagged_end[id]=-1 //permanent
	}
	
	get_user_authid(id,authid[id],sizeof(authid[]))
	get_user_ip(id,ip[id],sizeof(ip[]))
	copy(reason[id],sizeof(reason[]),reas)
	
	set_task(10.0,"announce",id)
	return PLUGIN_HANDLED
}
public amxbans_player_unflagged(id) {
	if(task_exists(id)) remove_task(id)
}
public announce(id) {
	new name[32],left_str[32]
	get_user_name(id,name,sizeof(name))
	
	if(flagged_end[id]==-1) {
		formatex(left_str,charsmax(left_str)," ^x04(%L)^x01",LANG_PLAYER,"PERMANENT")
	} else if(flagged_end[id]) {
		new Float:left=float(flagged_end[id]-get_systime())/60
		//if(left <= 0.1 && task_exists(id)) remove_task(id)
		new left_int=floatround(left,floatround_ceil)
		
		formatex(left_str,charsmax(left_str)," ^x04(left: %d min)^x01",left_int)
		if(left_int) set_task(60.0,"announce",id)
	}
	//only show msg to admins with ADMIN_CHAT
	for(new i=1;i<=g_maxplayers;i++) {
		if(!is_user_connected(i)) continue
		if(get_user_flags(i) & ADMIN_CHAT)
			client_print(i, print_chat, "[AMXBans] %L", LANG_PLAYER, "FLAGGED_PLAYER",name,authid[id],reason[id])
	}
}
public client_disconnect(id) {
	if(task_exists(id)) remove_task(id)
}
