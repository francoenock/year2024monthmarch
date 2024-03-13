<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User registration in php</title>
</head>
<body>
	<div>
		<form action="registration.php" method="post"> 

		<div class="container">
			<h1>Registration</h1>
			<p>Fill up the form with the correct Values</p>
			<label for="firstname">First Name</label>
			<input type="text" name="firstname" required>

			<label for="lastname">Last Name</label>
			<input type="text" name="lastname" required>

			<label for="email">email address</label>
			<input type="email" name="email" required>

			<label for="phonenumber">Phone Number</label>
			<input type="text" name="phonenumber" required>

			<label for="password">Password</label>
			<input type="password" name="password" required>

			<input type="submit" name="create" value="Sign Up">

			
		</div>			

		</form>
		

	</div>

</body>
</html>