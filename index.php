<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = "SELECT * from users where name = '$name' AND email = '$email' AND password = '$password';";

        $connect = mysqli_connect("localhost","root","","warehouse_db");

        $result = mysqli_query($connect,$query);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['valid_email'] = $email ;
            header('location:./Home Page/home.php');
        }
        else if(mysqli_num_rows($result) == 0){
            echo "<script>alert('Signup to Login'); 
                window.location.href='./signup.php';
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique+B1&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="./images/signup.png" alt="Warehouse">
            <div class="overlay-text"> 
                <h1 class="title">WARESYNC</h1>
                <h2 class="subtitle">Manage Your Inventory Efficiently</h2>
                <p class="description">Track, organize, and optimize your warehouse stock with ease.</p>
            </div>  
        </div>
        <div class="form-section">
            <h2>Login</h2>
            <form id="loginForm" action="" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Joe Mathew" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="joematt2005@gmail.com" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="xyz@12345" required>
                
                <button type="submit" onclick="validateLogin()">Submit</button>
            </form>
            <p>Don't have an account? <a href="./signup.php">Sign up for free!!</a></p>
        </div>
    </div>

    <script>
        function validateLogin() {
            let name = document.getElementById("name").value.trim()
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value;

            if (name === "" || email === "" || password === "") {
                alert("Please fill in all fields.");
                return;
            }
            
        }
    </script>
</body>
</html>
