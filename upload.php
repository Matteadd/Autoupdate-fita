<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

$existSite[]="";//array dei siti esisenti nel db
$newSite[]="";  //array dei siti nuovi nel file msrbs
$diffExistAndNew[]="";
$finalPathOfFile="";

$servername = "localhost";
$username = "matteofita";
$password = "";
$dbname="fita";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//Da qui faccio l'upload del file nella cartella "upload"
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$finalPathOfFile="";

if (file_exists($target_file))
{
    echo "Il file è già presente. Rinominarlo e ricaricare"."<br>";
}
else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {

        if ($fileType=="xlsx" or $fileType=="xlsm" or $fileType=="xls")
        {
            $finalPathOfFile=$target_file;
        }
    }
    else
    {
        echo "Il file non è stato caricato";
    }
}
//----------------------------------------------------------------------

//qui apro il file appena caricato e leggo tutti i nomi dei siti da caricare e li salvo in un array
$reader = new Xlsx();
$workbook = $reader->load($finalPathOfFile);
$worksheet=$workbook->getSheetByName("MS-RBS");
$highestRow = $worksheet->getHighestRow();
$highestColumn = $worksheet->getHighestColumn();
$highestColumnIndex=Coordinate::columnIndexFromString($highestColumn);

for ($row = 0; $row <= $highestRow; ++$row)
{
    $value = $worksheet->getCellByColumnAndRow(3, $row)->getFormattedValue();
    array_push($newSite,$value);
}
//---------------------------------------------------------------------

//qui dal db mi scarico tutti i siti esistenti e mi salvo tutti i nomi in un array
//Per farmi una differenza con quelli presi dal msrbs appena caricato
$query="select Site_Name from ms_rbs";
$result = $conn->query($query);

if ($result->num_rows>0)
{
    while ($row= $result->fetch_assoc())
    {
        array_push($existSite, $row["Site_Name"]);
    }
}



foreach ($newSite as $site)
{
    $is_present=in_array($site, $existSite);
    if( $is_present==0)
    {
        array_push($diffExistAndNew, $site );
    }
}

var_dump($diffExistAndNew)

//da qui effettuo i

?>
