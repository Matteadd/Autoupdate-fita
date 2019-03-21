<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include 'PHPExcel/IOFactory.php';
$inputFileName="msrbs.xlsx";
try
{
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    print_r($inputFileType);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    echo '<pre>';
    var_dump($objReader);
    echo '</pre>';
    $objPHPExcel = $objReader->load($inputFileName);
}
catch(Exception $e)
{
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

//$data = array(1,$objPHPExcel->getActiveSheet()->toArray(null,true,true,true));
//$data = array(1,$objPHPExcel->getSheetByName("MS-RBS")->toArray(null, true, false, false));
//$data = $objPHPExcel->getSheetNames();
//print the result
//echo '<pre>';
print_r($objPHPExcel);
//echo '</pre>';