<?php include('head.php');
if($_POST) {

} else { ?>
<script>
  window.location.href = "http://index.php";
</script>
  
<?php } 

include("data.php");

$squad=$_POST['squad'];
$player1=$_POST['player1'];
$player2=$_POST['player2'];
$player3=$_POST['player3'];
$player4=$_POST['player4'];
$phone=$_POST['phone'];
$gmail=$_POST['email'];
$city=$_POST['city'];
//print_r($_POST);die;




$check=mysqli_query($conn,"select * from pubgform1 where phone='$phone'");
 
$checkrows=mysqli_num_rows($check);
 if($checkrows>0) { ?>

  <!-- breadcrumb-area -->
  <style>
    .breadcrumb-bg{
      padding-top: 123px;
    padding-bottom: 63px;
    }
  </style>
  
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2 style="font-family:time of roman;"> <span><?php echo "Phone Number AllReady Register"; ?> </span></h2>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
 

<?php } else {

$sql="INSERT INTO pubgform1 VALUES('','$squad','$player1','$player2','$player3','$player4','$phone','$gmail','$city')";

if ($conn->query($sql) === TRUE) {
   // echo "insert  successfully";?>
   
    <section class="breadcrumb-area breadcrumb-bg" style="padding-top: 62px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content text-center">
                                <h2 style="font-family:time of roman; ">Thanku <span><?php echo $_POST['squad'];?></span></h2>
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
                        
                      <div class="row">
                        <div class="col-lg-4  text-center text-justify">
                        <img src="paytm.jpeg" alt="pay" width="100%">
                        </div>
                        <div class="col-lg-8 text-center text-justify">
                        <h2 style="font-size:35px; font-family:time of roman;" >TEAM ENTRY FEES:<span>500/-</span></h2> <br>
                        <h3 style="font-family:time of roman;"> Scan This QRcode <br>taking a  Screenshot <br> of Your Payment &<br> Send me on my Whatsapp No +91 <a href="tel:9759779144 "> 9759779144.</a> </h3>
                         
                        </div>
                      </div>

                   
                </div>
            </section>


   
 <?php } else 
 {
    echo "Error: ";
    echo $sql ;
    echo  $conn->error;
  }
  $conn->close();
}
  include('foot.php');?>