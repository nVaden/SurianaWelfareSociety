<?php

include_once 'inc/configAll.php';

$message='';
if(isset($_GET['email']) && isset($_GET['code'])){
  $email = mysqli_real_escape_string($connecDB,$_GET['email']);
  $vcode = mysqli_real_escape_string($connecDB,$_GET['code']);
  $checkuserstatusq = mysqli_query($connecDB,"SELECT id, status, email, username, fullname FROM user WHERE email = '$email'");
  $checkuserstatus = mysqli_fetch_array($checkuserstatusq);
  if(mysqli_num_rows($checkuserstatusq)>0){
    $message .= 'user is found<br>';
    if($checkuserstatus['status'] == 0){
      $userid = $checkuserstatus['id'];
      $checkvcode = mysqli_fetch_array(mysqli_query($connecDB,"SELECT activationcode from useractivation WHERE userid = $userid"));

      if($vcode == $checkvcode['activationcode']){
        $message .= 'correct code & ready to verify<br>';

        $updateuserstatus = mysqli_query($connecDB,"UPDATE user u inner join useractivation ua
                                                    set u.status = 1, ua.activateddate = now()
                                                    WHERE u.id = $userid and ua.activationcode = '$vcode'");
        if($updateuserstatus){
          $_SESSION['user']['id'] = $checkuserstatus['id'];
          $_SESSION['user']['name'] = $checkuserstatus['fullname'];
          $_SESSION['user']['email'] = $checkuserstatus['email'];
          $_SESSION['user']['username'] = $checkuserstatus['username'];

          $_SESSION['notfymsg'] = '<p  class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          Your email is successfully verified.</p>';
          header('location: '.$defaulturl['profile'].'/'.$checkuserstatus['id']);
        }else {
          $_SESSION['notfymsg'] = '<p  class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          Failed to verify your email</p>';
          header('location: '.$defaulturl['home'].'/?login=1');
        }
      }
      else {
        header('location: '.$defaulturl['home'].'/404');
      }
    }
    else if($checkuserstatus['status'] == 1){
      $_SESSION['notfymsg'] = '<p class="alert alert-warning">
      You have already verified your email</p>';
      header('location: '.$defaulturl['home'].'/?login=1');
    }
    else {
      header('location: '.$defaulturl['home'].'/404');
    }
  }
  else {
    header('location: '.$defaulturl['home'].'/404');
  }

}
else {
  header('location: '.$defaulturl['home'].'/404');
}
 ?>
