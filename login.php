<?php 
$servername = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $conn->real_escape_string(trim($_POST["username"])); // 去掉空格
$password = $conn->real_escape_string(trim($_POST["password"])); // 去掉空格

$sql = "SELECT password, salt FROM member WHERE name1 = '$username'";
$result = $conn->query($sql);

if ($result === false) {
    die("SQL Error: " . $conn->error);
}

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $storedPassword = $row["password"];
    $salt = $row["salt"];
    
    $hashedLoginPassword = hash("sha256", $password . $salt);

    if ($hashedLoginPassword == $storedPassword) {
        // 登入成功，回傳狀態、訊息和用戶名
        echo "success|Login successfully! Welcome back, $username.|$username";
    } else {
        echo "error|Login failed. Invalid password.";
    }
} else {
    echo "error|Login failed. Username not found.";
}

$conn->close();
?>