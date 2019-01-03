<?php

$url = "../data/wcag2.1/wcag21.json";

$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$wcag = json_decode($contents, true);


echo "<pre>";
// print_r ($wcag);

echo "principles length: " . count($wcag["principles"]);
echo "</pre>";

?>