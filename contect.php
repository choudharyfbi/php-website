
<?php require("header.php");
 include("menucontent.php");
 include("notification.php");
 $query="SELECT * FROM `ucbedit_contact` WHERE `id`=1";
        $exe=mysqli_query($conn,$query);
        $contact=mysqli_fetch_object($exe);
 
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
                   <div class="aboutp1">Contect Us</div>
                   <div class="contectpage"><?php echo $contact->addres ?></div>
                  <div class="adoutp4">
                    <strong>Phone:</strong> <?php echo $contact->phoneno ?> <br> <br>
                    <strong>Mobile:</strong><?php echo $contact->mobileno ?> <br> <br>
                    <strong>Email id:</strong><?php echo $contact->emailid ?> <br> <br>
                    <strong>Website:</strong><?php echo $contact->website ?> <br> 
                    
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