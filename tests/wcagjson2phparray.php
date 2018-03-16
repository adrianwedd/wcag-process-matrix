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

$url = "../data/wcag.json";

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
for($i=0 ; $i < count($wcag) ; $i++) {
    // $principle = $wcag[$i]["ref_id"] . " - " . $wcag[$i]["title"];
    $principle = $wcag[$i]["title"];
    $guidelines = $wcag[$i]["guidelines"];
    for($j=0 ; $j < count($guidelines) ; $j++) {
        $sc = $guidelines[$j]["success_criteria"];
        for($k=0 ; $k < count($sc) ; $k++) {
            $str = "<tr>";
                // $str .= "<td>" . $principle . "</td>";
                $str .= "<td>" . $guidelines[$j]["ref_id"] . " - " . $principle . ": " . $guidelines[$j]["title"] . "</td>";
                $str .= "<td>"
                    . "<details><summary>" . $sc[$k]["ref_id"] . " - " . $sc[$k]["title"] . "</summary>"
                    . $sc[$k]["description"]
                    . "<div class='more'>"
                    . "<a href='{$sc[$k]["url"]}' title='More on {$sc[$k]["title"]}' aria-title='More on {$sc[$k]["title"]}'>More</a> |";
                    // @TODO references
                $str .= "</div>"
                    . "</td>";
                $str .= "<td>" . $sc[$k]["level"] . "</td>";
            $str .= "</tr>";
            echo $str;
        }
    }
}
echo "</table>";

?>


</body>
</html>
