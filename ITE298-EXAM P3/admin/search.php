
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="STUDENT AND EMPLOYEE SYSTEM">
      <meta name="keywords" content="ATTENDANCE OF SCHOOL THINGS">
      <meta name="author" content="Jerome Gabriel Gaspar | DARLING ALYSSA ">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AU SOUTH PORTAL | ADMIN USER</title>
      <link rel="stylesheet" href="../css/search.css">
      <link rel="icon" href="../icons/icons8-diploma-96.png" type="image/icon type">      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative:wght@700&family=Comfortaa:wght@500&family=Cookie&family=Crimson+Text:wght@600&family=Gruppo&family=IBM+Plex+Sans:wght@700&family=Lato:ital,wght@1,300&family=Lilita+One&family=Lobster+Two&family=Montserrat&family=Raleway:wght@300;600&family=Ubuntu:wght@300;700&family=Yeseva+One&family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<a href="../admin/index.php"><i class="fa-solid fa-chevron-left fa-lg"></i></a>
  <h1 class="Result">Search Result :</h1>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AU_HK_USER";

  
$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {

       die("Connection failed: " . $conn->connect_error);
    }
       if (isset($_POST['search'])) {
           $search_term = $_POST['search_term'];
         
          
           $sql = "SELECT * FROM hk_attendance WHERE ID LIKE '%$search_term%'OR course LIKE '%$search_term%' OR name LIKE '%$search_term%'";
           $result = mysqli_query($conn, $sql);

           if (mysqli_num_rows($result) > 0) {
              
            echo "<table  border='0'>
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
            <th>Action</th>  
            </tr>";

               while ($row = mysqli_fetch_assoc($result)) {
                 $ID = $row ["ID"];
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
             } else {
               $icon_code = '<i class="fa-solid fa-magnifying-glass"></i>';
               echo "<p>  $icon_code  No results found</p>";
             }
           }
           mysqli_close($conn);    
?>
</body>
</html>


