<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WCAG2.0 breakout</title>
    <style>
     table, th, td {border:1px solid silver; border-collapse:collapse; }
     th, td { padding:.5em; vertical-align:top;}
     .more {display:block;}
     summary { cursor: pointer}
    </style>
</head>
<body>

<?php

$url = "../data/wcag2.1/wcag21.json";

$contents = file_get_contents($url);
$contents = utf8_encode($contents);
$wcag = json_decode($contents, true);


// echo "<pre>";
// print_r ($wcag);
// echo "</pre>";

echo "<table>";
echo "<tr>";
    // echo "<th>Principle</th>";
    echo "<th>Guideline</th>";
    echo "<th>Criteria</th>";
    echo "<th>Level</th>";
echo "</tr>";
$principles = $wcag["principles"];
$str = "";

for($i=0 ; $i < count($principles) ; $i++) {

    $guidelines = $principles[$i]["guidelines"];

    for($j=0 ; $j < count($guidelines) ; $j++) {
        $sc = $guidelines[$j]["successcriteria"];
        for($k=0 ; $k < count($sc) ; $k++) {
            $str .= "<tr>";
            // 1. guideline
            $str .= "<td>"
                . $guidelines[$j]["num"] . " - " . $principles[$i]["handle"] . ": "
                . $guidelines[$j]["handle"]
                . "</td>";

            // 2. Criteria
            $str .= "<td>"
                . "<details><summary>"
                . $sc[$k]["num"] . " - " . $sc[$k]["title"]
                . "</summary>"
                . "<div class='more'>"
                    . "<a href='@@' title='More on {$sc[$k]["title"]}' aria-title='More on {$sc[$k]["title"]}'>More</a> "
                    . ((count($sc[$k]["versions"]) > 1) ? "" : "(new to WCAG 2.1) ")
                . "</div>"
                . "</details>"
                . "</td>";

            // 3. Level
            $str .= "<td>" . $sc[$k]["level"] . "</td>";

            $str .= "</tr>";
        }
    }
}

echo $str;
echo "</table>";

exit;

// -------------------
//



?>


</body>
</html>
