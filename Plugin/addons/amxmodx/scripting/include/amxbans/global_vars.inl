/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * AMX Bans - http://www.amxbans.net
 *  Include - global_vars
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

//db table defines, no need to change something
new const tbl_serverinfo[] = "_serverinfo";
new const tbl_reasons[] = "_reasons";
new const tbl_reasons_to_set[] = "_reasons_to_set";
new const tbl_bans[] = "_bans";
new const tbl_bans_edit[] = "_bans_edit";
new const tbl_flagged[] = "_flagged";

// global
new g_ip[32];
new g_port[10];
new bool:g_kicked_by_amxbans[33];
new bool:g_being_banned[33];
new bool:g_supported_game = true;

//forwards
enum MFHandles
{
	Ban_MotdOpen,
	Player_Flagged,
	Player_UnFlagged
}

new MFHandle[MFHandles];

// For hudmessages
new g_MyMsgSync;

// Variables for menus
new g_coloredMenus;
new bool:g_in_flagging[33];
new bool:set_custom_reason[33];

new g_menuban_type[33]; // 0 ban and kick, 1 ban for next map, 2 ban and kick at next round
new bool:g_nextround_kick[33];
//new g_nextround_kick_time[33];
new g_nextround_kick_bid[33];
//new g_nextround_kick_Reason[33][128];

new g_PlayerName[33][32];
new g_choicePlayerName[33][32];
new g_choicePlayerAuthid[33][35];
new g_choicePlayerIp[33][22];
new g_choicePlayerId[33];
new g_choiceTime[33];
new g_choiceReason[33][128];
new g_ban_type[33][3];
new g_ident[50];

new Array:g_banReasons;
new Array:g_banReasons_Bantime;

// flagging
new bool:g_being_flagged[33];
new g_flaggedReason[33][128];
new g_flaggedTime[33];

/*****************************/

// pcvars

new pcvar_serverip;
new pcvar_server_nick;
new pcvar_discon_in_banlist;
new pcvar_complainurl;
new pcvar_debug;
new pcvar_add_mapname;
new pcvar_flagged_all;
new pcvar_show_in_hlsw;
new pcvar_show_hud_messages;
new pcvar_higher_ban_time_admin;
new pcvar_admin_mole_access;
new pcvar_show_name_evenif_mole;
new pcvar_custom_statictime;
new pcvar_show_prebanned;
new pcvar_show_prebanned_num;
new pcvar_default_banreason;
new pcvar_prefix;

/*****************************/

// SQL

new Handle:g_SqlX;
new g_dbPrefix[32];

new Float:kick_delay = 10.0; //motd_delay from DB

/*****************************/

// disconnected Player

new Array:g_disconPLname;
new Array:g_disconPLauthid;
new Array:g_disconPLip;

new g_highbantimesnum;
new g_lowbantimesnum;
new g_flagtimesnum;
new g_HighBanMenuValues[14];
new g_LowBanMenuValues[14];
new g_FlagMenuValues[14];