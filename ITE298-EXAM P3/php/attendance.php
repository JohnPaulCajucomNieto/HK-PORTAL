<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="STUDENT AND EMPLOYEE SYSTEM">
    <meta name="keywords" content="ATTENDANCE OF SCHOOL THINGS">
    <meta name="author" content="Jerome Gabriel Gaspar | DARLING ALYSSA ">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AU SOUTH HK PORTAL | ATTENDANCE</title>
    <link rel="stylesheet" href="../css/general.css">
    <link rel="stylesheet" href="../css/attendance.css">
    <link rel="stylesheet" href="../css/modal-attendance.css">
    <link rel="icon" href="../icons/icons8-diploma-96.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel+Decorative:wght@700&family=Comfortaa:wght@500&family=Cookie&family=Crimson+Text:wght@600&family=Gruppo&family=IBM+Plex+Sans:wght@700&family=Lato:ital,wght@1,300&family=Lilita+One&family=Lobster+Two&family=Montserrat&family=Raleway:wght@300;600&family=Ubuntu:wght@300;700&family=Yeseva+One&family=Zilla+Slab:wght@500&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=ta_jxm1vAMN80csmyKdNtFvOW50vJl3bdo05lF9g5Y33mQV6Sd-ZjMSaS9w9nvVWEqTHTg9Zzdg1jlOwIatFnESWn6EMVVMa_0buDZl8TPc0zpeIcTr4feea23v4OVqIfH-idKSIrqS8FYrhjGWSF2e7nydxL6iKDJhA1322iOqJJlwZ2cS3nCt8zlQqJqhkUmPlzwzkzA2pvEIeWAAxvGdF3OHxRay_kR-4XSe-yqwt5Un5-qaDacEdCipPOCnuvSuP-a-o2QfZBIaCMtu7jTp_SzWW1MlI0mW_6xOSO7JClMPkmDfg3r12LxjZdHSqBFUto7loCIH04GsXdHJbtIp7FkErgfu-ehsvAVQmR2iVYvsTN8Ji0Zvf4kshYrYx-JJohVApIa6WzOXPyUv0Ef8vdVdPHaiIKbI6ihFi_Ay6FBwqJ9nn0tu0kQHCsNhBrSgxhegrq0k__Aqh3w_AzaE66V6m0eKbT3PmgFMrH0vzzN5ApVjxOgKkTLY6MjQh2paLmVWmKxJKrCaQNMGfKAcqgS3gqr2cEWPgzvM2R14yatLYEY0PfdCqN6DRhYWAMUfO6crLLtWSMSKpOc9w8LQRHeEm2u6cEYcBdYAIzPFPDLif9icAKD_vbcX-UNHbOCAIvBIqUgGmOp0mfA48i9h2n6-KBZAP-Zw0YiQhdKTf3oy0PxYOTktrJEi9t_5SdvRnH4bGHZNqS-uGe2ACfrXiuDr8pnhju2-RjLy73vB56_B3D36HhS7Ww1qP-uq_6dolnoASa5ElKaRJCDbg2HJqa3oSJRVUFLXneWj-XPej_t7v6DyAfFg87QwPgjVj3YAwM-IkSIyxdRSUsRnWZ4Jd8XxA0WnlNUj-cIUnKht16Kant35IpVYZ570-MxwQdYgZgm8guxDXCk5Uju2wpCoHj7HBr-EG1BKyNSfC3qVJn6xGbx0Z9HzIPg5wxLqLGfzfTMenIL-ZKy72__6AqLUn5GyTDKfXujXNW29ZIBOo6jSQ4Zy_TmwTYoQ9I6LBg93zCdT5Z9lUSAd1sAurCu5FEiw_uEH4f9jFRjNuP6tqDBL3wkQB_5QNDuCC5h4cOSVeGGrD3dFLgiWLRrG6AoXLlvQIEe8x4oIHtd-9Xy56qdtTtZ6kaxcq9R6mfogsMxFWjHdeGUO1r-lyr-_EdoFqyMcz3VHJlg-YPkGf9J2XdWBAKXk6lwlkbRiyghs7OhJJRqT0QnVQdeRZ8FMS6h8zZej5cPxABzh6E0adVoWXKgGPIbeb2ljwyl0gfKcNmZdW2UNrmGYaBb4W1mSTtu5rf_S1Ae4LDd52IB3JfiYgvhuOpQr3PTQxMV8pxvzy7XCgAfe0_Ql2lz5K_j7wPyof-kiGN6U86q7OfmiK8VlgitO_RfTFkC5ZImYBwOk3-tjmj6-c6MilZhZf4R08cEiePbGDAn1qIy6RBlOF5oq5mQVVHufuWmKiaDqSLqPtIYexUO5tc3x1lKG5egdmmkAlNkNLry7sI5SatsGAJ_YeMRl3vzNdBSjHDOfDlKYy9aq-uTfcWJzuEvTIhGMfQHX4buEJB8I56K3SKu-Zk3hN3aDvWpb2wkJWXLPYWJy7W0SrYu9H8VOW3aVrpbcTX10y7Tt2MVuAuPrTnENBKExQDNFH10OrfnVawcU-leRH" charset="UTF-8"></script></head>
