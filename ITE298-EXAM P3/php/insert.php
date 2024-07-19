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
        $ID = $_POST ["ID"];
        $name = $_POST ["name"];	
        $course = $_POST ["course"];
        $section = $_POST ["section"];
        $year = $_POST ["year"];
        $dutystart = $_POST ["dutystart"];
        $dutyend = $_POST ["dutyend"];
        $scheddate = $_POST ["scheddate"];
        $attendance = $_POST ["attendance"];
        $reasons = $_POST ["reasons"];
    $sql = "INSERT INTO HK_ATTENDANCE (ID, name, course, section, year, dutystart, dutyend, scheddate, attendance, reasons) 
    VALUES ('$ID','$name','$course', '$section', '$year', '$dutystart', '$dutyend', '$scheddate', '$attendance', '$reasons')";

    

    if ($conn->query($sql) === TRUE) {
        echo '<script>setTimeout(function(){ alert("Submitted Successfully!"); }, 1000);</script>';
        require('attendance.php');


    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    
    }

    
    $conn->close();


    
   
  
    
    
?>
