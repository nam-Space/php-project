<?php

function construct()
{
    load_model('index');
    load('lib', 'validation_form');
}
function loginAction()
{
    load('helper', 'users');
    global $error, $password, $username;
    if (isset($_POST['btn-submit'])) {
        $error = array();
        if (empty($_POST['username'])) {
            $error['username'] = 'Không được để trống tên đăng nhập';
        } else {
            if (is_username()) {
                $username = $_POST['username'];
            } else {
                $error['username'] = 'Tên đăng nhập phải từ 6-32 kí tự và không có kí tự đặc biệt';
            }
        }
        if (empty($_POST['password'])) {
            $error['password'] = 'Không được để trống mật khẩu';
        } else {
            if (is_password()) {
                $password = $_POST['password'];
            } else {
                $error['password'] = 'Mật khẩu cần 6-32 kí tự và được viết hoa chữ cái đầu';
            }
        }
        if (empty($error)) {
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', $username, time() + 3600);
            }
            if (check_login($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                redirect("?mod=users&action=update");
            } else {
                $error['login'] = 'Tài khoản hoặc mật khẩu không chính xác';
            }
        }
    }
    load_view('login');
};

function logoutAction()
{
    // setcookie('is_login',true,time()-3600);
    // setcookie('user_login',$username,time()-3600);
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);

    header("location: ?mod=users&action=login");
}
function updateAction()
{
    global $error, $fullname, $email, $notify;
    if (isset($_POST['btn-submit'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = 'Không được để trống tên!';
        } else {
            $fullname = $_POST['fullname'];
        }
        if (empty($_POST['email'])) {
            $error['email'] = 'Không được để trống email!';
        } else {
            $email = $_POST['email'];
        }
        if (empty($_POST['tel'])) {
            $error['tel'] = 'Không được để trống số điện thoại!';
        } else {
            if (is_tel()) {
                $tel = $_POST['tel'];
            } else {
                $error['tel'] = 'Số điện thoại không đúng định dạng!';
            }
        }
        if (empty($_POST['address'])) {
            $error['address'] = 'Không được để trống địa chỉ!';
        } else {
            $address = $_POST['address'];
        }
        if (empty($error)) {
            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'tel' => $tel,
                'address' => $address
            );
            $notify = array();
            $notify['update_success'] = "Đã cập nhập thành công";
            update_user_login(user_login(), $data);
        }
    }
    $dulieu['item'] = get_user_by_username(user_login());
    load_view('update', $dulieu);
}

function change_passAction()
{
    global $old_pass, $error, $password, $confirm_password, $notify;
    if (isset($_POST['btn-submit'])) {
        $error = array();
        $notify = array();
        if (empty($_POST['old-pass'])) {
            $error['old-pass'] = 'Không được để trống mật khẩu!';
        } else {
            if (is_password()) {
                $old_pass = $_POST['old-pass'];
            } else {
                $error['old-pass'] = 'Mật khẩu cần 6-32 kí tự và được viết hoa chữ cái đầu';
            }
        }
        if (empty($_POST['password'])) {
            $error['password'] = 'Không được để trống mật khẩu mới!';
        } else {
            if (is_password()) {
                $password = $_POST['password'];
            } else {
                $error['password'] = 'Mật khẩu cần 6-32 kí tự và được viết hoa chữ cái đầu';
            }
        }

        if (empty($_POST['confirm-password'])) {
            $error['confirm-password'] = 'Không được để trống xác nhận mật khẩu!';
        } else {
            if (is_password()) {
                $confirm_password = $_POST['confirm-password'];
            } else {
                $error['confirm-password'] = 'Mật khẩu cần 6-32 kí tự và được viết hoa chữ cái đầu';
            }
        }

        if (empty($error['password']) && empty($error['confirm-password'])) {
            if ($confirm_password != $password) {
                $error['confirm'] = 'Mật khẩu không khớp';
            }
        }

        if (empty($error)) {
            if (check_pass($old_pass, user_login())) {
                $data = array(
                    'password' => md5($password)
                );
                $notify['success'] = 'Đổi mật khẩu thành công!';
                update_user_login(user_login(), $data);
            } else {
                $notify['false'] = "Mật khẩu không đúng!";
            }
        }
    }
    load_view('change_pass');
}

function update_avtAction()
{
    global $avt,$error,$notify;
    if (isset($_POST['btn-submit'])) {
        $error = array();
        if (empty($_POST['avt'])) {
            $error['avt'] = 'Không được để trống địa chỉ ảnh!';
        }else{
            $avt = $_POST['avt'];
        }
        if (empty($error)) {
            $data = array(
                'avt' => $avt,
            );
            $notify = array();
            $notify['update_success'] = "Đã cập nhập thành công";
            update_user_login(user_login(), $data);
        }
    }
    load_view('up_avt');
}
