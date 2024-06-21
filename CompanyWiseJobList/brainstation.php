<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "job_post";

	$conn = new mysqli("localhost", "root", "", $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 
	$query = "select JobId, title, company, wtype, officelocation, location, jtype from posttable where company = 'Brainstation 23' ";
	$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Listings - Job Portal</title>
  <link rel="stylesheet" href="Optimizely.css">
</head>
<body>
    <div class="nav">
		<ul>
		  <li><a href="#home">Home</a></li>
		  <li><a href="../joblist.html">Job List</a></li>
		  <li><a href="../Employers.html">Employers</a></li>
		  <li><a href="../Employees.html">Employees</a></li>
		  <li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">J/E Post</a>
			<div class="dropdown-content">
			  <a href="">Job Post</a>
			  <a href="">Employee Post</a>
			</div>
		  </li>
		  <li><a href="../Contactus.html">Contact us</a></li>
		  <li style="float:right"><a class="active" href="#">Log In</a></li>
		  <li class="dropdown" style="float:right">
			<a href="javascript:void(0)" class="dropbtn">Register</a>
			<div class="dropdown-content">
			  <a href="reg_employee.html">Register as Employee</a>
			  <a href="reg_employer.html">Register as Employer</a>
			</div>
		  </li>
		</ul>
	</div>
	<div class="container" style="">
        <h1 style="border-bottom:1px dotted black; padding-bottom:20px;"> Job at Brain Station 23 PLC.</h1>
        <div class="job-listings">
            <?php
				while($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="job">
                <h2><?php echo $row['title']; ?></h2>
                <p><strong><?php echo $row['company']; ?></strong></p>
                <p>Job Id : <?php echo $row['JobId']; ?></p>
                <p>Off. Location : <?php echo $row['officelocation']; ?></p>
                <p>Emp Location : <?php echo $row['location']; ?></p>
                <p><?php echo $row['wtype']; ?>. <?php echo $row['jtype']; ?></p>
                <p><strong>Skills: Web Development, Cascading Style Sheets (CSS), API Development, Database Design, Git, HTML, Laravel, MySQL, Node.js, PHP</strong></p>
                <a href="../APPlyNow.html">Apply Now</a>
			</div> 
			<?php 
				}
			?>
        </div>
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