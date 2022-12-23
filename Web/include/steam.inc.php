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

//http://forums.alliedmods.net/showthread.php?t=60899
//improvements to use bcmath or gmp extension by |PJ|ShOrTy

function GetFriendID($pszAuthID)
{
	$iServer = "0";
    $iAuthID = "0";
	
	$szAuthID = $pszAuthID;
	
	$szTmp = strtok($szAuthID, ":");
	
	while(($szTmp = strtok(":")) !== false)
    {
        $szTmp2 = strtok(":");
        if($szTmp2 !== false)
        {
            $iServer = $szTmp;
            $iAuthID = $szTmp2;
        }
    }
    if($iAuthID == "0")
        return false;
		
	if(extension_loaded('bcmath') == 1) {
		// calc communityid with bcmath
		$i64friendID = bcmul($iAuthID, "2");
		$i64friendID = bcadd($i64friendID, bcadd("76561197960265728", $iServer, 0), 0);
		return $i64friendID;
	}else if(extension_loaded('gmp') == 1) {
		// calc communityid with gmp
		$i64friendID = gmp_mul($iAuthID, "2");
		$i64friendID = gmp_add($i64friendID, gmp_add("76561197960265728", $iServer));
		return gmp_strval($i64friendID);
	}else {
		$i64friendID = Mul(strval($iAuthID), "2");
		$i64friendID = Add(strval($i64friendID), Add("76561197960265728", strval($iServer)));
		return $i64friendID;
	}
	return false;
}
function GetAuthID($i64friendID)
{
	$tmpfriendID = $i64friendID;
	$iServer = "1";
	if(extension_loaded('bcmath') == 1) {
		//decode communityid with bcmath
		if(bcmod($i64friendID, "2") == "0") $iServer = "0";
		$tmpfriendID = bcsub($tmpfriendID,$iServer);
		if(bccomp("76561197960265728",$tmpfriendID) == -1)
			$tmpfriendID = bcsub($tmpfriendID,"76561197960265728");
		$tmpfriendID = bcdiv($tmpfriendID, "2");
		return ("STEAM_0:" . $iServer . ":" . $tmpfriendID);
	}else if(extension_loaded('gmp') == 1) {
		//decode communityid with gmp
		if(gmp_mod($i64friendID, "2") == "0") $iServer = "0";
		$tmpfriendID = gmp_sub($tmpfriendID,$iServer);
		if(gmp_cmp("76561197960265728",$tmpfriendID) == -1)
			$tmpfriendID = gmp_sub($tmpfriendID,"76561197960265728");
		$tmpfriendID = gmp_div($tmpfriendID, "2");
		return ("STEAM_0:" . $iServer . ":" . gmp_strval($tmpfriendID));
	}
	return false;
}
function Add($Num1,$Num2) { 
	// check if they're valid positive numbers, extract the whole numbers and decimals 
	if(!preg_match("/^\+?(\d+)(\.\d+)?$/",$Num1,$Tmp1)|| 
		!preg_match("/^\+?(\d+)(\.\d+)?$/",$Num2,$Tmp2)) return '0'; 

	// this is where the result is stored 
	$Output=array(); 

	// remove ending zeroes from decimals and remove point 
	$Dec1=isset($Tmp1[2])?rtrim(substr($Tmp1[2],1),'0'):''; 
	$Dec2=isset($Tmp2[2])?rtrim(substr($Tmp2[2],1),'0'):''; 

	// calculate the longest length of decimals 
	$DLen=max(strlen($Dec1),strlen($Dec2)); 

	// remove leading zeroes and reverse the whole numbers, then append padded decimals on the end 
	$Num1=strrev(ltrim($Tmp1[1],'0').str_pad($Dec1,$DLen,'0')); 
	$Num2=strrev(ltrim($Tmp2[1],'0').str_pad($Dec2,$DLen,'0')); 

	// calculate the longest length we need to process 
	$MLen=max(strlen($Num1),strlen($Num2)); 

	// pad the two numbers so they are of equal length (both equal to $MLen) 
	$Num1=str_pad($Num1,$MLen,'0'); 
	$Num2=str_pad($Num2,$MLen,'0'); 

	// process each digit, keep the ones, carry the tens (remainders) 
	for($i=0;$i<$MLen;$i++) { 
		$Sum=((int)$Num1{$i}+(int)$Num2{$i}); 
		if(isset($Output[$i])) $Sum+=$Output[$i]; 
			$Output[$i]=$Sum%10; 
		if($Sum>9) $Output[$i+1]=1; 
	} 

	// convert the array to string and reverse it 
	$Output=strrev(implode($Output)); 

	return($Output); 
} 
function Mul($Num1='0',$Num2='0') {
	// check if they're both plain numbers
	if(!preg_match("/^\d+$/",$Num1)||!preg_match("/^\d+$/",$Num2)) return(0);

	// remove zeroes from beginning of numbers
	for($i=0;$i<strlen($Num1);$i++) if(@$Num1{$i}!='0') {$Num1=substr($Num1,$i);break;}
	for($i=0;$i<strlen($Num2);$i++) if(@$Num2{$i}!='0') {$Num2=substr($Num2,$i);break;}

	// get both number lengths
	$Len1=strlen($Num1);
	$Len2=strlen($Num2);

	// $Rema is for storing the calculated numbers and $Rema2 is for carrying the remainders
	$Rema=$Rema2=array();

	// we start by making a $Len1 by $Len2 table (array)
	for($y=$i=0;$y<$Len1;$y++)
	for($x=0;$x<$Len2;$x++)
	  // we use the classic lattice method for calculating the multiplication..
	  // this will multiply each number in $Num1 with each number in $Num2 and store it accordingly
	  @$Rema[$i++%$Len2].=sprintf('%02d',(int)$Num1{$y}*(int)$Num2{$x});

	// cycle through each stored number
	for($y=0;$y<$Len2;$y++)
		for($x=0;$x<$Len1*2;$x++)
			// add up the numbers in the diagonal fashion the lattice method uses
			@$Rema2[Floor(($x-1)/2)+1+$y]+=(int)$Rema[$y]{$x};

	// reverse the results around
	$Rema2=array_reverse($Rema2);

	// cycle through all the results again
	for($i=0;$i<count($Rema2);$i++) {
		// reverse this item, split, keep the first digit, spread the other digits down the array
		$Rema3=str_split(strrev($Rema2[$i]));
	for($o=0;$o<count($Rema3);$o++)
		if($o==0) @$Rema2[$i+$o]=$Rema3[$o];
		else @$Rema2[$i+$o]+=$Rema3[$o];
	}
	// implode $Rema2 so it's a string and reverse it, this is the result!
	$Rema2=strrev(implode($Rema2));

	// just to make sure, we delete the zeros from the beginning of the result and return
	while(strlen($Rema2)>1&&$Rema2{0}=='0') $Rema2=substr($Rema2,1);

	return($Rema2);
}
?>
