<?php
// Bài 2: Kiểm tra số nguyên tố
function kiemTraSNT($n) {
    if ($n < 2) {
        return false;
    }
    // Chạy từ 2 đến n - 1 để kiểm tra chia hết
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$a = 18;
if (kiemTraSNT($a) == true) {
    echo "$a là số nguyên tố";
} else {
    echo "$a không phải là số nguyên tố";
}
?>