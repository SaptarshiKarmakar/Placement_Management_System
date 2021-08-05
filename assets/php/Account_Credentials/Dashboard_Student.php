<?php
session_start();
if(!isset($_SESSION['email'])){
  header("location: /placement/index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style-all.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://use.fontawesome.com/2809db2a65.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Dashboard</title>
  </head>

  <body>
      
<!-----------NavBar------------->

  <header>
            <nav>
                <div class="logo">
                    <a href="#">
                        <img src="img/PCMT logo.jpg">
                    </a>
                </div>
                <div class="menu">
                    <ul>
                        
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </nav>
    </header>


<!--------------------Main Body---------------------->

<div class="container">
  <div class="center">
      <?php
        include '../Database Connection/dbcon.php';
        $emailsession = $_SESSION['email'];
        $query = "select * from ssignup where email = '$emailsession'";
        $exequery = mysqli_query($con,$query);
        $welcome = mysqli_fetch_assoc($exequery);

        $roll = $welcome['rollno'];

        echo "<h4> Welcome ".$welcome['name'];
        echo "!</h4>";     
      ?>
  </div> 

  <?php
    
    $q1 = "select name, package, job_location from companymaster where id in (select company_id from student_company where student_roll = '$roll')";
    if(mysqli_num_rows(mysqli_query($con,$q1)) > 0){

    
    ?>

  <div class="first">
    <table border="2">
              <thead>
                <tr>
                  <th>Company Name</th>
                  <th>Package</th>
                  <th>Job location</th>
              </thead>

              
              <tbody>

              <?php
        
              
              //$q1 = "select name, package, job_location from companymaster where id in (select company_id from student_company where student_roll = '$roll')";
              $q2 = mysqli_query($con,$q1);
              //$nums = mysqli_num_rows($q2);

              while($res = mysqli_fetch_array($q2)){
                ?>

                <tr>
                  <td> <?php echo $res['name']; ?> </td>
                  <td> <?php echo $res['package'];?> </td>
                  <td> <?php echo $res['job_location'];?></td>
                </tr>
            <?php
              }
            ?>
                
              </tbody>
        </table>
    </div>
    <?php
    }
    ?>
  </div>


  <div class="container">
    <?php

    if(mysqli_num_rows(mysqli_query($con,"select * from student_details where student_roll = $roll"))>0){

    ?>
    <div class="second">
      <table border="2">
              <thead>
                <tr>
                  
                  <th>10th Marks(%)</th>
                  <th>12th Marks(%)</th>
                  <th>B.Tech Marks(%)</th>
                  <th>Year Gap</th>
              </thead>

              
              <tbody>

              <?php
        
              

              $selectquery = "select * from student_details where student_roll = $roll";
              $query = mysqli_query($con,$selectquery);
              $nums = mysqli_num_rows($query);

              while($res = mysqli_fetch_array($query)){
                ?>

                <tr>
                  
                  <td> <?php echo $res['10marks'];?> </td>
                  <td> <?php echo $res['12marks'];?></td>
                  <td> <?php echo $res['btech'];?></td>
                  <td> <?php echo $res['yeargap'];?></td>
                </tr>
            <?php
              }
            ?>
                
              </tbody>
      </table>
    </div>
  </div>
    
    <div class="dash">
      <a class="hero-btn" href="Update_student_academic.php" role="button">Click here to edit acamedic details</a>
    </div>

    <?php
    }
    else{
      ?>
    <div class="dash">
      <a class="hero-btn" href="Enter_student_academic.php" role="button">Enter your academic details</a>
    </div> 
      <?php
    }


      ?>



  <!-------------Footer-------------->

  <section class="footer">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt accusantium eum doloremque consequuntur exercitationem dolore doloribus eius<br>asperiores veniam sed molestias architecto, adipisci saepe aspernatur nisi provident necessitatibus velit molestiae atque, numquam quam ad sunt sint. Itaque, cum quos!</p>
        <div class="icons">
            <a href="https://www.facebook.com/pcmtkolkata"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/hashtag/Pailan_College_of_Management_and_Technology?src=hashtag_click"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/school/pailan-college-of-management-and-technology-156/about/"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com/pcmt_official/"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="footer-bottom">
               Copyright &copy; PCMT <script>document.write(new Date().getFullYear())</script>. All rights reserved.
        </div>
    </section>
  


  </body>