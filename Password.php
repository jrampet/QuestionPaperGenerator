<!DOCTYPE html>
<html>
<body>
<?php
$str = "Jeyaram";
$hashedPassword =  password_hash($str,PASSWORD_DEFAULT);
echo $hashedPassword;
?>
</body>
</html>
