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

session_start();
	
if(!isset($_POST["bid"]) && !is_numeric($_POST["bid"])) {
	header("Location:index.php");
	exit;
}
$title2 = "_TITLEBANDETAIL";

$bid=(int)$_POST["bid"];
$site=(int)$_POST["site"];
if(!$site) $site=1;

//generate captcha
function new_captcha() {
	$rand = mt_rand(1000000,9999999); 
	$rand = base64_encode($rand); 
	$rand = substr($rand, 0, 7).""; 
	$rand = str_replace("J", "Z", $rand); 
	$rand = str_replace("I", "Y", $rand); 
	$rand = str_replace("j", "z", $rand); 
	$rand = str_replace("i", "y", $rand); 
	$rand = str_replace("0", "B", $rand);
	$rand = str_replace("O", "C", $rand);
	$_SESSION["captcha_code"] = "$rand"; 
}
//create new captcha if needed
if(!(isset($_POST["add_comment"]) || isset($_POST["add_demo"]))){
	new_captcha();
}
//ban edit
if(isset($_POST["edit_ban"]) && isset($_POST["bid"]) && $_SESSION["loggedin"]) {
	//unban checkbox?
	$unban=($_POST["unban"] == "on") ? true : false;

	$ban_length_old=(int)$_POST["ban_length_old"];
	$player_nick=sql_safe($_POST["player_nick"]);
	$player_id=sql_safe($_POST["player_id"]);
	$player_ip=sql_safe($_POST["player_ip"]);
	$ban_type=$_POST["ban_type"];
	$ban_reason=sql_safe($_POST["ban_reason"]);
	$ban_length=(int)$_POST["ban_length"];
	$ban_created=(int)$_POST["ban_created"];
	$edit_reason=sql_safe($_POST["edit_reason"]);
	
	if($unban) {
		$ban_length=-1;
	} else {
		if(!validate_value($player_nick,"name",$msg,1,31,"NICKNAME")) $error[]=$msg;
		if(!validate_value($player_id,"steamid",$msg) && $ban_type=="S") $error[]=$msg;
		if(!validate_value($player_ip,"ip",$msg) && $ban_type=="SI") $error[]=$msg;
		if(!validate_value($ban_reason,"name",$msg,1,100,"REASON")) $error[]=$msg;
	}
	if(!validate_value($edit_reason,"name",$msg,1,255,"COMMENT")) $error[]=_NOEDITREASON;
	if($unban) $edit_reason="Unban: ".$edit_reason;
	
	#if($player_nick=="" || $ban_reason=="" || ($player_id=="" || $player_ip=="")) $error[]="_NOREQUIREDFIELDS";
	
	if(!$error) {
		//save ban edit log
		$query = $mysql->query("INSERT INTO `".$config->db_prefix."_bans_edit` (`bid`,`edit_time`,`admin_nick`,`edit_reason`) 
				VALUES ('".$bid."',UNIX_TIMESTAMP(),'".$_SESSION["uname"]."','".$edit_reason."')"
				) or die ($mysql->error);
		//save it to db
		if($unban) {
			//get ban details
			$ban_row=sql_get_ban_details($bid);
			$player_nick=$ban_row["player_nick"];
			$player_id=$ban_row["player_id"];
			
			$edit_query = "UPDATE `".$config->db_prefix."_bans` SET `ban_length`=(-1), `expired`=1";
		} else {
			$edit_query = "UPDATE `".$config->db_prefix."_bans` SET 
				`player_nick`='".$player_nick."',
				`player_id`='".$player_id."',
				`player_ip`='".$player_ip."',
				`ban_type`='".$ban_type."',
				`ban_reason`='".$ban_reason."'";
				if($ban_length_old <> $ban_length) $edit_query.=", `ban_length`=".$ban_length."";
				if($ban_length==0) {
					$edit_query.=", `expired`=0";
				} else if (($ban_created + $ban_length * 60) < time()) {
					$edit_query.=", `expired`=1"; 
				}else{ 
					$edit_query.=", `expired`=0"; 
				}
		}
		$query = $mysql->query($edit_query." WHERE `bid`=".$bid) 
			or die ($mysql->error);
		$msg_banedit="_BANEDITED";
		log_to_db("Ban edit",(($unban)?"Unban":"Edited ban").": ID ".$bid." (<".sql_safe($player_nick)."> <".sql_safe($player_id).">)");
	}
	$smarty->assign("banedit_error",$error);
}
//ban delete
if(isset($_POST["del_ban_x"]) && isset($_POST["bid"]) && $_SESSION["loggedin"]) {
	//get all uploaded files for the ban and delete it
	$query = $mysql->query("SELECT `id`,`demo_file` FROM `".$config->db_prefix."_files` WHERE `bid`=".$bid) or die ($mysql->error);
	while($result = $query->fetch_object()) {
		if(file_exists("include/files/".$result->demo_file)) {
			//delete the file(s)
			if(file_exists("include/files/".$result->demo_file."_thumb")) {
				unlink("include/files/".$result->demo_file."_thumb");
			}
			if(unlink("include/files/".$result->demo_file)) {
				//if file deleted, remove db entry
				$query2 = $mysql->query("DELETE FROM `".$config->db_prefix."_files` WHERE `id`=".$result->id." LIMIT 1") or die ($mysql->error);
			}
		}
	}
	//delete all comments for the ban
	$query = $mysql->query("DELETE FROM `".$config->db_prefix."_comments` WHERE `bid`=".$bid) or die ($mysql->error);
	//get ban details
	$ban_row=sql_get_ban_details($bid);
	//delete the ban
	$query = $mysql->query("DELETE FROM `".$config->db_prefix."_bans` WHERE `bid`=".$bid." LIMIT 1") or die ($mysql->error);
	log_to_db("Ban edit","Deleted ban: ID ".$bid." (<".sql_safe($ban_row["player_nick"])."> <".sql_safe($ban_row["player_id"]).">)");
	//redirect to start page
	if($query) { header("Location:index.php"); exit; }
}
//comment delete
if(isset($_POST["del_comment_x"]) && isset($_POST["cid"]) && $_SESSION["loggedin"]) {
	$query = $mysql->query("DELETE FROM `".$config->db_prefix."_comments` WHERE `id`=".(int)$_POST["cid"]." LIMIT 1") or die ($mysql->error);
	if($query) $msg_comment="_COMDELETED";
}
//validate input fields for following functions
if(isset($_POST["add_comment"]) || isset($_POST["edit_comment"]) || isset($_POST["edit_demo"]) || isset($_POST["add_demo"])) {
	$name=sql_safe($_POST["name"]);
	if(!validate_value($name,"name",$msg,1,31,"USERNAME")) $error[]=$msg;
	$email=sql_safe($_POST["email"]);
	if(!validate_value($email,"email",$msg)) $error[]=$msg;
	$comment=sql_safe($_POST["comment"]);
	if(!validate_value($comment,"name",$msg,1,255,"COMMENT")) $error[]=$msg;
}
//comment add
if(isset($_POST["add_comment"]) && $bid) {
	//save it to db
	if ((($_SESSION["captcha_code"] !=0) || ($_POST["verify"] != $_SESSION["captcha_code"])) && $_SESSION["loggedin"]!=true){ 
		 $error[]="_WRONGCAPTCHA";
	}
	if(!$error) {
		$query = $mysql->query("INSERT INTO `".$config->db_prefix."_comments` (`name`,`comment`,`email`,`addr`,`date`,`bid`) 
				VALUES ('".$name."','".$comment."','".$email."','".$_SERVER["REMOTE_ADDR"]."',UNIX_TIMESTAMP(),".$bid.")"
				) or die ($mysql->error);
		$msg_comment="_COMADDED";
	}
	new_captcha();
	$smarty->assign("comment_layer",1);
	$smarty->assign("comment_error",$error);
}
//comment edit
if(isset($_POST["edit_comment"]) && isset($_POST["cid"]) && $_SESSION["loggedin"]) {
	if(!$error) {
		//save it to db
		$query = $mysql->query("UPDATE `".$config->db_prefix."_comments` SET `comment`='".$comment."',`name`='".$name."',`email`='".$email."' WHERE `id`=".(int)$_POST["cid"] 
				) or die ($mysql->error);
		$msg_comment="_COMEDITED";
	}
	$smarty->assign("comment_error",$error);
}
//file delete
if(isset($_POST["del_demo_x"]) && isset($_POST["did"]) && $_SESSION["loggedin"]) {
	//get the file name first
	$query = $mysql->query("SELECT `demo_file` FROM `".$config->db_prefix."_files` WHERE `id`=".(int)$_POST["did"]." LIMIT 1") or die ($mysql->error);
	if($query->num_rows) $file = $query->fetch_row()[0];
	//delete thumb if exists
	if(file_exists("include/files/".$file."_thumb") && $file) {
		unlink("include/files/".$file."_thumb");
	}
	//delete file
	if(file_exists("include/files/".$file) && $file) {
		//delete the file
		if(unlink("include/files/".$file)) {
			//if file deleted, remove db entry
			$query = $mysql->query("DELETE FROM `".$config->db_prefix."_files` WHERE `id`=".(int)$_POST["did"]." LIMIT 1") or die ($mysql->error);
			if($query) $msg_demo="_FILEDELSUCCESS";
		} else { $msg_demo="_FILEDELFAILED"; }
	} else { $msg_demo="_FILENOTFOUND"; }
}
//file edit
if(isset($_POST["edit_demo"]) && isset($_POST["did"]) && $_SESSION["loggedin"]) {
	#if($name=="" || $email=="" || $comment=="") $error[]="_NOREQUIREDFIELDS";
	if(!$error) {
		//save it to db
		$query = $mysql->query("UPDATE `".$config->db_prefix."_files` SET `comment`='".$comment."',`name`='".$name."',`email`='".$email."' WHERE `id`=".(int)$_POST["did"] 
				) or die ($mysql->error);
		$msg_demo="_FILEEDITED";
	}
	$smarty->assign("upload_error",$error);
}
//file add
if(isset($_POST["add_demo"]) && isset($_FILES['filename']['tmp_name']) && ($config->demo_all || $_SESSION["loggedin"])) {
	global $config;
	
	$real_file=$mysql->escape_string($_FILES['filename']['name']);
	
	if ((($_SESSION["captcha_code"] !=0) || ($_POST["verify"] != $_SESSION["captcha_code"])) && $_SESSION["loggedin"]!=true){ 
		 $error[]="_WRONGCAPTCHA"; 
	} 
	//check if filetype allowed
	$types=explode(",",$config->file_type);
	if($real_file=="") {
		$error[]="_FILENOFILE";
	} else {
		$file_type=strtolower(substr(strrchr($real_file, '.'),1)); 
		if(!in_array($file_type,$types)) $error[]="_FILETYPENOTALLOWED";
	}
	//check filesize
	if($_FILES['filename']['size'] >= ($config->max_file_size*1024*1024)) $error[]="_FILETOBIG";
	//move file to dir and generate thumb if needed
	if(!$error) {
		$temp_file=md5(microtime().uniqid(rand(),true))."_".$bid;
		if(move_uploaded_file($_FILES['filename']['tmp_name'], "include/files/".$temp_file)) {
			if(extension_loaded("gd")) mkthumb($temp_file);
		} else {
			$error[]="_FILEUPLOADFAIL";
		}
	}
	//save file to db
	if(!$error) {
		//save it to db
		$query = $mysql->query("INSERT INTO `".$config->db_prefix."_files` (`upload_time`,`down_count`,`bid`,`demo_file`,`demo_real`,`comment`,`name`,`email`,`file_size`,`addr`) 
				VALUES (UNIX_TIMESTAMP(),0,".$bid.",'".$temp_file."','".$real_file."','".$comment."','".$name."','".$email."',".$_FILES['filename']['size'].",'".$_SERVER["REMOTE_ADDR"]."')"
				) or die ($mysql->error);
		$msg_demo="_FILEUPLOADSUCCESS";
	}
	new_captcha();
	$smarty->assign("upload_error",$error);
	$smarty->assign("demo_layer",1);
}
//download file
if(isset($_POST["down_demo_x"]) && isset($_POST["did"])) {
	global $config;
	//get file name from db
	$query = $mysql->query("SELECT `demo_file`,`demo_real`,`file_size` FROM `".$config->db_prefix."_files` WHERE `id`=".(int)$_POST["did"]." LIMIT 1") or die ($mysql->error);
	$result = $query->fetch_object();
	$file_local=$config->path_root."/include/files/".$result->demo_file;
	$file_real=$result->demo_real;
	$file_size=$result->file_size;
	
	if(!file_exists($file_local)) {
		$error[]="_FILENOTAVAILABLE";
	}
	if(!$error) {
		//add download count
		$query = $mysql->query("UPDATE `".$config->db_prefix."_files` SET `down_count`=`down_count`+1 WHERE `id`=".(int)$_POST["did"]) or die ($mysql->error);
		if(ini_get('zlib.output_compression')) 
			ini_set('zlib.output_compression', 'Off');
		//send header for download
		#header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		#header('Content-Disposition: attachment; filename="'.basename($file_real).'"'); 
		#header('Content-Type: attachment/octet-stream');
		#header('Content-Type: application/download');
		#header('Content-Length: '.filesize($file_local));
		#header('Pragma: public');
		#set_time_limit(0);
		#readfile($file_local);
		
		$file = fopen("$file_local","r");  
		header("Content-Type: application/download");  
		header('Content-Disposition: attachment; filename="'.basename($file_real).'"');  
		fpassthru($file);  
		fclose($file);  
	
		unset($_POST["down_demo_x"]);
	}
	$smarty->assign("upload_error",$error);
}

