<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Spill the Tea</title>

    <link href="css/spillthetea.css" rel="stylesheet">
</head>

<body>
    <div class="Location-grid-container">
        <nav>
            <!-- Logo -->
            <p><a href="index.php"><img id="logo" src="images/logo.png"</a></p>

            <!-- Navigation links --->
            <a href="index.php">Home</a>
            <a href="compare.php">Compare</a>
            <a href="add.php">Add</a>
            <a href="locations.php">Locations</a>
        </nav>

        <br><br>

        <h1>Boba Store Locations</h1>
        <!-- Embedded google map -->
        <div class="GoogleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96013.88436649105!2d174.74334913935255!3d-41.234105798413715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38af3c49b1a7e7%3A0x3d6ba29c380b3424!2sGong%20Cha!5e0!3m2!1sen!2snz!4v1662269801812!5m2!1sen!2snz"
                    width="80%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Boba stores information -->
        <div class="Store-Locations">
            <div class="Gongcha-Location">
                <h3>Gongcha</h3>
                <p>57 Manners Street</p>
                <p>336 Lambton Quay</p>
            </div>
            <div class="Noah's-Ark-Location">
                <h3>Noah's Ark</h3>
                <p>180 Lambton Quay</p>
                <p>93 Courtenay Place</p>
                <p>79 Manners Street</p>
            </div>
            <div class="Chatime-Location">
                <h3>Chatime</h3>
                <p>15 Courtenay Place</p>
            </div>
            <div class="HiTea-Location">
                <h3>Hi Tea!</h3>
                <p>16 Lombard Street</p>
            </div>
            <div class="WuCha-Location">
                <h3>Wu Cha</h3>
                <p>62 Dixon Street</p>
            </div>
        </div>
    </div>
</body>