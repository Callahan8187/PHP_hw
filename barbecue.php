<!-- 
設計系烤報名網頁
1.html
2.圖片
3.表格
4.報名表單 
5.comment
-->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>資管系系考報名</title>
	</head>

	<body style="background-color: #74cce5; ">
		<center style="background-color: #424ec6;">
			<img src="imlogo.png" alt="NUK IM logo" width="120px">
			<b><h1 style="font-size:50px;">資管系系考報名專區</h1></b>
		</center>

		<h2>資管系系考報名資訊</h2>
		<ul>
			<li>時間:3月22號 下午5點</li>
			<li>地點：高雄大學露營烤肉區(操場旁)</li>
			<li>價格：100(有繳系費) <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 150(沒繳系費)</li>
		</ul><br>

		<h2>系考報名表格！</h2>
		<form action="/Registration.php">
			學號：&nbsp<input type="text" name="id" placeholder="A要大寫!" required><br>
			姓名：&nbsp<input type="text" name="name" required><br>
			<p>-是否參加？</p>
			是<input type="radio" name="join"> &nbsp;
			否<input type="radio" name="join"> <br>

			<p>-是否吃素？</p>
			是，我吃素<input type="radio" name="food"> &nbsp;
			否，我吃葷<input type="radio" name="food"> <br><br>
			

			<p>-是否有繳交系學會費？</p>
			是<input type="radio" name="money"> &nbsp;
			否<input type="radio" name="money"> <br><br>

			Email &nbsp;<input type="email" required> <br><br>

			<input type="submit" value="Submit">
			<input type="Reset">
		</form><br><br>

		<h2>若有任何問題都可以私訊高大資管系學會的粉絲專頁！點擊下方連結私訊！</h3>
		<a href="https://www.facebook.com/imgroupisgood" target="_blank">高大資管系學會</a><br><br>
		<a href="#top">回到上面</a>

	</body>
</html>