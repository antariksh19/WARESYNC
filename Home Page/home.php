<?php
$dbc = mysqli_connect('localhost', 'root', '', 'warehouse_db');

if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['search-term'])) {
    $searchTerm = trim($_POST['search-term']);
    $searchTermLower = strtolower($searchTerm); // Convert to lowercase for case-insensitive comparison
    if($searchTerm != ""){
        $pageCategories = [
            'clothes and accessories' => '../Clothes And Accessories/clothes.php',
            'furnitures and homedecor' => '../Furnitures And Home Decor/furnitures.php',
            'electronics' => '../Electronics/electronics.php',
            'health and grooming' => '../Health And Grooming/health.php',
            'groceries' => '../Groceries/groceries.php',
            'toiletries' => '../Toiletries/toiletries.php',
            'books' => '../Books/books.php',
            'sports gear' => '../Sports Gear/sports.php',
            'miscellaneous' => '../Miscellaneous/miscellaneous.php'
        ];

        // Check if the search term is contained within any category name
        foreach ($pageCategories as $category => $page) {
            if (strpos(strtolower($category), $searchTermLower) !== false) {
                header("Location: $page");
                exit();
            }
        }

        // If not found in categories, proceed with database search
        $searchTermEscaped = mysqli_real_escape_string($dbc, $searchTerm);
        
        $tablePages = [
            'clothes_and_accessories' => '../Clothes And Accessories/clothes.php',
            'furnitures_and_homedecor' => '../Furnitures And Home Decor/furnitures.php',
            'electronics' => '../Electronics/electronics.php',
            'health_and_grooming' => '../Health And Grooming/health.php',
            'groceries' => '../Groceries/groceries.php',
            'toiletries' => '../Toiletries/toiletries.php',
            'books' => '../Books/books.php',
            'sports_gear' => '../Sports Gear/sports.php',
            'miscellaneous' => '../Miscellaneous/miscellaneous.php'
        ];

        if($searchTermEscaped != ""){
            foreach ($tablePages as $table => $page) {
                $query = "SELECT * FROM `$table` WHERE type LIKE '%$searchTermEscaped%'";
                $result = mysqli_query($dbc, $query);
                
                if ($result && mysqli_num_rows($result) > 0) {
                    mysqli_close($dbc);
                    header("Location: $page");
                    exit();
                }
            }
        }

        mysqli_close($dbc);
        echo "<script>
            alert('No results found for \"$searchTerm\"');
            window.location.href = '../Home Page/home.php';
        </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WARESYNC Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./home.css">

    <script>
        function empty1(){
            let x = document.getElementById("searcher").value;
            if(x == ""){
                document.getElementById("searcher").placeholder = "Type something before searching...";
                document.getElementById("emp").disabled = true;
            }
            else{
                
                document.getElementById("emp").disabled = false;
            }
        }
        function empty(){
            let x = document.getElementById("searcher").value;
            if(x == ""){
                document.getElementById("emp").disabled = true;
            }
            else{
                document.getElementById("emp").disabled = false;
            }
        }
    </script>
</head>
<body onload="empty();">
<div class="upper">
    <div id="preload-screen" class="preload-screen">
        <div class="preload-text">Welcome to WARESYNC</div>
    </div>

    <header class="header">
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
        <div class="profile-container" onclick="toggleDropdown()">
           <img class="profile-icon" src="./images/profile.png" />
            <div class="dropdown" id="profileDropdown">
                <ul>
                    <li><a href="../logout.php">Sign Out</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <ul class="nav">
                <li class="nav_item"><a href="./home.php#stock-here" class="nav_link">Stock</a></li>
                <li class="nav_item"><a href="./home.php#order-here" class="nav_link">Orders</a></li>
                <li class="nav_item"><a href="./home.php#shipping" class="nav_link">Shipping</a></li>
                <li class="nav_item"><a href="./home.php#footer" class="nav_link">Connect</a></li>
            </ul>
        </div>
    </header>
    <nav id="menu" class="hidden">
        <span class="close" onclick="toggleMenu()">&times;</span>
        <ul>
            <li class="current-page"><a href="./home.php" class="active">Home</a></li>
            <li><a href="../Clothes And Accessories/clothes.php">
                Clothes And Accessories
            </a> </li>           
            <li><a href="../Furnitures And Home Decor/furnitures.php">Furnitures And Home Decor</a></li>
            <li><a href="../Electronics/electronics.php">Electronics</a></li>
            <li><a href="../Health And Grooming/health.php">Health And Grooming</a></li>
            <li><a href="../Groceries/groceries.php">Groceries</a></li>
            <li><a href="../Toiletries/toiletries.php">Toiletries</a></li>
            <li><a href="../Books/books.php">Books</a></li>
            <li><a href="../Sports Gear/sports.php">Sports Gear</a></li>
            <li><a href="../Miscellaneous/miscellaneous.php">Miscellaneous</a></li>
        </ul>
    </nav>
    
    <div class="main">
        <h2 class="WARESYNC">WARESYNC</h2>
        <form id="search-bar" action="" method="POST">
            <div class="search-box">
            <input id="searcher" type="text" name="search-term" placeholder="Search..." oninput="empty1();">
                <button id="emp" type="submit" onmouseover="empty1();">
                    <img src="./images/search-button.png" alt="search">
                </button>
            </div>
        <form>
    </div>
</div>

<div id="shipping">
<div class="dashboard-container">
    <div class="dash-header">
        <h2>Shipping</h2>
    </div>
    <div>
        <div class="stat-box">Total Shipments: 172000</div>
        <div class="stat-box">Pending Packages: 42000</div>
        <div class="stat-box">Delivery Shipments: 16000</div>
    </div>
    <div class="chart-container">
        
    </div>
    <div class="shipment-list">
        <h3>Shipments Activities</h3>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Category</th>
                <th>Company</th>
                <th>Arrival Time</th>
                <th>Route</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>#172989-72-727bjk</td>
                <td>Electronics</td>
                <td>Extron Co</td>
                <td>24 Dec 2024</td>
                <td>London</td>
                <td>$5,872.90</td>
                <td>Delivered</td>
            </tr>
            <tr>
                <td>#250345-72-727bjk</td>
                <td>Clothes And Accessories</td>
                <td>Calvin Klein</td>
                <td>31 Jan 2025</td>
                <td>Kolkata</td>
                <td>$99.99</td>
                <td>Delivered</td>
            </tr>
        </table>
    </div>
    <div id="order-here"></div>
</div>
</div>

<div id="orders">
    <h2>Orders</h2>
    <div class="order-carousel">
        <input type="button" class="prev" value="&#10094" onclick="moveSlide(-1)">
        <div class="order-slider">
            <div class="order-card">
                <h3>Order #10234</h3>
                <p><strong>Item:</strong> Laptop</p>
                <p><strong>Customer:</strong> Akshat Sharma</p>
                <p><strong>Delivery Date:</strong> March 25, 2025</p>
                <p><strong>Status:</strong> Processing</p>
            </div>
            <div class="order-card">
                <h3>Order #10235</h3>
                <p><strong>Item:</strong> Sneakers</p>
                <p><strong>Customer:</strong> Daksh Jha</p>
                <p><strong>Delivery Date:</strong> March 27, 2025</p>
                <p><strong>Status:</strong> Pending</p>
            </div>
            <div class="order-card">
                <h3>Order #10236</h3>
                <p><strong>Item:</strong> Headphones</p>
                <p><strong>Customer:</strong> Joe Mathew</p>
                <p><strong>Delivery Date:</strong> January 29, 2025</p>
                <p><strong>Status:</strong> Pending</p>
            </div>
        </div>
        <input type="button" class="next" value="&#10095" onclick="moveSlide(1)">
    </div>
</div>

<div id="stock-here"></div>
<div id="stock">
    <h2>Stock</h2>
    <table class="stocks">
        <tr>
            <td style="font-weight: 900;font-size: 1.2rem;">Category</td>
            <td style="font-weight: 900;font-size: 1.2rem;">Items Left</td>
        </tr>
        <tr>
            <td>Clothes And Accessories</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from clothes_and_accessories;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Furnitures And Home Decor</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from furnitures_and_homedecor;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Electronics</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from electronics;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Health And Grooming</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from health_and_grooming;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Groceries</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from groceries;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Toiletries</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from toiletries;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Books</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from books;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Sports Gear</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from sports_gear;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
        <tr>
            <td>Miscellaneous</td>
            <td>
                <?php
                    $query = "SELECT SUM(stock) from miscellaneous;";
                    $result = mysqli_query($dbc,$query);
                    $row = mysqli_fetch_array($result);
                    echo $row["SUM(stock)"];
                ?>
            </td>
        </tr>
    </table>
</div>
</div>

    <footer id="footer" style="background-color:rgb(235, 229, 229);">
        <div class="footerTxt">
            <p class="footerTxt">&copy; WARESYNC, Inc</p>
        </div>
      
        <div class="footerLogo">
            <img src="./images/waresync.png" />
        </div>

        <ul class="nav">
          <li class="nav-item"><a href="#" class="nav-link"><img src="./images/gmail.png" /></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><img src="./images/instagram.png" /></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><img src="./images/whatsapp.png" /></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><img src="./images/phone.png" /></a></li>
        </ul>  
    </footer>
    
    <script src="./home.js"></script>  
</body>
</html>
