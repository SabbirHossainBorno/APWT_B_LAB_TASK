<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<a href="/login">Back</a> |
    <a href="/logout">Logout</a>
	<h2>Create Account</h2>

	<form method="post">
	<table>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="cpassword"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type="text" name="country"></td>
		</tr>
		<tr>
			<td>Company Name</td>
			<td><input type="text" name="cname"></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="text" name="number"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="Sign Up">
			<input type="button" name="Signin" value="Sign In" onclick="window.location='{{route('login.index')}}'">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>