<?php
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 30%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      display: block;
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

  <h2>Student Information Form</h2>

  <form action="insert.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="roll">Roll Number:</label>
    <input type="text" id="roll" name="roll" required>

    <label for="bloodGroup">Blood Group:</label>
    <input type="text" id="bloodGroup" name="bloodGroup" required>

    <button type="submit" name="submit">Submit</button>
  </form>

</body>
</html>
