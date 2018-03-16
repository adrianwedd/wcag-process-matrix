<?php

$url = "overview_table.html";

$contents = file_get_contents($url);

$pattern = '/style="(.*)"/u';
$contents = preg_replace( $pattern , '' , $contents);

echo $contents;

?>