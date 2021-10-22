<h2>菱形</h2>

<?php
$row = 10;
if ($row % 2 == 0) {
    $row = $row + 1;
}

for ($i = 1; $i <= $row; $i++) {

    $mid = ($row + 1) / 2;
    if ($i <= $mid) {
        $stars = 2 * $i - 1;
        $space = $mid - $i;
    } else {
        $stars = ($row - $i) * 2 + 1;
        $space = ($mid - 1) - ($row - $i);

    }
    for ($k = 1; $k <= $space; $k++) {
        echo "&ensp;";
    }

    for ($j = 1; $j <= $stars; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

<h2>矩形</h2>
<?php
$row = 10;
for ($i = 1; $i <= $row; $i = $i + 1) {
    for ($j = 1; $j <= $row; $j++) {
        if ($i == 1 || $i == $row) {
            echo "*";
        } else {
            if ($j == 1 || $j == $row) {
                echo "*";
            } else {echo "&ensp;";
            }
        }
    }

    echo "<br>";
}?>

<h2>對角線矩形</h2>
<?php
$row = 9;
for ($i = 1; $i <= $row; $i = $i + 1) {
    for ($j = 1; $j <= $row; $j++) {
        if ($i == 1 || $i == $row) {
            echo "*";
        } else {
            if ($j == 1 || $j == $row || $j == $i || $j == $row + 1 - $i) {
                echo "*";
            } else {echo "&ensp;";
            }
        }
    }
    echo "<br>";
}