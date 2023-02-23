
<?php
$query="SELECT * FROM `ucbadd_notice` ";
        $exe=mysqli_query($conn,$query);
       
        ?>
<div class="notificaton">
<marquee behavior="alternative" direction="left" onmouseover="stop()" onmouseleave="start()">
<?php 
$sr=0;
while( $about=mysqli_fetch_object($exe)) {
    $sr++;
    echo $sr.". ";
    echo "<a href=''>$about->addnotice</a>";
    echo " &nbsp; ";
}
    ?>
</marquee>
</div>