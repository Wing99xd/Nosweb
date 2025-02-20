<!DOCTYPE html>
<html>
<head>
    <title>Nostale shop</title>
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
            margin-right: auto;
            font-size: 16px;
            color: white;
        }

        /* Shop layout styles */
        .shop-container {
            display: flex;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
            gap: 1rem;
        }

        /* Sidebar styles */
        .sidebar {
            width: 20%;
            background-color: #29293d;
            padding: 1rem;
            border-radius: 8px;
        }

        .sidebar a {
            display: block;
            padding: 0.5rem 1rem;
            color: #fff;
            text-decoration: none;
            border: 1px solid #444;
            margin-bottom: 0.5rem;
            text-align: center;
            border-radius: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #6c63ff;
            border-color: #6c63ff;
        }

        /* Product grid styles */
        .product-grid {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        /* Product card styles */
        .product-card {
            background-color: #29293d;
            border: 1px solid #444;
            border-radius: 8px;
            padding: 1rem;
            text-align: center;
            transition: 0.3s;
            width: 100%;
            height: 300px; /* 调整高度 */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .product-card img {
            width: auto;
            max-height: 150px;
            margin: 0 auto 1rem auto;
            display: block;
        }

        .product-card h3 {
            font-size: 1.2rem;
            margin: 0.5rem 0;
            color: white;
            word-wrap: break-word; /* 允许换行 */
        }

        .product-card p {
            font-size: 1rem;
            color: #aaa;
        }

        .product-card .price {
            font-size: 1.1rem;
            color: #fff;
            margin: 0.5rem 0;
        }

        .product-card button {
            background-color: #6c63ff;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        .product-card button:hover {
            background-color: #524abd;
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
                    <li class="username-display" id="usernameDisplay"></li>
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

        <!-- Shop Content -->
        <div class="shop-container">
            <!-- Sidebar -->
            <div class="sidebar">
            <a href="shopWeb.php">General</a>
            <a href="WingshopWeb.php">Wings</a>
            <a href="MateshopWeb.php">Mate</a>
            <a href="PartnershopWeb.php">Partner</a>
            <a href="FairyshopWeb.php">Fairy</a>
            <a href="SpecialshopWeb.php">Special Item</a>
            <a href="VehiclesshopWeb.php">Vehicles</a>
            <a href="SkinshopWeb.php">Skins</a>
            </div>

            <!-- Product Grid -->
            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <img src="shopimages/5797.webp" alt="Inventory Expansion">
                    <b>Inventory Expansion</b>
                    <p>Price: 300 Coins</p>
                    <button>Buy</button>
                </div>
                <!-- Product 2 -->
                <div class="product-card">
                    <img src="shopimages/498.webp" alt="Auto Bet Item">
                    <b>Auto Bet Item</b>
                    <p>Price: 1000 Coins</p>
                    <button>Buy</button>
                </div>
                <!-- Product 3 -->
                <div class="product-card">
                    <img src="shopimages/2805.png" alt="Champion Blessing Amulet">
                    <b>Champion Blessing Amulet</b>
                    <p>Price: 50 Coins</p>
                    <button>Buy</button>
                </div>
                <!-- Product 4 -->
                <div class="product-card">
                    <img src="shopimages/4278.png" alt="Premium Rune of Fortune Scroll">
                    <b>Premium Rune of Fortune Scroll</b>
                    <p>Price: 10 Coins</p>
                    <button>Buy</button>
                </div>
                
            </div>
        </div>

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
    <script>
        // 获取用户名并显示
        $(document).ready(function () {
            const urlParams = new URLSearchParams(window.location.search);
            const username = urlParams.get('username') || sessionStorage.getItem('username');

            if (username) {
                sessionStorage.setItem('username', username);
                $('#usernameDisplay').text(`Welcome, ${username}`);
            } else {
                $('#usernameDisplay').text('Welcome, Guest');
            }
        });
    </script>


</body>
</html>