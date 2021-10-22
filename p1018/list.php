<h1>這是在Home</h1>
<h2>列出3,5,7,11,13,17……97數列</h2>

<?php
for ($i = 3; $i < 100; $i = $i * 2 + 1) {
    echo $i . ",";
}
echo "<hr>";

for ($i = 3; $i < 100; $i++) {
    $test = false;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $test = true;
        }
    }
    if ($test == false) {
        echo $i . ",";
    }

}
?>
<h2>完成挑戰</h2>