<?php  require('inc/header.php'); ?>
 <?php 
      require('handel/conection.php');
      $query="SELECT count(id) as adminCount from admins";
      $result=mysqli_query($conn,$query);
      $adminCount= mysqli_fetch_assoc($result);
 ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Admins</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5><?= $adminCount['adminCount'] ?></h5>
                          <a href="admins.php" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5>5</h5>
                          <a href="#" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Orders</div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between align-items-center">
                            <h5>1120</h5>
                          <a href="#" class="btn btn-light">Show</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php  require_once('inc/footer.php');?>