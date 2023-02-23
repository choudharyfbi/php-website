<?php 
 include("configs/db.config.php"); ?>
 <?php $query="SELECT * FROM `ucbedit_contact` ";
        $exe=mysqli_query($conn,$query);
        $fetch=mysqli_fetch_object($exe);
       
        ?> 
<html>
    <head>
    <base href="http://localhost/sasbs/">
        <title>SASBS SCHOOL</title>
        <!--<style>
            body{
                background-color: black;
            }
        </style>-->
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    
        <div class="maindiv">
            <div class="header">
              <div class="logo">
              <a href="index.html"> 
              
              <?php
              
                        if (!empty($fetch->uploadlogo) && file_exists("gallery/" . $fetch->uploadlogo)) {
                        ?>
                            <img src="gallery/<?php echo $fetch->uploadlogo ?>" style="width: 100px;" alt="">
                        <?php
                        } else {
                            echo 'NO IMAGE';
                        }
                        ?></a> </div>
                       
                        
              <div class="sitename">Best Place For Students</div>
              <div class="headercontact">
                  <div class="websitename">www.sasbshsss.com</div>
                  <div class="mailid">info@sasbshsss.com</div>
                  <div class="phoneno">+91-8495827744</div>
              </div>
            </div>
            