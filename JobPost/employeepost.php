<?php 
	session_start();
	if(isset($_SESSION['Categore'])) {
				}
				else { ?>
						<script type="text/javascript">
							alert("Plz first login as Employee!");
							window.location.href = "../login.html";
						</script>
				<?php }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="emplopost.css">
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
         <form action="employeeposte.php" method="POST" enctype="multipart/form-data">
			<h3 style="text-align:center">Post your Expertness for free ! </h3>
			<p style="text-align:center"><strong>Increase the quality of your hire</strong></p>
			<div class="input-group">
				<div style="float:left; width:50%">
					<p><strong>Username :</strong></p>
					<input type="text" id="username" name="username" required />
				 </div>
			
				<div style="float:left; width:50%">
					<p><strong>Name :</strong></p>
					<input type="text" id="Name" name="Name" required />
				</div>
			</div>
			<div class="input-group">
				<div style="float:left; width:50%">
					<p for="country"><strong>Country :<strong></p>
					<select name="country" id="country" style="width:65%; height:40px;">
					  <option value="Bangladesh">Bangladesh</option>
					  <option value="India">India</option>
					  <option value="America">America</option>
					  <option value="Germany">Germany</option>
					  <option value="Australia">Australia</option>
					</select>
				 </div>
				<div style="float:left; width:50%">
					<p><strong>Birthday :</strong></p>
					<input type="date" id="Birthday" name="Birthday" required><br>
				</div>
			</div>
			<div class="input-group">
				  <div style="float:left; width:50%">
					<p><strong>Phone :</strong></p>
					<input type="text" id="phone" name="phone" pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required><br>
				  </div>
				   <div style="float:left; width:50%">
					<p><strong>Profession :</strong></p>
					<input type="text" id="Profession" name="Profession" required><br>
				  </div>		
			</div>
			<div class="input-group">   
				  <div style="float:left; width:50%">
					<p><strong>Current Company :</strong></p>
					<input type="text" id="ccompany" name="ccompany" required><br>
				  </div>
				  <div style="float:left; width:50%">
					<p><strong>Email :</strong></p>
					<input type="email" id="email" name="email" required><br>
				  </div>
			</div>			
			<div class="input-group">
				  <div style="float:left; width:50%">
					<p><strong>Twitter Link :</strong></p>
					<input type="text" id="twitter" name="twitter" required><br>
				  </div>
				  <div style="float:left; width:50%">
					<p><strong>LinkedIn Link :</strong></p>
					<input type="text" id="linkedin" name="linkedin" required><br>
				  </div>
			</div>			
			<div class="input-group">   
				  <div style="float:left; width:50%">
					<p><strong>Facebook Link :</strong></p>
					<input type="text" id="facebook" name="facebook" required><br>
				  </div>
				  <div style="float:left; width:50%">
					<p><strong>Instagram Link :</strong></p>
					<input type="text" id="instagram" name="instagram" required><br>
				  </div>
			</div>			
			<div class="input-group">
				  <div style="float:left; width:50%">
					<p><strong>Add Your Bio File: (.txt)</strong></p>
					<input type="file" id="bio" name="bio" accept=".txt" required /><br>
				  </div>
				  <div style="float:left; width:50%">
					<p><strong>Add Your Skills File: (.txt)</strong></p>
					<input type="file" id="skills" name="skills" accept=".txt" required /><br>
				  </div>
			</div>			
			<div class="input-group">
				  <div style="float:left; width:50%">
					<p><strong>Add Your Experience File: (.txt)</strong></p>
					<input type="file" id="experience" name="experience" accept=".txt" required /><br>
				  </div>
				  <div style="float:left; width:50%">
					<p><strong>Add Your Profile Pic: (.jpeg,.png,.jpg)</strong></p>
					<input type="file" id="image" name="image" accept=".jpeg,.png,.jpg" required /><br>
				  </div>
			</div>
			<button type="submit" class="vvv" >Post</button>
       
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