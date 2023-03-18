<?php
	session_start();
	if( !isset($_SESSION['loggedin']) )
	{
		$_SESSION['loggedin'] = false;
	}
	if( !isset($_SESSION['loginfailed']) )
	{
		$_SESSION['loginfailed'] = 0;
	}
	if( !isset($_SESSION['bans_delete']) )
	{
		$_SESSION['bans_delete'] = false;
	}
	if( !isset($_SESSION['ip_view']) )
	{
		$_SESSION['ip_view'] = false;
	}
	if( !isset($_SESSION['lang']) )
	{
		$_SESSION['lang'] = "";
	}
	if( !isset($_SESSION['bans_edit']) )
	{
		$_SESSION['bans_edit'] = "";
	}
?>
