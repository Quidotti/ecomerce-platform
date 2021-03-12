<?php
     $db = mysqli_connect(
          "localhost", 
          "root", 
          "zindexallowcoding", 
          "ecom_plaform"
     );
     function getPro(){

          global $db;
          
          $getProduct = "SELECT * FROM products order by 1 DESC LIMIT 0,1";
          $runProduct = mysqli_query($db, $getProduct);

          while ($rowCount = mysqli_fetch_array($runProduct)) {

                    $pro_id = $rowCount['product_id'];
                    $pro_title = $rowCount['product_title'];
                    $pro_price = $rowCount['product_price'];
                    $pro_img1 = $rowCount['product_img1'];

                    echo "
                         <div class='col-md-4 col-sm-6 single'>
                              <div class='product'>
                                   <a href='details.php?$pro_id=$pro_id'> 
                                        <img class='img-responsive' src='admin_area/product_images/$pro_img1' atl='product 1>
                                   </a>
                                   <div class='text'>
                                             <h3>                                          
                                                   <a href='details.php?$pro_id=$pro_id'>
                                                       $pro_title 
                                                  </a>
                                             </h3>
                                             <p class='price'>
                                                  $$pro_price
                                             </p>
                                             <p class='button'>

                                                  <a class='btn btn-primary' href='details.php?$pro_id=$pro_id'>

                                                       View Details
                                                  </a>

                                                   <a class='btn btn-primary' href='details.php?$pro_id=$pro_id'>

                                                      <i class='fa fa-shopping-cart'> </i> Add to Cart
                                            </a>
                                        </p>
                                   </div>
                              </div>
                         </div>
                         ";
               
          }




          
     }

?>