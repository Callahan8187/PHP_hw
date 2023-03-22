<?php ob_start();
      session_start();

if($_SESSION["studentLogin"]=="Yes"){

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
<?php
if($_SESSION["teacherLogin"]=="Yes"){
    echo("您好老師，這是您從老師介面轉過來的學生介面");
}
?>
<h2>同學你好，你已登入成功!</h2>
    <hr>
	<ul>
		<li>同學所需資訊::XXX高中XXX同學你好!</li>
	</ul>
<br/>

<a href="logout.php">logout</a>
<br/>

</body>

</html>    