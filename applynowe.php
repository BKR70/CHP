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
	
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Country = $_POST['country'];
	$JobId = $_POST['jobid'];
	$Company = $_POST['company'];
	$query = mysqli_query($conn, "select email,jobid from applynow where email='$Email' AND jobid='$JobId' ");
	$queryt = mysqli_query($conn, "select JobId from posttable where JobId='$JobId'");
	$no = mysqli_num_rows($query);
	$nod = mysqli_num_rows($queryt);
	if($no > 0) {
		?>
			<script type="text/javascript">
			alert("Your are already apply this job! ");
			window.location.href = "ApplyNow.php";
			</script>
		<?php
	}
	else if($nod < 1) {
		?>
			<script type="text/javascript">
			alert("Job Not Found ! ");
			window.location.href = "ApplyNow.php";
			</script>
		<?php
	}
	else {
		$fileName = rand(1,10000)."-".$_FILES['resume']['name'];
		$tempName = $_FILES['resume']['tmp_name'];
		move_uploaded_file($tempName, "CvList/".$fileName);
		
		$sql = "INSERT INTO applynow (name,jobid,email,country,company,cv) VALUES ('$Name', '$JobId', '$Email','$Country','$Company','$fileName')";

			if ($conn->query($sql) === TRUE) {
				?>
				<script type="text/javascript">
				alert("Job Apply Successfully Done!");
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