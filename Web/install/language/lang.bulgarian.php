// Author Notes:
// This file has been translated from English to Bulgarian by papyrus_kn from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","Windows-1251"); //ISO-8859-1,utf-8

define("_INSTALLATION","Инсталация");
define("_STEP","Стъпка");
define("_STEP1","Начало");
define("_STEP2","Информация");
define("_STEP3","Директории");
define("_STEP4","База данни");
define("_STEP5","Администратор");
define("_STEP6","Кратко изложение");
define("_STEP7","Край");

define("_OF","на");
define("_NEXT","следваща");
define("_BACK","назад");
define("_DIRCHECK","Проверка на директорията");

//step1
define("_WELCOME","Добре дошли в Инсталацията на AMXBans.");
define("_WELCOME2","Вие ще бъдете напътствани по време на инсталацията.");
define("_LICENSEAGREE","Съгласявам се с условията");

//step2
define("_STEP2DESC","Информация за сървърните настройки");
define("_SERVERSETUP","Сървърни настройки");
define("_REFRESH","Обнови");
define("_VERSION","Версия");
define("_ON","Включен");
define("_OFF","Изключен");
define("_SEC","Секунди");
define("_SETRECOMMENDED","Настройките са препоръчителни");
define("_SETNOTRECOMMENDED","Не се препоръчва, но трябва да проработи");

//step3
define("_STEP3DESC","Вземете информация от директорията");
define("_STEP3DESC2","Нормално, скрипта засича пътеките на скрипта автоматично");
define("_DIRROOT","Главна папка");
define("_DIRDOCUMENT","Главен линк");
define("_RECHECK","Въведете отново");
define("_ROOTDIRS","Директории на сървъра");
define("_OK","OK");
define("_NOTWRITABLE","Тази директория няма права за писане, моля проверете правата!");
define("_SETUPNOTDELETABLE","Файлът setup.php трябва да бъде изтрит ръчно след инсталацията!");

//step4
define("_STEP4DESC","Дайте информация за базата данни");
define("_DBSETTINGS","Настройки на базата данни");
define("_DBCHECK","Достъп до данни");
define("_CANTCONNECT","Достъпът до данните е грешен!");
define("_CANTSELECTDB","Базата данни не е намерена!");
define("_DBOK","Достъпът до даните е одобрен!");
define("_DBPREVILEGES","Потребителски права за базата данни");
define("_HOST","Хост");
define("_USER","Потребителско име");
define("_PASSWORD","Парола");
define("_DATABASE","База данни");
define("_TBLPREFIX","Tаблица за префикс");
define("_NOTALLPREVILEGES","Потребителят няма всички нужни права!");
define("_PREFIXEXISTSV5","Намерена е инсталация, не може да се обнови!");
define("_PREFIXEXISTSV6","Намерена е инсталация, сега ще се обнови!");

//step5
define("_STEP5DESC","Направете първия администратор");
define("_ADMINSETTINGS","Достъпът на администратора");
define("_PASSWORD2","Въведете отново парола");
define("_EMAILADR","Е-майл адрес");
define("_ADMINCHECK","Проверка на данните");
define("_PWNOCONFIRM","Паролата не съвпада!");
define("_NOREQUIREDFIELDS","Не са попълнени задължителни полета!");
define("_ADMINOK","Данните на администратора са одобрени!");
define("_USERTOSHORT","Потребителското Ви име е твърде кратко(минимум 4 символа)!");
define("_PWTOSHORT","Паролата ви е твърде кратка(минимум 4 символа)!");
define("_NOVALIDEMAIL","Невалиден е-майл адрес!");

//step6
define("_STEP6DESC","Кратко изложение на събраните данни");
define("_STEP6DESC2","AMXBans ще бъде инсталиран с въведените данни");

//step7
define("_STEP7DESC","Инсталационен прогрес");
define("_TABLECREATE","Създаване на табличната структура");
define("_DEFAULTDATACREATE","Въведете нужните данни");
define("_DEFAULTWEBSETTINGSCREATE","Въведете настройки");
define("_DEFAULTUSERMENUCREATE","Задайте потребителско меню");
define("_DEFAULTMODULESCREATE","Инсталирайте модул");
define("_WEBADMINCREATE","Добавете Web-Админ");
define("_ALREADYEXISTS","Вече съществува!");
define("_CREATED","Успешно добавен");
define("_FAILED","Неуспешно");
define("_INSERTED","Успешно регистриран");
define("_CREATEWEBADMIN","Данни на Web-Админа");
define("_CREATEUSERLEVEL","Права на Web-Aдмина");
define("_CREATEWEBSETTINGS","Уeбсайт");
define("_CREATEUSERMENU","Потребителско Меню");
define("_FILEEXISTS","Конфигурацията вече съществува!");
define("_FILEOPENERROR","Конфигурацията не може да бъде създадена!");
define("_FILESUCCESS","Конфигурацията е създадена!");
define("_MANUALEDIT","Oтворете /include/db.config.inc.php и копирайте и поставете това:");
define("_SETUPENDDESC","Файлът setup.php сега ще бъде изтрит и ще ви пренасочи към AMXBans!");
define("_SETUPEND","Отидете към AMXBans...");
?>