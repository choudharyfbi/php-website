<?php require("header.php");
 include("menucontent.php");
 include("notification.php");?>
 <?php
 if($_SERVER['REQUEST_METHOD']=='POST')
 {
    $query="INSERT INTO `ucb_enquiry` 
    SET `gender`='".$_POST['gender']."',
    `name`='".$_POST['name']."',
    `contect`='".$_POST['contect']."',
    `country`='".$_POST['country']."',
    `State`='".$_POST['State']."',
    `city`='".$_POST['city']."',
    `addres`='".$_POST['addres']."',
    `email`='".$_POST['email']."',
    `enquiry`='".$_POST['enquiry']."'";
   $exe=mysqli_query($conn,$query);
   
  }
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
                <div class="enquiry">
                    <div class="aboutp1">Enquiry</div>
                    <div class="form">
                        <form action="" method="POST">
                            <div class="formeq">
                                <div class="gender">
                                 <div> 
                                     <label for="">Gender:</label>
                                 </div>
                                 <div class="text" > 
                                     <input type="radio" name="gender" value="M">Male
                                     <input type="radio" name="gender" value="F">Female 
                                  </div>
                                </div>
                            </div>

                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">Name:</label> 
                                 </div>
                                 <div class="text">
                                     <input type="text" name="name" placeholder="Enter Your Name">
                                  </div>
                                </div>
                            </div>
                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">Contect:</label> 
                                 </div>
                                 <div class="number">
                                     <input type="text" name="contect" placeholder="Enter Your Contect">
                                  </div>
                                </div>
                            </div>
                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">country:</label> 
                                 </div>
                                 <div class="country">
                                    <select name="country" id="country">
                                        <option value="">---Select---</option>
                                        <option value="India">India</option>
                                        <option value="USA">USA</option>
                                        <option value="Australia">Australia</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">State:</label> 
                                 </div>
                                 <div class="State">
                                    <select name="State" id="State">
                                        <option value="">---Select---</option>
							            <option value="Rajasthan">Rajasthan</option>
							            <option value="Maharastra">Maharastra</option>
							            <option value="Punjab">Punjab</option>
							            <option value="Kerela">Kerela</option>
							            <option value="New York">New York</option>
							            <option value="Malbourne">Malbourne</option>
							            <option value="Syndey">Syndey</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">City:</label> 
                                 </div>
                                 <div class="city">
                                    <select name="city" id="city">
                                        <option value="">---Select---</option>
							            <option value="Jodhpur">Jodhpur</option>
							            <option value="Jaipur">Jaipur</option>
							            <option value="Mumbai">Mumbai</option>
							            <option value="Washington">Washington</option>
							            <option value="New York">New York</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">Address:</label> 
                                 </div>
                                  <div class="adress">
                                     <textarea  id="address" class="textarea" name="addres" placeholder="Enter Your Address"></textarea>
                                  </div>
                                </div>
                            </div>
                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">Email id:</label> 
                                 </div>
                                 <div class="email">
                                     <input type="text" class="emailid" name="email" placeholder="Enter Your Emial Id">
                                  </div>
                                </div>
                            </div>
                            <div class="formeq">
                                <div class="gender">
                                  <div>
                                     <label for="">Enquiry:</label> 
                                 </div>
                                  <div class="enquiry1">
                                     <textarea id="address" class="textarea" name="enquiry" placeholder="Enter Your Enquiry"></textarea>
                                  </div>
                                </div>
                            </div>
                            <div><input type="submit" value="Send" class="submit"></div>
                            
                        </form>
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