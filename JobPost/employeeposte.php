<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "job_post";

	$conn = new mysqli("localhost", "root", "", $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	$bioName = rand(1,10000)."-".$_FILES['bio']['name'];
	$tempNameb = $_FILES['bio']['tmp_name'];
	move_uploaded_file($tempNameb, "EmpPost/Bio/".$bioName);
	
	$sName = rand(1,10000)."-".$_FILES['skills']['name'];
	$tempNames = $_FILES['skills']['tmp_name'];
	move_uploaded_file($tempNames, "EmpPost/Skills/".$sName);	
	
	$eName = rand(1,10000)."-".$_FILES['experience']['name'];
	$tempNamee = $_FILES['experience']['tmp_name'];
	move_uploaded_file($tempNamee, "EmpPost/Exp/".$eName);	
	
	$iName = rand(1,10000)."-".$_FILES['image']['name'];
	$tempNamei = $_FILES['image']['tmp_name'];
	move_uploaded_file($tempNamei, "EmpPost/Img/".$iName);
	
	$Uname = $_POST['username'];
	$Name = $_POST['Name'];
	$Country = $_POST['country'];
	$Birthday = $_POST['Birthday'];
	$Phone = $_POST['phone'];
	$ccompany = $_POST['ccompany'];
	$email = $_POST['email'];
	$twitter = $_POST['twitter'];
	$linkedin = $_POST['linkedin'];
	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$profession = $_POST['Profession'];
	$sql = "INSERT INTO emp_post (uname,name,country,birthday,phone,profession,company,email,twitter,linkedin,facebook,instagram,bio,skills,exp,img)
	VALUES ('$Uname', '$Name', '$Country', '$Birthday','$Phone','$profession','$ccompany', '$email','$twitter', '$linkedin','$facebook','$instagram','$bioName','$sName','$eName','$iName')";


	if ($conn->query($sql) === TRUE) {
		?>
			<script type="text/javascript">
			alert("Employee Post Successfully Complete ! ");
			window.location.href = "../joblist.php";
			</script>
		<?php
	} 
	else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>