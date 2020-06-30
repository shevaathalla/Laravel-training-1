<!DOCTYPE html>
<html>
<head>
	<title>Form Daftar SanberCode</title>
</head>
<body>
	<!-- HEADING -->
	<h1>BUAT AKUN BARU !</h1>
	<h3>Daftar Disini</h3>
	<!-- FORM -->
	<div>
		<form action="/welcome" method="POST">
			@csrf
			<label for="first_name">First Name :</label><br>
			<input type="text" name="first_name"><br><br>

			<label for="last_name">Last Name :</label><br>
			<input type="text" name="last_name"><br><br>

			<label for="gender">Gender :</label><br>
			<input type="radio" name="gender" value="0">Laki - Laki<br>
			<input type="radio" name="gender" value="1">Perempuan<br>
			<input type="radio" name="gender" value="2">Other<br><br>

			<label for="nationality"> Nationality :</label><br>
			<select name="nationality">
				<option value="0">INDONESIA</option>
				<option value="1">INDIA</option>
				<option value="2">ZIMBABWE</option>
				<option value="3">ASGARD</option>
			</select><br><br>

			<label for="language">Language Spoken</label><br>
			<input type="checkbox" name="language" value="0">Bahasa Indonesia<br>
			<input type="checkbox" name="language" value="1">English<br>
			<input type="checkbox" name="language" value="2">Zimbabwe<br>
			<input type="checkbox" name="language" value="3">Other<br><br>

			<label for="bio">Bio :</label><br>
			<textarea name="bio" rows="8" cols="50"></textarea><br><br>

			<input type="submit" name="signup" value="Sign Up">
		</form>
	
	</div>
</body>
</html>