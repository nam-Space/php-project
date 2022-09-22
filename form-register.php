<?php require 'assets/includes/header.php' ?>
<?php require './assets/validation_form.php' ?>
<?php require './assets/db/config.php' ?>
<?php require './assets/db/connect.php' ?>
<?php require './assets/db/database.php' ?>
<?php
db_connect($config);
ob_start();
session_start();
$error = array();
if (isset($_POST['btn-submit'])) {
    if (empty($_POST['fullname'])) {
        $error['fullname'] =  "Bạn chưa nhập họ tên <br>";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['id_card'])) {
        $error['id_card'] =  "Bạn chưa nhập số chứng minh thư <br>";
    } else {
        $id_card = $_POST['id_card'];
    }
    if (empty($_POST['birth'])) {
        $error['birth'] =  "Bạn chưa nhập ngày sinh <br>";
    } else {
        $birth = $_POST['birth'];
    }
    if (empty($_POST['subject'])) {
    } else {
        $subject = $_POST['subject'];
    }
    if (empty($_POST['address'])) {
        $error['address'] =  "Bạn chưa nhập địa chỉ <br>";
    } else {
        $address = $_POST['address'];
    }
    if (empty($_POST['borrowed_date'])) {
        $error['borrowed_date'] =  "Bạn chưa nhập ngày mượn <br>";
    } else {
        $borrowed_date = $_POST['borrowed_date'];
    }
    if (empty($_POST['pay_date'])) {
        $error['pay_date'] =  "Bạn chưa nhập ngày trả <br>";
    } else {
        $pay_date = $_POST['pay_date'];
    }
    if (empty($_POST['gender'])) {
        $error['gender'] =  "Bạn chưa nhập giới tính <br>";
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($_POST['category'])) {
        $error['category'] =  "Bạn chưa nhập danh mục sách<br>";
    } else {
        $category = $_POST['category'];
    }
    if (empty($error)) {
        $data = array(
            'fullname' => $fullname,
            'birth' => $birth,
            'subject' => $subject,
            'borrowed_date' => $borrowed_date,
            'pay_date' => $pay_date,
        );
        db_insert('borrower', $data);
        $_SESSION['cart']['info'] = array(
            'fullname' => $fullname,
            'gender' => $gender,
            'subject' => $subject,
            'borrowed_date' => $borrowed_date,
            'pay_date' => $pay_date,
            'address' => $address,
            'category' => $category
        );
        header('location: success_order.php');
    }
}
?>
</body>

</html>
<style>
    #register-wp-content {
        background: rgb(209, 206, 206);
    }

    #register-content {
        background: hwb(0 100% 0%);
        border-radius: 1rem;
        margin: 0px 10px;
        padding: 20px;
    }

    label {
        margin-bottom: 0px;
        padding: 5px;
    }
</style>
<!-- ============END HEADER============== -->
<div id="register-wp-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center m-3 ">ĐĂNG KÍ MƯỢN SÁCH</h3>
            </div>
        </div>
    </div>
    <div id="register-content">
        <form action="" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="fullname"><strong>Tên bạn đọc<span class="text-danger">*</span></strong></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nguyễn Văn A" value="<?php echo set_value('fullname') ?>">
                                    <p class="text-danger font-weight-bold"><?php echo form_error('fullname') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="id_card"><strong>CMND <span class="text-danger">*</span></strong></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="id_card" id="id_card" class="form-control" value="<?php echo set_value('id_card') ?>">
                                    <p class="text-danger font-weight-bold"><?php echo form_error('id_card') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="birth"><strong>Ngày sinh <span class="text-danger">*</span></strong></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" name="birth" id="birth" class="form-control" value="<?php echo set_value('birth') ?>">
                                    <p class="text-danger font-weight-bold"><?php echo form_error('birth') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="subject"><strong>Đối tượng <span class="text-danger">*</span></strong></label>
                                </div>
                                <div class="col-md-9">
                                    <select name="subject" id="subject" class="form-control">
                                        <option value="">--Chọn--</option>
                                        <option value="Giáo viên">Giáo viên</option>
                                        <option value="Học sinh">Học sinh</option>
                                        <option value="Sinh viên">Sinh viên</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                    <p class="text-danger font-weight-bold"><?php echo form_error('subject') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="gender"><strong>Giới tính </strong><span class="text-danger">*</span> </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="radio" name="gender" id="gender" value="Nam">
                                    <label for="gender">Nam</label>
                                    <input type="radio" name="gender" id="gender" value="Nữ">
                                    <label for="gender">Nữ</label>
                                    <?php echo form_error('gender') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label for="address"><strong>Địa chỉ</strong><span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-10">
                                                <input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ chi tiết:" value="<?php echo set_value('address') ?>">
                                                <?php echo form_error('address') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="borrowed_date"><strong>Ngày mượn<span class="text-danger">*</span></strong></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" name="borrowed_date" id="borrowed_date" class="form-control" value="<?php echo set_value('borrowed_date') ?>">
                                    <?php echo form_error('borrowed_date') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="pay_date"><strong>Ngày trả<span class="text-danger">*</span></strong></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="date" name="pay_date" id="pay_date" class="form-control" value="<?php echo set_value('pay_date') ?>">
                                    <?php echo form_error('pay_date') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="category"><strong>Danh mục sách<span class="text-danger">*</span></strong></label>
                                </div>
                                <div class="col-md-9">
                                    <select name="category" id="category" class="form-control">
                                        <option value="">--Chọn--</option>
                                        <option value="Kinh doanh">Kinh doanh</option>
                                        <option value="Chứng khoán">Chứng khoán</option>
                                        <option value="Kĩ năng sống">Kĩ năng sống</option>
                                        <option value="Hạnh phúc">Hạnh phúc</option>
                                    </select>
                                    <?php echo form_error('category') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 text-right ">
                        <input type="submit" name="btn-submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="submit">Xác nhận điều khoản</label>
                    <input type="checkbox">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php require 'assets/includes/footer.php' ?>