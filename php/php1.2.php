<html>
<body>
	<?php
	$f=1;
	$num=$_POST["number"];
	for($i=$num;$i>0;$i--)
	$f=$f+$i;
	echo "Factorial of $num is &f";
	?>
</body>
</html>