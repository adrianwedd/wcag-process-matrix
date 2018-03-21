<?php

// Generate table WCAG 2.0

// -----------------------
// 0.we load contents
// all the WCAG information

require_once("inc/load_json_wcag2.0.php");

require_once("inc/build_data_arrays.php");



// -----------------------
// 1. what format do we want for the output?

// @@ todo : $_GET for html, ods, xlsx
// $possible_formats = ["ods","xlsx"];
// for ( $i=0 ; $i < count($possible_formats) ; $i++) {
// 	echo "<a href=\"{$_SELF}?format={$possible_formats[$i]}\">Generate{$possible_formats[$i]}</a><br>";
// }
// exit;

$format = "ods";
$folder = "output/";
$filename = "process-matrix-wcag20";

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Ods;

// init spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// -----------------------
// 2. generating the data for the table

// 2.1. header

# https://phpspreadsheet.readthedocs.io/en/develop/topics/accessing-cells/#setting-a-range-of-cells-from-an-array
$spreadsheet->getActiveSheet()->fromArray(
	$th,
	NULL,
	'A1');

// 2.2. data in cells
$spreadsheet->getActiveSheet()->fromArray(
	$tr,
	NULL,
	'A2');

// -----------------------
// 3. outputting the data to a file

// add autofilter to avoid having to create one
$spreadsheet->getActiveSheet()->setAutoFilter($spreadsheet->getActiveSheet()->calculateWorksheetDimension());
// echo $spreadsheet->getActiveSheet()->calculateWorksheetDimension();


switch ($format) {
	case 'xlsx':
		$writer = new Xlsx($spreadsheet);
		$writer->save($folder . $filename . '.xlsx');
		break;

	default:
		$writer = new Ods($spreadsheet);
		$writer->save($folder . $filename . '.ods');
		echo "ODS created";
		break;
}

?>