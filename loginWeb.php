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
                        <h1><b>Welcome Back!</h1></b>
                        <p>Login to your account and continue your adventure.</p>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Enter your password" required>
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
                <li>&copy; 2025 Nostale Gaming, All rights reserved.</li>
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

</body>

</html>