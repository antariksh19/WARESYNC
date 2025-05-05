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
            echo "<script>alert('Account already exists, try logging in!'); 
                window.location.href='./index.php';
                </script>";
        }
        else{
            $query = "INSERT INTO users VALUES('$name','$email','$password');";
            $result = mysqli_query($connect,$query);
            echo "<script>alert('Account created, try logging in!'); 
                window.location.href='./index.php';
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
    <title>Sign Up</title>
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
            <h2>Sign Up</h2>
            <form id="signupForm" action="" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Joe Mathew" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="joematt2005@gmail.com" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="xyz@12345" required>

                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="xyz@12345" required>
                
                <button type="submit" onclick="validateForm()">Sign Up</button>
            </form>
            <p>Already have an account? <a href="index.php">Sign in here!</a></p> 
        </div>
    </div>

    <script>
        <?php
            if(isset($boolean)){
                echo "console.log('Account already exists, try logging in);";
                header("location:./signup.php");
            }
        ?>
        function validateForm() {
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value;
            let confirmPassword = document.getElementById("confirm-password").value;

            if (name === "" || email === "" || password === "" || confirmPassword === "") {
                alert("Please fill in all fields.");
                return;
            }

            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return;
            }
        }
    </script>
</body>
</html>
