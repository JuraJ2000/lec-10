<!DOCTYPE html>
<html>
<body>

<form method='POST'>
<h2>Data input:</h2>
<label for="name">Name:</label>
<input type="text" name="name"><br>

<label for="surname">Surname:</label>
<input type="text" name="surname"><br>

<label for="surname">Date of birth:</label>
<input type="number" name="birth"><br>

<input type="submit" value="Submit">
</form>

<?php
$username = $_POST['name'];
$usersurname = $_POST['surname'];
$userbirth = $_POST['birth'];
echo "<h3> OUTPUT: $username, $usersurname, $userbirth </h3>";
date_default_timezone_set("Europe/Riga");
echo "<div style=\"text-align:center\">";
echo "© The time is " . date("H:i:s");
?>

</body>
</html>