<?php
require_once("dbcon.php");

if (isset($_POST['btn'])) {
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $bloodGroup = $_POST['bloodGroup'];

    // Update query
    $updateSQL = "UPDATE student SET name='$name', bloodGroup='$bloodGroup' WHERE roll='$roll'";

    // Execute the update query
    $updateQry = mysqli_query($conn, $updateSQL);

    if ($updateQry) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
header("Location: http://localhost/Testing/Show.php");
?>
