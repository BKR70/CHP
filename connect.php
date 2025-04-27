<?php 
	session_start();
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
	$Category = $_POST['category'];
	$PasswordId = $_POST['password'];
	$RepasswordId = $_POST['repassword'];
	$query = mysqli_query($conn, "select email from store where userType = 'Employee'");
	$ck = 1;
	while($row = mysqli_fetch_assoc($query)) {
		if($row['email'] == $EmailId) {
			$ck = 0;
			?>
			<script type="text/javascript">
			alert("You are already registered!");
			window.location.href = "reg_employee.php";
			</script>
			<?php
		}
	}
    if($PasswordId!=$RepasswordId && $ck==1) {
		$ck = 0;
		?>
			<script type="text/javascript">
			alert("Password Wrong!");
			window.location.href = "reg_employee.php";
			</script>
		<?php
	}
	if($ck == 1) {
		$sql = "INSERT INTO store (firstName, lastName, email, category, password, confirmPassword, userType, location)
		VALUES ('$firstName', '$lastName', '$EmailId', '$Category', '$PasswordId','$RepasswordId', 'Employee', '$Location')";

		if ($conn->query($sql) === TRUE) {
			$_SESSION['Categore'] = $Category;
			?>
			<script type="text/javascript">
			alert("Employee Register Successful!");
			window.location.href = "joblist.php";
			</script>
			<?php
		} 
		else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	$conn->close();

?>