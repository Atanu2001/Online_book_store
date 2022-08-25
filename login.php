<!DOCTYPE html>
<html>
<title>
		Anonymous:Book Store		
</title>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
session_start();
include('db_connect.php');
$result=mysqli_query($conns,"select * from member_details WHERE e_mail='$_POST[uname]' AND password='$_POST[pswd]'");
if (mysqli_num_rows($result) > 0) 
{
            $row = mysqli_fetch_array($result);
            if ($row['e_mail'] === $_POST['uname'] && $row['password'] === $_POST['pswd']) 
            {   
                $_SESSION['user_name'] = $row['e_mail'];
                header('Location:home.php');
            }
        else
        {
            
                exit();
        }       
}
else
{
	echo '<script>alert("Invalid username or password")</script>';
	
}
mysqli_close($conns);
?>
<button onclick="history.back()">Go Back</button>
</body>
</html>