<?php include("header.php");
 include("menucontent.php");
 include("notification.php");
 
 $query="SELECT * FROM `ucbadd_gallery` ";
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
                
               <div class="gallery">
                   <div class="galleryphoto">
                       <h1>Gallery</h1>
                       
                     <div class="gallerypc"> 
                            <?php
                            $sr=0;
                            while($gallery=mysqli_fetch_object($exe)){
                            $sr++;
                            ?> 
                            <?php 
                        if (!empty($gallery->gallerypics) && file_exists("../sasbs/gallery/" . $gallery->gallerypics)) {
                        ?>
                            <img src="../sasbs/gallery/<?php echo $gallery->gallerypics ?>" style="width: 200px; height:150px;" alt="">
                        <?php
                        } else {
                            echo 'NO IMAGE';
                        }
                        ?>
                        
                            <?php
                            }
                            ?>
                        </div>
                   </div>
                </div>
            </div>
            
            <div class="footermain">
                <div class="footerleft"></div>
                <div class="footermiddle">
                    <div>HOME |</div>
                    <div>ABOUT US |</div>
                    <div>COURSE |</div>
                    <div>GALLARY |</div>
                    <div>EQUIRY |</div>
                    <div>CONTECT US</div>
               </div>
               <div class="footerright"></div>
            </div>
        </div>
    </body>
</html>