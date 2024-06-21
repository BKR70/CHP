<?php 
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "employee_db";
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(isset($_POST['login'])) {
		$Email = $_POST['email'];
		$Password = $_POST['password'];
		$Usertype = $_POST['user'];
		$query = mysqli_query($conn, "select * from store where email = '$Email'");
		$no = mysqli_num_rows($query);
		if($no > 0) {
			$data = mysqli_fetch_assoc($query);
			if($data['password'] == $Password){
				if($data['userType'] == $Usertype) {
					if($Usertype == "Employee") {
						$_SESSION['Categore'] = $data['category'];
						$_SESSION['uname'] = $data['firstName'];
						?>
						<script type="text/javascript">
							alert("Successfully Employee LogIn");
							window.location.href = "joblist.php";
						</script>
						<?php 
					}
					else {
						$_SESSION['uname'] = $data['firstName'];
						$_SESSION['techGiantmail'] = $data['email'];
						$_SESSION['techGiantname'] = $data['firstName'];
						?>
						<script type="text/javascript">
							alert("Successfully Employer LogIn");
							window.location.href = "Employees.php";
						</script>
						<?php 
					}
				}
				else {
					//echo '<script type="text/javascript"> window.onload = function () { alert("UserType is wrong"); } </script>';
					?>
						<script type="text/javascript">
							alert("UserType is wrong");
							window.location.href = "login.html";
						</script>
					<?php 
				}
			}
			else {
				//echo '<script type="text/javascript"> window.onload = function () { alert("Password is wrong"); } </script>';
				?>
						<script type="text/javascript">
							alert("Password is wrong");
							window.location.href = "login.html";
						</script>
				<?php 
			}
		}
		else {
						?>
						<script type="text/javascript">
							alert("Email doesn\'t exist!");
							window.location.href = "login.html";
						</script>
						<?php 
			//echo '<script type="text/javascript"> window.onload = function () { alert("Email doesn\'t exist!"); } </script>';
		}
	}

?>