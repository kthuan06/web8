<?php
// Bắt đầu phiên làm việc
session_start();

// Tạo mã CAPTCHA ngẫu nhiên
$randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);

// Lưu mã CAPTCHA trong biến phiên
$_SESSION['captcha'] = $randomString;

// Tạo hình ảnh CAPTCHA
$width = 120;
$height = 40;
$image = imagecreate($width, $height);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 5, 20, 12, $randomString, $text_color);

// Thiết lập loại nội dung và hiển thị hình ảnh
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
<img src="captcha.php" alt="CAPTCHA">
<?php

if (isset($_POST['captcha'])) {
    $userCaptcha = $_POST['captcha'];
    
    if (isset($_SESSION['captcha']) && strtolower($userCaptcha) == strtolower($_SESSION['captcha'])) {
        // Mã CAPTCHA hợp lệ
        echo "Mã CAPTCHA hợp lệ!";
    } else {
        // Mã CAPTCHA không hợp lệ
        echo "Mã CAPTCHA không hợp lệ!";
    }
}
?>
