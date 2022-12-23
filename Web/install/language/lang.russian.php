// Author Notes:
// This file has been translated from English to Russian by 6a6ka and IzI from http://devilmice.by and http://games.zb.lv

// This is the Install's Language File

<?php
//encoding and locale
define("_ENCODING","UTF-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Установка");
define("_STEP","Шаг");
define("_STEP1","Начало");
define("_STEP2","Информация");
define("_STEP3","Директории сервера");
define("_STEP4","База данных");
define("_STEP5","Добавление Администратора");
define("_STEP6","Собранная информация");
define("_STEP7","Завершение");

define("_OF","из");
define("_NEXT","далее");
define("_BACK","назад");
define("_DIRCHECK","Проверка директорий");

//step1
define("_WELCOME","Добро пожаловать в мастер установки AMXBans.");
define("_WELCOME2","Этот мастер поможет Вам успешно установить и настроить AMXBans.");
define("_LICENSEAGREE","Я принимаю условия соглашения");

//step2
define("_STEP2DESC","Информация о настройках сервера.");
define("_SERVERSETUP","Настройки сервера");
define("_REFRESH","Обновить");
define("_VERSION","Версия");
define("_ON","Вкл");
define("_OFF","Выкл");
define("_SEC","секунд");
define("_SETRECOMMENDED","настройки соответствуют рекомендованным");
define("_SETNOTRECOMMENDED","не рекомендуется, но может работать");

//step3
define("_STEP3DESC","Получение информации о серверных директориях.");
define("_STEP3DESC2","Мастер установки должен найти все директории самостоятельно.");
define("_DIRROOT","Корневая папка");
define("_DIRDOCUMENT","URL путь");
define("_RECHECK","Перепроверить");
define("_ROOTDIRS","Директория сервера");
define("_OK","OK");
define("_NOTWRITABLE","Выполнение действий с директорией невозможно, проверьте права доступа!");
define("_SETUPNOTDELETABLE","Файл setup.php необходимо удалить вручную после установки!");

//step4
define("_STEP4DESC","Получение информации о базе данных.");
define("_DBSETTINGS","Настройки базы данных");
define("_DBCHECK","Проверить подключение");
define("_CANTCONNECT","Невозможно подключиться к базе данных!");
define("_CANTSELECTDB","База данных не найдена!");
define("_DBOK","Подключение к базе данных успешно!");
define("_DBPREVILEGES","Привилегии пользователя базы данных");
define("_HOST","Сервер");
define("_USER","Логин");
define("_PASSWORD","Пароль");
define("_DATABASE","База данных");
define("_TBLPREFIX","Префикс таблиц");
define("_NOTALLPREVILEGES","У пользователя отсуствуют необходимые права доступа!");
define("_PREFIXEXISTSV5","Найдена существующая установка, обновление невозможно!");
define("_PREFIXEXISTSV6","Найдена существующая установка, сейчас будет произведено обновление!");

//step5
define("_STEP5DESC","Создание первого Веб-Администратора.");
define("_ADMINSETTINGS","Информация доступа Веб-Администратора");
define("_PASSWORD2","Введите пароль еще раз");
define("_EMAILADR","Email адрес");
define("_ADMINCHECK","Проверить данные");
define("_PWNOCONFIRM","Пароли не совпадают!");
define("_NOREQUIREDFIELDS","Пропущены некоторые необходимые поля!");
define("_ADMINOK","Администратор успешно создан!");
define("_USERTOSHORT","Логин слишком короткий (мин. 4 символа)!");
define("_PWTOSHORT","Пароль слишком короткий (мин. 4 символа)!");
define("_NOVALIDEMAIL","Неправильный E-Mail адрес!");

//step6
define("_STEP6DESC","Вся собранная информация.");
define("_STEP6DESC2","AMXBans будет установлен со следующими настройками:");

//step7
define("_STEP7DESC","Процесс установки");
define("_TABLECREATE","Создание структуры таблиц");
define("_DEFAULTDATACREATE","Ввод необходимой информации");
define("_DEFAULTWEBSETTINGSCREATE","Ввод настроек");
define("_DEFAULTUSERMENUCREATE","Создание пользовательского меню");
define("_DEFAULTMODULESCREATE","Установка модулей");
define("_WEBADMINCREATE","Создание Веб-Админа");
define("_ALREADYEXISTS","Уже существует");
define("_CREATED","Создано успешно");
define("_FAILED","Не удалось");
define("_INSERTED","успешно зарегестрировано");
define("_CREATEWEBADMIN","Информация об Веб-админе");
define("_CREATEUSERLEVEL","Уровень доступа Веб-админа");
define("_CREATEWEBSETTINGS","Веб-сайт");
define("_CREATEUSERMENU","Пользовательское меню");
define("_FILEEXISTS","Конфиг уже существует!");
define("_FILEOPENERROR","Конфиг не может быть создан!");
define("_FILESUCCESS","Конфиг создан!");
define("_MANUALEDIT","Откройте /include/db.config.inc.php и скопируйте туда это:");
define("_SETUPENDDESC","Сейчас setup.php будет удален и вы будете перенапрвлены в AMXBans!");
define("_SETUPEND","Перейти к AMXBans...");
?>