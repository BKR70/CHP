<?php 
	session_start();
	if(isset($_SESSION['uname'])) {
				}
				else { ?>
						<script type="text/javascript">
							alert("Plz first login!");
							window.location.href = "login.html";
						</script>
				<?php }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Us - Job Portal</title>
		<link rel="stylesheet" href="contatuse.css">
	</head>
	<body>
		<div class="nav" >
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

		<div class="container">
			<h1>Contact Us</h1>
			<h4><strong>If you have any problem, questions, suggestions, or feedback, please feel free to contact us using the form below.</strong></h4>

			<form name="contact-form" action="contactuse.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name"><strong>Your Name:</strong></label>
					<input type="text" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="email"><strong>Your Email:</strong></label>
					<input type="email" id="email" name="email" required>
				</div>
				<div class="form-group">
					<label for="message"><strong>Write Your Comment/Message:</strong></label>
					<textarea id="message" name="message" rows="5" required></textarea>
				</div>
				<div class="form-group">
					<label for="message"><strong>Upload a File (Complain,Suggest,Problem)</strong></label>
					<input type="file" id="objection" name="objection" accept=".pdf" />
				</div>
				 <div class="contact-info">
					<p><strong>Address: Shimultoly Rd, DUET, Gazipur - 1707</strong></p>
					<p><strong>Email: duet.developers.3@gmail.com</strong></p>
					<p><strong>Follow Us:</strong> 
						<a href="https://www.facebook.com/yourjobportal" target="_blank">Facebook</a>, 
						<a href="https://twitter.com/yourjobportal" target="_blank">Twitter</a>, 
						<a href="https://www.linkedin.com/company/yourjobportal" target="_blank">LinkedIn</a>
					</p>
				</div>
				
				
				<button type="submit" onclick="submitForm()">Submit</button>
				<script>
					function submitForm() {
					document.contact-form.submit();
					document.contact-form.reset();
					}
				</script>
			</form>
		</div>
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
				  <li><a href="./">Home</a></li>
				  <li><a href="#">Job List</a></li>
				  <li><a href="#">Employers</a></li>
				  <li><a href="#">Employees</a></li>
				  <li><a href="#">Contact Us</a></li>
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