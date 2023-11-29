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
                        width: 60%;
                        margin-top: 20px;
                        margin-bottom: 20px;
                    }

                    table, th, td {
                        border: 1px solid #ddd;
                    }

                    th, td {
                        padding: 12px;
                        text-align: left;
                    }

                    th {
                        background-color: #4CAF50;
                        color: white;
                    }

                    tr:hover {
                        background-color: #f5f5f5;
                    }

                    a {
                        text-decoration: none;
                        color: blue;
                    }

                    a:hover {
                        color: #2980b9;
                    }
        button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
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
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['roll']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['bloodGroup']; ?></td>
                        <td><a href="edit.php?edit=<?php echo $row['roll']; ?>" >Edit</a></td>
                        <td><a href="delete.php?del=<?php echo $row['roll']; ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            
        </table>
        <button type="submit" name="submit"><a href="index.php">Add</a></button>

        <form action="search.php" method="post" class="search-form">
        <label for="searchTerm">Search by Roll Number:</label>
        <input type="text" name="search" id="searchTerm" value="" />
        <button type="submit">Search</button>
    </form>
    <?php else: ?>
        <p>No student records found.</p>
    <?php endif; ?>

</body>
</html>
