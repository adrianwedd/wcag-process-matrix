<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WCAG2.0 Responsibility Matrix</title>
    <style>
        table, th, td {border:1px solid silver; border-collapse:collapse; }
        th, td { padding:.5em; vertical-align:top;}
        td+td+td { text-align:center;}
        .more {display:block;}
        summary { cursor: pointer}
    </style>
</head>
<body>
    <h1>WCAG2.0 Responsibility Matrix</h1>

<?php

// we load contents
// all the WCAG information
$url = "data/wcag.json";
$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$wcag = json_decode($contents, true);
// responsibility matrix
$url = "data/responsibility_matrix.json";
$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$matrix = json_decode($contents, true);
// labels for responsibility matrix
$url = "data/responsibility_labels.json";
$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$labels = json_decode($contents, true);

// table header
$th[] = "Guideline";
$th[] = "Success criteria";
$th[] = "Level";
for($i=0 ; $i < count($labels) ; $i++ ) {
    $th[] = $labels[$i];
}

// adding data for each line

$row = 0; // lines for our table
for($i=0 ; $i < count($wcag) ; $i++) {
    $principle = $wcag[$i]["title"];
    $guidelines = $wcag[$i]["guidelines"];
    for($j=0 ; $j < count($guidelines) ; $j++) {
        $sc = $guidelines[$j]["success_criteria"];
        for($k=0 ; $k < count($sc) ; $k++) {
            // each $tr[$row] is one line in the final table
            $tr[$row][] = $guidelines[$j]["ref_id"] . " - " . $principle . ": " . $guidelines[$j]["title"];
            $tr[$row][] = $sc[$k]["ref_id"] . " - " . $sc[$k]["title"];
            // misses $sc[$k]["description"]
            // misses $sc[$k]["url"]
            $tr[$row][] = $sc[$k]["level"];

            // responsibility matrix injected here
            // we add to the current row the responsibility matrix for the current success criteria
            $current_matrix = $matrix[$row][$sc[$k]["ref_id"]];
            for($l=0 ; $l < count($current_matrix) ; $l++) {
                $tr[$row][] = $current_matrix[$l];
            }

            // end, we add 1 to $row;
            $row++;
        }
    }
}


// debug
// echo "<pre>";
// print_r($th);
// print_r($tr);
// echo "</pre>";

// ----------   table ---------------

// start
echo "<table>";

// header
echo "<tr>";
for($i = 0 ; $i < count($th) ; $i++) {
    echo "<th>" . $th[$i] . "</th>";
}
echo "</tr>\n";

// data
for($i = 0 ; $i < count($tr) ; $i++) {
    echo "<tr>";
    for($j = 0 ; $j < count($tr[$i]) ; $j++) {
        $content = ($tr[$i][$j] === true) ? "X" : $tr[$i][$j];
        echo "<td>" . $content . "</td>";
    }
    echo "</tr>\n";
}


// end
echo "</table>";
// ----------   end table ---------------

?>

</body>
</html>