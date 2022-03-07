<?php
include("data.php");

$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['message'];


$sql="INSERT INTO pubgform2 VALUES('','$name','$phone','$message')";

if ($conn->query($sql) === TRUE) {

    echo "created1 successfully"; ?>
  <?php include('head.php');?>
  <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Thanku <span><?php echo $_POST['name'];?></span></h2>
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
<?php include('foot.php'); ?>
  



 <?php } else {
    echo "Error: ";
    echo $sql ;
    echo  $conn->error;
  }
  $conn->close();

?>



