<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="fita";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}


$query="select * from ms_rbs where Site_Name=\"PS356\"";

$result = $conn->query($query);

if ($result["num_row"]>0)
{
    while ($row= $result->fetch_assoc())
    {

    }
}



?>