<?php
include "header.php";
$schemes = $db->select("schemes", "*");
?>
<main class="bg-grey pb-30">
    <div class="entry-header entry-header-style-2 pb-80 pt-80 mb-50 text-white" style="background-image: url(assets/imgs/news/news-17.jpg)">
        <div class="container entry-header-content">
            <h1 class="entry-title mb-50 font-weight-900">
                Fill Your Information
            </h1>
        </div>
    </div>
    <div class="container single-content">
        <div class="entry-wraper mt-50">

            <form class="form-contact comment_form" action="signup-save.php" method="post" id="commentForm">
                <div class="row">
                    <div class="col-md-3 col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" autofocus   name="first" placeholder="First Name" required >
                        </div>
                    </div>
                    <div class="col-md-3 col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="middle" placeholder="Middle Name" >
                        </div>
                    </div>
                    <div class="col-md-3 col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="last" placeholder="Last Name" required>
                        </div>
                    </div>

                    <div style="margin-top: 15px" class="col-md-3 col-md-4">
                        <div  class="form-group">
                            <label style="margin-left: 0px" for="css">Gender</label>
                           
                           <input style="margin-left: 10px" type="radio" id="male" name="gender" value="male">  
                            <label style="margin-right: 10px" for="">Male</label>
                            <input style="margin-left: 10px" type="radio" id="html" name="gender" value="female">
                            <label style="margin-right: 10px" for="css">Female</label>
                            
                        </div>
                    </div>
                    

                       <div class="col-md-3 col-md-4">
                        <div class="form-group">
                            <input type="date" class="form-control" name="birth_date" placeholder="Birthdate" required>
                        </div>
                    </div>
                    
                     <div class="col-md-3 col-md-4">
                        <div class="form-group">
                            <input type="Category" class="form-control" name="category" placeholder="Category" required>
                        </div>
                    </div>
            


                       <div class="col-12">
                        <div class="form-group">
                            <input type="number" class="form-control" maxlength="12" name="addhar"  id=""  placeholder="Addhar No." required>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-group">
                            <input type="number" class="form-control" name="mobile" maxlength="10" autofocus id="mobile"  placeholder="Mobile NO" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1" id="pass"  placeholder="Password" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2" id="pass2"  placeholder="Password" required>
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
<?php include "footer.php"; ?>