<?php
// Check if the registration form was submitted
if (!isset($_POST['txtUsername'])) {
    die('');
}

// Include the database connection file
include('connect.php');

// Set the content type for UTF-8
header('Content-Type: text/html; charset=UTF-8');

// Get data from the registration form
$username = addslashes($_POST['txtUsername']);
$password = addslashes($_POST['txtPassword']);
$phone = addslashes($_POST['txtPhone']);
$fullname = addslashes($_POST['txtFullname']);

// Check if all required fields are filled
if (!$username || !$password || !$phone || !$fullname) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

// Hash the password
$password = md5($password);

// Check if the username is already taken
$result = $conn->query("SELECT username FROM members WHERE username='$username'");
if ($result->num_rows > 0) {
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

// Insert the members information into the database
$query = "INSERT INTO members (username, password, phone, fullname) VALUES ('$username', '$password', '$phone', '$fullname')";
if ($conn->query($query) === TRUE) {
    echo "Quá trình đăng ký thành công. <a href='login-background.php'>Đăng nhập</a>";
} else {
    echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
}

// Close the database connection
$conn->close();
?>
