<?php
require 'dbcon.php';

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $bloodGroup = $_POST["bloodGroup"];

    $query = "INSERT INTO student (roll, name, bloodGroup) VALUES ('$roll', '$name', '$bloodGroup')";
    mysqli_query($conn, $query);
    
  
}
mysqli_close($conn);
header("Location: index.php");
?>