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
  $sql = "CREATE TABLE HK_ATTENDANCE (
  ID VARCHAR(50) PRIMARY KEY,
  Name VARCHAR(100) NOT NULL,
  Course VARCHAR(100) NOT NULL,
  Section VARCHAR(100) NOT NULL,
  Year VARCHAR (100) NOT NULL,
  DutyStart TIME,
  DutyEnd TIME,
  SchedDate DATE,
  Attendance VARCHAR(100) NOT NULL,
  Reasons VARCHAR (1000) NOT NULL
  )";

  if ($conn->query($sql) === TRUE) {
    echo "Table HK_ATTENDANCE created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();
?>