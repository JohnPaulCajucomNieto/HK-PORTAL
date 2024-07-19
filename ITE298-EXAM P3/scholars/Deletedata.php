
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
            
            $studentID = $_GET['id'];
            $sql = "DELETE FROM HK_USER WHERE studentID = '$studentID'";

            if ($conn -> query($sql) === TRUE){
                header("Location:../scholars/scholars.php");
                
            }else{
                echo "Error deleting record : " . $conn->error;
            }
?>