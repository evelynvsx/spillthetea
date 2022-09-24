<?php
$con = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error(); die();}
else {
    echo "connected to database";
}
$password = 'Cheese';

$bcrypt_password = password_hash($password, PASSWORD_BCRYPT);
echo"<br>Bcrypt Password: "   .$bcrypt_password;

$user_types = 'Cheese';

$verify = password_verify($user_types, $bcrypt_password);
echo "<br>";

if ($verify) {
    echo "Access Granted!";
}
else{
    echo "Incorrect Password";
}

?>