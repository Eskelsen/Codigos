<?php

# Configurações: arquivo de configurações gerais [C]

set_time_limit(25);

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

# Timezone
date_default_timezone_set('America/Sao_Paulo');

# Conexão com Banco de Dados
define('HOST', 'localhost');
define('DB', 'database');
define('USER', 'root');
define('PSW', '');

# Constantes de diretórios
define('BAR', DIRECTORY_SEPARATOR);
define('DIR', __DIR__ . BAR);
define('DATA',DIR . 'data' . BAR);
define('ENGINE',DIR . 'engine' . BAR);
define('PACKS',DIR . 'packs' . BAR);
define('FRONTAGE',DIR . 'frontage' . BAR);
