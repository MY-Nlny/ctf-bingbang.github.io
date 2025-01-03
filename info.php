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

// 获取URL参数
$id = $_GET['id'];

// SQL查询（存在SQL注入漏洞）
$sql = "SELECT * FROM secrets WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出敏感信息
    while($row = $result->fetch_assoc()) {
        echo "敏感信息: " . $row["secret"];
    }
} else {
    echo "没有找到相关信息";
}

$conn->close();
?>