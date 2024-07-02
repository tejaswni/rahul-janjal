<?php
include 'header.php';
$id = $_REQUEST['id'];
$scheme = $db->select("schemes", "*", ['id' => $id])[0];


$latest_news = $db->query('SELECT * FROM schemes  ORDER BY id DESC limit 3');
?>
<main class="bg-grey pb-30">

    <div class="container single-content">
        <div class="entry-header pt-80 pb-30 mb-20">
            <div class="row">
                <div class="col-md-6 mb-md-0 mb-sm-3">
                    <figure class="mb-0 mt-lg-0 mt-3 border-radius-5">
                        <img class=" border-radius-5" src="<?php echo $scheme['image']; ?>" alt="">
                    </figure>
					
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="post-content">
                        
                        <h1 class="entry-title mb-30 font-weight-900">
                        <?php echo $scheme['title']; ?>
                        </h1>
                        <h6>Expiry Date <?php echo $scheme['exp_date'];?></h6><br>
			 <?php if(!isset($user)){?>
                                                <button class="btn bg-primary text-white" data-toggle="modal" data-target="#exampleModal">Apply Here</button>

                             <!--<li class="list-inline-item">  <button type="button" class="btn btn-default btn-lg"  data-toggle="modal" data-target="#exampleModal">Login</button></li>-->
                            <?php }else{?>
                             <a href="request-save.php?scheme_id=<?php echo $scheme['id'];?>&&user_id=<?php echo $user['user_id'];?>" ><button  class="btn bg-primary text-white" >Apply Here</button></a>

                            <?php } 
                            ?>		
						
                    </div>
                </div>

            </div>
        </div>
        <!--end single header-->
        <!--figure-->
        <article class="entry-wraper mb-50">
            <div class="excerpt mb-30">
            <?php echo $scheme['data']; ?>
            </div>
            
        </article>
    </div>
    <!--container-->
</main>
<?php include 'footer.php'; ?>