<?php get_header() ?>
<div id="main-content-wp" class="info-account-page">
    <div class="wrap clearfix">
        <?php get_sidebar('users') ?>
        <div id="content" class="fl-right">
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="section" id="title-page">
                        <div class="clearfix">
                            <h3 id="index" class="fl-left">Cập nhật ảnh đại diện</h3>
                        </div>
                    </div>
                    <form action="" method="POST">
                    <div class="group-form">
                        <textarea name="avt" id="" cols="30" rows="10" placeholder="Gắn link địa chỉ ảnh vào đây"></textarea>
                    </div>
                    <br>
                    <br>
                    <hr>
                    <?php if (empty(notify('update_success'))) { ?>
                            <button type="submit" name="btn-submit" id="btn-submit" class="img-rounded">Cập nhật</button>
                        <?php } else {
                            echo notify('update_success');
                        }?>
                    </form>
                    <?php echo form_error('avt')?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>