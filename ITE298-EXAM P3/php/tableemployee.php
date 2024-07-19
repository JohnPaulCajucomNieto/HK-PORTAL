<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "AU_HK_USER";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // sql to create table
  $sql = "CREATE TABLE HK_EMPLOYEE (
  employeeID INT PRIMARY KEY,
  Name VARCHAR(50) NOT NULL,
  Email VARCHAR (100) NOT NULL,
  Password VARCHAR (15) NOT NULL
  )";

  if ($conn->query($sql) === TRUE) {
    echo "Table HK_EMPLOYEE created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>