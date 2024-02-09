<?php
$fNameError = "";

if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(empty($_POST['fname']))
	{
		$fNameError = "First name is required.";
	}

	else
	{
		$fName = $_POST['fname'];
		if(!preg_match('/^[a-zA-Z]{3,}$/', $fName))
		{
			$fNameError = "Make sure your first name is at least 3 letters and only has letters (no spaces allowed).";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<title></title>
	<style type="text/css">
		.error {color: #fa0202}
	</style>
</head>
<body>

<div class="container mt-3">
	<div class="card">
		<div class="card-body">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
			<div class="mb-3 mt-3">
				<label for="fname">First Name</label>
				<input type="text" name="fname" class="form-control" id="fname" placeholder="first name">
				<span class="error"><?php echo $fNameError ?></span>
			</div>

			<div class="mb-3 mt-3">
				<label for="lname">Last Name</label>
				<input type="text" name="lname" class="form-control" id="lname" placeholder="last name">
			</div>

			<div class="mb-3 mt-3">
				<label for="lname">Email</label>
				<input type="text" name="email" class="form-control" id="email" placeholder="email">
			</div>

			<div class="mb-3 mt-3">
				<label for="Select">Class</label>
				<select class="form-control" name="course">
					<option>Select...</option>
					<option>CWEB</option>
					<option>CNTS</option>
					<option>CLDE</option>
					<option>CYBR</option>
				</select>
			</div>

			<div class="d-grid gap-4">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		</div>
	</div>
</div>

</body>
</html>