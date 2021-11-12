<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算生日</title>
</head>
<body>
    <h1>計算生日</h1>
    <div>每年生日10-19</div>
    <div>下次生日2022-10-19</div>
    <?php
    // echo "現在的時間秒數".strtotime('2021-10-25');
    echo "<br>";
    // echo "下次生日的時間秒數".strtotime('2022-10-19');

    $gapDays=(strtotime('2022-10-19')-strtotime('now'))/(24*60*60);
    echo "<hr>";
    echo "<br>距離下次生日有間隔". floor($gapDays)."天";

    echo "<br>";
    $year=floor(floor($gapDays)/365);
    echo $year;
    echo "<br>";
    $month=floor(floor($gapDays)%365/30);
    echo $month;
    echo "<br>";
    $day=floor(floor($gapDays)%365)%30;
    echo $day;
    echo "<br>";

    ?>
</body>
</html>