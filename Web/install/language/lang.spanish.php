// Author Notes:
// This file has been translated from English to Spanish by Caza .

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","utf-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Instalación");
define("_STEP","Paso");
define("_STEP1","Comienzo");
define("_STEP2","Información");
define("_STEP3","Directorios");
define("_STEP4","Base de datos");
define("_STEP5","Administrador");
define("_STEP6","Sumario");
define("_STEP7","Finalizar");

define("_OF","de");
define("_NEXT","siguiente");
define("_BACK","atrás");
define("_DIRCHECK","Comprobación de directorios");

//step1
define("_WELCOME","Bienvenido a la instalación de AMXBans.");
define("_WELCOME2","Esta página le guiará durante el proceso de instalación.");
define("_LICENSEAGREE","Acepto los términos de la licencia");

//step2
define("_STEP2DESC","Información de las opciones del servidor");
define("_SERVERSETUP","Opciones del servidor");
define("_REFRESH","Actualizar");
define("_VERSION","Versión");
define("_ON","Activado");
define("_OFF","Desactivado");
define("_SEC","Segundos");
define("_SETRECOMMENDED","Las opciones son aptas y cumplen las recomendadas");
define("_SETNOTRECOMMENDED","No recomendado, pero puede valer");

//step3
define("_STEP3DESC","Información de directorios");
define("_STEP3DESC2","Normalmente, esta página detecta las rutas automáticamente");
define("_DIRROOT","Directorio raíz");
define("_DIRDOCUMENT","Ruta de la URL");
define("_RECHECK","Volver a comprobar");
define("_ROOTDIRS","Directorios del servidor");
define("_OK","Completado");
define("_NOTWRITABLE","No se puede escribir en el directorio, ¡Porfavor comprueba los permisos!");
define("_SETUPNOTDELETABLE","¡El archivo setup.php debe ser borrado manualmente después de la instalación!");

//step4
define("_STEP4DESC","Información de la base de datos");
define("_DBSETTINGS","Opciones de la base de datos");
define("_DBCHECK","Comprobar acceso");
define("_CANTCONNECT","¡Datos de acceso incorrectos!");
define("_CANTSELECTDB","¡Base de datos no encontrada!");
define("_DBOK","¡Acceso Correcto!");
define("_DBPREVILEGES","Privilegios del usuario de la base de datos");
define("_HOST","Servidor");
define("_USER","Usuario");
define("_PASSWORD","Contraseña");
define("_DATABASE","Base de datos");
define("_TBLPREFIX","Prefijo de tablas");
define("_NOTALLPREVILEGES","¡El usuario no tiene todos los privilegios necesarios!");
define("_PREFIXEXISTSV5","Se ha encontrado una instalación previa pero no se puede actualizar");
define("_PREFIXEXISTSV6","Se ha encontrado una instalación previa, va a ser actualizada");

//step5
define("_STEP5DESC","Creando el primer administrador web");
define("_ADMINSETTINGS","Datos de acceso del administrador");
define("_PASSWORD2","Reescribe la contraseña");
define("_EMAILADR","Dirección de Email");
define("_ADMINCHECK","Comprobar datos");
define("_PWNOCONFIRM","¡Las contraseñas no coinciden!");
define("_NOREQUIREDFIELDS","¡Faltan campos requeridos!");
define("_ADMINOK","¡Datos de administrador creados!");
define("_USERTOSHORT","¡Nombre de usuario demasiado corto (min. 4 caracteres)!");
define("_PWTOSHORT","¡Contraseña demasiado corta (min. 4 caracteres)!");
define("_NOVALIDEMAIL","¡La dirección de Email no es válida!");

//step6
define("_STEP6DESC","Sumario de datos");
define("_STEP6DESC2","AMXBans será instalado con los siguientes datos");

//step7
define("_STEP7DESC","Progreso de la instalación");
define("_TABLECREATE","Creando la estructura de la tabla");
define("_DEFAULTDATACREATE","Escribe los datos requeridos");
define("_DEFAULTWEBSETTINGSCREATE","Configura las opciones");
define("_DEFAULTUSERMENUCREATE","Configuración del menú del usuario");
define("_DEFAULTMODULESCREATE","Instalación del módulo");
define("_WEBADMINCREATE","Creación de administrador web");
define("_ALREADYEXISTS","Ya existe");
define("_CREATED","Creado con éxito");
define("_FAILED","Fallido");
define("_INSERTED","Registro completado");
define("_CREATEWEBADMIN","Datos del administrador web");
define("_CREATEUSERLEVEL","Nivel del administrador web");
define("_CREATEWEBSETTINGS","Página web");
define("_CREATEUSERMENU","Menú del usuario");
define("_FILEEXISTS","¡La configuración ya existe!");
define("_FILEOPENERROR","¡La configuración no pudo ser creada!");
define("_FILESUCCESS","¡Configuración creada!");
define("_MANUALEDIT","Abre /include/db.config.inc.php y copia y pega esto:");
define("_SETUPENDDESC","Ahora el archivo setup.php va a ser eliminado y vas a ser redireccionado a AMXBans");
define("_SETUPEND","Ir a AMXBans...");
?>