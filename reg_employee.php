<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#4c9999;">
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
	<div class="form-containere">
        <form action="connect.php" method="POST" enctype="multipart/form-data">
        <h3>Employee Registration Form</h3>
          <div class="input-group">
            <label><strong>First Name:</strong></label><br/>
            <input type="text" placeholder="Enter Your First Name" id="fname" name="fname" required><br>
          </div>
    
          <div class="input-group">
            <label><strong>Last Name:</strong></label><br>
            <input type="text" placeholder="Enter Your Last Name" id="lname" name="lname" required><br>
          </div>
          <div class="input-group">
            <label><strong>Email Id:</strong></label><br>
            <input type="email" placeholder="Enter Your Email Id" id="email" name="email" required><br>
          </div>
		  <div class="input-group">
				<label for="category"><strong>Expert As:<strong></label><br>
				<select name="category" id="category" style="width:328px; height:34px;">
				  <option value="sde">Software Development </option>
				  <option value="sales">Sales & Marketing</option>
				  <option value="apps">Apps Development</option>
				  <option value="wds">Web Design</option>
				  <option value="management">Management</option>
				  <option value="wed">Web Development</option>
				  <option value="cloud">Cloud Engineering</option>
				  <option value="datascience">Data Science</option>
				</select>
		  </div>

          <div class="input-group">
            <label><strong>Password:</strong></label><br>
            <input type="password" placeholder="Enter strong password" id="password" name="password" pattern=".{8,}" required title="8 characters minimum" required><br>
          </div>
		  <div class="input-group">
            <label><strong>Password Confirmation:</strong></label><br>
            <input type="password" placeholder="Retype your password " id="repassword" name="repassword" pattern=".{8,}" required title="8 characters minimum" required><br>
          </div>
    
        <button type="submit" name="regis" class="regisssterbtn">Register</button>
       
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