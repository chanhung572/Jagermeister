<?php
// Khai báo sử dụng session
session_start();

// Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

// Xử lý đăng nhập
if (isset($_POST['dangnhap'])) {
    // Kết nối tới database
    include('connect.php');

    // Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);

    // Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    // Mã hóa password
    $password = md5($password);

    // Kiểm tra tên đăng nhập có tồn tại không
    $query = $conn->query("SELECT username, password FROM members WHERE username='$username'");


    if ($query->num_rows == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    // Lấy mật khẩu trong database ra
    $row = $query->fetch_assoc();

    // So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    // Lưu tên đăng nhập
    $_SESSION['username'] = $username;

    // Chuyển hướng đến trang khác sau khi đăng nhập thành công
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jägermeister</title>
    <link rel="stylesheet" href="style/login-background.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <form action="login-background.php?do=login" method='POST'>
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="txtUsername" placeholder="username" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="txtPassword" placeholder="password" required>
                <i class="fa-solid fa-lock"></i>
            </div>

            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember">Remember me
                </label>
                <a href="#">Forgot password</a>
            </div>

            <input type='submit' name="dangnhap" value='Login' class="btn" />

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
