

<html>
<head>
 <title>Login Fail</title>
</head>
<body>
<link rel="stylesheet" href="style1.css">
<form action="login.html" method ="post">
<div class="box">
<center><IMG  src="8.png">
<h2>You Have Entered wrong Name and Password!</h2>
<input type="submit" name="submit" value="Please Try Again!">
<?php  
$name = $_POST['name'];
$nam = $_POST['password'];
echo "hello" . $name;
printf( "hello" ,$nam);
header("location: login.html");
?></form>
<form action="m/m.html" method ="post">
<div class="m">
<input type="submit" name="submit" value="Message">
</body>
</html>