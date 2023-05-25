<?php

session_start();
require "../config/functions.php";

if (!isset($_SESSION["signin"]) && !isset($_SESSION["signinUser"]) && !isset($_COOKIE["secret"])) {
    header("Location: ../signin");
    exit;
}

// retrieve the username with these conditions when the browser is closed then opened again

if (isset($_COOKIE["secret"])) {


    $signin = $_COOKIE["signin"];
    $data = mysqli_query($db, "SELECT * FROM admin WHERE id = $signin");
    if (mysqli_affected_rows($db) === 0) {
        $hasil = mysqli_query($db, "SELECT CONCAT(first_name, ' ' ,last_name) AS USERNAME FROM users WHERE id = $signin");
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["USERNAME"] = $row["USERNAME"];
    }
}

$result = mysqli_query($db, "SELECT * FROM books");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aksara Diskret">
    <title>Books Collection | Aksara Diskret</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/collection.css">
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
                <?php if (isset($_SESSION["signin"])) : ?>
                    <li>
                        <a href="../admin">Admin</a>
                    </li>
                <?php endif; ?>
                <li><a href="../faq">FAQ</a></li>
                <li><a href="../about">About</a></li>
            </ul>
        </nav>
        <div id="nav-icon" onclick="mobileNav()">
            <img id="menu-icon" src="../assets/icon/remixicon-menu-5-line.svg" alt="Menu Icon">
            <img id="close-icon" src="../assets/icon/remixicon-close-line.svg" alt="Close Icon">
        </div>
    </header>
    <div class="app-container">
        <main>
            <div class="account">
                <div class="data">
                    <p>Welcome,</p>
                    <div class="account-menu">
                        <?php if (isset($_SESSION["USERNAME"])) : ?>
                            <span id="user">
                                <?= $_SESSION["USERNAME"] ?>
                            </span>
                        <?php else : ?>
                            <span id="user">ADMIN</span>
                        <?php endif; ?>
                        <a href="../settings"><img src="../assets/icon/remixicon-settings-3-line.svg" alt="Settings Icon"></a>
                    </div>
                </div>
                <a href="../signout" class="rounded-box btn primary-btn">Sign Out</a>
            </div>
            <hr>
            <h1>Books Collection</h1>
            <div class="books-content">
                <?php while ($books = mysqli_fetch_assoc($result)) : ?>
                    <a href="<?= "../assets/books/" . $books["book"] ?>" class="rounded-box books-item" download>
                        <div class="book">
                            <img src="<?= "../assets/image/" . $books["cover"] ?>" alt="Book Cover">
                            <div class="books-info">
                                <h2><?= $books["title"] ?></h2>
                                <p><?= $books["author"] ?></p>
                            </div>
                        </div>
                        <div class="isbn"><b>ISBN</b><br><?= $books["isbn"] ?></div>
                    </a>
                <?php endwhile; ?>
            </div>
        </main>
        <footer>
            <p>Copyright ©️ 2023 <b>Aksara Diskret</b>.</p>
            <p>Made with ❤️ by <b>AD</b> Team.</p>
        </footer>
    </div>
    <script src="../js/main.js"></script>
</body>

</html>