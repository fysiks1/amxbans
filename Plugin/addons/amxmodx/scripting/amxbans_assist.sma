/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * AMX Bans - http://www.amxbans.net
 *  Plugin - Assist
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

#define PLUGINNAME "AMXBans Assist"
#define PLUGINAUTHOR "YamiKaitou"
new const PLUGINVERSION[] = "6.13";

#pragma semicolon 1

#include <amxmodx>

// Troubleshooting files, located in root folder
new const FILEdumpadmins[] = "dumpadmins.txt";

public plugin_init()
{
    register_plugin(PLUGINNAME, PLUGINVERSION, PLUGINAUTHOR);
    
    register_srvcmd("amxbans", "cmdAmxbans");
}

public cmdAmxbans()
{
    new sCMD[20];
    read_argv(1, sCMD, charsmax(sCMD));
    
    if (equal(sCMD, "dumpadmins"))
    {
        new admAuth[36];
        new admPassword[32];
        new admAccess[27];
        new admFlags[6];
        new admNum = admins_num();
        new file;
        new buffer;
        
        if (admNum == 0)
        {
            server_print("No Admins loaded, nothing to dump");
            return PLUGIN_HANDLED;
        }
        
        server_print("%d Admins were loaded, dumping list to %s", admNum, FILEdumpadmins);
        
        file = fopen(FILEdumpadmins, "wt");
        fprintf(file, "%d Admins were loaded^n", admNum);
        
        for (new k = 0; k < admNum; k++)
        {
            admins_lookup(k, AdminProp_Auth, admAuth, charsmax(admAuth));
            admins_lookup(k, AdminProp_Password, admPassword, charsmax(admPassword));
            buffer = admins_lookup(k, AdminProp_Access);
            get_flags(buffer, admAccess, charsmax(admAccess));
            buffer = admins_lookup(k, AdminProp_Flags);
            get_flags(buffer, admFlags, charsmax(admFlags));
            fprintf(file, "%d : ^"%s^" ^"%s^" ^"%s^" ^"%s^"^n", k, admAuth, admPassword, admAccess, admFlags);
        }
        
        fclose(file);
        
        server_print("Dump complete");
        return PLUGIN_HANDLED;
    }
    else
    {
        server_print("This command is designed to help troubleshoot common problems with the AMXX Plugin (sorry, no Web troubleshooting here)");
        server_print("Please refer to the FAQ Thread for this plugin for usage and assistance");
        server_print("http://forum.amxbans.net/viewtopic.php?f=19&t=74");
        return PLUGIN_HANDLED;
    }
    
    return PLUGIN_HANDLED;
}