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

define('TIPO_REQ_ENTULHO', 1);
define('TIPO_REQ_ILUMINACAO', 2);
define('TIPO_REQ_LIXEIRA', 3);
define('TIPO_REQ_PARADA_ONIBUS', 4);
define('TIPO_REQ_PLANTIO', 5);
define('TIPO_REQ_PODAS', 6);
define('TIPO_REQ_PRACAS', 7);
define('TIPO_REQ_RUAS_LIMPEZA_ROCADA', 8);
define('TIPO_REQ_RUAS_NIVELAMENTO', 9);
define('TIPO_REQ_RUAS_LOMBADA', 10);
define('TIPO_REQ_RUAS_CANOS', 11);
define('TIPO_REQ_RUAS_CALCAMENTO', 12);
define('TIPO_REQ_RUAS_SEMAFORO', 13);
define('TIPO_REQ_RUAS_PATROLAMENTO', 14);
define('TIPO_REQ_RUAS_SINALIZACAO', 15);
define('TIPO_REQ_RUAS_BUEIROS', 16);
define('TIPO_REQ_OUTROS', 17);

define('TIPOS_REQUERIMENTOS', serialize (array ( 1 => "ENTULHO - Remoção, limpeza",
                                                 2 => "ILUMINAÇÃO - Instalação, substituição, reparo",
                                                 3 => "LIXEIRA - Instalação, substituição, reparo",
                                                 4 => "PARADA DE ÔNIBUS - Instalação, reparo",
                                                 5 => "PLANTIO - Mudas e árvores",
                                                 6 => "PODAS - Mudas e árvores",
                                                 7 => "PRAÇAS - Manutenção, limpeza",
                                                 8 => "RUAS - Limpeza, Roçada",
                                                 9 => "RUAS - Nivelamento",
                                                 10 => "RUAS - Instalação/Conserto de lombada",
                                                 11 => "RUAS - Instalação/Conserto de canos",
                                                 12 => "RUAS - Instalação/Conserto calçamento",
                                                 13 => "RUAS - Instalação/Conserto de semáforos",
                                                 14 => "RUAS - Patrolamento",
                                                 15 => "RUAS - Instalação/Conserto de placas de sinalização/identificação",
                                                 16 => "RUAS - Manutenção de bueiros",
                                                 17 => "OUTROS" )));


define('PESSOA_FISICA',0);
define('PESSOA_JURIDICA',1);

define('MORA_OUTRA_CIDADE',0);
define('MORA_NA_CIDADE',1);

define('REQUERENTE_TIPO_CIDADAO',0);
define('REQUERENTE_TIPO_VEREADOR',1);

define('TIPOS_AUTORIZACAO', serialize (array ( 1 => "Administrador",
                                               2 => "Operador" )));

define('AUTORIZACAO_OPERADOR',0);
define('AUTORIZACAO_ADMINISTRADOR',1);

define('REQUERENTE_PADRAO_ID', 1);


/* End of file constants.php */
/* Location: ./application/config/constants.php */