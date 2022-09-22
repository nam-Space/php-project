<?php

function construct()
{
    load_model('index');
    load('lib', 'validation_form');
}

function add_productAction()
{
    // show_array($_POST);
    global $error, $notify, $product_name, $price, $desc, $detail,$parent_id, $status;
    if (isset($_POST['btn-submit'])) {
        $error = array();
        $product_code = 'uni#'.time();
        if (empty($_POST['product_name'])) {
            $error['product_name'] = 'Không được để trống tên sản phẩm!';
        } else {
            $product_name = $_POST['product_name'];
        }
        if (empty($_POST['price'])) {
            $error['price'] = 'Không được để trống giá tiền!';
        } else {
            $price = $_POST['price'];
        }
        if (empty($_POST['desc'])) {
            $error['desc'] = 'Không được để trống mô tả ngắn!';
        } else {
            $desc = $_POST['desc'];
        }
        if (empty($_POST['detail'])) {
            $error['detail'] = 'Không được để trống chi tiết sản phẩm!';
        } else {
            $detail = $_POST['detail'];
        }
        if (empty($_POST['parent_id'])) {
            $error['parent_id'] = 'Không được để trống danh mục sản phẩm sản phẩm!';
        } else {
            $parent_id = $_POST['parent_id'];
        }
        if (empty($_POST['status'])) {
            $error['status'] = 'Không được để trống trạng thái!';
        } else {
            $status = $_POST['status'];
        }
        if (empty($error)) {
            $data = array(
                'product_name' => $product_name,
                'product_code' => $product_code,
                'price' => $price,
                'product_desc' => $desc,
                'product_detail' => $detail,
                'parent_id' => $parent_id,
                'status' => $status ,

            );
            $notify = array();
            $notify['update_success'] = "Đã thêm sản phẩm";
            db_insert('tbl_product',$data);
        }
    }
    global $error, $target_file, $notify;
    if (isset($_POST['btn-upload-thumb'])) {
        if (empty($_FILES['file']['name'])) {
            $error['file'] = "Không được để trống file ảnh";
        } else {
            // show_array($_FILES);
            $error = array();
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES['file']['name']);
            if ($_FILES['file']['size'] > 5242880) {
                $error['file'] = "Kích thước ảnh không được vượt quá 5mb";
            }
            $file_type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $file_type_allow = array('png', 'jpg', 'jpeg', 'gif');
            if (!in_array(strtolower($file_type), $file_type_allow)) {
                $error['file'] = "Chỉ cho phép upload file ảnh";
            }
            if (file_exists($target_file)) {
                $error['file'] = "File đã tồn tại trên hệ thống";
            }
            #chuyển từ bộ nhớ tạm lên server
            if (empty($error)) {
                move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                $notify['success'] = "Update ảnh thành công";
            }
        }
    }
    load_view('add_product');
}
function list_productAction()
{
    load_view('list_product');
}
function cat_productAction()
{
    load_view('cat_product');
}
