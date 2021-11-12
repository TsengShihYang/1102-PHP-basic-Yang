<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=students";
// $dbuser='root';
$pdo=new PDO($dsn,'root','');

$sql="SELECT * from `students` where `id`<30";
$rows=$pdo->query($sql)->fetchAll();

// echo "<pre>";
// print_r($rows);
// echo "<pre>";

// foreach($rows as $row){
//     echo $row['name']."<br>";
// }

// $pdo=new PDO('資料庫連線資訊','帳號','密碼', '[其他參數]');


?>
<style>
    table{
        border: 3px double;
    }
    td{
        border: 1px solid black;
        padding: 5px 5px;
    }
</style>
<table>
    <tr>
        <td>學號</td>
        <td>座號</td>
        <td>姓名</td>
        <td>性別</td>
        <td>出生年月日</td>
        <td>畢業國中</td>
    </tr>
    
    <?php
foreach($rows as $row){
    echo "<tr>";
    echo "<td>".$row['uni_id']."</td>";
    echo "<td>".$row['seat_num']."</td>";
    echo "<td>".$row['name']."</td>";
    if(mb_substr($row['national_id'],1,1)==1){
        echo "<td>男生</td>";
    }else{ echo "<td>女生</td>";}
    echo "<td>".$row['birthday']."</td>";
    echo "<td>".$row['secondary']."</td>";
    echo "<tr>";

}

?>
</table>
