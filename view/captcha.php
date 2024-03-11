<?php
    session_start();

    // Tạo chuỗi ngẫu nhiên cho Captcha
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = substr(str_shuffle($characters), 0, 5);
    $_SESSION['captcha'] = $randomString;

    // Tạo hình ảnh Captcha
    $width = 100;
    $height = 60;

    $image = imagecreatetruecolor($width, $height);

    // Màu nền
    $bgColor = imagecolorallocate($image, 255, 255, 255);
    imagefill($image, 0, 0, $bgColor);

    // Màu chữ
    $textColor = imagecolorallocate($image, 0, 0, 0);

    // Vẽ Captcha lên hình ảnh
    imagettftext($image, 20, 0, 10, 30, $textColor, '../font/samsungOne-400.ttf', $randomString);

    // Hiển thị hình ảnh
    header('Content-Type: image/png');
    imagepng($image);
    imagedestroy($image);
?>