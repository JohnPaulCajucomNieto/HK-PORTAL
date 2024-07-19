<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
    <meta name="description" content="STUDENT AND EMPLOYEE SYSTEM">
    <meta name="keywords" content="ATTENDANCE OF SCHOOL THINGS">
    <meta name="author" content="Jerome Gabriel Gaspar | DARLING ALYSSA ">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AU SOUTH HK PORTAL EDIT</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="icon" href="../icons/icons8-diploma-96.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative:wght@700&family=Comfortaa:wght@500&family=Cookie&family=Crimson+Text:wght@600&family=Gruppo&family=IBM+Plex+Sans:wght@700&family=Lato:ital,wght@1,300&family=Lilita+One&family=Lobster+Two&family=Montserrat&family=Raleway:wght@300;600&family=Ubuntu:wght@300;700&family=Yeseva+One&family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">

</head>
<body >
	
	
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
         $qry = mysqli_query($conn,"select * from HK_USER where studentID='$studentID'");
         $row = mysqli_fetch_array($qry);
		 
        ?>

		
<section class="header-widht"> 
        <div class="header-container">
            <div class="header-logo">
              <img class="header-pic" src="../icons/PHINMA-Ed-Logo-2048x751.png" alt="" width="50px">
              <h1 class="logo-name">HK PORTAL</h1>
            </div>
        </div>
        <form class="input-container" action="../scholars/Datavalidation.php" method="GET" >
            <img class="img" src="../icons/PHINMA-Ed-Logo-2048x751.png" alt="">
            <p class="Title-input">WELCOME TO HAWAK&#96;KAMAY PORTAL</p>
            
                <i class="fa-solid fa-hashtag">
                <input class="input-email"  type="number" placeholder="Student Number " name="studentID" id="studentID" value="<?php echo $row["studentID"]?>">
                </i>

                <i class="fa-sharp fa-solid fa-user">
                <input class="input-Password" type="text" placeholder="Name" name="Name" id="Name" value="<?php echo $row["Name"]?>">
               </i>

               <i class="fa-solid fa-graduation-cap">
                <input class="input-email"  type="text" placeholder="Course" name="Course" id="Course" value="<?php echo $row["Course"]?>">
               </i>

               <i class="fa-solid fa-section">
                <input class="input-email"  type="text" placeholder="Section" name="Section" id="Section" value="<?php echo $row["Section"]?>">
               </i>
               <i class="fa-solid fa-envelope">

                <input class="input-email"  type="email" placeholder="Email" name="Email" id="Email" value="<?php echo $row["Email"]?>">
               </i>
               <i class="fa-solid fa-lock">
                <input class="input-password"  type="password" placeholder="Password" name="Password" id="Password" value="<?php echo $row["Password"]?>">
               </i>
            <button class="input-login" type="submit"  value="Login">UPDATE
            </button>
            
        </form>
    </section>

	</body>
	
</html>