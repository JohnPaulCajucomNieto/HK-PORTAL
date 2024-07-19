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
            $studentID = $_POST ["studentID"];	
            $Name = $_POST ["Name"];	
            $Course = $_POST ["Course"];
            $Section = $_POST ["Section"];	
            $Email = $_POST ["Email"];
            $Password = $_POST ["Password"];	


        $sql = "INSERT INTO HK_USER (studentID,Name, Course,Section,Email,Password) 
        VALUES ('$studentID' , '$Name', '$Course', '$Section', '$Email', '$Password')";

        if ($conn->query($sql) === TRUE) {
            header("location:../index.html");
        } else {
        echo "something wrong";
        }
        
        $conn->close();
?>



