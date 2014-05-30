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
define('REQUERIMENTO_SITUACAO_VERIFICAR', 3);
define('REQUERIMENTO_SITUACAO_RESOLVIDO', 4);

define('REQUERIMENTO_NORMAL', 0);
define('REQUERIMENTO_DA_SESSAO', 1);

define('REQUERIMENTO_RETORNO_NAO_NOTIFICADO', 0);
define('REQUERIMENTO_RETORNO_NOTIFICADO', 1);
define('REQUERIMENTO_RETORNO_DEMORADO', 2);
define('REQUERIMENTO_RETORNO_SERVICO_EFETIVADO', 3);
define('REQUERIMENTO_RETORNO_SERVICO_NAO_EFETIVADO', 4);

define('REQUERIMENTO_RETORNOS', serialize (array ( 0 => "Solicitante ainda não recebeu notificação de retorno",
                                                   1 => "Solicitante recebeu notificação de retorno",
                                                   2 => "Solicitante está demorando pra responder notificação de retorno",
                                                   3 => "Conclusão do requerimento confirmada pelo solicitante",
                                                   4 => "Solicitação não foi realizada" )));

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
define('TIPO_REQ_RUAS_MANUTENCAO_ASFALTO', 17);
define('TIPO_REQ_RUAS_COLOCACAO_BRITA', 18);
define('TIPO_REQ_COPIA_DOCUMENTOS', 19);
define('TIPO_REQ_CONSERTOS_SOLICITACAO_SERVICOS', 20);
define('TIPO_REQ_OUTROS', 21);

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
                                                 17 => "RUAS - Manutenção no asfalto",
                                                 18 => "RUAS - Colocação brita, areia, terra, saibro",
                                                 19 => "PREFEITURA - Cópia de documentos oficiais",
                                                 20 => "PREFEITURA - Consertos/Solicitação serviços e empréstimos",
                                                 21 => "OUTROS" )));

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



define('TIPO_GRAFICO_MAPA', 0);
define('TIPO_GRAFICO_BARRAS', 1);
define('TIPO_GRAFICO_PIZZA', 2);

define('GRAFICO_COR_AMARELO', 0);
define('GRAFICO_COR_VERDE', 1);
define('GRAFICO_COR_LARANJA', 2);
define('GRAFICO_COR_AZUL', 3);
define('GRAFICO_COR_ROXO', 4);
define('GRAFICO_COR_BEGE', 5);
define('GRAFICO_COR_VERMELHO', 6);
define('GRAFICO_COR_BRANCO', 7);

define('GRAFICO_FORMATO_SEM', 0);
define('GRAFICO_FORMATO_PERCENTO', 1);
define('GRAFICO_FORMATO_REAIS', 2);
define('GRAFICO_FORMATO_DOLAR', 3);

define('GRAFICO_FORMATO_UNIDADE', serialize (array ( 0 => "Sem formato",
                                                     1 => "%",
                                                     2 => "R$",
                                                     3 => "$" )));


// padroões do sistema 
define('REQUERENTE_PADRAO_ID', 1);
define('CIDADE_PADRAO_ID', 4144);


/* End of file constants.php */
/* Location: ./application/config/constants.php */