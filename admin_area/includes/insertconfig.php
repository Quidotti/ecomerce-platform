<?php

     if(isset($_POST['submit'])){

          $product_title      = $_POST['product_title'];
          $product_cat        = $_POST['product_cat'];
          $cat                = $_POST['cat'];

          $product_price      = $_POST['product_price'];
          $product_keywords   = $_POST['product_keywords'];
          $product_desc       = $_POST['product_desc'];

          $product_img1 = $_FILES['product_img1']['name'];
          $product_img2 = $_FILES['product_img2']['name'];
          $proudct_img3 = $_FILES['product_img3']['name'];

          $temp_img1 = $_FILES['product_img1']['tmp_name'];
          $temp_img2 = $_FILES['product_img2']['tmp_name'];
          $temp_img3 = $_FILES['product_img3']['tmp_name'];

          move_uploaded_file($temp_img1, "product_images/$product_img1");
          move_uploaded_file($temp_img2, "product_images/$product_img2");
          move_uploaded_file($temp_img3, "product_images/$proudct_img3");


          $insert_product = "insert into products (p_cat_id, cat_id, date, product_title, product_img1, product_img2, product_img3, product_price, product_keywords, product_desc) values('$p_cat_id', '$cat', NOW(), '$product_title', '$product_img1', '$product_img2', '$proudct_img3', '$product_price', '$product_keywords', '$product_desc')";

          $run_product = mysqli_query($conn, $insert_product);

          if($run_product){

          echo "<script>alert('Product Inserted Sucessfully')</script>";
               // echo "<script>window.open('insert.php', '_self')</script>";
          }
          else {
               echo "<script>alert('insertion failed')</script>";
          }

     }
?>