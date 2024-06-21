<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "job_post";

	$conn = new mysqli("localhost", "root", "", $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 
	
	if( isset($_SESSION['techGiantname']) ){
		$var = $_SESSION['techGiantname'];
		$query = "select jobid, email, country, cv from applynow where company='$var'";
	}
	else { ?>
		<script type="text/javascript">
							alert("Plz Login as Employer");
							window.location.href = "Index.php";
		</script>
	<?php 
	}
	$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tablejob.css">
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
	<div class="form-container">
		<h2 style="text-align:center; color:gray;">User Application List</h2>

		<table>
		  <tr>
			<th>Job Id</th>
			<th>User Email</th>
			<th>User Location </th>
			<th>CV </th>
		  </tr>
		  <?php
				while($row = mysqli_fetch_assoc($result)) {
			?>
			  <tr>
				<td><?php echo $row['jobid']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['country']; ?></td>
				<td><?php echo $row['cv']; ?></td>
			  </tr>
		  <?php 
				}
			?>
		</table>
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
				<p>Address : Shimultoly Rd, DUET, Gazipur - 1707</p>
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
