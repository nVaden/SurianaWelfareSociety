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



<body id="myPage">
<?php include_once 'subcontent/headersub.php'; 
      include_once'subcontent/nav.php'; ?>
<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="assets/images/banner-image.jpg" style="margin-left:7%; width:85%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">Suriana Welfare Society of Malaysia</button>
  </div>
</div>


<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>


<!-- PRIMARY BODY SECTION WITH SORTABLE POSTS -->
<!-- Resort feature -->
<div class="" style="height:1000px;background-color:teal">
  <div style="height:200px; color:white">Here The two features basics are place, to be made</div>
  <button class="sort-btn" data-sort="order:asc">Ascending</button>
  <button class="sort-btn" data-sort="year:desc order:desc">Descending <span class="multi">(Multi)</span></button>


  <li class="mix-target undergraduate">
    <a href="#">Blogs<span>(U)</span></a>
  </li>
  <li class="mix-target graduate">
    <a href="#">Stories<span>(G)</span></a>
  </li>

  <!-- Slick Feature -->

  <div class="test" id="test" data-slick='{"slidesToShow":1, "slidesToScroll": 1, "dots": true, "autoplay": true, "autoplaySpeed": 3000}'>
    <div><h3>1</h3></div>
    <div style="background-color:black"><h3>2</h3></div>
    <div style="background-color:blue"><h3>3</h3></div>
    <div style="background-color:green"><h3>4</h3></div>
    <div style="background-color:purple"><h3>5</h3></div>
    <div style="background-color:white"><h3>6</h3></div>
  </div>



</div>


<!-- Do you need help now? -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" id="sideTask" class="w3-button w3-xlarge w3-circle w3-red"
  style="position:absolute;top:-28px;right:24px">Do you need help now?</a>

</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

  <div class="w3-quarter">
    <h2>Our Work</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-2 w3-white card-display">
      <img src="assets/images/img2.jpg"  style="width:100%">
      <div class="w3-container">
        <h3>VICTIMS OF CHILD ABUSE</h3>

        <p>Suriana Welfare Society is spearheading a nationwide ChildSafe Initiative that is designed to protect children from the scourge of Pedophiles and Sexual Predators.</p>

      </div>
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-2 w3-white card-display">
      <img src="assets/images/img2.jpg" style="width:100%">
      <div class="w3-container">
        <h3>TRAFFICKING SURVIVORS</h3>

        <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>

      </div>
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-2 w3-white card-display">
      <img src="assets/images/img3.jpg" style="width:100%">
      <div class="w3-container">
        <h3>VICTIMS OF URBAN POVERTY</h3>

        <p>Our mission is to serve and bring economic transformation and enrichment to the victims of urban poverty in Malaysia. We promote practical and innovative solutions as well as advocate for the rights of the victims.</p>
      </div>
    </div>
  </div>

</div>

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
