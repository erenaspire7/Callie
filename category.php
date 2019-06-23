<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "blog";

$id = $_GET['category'];

$dbconfig = mysqli_connect($host, $user, $password, $dbname);

$query = mysqli_query($dbconfig, "SELECT * FROM category WHERE id = $id");

$row = mysqli_fetch_array($query);

echo $row['name'];

    


    

?>