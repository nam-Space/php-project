<head>
    <meta charset="UTF-8">
    <base href="http://localhost/Php%20Master/LESSON/section-26/projectmvc.vn/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Đăng nhập</title>
</head>

<body>
    <style>
        body {
            background: url('https://bloggame.net/uploads/worigin/2020/03/28/hinhnenlienminhhuyenthoai4k15e7ec3c27825c_5a75a1d905dd7a01d068e5fcba4fc69a.jpg');
            background-size: cover;
            background-position-y: -80px;
            font-size: 16px;
        }

        #wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form-login {
            max-width: 400px;
            background: rgba(0, 0, 0, 0.8);
            flex-grow: 1;
            padding: 30px 30px 40px;
            box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
        }

        .form-heading {
            font-size: 25px;
            color: #f5f5f5;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            border-bottom: 1px solid #fff;
            margin-top: 15px;
            margin-bottom: 20px;
            display: flex;
        }

        .form-group i {
            color: #fff;
            font-size: 14px;
            padding-top: 5px;
            padding-right: 10px;
        }

        .form-input {
            background: transparent;
            border: 0;
            outline: 0;
            color: white;
            flex-grow: 1;
        }

        .form-input::placeholder {
            color: #f5f5f5;
        }

        #eye i {
            padding-right: 0;
            cursor: pointer;
        }

        .form-submit {
            background: transparent;
            border: 1px solid #f5f5f5;
            color: #fff;
            width: 100%;
            text-transform: uppercase;
            padding: 6px 10px;
            transition: 0.25s ease-in-out;
            margin-top: 30px;
        }

        .form-submit:hover {
            border: 1px solid #54a0ff;
        }

        .error {
            color: white;
        }

        .icon {
            padding: 6px 0px;
        }

        .remember {
            color: white;
        }
    </style>

    <div id="wrapper">
        <form action="" id="form-login" method="POST">
            <h1 class="form-heading">Đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user icon"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="username" value="<?php echo set_value('username') ?>">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="password">
                <div id="eye">
                    <i class="far fa-eye icon"></i>
                </div>
            </div>
            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me" class="remember">Nhớ đăng nhập</label>
            <input type="submit" value="Đăng nhập" class="form-submit mb-2" name="btn-submit">
            <?php echo form_error('username') ?>
            <?php echo form_error('password') ?>
            <?php echo form_error('login'); ?>
            <div class="support d-flex justify-content-between mt-2">
                <a href="?mod=users&controller=index&action=reset">Quên mật khẩu?</a>
            </div>
        </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function() {
        $('#eye').click(function() {
            $(this).toggleClass('open');
            $(this).children('i').toggleClass('fa-eye-slash fa-eye');
            if ($(this).hasClass('open')) {
                $(this).prev().attr('type', 'text');
            } else {
                $(this).prev().attr('type', 'password');
            }
        });
    });
</script>
<script src="js/app.js"></script>

</html>