
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta name="description" content="STUDENT AND EMPLOYEE SYSTEM">
      <meta name="keywords" content="ATTENDANCE OF SCHOOL THINGS">
      <meta name="author" content="Jerome Gabriel Gaspar | DARLING ALYSSA ">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AU SOUTH PORTAL |ADMIN USER</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/admin.css">
      <link rel="icon" href="icons/icons8-school-96 (1).png" type="image/icon type">
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative:wght@700&family=Comfortaa:wght@500&family=Cookie&family=Crimson+Text:wght@600&family=Gruppo&family=IBM+Plex+Sans:wght@700&family=Lato:ital,wght@1,300&family=Lilita+One&family=Lobster+Two&family=Montserrat&family=Raleway:wght@300;600&family=Ubuntu:wght@300;700&family=Yeseva+One&family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
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

            $sql = "SELECT * FROM HK_ATTENDANCE";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            

                echo "<table border='1'>
                <tr>
                <th>ID</th> 
                <th>Name</th> 
                <th>Course</th>  
                <th>Section</th>  
                <th>Year</th> 
                <th>Duty-start</th> 
                <th>Duty-end</th>
                <th>Date</th> 
                <th>Attendance</th> 
                <th>Reason</th>
                <th>Actions</th>   
                </tr>";
                while($row = $result->fetch_assoc())
                { $ID = $row ["ID"];

                echo "
                <tr>
                    <td>".$row["ID"]."</td> 
                    <td>".$row["Name"]."</td> 
                    <td>".$row["Course"]."</td> 
                    <td>".$row["Section"]."</td> 
                    <td>".$row["Year"]."</td>
                    <td>".$row["DutyStart"]."</td>
                    <td>".$row["DutyEnd"]."</td>    
                    <td>".$row["SchedDate"]."</td> 
                    <td>".$row["Attendance"]."</td> 
                    <td>".$row["Reasons"]."</td> 
                    <td><a href='Editrecords.php?id=$ID'>Edit</a> |
                    <a href='Deleterecords.php?id=$ID'>Delete</a></td>
                    


                </tr>";
                
                }
                echo "</table>";
                }else {
                echo "0 results";
                }
                $conn->close();
                ?>
</body>
</html>