//get ban details
$ban_details=sql_get_ban_details($bid);
//aktive bans holen
$activ_count=0;
$ban_details_activ=sql_get_ban_details_activ($ban_details["player_id"],$activ_count,$bid);
//abgelaufene bans holen
$exp_count=0;
$ban_details_exp=sql_get_ban_details_exp($ban_details["player_id"],$exp_count,$bid);
//ban edits holen
$query=$mysql->query("SELECT * FROM ".$config->db_prefix."_bans_edit WHERE bid=".$bid);
while($row=$query->fetch_assoc()) {
	$edit_count++;
	$ban_details_edits[]=$row;
}
//generate steamcomid
if(!empty($ban_details["player_id"])) {
	$ban_details["player_comid"]=GetFriendId($ban_details["player_id"]);;
}

$smarty->assign("ban_detail",$ban_details);
$smarty->assign("ban_details_activ",$ban_details_activ);
$smarty->assign("ban_details_exp",$ban_details_exp);
$smarty->assign("ban_details_edits",$ban_details_edits);
$smarty->assign("edit_count",$edit_count);
$smarty->assign("activ_count",$activ_count);
$smarty->assign("exp_count",$exp_count);
$smarty->assign("type_output",array("SteamID","SteamID & IP"));
$smarty->assign("type_values",array("S","SI"));
$smarty->assign("site",$site);

//get comments
$comments_count=0;
$comments=sql_get_comments($bid,$comments_count);
$smarty->assign("comments",$comments);
$smarty->assign("comments_count",$comments_count);

//get files
$demos_count=0;
$demos=sql_get_files($bid,$files_count);
$smarty->assign("demos",$demos);
$smarty->assign("demos_count",$files_count);

$smarty->assign("msg_banedit",$msg_banedit);
$smarty->assign("msg_demo",$msg_demo);
$smarty->assign("msg_comment",$msg_comment);

?>