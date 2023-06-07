
<?php
session_start();

// 连接到数据库
$conn = new mysqli("localhost", "root", "", "pet_shop");

// 检查连接是否成功
if ($conn->connect_error) {
  die("資料庫連接失敗: " . $conn->connect_error);
}

// 处理登录请求
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // 对输入的用户名和密码进行转义，防止 SQL 注入
  $username = $conn->real_escape_string($username);
  $password = $conn->real_escape_string($password);

  // 查询数据库中是否存在匹配的记录
  $sql = "SELECT * FROM users WHERE c_account = '$username' AND c_password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // 登录成功，将用户信息存储在会话中
    $_SESSION['username'] = $username;
    $_SESSION['loggedIn'] = true;

    // 重定向到所有商品页面
    header("Location: all_product.php");
    exit();
  } else {
    // 登录失败，显示错误消息
    echo "
    ";
  }
}

// 检查用户是否已登录
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
  // 用户已登录，重定向到所有商品页面
  header("Location: all_product.php");
  exit();
}

// 关闭数据库连接

?>

<!DOCTYPE html>
<html>
<head>
  <title>登入</title>
</head>
<body>
  <h1>登入</h1>
  <form method="POST" action="login.php">
    <label for="username">帳號:</label>
    <input type="text" name="username" id="username" required>

    <label for="password">密码:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">登录</button>
  </form>
</body>
</html>
