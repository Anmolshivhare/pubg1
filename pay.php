<?php include('head.php');?>
<div class="container">
<form action="checkphone.php" class="third-contact-form" method="post">
                                    <!-- <textarea name="message" id="message" placeholder="Write Message..."></textarea> -->
                                    
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6 ">
                                        <h1  style="color:red;">Enter your registered Mobile Number </h1>
                                         <input type="tel" placeholder="Phone" name="phone" required pattern="[0-9]{11}">

                                        </div>
                                        <div class="col-md-6 ">
                                           <h1 style="color:red;">hello</h1>

                                        </div>
                                   
                                        
                                    </div>
                                    <button   class="rotated-btn1" type="submit" name="submit">SUBMIT </button>
                                </form>

</div>
                                <?php include('foot.php');?>
