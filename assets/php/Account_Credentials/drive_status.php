

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

    <title>Filter Student Data</title>
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
                        
                        <li><a href="logout.php">HOME</a></li>
                    </ul>
                </div>
            </nav>
</header>

<!-----------Main Body------------->

<div class="container">
<div class="total_student">
<?php
include '../Database Connection/dbcon.php';

$total_student_query = "select * from ssignup";
$total_student = mysqli_num_rows(mysqli_query($con,$total_student_query));

$total_placed_student_query = "select * from student_company group by student_roll";
$total_placed_student = mysqli_num_rows(mysqli_query($con,$total_placed_student_query));

$total_unplaced_student = $total_student - $total_placed_student;


echo "<h3> Total Students - ".$total_student;
echo "</h3>";

echo "<h3> Total Placed Students - ".$total_placed_student;
echo "</h3>";

echo "<h3> Total UnPlaced Students - ".$total_unplaced_student;
echo "</h3>";
?>
</div>

<div class="placed_student">
 <h4>Placed student details</h4> 
  <table border="2">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Student Name</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
      include '../Database Connection/dbcon.php';
      $selectquery = "select student_company.student_name, student_company.student_roll, companymaster.name from student_company inner join companymaster where student_company.company_id = companymaster.id order by name asc";
      $query = mysqli_query($con,$selectquery);
      //$nums = mysqli_num_rows($query);
        while($res = mysqli_fetch_array($query)){
    ?>

            <tr>
              <td> <?php echo $res['name'];?></td>
              <td> <?php echo $res['student_name']; ?> </td>
              
              
            </tr>
        <?php
          }
        ?>
            
          </tbody>
        </table>
  </div>

  <div class="unplaced_student">
    <h4>Unplaced student details</h4>
    <table border="2">
      <thead>
        <tr>
          <th>Student Name</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $selectquery = "select * from ssignup where rollno not in (select student_roll from student_company)";
          $query = mysqli_query($con,$selectquery);
          //$nums = mysqli_num_rows($query);
          while($res = mysqli_fetch_array($query)){
        ?>
        <tr>
          <td> <?php echo $res['name']; ?> </td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
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