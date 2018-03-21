<?php

$url = "data/wcag2.0/wcag.json";
$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$wcag = json_decode($contents, true);
// responsibility matrix
$url = "data/wcag2.0/responsibility_matrix.json";
$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$matrix = json_decode($contents, true);
// labels for responsibility matrix
$url = "data/responsibility_labels.json";
$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$labels = json_decode($contents, true);

?>