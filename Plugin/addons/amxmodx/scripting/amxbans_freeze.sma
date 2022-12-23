/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * AMX Bans - http://www.amxbans.net
 *  Plugin - Freze
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

#include <amxmodx>
#include <fakemeta>
#include <fun>
#include "include/amxbans_main.inc"

new bool:g_frozen[33]
new pcvar_mode
new mode

public plugin_init() {
	register_plugin(PLUGINNAME, PLUGINVERSION, PLUGINAUTHOR);
	pcvar_mode=register_cvar("amxbans_freeze_mode","abcd")
	register_clcmd("say","handle_say")
	register_clcmd("say_team","handle_say")
}

// forward from amxbans_main
public amxbans_ban_motdopen(id) {
	new tmp[8]
	get_pcvar_string(pcvar_mode,tmp,charsmax(tmp))
	mode=read_flags(tmp)
	
	if(is_user_connected(id)) g_frozen[id]=true;
	if(is_user_alive(id)) {
		g_frozen[id]=true;
		if(mode & 8) glow_player(id)
		if(mode & 2) strip_player(id)
		if(mode & 1) freeze_player(id)
		
	}
}
public client_connect(id) {
	g_frozen[id]=false
}
public client_disconnect(id) {
	g_frozen[id]=false
}
public handle_say(id) {
	if(g_frozen[id] && (mode & 4)) return PLUGIN_HANDLED
	return PLUGIN_CONTINUE
}
freeze_player(id) {
	set_pev(id,pev_velocity,Float:{0.0,0.0,0.0})
	engfunc(EngFunc_SetClientMaxspeed,id,0.00001)
	set_pev( id , pev_flags , pev( id , pev_flags ) | FL_FROZEN )
}
strip_player(id) {
	strip_user_weapons(id);
}
glow_player(id) {
	set_user_rendering(id,kRenderFxGlowShell,255,0,0,kRenderNormal,25)
}
/*
glow_remove(id) {
	set_user_rendering(id,kRenderFxGlowShell,0,0,0,kRenderNormal,25)
}
*/
