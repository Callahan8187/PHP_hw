<?php ob_start();
      session_start();

$presidentID="president";
$presidentPWD="1111";

$teacherID="teacher";
$teacherPWD="2222";

$studentID="student";
$studentPWD="3333";

$id = $_POST["id"];
$pwd = $_POST["pwd"];

if(($presidentID==$id) && ($presidentPWD==$pwd)){   
    $_SESSION["presidentLogin"]="Yes";
    $_SESSION["teacherLogin"]="Yes";
    header("Location:okpresident.php");
}elseif(($teacherID==$id) && ($teacherPWD==$pwd)){
    $_SESSION["presidentLogin"]="No";
    $_SESSION["teacherLogin"]="Yes";
    $_SESSION["studentLogin"]="Yes";
    header("Location:okteacher.php");
}elseif(($studentID==$id) && ($studentPWD==$pwd)){
    $_SESSION["teacherLogin"]="No";
    $_SESSION["studentLogin"]="Yes";
    header("Location:okstudent.php");
}else{
    $_SESSION["Login"]="No";
    header("Location:fail.php");
}

?>