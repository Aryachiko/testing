<?php
session_start();
$conn = new mysqli("localhost", "root", "", "apb");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if ($user['password'] === md5($password)) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // Redirect berdasarkan role
        if ($user['role'] === 'admin') {
            header("Location: admin/dashboard/index.php");
        } else {
            header("Location: index.php");
        }
        exit;
    } else {
        echo "Password salah!";
    }
} else {
    header("Location: index.php");
}
$stmt->close();
$conn->close();