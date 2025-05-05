<?php
    $dbc = mysqli_connect('localhost','root','','warehouse_db');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clothes And Accessories</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./clothes.css" />
</head>
<body>
    <div id="preload-screen" class="preload-screen">
        <div class="preload-text">Clothes And Accessories</div>
    </div>

    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="../Home Page/home.php">Home</a></li>
                <li class="current-page"><a href="../Clothes And Accessories/clothes.php">
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
        <main class="content">
            <h1>Collection</h1>
            <div class="card-container">
                <div class="card">
                    <img src="./images/jackets.jpeg" alt="jackets" class="card-image">
                    <div class="card-content">
                        <h2>Jackets</h2>
                        <div class="card-details">
                            <?php
                                $query = "SELECT * from clothes_and_accessories where type = 'Jackets';";
                                $result = mysqli_query($dbc,$query);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <span class="location"><?php echo $row['location'];?></span>
                            <span class="rating">⭐ <?php echo round($row['rating'],1);?></span>
                            <span class="stock"><?php echo $row['stock'];?> left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/tshirts.jpeg" alt="tshirts" class="card-image">
                    <div class="card-content">
                        <h2>Tshirts</h2>
                        <div class="card-details">
                        <?php
                                $query = "SELECT * from clothes_and_accessories where type = 'Tshirts';";
                                $result = mysqli_query($dbc,$query);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <span class="location"><?php echo $row['location'];?></span>
                            <span class="rating">⭐ <?php echo round($row['rating'],1);?></span>
                            <span class="stock"><?php echo $row['stock'];?> left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/shirts.jpeg" alt="shirts" class="card-image">
                    <div class="card-content">
                        <h2>Shirts</h2>
                        <div class="card-details">
                        <?php
                                $query = "SELECT * from clothes_and_accessories where type = 'Shirts';";
                                $result = mysqli_query($dbc,$query);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <span class="location"><?php echo $row['location'];?></span>
                            <span class="rating">⭐ <?php echo round($row['rating'],1);?></span>
                            <span class="stock"><?php echo $row['stock'];?> left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/pants.jpeg" alt="pants" class="card-image">
                    <div class="card-content">
                        <h2>Pants</h2>
                        <div class="card-details">
                        <?php
                                $query = "SELECT * from clothes_and_accessories where type = 'Pants';";
                                $result = mysqli_query($dbc,$query);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <span class="location"><?php echo $row['location'];?></span>
                            <span class="rating">⭐ <?php echo round($row['rating'],1);?></span>
                            <span class="stock"><?php echo $row['stock'];?> left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/hoodies.jpeg" alt="Hoodies" class="card-image">
                    <div class="card-content">
                        <h2>Hoodies | Sweatshirts</h2>
                        <div class="card-details">
                        <?php
                                $query = "SELECT * from clothes_and_accessories where type = 'Hoodies | Sweatshirts';";
                                $result = mysqli_query($dbc,$query);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <span class="location"><?php echo $row['location'];?></span>
                            <span class="rating">⭐ <?php echo round($row['rating'],1);?></span>
                            <span class="stock"><?php echo $row['stock'];?> left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/shoes.jpeg" alt="Shoes" class="card-image">
                    <div class="card-content">
                        <h2>Shoes</h2>
                        <div class="card-details">
                        <?php
                                $query = "SELECT * from clothes_and_accessories where type = 'Shoes';";
                                $result = mysqli_query($dbc,$query);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <span class="location"><?php echo $row['location'];?></span>
                            <span class="rating">⭐ <?php echo round($row['rating'],1);?></span>
                            <span class="stock"><?php echo $row['stock'];?> left</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="./images/blazers.jpeg" alt="Blazers" class="card-image">
                    <div class="card-content">
                        <h2>Coats | Blazers</h2>
                        <div class="card-details">
                        <?php
                                $query = "SELECT * from clothes_and_accessories where type = 'Coats | Blazers';";
                                $result = mysqli_query($dbc,$query);
                                $row = mysqli_fetch_array($result);
                            ?>
                            <span class="location"><?php echo $row['location'];?></span>
                            <span class="rating">⭐ <?php echo round($row['rating'],1);?></span>
                            <span class="stock"><?php echo $row['stock'];?> left</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>       
    </div>
    <footer class="footer">

        <div class="footerTxt">
            <p class="footerTxt">&copy; WARESYNC, Inc</p>
        </div>
      
        <div class="footerLogo">
            <img class="waresync" src="./images/waresync.png" />
        </div>

        <div class="logos">
            <img class="logo" src="./images/gmail.png" alt="Email">
            <img class="logo" src="./images/instagram.png" alt="Instagram">
            <img class="logo" src="./images/whatsapp.png" alt="WhatsApp">
            <img class="logo" src="./images/phone.png" alt="Phone">
        <div>
    </footer>

    <script src="./clothes.js"></script>
</body>
</html>