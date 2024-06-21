<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "job_post";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$Id = $_POST['id'];
	$UserEmail = $_POST['email'];
	$CompanyEmail = $_POST['cemail'];
	$Appoint = $_POST['appoint'];
	
	$sql = "INSERT INTO hire_table (Eid, empMail, companyMail, Designation)
	VALUES ('$Id', '$UserEmail', '$CompanyEmail', '$Appoint')";

		if ($conn->query($sql) === TRUE) {
			?>
			<script type="text/javascript">
			alert("Hired request done!");
			window.location.href = "../Employees.php";
			</script>
			<?php
		} 
		else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	$conn->close();

?>