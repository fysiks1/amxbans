// Author Notes:
// This file has been translated from English to Portuguese-Portugal by Sonic from www.ukcs.net

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","ISO-8859-1"); //ISO-8859-1,utf-8

define("_INSTALLATION","Instalação");
define("_STEP","Passo");
define("_STEP1","Inicio");
define("_STEP2","Informação");
define("_STEP3","Directorios");
define("_STEP4","Base de Dados");
define("_STEP5","Administrador");
define("_STEP6","Sumário");
define("_STEP7","Fim");

define("_OF","de");
define("_NEXT","seguinte");
define("_BACK","anterior");
define("_DIRCHECK","Verificação de Directórios");

//step1
define("_WELCOME","Bem Vindo á suite de instlação do AMXBans.");
define("_WELCOME2","Este Wizard ira ajuda-lo atraves do processo de instalação.");
define("_LICENSEAGREE","Eu aceito os termos de licença");

//step2
define("_STEP2DESC","Informação das definições do servidor");
define("_SERVERSETUP","Definições do servidor");
define("_REFRESH","Actualizar");
define("_VERSION","Versão");
define("_ON","On");
define("_OFF","Off");
define("_SEC","Segundos");
define("_SETRECOMMENDED","Definições recomendadas");
define("_SETNOTRECOMMENDED","não recomendado, mas deve funcionar.");

//step3
define("_STEP3DESC","Obtendo informações do directorio");
define("_STEP3DESC2","Normalmente, este script detecta os caminhos do script automaticamente.");
define("_DIRROOT","Caminho raiz");
define("_DIRDOCUMENT","Caminho URL");
define("_RECHECK","Re-Verificar");
define("_ROOTDIRS","Directórios do Servidor");
define("_OK","OK");
define("_NOTWRITABLE","Directorio não gravavel, por favor verifica direitos!");
define("_SETUPNOTDELETABLE","Ficheiro setup.php terá de ser apagado manualmente após a instalação!");

//step4
define("_STEP4DESC","Obtendo informações da base de dados");
define("_DBSETTINGS","Definições da base de dados");
define("_DBCHECK","Verificar dados de Acesso");
define("_CANTCONNECT","Dados de acesso errados!");
define("_CANTSELECTDB","Base de dados não encontrada!");
define("_DBOK","Dados de acesso OK!");
define("_DBPREVILEGES","Previlegios da base de dados do utilizador");
define("_HOST","Host");
define("_USER","Utilizador");
define("_PASSWORD","Senha");
define("_DATABASE","Base de Dados");
define("_TBLPREFIX","Prefixo da Tabela");
define("_NOTALLPREVILEGES","Utilizador não tem todos os previlegios requeridos!");
define("_PREFIXEXISTSV5","Instalação existente foi encontrada, actualização impossivel!");
define("_PREFIXEXISTSV6","Instalação existente foi encontrada, ira ser agora actualizada!");

//step5
define("_STEP5DESC","A criar o primeiro administrador web");
define("_ADMINSETTINGS","Dados de Acesso de Administrador");
define("_PASSWORD2","Re-Insere Senha");
define("_EMAILADR","Endereço de Email");
define("_ADMINCHECK","Verificar Dados");
define("_PWNOCONFIRM","Senhas não são iguais!");
define("_NOREQUIREDFIELDS","Campos requeridos estão em falta!");
define("_ADMINOK","Dados de Admin OK!");
define("_USERTOSHORT","Nome de Utilizador muito pequeno (min. 4 caracteres)!");
define("_PWTOSHORT","Senha muita pequena (min. 4 caracteres)!");
define("_NOVALIDEMAIL","Endereço de E-mail não é valido!");

//step6
define("_STEP6DESC","Sumario dos dados recolhidos");
define("_STEP6DESC2","AMXBans irá agora ser instalado com os seguintes dados");

//step7
define("_STEP7DESC","Progreso da instalação");
define("_TABLECREATE","A criar estrutura da tabela");
define("_DEFAULTDATACREATE","Inserir dados requeridos");
define("_DEFAULTWEBSETTINGSCREATE","Inserir Definições");
define("_DEFAULTUSERMENUCREATE","Definir menu de utilizador");
define("_DEFAULTMODULESCREATE","Instalar modulo");
define("_WEBADMINCREATE","Criar admin web");
define("_ALREADYEXISTS","já existe");
define("_CREATED","criado com sucesso");
define("_FAILED","falhou");
define("_INSERTED","registado com sucesso");
define("_CREATEWEBADMIN","Dados do Admin web");
define("_CREATEUSERLEVEL","Nivel de Admin Web");
define("_CREATEWEBSETTINGS","Website");
define("_CREATEUSERMENU","Menu de Utilizador");
define("_FILEEXISTS","A config já existe!");
define("_FILEOPENERROR","A config não pode ser criada!");
define("_FILESUCCESS","Config criada!");
define("_MANUALEDIT","Abrir /include/db.config.inc.php e copiar & colar isto:");
define("_SETUPENDDESC","O setup.php irá agora ser apagado e você irá ser redireccionado para o AMXBans!");
define("_SETUPEND","Ir para o...");
?>