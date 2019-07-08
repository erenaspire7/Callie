<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "blog";

$id = $_GET['category'];

#$dbconfig = mysqli_connect($host, $user, $password, $dbname);

try {
    $conn = new PDO("mysql:host=$host;dbname=blog", $user, $password);
    // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

#$query = mysqli_query($dbconfig, "SELECT * FROM category WHERE id = $id");
$sql = "SELECT * FROM category WHERE id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();

#$row = mysqli_fetch_array($query);
$row = $stmt->fetch(PDO::FETCH_BOTH);

echo $row['name'];

    


    

?>