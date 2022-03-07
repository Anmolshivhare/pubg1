


<?php include('head.php');?>

<?php

if($_POST) {
 
} else {
  header('Location:http://localhost/geco/index.php');
}

include("data.php");

 
$phone=$_POST['phone'];
  




$check=mysqli_query($conn,"select * from pubgform1 where phone='$phone'");
 
$checkrows=mysqli_num_rows($check);
 if($checkrows>0) {

?>

<section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <div class="breadcrumb-content text-center">
                                <h2>Thanku <span><?php echo $_POST['squad'];?></span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                         <li class="breadcrumb-item"><a href="#">Thanku for contacting us, We will contact as soon possible</a>
                                        <br>
                                      <p><a href="tel:8923326462">Feel Free to Call : 8923326462</a></p></li>
                                     </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php } else { ?>

 
  <p class="danger">Phone Number Not register...............<?php echo $_POST['phone'];?></p> 
   


   
 <?php } ?>


<?php include('foot.php'); ?>