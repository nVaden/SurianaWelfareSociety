<?php include_once 'vals/inc/configAll.php'; 
       ?>

<!DOCTYPE html>
<html>
<title>Suriana Welfare Society of Malaysia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/slick/main.css"/>
<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="assets/css/pins/bootstrap.css">



<body id="myPage">

  <!-- Sidebar on click -->
<!--   <nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-large" style="display:none;z-index:2" id="mySidebar">

    <a href="#" class="w3-bar-item w3-button w3-display-topleft" style="padding-top:25px !important">Do You Need Help Now?</a>  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal" style="font-size:10px">Close
      <i class="fa fa-remove"></i>
    </a>
    <form class="form-horizontal">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Name:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="Name" placeholder="Enter your name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Contact:</label>
        <div class="col-sm-10"> 
          <input type="email" class="form-control" id="pwd" placeholder="How can we contact you?">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Emergency:</label>
        <div class="col-sm-10"> 
          <input type="email" class="form-control" id="pwd" placeholder="Are you in danger?">
        </div>
      </div>
    </div>
    <br/>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-2">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
 -->

</nav>

 <?php
 include 'subcontent/nav.php';
 ?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Suriana Welfare Society Of Malaysia</a>
  <a href="#test-target" class="w3-bar-item w3-button w3-hide-small w3-hover-white">What We Do</a>
  <a href="/Suriana/blog.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Blog</a>
  <a href="/Suriana/volunteer.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Take Action</a>
  <a href="/Suriana/contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>

  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
<!--     <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="Notifications">Take Action <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
        <a href="#" class="w3-bar-item w3-button">Link</a>
        <a href="#" class="w3-bar-item w3-button">Link</a>
        <a href="#" class="w3-bar-item w3-button">Link</a>
      </div>
    </div> -->

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<?php include_once 'subcontent/headersub.php'; 
      include_once'subcontent/nav.php'; ?>
<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets/images/banner-image.jpg" style="margin-left:7%; width:85%; min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Click Here">Do you need help now?</button>
  </div>
</div>


<!-- Modal / Do you need help? -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h3>Do you need help now?</h3>
      <p>Please give us all the contact information you can.</p>
    </header>
    <div class="w3-container">

      <form class="form-inline">
        <hr/>
        <div class="form-group">
          <label for="name">Full name: </label>
          <input type="email" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="location">Location:</label>
          <input type="email" class="form-control" id="location">
        </div>
        <div class="form-group">
          <label for="number">Contact #: </label>
          <input type="email" class="form-control" id="number">
        </div>
        <div class="form-group" style="margin-top:10px">
          <textarea placeholder="Write a brief description of your situation.." class="form-control" rows="7" cols="109" id="description"></textarea>
        </div>
        <hr/>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    <footer class="w3-container w3-teal">
      <p>*All details given will be handled with the upmost privacy and addressed as soon as possible.</p>
    </footer>
  </div>
</div>

<!-- Main Blog Body -->

<div class="w3-row-padding w3-padding-64" style="background-color:teal; height:800px">

  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img2.jpg" class="card-img">
        <div class="w3-container">
          <h3>VICTIMS OF CHILD ABUSE</h3>
          <p>Suriana Welfare Society is spearheading a nationwide ChildSafe Initiative that is designed to protect children from the scourge of Pedophiles and Sexual Predators.</p>
        </div>
      </div>
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img2.jpg" class="card-img">
        <div class="w3-container">
          <h3>VICTIMS OF CHILD ABUSE</h3>
          <p>Suriana Welfare Society is spearheading a nationwide ChildSafe Initiative that is designed to protect children from the scourge of Pedophiles and Sexual Predators.</p>
        </div>
      </div>
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img2.jpg" class="card-img">
        <div class="w3-container">
          <h3>TRAFFICKING SURVIVORS</h3>

          <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>

        </div>
      </div>
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img3.jpg" class="card-img">
        <div class="w3-container">
          <h3>VICTIMS OF URBAN POVERTY</h3>
          <p>Our mission is to serve and bring economic transformation and enrichment to the victims of urban poverty in Malaysia. We promote practical and innovative solutions as well as advocate for the rights of the victims.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img2.jpg" class="card-img">
        <div class="w3-container">
          <h3>TRAFFICKING SURVIVORS</h3>

          <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>

        </div>
      </div>
    </a>
  </div>
  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img2.jpg" class="card-img">
        <div class="w3-container">
          <h3>TRAFFICKING SURVIVORS</h3>

          <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>

        </div>
      </div>
    </a>
  </div>
  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img2.jpg" class="card-img">
        <div class="w3-container">
          <h3>TRAFFICKING SURVIVORS</h3>

          <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>

        </div>
      </div>
    </a>
  </div>
  <div class="w3-quarter">
    <a href="#">
      <div class="w3-card-2 w3-white card-display">
        <img src="assets/images/img2.jpg" class="card-img">
        <div class="w3-container">
          <h3>TRAFFICKING SURVIVORS</h3>

          <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>

        </div>
      </div>
    </a>
  </div>

