// Author Notes:
// This file has been translated from English to Polish by Szyfrant (kio.) from www.KarczmaPodKepa.pl

// This is the Installation Language File

// Definicja Polskich Znaków:
// ¹ = &#261
// Ê = &#280
// ê = &#281
// Œ = &#346
// œ = &#347
// æ = &#263
// ñ = &#324
// ¿ = &#380
// Ÿ = &#378
// ó = &#243
// ³ = &#322

<?php
//encoding and locale
define("_ENCODING","ISO-8859-2"); //ISO-8859-2,utf-8

define("_INSTALLATION","Instalacja");
define("_STEP","Krok");
define("_STEP1","Start");
define("_STEP2","Informacje");
define("_STEP3","Katalogi");
define("_STEP4","Baza Danych");
define("_STEP5","Administrator");
define("_STEP6","Podsumowanie");
define("_STEP7","Ko&#324czenie Instalacji");

define("_OF","z");
define("_NEXT","Dalej");
define("_BACK","Wstecz");
define("_DIRCHECK","Sprawd&#378 uprawnienia katalog&#243w ");

//step1
define("_WELCOME","Witamy w kreatorze instalacyjnym AMXBans.");
define("_WELCOME2","Ten kreator pomo&#380e Ci przeprowadzi&#263 poprawny proces instalacji AMXBans.");
define("_LICENSEAGREE","Akceptuj&#281 warunki licencji i jej postanowienia.");

//step2
define("_STEP2DESC","Informacje ustawie&#324 serwera");
define("_SERVERSETUP","Ustawienia serwera");
define("_REFRESH","Od&#347wie&#380");
define("_VERSION","Wersja");
define("_ON","W&#322&#261czone");
define("_OFF","Wy&#322&#261czone");
define("_SEC","Sekund(y)");
define("_SETRECOMMENDED","Prawid&#322owe (Zalecane)");
define("_SETNOTRECOMMENDED","Nie zalecane, ale powinno dzia&#322a&#263");

//step3
define("_STEP3DESC","Wprowadzenie do katalogu.");
define("_STEP3DESC2","Zazwyczaj &#347cie&#380ki wykrywane s&#261 AUTOMATYCZNIE");
define("_DIRROOT","&#346cie&#380ka G&#322&#243wnego Katalogu ");
define("_DIRDOCUMENT","&#346cie&#380ka URL");
define("_RECHECK","Sprawd&#378 ponownie");
define("_ROOTDIRS","Katalogi Serwera");
define("_OK","Zapisywalny");
define("_NOTWRITABLE","Katalog ma z&#322e uprawnienia, sprawd&#378 CHMODY'y");
define("_SETUPNOTDELETABLE","Plik setup.php musi zosta&#263 R&#280CZNIE usuni&#281ty po instalacji!");

//step4
define("_STEP4DESC","Wprowad&#378 dane bazy.");
define("_DBSETTINGS","Ustawienia Bazy");
define("_DBCHECK","Sprawd&#378 dane dost&#281pu");
define("_CANTCONNECT","Dane dost&#281pu - B&#322&#281dne!");
define("_CANTSELECTDB","Baza nie znaleziona!");
define("_DBOK","Dane dost&#281pu - OK!");
define("_DBPREVILEGES","Przywileje u&#380ytkownik&#243w");
define("_HOST","Adres HOSTA Bazy");
define("_USER","Nazwa u&#380ytkownika");
define("_PASSWORD","Has&#322o");
define("_DATABASE","Nazwa Bazy");
define("_TBLPREFIX","Prefiks Tabeli");
define("_NOTALLPREVILEGES","U&#380ytkownik nie posiada wymaganych przywilej&#243w!");
define("_PREFIXEXISTSV5","Wykryto instalacje AMXBans. Nie mo&#380na uaktualni&#263!");
define("_PREFIXEXISTSV6","Wykryto instalacje AMXBans. AMXBans zostanie uaktualniony.");

//step5
define("_STEP5DESC","Tworzenie G&#322&#243wnego Konta Admina");
define("_ADMINSETTINGS","Ustawienia dost&#281pu Admina");
define("_PASSWORD2","Wpisz has&#322o ponownie.");
define("_EMAILADR","Adres E-Mail");
define("_ADMINCHECK","Sprawd&#378 dane");
define("_PWNOCONFIRM","Has&#322a nie pasuj&#261 do siebie!");
define("_NOREQUIREDFIELDS","Wymagane pole jest PUSTE!");
define("_ADMINOK","Dane Admina - Prawid&#322owe!");
define("_USERTOSHORT","Nazwa u&#380ytkownika jest za kr&#243tka (min. 4 Znaki)!");
define("_PWTOSHORT","Has&#322o jest za kr&#243tkie (min. 4 Znaki)!");
define("_NOVALIDEMAIL","Nieprawid&#322owy adres E-Mail!");

//step6
define("_STEP6DESC","Podsumowanie Danych");
define("_STEP6DESC2","AMXBans zostanie zainstalowany z nast&#281puj&#261cych danych.");

//step7
define("_STEP7DESC","Post&#281p instalacji");
define("_TABLECREATE","Tworzenie struktur tabeli.");
define("_DEFAULTDATACREATE","Podawanie wymaganych danych");
define("_DEFAULTWEBSETTINGSCREATE","Wprowadzanie ustawie&#324");
define("_DEFAULTUSERMENUCREATE","Ustawianie Menu u&#380ytkownika");
define("_DEFAULTMODULESCREATE","Instalacja modu&#322u");
define("_WEBADMINCREATE","Tworzenie Konta G&#322&#243wnego");
define("_ALREADYEXISTS","Ju&#380 istnieje");
define("_CREATED","Stworzono");
define("_FAILED","Niepowodzenie");
define("_INSERTED","Rejestracja zako&#324czona");
define("_CREATEWEBADMIN","Dane G&#322&#243wnego konta");
define("_CREATEUSERLEVEL","Poziom G&#322&#243wnego Konta");
define("_CREATEWEBSETTINGS","Strona www");
define("_CREATEUSERMENU","Menu u&#380ytkownika");
define("_FILEEXISTS","Config ju&#380 istnieje!");
define("_FILEOPENERROR","Config nie zosta&#322 utworzony!");
define("_FILESUCCESS","Config utworzony!");
define("_MANUALEDIT","Otw&#243rz plik /include/db.config.inc.php skopiuj i wklej to:");
define("_SETUPENDDESC","Setup.php zostanie usuni&#281ty, a ty zostaniesz przekierowany do AMXBans :) !");
define("_SETUPEND","Id&#378 do AMXBans...");
?>