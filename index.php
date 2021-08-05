<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>PCMT Placement Page</title>
    <link rel="stylesheet" href="assets/css/style - Home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/2809db2a65.js"></script>
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="assets/img/PCMT logo.jpg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick='hideMenu()'></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="Course/frame.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick='showMenu()'></i>
        </nav>

        <div class="text-box">
            <h1>Pailan College Of Management & Technology</h1>
            <p>Placement Department</p>
            <a href="assets/php/Account_Credentials/Tpo_Login.php"class="hero-btn">TPO Login</a>
            <a href="assets/php/Account_Credentials/Student_Login.php"class="hero-btn">STUDENT Login</a>
            <a href="assets/php/Account_Credentials/drive_status.php"class="hero-btn">Placement Status</a>
        </div>
        
            <?php

            include 'assets/php/Database Connection/dbcon.php';
            $check = "select * from upcoming_company";


            if(mysqli_num_rows(mysqli_query($con,$check))>0){
                $company = mysqli_fetch_assoc(mysqli_query($con,$check));
                ?>
                
                <marquee direction = "left" style="color: white;">
                <?php
                echo "<h4?>".$company['name'];
                echo " is hiring!";
                echo " Package " .$company['package'];
                echo ", Job Location is " .$company['job_location'];
                echo ".</h4>";
                ?>
                </marquee>
                <?php
            }
            ?>
        

    </section>

<!--------Course------------->
    <section class="course">
        <h1>Courses We Offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>

        <div class="row">
            <div class="course-col">
                <h3>Master of Business Administration</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat perspiciatis corporis quasi pariatur harum ipsum sequi nisi hic ab maiores provident perferendis expedita repellat, dolorum laborum esse sunt consectetur commodi?</p>
            </div>
            <div class="course-col">
                <h3>Engineering Gradute</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat perspiciatis corporis quasi pariatur harum ipsum sequi nisi hic ab maiores provident perferendis expedita repellat, dolorum laborum esse sunt consectetur commodi?</p>
            </div>
            <div class="course-col">
                <h3>Undergraduate Programme</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat perspiciatis corporis quasi pariatur harum ipsum sequi nisi hic ab maiores provident perferendis expedita repellat, dolorum laborum esse sunt consectetur commodi?</p>
            </div>
        </div>
    </section>

<!-----------Facilities------------>
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="assets/img/library.png">
                <h3>World Class Library</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="facilities-col">
                <img src="assets/img/basketball.png">
                <h3>Largest Playground</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="facilities-col">
                <img src="assets/img/cafeteria.png">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

<!------------Testimonials------------->
    <section class="testimonials">
        <h1>What Our Student Says</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <div class="row">
            <div class="testimonial-cal">
                <img src="assets/img/tanmay_1.jpg">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In architecto optio nam non quaerat libero illum recusandae asperiores quisquam officia animi quo totam laudantium repellendus, provident maxime itaque minus deleniti illo at impedit quod exercitationem autem! Earum fugit accusantium quis?   
                    </p>
                    <h3>Tanmay Sarkar</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>
            <div class="testimonial-cal">
                <img src="assets/img/guddu_1.jpg">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. In architecto optio nam non quaerat libero illum recusandae asperiores quisquam officia animi quo totam laudantium repellendus, provident maxime itaque minus deleniti illo at impedit quod exercitationem autem! Earum fugit accusantium quis?
                    </p>
                    <h3>Suvojit Mandal</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>
        </div>
    </section>

<!------Call To Action------------>

    <section class="cta">
        <h1>If you have any quary<br>feel free to contact with us</h1>
        <a href="contact.html" class="hero-btn">CONTACT US</a>
    </section>

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

<!-----JavaScript for Toggle Menu----->    
<script>
    var navLinks = document.getElementById("navLinks");
    
    function showMenu(){
        navLinks.style.right = '0';
    }
    function hideMenu(){
        navLinks.style.right = '-200px';
    }
</script>

</body>
</html>