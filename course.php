<?php include("header.php");
 include("menucontent.php");
 include("notification.php");

 
 $query="SELECT * FROM `ucbadd_course` ";
        $exe=mysqli_query($conn,$query);
    
 
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
                
               <div class="coursepage">
                   <div class="aboutp1">Course</div>
                   
                  
                  <div class="adoutp4">
                  <?php
                        $sr=0;
                        while($course=mysqli_fetch_object($exe)){
                        $sr++;
                        ?>
                
                  <?php echo $sr ?> 
                  <?php echo $course->addcourse?> <br>
                  <?php
                    }
                    ?>
                  </div>
                  
                </div>
            </div>
            
            <?php include("footer.php");?>  