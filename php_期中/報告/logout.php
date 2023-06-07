<?php
session_start();

// 销毁会话变量
$_SESSION = array();

// 如果存在会话 cookie，将其设置为过期
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 86400, '/');
}

// 最后销毁会话
session_destroy();

// 重定向到登录页面
header("Location: login.php");
exit();
?>