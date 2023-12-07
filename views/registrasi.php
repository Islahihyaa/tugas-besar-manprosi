<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body class="registration-page">


	<div class="container">
		<div class="position-absolute top-0 end-0">
			<img class="image" src="../img/image 3.png" alt="logo">
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-6 mb-4">
                <div class="d-flex justify-content-start">
                    <div class="card-body-image">
                        <img src="../img/amico.png" alt="logo">
                    </div>
                </div>
            </div>

			<div class="col-lg-6">

				<div class="card-text">
					<h4 class="card-title fs-1 mb-2">Account Register</h4>
				</div>
			
					<div class="card mt-5">

						<div class="card-body">
							<?php
								if(isset($_SESSION['message'])){ ?>
									<div class="alert alert-danger" role="alert">
										<?= $_SESSION['message'] ?>
									</div>
								<?php unset($_SESSION['message']);} ?>
							
							<form method="POST" action="../config/auth/registerController.php" >

								<div class="mb-3">
									<label for="fullname" class="form-label fs-5 mb-3">Full Name</label>
									<input type="text" class="form-control" id="nama" name="nama" required>
								</div>

								<div class="mb-3">
									<label for="email" class="form-label fs-5 mb-3">Email Address</label>
									<input type="email" class="form-control" id="email" name="email" required>
								</div>

                                <div class="mb-3">
                                    <label for="dob" class="form-label fs-5 mb-3">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>

								<div class="mb-3">
                                    <label for="nim" class="form-label fs-5 mb-3">NIM</label>
                                    <input type="number" class="form-control" id="nim" name="nim" required>
                                </div>

								<div class="mb-3">
									<label for="password" class="form-label fs-5 mb-3">Password</label>
									<input type="password" class="form-control" id="password" name="password" required>
								</div>
                        
								<div class="mb-3">
									<button type="submit" class="btn btn-success btn-block d-grid col-6 mx-auto w-100" name="submit">Continue</button>
								</div>

							</form>
							<div class="mt-3 text-center">Already have account? <a href="login.php" class="text-success">Login</a></div>
					</div>
				</div>
			</div>


		</div>
	</div>
</body>
</html>
