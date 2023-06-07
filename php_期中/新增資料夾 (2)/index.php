<!DOCTYPE html>
<html>
<head>
	<title>寵物托育網站</title>
	<style>
		body {
			background-image: url('background.png');
			background-color: transparent;
			color: #00008B;
		}

		#header {
			position: fixed;
			top: 10px;
			right: 10px;
		}

		#header a {
			margin-right: 100px; /* 調整連結右側的間距 */
			color: #00008B;
			text-decoration: none;
			background-color: transparent;
			font-size: 35px;
		}

		#login-button {
			position: fixed;
			bottom: 40px;
			left: 360px;
			border: 2px solid #00BFFF;
			border-radius: 50px;
			padding: 30px 60px;
			background-color: #87CEFA;
			color: #00008B;
			font-size: 50px; /* 改變註冊按鈕文字大小 */
		}

		#login-button:hover {
			border-color: #1E90FF;
		}

		#register-button {
			position: fixed;
			bottom: 40px;
			left: 600px;
			border: 2px solid #00BFFF;
			border-radius: 50px;
			padding: 30px 60px;
			background-color: #87CEFA;
			color: #00008B;
			font-size: 50px; /* 改變註冊按鈕文字大小 */
		}

		#register-button:hover {
			border-color: #1E90FF;
		}
	</style>
</head>


<body>
	<div id="header">
		<a href="#">官網介紹</a>
		<a href="#">寵物資訊</a>
		<a href="#">會員資料</a>
		<a href="login.php">登入/登出</a>
	</div>

	<a id="login-button" href="login.php">登入</a>
	<a id="register-button" href="register.php">註冊</a>
</body>
</html>
