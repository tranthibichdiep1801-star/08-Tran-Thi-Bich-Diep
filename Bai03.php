<?php
// Bài 3: In hình chữ nhật
function inHinhChuNhat($rong, $cao) {
    for ($i = 1; $i <= $cao; $i++) {
        for ($j = 1; $j <= $rong; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

// In hình 5x3
inHinhChuNhat(5, 3);
?>