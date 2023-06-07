<!DOCTYPE html>
<html>
<head>
	<title>登入頁面</title>
	<style>
		body {
			background-image: url('loginback.png');
			background-size: cover;
			color: #000;
			font-family: Arial, sans-serif;
		}

		.container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			width: 400px;
			padding: 40px;
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* 添加陰影效果 */
		}

		.container input[type="text"],
		.container input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			box-sizing: border-box;
		}

		.container button {
			width: 100%;
			padding: 10px;
			background-color: #87CEFA;
			border: none;
			border-radius: 5px;
			color: #00008B;
			font-weight: bold;
			cursor: pointer;
		}

		.container button:hover {
			background-color: #1E90FF;
		}

		.container a {
			display: block;
			text-align: center;
			margin-top: 20px;
			color: #00008B;
			text-decoration: none;
		}
	</style>
</head>

<body>
	<div class="container">
		<form>
			<input type="text" name="username" placeholder="帳號">
			<input type="password" name="password" placeholder="密碼">
			<button onclick="location.href='home.php'">登入</button>
			<a href="#">註冊</a>
		</form>
	</div>
</body>
</html>
