<?php
require 'dbcon.php';

// Fetch data from the database
$query = "SELECT * FROM student";
$result = mysqli_query($conn, $query);

// Check if there are rows in the result set
if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $rows = array(); // Empty array if no rows are found
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Student Information Table</h2>

    <?php if (!empty($rows)): ?>
        <table>
          
                <tr>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Blood Group</th>
                </tr>
            
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['roll']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['bloodGroup']; ?></td>
                    </tr>
                <?php endforeach; ?>
            
        </table>
    <?php else: ?>
        <p>No student records found.</p>
    <?php endif; ?>

</body>
</html>
