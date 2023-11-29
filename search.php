<?php
require_once("dbcon.php");

if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    // Search query
    $searchSQL = "SELECT * FROM student WHERE roll='$searchTerm'";
    $searchQry = mysqli_query($conn, $searchSQL);

    if ($searchQry) {
        $resultCount = mysqli_num_rows($searchQry);

        if ($resultCount > 0) {
            // Display the search results in a table
            echo "<h2>Search Results</h2>";
            echo "<style>
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
                        color: #3498db;
                    }

                    a:hover {
                        color: #2980b9;
                    }
                </style>";

            echo "<table>
                    <tr>
                        <th>Roll Number</th>
                        <th>Name</th>
                        <th>Blood Group</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($searchQry)) {
                echo "<tr>
                        <td>{$row['roll']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['bloodGroup']}</td>
                        <td><a href=\"edit.php?edit={$row['roll']}\">Edit</a></td>
                        <td><a href=\"delete.php?del={$row['roll']}\">Delete</a></td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "No matching records found.";
        }
    } else {
        echo "Error in search query: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
