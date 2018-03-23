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

$row = 0; // lines for our table
for($i=0 ; $i < count($wcag) ; $i++) {
	$principle = $wcag[$i]["title"];
	$guidelines = $wcag[$i]["guidelines"];
	for($j=0 ; $j < count($guidelines) ; $j++) {
		$sc = $guidelines[$j]["success_criteria"];
		for($k=0 ; $k < count($sc) ; $k++) {
			// each $tr[$row] is one line in the final table
			$tr[$row][] = $guidelines[$j]["ref_id"] . " - " . $principle . ": " . $guidelines[$j]["title"];
			$sc_id = $sc[$k]["ref_id"];
			$sc_title = $sc[$k]["title"];
			$sc_description = $sc[$k]["description"];
			$sc_url = $sc[$k]["url"];
			$tr[$row][] = "<a href='" . $sc_url . "'><strong>" . $sc_id . " - " . $sc_title . "</strong></a>";
			$tr[$row][] = $sc_description;
			$tr[$row][] = $sc[$k]["level"];

			// responsibility matrix injected here
			// we add to the current row the responsibility matrix for the current success criteria
			$current_matrix = $matrix[$row][$sc[$k]["ref_id"]];
			for($l=0 ; $l < count($current_matrix) ; $l++) {
				$tr[$row][] = ($current_matrix[$l] === true ? "X" : "");
			}

			// end, we add 1 to $row;
			$row++;
		}
	}
}


?>