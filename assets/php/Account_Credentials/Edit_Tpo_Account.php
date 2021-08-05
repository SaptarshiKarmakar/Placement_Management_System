
<?php
session_start();
//present previous
?>
<?php
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Update Account</title>
  </head>


  <body>
	<?php
	if(isset($_POST['update_submit']))
	{
	    try{
	        include '../Database Connection/dbcon.php';


            $newname = mysqli_real_escape_string($con, $_POST['newname']);
	        $newemail = mysqli_real_escape_string($con, $_POST['newemail']);	        
            $newphno = mysqli_real_escape_string($con, $_POST['newphno']);
            $newpassword = mysqli_real_escape_string($con, $_POST['newpassword']);
            
			$newtable = "update tpologin set name = '$newname', email = '$newemail', phno = '$newphno', password = '$newpassword' where id = '0'";

			if(mysqli_query($con,$newtable)){
				header("location: /placement/index.php");
			}
			else{
				header("location: Edit_Tpo_Account.php");
			}


	        // $emailquery = "select * from tpologin where email = '$newemail'";
	      	// $query = mysqli_query($con,$emailquery);
            // $email_count = mysqli_num_rows($query);

	        // if($email_count)
	        // {
			// 	$email_pass = mysqli_fetch_assoc($query);
			// 	$db_pass = $email_pass['password'];

			// 	if($password = $db_pass)
			// 	{
			// 		$newtable = "update tpologin set name = '$newname', email = '$newemail', phno = '$newphno' where password = '$password'";
			// 	}
			// 	else{
			// 		echo "Password is Incorrect";
			// 	}
	        // }
	        // else{
	        //   header("location: Dashboard_Tpo.php");
            // }
	        
          }

	    catch(Exception $e){
	        echo $e;
	    }
	}
	?>

<!---------------Header--------------->

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


<!----------Form---------->

<div class="container">
	<div class="login_rapper">
		<h4>Edit TPO Account</h4>
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">
			<div class="form-group">
				<label>New Name</label>
				<input type="newname" name="newname" class="form-control" aria-describedby="emailHelp" placeholder="Enter new name" required>
			</div>     

			<div class="form-group">
				<label>New Email</label>
				<input type="newemail" name="newemail" class="form-control" aria-describedby="emailHelp" placeholder="Enter new email" required>
			</div>

			<div class="form-group">
				<label>New Phone Number</label>
				<input type="newphno" name="newphno" class="form-control" aria-describedby="emailHelp" placeholder="Enter new phone number" required>
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">New Password</label>
				<input type="newpassword" name="newpassword" class="form-control" id="exampleInputPassword1" placeholder="new Password" required>
			</div>
			<button type="submit" name="update_submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
	
<!-----------Footer-------------->

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