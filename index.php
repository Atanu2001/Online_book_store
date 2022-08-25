<!DOCTYPE html>
<html>
<title>Anonymous:login page</title>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="login.php" method="post">
	<center>
	<img src='logo.gif'>
	<h2>PLEASE LOGIN OR REGISTER</h2>
	<table class="index">		
		<tr>
			<td align="center"><input type='text' name="uname" placeholder='Enter your E-mail' ></td>
		</tr>
		<tr>
			<td align="center"><input type='password' name="pswd"  placeholder='Password'></td>
		</tr>
		<tr>
			<td align="center"><input type='submit' name="login" value="Login"></td>
		</tr>
		<tr>
			<td bgcolor="white"><a href='regis.php'><font color="red" size="5">Not yet Register?Click to register</font></a></td>
		</tr>
	</table>
	<br>
	<br>
</form>
</body>
</html>