// Author Notes:
// This file has been translated from English to French by Tiny & "FunXp | P4nThere" from www.funxp.net

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8
define("_LOCALE","fr_FR"); //de_DE,fr_FR,en_EN...

//default
define("_SHORTSECONDS","sec");
define("_NOACCESS","Vous n'&ecirc;tes pas autoris&eacute; &agrave; afficher cette page!");
define("_LOADTIME","Page g&eacute;n&eacute;r&eacute;e en");
define("_BANSINDB","Bans dans la base de donn&eacute;es");
define("_BY","par");
define("_OR","ou");
define("_ON","on");
define("_OFF","off");
define("_YES","oui");
define("_NO","non");
define("_OWN","Ses propres bans");
define("_CLEAR","Mettre &agrave; z&eacute;ro");
define("_OPENSTEAMCOMSITE","Visiter la page de la communaut&eacute; STEAM");
define("_ADMINAREA","Section administrateur");
define("_NOSITE","Page non valable!");
define("_DELETE","Supprimer");
define("_ADD","Ajouter");
define("_EDIT","Editer");
define("_DEFAULTLANG","Langue par d&eacute;faut");
define("_OTHER","Autres");
define("_VIEWIP","Afficher l'IP");
define("_LEVEL","Niveau");
define("_DETAILS","Afficher les d&eacute;tails");
define("_SYSTEMSETTINGS","Syst&egrave;me");
define("_VIEWSETTINGS","Afficher");
define("_COMMENTSETTINGS","Commentaires");
define("_FILESETTINGS","Fichiers");
define("_BANLISTSETTINGS","Liste des bans");
define("_CONFIGURATION","Configuration");
define("_REPAIR","R&eacute;parer");
define("_AUTO","Automatique");
define("_TEST","Tester");
//user menu
define("_HOME","Page principale");
define("_BANLIST","Liste des bans");
define("_SEARCH","Rechercher");
define("_SERVER","Serveur");
//info amxaccess
define("_INFO_ACCESS","Information de niveau et d'acc&egrave;s");
define("_ACCESSFLAGS","Information sur le contr&ocirc;le d'acc&egrave;s");
define("_ACCESSPERMS","Information sur les niveaux");
define("_ACCESS_FLAGS","a - Immunit&eacute; (ne peut &ecirc;tre kick&eacute;/banni etc.)<br />b - Slots r&eacute;serv&eacute;s (can use reserved slots)<br />c - amx_kick command<br />d - amx_ban et amx_unban commands<br />e - amx_slay et amx_slap commands<br />f - amx_map command<br />g - amx_cvar command (not all CVARs available)<br />h - amx_cfg command<br />i - amx_chat et autres chat commands<br />j - amx_vote et other vote commands<br />k - Acc&egrave;s &agrave; sv_password cvar (&agrave; travers amx_cvar command)<br />l - Acc&egrave;s &agrave; amx_rcon command et rcon_password cvar (&agrave; travers amx_cvar command)<br />m - Utilisateur avec niveau A (for other plugins)<br />n - Utilisateur avec niveau B<br />o - Utilisateur avec niveau C<br />p - Utilisateur avec niveau D<br />q - Utilisateur avec niveau E<br />r - Utilisateur avec niveau F<br />s - Utilisateur avec niveau G<br />t - Utilisateur avec niveau H<br />u - Acc&egrave;s au menu<br />z - Utilisateur (non admin)");
define("_FLAG_FLAGS","a - kicker le joueur sur mauvais mot de passe<br />b - Clan tag<br />c - c'est le SteamID<br />d - c'est l'IP<br />e - pas de mot de passe (uniquement SteamID/IP requis)<br />k - Nom ou Pseudo ou Clan (Sensible &agrave; la casse!).");
define("_ADDADMINTOSERVERS","Ajouter l'admin au serveur");
define("_WITHSTATICBANTIME","Avec des temps de bans statiques");
//main header
define("_LOGGED","Connect&eacute; en tant que");
define("_NOTLOGGED","Non connect&eacute;");
define("_LOGOUT","Se d&eacute;connecter");
define("_LOGIN","Se connecter");
define("_MENU","Menu");
//ban list
define("_DATE","Date");
define("_PLAYER","Joueur");
define("_ADMIN","Admin");
define("_REASON","Raison");
define("_LENGHT","Dur&eacute;e");
define("_SITE","Page");
define("_BANS","Bans");
define("_BL_COMMENTS","Commentaires");
define("_BL_FILES","Fichiers");
define("_BL_KICKS","Kicks");
define("_TO","jusqu'au");
define("_YEAR","Ann&eacute;e");
define("_YEARS","Ann&eacute;es");
define("_MONTH","Mois");
define("_MONTHS","Mois");
define("_WEEK","Semaine");
define("_WEEKS","Semaines");
define("_DAY","Jour");
define("_DAYS","Jours");
define("_HOUR","Heure");
define("_HOURS","Heures");
define("_MIN","Minute");
define("_MINS","Minutes");
define("_OF","sur");         //must check in context
define("_REMAINING","restant");
//ban list details
define("_PERMANENT","Permanent");
define("_BANDETAILS","D&eacute;tails du ban");
define("_STEAMID","SteamID");
define("_STEAMCOMID","ID sur la communaut&eacute; Steam");
define("_NOTAVAILABLE","Non valable");
define("_NOSTEAMID","pas de SteamID");
define("_STEAMID&IP","SteamID et/ou IP");
define("_HIDDEN","cach&eacute;e");
define("_INVOKED","Effectu&eacute; le");
define("_BANLENGHT","Dur&eacute;e du ban");
define("_EXPIRES","Expire le");
define("_NOTAPPLICABLE","Non applicable");
define("_ALREADYEXP","a d&eacute;j&agrave; expir&eacute;");
define("_IP","Adresse IP");
define("_BANTYPE","Type de ban");
define("_BANBY","Banni par");
define("_BANON","Banni sur");
define("_FILE_TOBIG","Le fichier est trop grand");
define("_FILE_TYPENOTALLOWED","Ce type de fichier est non autoris&eacute;");
define("_FROM","de");
define("_DOWNLOAD","T&eacute;l&eacute;chargement");   //must check in context  
define("_DOWNLOADS","T&eacute;l&eacute;chargements");   //must check in context
define("_FILE","Fichier");
define("_NEWFILE","Nouveau Fichier");
define("_COMMENT","Commentaire");
define("_COMMENTS","Commentaires");
define("_NEWCOMMENT","Nouveau commentaire");
define("_NOCOMMENTS","Pas de commentaires");
define("_BACK","retour");
define("_TIP_EDIT","Editer");
define("_TIP_DEL","Supprimer");
define("_TIP_DOWNLOAD","T&eacute;l&eacute;charger");         
define("_TIP_BACK","Retour");
define("_TIP_SENDMAIL","Envoyer E-mail");
define("_EMAIL","E-mail");
define("_FILEUPLOAD","Envoyer un fichier");
define("_UPLOAD","Envoyer");                         //must check incontext
define("_ENTRYEDIT","Editer l'entr&eacute;e");             //musty check in context
define("_EDITBAN","Editer le ban");
define("_TOTALEXPBANS","Total des bans expir&eacute;s");
define("_EDITCOMMENT","Editer le commentaire");
define("_ADDCOMMENT","Ajouter un commentaire");
define("_NOFILES","Pas de fichiers");
define("_BANDETAILSEDITS","Changement dans le pass&eacute;");
define("_EDITREASON","Raison du changement");
define("_UNBANPLAYER","d&eacute;bannir");
define("_UNBANNED","D&eacute;banni");
define("_BANHISTORY","Historique des bans");
//Login
define("_USERNAME","Nom d'utilisateur");
define("_PASSWORD","Mot de passe");
define("_REMEMBERME","Se souvenir de moi");
define("_LOGINBLOCKED","Login bloqu&eacute;!");
define("_LOGINFAILEDPW","V&eacute;rifiez votre mot de passe!");
define("_LOGINFAILED","Echec de la connexion!");
define("_LOGINTRY","Essayer");
define("_SEC","Seconde");
define("_SECS","Secondes");
//admins amxx
define("_AMXADMINSETTINGS","Administration des admins d'AMX Mod X ");
define("_NAME","Nom");
define("_NICKNAME","Pseudo");
define("_MANAGEAMXADMINS","Administrateurs AMX Mod X");
define("_ADDAMXADMINS","Ajouter des admins AMX Mod X");
define("_ACCESS","Niveau");
define("_FLAGS","Acc&egrave;s");
define("_SETTINGS","Param&egrave;tres");
define("_SAVE","Sauvegarder");
define("_EVER","Infini");
define("_SHOWINADMINLIST","Visible dans la liste des admins");
define("_ADMINVALIDITY","Validit&eacute;");
define("_ADMINEXPIRATION","Valide jusqu'au");
define("_CREATED","Cr&eacute;&eacute; le");
define("_EXTENDWITH","Etendre");
define("_STEAMIDIPNAME","SteamID/IP/Nom");
//server
define("_SERVERSETTINGS","Param&egrave;tres du serveur");
define("_MOD","Mode");
define("_RCONPW","Mot de passe du RCON");
define("_DEL","Supprimer");
define("_MOTDURL","URL du motd");
define("_MOTDDELAY","D&eacute;lai du motd");
define("_SERVERMENU","Menu du serveur");
define("_REASONSSET","Etablir les raisons des bans");
define("_HOSTNAME","Nom du serveur");
define("_VERSION","Version");
define("_LASTSEEN","derni&egrave;re fois aper&ccedil;u");
define("_TIMEZONEFIXX","S&eacute;lection de la plage horaire");
define("_SERVERRCON","Envoyer les commandes serveur (RCON)");
define("_RCON_RELOADADMINS","Recharger les admins");
define("_RCON_RESTARTMAP","Recharger la map et plugins");
define("_RCON_STATUS","Status des commandes");
define("_RCON_PLUGINS","Afficher la liste des plugins AMXX");
define("_RCON_MODULES","Afficher la liste des modules AMXX");
define("_RCON_METALIST","Afficher la liste des Metamods");
define("_RCON_PREDEFINED","Pr&eacute;d&eacute;fini");
define("_RCON_USERDEFINED","Utilisateur d&eacute;fini");          //must check in context
define("_RCON_SEND","Envoyer");
define("_RCON_SERVERRESPONSE","R&eacute;ponse du serveur:");
define("_RCON_MAPRESTARTED","La map sera relanc&eacute;e (command: restart).");
define("_RCON_TIMEDOUT","Pas de r&eacute;ponse du server!");
define("_RCON_CMDDENIED","Cette commande RCON est interdite!");
//server admins
define("_SERVERADMINSETTINGS","Param&egrave;tres des admins du serveur");
define("_ADMINS","Admins");
define("_ACTIV","Actif");
define("_CUSTOMFLAGS","Acc&egrave;s personnalis&eacute;s");
define("_STATICBANTIME","Temps statique des bans");
define("_EDITADMINS","Editer les admins");
define("_SPECIALS","Commandes sp&eacute;ciales serveur");
//reasons
define("_REASONSSETTINGS","Administration des raisons des bans");
define("_REASONSSETS","Groupe de raisons des bans");
define("_NEWREASON","Nouvelle raison");
define("_SAVESET","Enregistrer le groupe");   //must check in context
define("_EDITSET","Editer le groupe");         //must check in context
define("_REASONS","Raisons");
//settings
define("_SITESETTINGS","Administration du site web");
define("_BANNER","Banni&egrave;re");
define("_BANNERURL","URL de la banni&egrave;re");
define("_DESIGN","Th&egrave;me");
define("_BANSPERPAGE","Nombre de bans par page");
define("_NEWSET","Nouveau groupe");
define("_COOKIENAME","Nom du cookie");
define("_STARTPAGE","Page de d&eacute;marrage");
define("_SHOWCOMMENTSCOUNT","Afficher le nombre de commentaires");
define("_SHOWFILESCOUNT","Afficher le nombre de fichiers");
define("_SHOWKICKCOUNT","Afficher le nombre de kicks");
define("_FILE_USERUPLOADALLOWED","Les utilisateurs sont autoris&eacute;s &agrave; envoyer des fichiers");
define("_MAXFILESIZE","Taille maximale des fichiers");
define("_FILE_ALLOWEDTYPES","Extension des fichiers autoris&eacute;s");
define("_COMMENTUSERALLOWEDWRITE","Les utilisateurs sont autoris&eacute;s &agrave; laisser des commentaires");
define("_USECAPTURE","Utiliser le Captcha de s&eacute;curit&eacute;");
define("_AUTOPRUNE","Vider automatiquement la base de donn&eacute;es temporaire");
define("_USECOMMENTSYSTEM","Utiliser le syst&egrave;me de commentaires");
define("_USEFILESYSTEM","Utiliser le syst&egrave;me de fichiers");
define("_AUTOPRUNE_MAXOFFENCES","Nombre maximum de bans avant le ban d&eacute;finitif");
define("_AUTOPRUNE_MAXOFFENCES_REASON","Raison de ban pour les bans maximums expir&eacute;s");
define("_MUSTBEON","doit &ecirc;tre activ&eacute;!");
//admin list
define("_ADMINSINCE","Admin depuis");
define("_ADMINTO","Admin jusqu'au");
define("_UNLIMITED","infini");
//admins web
define("_WEBADMINADD","Ajouter un admin web");
define("_WEBADMINSSETTINGS","Administration des admins web");
define("_WEBADMINS","Admins web");
define("_LASTLOGIN","Derni&egrave;re connexion");
define("_WADMINADDEDFAILED","Echec de l'ajout. Y a t'il des valeurs dupliqu&eacute;es?");
define("_NEVER","jamais");
define("_YOURPASSWORD","Pour des raisons de s&eacute;curit&eacute;, vous serez connect&eacute; apr&egrave;s avoir chang&eacute; votre mot de passe!");
define("_ENTERPASSWORD","Entrez un nouveau mot de passe:");
define("_PASSWORD2","Retapez le mot de passe");
define("_NEWPASSWORD","Changer le mot de passe");
define("_PASSWORDCHANGED","Le changement du mot de passe a r&eacute;ussi!");
define("_PASSWORDCHANGEDFAILED","Le changement du mot de passe a &eacute;chou&eacute;!");
define("_EMAILSENT","Un e-mail a &eacute;t&eacute; envoy&eacute; &agrave; l'adresse donn&eacute;e.");
//search
define("_SEARCHRESULT","R&eacute;sultats de la recherche");
define("_SEARCHWITH","Rechercher avec");
define("_SEARCHFOR","Rechercher");
define("_PLAYERSWITH","Joueurs avec");
define("_MOREBANSHIS","ou plus de bans pr&eacute;c&eacute;dents");
define("_ACTIVEBANS","Bans actifs");
define("_EXPIREDBANS","Bans expir&eacute;s");
//Admin list
define("_ADMLIST","Liste des admins");
//captcha
define("_SCODE","Code de s&eacute;curit&eacute;:");
define("_SCODEENTER","Veuillez entrer le code de s&eacute;curit&eacute;:");
//update
define("_WEBVERSIONINFO","Information sur la version du site web");
define("_PLUGINVERSIONINFO","Information sur la version du plugin");
define("_VERSION_CURRENT","Actuelle");
define("_VERSION_RELEASE","Derni&egrave;re version");
define("_VERSION_BETA","Derni&egrave;re version beta");
define("_LASTCHANGELOG","Historique des modifications"); 
define("_WEB","Site web");
define("_YOURWEB","Votre site web");
define("_PLUGIN","Plugin AMX Mod X");
define("_UPDATE_RECOMMENDED","Mise &agrave; jour recommand&eacute;e!");
define("_UPDATE_NOTNEEDED","Mise &agrave; jour non n&eacute;cessaire");
define("_WEBUPDATE_RECOMMENDED","Mise &agrave; jour web recommand&eacute;e!");
define("_PLUGINUPDATE_RECOMMENDED","Mise &agrave; jour du plugin AMX Mod X recommand&eacute;e!");
//admin menu
define("_MENUHOME","Page de d&eacute;marrage");  //must check in context
define("_MENUMAINSERVER","Serveur");
define("_MENUMAINWEB","Site web");
define("_MENUMAINOTHER","Autres");
define("_MENUMAINMODULE","Module");
define("_MENUSERVER","Serveur");
define("_MENUAMXADMINS","Admins AMX");
define("_MENUSERVERADMINS","Assigner des admins AMX");
define("_MENUREASONS","Raisons des bans");
define("_MENUWEBCONFIG","Param&egrave;tres");
define("_MENUUSERLEVEL","Niveau de l'utilisateur");
define("_MENUWEBADMINS","Admins web");
define("_MENUUSERMENU","Menu de l'utilisateur");
define("_MENUMODULE","Module");
define("_MENUUPDATE","Mise &agrave; jour");
define("_MENUINFO","Information du syst&egrave;me");
define("_MENULOGS","Historiques");
//admin user menu
define("_USERMENU","Menu de l'utilisateur");
define("_USERMENUSETTINGS","Param&egrave;tres du menu de l'utilisateur");
define("_MENULOGGEDIN","Connexion utilisateur");
define("_MENULOGGEDOUT","D&eacute;connexion utilisateur");
define("_POSITION","Position");
define("_LANGKEY1","Clef de langue 1");   //must check in context
define("_LANGKEY2","Clef de langue 2");   //must check in context
define("_URL1","URL 1");
define("_URL2","URL 2");
define("_USERMENUADD","Menu nouvel utilisateur");
//admin module
define("_MODULSETTINGS","Administration du module");
define("_MODULSETTINGS2","Param&egrave;tres du module");
define("_NAMELANGKEY","Clef de langue pour le menu");
define("_INDEXSITE","Page d'index");
define("_ADMINSITE","Page d'administrateur");
define("_TEMPLATE","Template");
//admin info
define("_SERVERINFO","Informations sur le serveur");
define("_SERVERSETUP","Param&egrave;tres du serveur");
define("_PHPMODULES","Module PHP");
define("_OTHERFUNCTIONS","Autres fonctions");
define("_STATISTIK","Statistiques");
define("_CLEARCACHE","Vider le cache de la page");
define("_DBSIZE","Taille de la base de donn&eacute;es");
define("_DBOPTIMIZE","Optimiser la base de donn&eacute;es");
define("_OPTIMIZE","Optimiser");
define("_PRUNEDB","Nettoyer bans");
define("_PRUNE","Nettoyer");
define("_DBPRUNED","Bans nettoy&eacute;s");
//user level
define("_ADMINLEVELSETTINGS","Administration du niveau des admins web");
define("_AMXADMINS","Admins AMX");
define("_WEBSETTINGS","Param&egrave;tres web");
define("_LEVELVIEW","Afficher");
define("_LEVELUNBAN","D&eacute;bannir");
define("_LEVELIMPORT","Importer");
define("_LEVELEXPORT","Exporter");
define("_PERM","Niveaux des utilisateurs");
define("_DBPRUNE","Elaguer la base de donn&eacute;es");
define("_SERVEREDIT","Editer le serveur");
define("_NEWLEVEL","Nouveau niveau");
define("_YOURLEVEL","Votre niveau: Vous serez d&eacute;connecter lors de l'enregistrement");
//admin logs
define("_LOGS","Historiques du site web");
define("_FILTER","Filtrer");
define("_ALL","Toutes les historiques");
define("_OLDERTHEN","Historiques plus anciennes que");
define("_GO","Chercher");
define("_ACTION","Action");
define("_ACTIONLOGS","Actions effectu&eacute;es");
define("_REMARKS","Description");
define("_USER","Utilisateur");
//add ban
define("_ADDBAN","Ajouter un ban");
define("_NEWBAN","Ajouter un nouveau ban");
define("_NOBANNAME","Pas de nom pr&eacute;sent!");
define("_ACTIVBANEXISTS","Un ban actif existe d&eacute;j&agrave;!");
//messages
define("_BANADDSUCCESS","Ban ajout&eacute; avec succ&egrave;s");
define("_BANEDITED","Ban enregistr&eacute;");
define("_AMXADMINSAVESUCCESS","Les admins AMX Mod X ont &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s");
define("_AMXADMINDELETED","L'admin AMX Mod X a &eacute;t&eacute; supprim&eacute;");
define("_AMXADMINADDED","L'admin AMX Mod X a &eacute;t&eacute; ajout&eacute;");
define("_NONAME","Nom manquant!");
define("_NOFLAGS","Des niveaux manquent!");
define("_NOSTEAM","Pas de SteamID pr&eacute;sent!");
define("_NOVALIDTIME","Le temps de validit&eacute; manque!");
define("_REASONSETADDED","Le groupe de raisons a &eacute;t&eacute; ajout&eacute;");
define("_REASONSETDELETED","Le groupe de raisons a &eacute;t&eacute; effac&eacute;");
define("_REASONSSETSAVED","Le groupe de raisons a &eacute;t&eacute; enregistr&eacute;");
define("_REASONADDED","La raison a &eacute;t&eacute; ajout&eacute;e");
define("_REASONDELETED","La raison a &eacute;t&eacute; effac&eacute;e");
define("_REASONSAVED","La raison a &eacute;t&eacute; enregistr&eacute;e");
define("_SADMINSAVED","L'admin du server a &eacute;t&eacute; enregistr&eacute;");
define("_SERVERSAVED","Les param&egrave;tres du serveur ont &eacute;t&eacute; enregistr&eacute;s");
define("_SERVERDELETED","Le serveur a &eacute;t&eacute; effac&eacute;");
define("_CACHEDELETED","Le cache du site web a &eacute;t&eacute; effac&eacute;");
define("_LOGDELETED","Les historiques ont &eacute;t&eacute; effac&eacute;es");
define("_MODULSAVED","Les param&egrave;tres du module ont &eacute;t&eacute; enregistr&eacute;s");
define("_CONFIGSAVED","Les param&egrave;tres ont &eacute;t&eacute; enregistr&eacute;s");
define("_LEVELADDED","Le niveau a &eacute;t&eacute; cr&eacute;&eacute;");
define("_LEVELDELFAILED","Erreur:<br /><br />Le ou les admin(s) web avec ce niveau existe(nt) d&eacute;j&agrave;!<br />Le niveau ne peut &ecirc;tre supprim&eacute;.");
define("_LEVELDELETED","Niveau supprim&eacute;");
define("_LEVELSAVED","Niveau enregistr&eacute;");
define("_USERMENUDELETED","Menu utilisateur effac&eacute;");
define("_USERMENUADDED","Menu utilisateur ajout&eacute;");
define("_USERMENUPOSSAVED","Position de menu utilisateur enregistr&eacute;e");
define("_USERMENUSAVED","Menu utilisateur enregistr&eacute;");
define("_WADMINSAVED","Admin enregistr&eacute;");
define("_WADMINDELETED","Admin web supprim&eacute;");
define("_WADMINADDED","Admin web ajout&eacute;");
define("_COMDELETED","Commentaire effac&eacute;");
define("_COMADDED","Commentaire ajout&eacute;");
define("_COMEDITED","Commentaire &eacute;dit&eacute;");
define("_WRONGCAPTCHA","Mauvais code de s&eacute;curit&eacute;!");
define("_FILEDELFAILED","Le fichier n'a pas pu &ecirc;tre supprim&eacute;!");
define("_FILENOTFOUND","Fichier non trouv&eacute;!");
define("_ERROR","Erreur");
define("_FILEEDITED","Entr&eacute;e enregistr&eacute;e");
define("_FILENOFILE","Pas de fichier!");
define("_FILETYPENOTALLOWED","Ce type de fichier n'est pas autoris&eacute;!");
define("_FILETOBIG","Le fichier est trop grand!");
define("_FILEUPLOADFAIL","Erreur d'envoi!");
define("_FILEUPLOADSUCCESS","Le fichier a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s");
define("_FILENOTAVAILABLE","Fichier non disponible!");
define("_FILEDELSUCCESS","Fichier effac&eacute; avec succ&egrave;s");
define("_NOREQUIREDFIELDS","Des champs requis manquent!");
define("_DBOPTIMIZED","La base de donn&eacute;es a &eacute;t&eacute; optimis&eacute;e");
//live viewer
define("_SELECTSERVER","S&eacute;lectionner le serveur");
define("_ADDHLSW","Ajouter a HLSW");
define("_CONNECT","Connecter");
define("_NUMBER","#");
define("_FRAGS","Frags");
define("_ONLINE","Temps");
define("_ADDRESS","Adresse");
define("_MAP","Map");
define("_NEXTMAP","Map suivante");
define("_TIMELEFT","Temps restant");
define("_TIMELIMIT","Limite de temps");
define("_FRIENDLYFIRE","Friendly Fire");
define("_GAMETYPE","Jeux");
define("_ANTICHEAT","Outils Anti-cheat");
define("_ADDONS","Addons");
define("_PROTOCOL","Protocole");
define("_NOPLAYERS","Pas de joueurs");
define("_PLAYERCONNECTING","Joueur se connectant...");
define("_SERVEROFFLINE","Serveur non disponible");
define("_REFRESH","Rafra&icirc;chir");
define("_NOTIMELIMIT","pas de limite de temps");
//live ban
define("_ADDBANONLINE","Ajouter un ban en temps r&eacute;el");
define("_BANSETTINGS","Param&egrave;tres des Ban/kick");
define("_SHOW","Afficher");
define("_USERID","ID de l'utilisateur");
define("_STATUSNAME","Nom dans le status");          //must check in context
define("_BOT","Bot");
define("_PLAYER","Joueur");
define("_HLTV","HLTV");
define("_UNKNOWN","inconnu");
define("_BAN","Bannir");
define("_KICK","Kicker");
define("_WRONGRCON","Mauvais RCON!");
define("_PLAYERKICKED","Joueur kick&eacute;!");
define("_ADDBANSUCCESSKICK","Ban a &eacute;t&eacute; ajout&eacute;. Le joueur sera kick&eacute;!");
define("_BANANDKICK","Kicker le joueur apr&egrave;s le ban");
define("_BANPLAYER","Voulez vous vraiment bannir ce joueur?");
define("_KICKPLAYER","Voulez vous vraiment kicker ce joueur?");
//title
define("_TITLEADMIN","Assigner des admins");
define("_TITLEADMINLIST","Liste des admins");
define("_TITLEBANLIST","liste des bans");
define("_TITLELOGIN","Se connecter");
define("_TITLESEARCH","Rechercher");
define("_TITLEVIEW","Status des serveurs en temps r&eacute;el");
define("_TITLEBANDETAIL","D&eacute;tails");
define("_TITLEBANADD","Ajouter un ban");
define("_TITLEBANADDONLINE","Ajouter un ban en temps r&eacute;el");
define("_TITLEAMXADMINS","Admins AMX Mod X");
define("_TITLEREASONS","Raisons des bans");
define("_TITLESERVERADMINS","Admins du serveur");
define("_TITLESERVER","Serveur");
define("_TITLEINFO","Information");
define("_TITLELOGS","Historiques");
define("_TITLEMODULE","Module");
define("_TITLEUPDATE","V&eacute;rification de la version");
define("_TITLEUSERLEVEL","Niveau de l'utilisateur");
define("_TITLESITE","Param&egrave;tres de la page");
define("_TITLEUSERMENU","Menu de l'utilisateur");
define("_TITLEWEBADMIN","Admin web");
//value check
define("_NOUSERNAME","Aucun nom d'utilisateur n'est pr&eacute;sent!");
define("_NOPASSWORD","Aucun mot de passe n'est pr&eacute;sent!");
define("_ACCESSINVALID","Acc&egrave;s invalide!");
define("_FLAGSBCDMISSING","Le niveau doit &ecirc;tre ou B, ou C ou D!");
define("_NONICKNAME","Pas de pseudo pr&eacute;sent!");
define("_NOTAG","Pas de tag d'&eacute;quipe/pseudo pr&eacute;sent!");
define("_EMAILINVALID","Adresse e-mail invalide!");
define("_STEAMIDINVALID","SteamID invalide!");
define("_IPINVALID","Adresse IP invalide!");
define("_FLAGSINVALID","Niveaux invalides!");
define("_USERNAMETOSHORT","Nom trop court!");
define("_USERNAMETOLONG","Nom trop long");
define("_NICKNAMETOSHORT","Pseudo trop court!");
define("_NICKNAMETOLONG","Pseudo trop long!");
define("_PASSWORDTOSHORT","Mot de passe trop court!");
define("_PASSWORDTOLONG","Mot de passe trop long!");
define("_NOREASONSET","Pas de nom de raison pr&eacute;sent!");
define("_REASONSETTOSHORT","Nom de groupe de raisons trop court!");
define("_REASONSETTOLONG","Nom de groupe de raisons trop long!");
define("_NOREASON","Pas de raison de ban pr&eacute;sente!");
define("_REASONTOSHORT","Raison de ban trop courte!");
define("_REASONTOLONG","Raison de ban trop longue!");
define("_PASSWORDNOTMATCH","Les mots de passe ne coincident pas!");
define("_NOCOMMENT","Pas de commentaire pr&eacute;sent!");
define("_NOEDITREASON"," Pas de raison de modification entr&eacute;e!");
define("_COMMENTTOSHORT","Commentaire trop court!");
define("_COMMENTTOLONG","Commentaire trop long!");
define("_STEAMTOLONG","SteamID trop long!");
define("_STEAMTOSHORT","SteamID trop court!");
define("_NOIP","Pas d'IP pr&eacute;sente!");
define("_IPTOLONG","IP trop longue!");
define("_IPTOSHORT","IP trop courte!");
//alerts
define("_SAVEEDIT","Enregistrer les changements?");
define("_DELBAN","Voulez vous vraiment supprimer ce ban?");
define("_DELDEMO","Voulez vous vraiment supprimer ce fichier?");
define("_DELCOMMENT","Voulez vous vraiment supprimer ce commentaire?");
define("_DELADMIN","Voulez vous vraiment supprimer cet admin?");
define("_DELLEVEL","Voulez vous vraiment supprimer ce niveau?");
define("_DELLOGSALL","Voulez vous vraiment supprimer toute l'historique?");
define("_DELLOGS","Voulez vous vraiment supprimer cette historique?");
define("_SAVESETTINGS","Enregistrer les param&egrave;tres et appliquer?");
define("_DATALOSS","\nLes donn&eacute;es ne peuvent pas &ecirc;tre r&eacute;cup&eacute;r&eacute;es!");
define("_DELSERVER","Voulez vous vraiment supprimer ce serveur?");
//motd
define("_NOEXPIREDBANS","Pas de bans expir&eacute;s");
define("_YOUAREBANNED","Vous avez &eacute;t&eacute; banni!!");
//new design related
define("_OS", "SE");
define("_VAC", "VAC");
define("_VAC_ALT", "Valve Anti-Cheat");
define("_NA", "N/A");
define("_STATS", "Statistiques");
define("_PERM_BANS", "Bans Permanents");
define("_TEMP_BANS", "Bans Temporaires");
define("_ACTIVE_SERVERS", "Serveurs Actifs");
define("_LATEST_BAN", "Dernier Ban");
define("_LATEST_KICKS", "Derniers Kicks");
define("_BROWSE_ALL", "Tout Afficher");
define("_POWERED_BY", "Fourni par");
define("_DESIGN_BY", "Con&ccedil;u par");
define("_NO_BANS", "Pas de Bans dans la base de donn&eacute;es");
define("_FIRST_PAGE", "Premi&egrave;re Page");
define("_LAST_PAGE", "Derni&egrave;re Page");
define("_PREVIOUS_PAGE", "Page Pr&eacute;c&eacute;dente");
define("_NEXT_PAGE", "Page Suivante");
define("_PICK_DATE", "S&eacute;lectionner une Date");
define("_WEB_VERSION", "Version du Site Web");
define("_WEBSERVER", "Serveur Web");
define("_MODULES", "Modules");
define("_MIN_OR", "minutes ou");
define("_SIZE", "Taille");
define("_UPD_CONNECT_ERROR", "Aucune connexion n'a pu &ecirc;tre &eacute;tablie avec le Serveur de Mise &agrave; jour!"); 
define("_UPD_DB_ERROR", "La base de donn&eacute;es de mise &agrave; jour n'a pas &eacute;t&eacute; trouv&eacute;e.");
define("_UPD_SELECT_ERROR", "La base de donn&eacute;es de mise &agrave; jour n'a pu &ecirc;tre s&eacute;lectionn&eacute;e."); 
define("_ADMINID", "SteamID de l'admin");  
define("_TRACKBACK", "R&eacute;trolien");  
define("_SETUP_EXISTS", "<b>Alerte de s&eacute;curit&eacute;!</b><br />setup.php est toujours pr&eacute;sent dans votre r&eacute;pertoire d'AMXBans.<br /><br />Vous pouvez toujours acc&eacute;der au Panneau de Contr&ocirc;le Administrateur, mais nous vous recommandons fortement de supprimer le fichier! ");
?>