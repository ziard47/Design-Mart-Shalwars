<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Boostrap CSS style sheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- attach the JS files -->
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/fontawesome-all.js">

    </script>

    <title>Invalid Login</title>
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12">

          <img src="images/banner.png" class="col-12 mb-3" alt="">

        </div><!-- end of div 12 -->
      </div><!-- end of row-->

      <div class="row">

          <div class="col-lg-5 col-md-5 offset-lg-4 offset-md-4">
            <img src="images/icons/logo-01.png" alt="">
            <h2 class="text-center text-danger">LOGIN FAILED</h2>
            <h3 class="text-center  text-danger">check username / password</h3>
            <hr>

            <form class="" action="login_2.php" method="post">

              <div class="form-row align-item-left">

                 <div class="form-group col-lg-12 col-md-12">

                    <label class="label mx-1" for="name">Username</label>
                    <div class="input-group mx-1 mb-2 ">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="email" class="form-control "
                       id="user_id" name="user_id" placeholder="use your email address">
                  </div>
                </div><!-- end of form group size 6-->



                <div class="form-group col-lg-12 col-md-12">

                   <label class="label mx-1" for="name">Password</label>
                   <div class="input-group mx-1 mb-2 ">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <i class="fas fa-lock"></i>
                       </div>
                     </div>
                     <input type="password" class="form-control "
                      id="access_code" name="access_code" placeholder="use a strong password">
                 </div>
               </div><!-- end of form group size 6-->


               <div class="form-group col-lg-12 col-md-12">

                    <input type="submit" class="col-5 btn btn-primary "
                     value="LOGIN">

                     <input type="reset" class="col-5 btn btn-warning "
                      value="CANCEL">
                </div>
              </div><!-- end of form group size 6-->



              </div><!--FORM ROW END HERE  -->


            </form>

          </div>


      </div><!-- end of row-->



    </div><!-- end of container-->





  </body>
</html>                                                                                                                                                                                                                
