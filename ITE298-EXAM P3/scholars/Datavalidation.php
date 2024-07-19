<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Records</title>
</head>
<body>
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

         $studentID = $_GET ["studentID"];	
         $Name = $_GET ["Name"];	
         $Course = $_GET ["Course"];
         $Section = $_GET ["Section"];	
         $Email = $_GET ["Email"];
         $Password = $_GET ["Password"];	

         $edit = mysqli_query($conn, "UPDATE HK_USER set  
         Name='$Name', 
         Course='$Course',
         Section='$Section',
         Email='$Email',
         Password='$Password'
         where studentID='$studentID'");
             
         if($edit){
            mysqli_close($conn);
            header("location:scholars.php");
            exit;
         }
         else{
            echo mysqli_error($mysqli) ;
         }
        

        ?>
</body>
</html>