<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "job_post";

	$conn = new mysqli("localhost", "root", "", $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$fileName = rand(1,10000)."-".$_FILES['objection']['name'];
	$tempName = $_FILES['objection']['tmp_name'];
	move_uploaded_file($tempName, "ContactUsFiles/".$fileName);
	
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Message = $_POST['message'];
	$sql = "INSERT INTO contactus (name, email, message, objectionfile)
	VALUES ('$Name', '$Email', '$Message','$fileName')";


	if ($conn->query($sql) === TRUE) {
		?>
		<script type="text/javascript">
							alert("Ok Done!");
							window.location.href = "Index.php";
		</script>
	<?php 
	} 
	else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>