<?php

include "header.php";
$schemes = $db->select("schemes", "*");
?>
<main class="bg-grey pb-30">
    <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white" style="background-image: url(complaint1.jpg)">
        <div class="container entry-header-content">
            <h1 class="entry-title mb-50 font-weight-900">
               
            </h1>
        </div>
    </div>
    <div class="container single-content">
        <div class="entry-wraper mt-50">
            
            <form class="form-contact comment_form" action="complaint-save.php" method="post" id="commentForm">
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="mobile" id="mobile" type="number" placeholder="Mobile No"required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="address" id="address" type="text" placeholder="Address" required>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" required placeholder="Type Message Here"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="button button-contactForm">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
    <!--container-->
</main>
<?php include "footer.php";  ?>