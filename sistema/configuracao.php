<?php

date_default_timezone_set('America/Sao_Paulo');

define('NOME_SITE', 'SDTS 3');
define('DESCICAO_SITE', 'SDTS 3 - Desenvolvimento de Sistemas');
$servidor_name = filter_input(INPUT_SERVER, "SERVER_NAME");
$porta = $_SERVER['SERVER_PORT'];
define('URL_PRODUCAO', 'http://'.$servidor_name.':'.$porta);
define('URL_DESENVOLVIMENTO', 'http://localhost'.$porta);