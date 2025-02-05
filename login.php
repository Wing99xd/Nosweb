<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $conn->real_escape_string($_POST["username"]);
$password = $conn->real_escape_string($_POST["password"]);

$sql = "SELECT hashed_password, salt FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $storedhashedPassword == $row["hashed_password"];
    $salt = $row["salt"];
    
    $hashedPassword = hash("sha256", $password . $salt);

    if ($hashedLoginPassword == $storedhashedPassword) {
        echo "Login successfully<br>";
    } else {
        echo "Login fail<br>";
        echo 'button onclick="location.href="login.html" type="button">Login</button>';
    }
} else {
    echo "Login fail , username not found <br>";
    echo 'button onclick="location.href="signup.html" type="button">Go Signup page</button>';
}

$conn->close();
?>