// Author Notes:
// This file has been translated from English to Mongolian by X_Man from www.amxbans.de.

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","utf-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Инсталл");
define("_STEP","Алхам");
define("_STEP1","Эхлэх");
define("_STEP2","Мэдээлэл");
define("_STEP3","Директорууд");
define("_STEP4","Өгөгдлийн сан");
define("_STEP5","Администратор");
define("_STEP6","Дүгнэлт");
define("_STEP7","Дуусгах");

define("_OF","-н");
define("_NEXT","дараачын");
define("_BACK","буцах");
define("_DIRCHECK","Директорыг шалгахад");

//step1
define("_WELCOME","Amxbans -н инсталлд тавтай морил.");
define("_WELCOME2","Суулгах явцад танд зааврыг өгнө.");
define("_LICENSEAGREE","Би энэ гэрээг зөвшөөрч байна");

//step2
define("_STEP2DESC","Сервэрийн тохиргооны мэдээлэл");
define("_SERVERSETUP","Тохиргооны мэдээлэл");
define("_REFRESH","Шинэчлэх");
define("_VERSION","Хувилбар");
define("_ON","Нээх");
define("_OFF","Хаах");
define("_SEC","Секунд");
define("_SETRECOMMENDED","Тохиргоо шаадлага хангаж байна");
define("_SETNOTRECOMMENDED","Тохиргоо шаардлага хангахгүй байна, магадгүй ажиллахгүй шүү");

//step3
define("_STEP3DESC","Директорын мэдээлэл");
define("_STEP3DESC2","Энэ скрип нь аутоматаар таны замуудын танин ");
define("_DIRROOT","Root зам");
define("_DIRDOCUMENT","URL зам");
define("_RECHECK","Дахин шалга");
define("_ROOTDIRS","Серверийн директорууд");
define("_OK","OK");
define("_NOTWRITABLE","Директор бичих боломжгүй байна. Бичих эрхийг нь шалга!");
define("_SETUPNOTDELETABLE","Суулгаж дуусаны дараа setup.php файлыг та өөрөө устгаарай!");

//step4
define("_STEP4DESC","Өгөгдлийн сангийн мэдээлэл авах");
define("_DBSETTINGS","Өгөгдлийн сангийн мэдээлэл");
define("_DBCHECK","Өгөгдлийн хандах эрхийг шалга");
define("_CANTCONNECT","Өгөгдлийн хандах эрх алга!");
define("_CANTSELECTDB","Өгөгддлийн сан олдсонгүй!");
define("_DBOK","Өгөгдлийн хандалт OK!");
define("_DBPREVILEGES","Өгөгдлийн сангийн хэрэглэгчийн эрх");
define("_HOST","Хост");
define("_USER","Нэр");
define("_PASSWORD","Нууц үг");
define("_DATABASE","Өгөгдлийн сан");
define("_TBLPREFIX","Хүснэгтийн префикс");
define("_NOTALLPREVILEGES","Хэрэглэгчд шаардсан бүх эрх алга!");
define("_PREFIXEXISTSV5","Өмнө нь суулгасан инсталл олдлоо, магадгүй шинэчилж чадахгүй!");
define("_PREFIXEXISTSV6","Өмнө нь суулгасан инсталл олдлоо, Шинэчилж сууна!");

//step5
define("_STEP5DESC","Анхны Веб Администратор үүсгэх");
define("_ADMINSETTINGS","Үүсгэх администраторийн өгөдөл");
define("_PASSWORD2","Нууц үгээ дахин бич");
define("_EMAILADR","И-мэйл хаяг");
define("_ADMINCHECK","Өгөгдлийн шалга");
define("_PWNOCONFIRM","Нууц үг таарахгүй байна!");
define("_NOREQUIREDFIELDS","Шаардсан нүдүүнд орхигдсон байна!");
define("_ADMINOK","Админ өгөгдөл ok!");
define("_USERTOSHORT","Хэрэглэгчийн нэр хэт богино байна (мин. 4 тэмдэгт)!");
define("_PWTOSHORT","Нууц үг хэт богино байна (мин. 4 тэмдэгт)!");
define("_NOVALIDEMAIL","Буруу И-мэйл хаяг байна!");

//step6
define("_STEP6DESC","Цуглуулсан өгөгдлийн дүгнэлт");
define("_STEP6DESC2","AMXBans дараах өгөгдлөөр сууна");

//step7
define("_STEP7DESC","Суулгах явц");
define("_TABLECREATE","Хүснэгтийн бүтцийг үүсгэж байна");
define("_DEFAULTDATACREATE","Шаардсан өгөгдлийг оруул");
define("_DEFAULTWEBSETTINGSCREATE","Оруулах тохиргоо");
define("_DEFAULTUSERMENUCREATE","Хэрэглэгчийн цэс тохируулах");
define("_DEFAULTMODULESCREATE","Суулгах модул");
define("_WEBADMINCREATE","Вэб админ үүсгэх");
define("_ALREADYEXISTS","Үүссэн байна");
define("_CREATED","Амьжилттай үүслээ");
define("_FAILED","Алдаа гарлаа");
define("_INSERTED","амьжилттай бүртгэгдлээ");
define("_CREATEWEBADMIN","ВэбАдминын өгөгдөл");
define("_CREATEUSERLEVEL","ВэбАдминын түвшин");
define("_CREATEWEBSETTINGS","Вэб сайт");
define("_CREATEUSERMENU","Хэрэглэгчийн цэс");
define("_FILEEXISTS","Тохиргоо үүссэн байна!");
define("_FILEOPENERROR","Тохиргоог үүсгэж чадсанүй!");
define("_FILESUCCESS","Тохиргоо үүслээ!");
define("_MANUALEDIT","/include/db.config.inc.php файлыг нээгээд энийг хуулж байрлуулна уу(copy & paste):");
define("_SETUPENDDESC","Одоо setup.php файлыг устгаад AMXBans-н үндсэн хуудас уруу очих болно!");
define("_SETUPEND","AMXBans-н үндсэн хуудас уруу очих...");
?> 