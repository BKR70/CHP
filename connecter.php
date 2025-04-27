<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "employee_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$EmailId = $_POST['email'];
	$Location = $_POST['location'];
	$PasswordId = $_POST['password'];
	$RepasswordId = $_POST['repassword'];
	$query = mysqli_query($conn, "select email from store where userType = 'Employer'");
	$ck = 1;
	while($row = mysqli_fetch_assoc($query)) {
		if($row['email'] == $EmailId) {
			$ck = 0;
			?>
			<script type="text/javascript">
			alert("You are already registered!");
			window.location.href = "reg_employer.php";
			</script>
			<?php
		}
	}
    if($PasswordId!=$RepasswordId && $ck==1) {
		$ck = 0;
		?>
			<script type="text/javascript">
			alert("Password Wrong!");
			window.location.href = "reg_employer.php";
			</script>
		<?php
	}
	if($ck == 1) {
		$sql = "INSERT INTO store (firstName, location, email, password, confirmPassword, userType)
		VALUES ('$firstName', '$Location', '$EmailId', '$PasswordId','$RepasswordId', 'Employer' )";

		if ($conn->query($sql) === TRUE) {
			?>
			<script type="text/javascript">
			alert("Employer Register Successful!");
			window.location.href = "Employees.php";
			</script>
			<?php
		} 
		else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();

?>