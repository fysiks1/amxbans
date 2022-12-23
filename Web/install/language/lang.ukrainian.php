// Author Notes:
// This file has been translated from English to Ukrain by ***Fire*** from http://makeserver.ru

// This is the General Language File

<?php
//encoding and locale
define("_ENCODING","Windows-1251"); //ISO-8859-1,utf-8

define ( "_INSTALLATION", "Установка");
define ( "_STEP", "Кроки");
define ( "_STEP1", "Старт");
define ( "_STEP2", "Інформація");
define ( "_STEP3", "Папки та шляхи");
define ( "_STEP4", "База даних");
define ( "_STEP5", "Адміністратор");
define ( "_STEP6", "Зібрана інформація");
define ( "_STEP7", "Завершення");

define ( "_OF", "з");
define ( "_NEXT", "далі");
define ( "_BACK", "назад");
define ( "_DIRCHECK", "Перевірка директорій");

// step1
define ( "_WELCOME", "Ласкаво просимо в установку AMXBans.");
define ( "_WELCOME2", "Цей майстер допоможе вам успішно встановити та налаштувати AMXBans");
define ( "_LICENSEAGREE", "Я приймаю умови угоди");

// step2
define ( "_STEP2DESC", "Інформація про налаштування сервера");
define ( "_SERVERSETUP", "Параметри сервера");
define ( "_REFRESH", "Оновити");
define ( "_VERSION", "Версія");
define ( "_ON", "Увімкнути");
define ( "_OFF", "Вимк.");
define ( "_SEC", "Секунд");
define ( "_SETRECOMMENDED", "Опції відповідають рекомендованим");
define ( "_SETNOTRECOMMENDED", "не рекомендується, але може працювати");

// step3
define ( "_STEP3DESC", "Отримання інформації про папки і шляхи");
define ( "_STEP3DESC2", "Скрипт знаходить всі шляхи та папки самостійно");
define ( "_DIRROOT", "Коренева діректорія");
define ( "_DIRDOCUMENT", "URL шлях");
define ( "_RECHECK", "перевірити ще раз");
define ( "_ROOTDIRS", "Директорія сервера");
define ( "_OK", "OK");
define ( "_NOTWRITABLE", "Неможливо записати у папку, перевірте права доступу!");
define ( "_SETUPNOTDELETABLE", "Файл setup.php необхідно видалити вручну після установки!");

// step4
define ( "_STEP4DESC", "Отримання інформації про базу даних");
define ( "_DBSETTINGS", "Опції бази даних");
define ( "_DBCHECK", "перевірити підключення");
define ( "_CANTCONNECT", "Не можу підключитися до бази даних!");
define ( "_CANTSELECTDB", "База даних не існує!");
define ( "_DBOK", "Підключення до бази даних успішно!");
define ( "_DBPREVILEGES", "Привілеї користувача бази даних");
define ( "_HOST", "Сервер");
define ( "_USER", "Логін");
define ( "_PASSWORD", "Пароль");
define ( "_DATABASE", "База даних");
define ( "_TBLPREFIX", "Префікс таблиць");
define ( "_NOTALLPREVILEGES", "У користувач відсутні необхідні права доступу!");
define ( "_PREFIXEXISTSV5", "Знайдена існуюча установка, оновлення неможливо!");
define ( "_PREFIXEXISTSV6", "Знайдена існуюча установка, зараз буде проведено оновлення!");

// step5
define ( "_STEP5DESC", "Створення першого Веб-Адміністратора");
define ( "_ADMINSETTINGS", "Інформація доступу Web-Адміністратора");
define ( "_PASSWORD2", "Введіть пароль ще раз");
define ( "_EMAILADR", "Email адреса");
define ( "_ADMINCHECK", "Перевірити дані");
define ( "_PWNOCONFIRM", "Паролі не збігаються!");
define ( "_NOREQUIREDFIELDS", "пропущені деякі необхідні поля!");
define ( "_ADMINOK", "Адмін успішно створен!");
define ( "_USERTOSHORT", "Логін дуже короткий (мін. 4 символи )!");
define ( "_PWTOSHORT", "Пароль дуже короткий (мін. 4 символи )!");
define ( "_NOVALIDEMAIL", "Невірна E-Mail адреса!");

// step6
define ( "_STEP6DESC", "Вся зібрана інформація");
define ( "_STEP6DESC2", "AMXBans буде встановлений з наступними налаштуваннями:");

// step7
define ( "_STEP7DESC", "Процес установки");
define ( "_TABLECREATE", "Створення структури таблиць");
define ( "_DEFAULTDATACREATE", "Введіть необхідну інформацію");
define ( "_DEFAULTWEBSETTINGSCREATE", "Введіть налаштування");
define ( "_DEFAULTUSERMENUCREATE", "Створити меню користувача");
define ( "_DEFAULTMODULESCREATE", "Встановити модуль");
define ( "_WEBADMINCREATE", "Створення Веб-Адміна");
define ( "_ALREADYEXISTS", "Вже існує");
define ( "_CREATED", "Створено успішно");
define ( "_FAILED", "провалено");
define ( "_INSERTED", "успішно зареєстровано пошуковою системою");
define ( "_CREATEWEBADMIN", "Інформація про Web-адміна");
define ( "_CREATEUSERLEVEL", "Рівень доступу Веб-адміна");
define ( "_CREATEWEBSETTINGS", "Веб-сайт");
define ( "_CREATEUSERMENU", "меню користувача");
define ( "_FILEEXISTS", "Конфиг вже існує!");
define ( "_FILEOPENERROR", "Конфиг не може бути створено!");
define ( "_FILESUCCESS", "Конфиг створено!");
define ( "_MANUALEDIT", "Відкрийте /include/db.config.inc.php і скопіюйте туди це:");
define ( "_SETUPENDDESC", "Зараз setup.php буде видалений, а ви будете перенапрвлени в AMXBans!");
define ( "_SETUPEND", "Перейти до AMXBans ..."); 
?>