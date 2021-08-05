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

    <title>Add company to student</title>
  </head>

<body>
<?php
  include '../Database Connection/dbcon.php';
	if(isset($_POST['submit_student_company']))
	{
	    try{
        $student_roll = mysqli_real_escape_string($con, $_POST['student']);
        $company_id = mysqli_real_escape_string($con, $_POST['company']);

        
        $checkquery = "select id_c from student_company where student_roll = '$student_roll' and company_id = '$company_id'";
        $query = mysqli_query($con,$checkquery);
        $row_count = mysqli_num_rows($query);
        if($row_count){
          
         // header("location: Add_company_to_student.php");
          ?>
          <script type="text/javascript">
          alert("Already present in the Database!! \n Please enter again!!");
         
          </script>
          <?php
        }
        else{
          $nameinsert = mysqli_query($con,"select * from ssignup where rollno = '$student_roll'");
          $arraylist = mysqli_fetch_assoc($nameinsert);
          $name = $arraylist['name'];
          $insertquery = "insert into student_company(student_roll, student_name, company_id) values ('$student_roll', '$name', '$company_id')";
          $submitquery = mysqli_query($con, $insertquery);
          if($submitquery){
            ?>
           <script type="text/javascript">
              alert("DAta inserted");
           </script>
           <?php
            header("location: Track_student.php");
          }
          
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

<!-------------Form-------------->
<div class="container">
  <div class="add">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">
      <div class="student_ch">
        <tr>
          <td>Select Student Name</td>
          <td>
            <select name="student" required>
              <?php    
                  $records_student = mysqli_query($con, "select rollno,name from ssignup");  

                  while($data = mysqli_fetch_array($records_student))
                  {
                      echo "<option value='". $data['rollno'] ."'>" .$data['name'] ."</option>";  
                  }	
              ?>  
            </select>
          </td>  
        </tr>
      </div>
      <div class="company_ch">
        <tr>
          <td>Select Company</td>
          <td>
            <select name="company" required>      
              <?php
                  
                  $records_company = mysqli_query($con, "select id,name from companymaster");  

                  while($data = mysqli_fetch_array($records_company))
                  {
                      echo "<option value='". $data['id'] ."'>" .$data['name'] ."</option>";  
                  }	
              ?>  
            </select>
          </td>
        </tr>
      </div>
      <div class="drop">
        <button type="submit" name="submit_student_company" class="hero-btn">SUBMIT</button>
      </div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>






















       