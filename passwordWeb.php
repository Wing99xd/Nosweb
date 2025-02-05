<!DOCTYPE html>
<html>

<head>
	<title>Forgot Password - Nostale</title>
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

		.centered {
			text-align: center;
			margin: 20px 0;
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
                <h2>Forgot Password</h2>
            </header>
            <section class="wrapper style5">
                <div class="inner">
                    <div id="main">
                        <h1><b>Password Recovery</b></h1>
                        <p>Enter your registered email address to reset your password.</p>
                        <form>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                            </div>
							<p></p>
							<button type="submit" class="button primary">Send Email</button><p></p>
                        </form>
                        <div class="signup-link centered">
                            <a href="loginWeb.php">Back to Login</a>
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