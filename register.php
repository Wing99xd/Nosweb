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
$error_message = "";

$account_check_query = "SELECT * FROM member WHERE name1 = ? LIMIT 1";
$stmt = $conn->prepare($account_check_query);
$stmt->bind_param("s", $name1);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $error_message .= "Account already exists. ";
}

if (!empty($error_message)) {
    echo $error_message;
    echo '<button onclick="goBack()">Go back</button><br>';
    echo '<script>function goBack() {window.history.back();}</script>';
} else {
    $hashedPassword = password_hash($raw_password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO member (name1, mail, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name1, $mail, $hashedPassword);

    if ($stmt->execute()) {
        echo "Register successfully. <br>";
        echo '<button onclick="window.location.href=\'loginWeb.php\'" type="button">Go to Login page</button>';
    } else {
        echo "Register failed: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>