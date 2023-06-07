<!DOCTYPE html>
<html>
<head>
  <title>註冊網頁</title>
  <style>
    body {
      background-image: url("register.png");
      background-size: cover; /* 調整背景圖片以填滿整個螢幕 */
      background-repeat: no-repeat;
    }
    
    /* 在不同螢幕寬度下，設定不同的背景圖片大小 */
    @media (max-width: 600px) {
      body {
        background-size: contain; /* 在較小的螢幕上，讓背景圖片自適應大小 */
      }
    }
    form {
      background-color: white;
      width: 300px;
      padding: 20px;
      margin: 0 auto;
      margin-top: 100px;
      border-radius: 5px;
      text-align: center;
    }
    input[type="text"], input[type="password"], input[type="email"], input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form method="post">
    <h2>用戶註冊</h2>
    <input type="text" name="username" placeholder="帳號" required><br>
    <input type="password" name="password" placeholder="密碼" required><br>
    <input type="email" name="email" placeholder="郵件" required><br>
    <input type="tel" name="phone" placeholder="手機" required><br>
    <input type="submit" name="submit" value="發送驗證碼">
    <input type="text" name="verificationCode" placeholder="驗證碼" required><br>
    <input type="submit" name="register" value="註冊">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
      $email = $_POST["email"];
      $verificationCode = generateVerificationCode();

      $to = $email;
      $subject = "驗證碼";
      $message = "您的驗證碼是：" . $verificationCode;
      $headers = "From: your_email@example.com"; // 替換為你的寄件人郵箱
      mail($to, $subject, $message, $headers);

      echo "驗證碼已發送至您的郵件。";

      session_start();
      $_SESSION["verificationCode"] = $verificationCode;
    } elseif (isset($_POST["register"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $verificationCode = $_POST["verificationCode"];

      session_start();
      if ($verificationCode === $_SESSION["verificationCode"]) {
        // 驗證碼驗證成功，可以進行註冊操作
        // 在這裡添加註冊邏輯，例如將用戶資料存儲到數據庫
        echo "註冊成功！";
      
        // 清除驗證碼 session
        unset($_SESSION["verificationCode"]);
} else {
  echo "驗證碼錯誤！請重新輸入。";
}

      }
    }