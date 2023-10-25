<!DOCTYPE html>
<html lang="sk">

<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php include 'include/link.php'; ?>
</head>

<body>
	<?php include 'include/nav.php'; ?>
	<div class="content">
		<div class="div-log">
			<div class="p-3 m-0 border-0 bd-example m-0 border-0">
				<form>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
						<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" />
					</div>
					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" />
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>

	<?php include 'include/footer.php'; ?>
</body>

</html>