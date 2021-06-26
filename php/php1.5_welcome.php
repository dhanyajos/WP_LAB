


<?php
session_start();
$user=$_SESSION['login_user'];
?>
<html>
<body>

<h1 align="center">WELCOME</h1>
<h1 align="center"><?php echo $user; ?></h1>

</body>
</html>
