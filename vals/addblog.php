<?php
$authorizedpage=1;

 include_once "inc/configAll.php";

ini_set('max_execution_time', 300);

 if(isset($_SESSION['rdrlocationadmin'])){
   $rdrlocation = $_SESSION['rdrlocationadmin'];
 }
 else {
   $rdrlocation = '../blog-posts.php';
 }


if(isset($_POST['publish'])){

require 'aws-sdk2/start.php';

$internalerrmsg = '';

    $title = mysqli_real_escape_string($connecDB,$_POST['title']);
    $fullinfo = mysqli_real_escape_string($connecDB,$_POST['fullpost']);
    $category = mysqli_real_escape_string($connecDB,$_POST['category']);
    $tags = mysqli_real_escape_string($connecDB,$_POST['tags']);
    $shortinfo = mysqli_real_escape_string($connecDB,$_POST['shortinfo']);

    $tags = preg_replace('/\s*,\s*/', ',', $tags);

    $ipaddress = $_SERVER['REMOTE_ADDR'];

    if($_FILES['cover']['name']!=''){

        $name = $_FILES['cover']['name'];
        $type = $_FILES['cover']['type'];
        $size = $_FILES['cover']['size'];
        $temp = $_FILES['cover']['tmp_name'];
        $error = $_FILES['cover']['error'];

        if(!empty($title) || !empty($category) || !empty($fullinfo)){
              if($error>0){
                  $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Unsupported file. Please choose another image.</p>';
                  header('location: '.$rdrlocation);
              }

              else
              {
                  if($type == "image/jpeg" || $type == "image/jpg" || $type == "image/png" || $type == "image/gif" || $type == "image/pjpeg" || $type == "image/x-png"){
                      if($size <=8388608){

                          $adurl = str_replace(' ', '-', preg_replace("/[^0-9 a-z]/","",strtolower($title)));
                          $prurl = $adurl;
                          $posturl = trim(preg_replace('/-+/', '-', $prurl), '-');

                          //file details
                          $extension = explode('.', $name);
                          $extension = strtolower(end($extension));

                          //Tmp details
                          $key = uniqid(rand());
                          $tmp_file_name = "{$key}.{$extension}";
                          $tmp_file_path = "../../temp/{$tmp_file_name}";

                          if(move_uploaded_file($temp, $tmp_file_path)){
                            $addimgQuery = mysqli_query($connecDB, "INSERT INTO blog(url, title, cover, categoryid, tags, shortinfo, fullpost, sortnum, status, postdate)
                              VALUES('$posturl', '$title', '$tmp_file_name', '$category','$tags','$shortinfo','$fullinfo', 99, 1, now())");

                            if($addimgQuery){

                              //upload original image
                              try {
                                $s3-> putObject([
                                  'Bucket' => $config['s3']['bucket'],
                                  'Key' => "uploads/posts/cover/original/{$tmp_file_name}",
                                  'Body' => fopen($tmp_file_path,'rb'),
                                  'ACL' => 'public-read'
                                ]);
                              } catch (S3Exception $e) {
                                $internalerrmsg .= '- Failed to upload cover image<br>';
                              }

                              //crop thumb upload image
                              $imagetocrop = ($tmp_file_path);
                              $filename= ($tmp_file_path);
                              $thumb_width = 400;
                              $thumb_height = 210;
                              include('cropimage.php');

                              try {
                                $s3-> putObject([
                                  'Bucket' => $config['s3']['bucket'],
                                  'Key' => "uploads/posts/cover/thumb/{$tmp_file_name}",
                                  'Body' => fopen($tmp_file_path,'rb'),
                                  'ACL' => 'public-read'
                                ]);
                              } catch (S3Exception $e) {
                                $internalerrmsg .= '- Failed to crop cover image<br>';
                              }

                              //crop cover upload image
                              $imagetocrop = ($tmp_file_path);
                              $filename= ($tmp_file_path);
                              $thumb_width = 1200;
                              $thumb_height = 630;
                              include('cropimage.php');

                              try {
                                $s3-> putObject([
                                  'Bucket' => $config['s3']['bucket'],
                                  'Key' => "uploads/posts/cover/{$tmp_file_name}",
                                  'Body' => fopen($tmp_file_path,'rb'),
                                  'ACL' => 'public-read'
                                ]);
                              } catch (S3Exception $e) {
                                $internalerrmsg .= '- Failed to crop cover image<br>';
                              }

                              unlink($tmp_file_path);

                              //delete temp images
                              $tmpdirname = "../../temp/";
                              $tmpimages = glob($tmpdirname."*.{jpg,gif,png}",GLOB_BRACE);
                              foreach($tmpimages as $tmpimage) {
                                  unlink($tmpimage);
                              }

                              $_SESSION['rmnotfymsg'] = '<p class="alert alert-success">'.$internalerrmsg.'Post is added successfully.</p>';
                              header('location: '.$rdrlocation);

                            }
                            else {
                              $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Failed to insert into database: '.mysqli_error($connecDB).'</p>';
                              header('location: '.$rdrlocation);
                            }

                          }
                      }
                      else{
                        $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Image size is too big. Max. is 8mb.</p>';
                        header('location: '.$rdrlocation);
                      }
                  }
                  else{
                    $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Invalid file type. Please choose another image type.<br>'.$type.'</p>';
                    header('location: '.$rdrlocation);
                  }

              }
        }
        else{
          $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Please fill required fields</p>';
          header('location: '.$rdrlocation);
        }

    }//if isset image upload
    else{
      $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Please choose a cover photo</p>';
      header('location: '.$rdrlocation);
    }


}

    else{
      $_SESSION['rmnotfymsg'] = '<p class="alert alert-danger">Please fill the fields</p>';
      header('location: '.$rdrlocation);
    }

?>
