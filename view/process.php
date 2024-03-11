<?php
// process.php

// Nhận dữ liệu từ Ajax
$tableData = $_POST['tableData'];

// Xử lý dữ liệu ở đây (ví dụ: in ra dữ liệu)
echo '<table class="table table-bordered">';
foreach ($tableData as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . $cell . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
