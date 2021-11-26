<!DOCTYPE HTML>
<html>
<body>
<h1> Hello World </h1>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["name"])){
		$nameErr = "Name is required";
	}else{
		$name = test_input($_POST["name"]);
	}
	if(empty($_POST["email"])){
		$emailErr = "Email is required";
	}else{
		$email = test_input($_POST["email"]);
	}
	if(empty($_POST["website"])){
		$website = "";
	}else{
		$website = test_input($_POST["website"]);
	}
	if(empty($_POST["comment"])){
		$comment = "";
	}else{
		$comment = test_input($_POST["comment"]);
	}
	if(empty($_POST["gender"])){
		$genderErr = "Gender is required";
	}else{
		$gender = test_input($_POST["gender"]);
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
Website: <input type="text" name="website"><br>
Comment: <textarea name="comment" rows="5" cold="40"></textarea><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<input type="submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>

</body>
</html>
