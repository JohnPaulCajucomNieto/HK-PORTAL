 
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
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/scholars.css">
      <link rel="icon" href="../icons/icons8-diploma-96.png" type="image/icon type">      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative:wght@700&family=Comfortaa:wght@500&family=Cookie&family=Crimson+Text:wght@600&family=Gruppo&family=IBM+Plex+Sans:wght@700&family=Lato:ital,wght@1,300&family=Lilita+One&family=Lobster+Two&family=Montserrat&family=Raleway:wght@300;600&family=Ubuntu:wght@300;700&family=Yeseva+One&family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
   <section class="header">
     <div class="header-container">
            <div class="header-logo">
            <img class="img" src="../image/301309050_633105161472580_772636342277283946_n.jpg ">
            <h3 class="admin">Hello &#768;<span class="Darling">Admin Darling</span></h3>
            </div>
            <div class="R1">
            <form method="POST" action="search.php">
                <input class="input" type="text" name="search_term" placeholder="Search here">
                <button class="btn" type="submit" name="search"><i class="fa-solid fa-magnifying-glass fa-sml"></i></button>
             </form>
             </div>
            <div class="header-links">
            <a href="../index.html"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    </section>
    <section class="header2">
        <div class="header-container-2">
           <div class="img-name">
            <h1 class="logo-name">WELCOME TO STUDENT HK PORTAL | HK SCHOLARS</h1>
           </div>
           <div class="links-2">
            <a class="SCHOLARS" href="../admin/index.php"><i class="fa-solid fa-clipboard-user"></i><span class="attendance">ATTENDANCE</a>
            <a class="SCHOLARSS" href="../scholars/scholars.php"><i class="fa-sharp fa-solid fa-user-graduate"></i>SCHOLARS</a>
            <a class="SCHOLARS"><i class="fa-solid fa-square-poll-vertical"></i>ACTIVITY</a>
            <a class="SCHOLARS"><i  class="fa-solid fa-registered"></i>RENEWAL</a>
           </div>
        </div>
    </section>
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

            $sql = "SELECT * FROM HK_USER";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            

                echo "<table border='0'>
                <tr>
                <th>ID</th> 
                <th>Name</th> 
                <th>Course</th>  
                <th>Section</th>  
                <th>Email</th> 
                <th>Password</th>
                <th>Actions</th>     
                </tr>";
                while($row = $result->fetch_assoc())
                { $studentID = $row ["studentID"];

                echo "
                <tr>
                    <td>".$row["studentID"]."</td> 
                    <td>".$row["Name"]."</td> 
                    <td>".$row["Course"]."</td> 
                    <td>".$row["Section"]."</td> 
                    <td>".$row["Email"]."</td>
                    <td>".$row["Password"]."</td> 
                    <td><a href='Editdata.php?id=$studentID'>Edit</a> |
                    <a href='Deletedata.php?id=$studentID'>Delete</a></td>                  

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