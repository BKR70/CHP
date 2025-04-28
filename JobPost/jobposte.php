<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "job_post";

	$conn = new mysqli("localhost", "root", "", $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
				
	$fileName = $_FILES['skills']['name'];
	$tempName = $_FILES['skills']['tmp_name'];
	move_uploaded_file($tempName, "upload/".$fileName);
	
	$JobTitle = $_POST['jobtitle'];
	$Company = $_POST['company'];
	$Category = $_POST['category'];
	$WorkPlace = $_POST['work'];
	$OLocation = $_POST['olocation'];
	$Location = $_POST['location'];
	$JobType = $_POST['jobtype'];
	$sql = "INSERT INTO posttable (title, company, category, wtype, officelocation, location, jtype, file_name)
	VALUES ('$JobTitle', '$Company', '$Category', '$WorkPlace', '$OLocation','$Location','$JobType', '$fileName')";


	if ($conn->query($sql) === TRUE) {
		?>
			<script type="text/javascript">
			alert("Job Post Successfully Complete ! ");
			window.location.href = "../Employees.php";
			</script>
		<?php
	} 
	else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>