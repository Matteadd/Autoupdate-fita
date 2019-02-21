<?php

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

$reader = new Xlsx();
$listOrderMsrbs=

$workbook = $reader->load("upload/CDR-ERICSSON-MSRBS-SU_FG53RNC_Rev.6 (1).xlsx");
$worksheet=$workbook->getSheetByName("MS-RBS");

$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();
$highestColumnIndex=Coordinate::columnIndexFromString($highestColumn);

for ($row = 1; $row <= $highestRow; ++$row) {
    for ($col = 1; $col <= $highestColumnIndex; ++$col) {
        $value = $worksheet->getCellByColumnAndRow($col, $row)->getFormattedValue();
        echo $value;
    }
    echo "<br>";
}



