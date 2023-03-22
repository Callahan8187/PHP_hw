<?php ob_start();
      session_start();

if($_SESSION["presidentLogin"]=="Yes"){

}else{
    header("Location:error.php");
}
 ?>
<html>

<head>
<meta charset="utf-8">
<title>校務系統</title>
</head>

<body> 
<h2>校長你好，你已登入成功!</h2>
    <hr>
	<ul>
		<li>校長資訊:XXX高中校長</li>
	</ul>
<br/>

<a href="okteacher.php">點此進去老師的登入介面</a>
<br/>
<a href="logout.php">logout</a>
<br/>

</body>

</html>    