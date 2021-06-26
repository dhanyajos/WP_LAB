<html>
<body>
	<?php
	echo "STUDENT DETAILS";
	$method=$_SERVER["REQUEST_METHOD"] == "POST";
	$name=$_REQUEST["name"];
	echo"<br>Name :$name";
	$email=$_REQUEST["email"];
	echo"<br>Email ID :$email";
	$gender=$_REQUEST["gender"];
	echo"<br>Gender :$gender";
	$address=$_REQUEST["address"];
	echo"<br>Address :$address";
	$dob=$_REQUEST["dob"];
	echo"<br>Date Of Birth :$dob";
	?>
</body>
</html>