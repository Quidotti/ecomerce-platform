<?php

    include ('includes/database.php');
    include ('functions/functions.php');

?>


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
            <li><a href="../customer/my_account.php">My Account</a></li>
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
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="shop.php">Shop</a></li>
              <li><a href="customer/my_account.php">My Account</a></li>
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

    <div class="container" id="slider">
      <!-- container Begin -->

      <div class="col-md-12">
        <!-- col-md-12 Begin -->

        <div class="carousel slide" id="myCarousel" data-ride="carousel">
          <!-- carousel slide Begin -->

          <ol class="carousel-indicators">
            <!-- carousel-indicators Begin -->

            <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <!-- carousel-indicators Finish -->

          <div class="carousel-inner">
           
            <?php
            
              $get_slides = "SELECT * FROM slider LIMIT 0,1";

              $run_slides = mysqli_query($conn, $get_slides);

               while($row_slides = mysqli_fetch_array($run_slides)){

                    $slide_name = $row_slides['slide_name'];

                    $slide_image = $row_slides['slide_image'];

                    echo "
                        <div class='item active'>

                        <img src='admin_area/slides_images/$slide_image'>

                        </div>
                    ";
               }
            

              $get_slides = "SELECT * FROM slider LIMIT 1,3";

              $run_slides = mysqli_query($conn, $get_slides);

               while($row_slides = mysqli_fetch_array($run_slides)){

                    $slide_name = $row_slides['slide_name'];

                    $slide_image = $row_slides['slide_image'];

                    echo "
                        <div class='item'>

                        <img src='admin_area/slides_images/$slide_image'>

                        </div>
                    ";
               }
            ?>

          </div>

          <!-- left carousel-control Begin -->
          <a href="#myCarousel" class="left carousel-control" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a><!-- left carousel-control Finish -->

          <a href="#myCarousel" class="right carousel-control" data-slide="next">
            <!-- left carousel-control Begin -->

            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a><!-- left carousel-control Finish -->
        </div>
        <!-- carousel slide Finish -->
      </div>
      <!-- col-md-12 Finish -->
    </div>
    <!-- container Finish -->


    <!-- begin advantage -->
    <div class="advantages">
      <!-- begin container -->
      <div class="container-fluid">
        <!-- begin same-height-row -->
        <div class="same-height-row">
        <!-- begin col-sm-4 -->
            <div class="col-sm-4">

              <!-- begin box same-height-->
              <div class="box same-height">

                    <!-- begin icon -->
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <!-- end icon -->

                  <h3><a href="#">We Love Our Customer </a></h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sint ipsam possimus, minus voluptatum a ratione quam placeat dolores accusamus error autem voluptates eligendi, ad.</p>

              </div>
              <!-- end box same-height -->

            </div>
            <!-- end col-sm-4 -->


            <!-- begin col-sm-4 -->
            <div class="col-sm-4">
              <!-- begin box same-height-->
              <div class="box same-height">
                    <!-- begin icon -->
                    <div class="icon">
                        <i class="fa fa-tag"></i>
                    </div>
                    <!-- end icon -->

                        <h3><a href="#">Best Prices</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sint ipsam possimus, minus voluptatum a ratione quam placeat dolores accusamus error autem voluptates eligendi, ad.</p>
              </div>
              <!-- end box same-height -->
            </div>
            <!-- end col-sm-4 -->

             <!-- begin col-sm-4 -->
            <div class="col-sm-4">
              <!-- begin box same-height-->
              <div class="box same-height">
                    <!-- begin icon -->
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <!-- end icon -->
                        <h3><a href="#">Our Product are 100% Original</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sint ipsam possimus, minus voluptatum a ratione quam placeat dolores accusamus error autem voluptates eligendi, ad.</p>
              </div>
              <!-- end box same-height -->
            </div>
            <!-- end col-sm-4 -->
        </div>
        <!-- end same-height-row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end advantage -->

    <!-- begin hot -->
    <div id="hot">
          <!-- begin box -->
          <div class="box">
            <!-- begin container -->
            <div class="container">
                <!--begin col-md-12  -->
                <div class="col-md-12">
                      <h2>Our Latest Products</h2>
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end container -->
          </div>
          <!-- end box -->
    </div>
    <!-- end hot -->

     <!-- begin content -->
<div id="content">
        <!-- begin container -->
      <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-sm-4 col-sm-6 single -->
                  <div class="col-sm-4 col-sm-6 single">

                        <?php
                            getPro();
                        
                        ?>
                  </div>
                  <!-- end col-sm-4 col-sm-6 single -->
              </div>
            <!-- end row -->
      </div>
      <!-- end container -->
</div>
<!-- end content -->
  </div>
    <?php

        require "includes/footer.php";

    ?>
<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>

</html>
