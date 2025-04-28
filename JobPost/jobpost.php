<?php 
	session_start();
	if(isset($_SESSION['techGiantname'])) {
				}
				else { ?>
						<script type="text/javascript">
							alert("Plz first login as Employer!");
							
							<?php 
								session_unset();
								session_destroy();
							?>
			
							window.location.href = "../login.html";
						</script>
				<?php }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="indeex.css">
</head>
<body>
    <div class="nav">
		<ul>
		  <li><a href="../Index.php">Home</a></li>
		  <li><a href="../joblist.php">Job List</a></li>
		  <li><a href="../Employers.php">Employers</a></li>
		  <li><a href="../Employees.php">Employees</a></li>
		  <li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">J/E Post</a>
			<div class="dropdown-content">
			  <a href="jobpost.php">Job Post</a>
			  <a href="employeepost.php">Employee Post</a>
			</div>
		 </li>
		  <li><a href="../Contactus.php">Contact us</a></li>
		  <?php if(isset($_SESSION['uname'])) { ?>
			<li style="float:right"><a class="active" href="../logout.php"> Log Out</a></li>
			<li style="float:right"><a href=""> <?php echo $_SESSION['uname'];?></a></li>
		  <?php } 
				else {
		    ?>
			  <li style="float:right"><a class="active" href="../login.html">Log In</a></li>
			  <li class="dropdown" style="float:right">
				<a href="javascript:void(0)" class="dropbtn">Register</a>
				<div class="dropdown-content">
				  <a href="../reg_employee.php">Register as Employee</a>
				  <a href="../reg_employer.php">Register as Employer</a>
				</div>
			  </li>
		  <?php } 
		  ?>
		</ul>
	</div>
	<div class="form-containere">
        <form action="jobposte.php" method="POST" enctype="multipart/form-data">
			<h3 style="text-align:center">Post a job for free</h3>
			<p style="text-align:center"><strong>Hired a Expert Employee!</strong></p>
			  <div class="input-group">
				<p><strong>Job Title:</strong></p>
				<input type="text" id="jobtitle" name="jobtitle" required>
			  </div>
			  <div class="input-group">
				<label for="company"><strong>Company:<strong></label><br>
				<input type="text" id="company" name="company" value = "<?php echo $_SESSION['techGiantname']; ?>" readonly  required><br>
			  </div>
			  <div class="input-group">
				<label for="category"><strong>Category:<strong></label><br>
				<select name="category" id="category" style="width:50%; height:40px;">
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
				<label for="work"><strong>Workplace Type:<strong></label><br>
				<select name="work" id="work" style="width:50%; height:40px;">
				  <option value="Remote">Remote</option>
				  <option value="On-site">On-site</option>
				  <option value="Hybrid">Hybrid</option>
				</select>
			  </div>
			  <div class="input-group">
				<p><strong>Office Location:</strong></p>
				<input type="text" id="olocation" name="olocation" required><br>
			  </div>			  
			  <div class="input-group">
				<p><strong>Employee Location:</strong></p>
				<input type="text" id="location" name="location" required><br>
			  </div>
			  <div class="input-group">
				<label for="jobtype"><strong>Job Type:<strong></label><br>
				<select name="jobtype" id="jobtype" style="width:50%; height:40px;">
				  <option value="Full-time">Full-time</option>
				  <option value="Part-time">Part-time</option>
				  <option value="Contract">Contract</option>
				  <option value="Internship">Internship</option>
				  <option value="Volunteer">Volunteer</option>
				</select>
			  </div>
			  <div class="input-group">
					<p><strong><label for="skills">Responsibilities & Requirements(TXT, DOCX): </label></strong></p>
					<input type="file" name="skills" id="skills" accept=".txt,.docx" required />
			  </div>     
		
			  <button type="submit" class="vvv">Post</button>
       
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