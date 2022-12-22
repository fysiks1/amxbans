<?php

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by AMXBans.de

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/

function return_bytes($val) {
	$val = trim($val);
	$last = strtolower($val[strlen($val)-1]);
	switch($last) {
		// The 'G' modifier is available since PHP 5.1.0
		case 'g':
			$val *= 1024;
		case 'm':
			$val *= 1024;
		case 'k':
			$val *= 1024;
	}

	return $val;
}

function is__writable($path) {
//will work in despite of Windows ACLs bug
//NOTE: use a trailing slash for folders!!!

    if ($path{strlen($path)-1}=='/') // recursively return a temporary file path
        return is__writable($path.uniqid(mt_rand()).'.tmp');
    else if (is_dir($path))
        return is__writable($path.'/'.uniqid(mt_rand()).'.tmp');
    // check tmp file for read/write capabilities
    $rm = file_exists($path);
    $f = @fopen($path, 'a');
    if ($f===false)
        return false;
    fclose($f);
    if (!$rm)
        unlink($path);
    return true;
}
function sql_get_privilege($db) {
	$privileges=array();

	//global privileges
	$query=$db->query("SHOW GRANTS FOR CURRENT_USER()")	or die ($db->error);
	$db_db = str_replace("_","\_",$_SESSION["dbdb"]);
	while($row = $query->fetch_array()){
		$v = $row[0];
		if(stristr($v,$db_db) || stristr($v,"*.*")) {
			if(stristr($v,"ALL PRIVILEGES")) {
				$privileges = array("SELECT","INSERT","UPDATE","DELETE","CREATE");
				return $privileges;
			}
			if(stristr($v,"SELECT")) $privileges[]="SELECT";
			if(stristr($v,"INSERT")) $privileges[]="INSERT";
			if(stristr($v,"UPDATE")) $privileges[]="UPDATE";
			if(stristr($v,"DELETE")) $privileges[]="DELETE";
			if(stristr($v,"CREATE")) $privileges[]="CREATE";
		}
	}
	return $privileges;
}
function write_cfg_file($file,$content) {
	if(!file_exists($file)) {
		if($fh = fopen($file,"w")) {
			fputs($fh,$content);
			fclose($fh);
			return "_FILESUCCESS";
		} else {
			return "_FILEOPENERROR";
		}
	} else {
		return "_FILEEXISTS";
	}
}
