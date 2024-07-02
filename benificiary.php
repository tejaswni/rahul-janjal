<?php
include 'header.php';

$benificiary = $db->select('request', '*',['is_verified' =>1]);
?>
<main>

    <div class="container">
        
        <div class="loop-grid mb-30">
            <div class="row">
                
                
            </div>
        </div>
    </div>
    <div class="bg-grey pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    
                    <div class="post-module-3">
                        <div class="widget-header-1 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Benificiary List</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                <div class="row mb-40 list-style-2">
                                    
                                    <?php
                                    
                                    foreach($benificiary as $benificiary) {
                                       // $category = $db->select('categories', '*', ['id' => $id])[0];
                                        $scheme = $db->select('schemes', '*',['id' =>$benificiary['scheme_id']])[0];
                                        $user = $db->select('users', '*',['user_id' =>$benificiary['user_id']])[0];
                                        
                                    ?>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="#"><span class="post-cat text-primary"><?php echo $scheme['title'];  ?></span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="#"><?php echo $user['first'];  ?>  <?php echo $user['last'];  ?></a>
                                                <span class="post-format-icon"><i class="elegant-icon icon_check_alt2"></i></span>
                                            </h5>
                                            <hr>
                                            
                                        </div>
                                    </div>
                                    
                                    <?php   
                                    }
                                    ?>
                                </div>
                            </article>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>
