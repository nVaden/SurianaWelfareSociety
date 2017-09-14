<?php include_once 'vals/inc/configAll.php'; ?>

<!DOCTYPE html>
<html>
<title>Suriana Welfare Society of Malaysia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/> -->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="/path/to/mixitup.min.js"></script>
<script>
  mixitup('#mix-wrapper', {
    load: {
      sort: 'order:asc' /* default:asc */
    },
    animation: {
      effects: 'fade rotateZ(-180deg)', /* fade scale */
      duration: 700 /* 600 */
    },
    classNames: {
      block: 'programs', /* mixitup */
      elementFilter: 'filter-btn', /* control */
      elementSort: 'sort-btn' /* control */
    },
    selectors: {
      target: '.mix-target' /* .mix */
    }
  });
</script>

<script>
  $(document).ready(function(){
    // $('.your-class').slick({
    //   setting-name: setting-value
    // });


    $('.your-class').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3
    });
  });
</script> -->
<body id="myPage">

  <!-- Sidebar on click -->
  <nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-large" style="display:none;z-index:2" id="mySidebar">

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
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>


</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Suriana Welfare Society Of Malaysia</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">What We Do</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Blog</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Take Action</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
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
  <div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
  </div>


</div>


<!-- Do you need help now? -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" id="sideTask" class="w3-button w3-xlarge w3-circle w3-red"
  style="position:absolute;top:-28px;right:24px">Do you need help now?</a>

</div>
<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
  <h2>OUR FOCUS</h2>
  <p>Promoting and Protecting The Rights Of Children</p>

  <div class="w3-row"><br>

    <div class="w3-quarter">
      <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Johnny Walker</h3>
      <p>Web Designer</p>
    </div>

    <div class="w3-quarter">
      <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Rebecca Flex</h3>
      <p>Support</p>
    </div>

    <div class="w3-quarter">
      <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Jan Ringo</h3>
      <p>Boss man</p>
    </div>

    <div class="w3-quarter">
      <img src="/w3images/avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Kai Ringo</h3>
      <p>Fixer</p>
    </div>

  </div>
</div>
<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

  <div class="w3-quarter">
    <h2>Our Work</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-2 w3-white">
      <img src="assets/images/img2.jpg"  style="width:100%">
      <div class="w3-container">
        <h3>VICTIMS OF CHILD ABUSE</h3>

        <p>Suriana Welfare Society is spearheading a nationwide ChildSafe Initiative that is designed to protect children from the scourge of Pedophiles and Sexual Predators.</p>

      </div>
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-2 w3-white">
      <img src="assets/images/img2.jpg" style="width:100%">
      <div class="w3-container">
        <h3>TRAFFICKING SURVIVORS</h3>

        <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>

      </div>
    </div>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-2 w3-white">
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
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
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
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
        <div class="w3-section">      
          <label>Name</label>
          <input class="w3-input" type="text" name="Name" required>
        </div>
        <div class="w3-section">      
          <label>Email</label>
          <input class="w3-input" type="text" name="Email" required>
        </div>
        <div class="w3-section">      
          <label>Message</label>
          <input class="w3-input" type="text" name="Message" required>
        </div>  
        <input class="w3-check" type="checkbox" checked name="Like">
        <label>I Like it!</label>
        <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
      <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
  </footer>

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

</body>
</html>
