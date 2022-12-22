<?php 

/* 	

	AMXBans v6.0
	
	Copyright 2009, 2010 by SeToY & |PJ|ShOrTy

	This file is part of AMXBans.

    AMXBans is free software, but it's licensed under the
	Creative Commons - Attribution-NonCommercial-ShareAlike 2.0

    AMXBans is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

    You should have received a copy of the cc-nC-SA along with AMXBans.  
	If not, see <http://creativecommons.org/licenses/by-nc-sa/2.0/>.

*/

function db_backup($structur,$droptable,$deleteall,$download,$bansonly) {
	global $config, $mysql;
	
		// Header der Datei erstellen 
		$datei = "########################################\n"; 
		$datei .= "#\n"; 
		$datei .= "# AMXBans backup: " . date("d.m.Y H:i:s") . "\n"; 
		$datei .= "#\n";
		$datei .= "########################################\n"; 
		$datei .= "\n\n"; 
		// Alle Tabellen der Datenbank in einem Array speichern
		if(!$bansonly) {
			$res = $mysql->query("SHOW TABLES FROM ". $config->db_db);
			$num = $res->fetch_all();
            $tables = array_map(function($a) {  return array_pop($a); }, $num);
		} else {
		// nur banns table ------------------------------------------------------------------------------------------------------------------
			$tables[]=$config->db_prefix."_bans";
		}
		// Jede Tabelle einzeln durchlaufen 
		foreach($tables as $tab) {
			$datei .= "########################################\n"; 
			$datei .= "# table: " . $tab . "\n"; 
			$datei .= "########################################\n"; 
			$datei .= "\n"; 
			// "DROP TABLE miteinbeziehen" ?! 
			if($droptable == true) { 
				$datei .= "DROP TABLE IF EXISTS `" . $tab . "`;\n\n"; 
			} 
			// Grundlegende Informationen �ber die Struktur sammeln 
			$datei .= "CREATE TABLE IF NOT EXISTS `" . $tab . "` (\n"; 
			$query = "DESCRIBE " . $tab; 
			$sql = $mysql->query("DESCRIBE " . $tab);
			$num = $sql->num_rows;
			$end = 0; 
			while($info = $sql->fetch_assoc()) {
				$tab_name = $info["Field"]; 
				$tab_type = $info["Type"]; 
				$tab_null = (empty($info["Null"])) ? " NOT NULL" : " NULL"; 
				$tab_default = (empty($info["Default"])) ? "" : " DEFAULT '" . $info["Default"] . "'"; 
				$tab_extra = (empty($info["Extra"])) ? "" : " " . $info["Extra"]; 
				// Ende? Dann keine Kommas mehr setzen. 
				$end++; 
				$tab_komma = ($end<$num) ? ",\n" : ""; 
				// Ergebnisse zu $datei hinzuf�gen 
				$datei .= " `" . $tab_name . "` " . $tab_type . $tab_null . $tab_default . $tab_extra . $tab_komma; 
			}

			// Weiter Informationen abfragen
			$sql = $mysql->query("SHOW KEYS FROM " . $tab);
			while($info = $sql->fetch_array()) {
				$keyname = $info["Key_name"]; 
				$comment = (isset($info["Comment"])) ? $info["Comment"] : ""; 
				$sub_part = (isset($info["Sub_part"])) ? $info["Sub_part"] : ""; 
				if($keyname != "PRIMARY" && $info["Non_unique"] == 0) { 
					$keyname = "UNIQUE|$keyname"; 
				} 
				if($comment == "FULLTEXT") { 
					$keyname="FULLTEXT|$keyname"; 
				} 

				if(!isset($keyarray[$keyname])) { 
					$keyarray[$keyname] = array(); 
				} 
				$keyarray[$keyname][] = ($sub_part > 1) ? $info["Column_name"] . "(" . $sub_part . ")" : $info["Column_name"]; 
			} 
			// Informationen verarbeiten und in $datei schreiben 
			if(is_array($keyarray)) { 
				foreach($keyarray as $keyname => $columns) { 
					$datei .= ",\n"; 
					if($keyname == "PRIMARY") { 
						$datei .= "PRIMARY KEY ("; 
					} elseif(substr($keyname, 0, 6) == "UNIQUE") { 
						$datei .= "UNIQUE " . substr($keyname, 7) . " ("; 
					} elseif(substr($keyname, 0, 8) == "FULLTEXT") { 
						$datei .= "FULLTEXT " . substr($keyname, 9) . " ("; 
					} else { 
						$datei .= "KEY " . $keyname . " ("; 
					} 
					$datei .= implode($columns, ", ") . ")"; 
				} 
			}
			$datei .= ");\n"; 
			$datei .= "\n"; 
			
			// Backup der Datens�tze 
			if($structur == false) {
				if ($deleteall == true) { 
					$datei .= "DELETE FROM `" . $tab . "`;\n\n"; 
				} 
				// Alle Daten der Tabelle auslesen
				$sql = $mysql->query("SELECT * FROM `" . $tab ."`");
				while($info = $sql->fetch_assoc()) {
					unset($values); 
					unset($fieldnames); 
					foreach($info as $name => $field) { 
						$fieldnames = ($fieldnames) ? $fieldnames .= ",`" . $name ."`": "`" . $name . "`"; 
						$values = ($values) ? $values .= ",'" . addslashes($field) . "'" : "'" . addslashes($field) . "'"; 
					} 
					// Formatierten String zu $datei hinzuf�gen 
					$datei .= "INSERT INTO `" . $tab . "` (" . $fieldnames . ") VALUES (" . $values . ");\n"; 
				} 
				$datei .= "\n\n"; 
			} 
		} 
		// Speicher Optionen 
		$file_local="include/backup/" . date("Y-m-d_H-i-s") .(($bansonly)?"_bans":""). ".sql";
		if($fp = fopen($file_local, "w")) {
			fwrite($fp, $datei); 
			fclose($fp); 
			if($download == true) {
				if(ini_get('zlib.output_compression')) 
					ini_set('zlib.output_compression', 'Off');

				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Content-Disposition: attachment; filename="'.basename($file_local).'"'); 
				header('Content-Type: attachment/octet-stream');
				header('Content-Length: '.filesize($file_local));
				header('Pragma: public');
				readfile($file_local);
			}
			$user_msg="_BACKUPSUCCESS";
		} else { 
			$user_msg="_BACKUPFAILNOFILE";
		}
	
	return $user_msg;
}

?>