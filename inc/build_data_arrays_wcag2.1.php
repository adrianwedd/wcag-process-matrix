<?php

// table header
$th[] = "Guideline";
$th[] = "Success criteria";
$th[] = "Explanation";
$th[] = "Level";
for($i=0 ; $i < count($labels) ; $i++ ) {
	$th[] = $labels[$i];
}

// adding data for each line

// adding data for each line
$principles = $wcag["principles"];
$row = 0; // lines for our table
for($i=0 ; $i < count($principles) ; $i++) {

    $guidelines = $principles[$i]["guidelines"];

    for($j=0 ; $j < count($guidelines) ; $j++) {
        $sc = $guidelines[$j]["successcriteria"];
        for($k=0 ; $k < count($sc) ; $k++) {
            // each $tr[$row] is one line in the final table
            $tr[$row][] = $guidelines[$j]["num"] . " - " . $principles[$i]["handle"] . ": "
                . $guidelines[$j]["handle"];
            // $tr[$row][] = $sc[$k]["num"] . " - " . $sc[$k]["title"];
            // misses $sc[$k]["description"]
            // misses $sc[$k]["url"]
            // $tr[$row][] = $sc[$k]["level"];


            $sc_id = $sc[$k]["num"];
            $sc_title = $sc[$k]["handle"];
            $sc_description = $sc[$k]["title"];
            // $sc_url = $sc[$k]["url"];
            // https://www.w3.org/TR/WCAG21/#
            $sc_url = "https://www.w3.org/TR/WCAG21/#" . substr($sc[$k]["id"], 6);
            $tr[$row][] = "<a href='" . $sc_url . "'><strong>" . $sc_id . " - " . $sc_title . "</strong></a>";
            $tr[$row][] = $sc_description;
            $tr[$row][] = $sc[$k]["level"];


            // responsibility matrix injected here
            // we add to the current row the responsibility matrix for the current success criteria
            $current_matrix = $matrix[$row][$sc[$k]["num"]];
            for($l=0 ; $l < count($current_matrix) ; $l++) {
                $tr[$row][] = ($current_matrix[$l] === true ? "X" : "");
            }

            // end, we add 1 to $row;
            $row++;
        }
    }
}

?>