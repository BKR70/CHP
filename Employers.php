<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employers Page</title>
  <link rel="stylesheet" href="employer.css">
</head>
<body>
    <div class="nav">
		<ul>
		  <li><a href="Index.php">Home</a></li>
		  <li><a href="joblist.php">Job List</a></li>
		  <li><a href="Employers.php">Employers</a></li>
		  <li><a href="Employees.php">Employees</a></li>
		  <li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">J/E Post</a>
			<div class="dropdown-content">
			  <a href="JobPost/jobpost.php">Job Post</a>
			  <a href="JobPost/employeepost.php">Employee Post</a>
			</div>
		  </li>
		  <li><a href="Contactus.php">Contact us</a></li>
		  <?php if(isset($_SESSION['uname'])) { ?>
			<li style="float:right"><a class="active" href="logout.php"> Log Out</a></li>
			<li style="float:right"><a href="jobtable.php"> <?php echo $_SESSION['uname'];?></a></li>
		  <?php } 
				else {
		    ?>
			  <li style="float:right"><a class="active" href="login.html">Log In</a></li>
			  <li class="dropdown" style="float:right">
				<a href="javascript:void(0)" class="dropbtn">Register</a>
				<div class="dropdown-content">
				  <a href="reg_employee.php">Register as Employee</a>
				  <a href="reg_employer.php">Register as Employer</a>
				</div>
			  </li>
		  <?php } 
		  ?>
		</ul>
	</div>
  <h1 style = "background-color:gray; text-align:center; background-color:cyan;">Our Proud Employers List.</h1>
  
  <section class="employer-list">
    <div class="employer">
      <h2 style="color:#F0F8FF;">Apple</h2>
      <p><strong>Envobyte is an IT Company that provides web and app development, digital marketing, graphics design and other services. Envobyte is an IT Company that provides web and app development, digital marketing, graphics design and other services.</strong></p>
      <a href="CompanyWiseJobList/apple.php">View Jobs</a>
    </div>

    <div class="employer">
      <h2 style="color:#F0F8FF;">Amazon</h2>
      <p><strong>The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast</strong></p>
      <a href="CompanyWiseJobList/amazon.php">View Jobs</a>
    </div>
     
	<div class="employer">
      <h2 style="color:#F0F8FF;">Google</h2>
      <p><strong>Google LLC (Google), a subsidiary of Alphabet Inc, is a provider of search and advertising services on the internet. The company's business areas include advertising, search, platforms and operating systems, and enterprise and hardware products.</strong></p>
      <a href="CompanyWiseJobList/google.php">View Jobs</a>
    </div>
	    <div class="employer">
      <h2 style="color:#F0F8FF;">Brainstation 23</h2>
      <p><strong>The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast</strong></p>
      <a href="CompanyWiseJobList/brainstation.php">View Jobs</a>
    </div>
	    
	<div class="employer">
      <h2 style="color:#F0F8FF;">Microsoft</h2>
      <p><strong>The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast</strong></p>
      <a href="CompanyWiseJobList/microsoft.php">View Jobs</a>
    </div>
	     
	<div class="employer">
      <h2 style="color:#F0F8FF;">Tesla</h2>
      <p><strong>The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast The all-in-one system for marketing—purpose-built to help teams create & optimize personalized digital experiences, fast</strong></p>
      <a href="CompanyWiseJobList/tesla.php">View Jobs</a>
    </div>

  </section>
  <footer>
		<div class="row primary">
		  <div class="column about">
			<h3>About Career Hub Platform</h3>
			<p>
			  <i class="fa fa-map-marker" aria-hidden="true"></i>
			  Career Hub Platform is a job portal, online job management system developed by DUET_Developers for their semester project in february 2024.
			</p>
		  </div>

		  <div class="column link">
			<h3>Quick Links</h3>
			<ul>
			  <li><a href="Index.html">Home</a></li>
			  <li><a href="joblist.php">Job List</a></li>
			  <li><a href="Employers.html">Employers</a></li>
			  <li><a href="Employees.html">Employees</a></li>
		      <li><a href="Contactus.html">Contact Us</a></li>
			</ul>
		  </div>

		  <div class="column subscribe">
			<h3>DUET_Developers Contact</h3>
			<div >
				<p>Address : DUET, Gazipur - 1707</p>
				<p>Email : duet.developers.3@gmail.com</p>
				<p>Phone : +8801723930233</p>
			</div>
		  </div>
		</div>
		<div class="row copyright">
			<div>
					
				<p>&#169; Copyright 2024 My Solution Soft. Acad.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Developed by DUET_Developers</p>
								
			</div>
		</div>


	</footer>
</body>
</html>

