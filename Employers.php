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
      <p><strong>Apple Inc., originally Apple Computer, Inc., is a multinational corporation that creates and markets consumer electronics and attendant computer software, and is a digital distributor of media content. Apple's core product lines are the iPhone smartphone, iPad tablet computer, and the Mac personal computer. </strong></p>
      <a href="CompanyWiseJobList/apple.php">View Jobs</a>
    </div>

    <div class="employer">
      <h2 style="color:#F0F8FF;">Amazon</h2>
      <p><strong>Amazon.com, Inc., doing business as Amazon, is a multinational technology company primarily known for its e-commerce platform. Beyond e-commerce, Amazon is also involved in cloud computing (Amazon Web Services), online advertising, digital streaming, and artificial intelligence. </strong></p>
      <a href="CompanyWiseJobList/amazon.php">View Jobs</a>
    </div>
     
	<div class="employer">
      <h2 style="color:#F0F8FF;">Google</h2>
      <p><strong>Google is an American multinational technology company founded by Larry Page and Sergey Brin in 1998. It is a subsidiary of Alphabet Inc. and is known for its search engine, online advertising, cloud computing, and other products and services. It operates with a mission to organize the world's information and make it universally accessible and useful.  </strong></p>
      <a href="CompanyWiseJobList/google.php">View Jobs</a>
    </div>
	    <div class="employer">
      <h2 style="color:#F0F8FF;">Brainstation 23</h2>
      <p><strong>Brain Station 23 is a software and IT solutions company based in Bangladesh, not a public limited company (PLC) as indicated in the title. Brain Station 23 is a company focused on digital transformation and IT services, offering solutions in areas like software development, cloud computing, and AI.</strong></p>
      <a href="CompanyWiseJobList/brainstation.php">View Jobs</a>
    </div>
	    
	<div class="employer">
      <h2 style="color:#F0F8FF;">Microsoft</h2>
      <p><strong>Microsoft Corporation is an American multinational corporation and technology conglomerate headquartered in Redmond, Washington. 
		Founded in 1975, the company became influential in the rise of personal computers through software like Windows, and the company has since expanded to Internet services, cloud computing, video gaming and other fields.</strong></p>
      <a href="CompanyWiseJobList/microsoft.php">View Jobs</a>
    </div>
	     
	<div class="employer">
      <h2 style="color:#F0F8FF;">Optimizely</h2>
      <p><strong>Optimizely is an American company that provides digital experience platform software as a service. Optimizely provides A/B testing and multivariate testing tools, website personalization, and feature toggle capabilities, as well as web content management and digital commerce.
		The company was acquired by Episerver in October 2021.</strong></p>
      <a href="CompanyWiseJobList/optimizely.php">View Jobs</a>
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

