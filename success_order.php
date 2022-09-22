<?php
ob_start();
session_start();
$guest = $_SESSION['cart']['info'];
// echo "<pre>";
// print_r($guest);
// echo "<pre>";

  $day = date("d");
  $month = date("m");
  $year = date("Y");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Đặt hàng thành công</title>
</head>

<body>
    <style>
        body {
            background: rgb(242, 239, 239);
        }

        #wrapper {
            max-width: 1300px;
            margin: auto;
        }

        .icon {
            text-align: center;
        }

        .icon img {
            max-width: 100px;
            height: auto;
        }

        #wp-info {
            background: white;
            border-radius: 1rem;
        }

        a.product_thumb img {
            max-width: 70px;
            height: auto;
        }

        #info_buy table thead tr th {
            text-align: center;
        }

        #info_buy table tbody td {
            align-items: center;
            text-align: center;
            line-height: 60px;
        }

        #info_buy table tbody td a {
            align-items: center;
            text-align: center;
            line-height: 60px;
            color: red;
            font-weight: 500;
        }
    </style>
    <div id="wrapper">
        <div id="logo" class="pt-1">
            <h1><b class="text-danger">GROUP9</b> <b class="text-success">Store</b></h1>
        </div>
        <div id="order_success">
            <div class="icon"><img src="https://sablanca.vn/Images/icon/tick-iconblue.png" alt="Lỗi"></div>
            <h3 class="text-center my-2">Đăng kí thành công</h3>
        </div>
        <div id="wp-info" class="p-3">
            <div id="info-cart">
                <p>Xin chào <b><?php echo $guest['fullname'] ?></b></p>
                <p>Chúc mừng bạn đã đặt hàng thành công sản phẩm của <b>TQ STORE.VN</b></p>
            </div>
            <div id="info-guest">
                <b class="py-2 d-block">Thôn tin người mượn:</b>
                <div class="fullname">Người mượn: &emsp; &emsp; <b><?php echo $guest['fullname'] ?></b></div>
                <div class="address">Địa chỉ: &emsp; &emsp; &emsp; <b><?php echo $guest['address'] ?></b></div>
                <div class="time">Thời gian: &emsp; &emsp; &emsp; <b><?php echo $day ?>/<?php echo $month ?>/<?php echo $year ?></b></div>
                <div id="info_buy">
                    <b class="py-2 d-block">Chi tiết đăng kí mượn sách</b>
                    <table class="table table-bordered table-striped ">
                        <thead class="table-dark">
                            <tr>
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Giới tính</th>
                                <th>Đối tượng</th>
                                <th>Ngày mượn</th>
                                <th>Ngày trả</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td><?php echo '1'?></td>
                            <td><?php echo $guest['fullname']?></td>
                            <td><?php echo $guest['gender']?></td>
                            <td><?php echo $guest['subject']?></td>
                            <td><?php echo $guest['borrowed_date']?></td>
                            <td><?php echo $guest['pay_date']?></td>
                        </tbody>
                    </table>
                </div>
                <hr>
                <b>Mọi thông tin đơn hàng đã được gửi trực tiếp vào email của bạn. Hãy kiểm tra để biết thêm chi tiết
                </b>
                <p>Cảm ơn bạn đã tin tưởng và giao dịch tại <b>TQ Store</b></p>
                <div class="buttom">
                    <a href="home.php" class="btn btn-success">Tiếp tục mượn sách</a>
                    <a href="https://mail.google.com/mail/u/0/?tab=rm#inbox" target="blank" class="btn btn-danger">Check Email</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>