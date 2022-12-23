// Author Notes:
// This file has been translated from English to Romanian by OptimuS, StormZone & Dorin2oo7 from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","UTF-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Instalare");
define("_STEP","Pasul");
define("_STEP1","Start");
define("_STEP2","Informații");
define("_STEP3","Directoare");
define("_STEP4","Baza de Date");
define("_STEP5","Administrator");
define("_STEP6","Sumar");
define("_STEP7","Terminare");

define("_OF","din");
define("_NEXT","înainte");
define("_BACK","înapoi");
define("_DIRCHECK","Verificarea Directorului");

//step1
define("_WELCOME","Bun Venit în suita de instalare din cadrul AMXBans.");
define("_WELCOME2","Cu ajutorul ei vei fi condus prin procedura de instalare.");
define("_LICENSEAGREE","Accept acordul de licență");

//step2
define("_STEP2DESC","Informații despre setările serverului");
define("_SERVERSETUP","Setările serverului");
define("_REFRESH","Reîncarcă");
define("_VERSION","Versiune");
define("_ON","Pornit");
define("_OFF","Oprit");
define("_SEC","Secunde");
define("_SETRECOMMENDED","Setările intrunesc recomandările.");
define("_SETNOTRECOMMENDED","Nu sunt recomandate, dar ar trebui să functioneze corespunzător.");

//step3
define("_STEP3DESC","Iau informații despre directoare");
define("_STEP3DESC2","In mod normal, scriptul detectează calea automat");
define("_DIRROOT","Calea directorului instalării");
define("_DIRDOCUMENT","Calea");
define("_RECHECK","Re-verifică");
define("_ROOTDIRS","Directoarele Serverului");
define("_OK","OK");
define("_NOTWRITABLE","Directorul nu este inscriptibil, verifică privilegiile!");
define("_SETUPNOTDELETABLE","Fișierul setup.php trebuie să fie șters manual după instalare!");

//step4
define("_STEP4DESC","Iau informațiile despre Baza de Date");
define("_DBSETTINGS","Setările bazei de date");
define("_DBCHECK","Verific datele de acces");
define("_CANTCONNECT","Datele de acces sunt eronate!");
define("_CANTSELECTDB","Baza de date nu a fost găsită!");
define("_DBOK","Accesul la baza de date este corespunzator!");
define("_DBPREVILEGES","Privilegiile utilizatorului Bazei de Date");
define("_HOST","Server");
define("_USER","Nume Utilizator");
define("_PASSWORD","Parolă");
define("_DATABASE","Baza de Date");
define("_TBLPREFIX","Prefixul tabelului");
define("_NOTALLPREVILEGES","Utilizatorul nu are toate privilegiile necesare!");
define("_PREFIXEXISTSV5","O instalare existentă s-a descoperit, nu se poate actualiza!");
define("_PREFIXEXISTSV6","O instalare existentă s-a descoperit, se va actualiza!");

//step5
define("_STEP5DESC","Crearea primului Administrator web");
define("_ADMINSETTINGS","Datele de acces ale Administratorului");
define("_PASSWORD2","Rescrie parolă");
define("_EMAILADR","Adresă de e-mail");
define("_ADMINCHECK","Verifică datele");
define("_PWNOCONFIRM","Parolele nu se potrivesc!");
define("_NOREQUIREDFIELDS","Câmpuri necesare lipsesc!");
define("_ADMINOK","Datele de admin sunt în regulă!");
define("_USERTOSHORT","Nume de utilizator prea scurt (min. 4 caractere)!");
define("_PWTOSHORT","Parolă prea scurtă (min. 4 caractere)!");
define("_NOVALIDEMAIL","Adersa de email nu este validă!");

//step6
define("_STEP6DESC","Sumarul informațiilor colectate");
define("_STEP6DESC2","AMXBans va fi instalat pe baza următoarelor informații");

//step7
define("_STEP7DESC","Progresul instalării");
define("_TABLECREATE","Crearea structurii tabelului");
define("_DEFAULTDATACREATE","Introdu datele necesare");
define("_DEFAULTWEBSETTINGSCREATE","Introdu setările");
define("_DEFAULTUSERMENUCREATE","Setează meniul utilizatorului");
define("_DEFAULTMODULESCREATE","Instalează modul");
define("_WEBADMINCREATE","Creează admin web");
define("_ALREADYEXISTS","Există deja");
define("_CREATED","Creat cu succes");
define("_FAILED","Eșuat");
define("_INSERTED","înregistrat cu succes");
define("_CREATEWEBADMIN","Date admin web");
define("_CREATEUSERLEVEL","Nivel admin web");
define("_CREATEWEBSETTINGS","Site");
define("_CREATEUSERMENU","Meniu utilizator");
define("_FILEEXISTS","Configul există deja!");
define("_FILEOPENERROR","Configul nu a putut fi creat!");
define("_FILESUCCESS","Config creat cu succes!");
define("_MANUALEDIT","Deschide /include/db.config.inc.php și prin copy / paste scrie asta:");
define("_SETUPENDDESC","Fișierul setup.php va fi acum șters și vei fi redirectat către AMXBans!");
define("_SETUPEND","Mergi la AMXBans...");
?>