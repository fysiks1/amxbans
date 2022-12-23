// Author Notes:
// This file has been translated from English to Lithuanian by Ramiax from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Instaliacija");
define("_STEP","Žingsnis");
define("_STEP1","Pradžia");
define("_STEP2","Informacija");
define("_STEP3","Direktorijos");
define("_STEP4","Duomenų bazė");
define("_STEP5","Administratorius");
define("_STEP6","Santrauka");
define("_STEP7","Pabaiga");

define("_OF","iš");
define("_NEXT","toliau");
define("_BACK","atgal");
define("_DIRCHECK","Direktorijų patikrinimas");

//step1
define("_WELCOME","Sveiki atvykę į AMXBans Instaliacijos-Įrankį.");
define("_WELCOME2","Su jo pagalba tu būsi pravestas per Instaliacijos-Procesą.");
define("_LICENSEAGREE","Aš sutinku su Licenzijos sutartimi");

//step2
define("_STEP2DESC","Informacija iš serverio nustatymų");
define("_SERVERSETUP","Serverio nustatymai");
define("_REFRESH","Atnaujinti");
define("_VERSION", "Versija");
define("_ON", "Įjungta");
define("_OFF", "Išjugta");
define("_SEC", "Sekundės");
define("_SETRECOMMENDED","Nustatymai atitinka rekomendacijas");
define("_SETNOTRECOMMENDED","Nerekomenduojama, bet turėtų veikti");

//step3
define("_STEP3DESC","Gaunama direktorijų informacija");
define("_STEP3DESC2","Paprastai, šitas skriptas randa kelius automatiškai");
define("_DIRROOT","Root kelias");
define("_DIRDOCUMENT","URL kelias");
define("_RECHECK","Pertikrinti");
define("_ROOTDIRS","Serverio direktorijos");
define("_OK","Gerai");
define("_NOTWRITABLE","Direktorija neįrašoma, prašome patikrinti teises!");
define("_SETUPNOTDELETABLE","Failas setup.php turi būti ištrintas rankiniu būdu po instaliacijos!");

//step4
define("_STEP4DESC","Gaunama duomenų bazės informacija");
define("_DBSETTINGS","Duomenų bazės nustatymai");
define("_DBCHECK","Patikrinti priėjimo duomenis");
define("_CANTCONNECT","Priėjimo duomenys neteisingi!");
define("_CANTSELECTDB","Duomenų bazė nerasta!");
define("_DBOK","Priėjimo duomenys tinkami!");
define("_DBPREVILEGES","Vartotojo duomenų bazės privilegijos");
define("_HOST","Serveris");
define("_USER","Prisijungimo vardas");
define("_PASSWORD","Slaptažodis");
define("_DATABASE","Duomenų bazė");
define("_TBLPREFIX","Lentelės prefiksas");
define("_NOTALLPREVILEGES","Naudotojas neturi visų reikiamų privilegijų!");
define("_PREFIXEXISTSV5","Egzistuojanti instaliacija rasta, atnaujinimas negalimas!");
define("_PREFIXEXISTSV6","Egzistuojanti instaliacija rasta, ji dabar bus atnaujinama!");

//step5
define("_STEP5DESC","Kuriamas pirmasis puslapio administratorius");
define("_ADMINSETTINGS","Administratoriaus priėimo duomenys");
define("_PASSWORD2","Pakartokite slaptažodį");
define("_EMAILADR","El. Pašto adresas");
define("_ADMINCHECK","Patikrinti duomenis");
define("_PWNOCONFIRM","Slaptažodžiai neatininka vienas kito!");
define("_NOREQUIREDFIELDS","Reikiami laukai tušti!");
define("_ADMINOK","Administratoriaus duomenys tinkami!");
define("_USERTOSHORT","Naudotojo vardas pertrumpas (mažiausiai 4 simboliai)!");
define("_PWTOSHORT","Slaptažodis pertrumpas (mažiausiai 4 simboliai)!");
define("_NOVALIDEMAIL","Netinkamas El. Pašto adresas!");

//step6
define("_STEP6DESC","Santrauka iš surinktų duomenų");
define("_STEP6DESC2","AMXBans bus instaliuoti su tokiais duomenimis");

//step7
define("_STEP7DESC","Instaliacijos progresas");
define("_TABLECREATE","Kuriama lentelių struktūra");
define("_DEFAULTDATACREATE","Įrašykite reikiamus duomenis");
define("_DEFAULTWEBSETTINGSCREATE","Irasykite nustatymus");
define("_DEFAULTUSERMENUCREATE","Nustatykite naudotojo meniu");
define("_DEFAULTMODULESCREATE","Instaliuoti modifikaciją");
define("_WEBADMINCREATE","Sukurti puslapio administratorių");
define("_ALREADYEXISTS","Jau egzistuoja");
define("_CREATED","Sėkmingai sukurta");
define("_FAILED","Nepavyko");
define("_INSERTED","Sėkmingai užregistruota");
define("_CREATEWEBADMIN","Puslapio administratoriaus duomenys");
define("_CREATEUSERLEVEL","Puslapio admnistratoriaus lygis");
define("_CREATEWEBSETTINGS","Puslapis");
define("_CREATEUSERMENU","Naudotojo meniu");
define("_FILEEXISTS","Konfiguracija jau egzistuoja!");
define("_FILEOPENERROR","Konfiguracija negali būti sukurta!");
define("_FILESUCCESS","Konfiguracija sukurta!");
define("_MANUALEDIT","Atidarykite /include/db.config.inc.php ir nukopijuokite šitą tekstą:");
define("_SETUPENDDESC","setup.php bus dabar ištrintas ir tu būsi perkeltas į AMXBans!");
define("_SETUPEND","Eiti į AMXBans...");
?>