<?php

include_once 'vals/inc/configAll.php';


if(isset($_GET['bid']) && isset($_GET['burl'])){
  $blogid = mysqli_real_escape_string($connecDB,$_GET['bid']);
  $blogurl = mysqli_real_escape_string($connecDB,$_GET['burl']);
  $blogview = mysqli_fetch_array(mysqli_query($connecDB,"SELECT * FROM blog WHERE id = $blogid AND url = '$blogurl'"));

  if(isset($blogview['id'])){
    $blogurl = $defaulturl['home'].'/blogview.php?bid='.$blogview['id'].'&burl='.$blogview['url'];
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="author" content="RentMarket">



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
       echo '<div class="row" style="margin-top: 60px;">
       <div class="col-sm-12">
       <h1><A href="'.$blogurl.'">'.$blogview['title'].'</a></h1>
       </div>
       </div>';
       echo '<div class="row">
       <div class="col-sm-8 fullpost">
       '.$blogview['fullpost'].'
       </div>
       <div class="col-sm-4">
       <img src="'.$blogimgcoverurl.'/thumb/'.$blogview['cover'].'" alt="'.$blogview['title'].'" class="img-responsive" />
       <br>
       Short Info: '.$blogview['shortinfo'].'
       <br>
       <br>
       Posted on '.date('d M Y',strtotime($blogview['postdate'])).'
       <br>
       Category: '.$blogview['category'].'
       </div>
       </div>';
       ?>

       <hr>
       <style>
       .fullpost img{
        max-width: 100%;
      }
    </style>
    

  </div>
  <!-- /.container -->
<?php
    include 'subcontent/footer.php';
    ?>
</body>

</html>
<?php
}
else {
  header('location: '.$defaulturl['home'].'/blog?404');
}
}
else {
  header('location: '.$defaulturl['home'].'/blog?404');
}
?>
