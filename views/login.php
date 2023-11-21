<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body class="my-login-page">	
	<div class="container">
		<div class="position-absolute top-0 end-0">
			<img class="image" src="../img/image3.png" alt="logo">
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center align-items-center min-vh-100">
			<div class="col-lg-6 mb-4">
				<div class="card-text">
					<h4 class="card-title fs-1 mb-2">Account Login</h4>
						<p class="card-text fs-5 text-muted">If you already have an account, you can login with your email address and password.</p>
				</div>
					
					<div class="card mt-5">
						<div class="card-body">
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="mb-3">
									<label for="email" class="form-label fs-5 mb-3">Email Address</label>
									<input type="email" class="form-control" id="email" name="email" required autofocus>
									<div class="invalid-feedback">Email is invalid</div>
								</div>

								<div class="mb-3">
									<label for="password" class="form-label fs-5 mb-3 ">Password</label>
									<input type="password" class="form-control" id="password" name="password" required>
									<div class="invalid-feedback">Password is required</div>
								</div>

								<div class="mb-3">
									<div class="form-check">
										<input type="checkbox" class="form-check-input" id="remember">
										<label class="form-check-label" for="remember">Remember Me</label>
									</div>
								</div>

								<div class="mb-3">
									<button type="submit" class="btn btn-success btn-block d-grid col-6 mx-auto w-100">Login</button>
								</div>

								<div class="mb-3 text-center">
									Don't have an account? <a href="register.html" class="text-success">Sign up here</a>
								</div>
							</form>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="d-flex justify-content-start">
					<div class="card-body-image">
						<img src="../img/pana.png" alt="logo">
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
</body>
</html>
