<?php
session_start();

if (!isset($_SESSION["signin"]) && !isset($_SESSION["signinUser"])) {
    header("Location: ../signin");
    exit;
}


require "../config/functions.php";

if (isset($_POST["change_email"])) {
    $warning_email = ChangeEmail($_POST);
}

if (isset($_POST["change_pass"])) {
    $warning_pass = ChangePass($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aksara Diskret">
    <title>Settings | Aksara Diskret</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/mform.css">
    <link rel="stylesheet" href="../css/settings.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon/ad-light.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon/ad-dark.svg" media="(prefers-color-scheme: light)">
</head>

<body>
    <header>
        <a href="../"><img src="../assets/icon/ad-logo.svg" alt="Aksara Diskret Logo"></a>
        <nav>
            <ul id="nav-list">
                <li>
                    <?php if (!isset($_SESSION["signinUser"])) : ?>
                        <a href="../admin">Admin</a>
                    <?php endif; ?>
                </li>
                <li><a href="../faq">FAQ</a></li>
                <li><a href="../about">About</a></li>
                <li id="close-icon" onclick="closeMenu()">
                    <img src="../assets/icon/remixicon-close-line.svg" alt="Close Icon">
                </li>
            </ul>
        </nav>
        <div id="menu-icon" onclick="showMenu()"><img src="../assets/icon/remixicon-menu-5-line.svg" alt="Menu Icon">
        </div>
    </header>
    <div class="app-container">
        <main>
            <div class="setting">

                <a href="../collection/"><img src="../assets/icon/remixicon-arrow-left-line.svg" alt="Back Icon"></a>
                <h1>Settings your account</h1>
            </div>
            <form action="" method="post">
                <h2>Change your email</h2>
                <input type="email" name="new_email" id="new-email" class="rounded-box" placeholder="New Email Address">
                <button type="submit" name="change_email" class="rounded-box primary-btn" onclick="newEmail()">Change Email</button>
                <span class="success">
                    <?php if (isset($warning_email)) : ?>
                        <?= $warning_email ?>
                    <?php endif; ?>

                </span>
                <hr>
                <h2>Change your password</h2>

                <div class="pass-box">
                    <input type="password" name="old-password" class="rounded-box old-password" placeholder="Old Password">
                    <img id="h-old-pass" src="../assets/icon/remixicon-eye-line.svg" alt="Hide Password Icon">
                    <img id="s-old-pass" src="../assets/icon/remixicon-eye-off-line.svg" alt="Show Password Icon">
                </div>
                <div class="pass-box">
                    <input type="password" name="new-password" class="rounded-box new-password" placeholder="New Password">
                    <img id="h-new-pass" src="../assets/icon/remixicon-eye-line.svg" alt="Hide Password Icon">
                    <img id="s-new-pass" src="../assets/icon/remixicon-eye-off-line.svg" alt="Show Password Icon">
                </div>
                <button type="submit" name="change_pass" class="rounded-box primary-btn" onclick="changePassword()">Change Password</button>
                <span class="success">
                    <?php if (isset($warning_pass)) {
                        echo $warning_pass;
                    } ?>
                </span>
                <hr>
            </form>
        </main>
        <footer>
            <p>Copyright ©️ 2023 <b>Aksara Diskret</b>.</p>
            <p>Made with ❤️ by <b>AD</b> Team.</p>
        </footer>
    </div>
    <script src="../js/main.js"></script>
</body>

</html>