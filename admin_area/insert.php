
     <?php
     include("includes/database.php");
     include('insertconfig.php');

     ?>
<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/bootstrap-337.min.css" />
          <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css" />
          <title>Insert Product</title>
     </head> 
<body>
<!-- begin row -->
<div class="row">
     <div class="col-lg-12">
          <ol class="breadcrumb">
               <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard / Insert Product
               </li>
          </ol>
     </div>
</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
     <div class="col-lg-12">
          <!-- begin Panel -->
          <div class="panel panel-defualt">
               <div class="panel-heading">
                    <h3 class="panel-title">
                         <i class="fa fa-money fa-fw"></i> Insert Product
                    </h3>
               </div>

               <div class="panel-body">
                         <form method="post" class="form-horizontal" enctype="multipart/form-data">
                              <div class="form-group">
                                   <label class="col-md-3 control-label">Product Title</label>
                    
                                   <div class="col-md-6">
                                        <input type="text" name="product_title" class="form-control" required>
                                   </div>
                              </div>


                              <div class="form-group">
                                   <label class="col-md-3 control-label">Product Category</label>
                                   <div class="col-md-6">
                                        <select name="product_cat"class="form-control">

                                        <option class="disabled">Select a Category Product</option>

                                                  <?php
                                                       $get_p_cats = "SELECT * FROM product_categories";
                                                       $run_p_cats = mysqli_query($conn, $get_p_cats);

                                                            while($row_p_cats = mysqli_fetch_array($run_p_cats)){

                                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                                            $p_cat_title = $row_p_cats['p_cat_title'];

                                                            echo "
                                                            <option value = '$p_cat_id'> $p_cat_title </option>
                                                                 ";
                                                       }
                                                  ?>

                                        </select>
                                   </div>
                              </div>


                              <div class="form-group">
                                   <label class="col-md-3 control-label">Category</label>
                                   <div class="col-md-6">

                                        <select name="cat"class="form-control">
                                         <option>Select a Category</option>
                                             <?php
                                                  $get_cats = "SELECT * FROM categories";
                                                  $run_cats = mysqli_query($conn, $get_cats);

                                                  while ( $row_cats = mysqli_fetch_assoc($run_cats)) {
                                                       
                                                       $cat_id = $row_cats['cat_id'];
                                                       $cat_title = $row_cats['cat_title'];

                                                       echo "
                                                            <option value='$cat_id'> $cat_title </option>
                                                            ";
                                                  }
                                             ?>
                                        </select>
                                   </div>
                              </div>


                               <div class="form-group">
                                   <label class="col-md-3 control-label">Product Image1</label>
                                   <div class="col-md-6">
                                        <input type="file" name="product_img1" class="form-control" required>
                                   </div>
                              </div>


                               <div class="form-group">
                                   <label class="col-md-3 control-label">Product Image2</label>
                                   <div class="col-md-6">
                                        <input type="file" name="product_img2" class="form-control">
                                   </div>
                              </div>

                               <div class="form-group">
                                   <label class="col-md-3 control-label">Product Image3</label>
                                   <div class="col-md-6">
                                        <input type="file" name="product_img3" class="form-control">
                                   </div>
                              </div>

                              <div class="form-group">
                                   <label class="col-md-3 control-label">Product Price</label>
                                   <div class="col-md-6">
                                        <input type="text" name="product_price" class="form-control" required>
                                   </div>
                              </div>

                               <div class="form-group">
                                   <label class="col-md-3 control-label">Product Keywords</label>
                                   <div class="col-md-6">
                                        <input type="text" name="product_keywords" class="form-control" required>
                                   </div>
                              </div>

                               <div class="form-group">
                                   <label class="col-md-3 control-label">Product Desc.</label>
                                   <div class="col-md-6">
                                        <textarea name="product_desc" id="" cols="78" rows="8"></textarea>
                                   </div>
                              </div>

                             <div class="form-group">
                              <label class="col-md-3 control-label"></label>
                                   <div class="col-md-6">
                                         <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
                                   </div>
                              </div>
                    </form>
               </div>
          </div>
          <!-- end panel -->
     </div>
</div>
<!-- end row -->
     <script src="js/jquery-331.min.js"></script>
     <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
