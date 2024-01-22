<?php

//Vòng lặp for
for ($i = 1; $i <= 5; $i++) {
    echo "<h4>$i. Xin chào các bạn sinh viên</h4>";
}

//Vòng lặp while
$dem = 1;
while ($dem <= 5) {
    echo "<p>$dem. Vòng lặp while</p>";
    $dem++;
}

//Vòng lặp do .. while
$dem = 1;
do {
    echo "<p>$dem. Vòng lặp do .. while</p>";
    $dem++;
} while ($dem <= 5);

//Vòng lặp foreach
include_once "vidu2.php";
foreach ($sinhvien as $index => $sv) {
    echo "Sinh viên thứ: " . ($index + 1);
    echo "<pre>";
    print_r($sv);
    echo "</pre>";
}
