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
	$query = mysqli_query($conn, "select * from emp_post where eid = 6");
	$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="empee.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style = "background-color:cyan" >
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Employee Profile
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Social links</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="../ProfPic/2.jpg" alt
                                    class="d-block ui-w-80">
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Username :</label>
                                    <input type="text" class="form-control mb-1" value=<?php echo $data['uname'] ?> readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Name :</label>
                                    <input type="text" class="form-control" value=<?php echo $data['name'] ?> readonly="readonly">
                                </div>
								<div class="form-group">
                                    <label class="form-label">Employee Id :</label>
                                    <input type="text" class="form-control" value=<?php echo $data['eid'] ?> readonly="readonly">
                                </div>
								<div class="form-group">
                                    <label class="form-label">Birthday : </label>
                                    <input type="text" class="form-control" value=<?php echo $data['birthday'] ?> readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Country : </label>
                                    <input type="text" class="form-control" value=<?php echo $data['country'] ?> readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Profession :</label>
                                    <input type="text" class="form-control" value=<?php echo $data['profession'] ?> readonly="readonly">
                                </div>
								<div class="form-group">
                                    <label class="form-label">Current Company :</label>
                                    <input type="text" class="form-control" value=<?php echo $data['company'] ?> readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label"><strong>Bio : </strong></label>
                                    <textarea class="form-control"
                                        rows="9" readonly="readonly">I am Bilas Kumar Roy.Software Engineer (Remote) at Affine DeFi | ICPC World Finalist | Problem Setter at International Math Olympiad, Codeforces, CodeChef, Hackerrank | Author of 60+ problems | Grandmaster (Red) at Codeforces | 7* (Red) at CodeChef | Solved 5500+ problems on various online judges | 6+ Years of Experience in Competitive Programming | Top 10 in 10+ National Programming Contests | Top 100 in 20+ International Programming Contests | Global Rank 7 among official participants in a Codeforces Div. 2 Round | Number 1 Contributor in the World on Codeforces during Oct 2021 - May 2022 | 2000+ Stars in my Personal Code Library | Founder of Bangladesh CP Server - BCS , the largest Competitive Programming Discord Community in Bangladesh | Proud Founder of this YouKn0wWho Academy .</textarea>
                                </div>
                                
                            </div>                            
							<div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label"><strong>Skills : </strong></label>
                                    <ol type="1">
									  <li>Languages: C++ | Python | JavaScript | Typescript | Solidity</li>
									  <li>Frontend: HTML | CSS | React | Next.js | Chakra UI</li>
									  <li>Backend: FastAPI | Express.js | Node.js | PostgreSQL | Firebase | NoSQL</li>
									  <li>Blockchain/Smart Contracts: Solidity | Javascript | Typescript | Web3.js | Web3.py | Foundry | Remix | Hardhat | Ethers | Mocha | ChainLink | Alchemy | Infura | Ganache</li>
									  <li>DevOps: Git | Docker | Kubernetes | Github CI/CD | Linux | ArgoCD | Datadog | Sentry</li>
									</ol>
                                </div>
                                
                            </div>                            
							<div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label"><strong>Experience : </strong></label>
                                    <ol type="1">
									  <li>Created the first and only shortlisted problem from Bangladesh in IMO 2021</li>
									  <li>Developed API endpoints in the Backend using FastAPI and PostgreSQL, Worked on Web 3 using Blockchain and Smart Contracts to build a Decentralized Finance Dapps, Helped developing Python and Javascript Blockchain SDK. Helped develop a Data Pipeline for Quant Analysis. Working on the Backend side of a Next-gen Financial Card Product.</li>
									  <li>I worked as an author of some online international programming competitions at CodeForces</li>
									  <li>I worked as an author of a problem in BdOI 2020 and 2022</li>
									  <li>I worked as an author of some online international programming competitions at CodeChef</li>
									</ol>
								</div>
                                
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body pb-2">
                                <h6 class="mb-4">Contacts</h6>
                                <div class="form-group">
                                    <label class="form-label">Phone : </label>
                                    <input type="text" class="form-control" value=<?php echo $data['phone'] ?> readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email : </label>
                                    <input type="text" class="form-control" value=<?php echo $data['email'] ?> readonly="readonly">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" value=<?php echo $data['twitter'] ?> readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" value=<?php echo $data['facebook'] ?> readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" value=<?php echo $data['linkedin'] ?> readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" value=<?php echo $data['instagram'] ?> readonly="readonly">
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mt-3">
			<?php if(isset($_SESSION['six'])) { ?>
				<button type="button" ><a href="../Employees.php" onclick="fk()">Hire Me</a></button>
			<?php } else if(isset($_SESSION['techGiantmail'])) { $_SESSION['six'] = "ok";
					$_SESSION['Eed'] = $data['eid'];
					$_SESSION['Eemail'] = $data['email'];
			?>
				<button type="button" ><a href="hireme.php">Hire Me</a></button>
			<?php } 
				else { ?>
					<button type="button" ><a href="../Index.php" onclick="fkk()">Hire Me</a></button>
			<?php	}
			?>
        </div>
    </div>
	<script>
		function fk() {
			alert("Employee is already Hired!");
		}
		function fkk() {
			alert("Plz log in as Employer!");
		}
	</script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>