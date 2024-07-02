<?php
include "header.php";

//$schemes = $db->select("schemes", "*", ['cat_id' => $cat_id]);

$date=date("Y-m-d");
//$schemes = $db->query("SELECT * FROM schemes where is_deleted=0 and  $date <= exp_date   ORDER BY id DESC ");
$schemes = $db->query("SELECT * FROM schemes where is_deleted=0 and  exp_date >= CURDATE()   ORDER BY id DESC ");
//SELECT * FROM schemes WHERE exp_date >= CURDATE()

//$latest_news = $db->query('SELECT * FROM schemes  ORDER BY id DESC ');
?>

<main>
    <!--archive header-->
    <div class="archive-header pt-50">
        <div class="container">
            <h2 class="font-weight-900">Yojna</h2>

            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>
    </div>

    <div class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-module-2">

                        <div class="loop-list loop-list-style-1">
                            <div class="row">
                                <?php foreach ($schemes as $scheme) {  ?>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" >
                                                
                                                <a class="img-link" href="scheme.php?id=<?php echo $scheme['id']; ?>"><img src="<?php echo $scheme['image']; ?>" height="100%" width="100%" style=" background-size: cover;" ></a>
                                                
                                            </div>
                                            <div class="post-content p-30">

                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="scheme.php?id=<?php echo $scheme['id']; ?>"><?php echo $scheme['title']; ?></a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p><?php echo mb_strimwidth($scheme['data'], 0, 250); ?>
                                                          <h6>Expire Date <?php echo $scheme['exp_date']?></h6>
                                                        </p>
                                                          <?php
                                                            if (strlen($scheme['data']) > 250) { ?>
                                                            <b><a href='scheme.php?id=<?php echo $scheme['id']; ?>'><h5 style="color:blue;">readmore...</h5></a></b>
                                                            <?php } ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php }  ?>

                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</main>

<?php
include "footer.php";
?>