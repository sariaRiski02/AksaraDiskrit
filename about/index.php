<?php
require "../config/functions.php";
cookieCheck();
if (!isset($_SESSION["signInUser"])) {
    $user_link = "../signin";
    $user_status = "Sign In";
} else {
    $user_link = "../signout";
    $user_status = "Sign Out";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aksara Diskret">
    <title>About | Aksara Diskret</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/text.css">
    <link rel="stylesheet" id="theme-switch">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon/ad-light.svg" media="(prefers-color-scheme: dark)">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon/ad-dark.svg" media="(prefers-color-scheme: light)">
</head>
<body>
    <header>
        <div class="header-wrapper">
            <a href="../" aria-label="Aksara Diskret Logo" title="Aksara Diskret Logo">
                <svg width="147" id="logo" height="24" viewBox="0 0 147 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.4375 24L7.5 0L0 24H14.4375Z" />
                    <path d="M14.4375 24V0L24 12L14.4375 24Z" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.4973 17.5H36.7473L37.7096 14.6307H42.0843L43.0484 17.5H45.2984L41.1961 5.86364H38.5939L34.4973 17.5ZM41.5154 12.9375L39.9405 8.25H39.8495L38.2774 12.9375H41.5154Z" />
                    <path d="M48.797 14.5665V17.5H46.7402V5.86364H48.797V12.2784H48.939L52.0754 8.77273H54.4788L51.0954 12.5399L54.6777 17.5H52.2174L49.5453 13.7643L48.797 14.5665Z" />
                    <path d="M60.8723 11.2841L62.7473 11.0795C62.6071 10.3371 62.2416 9.74811 61.6507 9.3125C61.0636 8.87689 60.2586 8.65909 59.2359 8.65909C58.5389 8.65909 57.9234 8.76894 57.3893 8.98864C56.859 9.20455 56.4442 9.51136 56.145 9.90909C55.8495 10.303 55.7037 10.7689 55.7075 11.3068C55.7037 11.9432 55.9026 12.4697 56.3041 12.8864C56.7056 13.2992 57.3249 13.5928 58.162 13.767L59.6507 14.0795C60.0522 14.1667 60.3476 14.2917 60.537 14.4545C60.7302 14.6174 60.8268 14.8239 60.8268 15.0739C60.8268 15.3693 60.6772 15.6174 60.378 15.8182C60.0825 16.0189 59.6905 16.1193 59.2018 16.1193C58.7283 16.1193 58.3439 16.0189 58.0484 15.8182C57.753 15.6174 57.5598 15.3201 57.4689 14.9261L55.4632 15.1193C55.5882 15.9223 55.9764 16.5492 56.628 17C57.2795 17.447 58.1393 17.6705 59.2075 17.6705C59.9348 17.6705 60.5787 17.553 61.1393 17.3182C61.6999 17.0833 62.1374 16.7576 62.4518 16.3409C62.77 15.9205 62.931 15.4356 62.9348 14.8864C62.931 14.2614 62.7264 13.7557 62.3211 13.3693C61.9196 12.983 61.306 12.7008 60.4802 12.5227L58.9916 12.2045C58.5484 12.1023 58.2302 11.9716 58.037 11.8125C57.8476 11.6534 57.7548 11.447 57.7586 11.1932C57.7548 10.8977 57.8969 10.6572 58.1848 10.4716C58.4764 10.286 58.8363 10.1932 59.2643 10.1932C59.5825 10.1932 59.8514 10.2443 60.0711 10.3466C60.2908 10.4489 60.4651 10.5833 60.5939 10.75C60.7264 10.9167 60.8192 11.0947 60.8723 11.2841Z" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M65.6478 17.3807C66.091 17.5777 66.5891 17.6761 67.1422 17.6761C67.5967 17.6761 67.9925 17.6136 68.3297 17.4886C68.6706 17.3598 68.9528 17.1913 69.1762 16.983C69.4035 16.7708 69.5797 16.5436 69.7047 16.3011H69.7728V17.5H71.7501V11.6591C71.7501 11.0795 71.6441 10.5966 71.4319 10.2102C71.2236 9.82386 70.9471 9.51894 70.6024 9.29545C70.2577 9.06818 69.877 8.9053 69.4603 8.80682C69.0437 8.70833 68.6251 8.65909 68.2047 8.65909C67.5948 8.65909 67.038 8.75 66.5342 8.93182C66.0304 9.10985 65.6043 9.37879 65.2558 9.73864C64.9073 10.0947 64.6573 10.5379 64.5058 11.0682L66.4262 11.3409C66.5285 11.0417 66.7255 10.7822 67.0172 10.5625C67.3126 10.3428 67.7122 10.233 68.216 10.233C68.6933 10.233 69.0588 10.3504 69.3126 10.5852C69.5664 10.8201 69.6933 11.1515 69.6933 11.5795V11.6136C69.6933 11.8106 69.6194 11.9564 69.4717 12.0511C69.3278 12.142 69.0967 12.2102 68.7785 12.2557C68.4603 12.2973 68.0456 12.3447 67.5342 12.3977C67.11 12.4432 66.699 12.517 66.3012 12.6193C65.9073 12.7178 65.5531 12.8636 65.2387 13.0568C64.9244 13.25 64.6762 13.5076 64.4944 13.8295C64.3126 14.1515 64.2217 14.5587 64.2217 15.0511C64.2217 15.6231 64.3486 16.1042 64.6024 16.4943C64.86 16.8845 65.2084 17.1799 65.6478 17.3807ZM68.7501 15.9205C68.4471 16.0833 68.0891 16.1648 67.6762 16.1648C67.2482 16.1648 66.8959 16.0682 66.6194 15.875C66.3429 15.6818 66.2047 15.3958 66.2047 15.017C66.2047 14.7519 66.2747 14.536 66.4149 14.3693C66.555 14.1989 66.7463 14.0663 66.9887 13.9716C67.2312 13.8769 67.5058 13.8087 67.8126 13.767C67.949 13.7481 68.11 13.7254 68.2956 13.6989C68.4812 13.6723 68.6687 13.642 68.8581 13.608C69.0475 13.5739 69.2179 13.5341 69.3694 13.4886C69.5247 13.4432 69.6346 13.3939 69.699 13.3409V14.3693C69.699 14.6913 69.6156 14.9886 69.449 15.2614C69.2861 15.5341 69.0531 15.7538 68.7501 15.9205Z" />
                    <path d="M73.8183 8.77273V17.5H75.8751V12.3693C75.8751 11.9981 75.9603 11.6705 76.1308 11.3864C76.3012 11.1023 76.5342 10.8807 76.8297 10.7216C77.1289 10.5587 77.466 10.4773 77.841 10.4773C78.0153 10.4773 78.1952 10.4905 78.3808 10.517C78.5702 10.5398 78.7084 10.5663 78.7956 10.5966V8.70455C78.7009 8.68561 78.5816 8.67235 78.4376 8.66477C78.2975 8.65341 78.1706 8.64773 78.0569 8.64773C77.5569 8.64773 77.1119 8.78598 76.7217 9.0625C76.3353 9.33523 76.0626 9.72348 75.9035 10.2273H75.8126V8.77273H73.8183Z" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M81.0228 17.3807C81.466 17.5777 81.9641 17.6761 82.5172 17.6761C82.9717 17.6761 83.3675 17.6136 83.7047 17.4886C84.0456 17.3598 84.3278 17.1913 84.5512 16.983C84.7785 16.7708 84.9547 16.5436 85.0797 16.3011H85.1478V17.5H87.1251V11.6591C87.1251 11.0795 87.0191 10.5966 86.8069 10.2102C86.5986 9.82386 86.3221 9.51894 85.9774 9.29545C85.6327 9.06818 85.252 8.9053 84.8353 8.80682C84.4187 8.70833 84.0001 8.65909 83.5797 8.65909C82.9698 8.65909 82.413 8.75 81.9092 8.93182C81.4054 9.10985 80.9793 9.37879 80.6308 9.73864C80.2823 10.0947 80.0323 10.5379 79.8808 11.0682L81.8012 11.3409C81.9035 11.0417 82.1005 10.7822 82.3922 10.5625C82.6876 10.3428 83.0872 10.233 83.591 10.233C84.0683 10.233 84.4338 10.3504 84.6876 10.5852C84.9414 10.8201 85.0683 11.1515 85.0683 11.5795V11.6136C85.0683 11.8106 84.9944 11.9564 84.8467 12.0511C84.7028 12.142 84.4717 12.2102 84.1535 12.2557C83.8353 12.2973 83.4206 12.3447 82.9092 12.3977C82.485 12.4432 82.074 12.517 81.6762 12.6193C81.2823 12.7178 80.9281 12.8636 80.6137 13.0568C80.2994 13.25 80.0512 13.5076 79.8694 13.8295C79.6876 14.1515 79.5967 14.5587 79.5967 15.0511C79.5967 15.6231 79.7236 16.1042 79.9774 16.4943C80.235 16.8845 80.5834 17.1799 81.0228 17.3807ZM84.1251 15.9205C83.8221 16.0833 83.4641 16.1648 83.0512 16.1648C82.6232 16.1648 82.2709 16.0682 81.9944 15.875C81.7179 15.6818 81.5797 15.3958 81.5797 15.017C81.5797 14.7519 81.6497 14.536 81.7899 14.3693C81.93 14.1989 82.1213 14.0663 82.3637 13.9716C82.6062 13.8769 82.8808 13.8087 83.1876 13.767C83.324 13.7481 83.485 13.7254 83.6706 13.6989C83.8562 13.6723 84.0437 13.642 84.2331 13.608C84.4225 13.5739 84.5929 13.5341 84.7444 13.4886C84.8997 13.4432 85.0096 13.3939 85.074 13.3409V14.3693C85.074 14.6913 84.9906 14.9886 84.824 15.2614C84.6611 15.5341 84.4281 15.7538 84.1251 15.9205Z" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M93.253 17.5H97.1961C98.378 17.5 99.3893 17.267 100.23 16.8011C101.075 16.3352 101.721 15.6667 102.168 14.7955C102.618 13.9242 102.844 12.8826 102.844 11.6705C102.844 10.4621 102.62 9.42424 102.173 8.55682C101.726 7.68939 101.086 7.02462 100.253 6.5625C99.4234 6.09659 98.431 5.86364 97.2757 5.86364H93.253V17.5ZM97.0939 15.6761H95.3609V7.6875H97.1564C97.9442 7.6875 98.6033 7.83523 99.1336 8.13068C99.6677 8.42235 100.071 8.86364 100.344 9.45455C100.617 10.0417 100.753 10.7803 100.753 11.6705C100.753 12.5606 100.617 13.303 100.344 13.8977C100.071 14.4886 99.6639 14.9337 99.1223 15.233C98.5806 15.5284 97.9045 15.6761 97.0939 15.6761Z" />
                    <path d="M104.756 8.77273V17.5H106.813V8.77273H104.756Z" />
                    <path d="M104.949 7.21023C105.184 7.42614 105.464 7.53409 105.79 7.53409C106.119 7.53409 106.4 7.42614 106.631 7.21023C106.866 6.99053 106.983 6.72727 106.983 6.42045C106.983 6.10985 106.866 5.84659 106.631 5.63068C106.4 5.41098 106.119 5.30114 105.79 5.30114C105.464 5.30114 105.184 5.41098 104.949 5.63068C104.714 5.84659 104.597 6.10985 104.597 6.42045C104.597 6.72727 104.714 6.99053 104.949 7.21023Z" />
                    <path d="M113.95 11.2841L115.825 11.0795C115.685 10.3371 115.32 9.74811 114.729 9.3125C114.142 8.87689 113.337 8.65909 112.314 8.65909C111.617 8.65909 111.002 8.76894 110.467 8.98864C109.937 9.20455 109.522 9.51136 109.223 9.90909C108.928 10.303 108.782 10.7689 108.786 11.3068C108.782 11.9432 108.981 12.4697 109.382 12.8864C109.784 13.2992 110.403 13.5928 111.24 13.767L112.729 14.0795C113.13 14.1667 113.426 14.2917 113.615 14.4545C113.808 14.6174 113.905 14.8239 113.905 15.0739C113.905 15.3693 113.755 15.6174 113.456 15.8182C113.161 16.0189 112.769 16.1193 112.28 16.1193C111.806 16.1193 111.422 16.0189 111.127 15.8182C110.831 15.6174 110.638 15.3201 110.547 14.9261L108.541 15.1193C108.666 15.9223 109.055 16.5492 109.706 17C110.358 17.447 111.217 17.6705 112.286 17.6705C113.013 17.6705 113.657 17.553 114.217 17.3182C114.778 17.0833 115.216 16.7576 115.53 16.3409C115.848 15.9205 116.009 15.4356 116.013 14.8864C116.009 14.2614 115.805 13.7557 115.399 13.3693C114.998 12.983 114.384 12.7008 113.558 12.5227L112.07 12.2045C111.627 12.1023 111.308 11.9716 111.115 11.8125C110.926 11.6534 110.833 11.447 110.837 11.1932C110.833 10.8977 110.975 10.6572 111.263 10.4716C111.555 10.286 111.914 10.1932 112.342 10.1932C112.661 10.1932 112.93 10.2443 113.149 10.3466C113.369 10.4489 113.543 10.5833 113.672 10.75C113.805 10.9167 113.897 11.0947 113.95 11.2841Z" />
                    <path d="M119.766 14.5665V17.5H117.709V5.86364H119.766V12.2784H119.908L123.044 8.77273H125.448L122.064 12.5399L125.646 17.5H123.186L120.514 13.7643L119.766 14.5665Z" />
                    <path d="M126.818 8.77273V17.5H128.875V12.3693C128.875 11.9981 128.96 11.6705 129.131 11.3864C129.301 11.1023 129.534 10.8807 129.83 10.7216C130.129 10.5587 130.466 10.4773 130.841 10.4773C131.015 10.4773 131.195 10.4905 131.381 10.517C131.57 10.5398 131.708 10.5663 131.796 10.5966V8.70455C131.701 8.68561 131.582 8.67235 131.438 8.66477C131.297 8.65341 131.171 8.64773 131.057 8.64773C130.557 8.64773 130.112 8.78598 129.722 9.0625C129.335 9.33523 129.063 9.72348 128.904 10.2273H128.813V8.77273H126.818Z" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M134.399 17.125C135.036 17.4886 135.791 17.6705 136.666 17.6705C137.344 17.6705 137.947 17.5682 138.473 17.3636C139 17.1553 139.431 16.8636 139.769 16.4886C140.109 16.1098 140.341 15.6667 140.462 15.1591L138.541 14.9432C138.45 15.1894 138.316 15.3958 138.138 15.5625C137.96 15.7292 137.75 15.8561 137.507 15.9432C137.265 16.0265 136.994 16.0682 136.695 16.0682C136.248 16.0682 135.858 15.9735 135.524 15.7841C135.191 15.5909 134.931 15.3144 134.746 14.9545C134.566 14.6032 134.474 14.1846 134.468 13.6989H140.547V13.0682C140.547 12.303 140.441 11.6439 140.229 11.0909C140.017 10.5341 139.725 10.0758 139.354 9.71591C138.986 9.35606 138.562 9.09091 138.081 8.92045C137.604 8.74621 137.096 8.65909 136.558 8.65909C135.725 8.65909 135 8.85038 134.382 9.23295C133.765 9.61174 133.284 10.142 132.939 10.8239C132.598 11.5019 132.428 12.2898 132.428 13.1875C132.428 14.1004 132.598 14.8939 132.939 15.5682C133.28 16.2386 133.767 16.7576 134.399 17.125ZM134.472 12.3125C134.491 11.9706 134.579 11.6543 134.734 11.3636C134.913 11.0341 135.161 10.7689 135.479 10.5682C135.797 10.3636 136.166 10.2614 136.587 10.2614C136.981 10.2614 137.325 10.3504 137.621 10.5284C137.92 10.7064 138.153 10.9508 138.32 11.2614C138.486 11.5682 138.572 11.9186 138.575 12.3125H134.472Z" />
                    <path d="M146.645 10.3636V8.77273H144.923V6.68182H142.867V8.77273H141.628V10.3636H142.867V15.2159C142.863 15.7614 142.98 16.2159 143.219 16.5795C143.461 16.9432 143.789 17.2121 144.202 17.3864C144.615 17.5568 145.079 17.6345 145.594 17.6193C145.886 17.6117 146.132 17.5852 146.333 17.5398C146.537 17.4943 146.694 17.4527 146.804 17.4148L146.458 15.8068C146.401 15.822 146.317 15.839 146.208 15.858C146.101 15.8769 145.984 15.8864 145.855 15.8864C145.685 15.8864 145.529 15.8598 145.389 15.8068C145.249 15.7538 145.136 15.6553 145.048 15.5114C144.965 15.3636 144.923 15.1515 144.923 14.875V10.3636H146.645Z" />
                </svg>
            </a>
            <nav>
                <ul id="nav-list">
                    <li><button type="button" class="theme-icon-btn" onclick="changeTheme()" aria-label="Theme Switcher" title="Theme Switcher"><svg xmlns="http://www.w3.org/2000/svg" id="light" viewBox="0 0 24 24" width="20" height="20">
                                <path d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z"></path>
                            </svg><svg xmlns="http://www.w3.org/2000/svg" id="dark" class="hide" viewBox="0 0 24 24" width="20" height="20">
                                <path d="M11.3807 2.01904C9.91573 3.38786 9 5.33708 9 7.50018C9 11.6423 12.3579 15.0002 16.5 15.0002C18.6631 15.0002 20.6123 14.0844 21.9811 12.6195C21.6613 17.8539 17.3149 22.0002 12 22.0002C6.47715 22.0002 2 17.523 2 12.0002C2 6.68532 6.14629 2.33888 11.3807 2.01904Z"></path>
                            </svg></button></li>
                    <li><a href="../faq/">FAQ</a></li>
                    <li><a href="<?= $user_link ?>" class="rounded-box status-btn"><?= $user_status ?></a></li>
                </ul>
            </nav>
            <button type="button" class="mobileNav-icon-btn" id="nav-icon" onclick="mobileNav()" aria-label="Mobile Navigation Menu">
                <svg xmlns="http://www.w3.org/2000/svg" id="menu-icon" viewBox="0 0 24 24" width="24" height="24">
                    <path d="M18 18V20H6V18H18ZM21 11V13H3V11H21ZM18 4V6H6V4H18Z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" id="close-icon" class="hide" viewBox="0 0 24 24" width="24" height="24">
                    <path d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"></path>
                </svg>
            </button>
        </div>
    </header>
    <div class="app-container">
        <main>
            <h1>About Us</h1>
            <div class="content about">
                <div class="item">
                    <h2>What is Aksara Diskret? 🤔</h2>
                    <p>As the name suggests <b>Aksara</b> which means '<i>letters</i>' and <b>Diskret</b> which means '<i>not related to one another</i>'. From the combination of the two sentences it can be concluded that <b>Aksara Diskret</b> is? Please <b>interpret</b> yourself. That's how this project was made. <b>Note</b> this project is for <b>educational</b> purposes only. While we strive to ensure that all <b>digital assets</b> on our platform are used in compliance with <b>intellectual property</b> rights, we cannot guarantee that all assets are free from <b>infringement</b>. If you come across any digital assets that <b>violate</b> these rights or any other regulations, please <b>let us know</b> and we will take <b>appropriate</b> action.</p><br>
                </div>
                <div class="item">
                    <h2>Project Presentation 🚀</h2>
                    <p>Link : <a href="https://drive.google.com/drive/folders/1MwTR6dBGgnmQBqwb2W4NQu-GCC-7SzQ1?usp=share_link" target="_blank" class="link">Google Drive (Video)</a></p>
                </div>
                <div class="item">
                    <h2>Our Team 🙌</h2>
                    <ul class="team">
                        <li class="rounded-box">
                            <div class="account-menu">
                                <div class="team-profile">
                                    <img class="profile-img" src="../assets/images/default.png" alt="User profile photo">
                                    <div class="user-menu">
                                        <span id="user">Daniel Rompas</span>
                                        <span>20021106052</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="rounded-box">
                            <div class="account-menu">
                                <div class="team-profile">
                                    <img class="profile-img" src="../assets/images/default.png" alt="User profile photo">
                                    <div class="user-menu">
                                        <span id="user">M. Rizky Saria</span>
                                        <span>210211060100</p>
                                    </div>
                                </div>
                        </li>
                        <li class="rounded-box">
                            <div class="account-menu">
                                <div class="team-profile">
                                    <img class="profile-img" src="../assets/images/default.png" alt="User profile photo">
                                    <div class="user-menu">
                                        <span id="user">Rezky Wahyudi M.</span>
                                        <span>210211060165</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <footer>
            <p>©️ 2023 Aksara Diskret. All rights reserved.</p>
            <p>Made with ❤️ from MDC.</p>
        </footer>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>