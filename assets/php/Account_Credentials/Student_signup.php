
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

    <title>Signup</title>
  </head>
  <body>
	<?php
	if(isset($_POST['signup_submit']))
	{
	    try{
	        include '../Database Connection/dbcon.php';

	        $username = mysqli_real_escape_string($con, $_POST['username']);
			$rollno = mysqli_real_escape_string($con, $_POST['rollno']);
			$passout_year = mysqli_real_escape_string($con, $_POST['passout_year']);
	        $department = mysqli_real_escape_string($con, $_POST['department']);
	        $email = mysqli_real_escape_string($con, $_POST['email']);
	        $cno = mysqli_real_escape_string($con, $_POST['cno']);
	        $refcode = mysqli_real_escape_string($con, $_POST['refcode']);
	        $password = mysqli_real_escape_string($con, $_POST['password']);
			//$isdeleted = mysqli_real_escape_string($con, $_POST['username']);


	        $emailquery = "select * from ssignup where email = '$email'";
	      	$query = mysqli_query($con,$emailquery);

	        if(mysqli_num_rows($query) > 0)
	        {
	          echo "Email Already Exist";
	        }
	        else{
	          if($refcode == "cse8-2021"){
	          if($password)
	          {
	            $insertquery = "insert into ssignup(name, rollno, passout_year, department, email, cno, refcode, password, isdeleted) 
	            values('$username','$rollno', '$passout_year', '$department','$email','$cno','$refcode','$password', false)";
	            $iquery = mysqli_query($con, $insertquery);
	            if($iquery)
	            {
	              echo "Inserted";
	              header("location: Student_Login.php");
	            }else{
	              echo "Insertion failed";
	            }
	          }
	        }else{
				echo "Wrong referrel code";
			}
	      }

	    }catch(Exception $e){
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
                        
                        <li><a href="logout.php">HOME</a></li>
                    </ul>
                </div>
            </nav>
    </header>


<!-----------------Form------------------------>
<div class="container">
	<div class="login_rapper">
		<div class="container mt-5">
			<h4>Student SignUp</h4>
		</div>
		<form name="signup_form" id="signup" class="form m-4" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"  autocomplete="off">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
				<small></small>
			</div>
			<div class="form-group">
				<label>Roll No.</label>
				<input type="text" class="form-control" name="rollno" id="rollno" placeholder="Enter Roll No.">
				<small></small>
			</div>
			<div class="form-group">
				<label>Passout Year</label>
				<input type="text" class="form-control" name="passout_year" id="passout_year" placeholder="Enter Passout Year">
				<small></small>
			</div>
			<div class="form-group">
				<label>Department</label>
				<input type="text" class="form-control" name="department" id="department" placeholder="Enter Department">
				<small></small>
			</div>
			<div class="form-group">
				<label>Email address</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter email Id">
				<small></small>
			</div>
			<div class="form-group">
				<label>Phone Number</label>
				<input type="text" class="form-control" name="cno" id="cno" placeholder="Enter Contact Number">
				<small></small>
			</div>
			<div class="form-group">
				<label>Ref Code</label>
				<input type="text" class="form-control" name="refcode" id="refcode" placeholder="Enter RefCode">
				<small></small>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
				<small></small>
			</div>
			<div class="text-center">
				<button type="submit" name="signup_submit" class="btn btn-primary">Submit</button>
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
  
	<script>  

const usernameEl = document.querySelector('#username');
const rollnoE1 = document.querySelector('#rollno');
const passout_yearE1 = document.querySelector('#passout_year');
const departmentE1 = document.querySelector('#department');
const emailEl = document.querySelector('#email');
const cnoE1 = document.querySelector('#cno');
const passwordEl = document.querySelector('#password');


const form = document.querySelector('#signup');


const checkUsername = () => {

    let valid = false;

    const min = 3,
        max = 25;

    const username = usernameEl.value.trim();

    if (!isRequired(username)) {
        showError(usernameEl, 'Username cannot be blank.');
    } else if (!isBetween(username.length, min, max)) {
        showError(usernameEl, `Username must be between ${min} and ${max} characters.`)
    } else {
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
};

const checkRollno = () => {

    let valid = false;

    const rollno = rollnoE1.value.trim();

    if (!isRequired(rollno)) {
        showError(rollnoE1, 'Roll No. cannot be blank.');
    } else if (!isRollnoValid(rollno)) {
        showError(rollnoE1, 'Enter a valid roll no .');
    } else {
        showSuccess(rollnoE1);
        valid = true;
    }
    return valid;
};

const checkPassout_year = () => {

    let valid = false;

    const min = 2017,
        max = 2022;

    const passout_year = passout_yearE1.value.trim();

    if (!isRequired(passout_year)) {
        showError(passout_yearE1, 'Passout Year cannot be blank.');
    } else if (!isBetween(passout_year, min, max)) {
        showError(passout_yearE1, `Passout Year must be between ${min} and ${max} .`)
    } else {
        showSuccess(passout_yearE1);
        valid = true;
    }
    return valid;
};

const checkDepartment = () => {

    let valid = false;

    const department = departmentE1.value.trim();

    if (!isRequired(department)) {
        showError(departmentE1, 'Department cannot be blank.');
    } else if (!isDepartmentValid(department)) {
        showError(departmentE1, 'Department is not valid.')
    } else {
        showSuccess(departmentE1);
        valid = true;
    }
    return valid;
};


const checkEmail = () => {
    let valid = false;
    const email = emailEl.value.trim();
    if (!isRequired(email)) {
        showError(emailEl, 'Email cannot be blank.');
    } else if (!isEmailValid(email)) {
        showError(emailEl, 'Email is not valid.')
    } else {
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
};

const checkCno = () => {
    let valid = false;
    const cno = cnoE1.value.trim();
    if (!isRequired(cno)) {
        showError(cnoE1, 'Contact number cannot be blank.');
    } else if (!isCnoValid(cno)) {
        showError(cnoE1 , 'Contact number is not valid.');
    } else {
        showSuccess(cnoE1);
        valid = true;
    }
    return valid;
};

const checkPassword = () => {
    let valid = false;


    const password = passwordEl.value.trim();

    if (!isRequired(password)) {
        showError(passwordEl, 'Password cannot be blank.');
    } else if (!isPasswordSecure(password)) {
        showError(passwordEl, 'Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)');
    } else {
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
};


const isEmailValid = (email) => {
    const re = new RegExp("^[A-Za-z]{1}[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+(\\.[a-zA-Z]{2,3}){1,2}$");
	return re.test(email);
};

const isDepartmentValid = (department) => {
    const re = new RegExp("^[A-Z]{2,}$");
	return re.test(department);
};

const isRollnoValid = (rollno) => {
    const re = new RegExp("[1-9]{1}[0-9]{10}$");

	return re.test(rollno);
};
const isCnoValid = (contactno) => {
    const re = new RegExp("[6-9]{1}[0-9]{9}$");
	return re.test(contactno);
};

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const isRequired = value => value === '' ? false : true;
const isBetween = (length, min, max) => length < min || length > max ? false : true;


const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    const formInput = input;
    // add the error class
    formInput.classList.remove('is-valid');
    formInput.classList.add('is-invalid');

    // show the error message
    const error = formField.querySelector('small');
    error.classList.add('invalid-feedback');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;
    const formInput = input;

    // remove the error class
    formInput.classList.remove('is-invalid');
    formInput.classList.add('is-valid');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}


form.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // validate fields
    let isUsernameValid = checkUsername(),
        isRollnoValid = checkRollno(),
    	isPassoutYearValid = checkPassout_year(),
        isDepartmentValid = checkDepartment(),
        isEmailValid = checkEmail(),
        isCnoValid = checkCno(),
        isPasswordValid = checkPassword();
        // isConfirmPasswordValid = checkConfirmPassword();

    let isFormValid = isUsernameValid && 
        isRollnoValid && 
		isPassoutYearValid && 
        isDepartmentValid && 
        isEmailValid && 
        isCnoValid && 
        isPasswordValid;

    // submit to the server if the form is valid
    if (isFormValid) {

    }
});


const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};

form.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'username':
            checkUsername();
            break;
        case 'rollno':
            checkRollno();
            break;
        case 'department':
            checkDepartment();
            break;
        case 'passout_year':
            checkPassout_year();
            break;
        case 'email':
            checkEmail();
            break;
        case 'cno':
            checkCno();
            break;
        case 'password':
            checkPassword();
            break;
    }
}));

</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>




</html>