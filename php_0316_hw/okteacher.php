<?php ob_start();
      session_start();

if($_SESSION["teacherLogin"]=="Yes"){

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
if($_SESSION["presidentLogin"]=="Yes"){
    echo("您好校長，這是您從校長介面轉過來的老師介面");
}
?>
<h2>老師你好，你已登入成功!</h2>
    <hr>
	<ul>
		<li>老師專區::XXX高中XX老師</li>
	</ul>
<br/>

<a href="okstudent.php">點此進去學生的登入介面</a>
<br/>
<a href="logout.php">logout</a>
<br/>

</body>

</html>    