<body>

    <section class="header-widht"> 
        <div class="header-container">
            <div class="header-logo">
              <img class="header-pic" src="../icons/PHINMA-Ed-Logo-2048x751.png" alt="">
              <h1 class="logo-name">HK PORTAL</h1>
            </div>
            <div class="header-links">
              <a class="links" href="../html/home.html">HOME</a>
              <a class="links" href="../html/about.html">ABOUT</a>
              <a class="links" href="../html/contact.html">CONTACT</a>
              <a class="links-attendance" href="../php/attendance.php">ATTENDANCE</a>
            </div>
        </div>
        <div class="div-form">
            <h2 class="TANDA">TIME AND ATTENDANCE</h2>
            <p class="Click">Click the Button for Attendance</p>
            <button class="btn-main" id="myBtn"><i class="fa-solid fa-calendar-check"></i> TIME & ATTENDANCE</button>
        </div>
        
        <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="../php/insert.php" method="post">
                <input class="input-id"  type="text" name="ID" id="ID" placeholder="Student Number">
               
                <input class="input-name"  type="text" name="name" id="name" placeholder="Name">
                
                <input class="input-course" type="text" name="course" id="course" placeholder="Course">

                <input class="input-section" type="text" name="section" id="section" placeholder="Section">

                <input class="input-year" type="text" name="year" id="year" placeholder="Year">

                <label class="start-description" >Duty-start</label>
                <input class="input-duty-start" type="time" name="dutystart" id="dutystart"><br>

                <label class="end-description">Duty-end</label>
                <input class="input-duty-end" type="time" name="dutyend" id="dutyend"><br>

                <label class="date-description" >Date</label>
                <input class="input-date" type="date" name="scheddate" id="scheddate"><br>

                <label class="attendance-description">Attendance</label>
                <select class="dropdown" name="attendance" id="attendance">
                    <option value="attendance"></option>
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>
                
                <label class="reasons-description">If present put N/A, otherwise state your reason of absence.<label>
                <input class="input-reasons" type="text" name="reasons" id="reasons" placeholder="State your reason...">
      

            <button class="btn" type="submit" value="Submit"><i class="fa-solid fa-calendar-plus"></i> Submit </button>
            </form>
        </div>
        </div>
    </section>

    
    <section class="footer">
        <div class="footer-container1">
            <div class="box1">
                <img class="header-pic" src="../icons/PHINMA-Ed-Logo-2048x751.png" alt="">
                <h1 class="logo-names">HK PORTAL</h1>
            </div>
            <div class="box2">
                <h2 class="title-4">Address</h2>
                <p class="Location">MAHARLIKA Hi-way Brgy Bitas , Cabanatuan City , Philippines.</p>
            </div>
            <div class="box3">
                <h2 class="title-4">Contacts</h2>
                <h3 class="Cnt"><i class="fa-solid fa-envelope"></i> info.au@phinmaed.com</h3>
                <h3 class="Cnt"><i class="fa-solid fa-phone"></i> (044) 464 3300</h3>
                <h3 class="Cnt"><i class="fa-sharp fa-solid fa-blender-phone"></i> 555-123-4567</h3>
            </div>
            <div class="box4">
                <h2 class="title-4">Explore</h2>
                <h3 class="linkss">Contact</h3>
                <h3 class="linkss">About</h3>
                <h3 class="linkss">Attendace</h3>
            </div>
        </div>
        <div class="footer-container2">
            <div class="b2">
                <p class="Copyright">&#169; Copyright 2023 Jeje | Yssa - All Rights Reserved</p>
            </div>
            <div class="b1">
                <i class="fa-brands fa-facebook fa-lg "></i>
                <i class="fa-brands fa-twitter fa-lg "></i>
                <i class="fa-brands fa-instagram fa-lg"></i>
                <i class="fa-brands fa-facebook-messenger fa-lg"></i>
            </div>
        </div>
    </section>

    <script>
            //Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
            modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
        </script>

</body>
</html>