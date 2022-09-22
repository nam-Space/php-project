<?php require 'assets/includes/header.php' ?>
<div id="slider" class="my-1">
    <div id="home-slide" class="carousel slide carousel-fade">

        <ol class="carousel-indicators">
            <li data-target="#home-slide" class="active" data-slide-to="0"></li>
            <li data-target="#home-slide" data-slide-to="1"></li>
            <li data-target="#home-slide" data-slide-to="2"></li>
            <li data-target="#home-slide" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/bg-slide_4.jpg" alt="">
                <div class="carousel-caption">
                    <h2>1. Cuộc đời ta thay đổi theo hai cách: Qua những người ta gặp và qua những cuốn sách ta
                        đọc.</h2>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/bg-slide_2.jpg" alt="">
                <div class="carousel-caption">
                    <h2>2. Nếu bạn chỉ đọc những cuốn sách mà tất cả mọi
                        người đều đọc, bạn chỉ có thể nghĩ tới điều tất cả mọi người đều nghĩ tới.</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/bg-slide_3.jpg" alt="">
                <div class="carousel-caption">
                    <h2>3. Đọc sách hay cũng giống như trò chuyện với các bộ óc tuyệt vời nhất của những thế kỷ
                        đã trôi qua.</h2>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/bg-slide_1.jpg" alt="">
                <div class="carousel-caption">
                    <h2>4. Cuộc đời ta thay đổi theo hai cách: Qua những người ta gặp và qua những cuốn sách ta
                        đọc.</h2>

                </div>
            </div>
        </div>
        <div class="carousel-item">
            <a href="https://www.facebook.com/shopcongnghe159/"> <img src="./assets/images/bg-slide_1.jpg" alt="" class="w-100 d-block"></a>
            <div class="carousel-caption">
                <h2>4. Đằng sau sự thành công của một người đàn ông, là hình dáng của một người phụ nữ. Còn
                    đằng sau sự thành công của bất kì ai là ít nhất một cuốn sách, hay cả một giá sách.</h2>

            </div>
        </div>
        <!-- end-carousel-inner -->
        <a href="#home-slide" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#home-slide" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        <!-- end carousel-control -->
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#home-slide').carousel({
                interval: 4000,
                ride: "carousel"
            })
        })
    </script>
</div>
<div id="wp-content">
    <div class="container mb-1">
        <div class="row">
            <div class="col-md-8 p-4" id="content">
                <h3 class="bg-danger text-light d-inline-block mt-3 p-1 rounded">Trending 2022</h3>
                <div class="row">
                    <div class="col-md-6 col-12 mt-4">
                        <div class="card">
                            <div class="post-thumb"><img src="https://www.reader.com.vn/uploads/images/2019/10/30/19/dac-nhan-tam_600x865.png" alt="" class="card-img">
                            </div>
                            <div class="card-header">
                                <h4>Nghĩ giàu làm giàu</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-title mb-4">
                                    <a href=""><small>Xem thêm</small></a>
                                </div>
                                <a href="./form-register.php" class="buy-now bg-success text-light font-weight-bold text-center py-2 w-100 d-block card-link">Mượn
                                    ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-4">
                        <div class="card">
                            <div class="post-thumb"><img src="https://www.reader.com.vn/uploads/images/2019/10/30/19/nhung-bai-hov-cuoc-song_600x926.jpg" alt="" class="card-img">
                            </div>
                            <div class="card-header">
                                <h4>Dạy con làm giàu</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-title mb-4">
                                    <a href=""><small>Xem thêm</small></a>
                                </div>
                                <a href="./form-register.php" class="buy-now bg-success text-light font-weight-bold text-center py-2 w-100 d-block card-link">Mượn
                                    ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-4">
                        <div class="card">
                            <div class="post-thumb"><img src="https://www.reader.com.vn/uploads/images/2019/10/30/19/dieu-ky-dieu-cua-thai-do-song_600x954.gif" alt="" class="card-img">
                            </div>
                            <div class="card-header">
                                <h4>Đắc nhân tâm</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-title mb-4">
                                    <a href=""><small>Xem thêm</small></a>
                                </div>
                                <a href="./form-register.php" class="buy-now bg-success text-light font-weight-bold text-center py-2 w-100 d-block card-link">Mượn
                                    ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-4">
                        <div class="card">
                            <div class="post-thumb"><img src="https://www.reader.com.vn/uploads/images/2019/10/30/19/sach-nha-gia-kim_600x962.jpg" alt="" class="card-img">
                            </div>
                            <div class="card-header">
                                <h4>Người nam châm</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-title mb-4">
                                    <a href=""><small>Xem thêm</small></a>
                                </div>
                                <a href="form-register.php" class="buy-now bg-success text-light font-weight-bold text-center py-2 w-100 d-block card-link">Mượn
                                    ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="sidebar">
                <h4 class="col-md-12 bg-success text-light p-2 rounded">Những tác dụng tuyệt vời của việc đọc
                    sách mỗi ngày.</h4>
                <iframe width="100%" height="200px" class="mb-5" src="https://www.youtube.com/embed/n6QJleJ1Yf4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <form action="sendmail.php" class="mt-2 border p-2" method="POST">
                    <div class="form-group">
                        <h3 class="text-light text-center"><b class="text-danger bg-light rounded">Tặng miễn
                                phí 100%</b>
                            <p class="text-center bg-danger mt-2 rounded"> Ebook "Người nam châm" trị giá 120K
                            </p>
                        </h3>
                        <label for="fullname"><strong class="text-light">Họ và tên</strong></label>
                        <input type="text" class="form-control text-primary font-weight-bold" placeholder="Họ và tên" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="email"><strong class="text-light">Email</strong></label>
                        <input type="email" class="form-control text-primary font-weight-bold" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Nhận ngay" name="btn-submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'assets/includes/footer.php' ;?>
