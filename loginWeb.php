<!DOCTYPE html>
<html>

<head>
    <title>Nostale</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
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

        /* Popup styles */
        .popup {
            display: none;
            position: fixed;
            width: 400px;
            height: 200px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: white;
            border: 1px solid #ccc;
            z-index: 1000;
            color: black;
            text-align: center;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .overlay {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .close-button {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            margin-top: 10px;
            display: inline-block;
            width: 100%;
            text-align: center;
            font-size: 16px;
        }

        .close-button:hover {
            background-color: #333;
        }
    </style>
</head>

<body class="landing is-preload">

    <div id="page-wrapper">
        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="indexWeb.php">Nostale</a></h1>
            <nav id="nav">
                <ul>
                    <li class="special">
                        <a href="#menu" class="menuToggle"><span>Menu</span></a>
                        <div id="menu">
                            <ul>
                                <li><a href="indexWeb.php">Home</a></li>
                                <li><a href="downloadWeb.php">Download</a></li>
                                <li><a href="signupWeb.php">Sign Up</a></li>
                                <li><a href="loginWeb.php">Login</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <article id="main">
            <header>
                <h2>Login</h2>
            </header>
            <section class="wrapper style5">
                <div class="inner">
                    <div id="main">
                        <h1><b>Welcome Back!</b></h1>
                        <p>Login to your account and continue your adventure.</p>
                        <form id="loginForm">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
                            </div>
                            <button type="submit" class="button">Login</button>
                            <p></p>
                            <a href="passwordWeb.php" class="forgot-password">Forgot your password?</a>
                        </form>
                        <div class="signup-link">
                            Don't have an account? <a href="signupWeb.php">Sign up here.</a>
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <footer id="footer">
            <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; 2025 Nostale Gaming, All rights reserved.</li>
            </ul>
        </footer>

        <div class="overlay" id="overlay"></div>
        <div class="popup" id="popup">
            <p id="popupMessage"></p>
            <button class="close-button" onclick="closePopup()">Close</button>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#loginForm').on('submit', function (event) {
                event.preventDefault();

                $.ajax({
                    url: 'login.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        const [status, message, username] = response.split('|'); // PHP now sends "status|message|username"
                        $('#popupMessage').html(message);
                        $('#overlay').show();
                        $('#popup').show();

                        // Store username in sessionStorage if login is successful
                        if (status === 'success' && username) {
                            sessionStorage.setItem('username', username.trim());
                        }
                    }
                });
            });
        });

        function closePopup() {
            const username = sessionStorage.getItem('username');
            if (username) {
                window.location.href = `loginedWeb.php?username=${username}`; // Redirect with username
            } else {
                $('#overlay').hide();
                $('#popup').hide();
            }
        }
    </script>

</body>

</html>