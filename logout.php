<html>
<head>
<title>Sign out</title>
<style><?php include 'styles.css';?></style>
</head>
<body>
<?php 

session_start();

session_unset();
echo '<h2>';
echo 'Thanks for shopping with us';
echo '</h2>';
session_destroy();
?>
</body>
</html>