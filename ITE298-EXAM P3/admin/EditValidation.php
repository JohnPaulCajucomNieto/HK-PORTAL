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

         $ID = $_GET ["ID"];
         $name = $_GET ["name"];	
         $course = $_GET ["course"];
         $section = $_GET ["section"];
         $year = $_GET ["year"];
         $dutystart = $_GET ["dutystart"];
         $dutyend = $_GET ["dutyend"];
         $scheddate = $_GET ["scheddate"];
         $attendance = $_GET ["attendance"];
         $reasons = $_GET ["reasons"];

         $edit = mysqli_query($conn, "UPDATE HK_ATTENDANCE set  
         name='$name', 
         course='$course',
         section='$section',
         year='$year',
         dutystart='$dutystart',
         dutyend='$dutyend',
         scheddate='$scheddate',
         attendance='$attendance',
         reasons='$reasons'
         where id='$ID'");
             
         if($edit){
            mysqli_close($conn);
            header("location:index.php");
         }
         else{
            echo mysqli_error($mysqli) ;
         }
        

      ?>
</body>
</html>