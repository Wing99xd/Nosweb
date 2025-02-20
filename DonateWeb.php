<!DOCTYPE html>
<html>
<head>
    <title>Nostale</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>
        .button {
            color: white;
            text-align: center;
        }

        .button.primary {
            background-color: #007BFF;
        }

        .button.primary:hover {
            background-color: #0056b3;
        }

        /* Username display styles */
        .username-display {
            margin-right: auto; /* Push menu to the right */
            font-size: 16px;
            color: white;
        }
    </style>
</head>
<body class="landing is-preload">

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="indexWeb.php">Nostale</a></h1>
            <nav id="nav">
                <ul>
                    <li class="username-display" id="usernameDisplay"></li> <!-- 动态显示用户名 -->
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="loginedWeb.php">Home</a></li>
                                <li><a href="downloadsWeb.php">Download</a></li>
                                <li><a href="shopWeb.php">Shop</a></li>
                                <li><a href="DonateWeb.php">Donate</a></li>
                                <li><a href="shoppingcartWeb.php">shopping cart</a></li>
                                <li><a href="logout.php" method = "POST">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>


        <!-- Footer -->
        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; 2025 nostale Gaming, All rights reserved.</li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        // 获取用户名并显示
        $(document).ready(function () {
            // 从 URL 参数或 sessionStorage 获取用户名
            const urlParams = new URLSearchParams(window.location.search);
            const username = urlParams.get('username') || sessionStorage.getItem('username');

            if (username) {
                // 存储用户名到 sessionStorage
                sessionStorage.setItem('username', username);

                // 显示用户名在页面上
                $('#usernameDisplay').text(`Welcome, ${username}`);
            } else {
                $('#usernameDisplay').text('Welcome, Guest');
            }
        });
    </script>

</body>
</html>