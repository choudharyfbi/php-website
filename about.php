<?php require("header.php");
 include("menucontent.php");
 include("notification.php");
 $query="SELECT * FROM `ucbedit_about` WHERE `id`=1";
        $exe=mysqli_query($conn,$query);
        $about=mysqli_fetch_object($exe);
 
 ?>
            <div class="second-div">
                <div class="sidemenud" >
                    <div class="sidemenud1"><a href="index.php">Home</a></div>
                    <div class="sidemenud1"><a href="about.php"> About Us</a></div>
                    <div class="sidemenud1"><a href="course.php">Course</a></div>
                    <div class="sidemenud1"><a href="gallery.php">Gallery</a></div>
                    <div class="sidemenud1"><a href="enquiry.php">Enquiry</a></div>
                    <div class="sidemenud1"><a href="contect.php">Contect Us</a></div>
                </div>
                
               <div class="about">
                   <div class="aboutp1"><?php echo $about->entertitle ?></div>
                   <div class="aboutp2"><?php echo $about->EnterContant?>  </div>
                   <div class="adoutp3"><?php echo $about->enterrtitle ?> </div>
                   <div class="adoutp4"><?php echo $about->EnterrContant ?></div>
                  
                    
                </div>
            </div>
          <?php require("footer.php");?>  
            