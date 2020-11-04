<!DOCTYPE html>

<html lang="en">

	<head>

	  	<title>Bootstrap Example</title>
	  	<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	</head>
	
	<body>

		<div class="container">

			<div class="py-3 text-center">

				<img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">

			</div>

			<div class="row">

				<div class="col-md-4 order-md-2 mb-4">
					
					<!--  -->

				</div>

				<div class="col-md-10 order-md-2 mb-2">
					
					<h4 class="mb-3">Billing address</h4>

					<form class="needs-validation" novalidate>

						<div class="mb-3">

							<label for="address">Address</label>
							<input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
							<div class="invalid-feedback">
								Please enter your shipping address.
							</div>

						</div>

						<div class="mb-3">

							<label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
							<input type="text" class="form-control" id="address2" placeholder="Apartment or suite">

						</div>

						<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

					</form>

				</div>

			</div>

			<footer class="my-5 pt-5 text-muted text-center text-small">

				<p class="mb-1">&copy; 2017- Company Name</p>
				
				<ul class="list-inline">
					<li class="list-inline-item"><a href="#">Privacy</a></li>
					<li class="list-inline-item"><a href="#">Terms</a></li>
					<li class="list-inline-item"><a href="#">Support</a></li>
				</ul>

			</footer>

		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</body>

</html>
