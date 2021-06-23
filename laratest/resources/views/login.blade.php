<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="POST">
    @csrf
    <table>
        <tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td>
                <input type="submit" name="Submit" value="Login">
                
                <input type="button" name="Signup" value="Sign Up" onclick="window.location='{{route('signup.index')}}'">
                
            </td>
            
		</tr>

        </table>

    </form>
@foreach ( $errors->all() as $er)
    <p>{{ $er }}</p><br>
@endforeach
<p>{{ session("err") }}</p>
</body>
</html>
