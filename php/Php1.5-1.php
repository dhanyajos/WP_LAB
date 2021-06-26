

<?php
        session_start();
?>
<html>
<head>
<title>Login Form</title>
</head>
<body>
<h1 align=center>Log in </h1>
<center>
<form method="POST" action="php1.5-2.php">
<table>
<tr>
        <td>User Name </td><td><input type="text" name="usr"></td>
</tr>
<tr>
        <td>Passward </td><td><input type="password" name="pswd"></td>
<tr>
<tr>
        <td colspan="2" align="center"><input type="Submit" name="submit" value="Log in"></td>
<tr>
</table>
</form>
</center>
<a href="php1.5_login.php">Set User name & Passward</a>
</body>
</html>

