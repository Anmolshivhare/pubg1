 <?php include('head.php')?>
 <!-- main-area -->
  <main>

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content text-center">
                    <h2>Our <span>Community</span></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Community</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- community-area -->
<div class="community-area primary-bg pt-120 pb-175">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="community-wrap">
                    <div class="table-responsive-xl">
                        <table class="table mt-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Squrd  Team Name</th>
                                    <th scope="col">City</th>
                                    
                                </tr>
                            </thead>
                            <?php
                            include('data.php');
                            $sql="SELECT *FROM pubgform1";
                            $restult=$conn->query($sql);
                            while($row=$restult->fetch_assoc()){?>
                            
                          
                            <tr>
                              <td><?php echo $row['id'];?></td>
                              <td><?php echo $row['squad'];?></td>
                              
                              <td><?php echo $row['city'];?></td>
                             
                          
                          
                             
                            </tr>
                            <?php }?>
                        </table>
                    </div>
                    <div class="table-responsive-xl">
                        <table class="table mt-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Squrd  Team Name</th>
                                    <th scope="col">City</th>
                                    
                                </tr>
                            </thead>
                           <!-- hello -->
                           <?php
                            include('data.php');
                            $sql="SELECT *FROM pubgform1";
                            $restult=$conn->query($sql);
                            while($row=$restult->fetch_assoc()){
                                $i=1;?>
                            
                          
                            <tr>
                              <td><?php echo $row['id'];?></td>
                              <td><?php echo $row['squad'];?></td>
                              
                              <td><?php echo $row['city'];?></td>
                             
                          
                          
                             
                            </tr>
                            <?php $i++; }?>
                        </table>
                    </div>
                </div>   
            
                             
                
            
            </div>
        </div>
    </div>
    <div class="community-bg-shape"><img src="img/images/community_bg_shape.png" alt=""></div>
</div>
<!-- community-area-end -->


</main>
<!-- main-area-end -->
<?php include('foot.php') ?>