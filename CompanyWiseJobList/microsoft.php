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
	$query = "select JobId, title, company, wtype, officelocation, location, jtype from posttable where company = 'Microsoft' ";
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
		  <li><a href="../Index.php">Home</a></li>
		  <li><a href="../joblist.php">Job List</a></li>
		  <li><a href="../Employers.php">Employers</a></li>
		  <li><a href="../Employees.php">Employees</a></li>
		  <li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">J/E Post</a>
			<div class="dropdown-content">
			  <a href="../JobPost/jobpost.php">Job Post</a>
			  <a href="../JobPost/jobpost.php">Employee Post</a>
			</div>
		  </li>
		  <li><a href="../Contactus.php">Contact us</a></li>
		  <?php if(isset($_SESSION['uname'])) { ?>
			<li style="float:right"><a class="active" href="../logout.php"> Log Out</a></li>
			<li style="float:right"><a href="../jobtable.php"> <?php echo $_SESSION['uname'];?></a></li>
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
	<div class="container" style="">
        <h1 style="border-bottom:1px dotted black; padding-bottom:20px;"> Job at Microsoft.</h1>
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
                <?php if(isset($_SESSION['Categore'])) { $_SESSION['CompanyName'] = $row['company'];?>
					
					<a href="../APPlyNow.php">Apply Now</a>
				<?php } else {?>
					<a href="../login.html" onclick="chk()">Apply Now</a>
				<?php } ?>
			</div> 
			<?php 
				}
			?>
        </div>
    </div>
	<script>
		function chk() {
			alert("Plz. LogIn First!");
		}
	</script>
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