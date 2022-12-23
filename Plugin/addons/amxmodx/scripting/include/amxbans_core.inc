/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * AMX Bans - http://www.amxbans.net
 *  Include - amxbans_core
 * 
 * Copyright (C) 2014  Ryan "YamiKaitou" LeBlanc
 * Copyright (C) 2009, 2010  Thomas Kurz
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

#pragma reqlib AMXBansCore
#if !defined AMXMODX_NOAUTOLOAD
	#pragma loadlib AMXBansCore
#endif

#if defined _amxbans_core_included
	#endinput
#endif
#define _amxbans_core_included

// get amxbans db prefix
// standalone native
native amxbans_get_db_prefix(output[], len=32);

// get admin nick from web
native amxbans_get_admin_nick(id, output[], len=32);

// returns 1 if admin has to use static bantime
// param id: the player id
native amxbans_get_static_bantime(id);

// executed if a player gets admin
// value id: the player id
forward amxbans_admin_connect(id);

// executed if a admin disconnects
// value id: the player id
forward amxbans_admin_disconnect(id);