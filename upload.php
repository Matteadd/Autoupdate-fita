<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// // Check if file already exists
if (file_exists($target_file))
{
    echo "Il file è già presente. Rinominarlo e ricaricare"."<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
// else
// if everything is ok, try to upload file
if ($uploadOk == 0)
{
    echo "Il file non è stato caricato";
}
else
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    {
        echo "Il file ". $_FILES["fileToUpload"]["name"]. " è stato caricato"."<br>";
        if ($fileType=="xlsx" or $fileType=="xlsm" or $fileType=="xls")
        {
          // $getsheet=$objPHPExcel->

        }
    }
    else
    {
        echo "Il file non è stato caricato";
    }
}
?>
