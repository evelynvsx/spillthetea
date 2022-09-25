<!DOCTYPE html>
<html lang="en">
<!-- Head-->
<head>
    <title>Spill the Tea</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="css/spillthetea.css">
    <!-- Javascript Link -->
    <script type="text/javascript" src="javascript/spillthetea.js"></script>
</head>

<body>

<!-- Navigation bar start -->
<nav>
    <!-- Logo -->
    <div id="logo">
        <p><a href="index.php"><img src="images/logo.png" height="100px"></a></p>
    </div>

    <!-- Navigation links --->
    <a href="index.php" class="active">Home</a>
    <a href="menu.php">Menu</a>
    <a href="updatepage.php">Update</a>
    <a href="contact.php">Contact</a>

    <!-- Login and logout links -->
    <a href="login.php">Login</a></p>
    <a href="logout.php">Logout</a></p>
</nav>
<!-- Navigation bar end -->

<br> <!-- Insert a break so that there's a space between the navigation bar and the body -->

<!-- Request Section -->
<div class="request-icecream">
    <h1>Feedback</h1>
</div>
<!-- Required boxes -->
<!-- Request form -->
<div class="required-boxes">
    <form name="myform" method="post" action="contact.php" onsubmit="return validatecontact()">
        Name: <input type="text" name="name"><br/>
        Email Address: <input type="email" name="email"><br/>
        Feedback: <input type="text" name="Message"><br/>
        <!-- Submit button -->
        <input type="button" value="Submit" name="Submit">
    </form>
</div>

<br><br><br><br><br><br> <!-- Insert break between request and feedback form -->

<!-- Footer -->
<footer id="footer">
    <br>
    <!-- Social Media Icons -->
    <ul id="footericons">
        <li><a href="https://www.instagram.com/evelynvsx/?hl=en"><img src="image/instagram-icon.png" alt="Instagram Icon" width="20px"></a></li>
        <li><a href="https://www.facebook.com/evelyn.veronica.503"><img src="image/facebook-icon.png" alt="Facebook Icon" width="22px"></a></li>
    </ul>
    <p class="center">©2021 Scoopy Du</p>
</footer>

</body>
</html>