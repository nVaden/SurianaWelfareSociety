<?php

/**
 * @author Elyor
 * @copyright 3 / 8 / 2016
 */
date_default_timezone_set("Asia/Kuala_Lumpur");

if(session_id() == '') {
  session_start();
}

$currenturl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($currenturl,'localhost') !== false)
  $homeurl = 'http://localhost/rentmarket2';
else
  $homeurl = 'http://'.$_SERVER['SERVER_ADDR'].'/rentmarket2';

$localwhitelist = array(
  '127.0.0.1','::1','192.168.0.157','192.168.0.128','192.168.0.165','192.168.0.171','192.168.0.191','192.168.0.123','192.168.0.140'
  );

if(in_array($_SERVER['REMOTE_ADDR'], $localwhitelist)){
  $localhostip = $_SERVER['REMOTE_ADDR'];

  $db_username = 'root';
  $db_password = '';
  $db_name = 'rentmarket2.1';
  $db_host = 'localhost';

  if($_SERVER['REMOTE_ADDR'] == '192.168.0.128'){
    $db_password = 'root';
    $homeurl = 'http://'.$_SERVER['SERVER_ADDR'].':8888/rentmarket2';
  }

  //local connect

  $connecDB = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('could not connect to database');
}
else {
  //echo $_SERVER['REMOTE_ADDR'];
  $homeurl = 'http://beta.rentmarket.com.my';
  $homeurladmin = 'http://beta.rentmarket.com.my/admin';
  $homeurlagent = 'http://beta.rentmarket.com.my/agent';
  $apiurl = 'http://beta.rentmarket.com.my/rentapi';

  //AWS online
  $db_username = $_SERVER['RDS_USERNAME'];
  $db_password = $_SERVER['RDS_PASSWORD'];
  $db_name = $_SERVER['RDS_DB_NAME'];
  $db_port = $_SERVER['RDS_PORT'];
  $db_host = $_SERVER['RDS_HOSTNAME'];

  $connecDB = mysqli_connect($db_host, $db_username, $db_password, $db_name,$db_port) or die('could not connect to database');
}

$defaulturl['home'] = $homeurl;
$defaulturl['profile'] = $homeurl.'/u';
$defaulturl['dashboard'] = $homeurl.'/dash';
$defaulturl['post'] = $homeurl.'/add-listing';
$defaulturl['listingview'] = $homeurl.'/l';
$defaulturl['search'] = $homeurl.'/s';

$itemimagesrurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/items';
$otherlistingimagesrurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/posts/cover/thumb';
$userimageurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/users';
$itemamenityurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/icons/amenities';
$itempurposeurl = 'https://s3-ap-southeast-1.amazonaws.com/images.rentmarket.my/uploads/icons/purposes';

//used to send verification link
$rmnoreplyemail = 'no-reply@rentmarket.com.my';

$MerchantCode ='M09974';
$MerchantKey ='N9B5MdBUfg';

$defaultcurrency = "RM";

$approveexphrs = 23;
$paymentexphrs = 23;

$onlinememberid=0;
if(isset($_SESSION['rmclient'])){
  $onlinememberid = $_SESSION['rmclient']['id'];
}

if(isset($_SESSION['rmnotfymsg'])){
  $notficationmsg = $_SESSION['rmnotfymsg'];
  unset($_SESSION['rmnotfymsg']);
}
else
  $notficationmsg = '';

if(!empty($authorizedpage) && !isset($_SESSION['rmclient']['id'])){
  $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Please login to continue</p>';
  header('location: '.$homeurl.'?login=1');
}

//for admin
$defaulturladmin['home'] = $homeurl.'/admin';
$homeurladmin = $defaulturladmin['home'];
if(!empty($authorizedpageadmin) && !isset($_SESSION['rmadmin']['id'])){
  $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Please login to continue</p>';
  header('location: '.$defaulturladmin['home'].'/login.php');
}
//end of for admin

$noreplyemail = 'no-reply@rentmarket.com.my';


// For Agent
$defaulturlagent['home'] = $homeurl.'/agent';
$homeurlagent = $defaulturlagent['home'];
if(!empty($authorizedpageagent) && !isset($_SESSION['rmagent']['id'])){
  $_SESSION['rmnotfymsg'] = '<p  class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Please login to continue</p>';
  header('location: '.$defaulturlagent['home'].'/login.php');
}
//end of for agent


?>
