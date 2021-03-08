<!-- begin panel panel-default side-menu -->
<div class="panel panel-default sidebar-menu">
     <!-- begin panel-heading -->
     <div class="panel-heading">
        <center>
        <img class="img-responsive" src="customer_images/product1.jpeg" alt="product 1">   
        </center>

        </br>
     <h3 align="center"class="panel-title">
          <strong>Name:</strong> Engr. Brainiac
     </h3>
     </div>
     <!-- end panel-heading -->

     <!-- begin panel-body -->
     <div class="panel-body">
          <ul class="nav nav-pills nav-stacked">

               <li class="<?php if(isset($_GET['my_orders'])){echo "active";} ?>">
                    <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> My Oders
                    </a>
                    
               </li>

               <li class="<?php if(isset($_GET['pay_offline'])){echo "active";} ?>">
                    <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Pay Offline
                    </a>
                    
               </li>

               <li class="<?php if(isset($_GET['edit_account'])){echo "active";} ?>">
                    <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Edit Account
                    </a>
                    
               </li>

               <li class="<?php if(isset($_GET['change_pass'])){echo "active";} ?>">
                    <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Change Password
                    </a>
                    
               </li>

               <li class="<?php if(isset($_GET['delete_account'])){echo "active";} ?>">
                    <a href="my_account.php?delete_account">
                    <i class="fa fa-trash-o"></i> Delete
                    </a>
                    
               </li>

               <li>
                    <a href="logout.php">
                         <i class="fa fa-sign-out"></i> Log out
                    </a>
               </li>
               
             
          </ul>
     </div>
     <!-- end panel-body -->
</div>
<!-- end panel panel-default side-menu -->


