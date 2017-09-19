<?php

include_once'inc/configAll.php';

if(isset($_POST['signup'])){

  $ipaddress = $_SERVER['REMOTE_ADDR'];
  $name = mysqli_real_escape_string($connecDB,$_POST['name']);
  $email = mysqli_real_escape_string($connecDB,$_POST['email']);
  $password = mysqli_real_escape_string($connecDB,$_POST['password']);
  $phone = mysqli_real_escape_string($connecDB,$_POST['phone']);

  $posturl = str_replace(' ', '-', preg_replace("/[^0-9 a-z]/","",strtolower($name)));
  $posturl = trim(preg_replace('/-+/', '-', $posturl), '-').'-'.rand(100,999);

  $username = $posturl;

  $checkexistemail = mysqli_query($connecDB,"SELECT id FROM user WHERE email = '$email'");
  if(mysqli_num_rows($checkexistemail)==0){

  $adduserq = mysqli_query($connecDB,"INSERT INTO user (username, password, fullname, email, phone, regdate, regip, status)
                                        VALUES('$username','$password','$name','$email','$phone',now(), '$ipaddress', 0)");

  if($adduserq){
//     $newuserid = mysqli_insert_id($connecDB);

//     $activationcode = uniqid(rand()).uniqid(rand());
//     $adduseractvq = mysqli_query($connecDB,"insert into useractivation(userid, activationcode, sentdate)
//                                           values($newuserid,'$activationcode',now())");
//     if($adduseractvq){
//       $verificationlink = $defaulturl['home'].'/vals/verifyemail.php?code='.$activationcode.'&email='.$email;

// $from = $noreplyemail;
// $subject = "Verify your email with Suriana Welfare Society";
// $to = $email;

// $messagebody = <<<EMAIL

// Dear $name,

// Welcome to Suriana Welfare Society, you're almost there!

// Please click the link below to verify your email address:

// $verificationlink

// If the link does not work please copy it and paste to your browser.


// Thank you.


// This message is auto sent by Suriana Mailing system. Please do not reply to this email.

// $homeurl

// EMAIL;

// $header = "From: $from";

// $sendactivation = mail($to, $subject, $messagebody, $header);

// $_SESSION['user']['id'] = $newuserid;
// $_SESSION['user']['name'] = $name;
// $_SESSION['user']['email'] = $email;
// $_SESSION['user']['username'] = $username;
// $_SESSION['alreadyregisteredip'] = $ipaddress;

//       if($sendactivation)
//         echo 1;
//       else
//         echo 'Failed to send email';
//       }//if activation not inserted
//       else {
//         echo 'Error: '.mysqli_error($connecDB);
//       }
      echo 1;
    }
    else {
      echo 'Error: '.mysqli_error($connecDB);
    }
  }
  else {
    echo 'The email you entered is already registered.';
  }
}
if(isset($_POST['signin'])){


  $username = mysqli_real_escape_string($connecDB,$_POST['username']);
  $password = mysqli_real_escape_string($connecDB,$_POST['password']);

  $logininfoq = "SELECT u.id, u.fullname, u.username FROM user u
                  WHERE (u.email = '$username' OR u.phone = '$username' OR u.username = '$username')
                  AND u.password = '$password'";
  $logininfor = mysqli_fetch_array(mysqli_query($connecDB,$logininfoq));

  if(isset($logininfor['id']) && !empty($password)){
    $userid = $logininfor['id'];

    $addloginlogq = mysqli_query($connecDB,"INSERT INTO userloginlog(userid, logdate, logip, logbrowser) VALUES('$userid',now(),'$ipaddress','$browser')");
    if($addloginlogq){
      $_SESSION['user']['id'] = $logininfor['id'];
      $_SESSION['user']['name'] = $logininfor['fullname'];
      $_SESSION['user']['username'] = $logininfor['username'];
      $_SESSION['alreadyregisteredip'] = $ipaddress;
      echo 1;
    }
    else {
      echo 'Please try again later.';
    }

  }
  else {
    echo 'Incorrect login details.';
  }
}
else {
  echo 'Your request failed.';
}
 ?>
