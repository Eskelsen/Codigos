<?php

# Minirouter

# Retorna a requisição pura com base no diretório do arquivo
function init($in = WEB){
    $base = urlBaseExtract($in);
    $stream = urlCallExtract($base) ?? false;
    return $stream ? trim($stream,'/') : false;
}

# Retorna a base para depurar requisição ao sistema
function urlBaseExtract($in){
    $out = explode(WEB,$in,2);
    return end($out);
}

# Trata a parte importante da URL chamada (requisição pura)
function urlCallExtract($base){
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $call = $base ? explode($base,$url,2) : false;
    return $call ? substr(end($call),1) : substr($url,1);
}

# Retorna a última parte da requisição
function endPath(){
    $in = init();
    $out = array_filter(explode('/',$in));
    return end($out) ?? false;
}

# Retorna a requisição completa como array
function initArray($in = WEB){
    $url = init($in);
    return $url ? explode('/',$url) : [];
}

# Retorna a requisição completa como array com chaves
function pathfy($keys,$in = WEB){
    $values = initArray($in);
    $ks = count($keys);
    $vs = count($values);
    $l = ($ks>=$vs) ? $vs : $ks;
    $keys   = array_slice($keys,0,$l);
    $values = array_slice($values,0,$l);
    return $values ? array_combine($keys,$values) : false;
}

# Recupera a URL base para criar link
function getUrl(){
    return $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] . '/';
}

# Cria link com base no argumento passado
function url($in = ''){
    return getUrl() . $in;
}
