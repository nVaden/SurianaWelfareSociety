<?php

date_default_timezone_set("Asia/Kuala_Lumpur");

$currenturl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($currenturl,'localhost') !== false)
  $homeurl = 'http://localhost/suriana';
else
  $homeurl = 'http://'.$_SERVER['SERVER_ADDR'].'/suriana';

$localwhitelist = array(

  '192.168.0.128','192.168.0.161','192.168.1.182'

  );

if(in_array($_SERVER['REMOTE_ADDR'], $localwhitelist)){
  $localhostip = $_SERVER['REMOTE_ADDR'];

  $db_username = 'root';
  $db_password = '';
  $db_name = 'Suriana';
  $db_host = 'localhost';

  if($_SERVER['REMOTE_ADDR'] == '192.168.0.128' || $_SERVER['REMOTE_ADDR'] == '192.168.1.82'){
    $db_password = 'root';
    $homeurl = 'http://'.$_SERVER['SERVER_ADDR'].':8888/SurianaWelfareSociety';
  }

  //local connect

  $connecDB = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('could not connect to database');
}
// else {
//   //echo $_SERVER['REMOTE_ADDR'];
//   $homeurl = 'http://beta.rentmarket.com.my';
//   $homeurladmin = 'http://beta.rentmarket.com.my/admin';
//   $homeurlagent = 'http://beta.rentmarket.com.my/agent';
//   $apiurl = 'http://beta.rentmarket.com.my/rentapi';

//   //AWS online
//   $db_username = $_SERVER['RDS_USERNAME'];
//   $db_password = $_SERVER['RDS_PASSWORD'];
//   $db_name = $_SERVER['RDS_DB_NAME'];
//   $db_port = $_SERVER['RDS_PORT'];
//   $db_host = $_SERVER['RDS_HOSTNAME'];

//   $connecDB = mysqli_connect($db_host, $db_username, $db_password, $db_name,$db_port) or die('could not connect to database');
// }

$defaulturl['home'] = $homeurl;
$defaulturl['profile'] = $homeurl.'/u';

// $itemimagesrurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/items';
// $otherlistingimagesrurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/posts/cover/thumb';
// $userimageurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/users';
// $itemamenityurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/icons/amenities';
// $itempurposeurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/icons/purposes';

//used to send verification link
$rmnoreplyemail = 'no-reply@SurianaWelfareSociety.com.my';

$onlinememberid=0;
if(isset($_SESSION['user'])){
  $onlinememberid = $_SESSION['user']['id'];
}

if(isset($_SESSION['notifymsg'])){
  $notficationmsg = $_SESSION['notifymsg'];
  unset($_SESSION['notifymsg']);
}
else
  $notficationmsg = '';

if(!empty($authorizedpage) && !isset($_SESSION['user']['id'])){
  $_SESSION['notifymsg'] = '<p  class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Please login to continue</p>';
  header('location: '.$homeurl.'?login=1');
}


?>
