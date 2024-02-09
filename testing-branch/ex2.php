<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<ink href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	  	script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
		<title>example user input</title>

	</head>

	<body>

			<div class="container mt-5 mb-5 d-flex justify-content-center">

				<div class="card w-50 bg-dark text-white">

					<div clas = "card-body">
						
						<form action="#" method="POST">

							<div class="mb-3 mt-3">
								<label for="fname">First name</label>
								<input type="text" class="form-control" id="fname" name="fname" placeholder="First name"> 
							</div>

							<div class="mb-3 mt-3">
								<label for="lname">Last name</label>
								<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name"> 
							</div>

							<div class="mb-3 mt-3">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email" placeholder="email"> 
							</div>

							<div class="d-grid gap-4">
								<button class="btn btn-primary" type="submit">Submit</button>
							</div>
							
						</form>

					</div>

				</div>

			</div>

	</body>

</html>