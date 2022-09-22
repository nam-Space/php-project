<?php get_header()?>
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
    <?php get_sidebar()?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm sản phẩm</h3>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <?php notify('update_success')?>
                    <form method="POST" enctype="multipart/form-data">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="product_name" id="product-name" value="<?php echo set_value('product_name')?>">
                        <?php echo form_error('product_name')?>
                        <label for="price">Giá sản phẩm</label>
                        <input type="text" name="price" id="price" value="<?php echo set_value('price')?>">
                        <?php echo form_error('price')?>
                        <label for="desc">Mô tả ngắn</label>
                        <textarea name="desc" id="desc"><?php echo set_value('desc')?></textarea>
                        <?php echo form_error('desc')?>
                        <label for="detail">Chi tiết</label>
                        <textarea name="detail" id="detail" class="ckeditor"><?php echo set_value('desc')?></textarea>
                        <?php echo form_error('detail')?>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="upload-thumb" multiple>
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb" id="btn-submit" accept="image/gif,image/jpg,image/png,image/jpeg">
                            <img  id="image" width="" height="" src="<?php global $target_file; if(empty($target_file)){ echo 'public/images/img-thumb.png';}else{ echo $target_file ; };?>">
                            <?php echo form_error('file')?>
                            <?php echo notify('success')?>
                        </div>
                        <label>Danh mục sản phẩm</label>
                       <?php global $parent_id; ?>
                        <select name="parent_id">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="3"  <?php if($parent_id == '3'){echo "selected";}?>>Cây</option>
                            <option value="6" <?php if($parent_id == '6'){echo "selected";}?>>CPU</option>
                            <option value="4" <?php if($parent_id == '4'){echo "selected";}?>>Màn hình</option>
                            <option value="5" <?php if($parent_id == '5'){echo "selected";}?>>Card màn hình</option>
                            <option value="7" <?php if($parent_id == '7'){echo "selected";}?>>Cả bộ</option>
                        </select>
                        <?php echo form_error('parent_id')?>
                        <label>Trạng thái</label>
                        <?php global $status; ?>
                        <select name="status">
                            <option value="">-- Chọn danh mục --</option>
                            <option value="1" <?php if($status == '1'){echo "selected";}?>>Chờ phê duyệt</option>
                            <option value="2" <?php if($status == '2'){echo "selected";}?>>Đăng công khai</option>
                        </select>
                        <?php echo form_error('status')?>
                        <button type="submit" name="btn-submit" id="btn-submit" class="img-rounded">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer()?>