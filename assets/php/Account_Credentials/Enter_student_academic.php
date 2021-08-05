<?php
session_start();
//$_SESSION['email'] = $email;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SignIn</title>
  </head>

  <body>
	<?php
	if(isset($_POST['submit_student_academic']))
	{
	    try{
	        include '../Database Connection/dbcon.php';


            $emailsession = $_SESSION['email'];
            $query = "select * from ssignup where email = '$emailsession'";
            $exequery = mysqli_query($con,$query);
            $welcome = mysqli_fetch_assoc($exequery);

            $roll = $welcome['rollno'];
	        $marks10 = (int)mysqli_real_escape_string($con, $_POST['marks10']);
	        $marks12 = (int)mysqli_real_escape_string($con, $_POST['marks12']);
            $btech = (int)mysqli_real_escape_string($con, $_POST['btech']);
            $yeargap = (int)mysqli_real_escape_string($con, $_POST['yeargap']);

	        $insertquery = "insert into student_details (student_roll, 10marks, 12marks, btech, yeargap) values('$roll','$marks10', '$marks12', '$btech', '$yeargap')";
	      	$query = mysqli_query($con,$insertquery);

            if($query){
                header("location: Dashboard_Student.php");
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


<!----------------Form------------------------>

<div class="container">
	<div class="login_rapper">
		<h4>Enter Student Academic</h4>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">
			<div class="form-group">
				<label>10th Marks(%)</label>
				<input type="text" name="marks10" class="form-control" aria-describedby="emailHelp" placeholder="Enter class 10th Marks" required>
			</div>

			<div class="form-group">
				<label>12th Marks(%)</label>
				<input type="text" name="marks12" class="form-control" aria-describedby="emailHelp" placeholder="Enter class 12th Marks" required>
			</div>
			<div class="form-group">
				<label>B.Tech Marks(%)</label>
				<input type="text" name="btech" class="form-control" aria-describedby="emailHelp" placeholder="Enter B.Tech Marks" required>
			</div>
			<div class="form-group">
				<label>Year Gaps</label>
				<input type="text" name="yeargap" class="form-control" aria-describedby="emailHelp" placeholder="Enter Year Gaps" required>
			</div>
			<button type="submit" name="submit_student_academic" class="btn btn-primary">Submit</button>
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
  


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>