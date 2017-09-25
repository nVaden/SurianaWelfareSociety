<?php

include_once 'vals/inc/configAll.php';



$blogid = mysqli_real_escape_string($connecDB,$_GET['id']);
$blogurl = mysqli_real_escape_string($connecDB,$_GET['url']);
$blogview = mysqli_fetch_array(mysqli_query($connecDB,"select * from blog where id = $blogid and url = '$blogurl'"));



 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="author" content="">



     <?php
     echo '<title>'.$blogview['title'].'</title>';
     echo '<meta name="description" content="">';

     include 'subcontent/headersub.php';

      ?>



 </head>

 <body>

   <?php
   include 'subcontent/nav.php';
    ?>

     <!-- Page Content -->
     <div class="container">


       <?php
       echo '<div class="row">
         <div class="col-sm-12">
          <h1>'.$blogview['title'].'</h1>
         </div>
       </div>';
       echo '<div class="row">
         <div class="col-sm-8 fullpost">
           '.$blogview['fullpost'].'
         </div>
         <div class="col-sm-4">
           short info
         </div>
       </div>';
        ?>

         <hr>
<style>
.fullpost img{
  max-width: 100%;
}
</style>
<?php
include 'subcontent/footer.php';
 ?>

     </div>
     <!-- /.container -->

 </body>

 </html>
 <?php

  ?>
