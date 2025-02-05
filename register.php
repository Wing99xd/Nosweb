<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name1 = $conn->real_escape_string($_POST["name1"]);
$mail = $conn->real_escape_string($_POST["mail"]);
$raw_password = isset($_POST['password']) ? trim($_POST['password']) : '';
$account = $name1;
$error_message = "";


$account_check_query = "SELECT * FROM member WHERE name1 = '$name1' LIMIT 1"; 
$result = $conn->query($account_check_query);
if ($result && $result->num_rows > 0) {
    $error_message .= "Account already exists. ";
}


if (!empty($error_message)) {
    echo $error_message;
    echo '<button onclick="goBack()">Go back</button><br>';
    echo '<script>function goBack() {window.history.back();}</script>';
} else {
    
    $salt = random_bytes(16);
    $hashedPassword = hash("sha256", $raw_password . $salt);
    
   
    $sql = "INSERT INTO member (name1, mail, password, salt) VALUES ('$name1', '$mail', '$hashedPassword', '$salt')";

    if ($conn->query($sql) === TRUE) {
        echo "Register successfully. <br>";
        echo '<button onclick="window.location.href=\'loginWeb.php\'" type="button">Go to Login page</button>';
    } else {
        echo "Register failed: " . $conn->error;
    }
}

$conn->close();
?>