<?php

$url = "../data/responsibility_matrix.json";

$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$wcag = json_decode($contents, true);


echo "<pre>";
print_r ($wcag);
echo "</pre>";

?>