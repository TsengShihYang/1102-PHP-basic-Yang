<?php

session_start();
if (isset($_SESSION['user'])){
    header('location:mem_center.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入畫面</title>
    <style>
        h1{text-align: center;}
        body{font-size: 18px;
            color: blue;
        }
        div{
            width: 400px;
            height: 300px;
            margin: auto;
            border: 1px solid black;
            box-shadow: 1px 1px 10px #999;
            height: 150px;
            text-align: center;
            background-color: lightgray;
            padding: 10px;
        }
    </style>
</head>
<h1>登入確認 (使用cookie)</h1>
<body>
    <div>
    <!-- <form action="index.php" method='post'> -->
        <!-- <?php
    //print_r($_POST);
    // if(!empty($_POST)){
    //         $acc=$_POST['acc'];
    //         $pw=$_POST['pw'];

    //         if($acc=='young' && $pw=='1234'){
    //             echo "帳號或密碼正確";
    //             echo "<br>";
    //             echo "登入成功";
    //         }else{
    //             echo "帳號或密碼錯誤";
    //             echo "<br>";
    //             echo "登入失敗";
    //         }
    // }
        ?> -->
        <?php
        if(isset($_GET['status']) && $_GET['status']=='err'){
            echo "<span style='color:red'>帳號或密碼錯誤</span>";
        }
        ?>
        <form action="c_login.php" method="post">
            <p>用戶名稱 <input type="text" name="acc" id="acc" value=""></p>
            <p>輸入密碼 <input type="password" name="pw" id="pw" value="" ></p>
            <p><input type="submit" value="登入"> <input type="reset" value="取消"></p>
        </form>
    </div>



</body>
</html>