<?php
session_start();
if(!isset($_SESSION['tpoemail'])){
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

    <title>TPO Dashboard</title>
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


  <!----------------Form------------------>

  <div class="container">
    <div class="notify">
      <table border="2">
        <thead>
          <tr>
            <th>Company Name</th>
            <th>Package</th>
            <th>Job Location</th>
          </tr>
        </thead>
        <tbody>

          <?php
    
          include '../Database Connection/dbcon.php';

          $selectquery = "select * from upcoming_company";
          $query = mysqli_query($con,$selectquery);
          //$nums = mysqli_num_rows($query);

          
        if(mysqli_num_rows($query) <1){
            ?>
            <tr>
              <td> NULL</td>
              <td> NUll </td>
              <td> NULL </td>
              
              
            </tr>
            <?php
        }
        else{

        
        

          while($res = mysqli_fetch_array($query)){
            ?>

            <tr>
              <td> <?php echo $res['name'];?></td>
              <td> <?php echo $res['package']; ?> </td>
              <td> <?php echo $res['job_location']; ?> </td>
              
              
            </tr>
        <?php
          }
        }

          if(isset($_POST['remove_upcoming_company']))
        {  

            $removequery = "delete from upcoming_company where id = 0";
            $query = mysqli_query($con,$removequery);
            
            if($query){
                ?>
                <script type="text/javascript">
                    alert("Company removed!!");
                </script>
                <?php
                header("location: Dashboard_Tpo.php");
                exit;
            }
            
        }

        ?>
            
        </tbody>
    </table>
        <div class="text-box">
        <a class="hero-btn" href="edit_upcoming_company.php" role="button">Add/Edit</a>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">

             <button class="hero-btn" name="remove_upcoming_company" >Remove Company</button>
        </form>
        </div>
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