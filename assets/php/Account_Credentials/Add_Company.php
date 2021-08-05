
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Company Master</title>
  </head>
  <body>

<!-----------Header---------->
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


<!------------Form------------->

<div class="container">
    <div class="list">
        <table border="2">
          <thead>
            <tr>
              <th>Company Name</th>
              <th>Package</th>
              <th>Job location</th>
          </thead>

          
          <tbody>

          <?php
    
          include '../Database Connection/dbcon.php';

          $selectquery = "select * from companymaster";
          $query = mysqli_query($con,$selectquery);
          $nums = mysqli_num_rows($query);

          while($res = mysqli_fetch_array($query)){
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
  </div>
  <div class="button">
  <a class="hero-btn" href="Add_new_company.php" role="button">Add new Company</a>  
  <a class="hero-btn" href="Dashboard_Tpo.php" role="button">Back To Dashboard</a>
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
    
    
