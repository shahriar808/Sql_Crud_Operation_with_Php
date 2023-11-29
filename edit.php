<?php
require_once("dbcon.php");

$roll = $_GET['edit'];
$srchSQL = "SELECT * FROM student WHERE roll='$roll'";
$srchQry = mysqli_query($conn, $srchSQL);
$recSr = mysqli_fetch_object($srchQry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <form action="update.php" method="post">
        Roll: <input type="text" value="<?php echo $recSr->roll; ?>" disabled="disabled" />
        <input type="hidden" name="roll" value="<?php echo $recSr->roll; ?>" />
        <br />
        Name: <input type="text" name="name" value="<?php echo $recSr->name; ?>" /> <br />
        Blood Group: <input type="text" name="bloodGroup" value="<?php echo $recSr->bloodGroup; ?>" /> <br />

        <br />
        <input type="submit" name="btn" value="Update" />
    </form>

</body>
</html>
