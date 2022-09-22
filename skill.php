<?php
$product = array(
    1 => array(
        'post_thumb' =>  './assets/images/bus_1.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    2 => array(
        'post_thumb' =>  './assets/images/bus_9.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    3 => array(
        'post_thumb' =>  './assets/images/bus_3.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    4 => array(
        'post_thumb' =>  './assets/images/bus_4.jpg',
        'card_header' => 'Kinh doanh online',
    ),
    5 => array(
        'post_thumb' =>  './assets/images/bus_5.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    6 => array(
        'post_thumb' =>  './assets/images/bus_6.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    7 => array(
        'post_thumb' =>  './assets/images/bus_7.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    8 => array(
        'post_thumb' =>  './assets/images/bus_11.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    9 => array(
        'post_thumb' =>  './assets/images/bus_2.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    10 => array(
        'post_thumb' =>  './assets/images/bus_10.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    11 => array(
        'post_thumb' =>  './assets/images/bus_8.jpg',
        'card_header' => 'Kinh doanh online'
    ),
    12 => array(
        'post_thumb' =>  './assets/images/bus_12.jpg',
        'card_header' => 'Kinh doanh online'
    ),
)
?>

<?php require 'assets/includes/header.php' ?>
<style>
    .buy-now {
        position: absolute;
        top: 350px;
        left: 0px;
    }

    .card:hover .buy-now {
        top: 300px;
        left: 0px;
        transition: all 0.5s;
    }

    #content {
        padding: 30px 0px;
    }

    .card-header h4 {
        font-size: 13px;
    }

    .content {
        border-right: 4px solid white;
    }

    img {
        height: 200px;
    }
</style>
<div id="wp-content">
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content">
                    <h5 class="text-light mt-3 bg-danger p-2 d-inline-block rounded">KĨ NĂNG</h5>
                    <div class="row">
                        <?php foreach ($product as $item) { ?>
                            <div class="col-md-3 col-12 my-4">
                                <div class="card">
                                    <div class="post-thumb"><img src="<?php echo $item['post_thumb']; ?>" alt="" class="card-img">
                                    </div>
                                    <div class="card-header">
                                        <h4><?php echo $item['card_header']; ?></h4>
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
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4" id="sidebar">
                    <div class="embed bg-light mt-4 p-1 rounded">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHerrinspaTrungtamchamsocsacdep%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        <div class="fb-comments" data-href="https://www.facebook.com/HerrinspaTrungtamchamsocsacdep/" data-width="350" data-numposts="6"></div>

                        <iframe class="text-danger" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FHerrinspaTrungtamchamsocsacdep%2F&width=450&layout=standard&action=like&size=large&share=true&height=35&appId" width="340" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'assets/includes/footer.php' ?>