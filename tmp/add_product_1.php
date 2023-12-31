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

    <title>Add New Product</title>
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 col-md-12">

          <img src="images/banner.png" class="col-12 mb-3" alt="">

        </div><!-- end of div 12 -->
      </div><!-- end of row-->

      <div class="row">

        <div class="col-lg-4 col-md-4">
          <img src="images/left_pic.jpg" class="img-fluid col-lg-12 mb-3 d-sm-none d-md-block d-lg-block" alt="">
        </div><!-- end of div-4 left side -->

        <div class="col-lg-8 col-md-8">


          <form class="form" action="add_product_2.php"
           method="post" enctype="multipart/form-data">

            <h1 class="display-4">Add /Register New Product</h1>

            <div class="form-row align-item-left">
               <div class="form-group col-lg-12 col-md-12">

                  <label class="label mx-1" for="name">Product Title</label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control "
                     id="title" name="title" placeholder="i.e MP3 Player">

                </div>
              </div><!-- end of form group size 6-->



            </div><!--FORM ROW END HERE  -->




            <div class="form-row align-item-left">
               <div class="form-group col-lg-12 col-md-12">

                  <label class="label mx-1" for="name">Product Description (Max Characters 500)</label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe"></i>
                      </div>
                    </div>
                    <textarea class="form-control" name="description" id="description"
                     rows="4" cols="80"></textarea>

                </div>
              </div><!-- end of form group size 6-->



            </div><!--FORM ROW END HERE  -->



            <div class="form-row align-item-left">

               <div class="form-group col-lg-6 col-md-6">

                  <label class="label mx-1" for="name">Price</label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-globe"></i>
                      </div>
                    </div>
                    <input type="number" class="form-control" name="price" id="price" value="">

                </div>
              </div><!-- end of form group size 6-->


              <div class="form-group col-lg-6 col-md-6">

                 <label class="label mx-1" for="name">Picture</label>
                 <div class="input-group mx-1 mb-2 ">
                   <div class="input-group-prepend">
                     <div class="input-group-text">
                       <i class="fas fa-globe"></i>
                     </div>
                   </div>
                   <input type="file" class="form-control" name="picture"
                    id="picture" value="">

               </div>
             </div><!-- end of form group size 6-->



            </div><!--FORM ROW END HERE  -->




            <div class="form-row align-item-left">

               <div class="form-group col-lg-6 col-md-6">

                  <label class="label mx-1" for="name"></label>
                  <div class="input-group mx-1 mb-2 ">
                    <div class="input-group-prepend">

                    </div>
                    <input type="submit"
                      class="form-control btn btn-success"  name="submit" id="submit"
                      value="ADD NOW">
                      <input type="reset"
                        class="form-control btn btn-danger" name="reset" id="reset"
                        value="CANCEL">

                </div>
              </div><!-- end of form group size 6-->



            </div><!--FORM ROW END HERE  -->






          </form><!-- end of form-->

        </div><!-- end of div-8 right size -->




      </div><!-- end of row-->




    </div><!-- end of container-->

    <div class="container">
      <div class="text-center bg-light bg-dark text-light">

        <p class="py-3">All Rights Reserved &reg; &copy; <?php echo date('Y');?> N++ Studios</p>

      </div><!-- end of footer div-12 -->
    </div><!-- end of row-->




  </body>
</html>                                                                                                                                                                                                                
