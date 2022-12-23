// Author Notes:
// This file has been translated from English to French by Tiny & 'FunXp | P4nThere' from www.funxp.net

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Installation");
define("_STEP","Etape");
define("_STEP1","D&eacute;but");
define("_STEP2","Information");
define("_STEP3","R&eacute;pertoires");
define("_STEP4","Base de donn&eacute;es");
define("_STEP5","Administrateur");
define("_STEP6","R&eacute;sum&eacute;");
define("_STEP7","Fin");

define("_OF","sur");   //must see in context
define("_NEXT","Suivant");
define("_BACK","Pr&eacute;c&eacute;dent");
define("_DIRCHECK","V&eacute;rifier les r&eacute;pertoires");

//step1
define("_WELCOME","Bienvenue &agrave; l'installation de la Suite AMXBans.");
define("_WELCOME2","Ce guide vous aidera &agrave; travers le processus d'installation.");
define("_LICENSEAGREE","J'accepte les accords de licence");

//step2
define("_STEP2DESC","Information concernant les param&egrave;tres du serveur");
define("_SERVERSETUP","Param&egrave;tres du serveur");
define("_REFRESH","Rafra&icirc;chir"); //Little pb: the letter &icirc; appears as  ?
define("_VERSION","Version");
define("_ON","On");         
define("_OFF","Off");       
define("_SEC","Secondes");
define("_SETRECOMMENDED","Param&egrave;tres recommand&eacute;s");
define("_SETNOTRECOMMENDED","Non recommand&eacute;, mais peut fonctionner");

//step3
define("_STEP3DESC","Obtention des informations des r&eacute;pertoires");
define("_STEP3DESC2","Normalement, ce script d&eacute;tecte les chemins des scripts automatiquement");
define("_DIRROOT","Chemin racine");           //a voir avec le suivant
define("_DIRDOCUMENT","Chemin de l'URL");   //need to know: directory installation or the directory of all the files, in that case double file
define("_RECHECK","Rev&eacute;rifier");
define("_ROOTDIRS","R&eacute;pertoires du serveur");
define("_OK","OK");
define("_NOTWRITABLE","R&eacute;pertoire non accessible, veuillez v&eacute;rifier les droits!");
define("_SETUPNOTDELETABLE","Le fichier setup.php devra &ecirc;tre effac&eacute; manuellement apr&egrave;s l'installation!");

//step4
define("_STEP4DESC","Obtention des informations de la base de donn&eacute;es");
define("_DBSETTINGS","Param&egrave;tres de la base de donn&eacute;es");
define("_DBCHECK","V&eacute;rifier l'acc&egrave;s aux donn&eacute;es");
define("_CANTCONNECT","L'acc&egrave;s aux donn&eacute;es est erron&eacute;!");
define("_CANTSELECTDB","Base de donn&eacute;es non trouv&eacute;e !");
define("_DBOK","Acc&egrave;s aux donn&eacute;es OK!");
define("_DBPREVILEGES","Droits des utilisateurs de la base de donn&eacute;es");
define("_HOST","H&ocirc;te");
define("_USER","Nom d'utilisateur");
define("_PASSWORD","Mot de passe");
define("_DATABASE","Base de donn&eacute;es");
define("_TBLPREFIX","Pr&eacute;fixe de la table");
define("_NOTALLPREVILEGES","L'utilisateur n'a pas tous les droits n&eacute;cessaires!");
define("_PREFIXEXISTSV5","Une installation existante a &eacute;t&eacute; trouv&eacute;e, impossible d'ex&eacute;cuter la mise &agrave; jour!");
define("_PREFIXEXISTSV6","Une installation existante a &eacute;t&eacute; trouv&eacute;e, la mise &agrave; jour va &ecirc;tre ex&eacute;cut&eacute;e!");

//step5
define("_STEP5DESC","Cr&eacute;ation du premier administrateur web");
define("_ADMINSETTINGS","Donn&eacute;es d'acc&egrave;s de l'administrateur");
define("_PASSWORD2","Retapez le mot de passe");
define("_EMAILADR","Adresse email");
define("_ADMINCHECK","V&eacute;rifier les donn&eacute;es");
define("_PWNOCONFIRM","Les mots de passe ne coïncident pas!");
define("_NOREQUIREDFIELDS","Des champs requis manquent!");
define("_ADMINOK","Donn&eacute;es de l'administrateur : ok!");
define("_USERTOSHORT","Nom d'utilisateur trop court (min. 4 caract&egrave;res)!");
define("_PWTOSHORT","Mot de passe trop court (min. 4 caract&egrave;res)!");
define("_NOVALIDEMAIL","Adresse e-mail non valable!");

//step6
define("_STEP6DESC","R&eacute;sum&eacute; des donn&eacute;es collect&eacute;es");
define("_STEP6DESC2","AMXBans va &ecirc;tre install&eacute; avec les donn&eacute;es suivantes");

//step7
define("_STEP7DESC","Progression de l'installation");
define("_TABLECREATE","Cr&eacute;ation de la structure des tables");
define("_DEFAULTDATACREATE","Entrer les donn&eacute;es requises");
define("_DEFAULTWEBSETTINGSCREATE","Entrer les param&egrave;tres");
define("_DEFAULTUSERMENUCREATE","Param&eacute;trer le menu de l'utilisateur");
define("_DEFAULTMODULESCREATE","Installer le module");
define("_WEBADMINCREATE","Cr&eacute;er un administrateur web");
define("_ALREADYEXISTS","Existe d&eacute;j&agrave;");
define("_CREATED","Cr&eacute;&eacute; avec succ&egrave;s");
define("_FAILED","Echec");
define("_INSERTED","Enregistrement r&eacute;ussi");
define("_CREATEWEBADMIN","Donn&eacute;es de l'administrateur web");
define("_CREATEUSERLEVEL","Niveau de l'administrateur web");
define("_CREATEWEBSETTINGS","Site web");
define("_CREATEUSERMENU","Menu de l'utilisateur");
define("_FILEEXISTS","La configuration existe d&eacute;j&agrave;!");
define("_FILEOPENERROR","La configuration n'a pas pu &ecirc;tre cr&eacute;&eacute;e!");
define("_FILESUCCESS","Configuration cr&eacute;&eacute;e!");
define("_MANUALEDIT","Ouvrir /include/db.config.inc.php et copier et coller ceci:");
define("_SETUPENDDESC","Le fichier setup.php va &ecirc;tre effac&eacute; et vous serez redirig&eacute; vers AMXBans!");
define("_SETUPEND","Aller sur AMXBans...");
?>