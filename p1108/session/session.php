<?php
session_start();

$_SESSION['name']='young';

echo $_SESSION['name'];

$_SESSION['students']=[ '張三','李四','趙五','孫六'];

?>