// Author Notes:
// This file has been translated from English to Polish by MisieQ and Szyfrant from www.Grajkownia.com & www.KarczmaPodKepa.pl and MmikiM from www.CsMods.pl

// This is the General Language File

// Definicja Polskich Znaków:
// ą = &#261
// Ę = &#280
// ę = &#281
// Ś = &#346
// ś = &#347
// ć = &#263
// ń = &#324
// ż = &#380
// ź = &#378
// ó = &#243
// ł = &#322

<?php
//encoding and locale
define("_ENCODING","ISO-8859-2");
define("_LOCALE","pl_PL");

//default
define("_SHORTSECONDS","Sek.");
define("_NOACCESS","Nie masz uprawnien do przegl&#261dania tej strony!");
define("_LOADTIME","Strona wygenerowana w");
define("_BANSINDB","Ban&#243w w Bazie");
define("_BY","przez");
define("_OR","lub");
define("_ON","W&#322&#261czony");
define("_OFF","Wy&#322&#261czony");
define("_YES","Tak");
define("_NO","Nie");
define("_OWN","wlasny");
define("_CLEAR","Wyczy&#347&#263");
define("_OPENSTEAMCOMSITE","Odwied&#378 stron&#281 STEAM-Community");
define("_ADMINAREA","Strefa Admin&#243w");
define("_NOSITE","Strona niedost&#281pna!");
define("_DELETE","Usu&#324");
define("_ADD","Dodaj");
define("_EDIT","Edytuj");
define("_DEFAULTLANG","Domy&#347lny J&#281zyk");
define("_OTHER","Inne");
define("_VIEWIP","poka&#380 IP");
define("_LEVEL","Poziom");
define("_DETAILS","Poka&#380 szczeg&#243&#322y");
define("_SYSTEMSETTINGS","Ustawienia Systemowe");
define("_VIEWSETTINGS","Podgl&#261d");
define("_COMMENTSETTINGS","Ustawienia Komenatarzy");
define("_FILESETTINGS","Ustawienia Plik&#243w");
define("_BANLISTSETTINGS","Ustawienia Listy Ban&#243w");
define("_CONFIGURATION","Konfiguracja");
define("_REPAIR","Napraw");
define("_AUTO","Automatycznie");
define("_TEST","Test");
//user menu
define("_HOME","Strona G&#322&#243wna");
define("_BANLIST","Lista Ban&#243w");
define("_SEARCH","Szukaj");
define("_SERVER","Serwer");
//info amxaccess
define("_INFO_ACCESS","Informacje na temat dost&#281pu");
define("_ACCESSFLAGS","Flagi dost&#281pu");
define("_ACCESSPERMS","Zezwolenia dost&#281pu");
define("_ACCESS_FLAGS""a - Immunitet (Nie mo&#380na by&#263 wykopanym/zbanowanym/zg&#322adzonym/uderzonym itp.)<br />b - Rezerwacja (mo&#380na do&#322&#261czyc na zarezerwowane miejsca)<br />c - Komenda amx_kick<br />d - Komendy amx_ban i amx_unban<br />e - Komendy amx_slay i amx_slap<br />f - Komenda amx_map<br />g - Komenda amx_cvar (nie wszystkie cvary b&#281d&#261 dost&#281pne)<br />h - Komenda amx_cfg<br />i - amx_chat i inne komendy rozmowy<br />j - amx_vote i inne komendy g&#322osowan<br />k - Dost&#281p do sv_password cvar (przez komende amx_cvar )<br />l - Dost&#281p do komend amx_rcon i rcon_password cvar (przez komendy amx_cvar )<br />m - W&#322asny poziom A (dla dodanych plugin&#243w)<br />n - W&#322asny poziom B<br />o - W&#322asny poziom C<br />p - W&#322asny poziom D<br />q - W&#322asny poziom E<br />r - W&#322asny poziom F<br />s - W&#322asny poziom G<br />t - W&#322asny poziom H<br />u - Dost&#281p do menu<br />z - U&#380ytkownik (nie admin)");
define("_FLAG_FLAGS","a - Kickuje gracza przy podaniu z&#322ego has&#322a<br />b - Tag klanowy<br />c - Admin na SteamID<br />d - Admin na IP<br />e - Has&#322o nie jest sprawdzane (tylko Nick/IP/SteamID)<br />k - Nick lub Tag jest sprawdzany pod wzgled&#281m wielko&#347ci liter.");
define("_ADDADMINTOSERVERS","Dodaj admina na serwer");
define("_WITHSTATICBANTIME","ze statystycznym czasem bana");
//main header
define("_LOGGED","Zalogowany jako");
define("_NOTLOGGED","Nie zalogowany");
define("_LOGOUT","Wyloguj");
define("_LOGIN","Zaloguj");
define("_MENU","Menu");
//ban list
define("_DATE","Data");
define("_PLAYER","Gracz");
define("_ADMIN","Admin");
define("_REASON","Pow&#243d Bana");
define("_LENGHT","D&#322ugo&#347&#263");
define("_SITE","Strona");
define("_BANS","Bany");
define("_BL_COMMENTS","Komentarze");
define("_BL_FILES","Pliki");
define("_BL_KICKS","Kicki");
define("_TO","do");
define("_YEAR","Rok");
define("_YEARS","Lat(a)");
define("_MONTH","Miesi&#261c");
define("_MONTHS","Miesi&#261ce");
define("_WEEK","Tydzie&#324");
define("_WEEKS","Tygodni(e)");
define("_DAY","Dzie&#324");
define("_DAYS","Dni");
define("_HOUR","Godzina");
define("_HOURS","Godzin(y)");
define("_MIN","Minut(y)");
define("_MINS","Minut(y)");
define("_OF","z");
define("_REMAINING","pozosta&#322o");
//ban list details
define("_PERMANENT","Na zawsze");
define("_BANDETAILS","Szczeg&#243&#322y bana");
define("_STEAMID","SteamID");
define("_STEAMCOMID","SteamCommunity ID");
define("_NOTAVAILABLE","Niedost&#281pny");
define("_NOSTEAMID","brak STEAM-ID");
define("_STEAMID&IP","SteamID lub IP");
define("_HIDDEN","Ukryty");
define("_INVOKED","Wykonano");
define("_BANLENGHT","D&#322ugo&#347&#263 Bana");
define("_EXPIRES","Wygasa");
define("_NOTAPPLICABLE","Nie okre&#347lono");
define("_ALREADYEXP","ju&#380 wygas&#322");
define("_IP","Adres IP");
define("_BANTYPE","Typ Bana");
define("_BANBY","Zbanowny przez");
define("_BANON","Zbanowany na");
define("_FILE_TOBIG","Plik jest za du&#380y!");
define("_FILE_TYPENOTALLOWED","Ten typ pliku jest niedozwolony!");
define("_FROM","z");
define("_DOWNLOAD","Pobierz");
define("_DOWNLOADS","Pobrania");
define("_FILE","Plik");
define("_NEWFILE","Nowy Plik");
define("_COMMENT","Komentarz");
define("_COMMENTS","Komentarzy");
define("_NEWCOMMENT","Nowy Komentarz");
define("_NOCOMMENTS","Brak Komentarzy");
define("_BACK","wr&#243c");
define("_TIP_EDIT","Edytuj");
define("_TIP_DEL","Usu&#324");
define("_TIP_DOWNLOAD","Pobierz");
define("_TIP_BACK","Wr&#243&#263");
define("_TIP_SENDMAIL","Wy&#347lij E-Mail");
define("_EMAIL","E-Mail");
define("_FILEUPLOAD","Dodaj Plik");
define("_UPLOAD","Dodaj");
define("_ENTRYEDIT","Edytuj Wpis");
define("_EDITBAN","Edytuj bana");
define("_TOTALEXPBANS","Wszystkie wygas&#322e bany");
define("_EDITCOMMENT","Edytuj Komentarz");
define("_ADDCOMMENT","Dodaj Komentarz");
define("_NOFILES","Brak Plik&#243w");
define("_BANDETAILSEDITS","Zmieniane wcze&#347niej");
define("_EDITREASON","Przyczna edycji");
define("_UNBANPLAYER","Odbanuj");
define("_UNBANNED","Odbanowany");
define("_BANHISTORY","Historia Ban&#243w");
//Login
define("_USERNAME","U&#380ytkownik");
define("_PASSWORD","Has&#322o");
define("_REMEMBERME","Zapami&#281taj mnie");
define("_LOGINBLOCKED","U&#380ytkownik zablokowany!");
define("_LOGINFAILEDPW","Sprawd&#378 Has&#322o!");
define("_LOGINFAILED","Logowanie nieudane!");
define("_LOGINTRY","Pr&#243ba");
define("_SEC","Sekunda");
define("_SECS","Sekund(y)");
//admins amxx
define("_AMXADMINSETTINGS"," Zarz&#261dzanie Adminami AMXModX ");
define("_NAME","Nazwa");
define("_NICKNAME","Nick");
define("_MANAGEAMXADMINS","Administratorzy AMX Mod X");
define("_ADDAMXADMINS","Dodaj Administratora AMX Mod X");
define("_ACCESS","Uprawnienia");
define("_FLAGS","Flagi");
define("_SETTINGS","Ustawienia");
define("_SAVE","Zapisz");
define("_EVER","Na Zawsze");
define("_SHOWINADMINLIST","Widoczny na li&#347cie Admin&#243w");
define("_ADMINVALIDITY","Admin aktywny przez");
define("_ADMINEXPIRATION","Wa&#380ny przez");
define("_CREATED","Utworzony");
define("_EXTENDWITH","Rozszerzony o");
define("_STEAMIDIPNAME","SteamID / IP / Nazwa");
//server
define("_SERVERSETTINGS","Ustawienia Serwera");
define("_MOD","Mod");
define("_RCONPW","Has&#322o RCON");
define("_DEL","Usu&#324");
define("_MOTDURL","Link do MOTD");
define("_MOTDDELAY","Op&#243&#378nienie MOTD");
define("_SERVERMENU","Menu Serwera");
define("_REASONSSET","Ustaw Powody Ban&#243w");
define("_HOSTNAME","Nazwa Serwera");
define("_VERSION","Wersja");
define("_LASTSEEN","Ostatnio widziany");
define("_TIMEZONEFIXX","Ustawienia Strefy Czasowej");
define("_SERVERRCON","Wy&#347lij komende na serwer (RCON)");
define("_RCON_RELOADADMINS","Prze&#322aduj admin&#243w");
define("_RCON_RESTARTMAP","Prze&#322aduj Map&#281 / Pluginy");
define("_RCON_STATUS","Status komendy");
define("_RCON_PLUGINS","Pokaz list&#281 plugin&#243w AMXX");
define("_RCON_MODULES","Pokaz list&#281 modu&#322&#243w AMXX");
define("_RCON_METALIST","Pokaz list&#281 plugin&#243w METAMODA");
define("_RCON_PREDEFINED","Wcze&#347niej Zdefiniowane");
define("_RCON_USERDEFINED","U&#380ytkownik okre&#347lony");
define("_RCON_SEND","Wy&#347lij");
define("_RCON_SERVERRESPONSE","Odpowied&#378 z serwera:");
define("_RCON_MAPRESTARTED","Mapa zostanie zrestartowana (Komenda: restart).");
define("_RCON_TIMEDOUT","Brak odpowiedzi z serwera!");
define("_RCON_CMDDENIED","Komendy RCON s&#261 zablokowane!");
//server admins
define("_SERVERADMINSETTINGS","Ustawienia Admina na serwerze");
define("_ADMINS","Administratorzy");
define("_ACTIV","Aktywny");
define("_CUSTOMFLAGS","w&#322asne flagi");
define("_STATICBANTIME","Statyczny Czas Bana");
define("_EDITADMINS","Edytuj Admin&#243w");
define("_SPECIALS","Dodatki serwera");
//reasons
define("_REASONSSETTINGS","Zarz&#261dzanie Powodami Ban&#243w");
define("_REASONSSETS","Ustaw Pow&#243d");
define("_NEWREASON","Nowy Pow&#243d");
define("_SAVESET","Zapisz ustawienia");
define("_EDITSET","Edytuj ustawienia");
define("_REASONS","Pow&#243d");
//settings
define("_SITESETTINGS","Ustawienia Strony");
define("_BANNER","Baner");
define("_BANNERURL","Adres Banera");
define("_DESIGN","Wygl&#261d");
define("_BANSPERPAGE","Ban&#243w na strone");
define("_NEWSET","Nowy zestaw");
define("_COOKIENAME","Nazwa ciasteczka (Cookie)");
define("_STARTPAGE","Strona startowa");
define("_SHOWCOMMENTSCOUNT","Poka&#380 liczb&#281 komentarzy");
define("_SHOWFILESCOUNT","Poka&#380 liczb&#281 plik&#243w");
define("_SHOWKICKCOUNT","Poka&#380 liczb&#281 kick&#243w");
define("_FILE_USERUPLOADALLOWED","U&#380ytkownik mo&#380e dodawa&#263 pliki");
define("_MAXFILESIZE","max. Rozmiar Pliku");
define("_FILE_ALLOWEDTYPES","Dost&#281pne rozszerzenia");
define("_COMMENTUSERALLOWEDWRITE","U&#380ytkownik mo&#380e dodawa&#263 komentarze");
define("_USECAPTURE","U&#380ywa&#263 weryfikacji Captcha?");
define("_AUTOPRUNE","Automatyczne Czyszczenie Bazy Danych");
define("_USECOMMENTSYSTEM","U&#380ywa&#263 systemu komentarzy");
define("_USEFILESYSTEM","U&#380ywa&#263 systemu plik&#243w");
define("_AUTOPRUNE_MAXOFFENCES","Maksymalna liczba wyga&#347ni&#281tych ban&#243w przed banem permanentym[na zawsze]");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Przyczyna bana dla maksymalnej liczby wyga&#347ni&#281tych ban&#243w");
define("_MUSTBEON","Musi by&#263 w&#322&#261czone!");
//admin list
define("_ADMINSINCE","Ostatnio zalogowany");
define("_ADMINTO","Admin wygasa");
define("_UNLIMITED","Nigdy");
//admins web
define("_WEBADMINADD","Dodaj Admina na strone");
define("_WEBADMINSSETTINGS","Zarz&#261dzanie Administratorami na stronie");
define("_WEBADMINS","Admini na stronie");
define("_LASTLOGIN","Ostatnie logowanie");
define("_PASSWORD2","Powt&#243rz has&#322o");
define("_WADMINADDEDFAILED","Dodawanie Nieudane. Zduplikowane Warto&#347ci");
define("_NEVER","Nigdy");
define("_YOURPASSWORD","Z pow&#243d&#243w bezpiecze&#324stwa, zostaniesz wylogowany po zmianie w&#322asnego has&#322a!");
define("_ENTERPASSWORD","Wpisz nowe has&#322o:");
define("_NEWPASSWORD","Zmie&#324 has&#322o");
define("_PASSWORDCHANGED","Has&#322o zosta&#322o zmienione!");
define("_PASSWORDCHANGEDFAILED","Zmienianie has&#322a nie powiod&#322o si&#281!");
define("_EMAILSENT","E-mail zosta&#322 wys&#322any na adres kt&#243ry poda&#322e&#347.");
//search
define("_SEARCHRESULT","Odnalezione rezultaty");
define("_SEARCHWITH","Szukaj z");
define("_SEARCHFOR","Szukaj na");
define("_PLAYERSWITH","Gracze z");
define("_MOREBANSHIS","lub wi&#281ksz&#261 liczb&#261 ban&#243w w historii");
define("_ACTIVEBANS","Aktywne bany");
define("_EXPIREDBANS","Wygas&#322e bany");
//Admin list
define("_ADMLIST","Lista Admin&#243w");
//captcha
define("_SCODE","Kod ochronny:");
define("_SCODEENTER","Wpisz kod ochronny:");
//update
define("_WEBVERSIONINFO","Informacja o wersji strony");
define("_PLUGINVERSIONINFO","Informacja o wersji wtyczki[plugin'u]");
define("_VERSION_CURRENT","Obecnie");
define("_VERSION_RELEASE","Ostatnia wersja");
define("_VERSION_BETA","Ostatnia wersja Beta");
define("_LASTCHANGELOG","Logi"); 
define("_WEB","Strona");
define("_YOURWEB","Twoja strona");
define("_PLUGIN","Plugin");
define("_UPDATE_RECOMMENDED","Zalecamy Aktualizacje!");
define("_UPDATE_NOTNEEDED","Aktualizacja nie potrzebna");
define("_WEBUPDATE_RECOMMENDED","Zalecamy Aktualizacje strony!");
define("_PLUGINUPDATE_RECOMMENDED","AMX Mod X zalecamy Aktualizacje!");
//admin menu
define("_MENUHOME","Strefa Admin&#243w");
define("_MENUMAINSERVER","Serwer");
define("_MENUMAINWEB","Strona");
define("_MENUMAINOTHER","Inne");
define("_MENUMAINMODULE","Modu&#322");
define("_MENUSERVER","Serwer");
define("_MENUAMXADMINS","Admini AMX");
define("_MENUSERVERADMINS","Ustal admin&#243w AMXX");
define("_MENUREASONS","Powody ban&#243w");
define("_MENUWEBCONFIG","Opcje");
define("_MENUUSERLEVEL","Poziom U&#380ytkownika");
define("_MENUWEBADMINS","Admin na stronie");
define("_MENUUSERMENU","Menu u&#380ytkownika");
define("_MENUMODULE","Modu&#322y");
define("_MENUUPDATE","Aktualizacja");
define("_MENUINFO","Informacje o systemie");
define("_MENULOGS","Logi");
//admin user menu
define("_USERMENU","Menu u&#380ytkownika");
define("_USERMENUSETTINGS","Ustawienia menu u&#380ytkownika");
define("_MENULOGGEDIN","U&#380ytkownik zalogowany");
define("_MENULOGGEDOUT","U&#380ytkwonik wylogowany");
define("_POSITION","Pozycja");
define("_LANGKEY1","Napis w Menu [Niezalogowany]");
define("_LANGKEY2","Napis w Menu [Zalogowany]");
define("_URL1","Odno&#347nik [Niezalogowany]");
define("_URL2","Odno&#347nik [Zalogowany]");
define("_USERMENUADD","Nowa pozycja menu u&#380ytkownika");
//admin module
define("_MODULSETTINGS","Modu&#322 Administracji");
define("_MODULSETTINGS2","Modu&#322 ustawie&#324");
define("_NAMELANGKEY","Klawisz j&#281zyka dla menu");
define("_INDEXSITE","Strona Index");
define("_ADMINSITE","Strona Admina");
define("_TEMPLATE","Wygl&#261d");
//admin info
define("_SERVERINFO","Informacje serwera");
define("_SERVERSETUP","Ustawienia serwera");
define("_PHPMODULES","Modu&#322y PHP");
define("_OTHERFUNCTIONS","Inne Funkcje");
define("_STATISTIK","Statystyki");
define("_CLEARCACHE","Wyczy&#347&#263 Cache");
define("_DBSIZE","Rozmiar bazy danych");
define("_DBOPTIMIZE","Optymalizacja bazy danych");
define("_OPTIMIZE","Optymalizacja");
define("_PRUNEDB","Usu&#324 Wygas&#322e Bany");
define("_PRUNE","Usu&#324");
define("_DBPRUNED","Ban&#243w usuni&#281tych");
//user level
define("_ADMINLEVELSETTINGS","Zarz&#261dzanie Poziomami Administrator&#243w na stronie");
define("_AMXADMINS","Admini AMXX");
define("_WEBSETTINGS","Opcje internetowe");
define("_LEVELVIEW","Poka&#380");
define("_LEVELUNBAN","Odbanuj");
define("_LEVELIMPORT","Importuj");
define("_LEVELEXPORT","Eksportuj");
define("_PERM","Poziomy u&#380ytkownika");
define("_DBPRUNE","Oczy&#347&#263 Baz&#281 Danych");
define("_SERVEREDIT","Edytuj serwer");
define("_NEWLEVEL","Nowy poziom");
define("_YOURLEVEL","Tw&#243j poziom:");
//admin logs
define("_LOGS","Logi strony");
define("_FILTER","Filtr");
define("_ALL","Wszystkie Logi");
define("_OLDERTHEN","Logi strasze ni&#380");
define("_GO","Id&#378");
define("_ACTION","Akcja");
define("_ACTIONLOGS","Wykonane Akcje");
define("_REMARKS","Opis");
define("_USER","U&#380ytkownik");
//add ban
define("_ADDBAN","Dodaj bana");
define("_NEWBAN","Dodaj nowego bana");
define("_NOBANNAME","Nie wpisano nazwy!");
define("_ACTIVBANEXISTS","Jest ju&#380 aktywny!");
//messages
define("_BANADDSUCCESS","Ban dodany");
define("_BANEDITED","Ban zapisany");
define("_AMXADMINSAVESUCCESS","Admin AMX Mod X zapisany");
define("_AMXADMINDELETED","Admin AMX Mod X usuni&#281ty");
define("_AMXADMINADDED","Admin AMX Mod X dodany");
define("_NONAME","Brak nazwy!");
define("_NOFLAGS","Brak flag!");
define("_NOSTEAM","Brak wprowadzonego SteamID!");
define("_NOVALIDTIME","Brak Ustawie&#324 Czasu!");
define("_REASONSETADDED","Pow&#243d zosta&#322 dodany");
define("_REASONSETDELETED","Pow&#243d zosta&#322 usuni&#281ty");
define("_REASONSSETSAVED","Pow&#243d zosta&#322 usuni&#281ty");
define("_REASONADDED","Pow&#243d dodany");
define("_REASONDELETED","Pow&#243d usuni&#281ty");
define("_REASONSAVED","Pow&#243d zapisany");
define("_SADMINSAVED","Admin serwera zapisany");
define("_SERVERSAVED","Ustawienia serwera zapisane");
define("_SERVERDELETED","Serwer usuni&#281ty");
define("_CACHEDELETED","Wyczyszczono Cache strony");
define("_LOGDELETED","Logi usuni&#281te");
define("_MODULSAVED","Modu&#322 ustawie&#324 zapisany");
define("_CONFIGSAVED","Ustawienia zapisane");
define("_LEVELADDED","Poziom dodany");
define("_LEVELDELFAILED","B&#322&#261d:<br /><br />Admin(i) strony s&#261 jeszcze z tym poziomem!<br />Poziom nie mo&#380e by&#263 usuni&#281ty.");
define("_LEVELDELETED","Poziom usuni&#281ty");
define("_LEVELSAVED","Poziom zapisany");
define("_USERMENUDELETED","Menu u&#380ytkownika usuni&#281te");
define("_USERMENUADDED","Menu u&#380ytkownika dodane");
define("_USERMENUPOSSAVED","Pozycja menu u&#380ytkownika zapisana");
define("_USERMENUSAVED","Menu u&#380ytkownika zapisane");
define("_WADMINSAVED","Admin na stronie zapisany");
define("_WADMINDELETED","Admin na stronie usuni&#281ty");
define("_WADMINADDED","Admin na stronie dodany");
define("_COMDELETED","Komentarz usuni&#281ty");
define("_COMADDED","Komentarz dodany");
define("_COMEDITED","Komentarz zedytowany");
define("_WRONGCAPTCHA","Z&#322y kod ochronny!");
define("_FILEDELFAILED","Plik nie mo&#380e by&#263 usuni&#281ty!");
define("_FILENOTFOUND","Plik nie zosta&#322 znaleziony!");
define("_ERROR","B&#322&#261d");
define("_FILEEDITED","Wpis Zapisany!");
define("_FILENOFILE","Brak pliku!");
define("_FILETYPENOTALLOWED","Nie obs&#322ugiwany typ pliku!");
define("_FILETOBIG","Plik jest za du&#380y!");
define("_FILEUPLOADFAIL","B&#322&#261d dodawania pliku!");
define("_FILEUPLOADSUCCESS","&#321adowanie pliku zako&#324czone");
define("_FILENOTAVAILABLE","Plik nie do&#347t&#281pny!");
define("_FILEDELSUCCESS","Usuwanie pliku zako&#324czone");
define("_NOREQUIREDFIELDS","Brak potrzebnego obszaru!");
define("_DBOPTIMIZED","Baza Danych zoptymalizowna");
//live viewer
define("_SELECTSERVER","Wybierz serwer");
define("_ADDHLSW","Dodaj do HLSW");
define("_CONNECT","Po&#322&#261cz");
define("_NUMBER","#");
define("_FRAGS","Zab&#243jstwa/Fragi");
define("_ONLINE","Czas");
define("_ADDRESS","Adres");
define("_MAP","Mapa");
define("_NEXTMAP","Nast&#281pna mapa");
define("_TIMELEFT","Pozosta&#322o czasu");
define("_TIMELIMIT","Limit czasu");
define("_FRIENDLYFIRE","Ogie&#324 sojuszniczy");
define("_GAMETYPE","Typ gry");
define("_ANTICHEAT","Ustawienia antycheat'a");
define("_ADDONS","Dodatki");
define("_PROTOCOL","Protok&#243&#322");
define("_NOPLAYERS","Brak graczy");
define("_PLAYERCONNECTING","&#321&#261czenie gracza...");
define("_SERVEROFFLINE","Serwer niedost&#281pny");
define("_REFRESH","Od&#347wie&#380");
define("_NOTIMELIMIT","Brak limitu czasu");
//live ban
define("_ADDBANONLINE","Dodaj bana On-Line");
define("_BANSETTINGS","Ustawienia bana/kicka");
define("_SHOW","Poka&#380");
define("_USERID","ID u&#380ytkownika");
define("_STATUSNAME","Status nazwy");
define("_BOT","Bot");
define("_PLAYER","Gracz");
define("_HLTV","HLTV");
define("_UNKNOWN","Nieznany");
define("_BAN","Zbanuj");
define("_KICK","Wykop");
define("_WRONGRCON","Nieprawid&#322owe has&#322o RCON!");
define("_PLAYERKICKED","Gracz wykopany!");
define("_ADDBANSUCCESSKICK","Ban dodany. Gracz zostanie wykopany!");
define("_BANANDKICK","wykop gracza po zbanowaniu");
define("_BANPLAYER","Napewno chcesz zbanowa&#263 tego garcza?");
define("_KICKPLAYER","Napewno chcesz wykopac tego gracza?");
//title
define("_TITLEADMIN","Przypisywanie Administrator&#243w");
define("_TITLEADMINLIST","Lista Admin&#243w");
define("_TITLEBANLIST","Lista Ban&#243w");
define("_TITLELOGIN","Zaloguj");
define("_TITLESEARCH","Szukaj");
define("_TITLEVIEW","Aktualny Status Serwera");
define("_TITLEBANDETAIL","Szczeg&#243&#322y");
define("_TITLEBANADD","Dodaj Bana");
define("_TITLEBANADDONLINE","Dodaj Bana On-Line");
define("_TITLEAMXADMINS","Admini AMXModX");
define("_TITLEREASONS","Powody Ban&#243w");
define("_TITLESERVERADMINS","Admini Serwera");
define("_TITLESERVER","Serwer");
define("_TITLEINFO","Informacje");
define("_TITLELOGS","Logi");
define("_TITLEMODULE","Modu&#322y");
define("_TITLEUPDATE","Sprawd&#378 Wersje");
define("_TITLEUSERLEVEL","Poziom U&#380ytkownika");
define("_TITLESITE","Ustawienia Strony");
define("_TITLEUSERMENU","Menu U&#380ytkownika");
define("_TITLEWEBADMIN","Admin Strony");
//value check
define("_NOUSERNAME","Nie wpisa&#322e&#347 Nazwy U&#380ytkownika!");
define("_NOPASSWORD","Brak wpisanego has&#322a!");
define("_ACCESSINVALID","Dost&#281p zabroniony!");
define("_FLAGSBCDMISSING","Flaga musi byc B, C lub D!");
define("_NONICKNAME","Nie wpisano Nicku!");
define("_NOTAG","Nie wpisano  Tagu / Nazwy klanu!");
define("_EMAILINVALID","Adres E-Mail nieprawid&#322owy!");
define("_STEAMIDINVALID","STEAM-ID nieprawid&#322owy!");
define("_IPINVALID","Adres IP nieprawid&#322owy!");
define("_FLAGSINVALID","Flagi nieprawid&#322owe!");
define("_USERNAMETOSHORT","Nazwa U&#380ytkownika jest za kr&#243tka!");
define("_USERNAMETOLONG","Nazwa U&#380ytkownika jest za d&#322uga!");
define("_NICKNAMETOSHORT","Nick jest za kr&#243tki!");
define("_NICKNAMETOLONG","Nick jest za d&#322ugi!");
define("_PASSWORDTOSHORT","Has&#322o jest za kr&#243tkie!");
define("_PASSWORDTOLONG","Has&#322o jest za d&#322ugie!");
define("_NOREASONSET","Nie wpisano powodu !");
define("_REASONSETTOSHORT","Pow&#243d jest za kr&#243tki!");
define("_REASONSETTOLONG","Pow&#243d jest za d&#322ugi!");
define("_NOREASON","Nie wybrano powodu bana!");
define("_REASONTOSHORT","Pow&#243d bana jest za kr&#243tki!");
define("_REASONTOLONG","Pow&#243d bana jest za d&#322ugi!");
define("_PASSWORDNOTMATCH","Has&#322o kt&#243re wpisa&#322es jest b&#322&#281dne!");
define("_NOCOMMENT","Brak Komentarzy!");
define("_NOEDITREASON","Nie podano powodu edycji!");
define("_COMMENTTOSHORT","Komentarz jest za kr&#243tki!");
define("_COMMENTTOLONG","Komentarz jest za d&#322ugi!");
define("_STEAMTOLONG","SteamID jest za d&#322ugie!");
define("_STEAMTOSHORT","SteamID jest za kr&#243tkie!");
define("_NOIP","Brak Adresu IP!");
define("_IPTOLONG","Adres IP jest za d&#322ugi!");
define("_IPTOSHORT","Adres IP jest za kr&#243tki!");
//alerts
define("_SAVEEDIT","Zapisa&#263 zmiany?");
define("_DELBAN","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 tego bana?");
define("_DELDEMO","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 ten plik?");
define("_DELCOMMENT","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 ten komentarz?");
define("_DELADMIN","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 tego Admina?");
define("_DELLEVEL","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 te uprawnienia?");
define("_DELLOGSALL","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 wszystkie logi ?");
define("_DELLOGS","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 logi?");
define("_SAVESETTINGS","Zapisa&#263 Ustawienia i Zaakceptowa&#263?");
define("_DATALOSS","\nDane nie mog&#261 zosta&#263 odzyskane!");
define("_DELSERVER","Czy jeste&#347 pewien &#380e chcesz usun&#261&#263 ten serwer?");
//motd
define("_NOEXPIREDBANS","Brak wygas&#322ych ban&#243w");
define("_YOUAREBANNED","Jeste&#347 Zbanowany!!");
//new design related
define("_OS", "OS");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve Anti-Cheat");
define("_NA", "Niedost&#281pne");
define("_STATS", "Statystyki");
define("_PERM_BANS", "Bany Permanentne");
define("_TEMP_BANS", "Bany Tymczasowe");
define("_ACTIVE_SERVERS", "Aktywne Serwery");
define("_LATEST_BAN", "Ostatnie Bany");
define("_LATEST_KICKS", "Ostatnie Kicki");
define("_BROWSE_ALL", "Wybierz wszystkie");
define("_POWERED_BY", "Powered by");
define("_DESIGN_BY", "Design wykonany przez");
define("_NO_BANS", "Brak Ban&#243w w Bazie");
define("_FIRST_PAGE", "Pierwsza Strona");
define("_LAST_PAGE", "Ostatnia Strona");
define("_PREVIOUS_PAGE", "Poprzednia Strona");
define("_NEXT_PAGE", "Nast&#281pna Strona");
define("_PICK_DATE", "Wybierz Dat&#281");
define("_WEB_VERSION", "Wersja skryptu WWW");
define("_WEBSERVER", "Serwer WWW");
define("_MODULES", "Modu&#322y");
define("_MIN_OR", "minuty albo");
define("_SIZE", "Rozmiar");
define("_UPD_CONNECT_ERROR", "Nie mo&#380na po&#322&#261czy&#263 si&#281 z serwerem w celu aktualizacji!"); 
define("_UPD_DB_ERROR", "Nie mo&#380na odnale&#378&#263 aktualizacji bazy.");
define("_UPD_SELECT_ERROR", "Nie mo&#380na wybra&#263 aktualizacji bazy");
define("_ADMINID", "SteamID Admina"); 
define("_TRACKBACK", "&#346ledzenie");
define("_SETUP_EXISTS", "<b>UWAGA!</b><br />Plik setup.php nadal znajduje się w katalogu.<br /><br />Możesz używać Panelu admina, lecz zaleca się usunięcie tego pliku!");
?>