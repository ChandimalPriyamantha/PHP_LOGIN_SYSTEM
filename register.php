<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">

</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.png" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<!-- ======================== Display error message and success message  ================================== -->
							<?php if (isset($_GET['error'])) { ?>

								<div class="alert alert-danger">
									<p><?php echo $_GET['error']; ?></p>
								</div>
							<?php } ?>

							<?php if (isset($_GET['success'])) { ?>

								<div class="alert alert-success">
									<p><?php echo $_GET['success']; ?></p>
								</div>


							<?php } ?>
							<!-- ======================== Display error message and success message  ================================== -->
							<form method="POST" action="php/check-register.php">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="email">E-Mail Address</label>

										<?php if (isset($_GET['email'])) { ?>
											<input id="email" type="email" class="form-control" name="email" value="<?php echo $_GET['email']; ?>">
										<?php } else { ?>

											<input id="email" type="email" class="form-control" name="email">
										<?php } ?>

									</div>
									<div class="form-group col-md-6">
										<label for="inputPassword4">Password</label>
										<input id="password" type="password" class="form-control" name="password"  data-eye>

									</div>
								</div>
								<div class="form-group">
									<?php if (isset($_GET['email'])) { ?>
										<label for="inputAddress">Address</label>
										<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="<?php echo $_GET['address']; ?>">

									<?php } else { ?>
										<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
									<?php } ?>

								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputCity">Name</label>
										<?php if (isset($_GET['email'])) { ?>
										<input type="text" class="form-control" id="inputCity" name="name" value="<?php echo $_GET['name']; ?>">
                                        <?php } else { ?>
											<input type="text" class="form-control" id="inputCity" name="name">
											<?php } ?>
									</div>
									<div class="form-group col-md-6">
										<label for="inputState">Select User Type</label>
										<select id="inputState" class="form-control" name="user_type">
											<option selected value="admin">Admin</option>
											<option value="user">User</option>
										</select>
									</div>

								</div>
								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary">Create Account</button>

								<div class="mt-4 text-center">
									Already have an account? <a href="index.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; Chandimal Priyamantha
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>

</html>