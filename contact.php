<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF=8">
  <title></title>
  <link rel="stylesheet" href="default.css"/>
  <script src="main.js"></script>
</head>
<body>
 <header>
 </header>

 <!-- Contact Container -->
 <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
      <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>

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
</body>
</html>
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