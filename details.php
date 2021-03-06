<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <title>ecommerce||platform</title>
     <link rel="stylesheet" href="styles/bootstrap-337.min.css" />
     <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css" />
     <link rel="stylesheet" href="styles/style.css" />
</head>

<body>
     <div id="top">
          <!-- Top Begin -->

          <div class="container">
               <!-- container Begin -->

               <div class="col-md-6 offer">
                    <!-- col-md-6 offer Begin -->

                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>
               </div>
               <!-- col-md-6 offer Finish -->

               <!-- col-md-6 Begin -->
               <div class="col-md-6">
                    <ul class="menu">
                         <!-- cmenu Begin -->
                         <li><a href="customer_register.php"><i class="fa fa-user"></i> Register</a></li>
                         <li><a href="checkout.php">My Account</a></li>
                         <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                         <li><a href="checkout.php">Login</a></li>
                    </ul>
                    <!-- menu Finish -->
               </div>
               <!-- col-md-6 Finish -->
          </div>
          <!-- container Finish -->
     </div>
     <!-- Top Finish -->

     <div id="navbar" class="navbar navbar-default">
          <!-- navbar navbar-default Begin -->

          <div class="container">
               <!-- container Begin -->

               <div class="navbar-header">
                    <!-- navbar-header Begin -->

                    <a href="index.php" class="navbar-brand home">
                         <!-- navbar-brand home Begin -->

                         <img src="images/ecom-store-logo.png" alt="ecommerce Logo" class="hidden-xs" />
                         <img src="images/ecom-store-logo-mobile.png" alt="ecommerce Logo Mobile" class="visible-xs" />
                    </a><!-- navbar-brand home Finish -->

                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                         <span class="sr-only">Toggle Navigation</span>

                         <i class="fa fa-align-justify"></i>
                    </button>

                    <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                         <span class="sr-only">Toggle Search</span>

                         <i class="fa fa-search"></i>
                    </button>
               </div>
               <!-- navbar-header Finish -->

               <div class="navbar-collapse collapse" id="navigation">
                    <!-- navbar-collapse collapse Begin -->

                    <div class="padding-nav">
                         <!-- padding-nav Begin -->

                         <ul class="nav navbar-nav left">
                              <!-- nav navbar-nav left Begin -->
                              <li><a href="index.php">Home</a></li>
                              <li class="active"><a href="shop.php">Shop</a></li>
                              <li><a href="checkout.php">My Account</a></li>
                              <li><a href="cart.php">Shopping Cart</a></li>
                              <li><a href="contact.php">Contact Us</a></li>
                         </ul>
                         <!-- nav navbar-nav left Finish -->
                    </div>
                    <!-- padding-nav Finish -->

                    <a href="cart.php" class="btn navbar-btn btn-primary right">
                         <!-- btn navbar-btn btn-primary Begin -->

                         <i class="fa fa-shopping-cart"></i>

                         <span>4 Items In Your Cart</span>
                    </a><!-- btn navbar-btn btn-primary Finish -->

                    <div class="navbar-collapse collapse right">
                         <!-- navbar-collapse collapse right Begin -->

                         <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                              <!-- btn btn-primary navbar-btn Begin -->

                              <span class="sr-only">Toggle Search</span>

                              <i class="fa fa-search"></i>
                         </button><!-- btn btn-primary navbar-btn Finish -->
                    </div>
                    <!-- navbar-collapse collapse right Finish -->

                    <div class="collapse clearfix" id="search">
                         <!-- collapse clearfix Begin -->

                         <form method="get" action="results.php" class="navbar-form">
                              <!-- navbar-form Begin -->

                              <div class="input-group">
                                   <!-- input-group Begin -->

                                   <input type="text" class="form-control" placeholder="Search" name="user_query" required />

                                   <span class="input-group-btn">
                                        <!-- input-group-btn Begin -->

                                        <button type="submit" name="search" value="Search" class="btn btn-primary">
                                             <!-- btn btn-primary Begin -->

                                             <i class="fa fa-search"></i>
                                        </button><!-- btn btn-primary Finish -->
                                   </span><!-- input-group-btn Finish -->
                              </div>
                              <!-- input-group Finish -->
                         </form>
                         <!-- navbar-form Finish -->
                    </div>
                    <!-- collapse clearfix Finish -->
               </div>
               <!-- navbar-collapse collapse Finish -->
          </div>
          <!-- container Finish -->
     </div>
     <!-- navbar navbar-default Finish -->

     <!-- begin content -->
     <div id="content">
          <!-- begin container -->
          <div class="container">
               <!-- begin col-md-12 -->
               <div class="col-md-12">
                    <ul class="breadcrumb">
                         <li><a href="index.php">Home</a></li>
                         <li>
                              Shop
                         </li>
                    </ul>
               </div>
               <!-- end col-md-12 -->

               <!-- begin col-md-3 -->
               <div class="col-md-3">

                    <?php
                    require "includes/sidebar.php";
                    ?>

               </div>
               <!-- end col-md-3 -->

               <!-- begin col-md-9 -->
               <div class="col-md-9">

                    <!-- begin productMain-->
                    <div id="productMain" class="row">
                         <!-- begin col-sm-6 -->
                         <div class="col-sm-6">
                              <!-- begin mainImage -->
                              <div id="mainImage">
                                   <!-- begn carousel slide -->
                                   <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                        <!-- begin carousel-indicators -->
                                        <ol class="carousel-indicators">
                                             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                             <li data-target="#myCarousel" data-slide-to="1"></li>
                                             <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                        <!-- begin carousel-inner -->
                                        <div class="carousel-inner">
                                             <div class="item active">
                                                  <center><img src="admin_area/product_images/product2.jpeg" alt="product 1a"></center>
                                             </div>

                                             <div class="item">
                                                  <center><img src="admin_area/product_images/product2.jpeg" alt="product 1a"></center>
                                             </div>

                                             <div class="item">
                                                  <center><img src="admin_area/product_images/product2.jpeg" alt="product 1a"></center>
                                             </div>

                                        </div>
                                        <!-- end carousel-inner -->

                                        <!-- begin left carousel-control -->
                                        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                             <span class="glyphicon glyphicon-chevron-left"></span>
                                             <span class="sr-only">Previous</span>
                                        </a>
                                        <!-- end left carousel-control -->

                                        <!-- begin right carousel-control -->
                                        <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                             <span class="glyphicon glyphicon-chevron-right"></span>
                                             <span class="sr-only">Next</span>
                                        </a>
                                        <!-- end right carousel-control -->
                                   </div>
                                   <!-- end carousel slide -->
                              </div>
                              <!-- end mainImage -->
                         </div>
                         <!-- end col-sm-6 -->

                         <!-- begin col-md-6 -->
                         <div class="col-sm-6">
                              <!-- begin box -->
                              <div class="box">
                                   <!-- begin text-center -->
                                   <h1 class="text-center">
                                        clintinFASHION Polo Shirt for Men
                                   </h1>
                                   <!-- end text-center -->

                                   <!-- begin form-horizontal -->
                                   <form action="details.php" class="form-horizontal" method="post">
                                        <!-- begin form-group -->
                                        <div class="form-group">
                                             <!-- begin col-md-5 control-label -->
                                             <label for="" class="col-md-5 control-label">Products Quantity</label>
                                             <!-- end col-md-5 control-label -->

                                             <!-- begin col-md-7 -->
                                             <div class="col-md-7">
                                                  <select name="product_qty" id="" class="form-control">
                                                       <option class="disabled">Select Product Quantity</option>
                                                       <option>1</option>
                                                       <option>2</option>
                                                       <option>3</option>
                                                       <option>4</option>
                                                       <option>5</option>
                                                  </select>
                                             </div>
                                             <!-- end col-md-7 -->
                                        </div>
                                        <!-- end form-group -->

                                        <!-- begin form-group -->
                                        <div class="form-group">
                                             <!-- col-md-5 control-label -->
                                             <label class="col-md-5 control-label">Product Size</label>
                                             <!-- end col-md-7 -->
                                             <div class="col-md-7">
                                                  <!-- begin form-control -->
                                                  <select name="product_size" id="" class="form-control">
                                                       <option class="disabled">Select Product Size Here</option>
                                                       <option>Small</option>
                                                       <option>Medium</option>
                                                       <option>Large</option>
                                                       <option>X-Large</option>
                                                  </select>
                                                  <!-- end form-control -->
                                             </div>
                                             <!-- end col-md-5 control-label -->
                                        </div>
                                        <!-- end form-group -->

                                        <p class="price">$50</p>
                                        <p class="text-center buttons">
                                             <button class="btn btn-primary i fa fa-shopping-cart"> Add To Cart</button>
                                        </p>
                                   </form>
                                   <!-- end form-horizontal -->
                              </div>
                              <!-- end box -->
                              <div class="row" id="thumbs">
                                   <div class="col-sm-4">
                                        <a href="" class="thumb">
                                             <img class="img-responsive" src="admin_area/product_images/product1.jpeg" alt="product1 thumb">
                                        </a>
                                   </div>

                                   <div class="col-sm-4">
                                        <a href="" class="thumb">
                                             <img class="img-responsive" src="admin_area/product_images/product1.jpeg" alt="product1 thumb">
                                        </a>
                                   </div>

                                   <div class="col-sm-4">
                                        <a href="" class="thumb">
                                             <img class="img-responsive" src="admin_area/product_images/product1.jpeg" alt="product1 thumb">
                                        </a>
                                   </div>

                              </div>

                         </div>
                         <!-- end col-md-6  -->
                    </div>
                    <!-- end productMain & row-->
                    <div class="box" id="details">
                         <h4>Product Details</h4>

                         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, sed? Culpa, magnam velit illo dolor incidunt non quos aliquid esse inventore vitae nulla ducimus fugiat natus iusto optio molestiae repellendus.</p>

                         <h4>Size</h4>
                         <ul>
                              <li>Small</li>
                              <li>Medium</li>
                              <li>Large</li>
                              <li>X-Large</li>
                         </ul>

                         <hr>
                    </div>

                    <!-- begin same-height-row -->
                    <div id="same-height-row">
                         <!-- begin col-md-3 col-md-6  -->
                         <div class="col-md-3 col-md-6">
                              <!-- begin box same-height headline -->
                              <div class="box same-height headline">
                                   <h3 class="text-center">Products you may like</h3>
                              </div>
                              <!-- end box same-height headline -->
                         </div>
                         <!-- end col-md-3 col-md-6 -->

                         <!-- begin col-md-3 col-md-6 center-responsive -->
                         <div class="col-md-3 col-md-6 center-responsive">
                              <div class="product same-height">
                                   <a href="details.php">
                                        <img class="img-responsive" src="admin_area/product_images/product3.jpeg" alt="product 3a">

                                   </a>

                                   <div class="text">
                                        <h3> <a href="details.php">Beautful Top for Women</a></h3>
                                        <p class="price">$40</p>
                                   </div>
                              </div>
                         </div>
                         <!-- end col-md-3 col-md-6 center-responsive -->

                         <!-- begin col-md-3 col-md-6 center-responsive -->
                         <div class="col-md-3 col-md-6 center-responsive">
                              <div class="product same-height">
                                   <a href="details.php">
                                        <img class="img-responsive" src="admin_area/product_images/product3.jpeg" alt="product 3a">

                                   </a>

                                   <div class="text">
                                        <h3> <a href="details.php">Beautful Top for Women</a></h3>
                                        <p class="price">$40</p>
                                   </div>
                              </div>
                         </div>
                         <!-- end col-md-3 col-md-6 center-responsive -->

                         <!-- begin col-md-3 col-md-6 center-responsive -->
                         <div class="col-md-3 col-md-6 center-responsive">
                              <div class="product same-height">
                                   <a href="details.php">
                                        <img class="img-responsive" src="admin_area/product_images/product3.jpeg" alt="product 3a">

                                   </a>

                                   <div class="text">
                                        <h3> <a href="details.php">Beautful Top for Women</a></h3>
                                        <p class="price">$40</p>
                                   </div>
                              </div>
                         </div>
                         <!-- end col-md-3 col-md-6 center-responsive -->
                    </div>
                    <!-- end same-height-row -->
               </div>
               <!-- end col-md-9 -->

          </div>
          <!-- end container -->

     </div>
     <!-- end content -->


     <?php
     require "includes/footer.php";
     ?>


     <script src="js/jquery-331.min.js"></script>
     <script src="js/bootstrap-337.min.js"></script>
</body>

</html>