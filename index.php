<?php include("header.php");
 include("menucontent.php");
 include("notification.php");
 
 $query="SELECT * FROM `ucbadd_ycompany` ";
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
                <div class="slider">
                    <a href="http://wscubetech.com" target="_blank"></a>
                    <img src="../sasbs/image/banner.gif" width="750px" height="300px"/></a>
                </div>
            </div>

            <div class="why_acadmy_section">
                <div class="why_acadmy">
                       <div class="why_acadmy_menu"> Why SASBSHSS SCHOOL?</div>
                       <div class="why_acadmy_menu_bar"><?php
                        $sr=0;
                        while($fetch=mysqli_fetch_object($exe)){
                        $sr++;
                        ?>
                
                        <?php echo $sr ?> :)
                        <?php echo $fetch->EnterContant?> <br>
                        <?php
                          }
                         ?>
                    </div>
                </div>
                <div class="course">
                   <div class="course1">COURSE</div>
                    <strong> TO 10TH <br>
                        1.CBSC <br>
                        2.RBSc  <br>
                    12TH STREAM <br>
                        1.SCINCE MATH <br>
                        2.SCINCE BIO <br>
                        3.COMMERCE <br>
                    PREPRATION <br>
                     1.GOVT VACANCY &nbsp; 2.AIR FORCE &nbsp;3.TEACHER  </strong>    
                </div>
                <div class="image-sym"><img src="../sasbs/image/course1.jpg" width="450px" height="280px">home</div>

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