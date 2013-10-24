<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


define('NOME_CIDADE', 'Lajeado');
define('CODENAME_CIDADE', 'lajeado');

define('USUARIO_ATIVO', 0);

define('ITENS_POR_PAGINA', 20);

define('REQUERIMENTO_SITUACAO_EM_ANALISE', 0);
define('REQUERIMENTO_SITUACAO_ANALISADO', 1);
define('REQUERIMENTO_SITUACAO_PROTOCOLADO', 2);
define('REQUERIMENTO_SITUACAO_RESOLVIDO', 3);

define('REQUERIMENTO_SITUACOES', serialize (array ( 0 => "Em análise",
                                                    1 => "Analisado",
                                                    2 => "Protocolado",
                                                    3 => "" )));

define('PESSOA_FISICA',0);
define('PESSOA_JURIDICA',1);

define('MORA_OUTRA_CIDADE',0);
define('MORA_NA_CIDADE',1);

define('REQUERENTE_TIPO_CIDADAO',0);
define('REQUERENTE_TIPO_VEREADOR',1);





define('ACOES_TIPO_AVERIGUACAO_PROCESSO', 1);
define('ACOES_TIPO_AVERIGUACAO_AUDITORIA', 2);
define('ACOES_TIPO_AVERIGUACAO_RECLAMACAO_CLIENTE', 3);

define('NIVEIS_ACOES', serialize (array ( 1 => "Recomendar",
                                          2 => "Informar",
                                          3 => "Agir" )));

define('TIPOS_AUTORIZACAO', serialize (array ( 1 => "Administrador",
                                               2 => "Operador" )));




/* End of file constants.php */
/* Location: ./application/config/constants.php */