<?php
session_start();

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SignIn</title>
  </head>


  <body>

    <?php
    if(isset($_POST['Add_company_submit']))
    {
        try{
            include '../Database Connection/dbcon.php';

            $name = mysqli_real_escape_string($con, $_POST['companyname']);
            $package = mysqli_real_escape_string($con, $_POST['package']);
              $job_location = mysqli_real_escape_string($con, $_POST['job_location']);

            $companyquery = "insert into companymaster (name, package, job_location) values ('$name', '$package', '$job_location')";
            $query = mysqli_query($con,$companyquery);
              //$company_count = mysqli_num_rows($query);

            if($query){
                  ?>
                      <script>
                          alert("connection successful")
                      </script>
                  <?php

                  header("location: Add_Company.php");
              }

            
            }

        catch(Exception $e){
            echo $e;
        }
    }
    ?>


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


<!----------Form------------->
<div class="container">
  <div class="login_rapper">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">
      <div class="form-group">
        <label >Company Name</label>
        <input type="text" name="companyname" class="form-control" aria-describedby="emailHelp" placeholder="Enter company" required>
      </div>

      <div class="form-group">
        <label>Package</label>
        <input type="text" name="package" class="form-control" aria-describedby="emailHelp" placeholder="Enter package" required>
      </div>

      <div class="form-group">
        <label >Job Location</label>
        <input type="text" name="job_location" class="form-control" aria-describedby="emailHelp" placeholder="Enter job location">
      </div>
      <button type="submit" name="Add_company_submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
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