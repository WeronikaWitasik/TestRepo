<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
    <nav>
        <div class="header-container">

            <div id="header-container-left">
                <a href="index.php" id="home">Home</a>
            </div>

            <div id="header-container-right">
                <div class="nav-login">
                    <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '                    <form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name="submit">Logout</button>
                    </form>';
                        } else {
                            echo '<form action="includes/login.inc.php" method="POST">
                        <input type="text" name="uid" placeholder="Username/e-mail">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">Login</button>
                        <span>or</span>
                        <button type="submit" name="submit"><a href="signup.php" id="signup">Signup</a></button>
                        </form>';
                        }
                    ?>
                </div>
            </div>

        </div>
    </nav>
</header>
<hr id="home-page">
