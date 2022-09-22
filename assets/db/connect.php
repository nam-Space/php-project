<?php
#kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'ismart');
if (!$conn) {
    echo "Kết nối không thành công";
}
?>