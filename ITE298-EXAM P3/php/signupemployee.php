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
            $employeeID = $_POST ["employeeID"];	
            $Name = $_POST ["Name"];
            $Email = $_POST ["Email"];
            $Password = $_POST ["Password"];	


        $sql = "INSERT INTO HK_EMPLOYEE (employeeID, Name, Email, Password) 
        VALUES ('$employeeID' , '$Name', '$Email', '$Password')";

        if ($conn->query($sql) === TRUE) {
            header("location:../index.html");
            
        } else {
        echo "something wrong";
        }
        
        $conn->close();
?>