</div>
<hr id="test-target"/>
<br/>

<div class="what-we-do" style="height:1000px; margin-top:10%">
  <h1 href="info-sect" class="info-sect"> What We Do </h1>
  <!-- Slick Feature -->
  <div class="col-lg-12 col-m-12 col-sm-12" id="test" data-slick='{"slidesToShow":4, "slidesToScroll": 1, "dots": true, "autoplay": true, "autoplaySpeed": 500}'>
    <div style="background-color:teal"><h3>2</h3></div>
    <div style="background-color:black"><h3>3</h3></div>
    <div style="background-color:teal"><h3>2</h3></div>
    <div style="background-color:black"><h3>3</h3></div>

  </div>

</div>


<!-- Do you need help now? -->
<!-- <div class="w3-container" style="position:relative">
  <a onclick="w3_open()" id="sideTask" class="w3-button w3-xlarge w3-circle w3-red"
  style="position:absolute;top:-28px;right:24px">Do you need help now?</a>

</div> -->



<!-- Container -->


<!-- Pricing Row -->
<!-- <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
  <h2>PRICING</h2>
  <p>Choose a pricing plan that fits your needs.</p><br>
  <div class="w3-third w3-margin-bottom">
    <ul class="w3-ul w3-border w3-hover-shadow">
      <li class="w3-theme">
        <p class="w3-xlarge">Basic</p>
      </li>
      <li class="w3-padding-16"><b>10GB</b> Storage</li>
      <li class="w3-padding-16"><b>10</b> Emails</li>
      <li class="w3-padding-16"><b>10</b> Domains</li>
      <li class="w3-padding-16"><b>Endless</b> Support</li>
      <li class="w3-padding-16">
        <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
        <span class="w3-opacity">per month</span>
      </li>
      <li class="w3-theme-l5 w3-padding-24">
        <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
      </li>
    </ul>
  </div>

  <div class="w3-third w3-margin-bottom">
    <ul class="w3-ul w3-border w3-hover-shadow">
      <li class="w3-theme-l2">
        <p class="w3-xlarge">Pro</p>
      </li>
      <li class="w3-padding-16"><b>25GB</b> Storage</li>
      <li class="w3-padding-16"><b>25</b> Emails</li>
      <li class="w3-padding-16"><b>25</b> Domains</li>
      <li class="w3-padding-16"><b>Endless</b> Support</li>
      <li class="w3-padding-16">
        <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
        <span class="w3-opacity">per month</span>
      </li>
      <li class="w3-theme-l5 w3-padding-24">
        <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
      </li>
    </ul>
  </div>

  <div class="w3-third w3-margin-bottom">
    <ul class="w3-ul w3-border w3-hover-shadow">
      <li class="w3-theme">
        <p class="w3-xlarge">Premium</p>
      </li>
      <li class="w3-padding-16"><b>50GB</b> Storage</li>
      <li class="w3-padding-16"><b>50</b> Emails</li>
      <li class="w3-padding-16"><b>50</b> Domains</li>
      <li class="w3-padding-16"><b>Endless</b> Support</li>
      <li class="w3-padding-16">
        <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
        <span class="w3-opacity">per month</span>
      </li>
      <li class="w3-theme-l5 w3-padding-24">
        <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
      </li>
    </ul>
  </div>
</div> -->



<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;"></div>
<script>
  function myMap()
  {
    myCenter=new google.maps.LatLng(3.100329, 101.644743);
    var mapOptions= {
      center:myCenter,
      zoom:12, scrollwheel: false, draggable: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

    var marker = new google.maps.Marker({
      position: myCenter,
    });
    marker.setMap(map);
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4nO2W7RBU2pEJW4CNypCwek6qt30sl_s&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<?php include_once 'subcontent/footer.php'; ?>

  <script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/slick/slick.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
