<?php
session_start();

/* Connect to the database */
$dbcon = mysqli_connect("localhost", "salimev", "hugeknot78", "salimev_spillthetea");
if($dbcon == NULL) {
    echo "Could not connect to database";
    exit();
}

$user = trim($_POST['username']);
$pass = trim($_POST['password']);

$login_query = "SELECT Password FROM user WHERE Username = '".$user."'";
$login_result = mysqli_query($dbcon, $login_query);
$login_record = mysqli_fetch_assoc($login_result);

$hash = $login_record['Password'];

$verify = password_verify($pass, $hash);
if($verify) {
    echo "Logged in";
    $_SESSION['logged_in'] = 1;
    header("Refresh:1; url=updatepage.php");
}
else {
    echo "Incorrect username or password";
    header("Refresh:2; url=login.php");
}

?>