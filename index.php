<?php
include 'header.php';
$slides = $db->select("slides", "*", ['LIMIT' => [0, 5]]);
//$latest_3_news = $db->select("schemes", "*",['LIMIT' => [0,3]],[ "ORDER"=>['id'=>'DESC']]);

$latest_3_news = $db->query('SELECT * FROM schemes where is_deleted=0 ORDER BY id DESC  limit 3 OFFSET 0');
$news_4to7 = $db->query('SELECT * FROM schemes where is_deleted=0  ORDER BY id DESC  limit 4 OFFSET 3');
$news_8to12 = $db->query('SELECT * FROM schemes   where is_deleted=0 ORDER BY id DESC  limit 4 OFFSET 7');
//$slides=$db->query('SELECT TOP 3 * FROM slides');
//$latest_news = $db->query('SELECT * FROM schemes  ORDER BY id DESC');
//$slides=$db->select("slides", "*", ["ORDER" => "DESC"],['LIMIT'=>[0,5]]);
//$database->select("account", "*", ["ORDER" => ["id" => "DESC",]]);
?>
<!-- Start Main content -->
<main>
    <div class="featured-slider-2">
        <div class="featured-slider-2-items">
            <?php
            foreach ($slides as $slide) {
                ?>
                <div class="slider-single">
                    <div class="post-thumb position-relative">
                        <div class="thumb-overlay position-relative" style="background-image: url('<?php echo $slide['image']; ?> '); background-size: cover; background-repeat: no-repeat; width='100%'">

                            <div class="post-content-overlay">
                                <div class="container">

                                    <h1 class="post-title mb-20 font-weight-900 text-white">
                                        <?php echo $slide['title']; ?>
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="container position-relative">
            <div class="arrow-cover color-white"></div>
            <div class="featured-slider-2-nav-cover">
                <div class="featured-slider-2-nav">
                    <?php
                    foreach ($slides as $slide) {
                        ?>
                        <div class="slider-post-thumb mr-15 mt-20 position-relative">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5">
                                    <img class="border-radius-5" src="<?php echo $slide['image']; ?>" alt="">
                                </div>
                                <div class="post-content media-body text-white">
                                    <h5 class="post-title mb-15 text-limit-2-row"><?php echo $slide['title']; ?></h5>

                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End feature -->
    <div class="container">
        <div class="hot-tags pt-30 pb-30 font-small align-self-center">
            <div class="widget-header-3">
                <div class="row align-self-center">
                    <div class="col-md-4 align-self-center">
                        <h5 class="widget-title"> New Yojna</h5>
                    </div>

                </div>
            </div>
        </div>
        <div class="loop-grid mb-30">
            <div class="row">
                <div class="col-lg-8 mb-30">
                    <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow fadeInUp animated">
                        <div class="arrow-cover"></div>
                        <div class="slide-fade">
                            <?php
                            foreach ($latest_3_news as $news) {
                                ?>
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay img-hover-slide position-relative" style="background-image: url('<?php echo $news['image']; ?>'); background-size: cover;">
                                        <a class="img-link" href="scheme.php?id=<?php echo $news['id']; ?>"></a>
                                        <span class="top-left-icon bg-warning"><i class="elegant-icon icon_star_alt"></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">

                                            <h3 class="post-title font-weight-900 mb-20">
                                                <a class="text-white" href="scheme.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
                                            </h3>

                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <?php foreach ($news_4to7 as $news) { ?>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url('<?php echo $news['image']; ?>'); background-size: cover;">
                                <a class="img-link" href="scheme.php?id=<?php echo $news['id']; ?>"></a>
                            </div>
                            <div class="post-content p-30">

                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="scheme.php?id=<?php echo $news['id']; ?>"><?php echo $news['title']; ?></a>
                                    </h5
                                    <h6 >Expiry date <?php echo $news['exp_date']; ?></h6>


                                </div>
                            </div>
                        </div>
                    </article>
                <?php } ?>
                

            </div>
        </div>
    </div>
    
    <div class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post-module-2">
                        <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                            <!--<h5 class="mt-5 mb-30"><a class="btn bg-primary text-white" href="yojna.php">All Yojna</a></h5>-->
                        </div>
                        <h5 class="mt-5 mb-30"><a class="btn bg-primary text-white" href="yojna.php">All Yojna</a></h5>

                    </div>


                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main content -->


<?php
include 'footer.php';
?>