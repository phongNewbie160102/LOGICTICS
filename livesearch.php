<?php
// livesearch.php

// Giả sử bạn có một mảng dữ liệu đơn giản để tìm kiếm
$data = array(
    "Apple",
    "Banana",
    "Orange",
    "Mango",
    "Pineapple",
    "Grapes",
    "Strawberry",
    "Blueberry",
    "Raspberry"
);

// Lấy giá trị tham số truy vấn từ yêu cầu AJAX
$searchTerm = $_GET['q'];

// Tìm kiếm trong mảng dữ liệu
$results = array();
foreach ($data as $item) {
    // Nếu chuỗi tìm kiếm tồn tại trong mục
    if (stripos($item, $searchTerm) !== false) {
        // Thêm mục này vào kết quả
        $results[] = $item;
    }
}

// Nếu không có kết quả
if (empty($results)) {
    echo "<div style='padding:10px;'>Không có đơn hàng</div>";
} else {
    // Trả về kết quả dưới dạng danh sách HTML
    echo "<ul style='padding:10px;'>";
    foreach ($results as $result) {
        echo "<li>" . $result . "</li>";
    }
    echo "</ul>";
}
?>
