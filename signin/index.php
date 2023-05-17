<?php

session_start();
require '../config/functions.php';

if (isset($_COOKIE['signin']) && isset($_COOKIE['secret'])) {
    $signin = $_COOKIE['signin'];
    $secret = $_COOKIE['secret'];

    $result = mysqli_query($db, "SELECT email FROM admin WHERE
    id = '$signin'");
    $row = mysqli_fetch_assoc($result);

    if ($secret === hash('sha512', $row['email'])) {
        $_SESSION["signin"] = true;
    }
}

if (isset($_SESSION["signin"])) {
    header("Location: ../collection");
    exit;
}

if (isset($_POST["signin"])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM admin WHERE
    email = '$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row["password"])) {
            $_SESSION["signin"] = true;

            if (isset($_POST['remember-me'])) {
                setcookie('signin', $row['id'], time() + 60, '/');
                setcookie('secret', hash('sha512', $row['email']), time() + 60, '/');
            }

            header("Location: ../collection");
            exit;
        }
    }
    $wrong = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aksara Diskret">
    <title>Sign In | Aksara Diskret</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/mform.css">
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
            <h1>Sign In to your account</h1>
            <form method="post">
                <input type="email" name="email" class="rounded-box" placeholder="Email Address" required>
                <div class="pass-box">
                    <input type="password" name="password" class="rounded-box default-password" placeholder="Password" required>
                    <img id="h-default-pass" src="../assets/icon/remixicon-eye-line.svg" alt="Hide Password Icon">
                    <img id="s-default-pass" src="../assets/icon/remixicon-eye-off-line.svg" alt="Show Password Icon">
                </div>
                <div class="check-box">
                    <input type="checkbox" name="remember-me" id="remember-me">
                    <label for="remember-me">Remember Me</label>
                </div>
                <button type="submit" name="signin" class="rounded-box primary-btn">Sign In</button>
                <?php if (isset($wrong)) : ?>
                    <span class=" failed">Email or password is invalid!</span>
                <?php endif; ?>
                <p>Doesn't have an account? <a href="../signup" class="link">Sign up</a></p>
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