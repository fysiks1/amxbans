// Author Notes:
// This file has been translated from English to Brazilian Portuguese by Seta00 from instantsfun.es

// This is the Installation Language File

<?php
//encoding and locale
define("_ENCODING","UTF-8"); //ISO-8859-1,utf-8

define("_INSTALLATION","Instalação");
define("_STEP","Passo");
define("_STEP1","Início");
define("_STEP2","Informação");
define("_STEP3","Diretórios");
define("_STEP4","Banco de Dados");
define("_STEP5","Administrador");
define("_STEP6","Resumo");
define("_STEP7","Fim");

define("_OF","de");
define("_NEXT","próximo");
define("_BACK","anterior");
define("_DIRCHECK","Checagem de diretórios");

//step1
define("_WELCOME","Bem-vindo ao pacote de instalação do AMXBans.");
define("_WELCOME2","Esse assistente o guiará durante o processo de instalação.");
define("_LICENSEAGREE","Eu aceito os Termos da Licença");

//step2
define("_STEP2DESC","Informação sobre as configurações do servidor");
define("_SERVERSETUP","Configurações do servidor");
define("_REFRESH","Atualizar");
define("_VERSION","Versão");
define("_ON","On");
define("_OFF","Off");
define("_SEC","Segundos");
define("_SETRECOMMENDED","Configurações recomendadas");
define("_SETNOTRECOMMENDED","Não recomendadas, mas normalmente funcionam");

//step3
define("_STEP3DESC","Informação sobre os diretórios de instalação");
define("_STEP3DESC2","Normalmente, o instalador detecta os diretórios automaticamente");
define("_DIRROOT","Raiz do diretório");
define("_DIRDOCUMENT","Caminho da URL");
define("_RECHECK","Testar novamente");
define("_ROOTDIRS","Diretórios do servidor");
define("_OK","OK");
define("_NOTWRITABLE","Diretório somente leitura, por favor cheque suas permissões de acesso!");
define("_SETUPNOTDELETABLE","O arquivo setup.php deve ser deletado manualmente após a instalação!");

//step4
define("_STEP4DESC","Informação sobre o Banco de Dados");
define("_DBSETTINGS","Configurações do Banco de Dados");
define("_DBCHECK","Testar dados de acesso");
define("_CANTCONNECT","Dados de acesso incorretos!");
define("_CANTSELECTDB","Banco de Dados não encontrado!");
define("_DBOK","Dados de acesso OK!");
define("_DBPREVILEGES","Privilégios do Banco de Dados dos usuários");
define("_HOST","Host");
define("_USER","Usuário");
define("_PASSWORD","Senha");
define("_DATABASE","Banco de Dados");
define("_TBLPREFIX","Prefixo das tabelas");
define("_NOTALLPREVILEGES","O usuário não tem os privilégios necessários!");
define("_PREFIXEXISTSV5","Uma instalação foi encontrada, não é possível fazer a atualização!");
define("_PREFIXEXISTSV6","Uma instalação foi encontrada, sua versão será atualizada!");

//step5
define("_STEP5DESC","Criando o primeiro administrador web");
define("_ADMINSETTINGS","Dados de acesso do administrador");
define("_PASSWORD2","Entre novamente com a senha");
define("_EMAILADR","Endereço de Email");
define("_ADMINCHECK","Testar dados");
define("_PWNOCONFIRM","As senhas não conferem!");
define("_NOREQUIREDFIELDS","Existem campos obrigatórios em branco!");
define("_ADMINOK","Dados do administrador OK!");
define("_USERTOSHORT","Nome de usuário muito curto (min. 4 caracteres)!");
define("_PWTOSHORT","Senha muito curta (min. 4 caracteres)!");
define("_NOVALIDEMAIL","O endereço de Email não é valido!");

//step6
define("_STEP6DESC","Resumo dos dados coletados");
define("_STEP6DESC2","AMXBans será instalado de acordo com as seguintes informações");

//step7
define("_STEP7DESC","Progresso da Instalação");
define("_TABLECREATE","Criando a estrutura de tabelas");
define("_DEFAULTDATACREATE","Entrando com os dados obrigatórios");
define("_DEFAULTWEBSETTINGSCREATE","Configurando");
define("_DEFAULTUSERMENUCREATE","Configurando menu do usuário");
define("_DEFAULTMODULESCREATE","Instalando o módulo");
define("_WEBADMINCREATE","Criando o administrador web");
define("_ALREADYEXISTS","já existe");
define("_CREATED","criado com sucesso");
define("_FAILED","falhou");
define("_INSERTED","registrado com sucesso");
define("_CREATEWEBADMIN","Dados do admin web");
define("_CREATEUSERLEVEL","Níveis do admin web");
define("_CREATEWEBSETTINGS","Website");
define("_CREATEUSERMENU","Menu do usuário");
define("_FILEEXISTS","A configuração já existe!");
define("_FILEOPENERROR","A configuração não pode ser criada!");
define("_FILESUCCESS","Configuração criada!");
define("_MANUALEDIT","Abra /include/db.config.inc.php e cole o seguinte texto:");
define("_SETUPENDDESC","O arquivo setup.php será agora deletado e você será redirecionado para o AMXBans!");
define("_SETUPEND","Abrir o AMXBans...");
?>