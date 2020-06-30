<!DOCTYPE html>
<html>
<head>
	<title>form.html</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>
<fieldset>
<form action="welcome.html" method="post">
	<label for="fname">First name:</label><br>
	<input type="text" name="fname" id="fname"><br>
	<label for="lname">Last name:</label><br>
	<input type="text" name="lname" id="lname"><br><br>

<label>Gender:</label><br>
	<input type="radio" id="male" name="gender" value="male">
  	<label for="male">Male</label><br>
  	<input type="radio" id="female" name="gender" value="female">
  	<label for="female">Female</label><br>
  	<input type="radio" id="other" name="gender" value="other">
  	<label for="other">Other</label><br><br>

<label>Nationality:</label><br>
  <select id="nationality" name="nationality">
    <option value="indonesia">indonesia</option>
    <option value="malaysia">malaysia</option>
    <option value="singapura">singapura</option>
  </select><br><br>

<label>Language Spoken:</label><br>
<input type="checkbox" id="bahasa1" name="bahasaindonesia" value="bahasaindonesia">
  	<label for="bahasa1"> Bahasa Indonesia</label><br>
  	<input type="checkbox" id="bahasa" name="english" value="english">
  	<label for="bahasa2"> English</label><br>
  	<input type="checkbox" id="bahasa" name="other" value="other">
  	<label for="bahasa3"> Other</label><br><br><br>

<label for="bio">Bio:</label><br>
<textarea id="bio" name="bio" rows="10" cols="30"></textarea><br><br>
<input type="submit" value="Submit">
</form>
</fieldset>

</body>
</html>