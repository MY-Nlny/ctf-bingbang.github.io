<?php
// 连接数据库
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ctf";

$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取用户输入
$username = $_POST['username'];
$password = $_POST['password'];

// SQL查询
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 登录成功，重定向到信息页面
    header("Location: info.php");
} else {
    echo "用户名或密码错误";
}

$conn->close();
?>