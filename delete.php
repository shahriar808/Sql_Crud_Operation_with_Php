<?php
require_once("dbcon.php");

if (isset($_GET['del'])) {
    $roll = $_GET['del'];

    // Delete query
    $deleteSQL = "DELETE FROM student WHERE roll='$roll'";

    // Execute the delete query
    $deleteQry = mysqli_query($conn, $deleteSQL);

    if ($deleteQry) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
header("Location: http://localhost/Testing/Show.php");
?>
