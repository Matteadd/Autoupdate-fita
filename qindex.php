<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$reader = new Xlsx();

$workbook = $reader->load("upload/CDR-ERICSSON-MSRBS-SU_FG53RNC_Rev.6 (1).xlsx");
$worksheet=$workbook->getSheetByName("MS-RBS");

$prova=$worksheet->getRowDimension(4);
//echo $prova-> ;
