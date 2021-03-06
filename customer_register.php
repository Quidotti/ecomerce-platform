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
            <li><a href="customer/my_account.php">My Account</a></li>
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
              <li ><a href="index.php">Home</a></li>
              <li class="active"><a href="shop.php">Shop</a></li>
              <li><a href="my_account.php">My Account</a></li>
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
                              Register
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

              <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <center>
                                <h2>Register a new account</h2>
                                <p class="text-muted">If you have any questions, feel free to <a href="contact.php">contact us </a>. Our Customer Service work <strong>27/7</strong></p>
                            </center>
                        </div>
                        <div class="panel-body">
                          
                            <form action="customer_register.php" method="post" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Your Name:</label>
                                            <input type="text" class="form-control" name="c_name" required> 
                                        </div>

                                        <div class="form-group">
                                            <label for="">Your Email: </label>
                                            <input type="text" class="form-control" name="c_email" required>
                                        </div>
                                
                                        <div class="form-group">
                                            <label for="">Your Password: </label>
                                            <input type="text" class="form-control" name="c_pass" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Your Country: </label>
                                            <input type="text" class="form-control" name="c_country" required>
                                        </div>

                                    </div>
                       
                                    
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Your City: </label>
                                                <input type="text" class="form-control" name="c_city" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Your Contact: </label>
                                                <input type="text" class="form-control" name="c_contact" required>
                                            </div>


                                            <div class="form-group">
                                                <label for="">Your Address: </label>
                                                <textarea class="form-control" name="c_address" required> </textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Profile: </label>
                                                <input type="file" class="form-control" name="c_profile" required>
                                            </div>

                                    </div>
                                    
                                    <div class="text-center">
                                        <button type="submit" name="register" class="btn btn-primary">
                                            <i class="fa fa-user-md"></i> Register
                                        </button>
                                    </div>
                            </form>
                        </div>

                        <div class="panel-footer">
                        
                        </div>
                    </div>
              </div>


