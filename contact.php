<?php 

include_once 'vals/inc/configAll.php'; 

?>

<?php 

include_once 'vals/inc/configAll.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="SurianaWelfareSociety">

  <?php 
  echo '<title>Contact Us</title>';
  echo '<meta name="description" content="Promoting and Protecting The Rights Of Children">';

  include_once 'subcontent/headersub.php';

  ?>

</head>
<body>

  <?php 

  include_once'subcontent/nav.php';

  ?>

  <div class="w3-container">

   <!-- Contact Container -->
   <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
      <div class="w3-col m5">
        <div class="w3-padding-16"><span class="w3-xxlarge w3-border-teal w3-bottombar">Contact Us</span></div>

        <!-- Team Container -->
        <div class="w3-container w3-padding-64 w3-center" id="team" style="">
          <h1>OUR TEAM</h1>
          <p>Promoting and Protecting The Rights Of Children</p>

          <div class="w3-row"><br>

            <div class="w3-third">
              <img src="assets/images/james.jpg" style="width:60%" class=" w3-hover-opacity">
              <h3>James Nayagam</h3>
              <p>Chairman</p>
            </div>

            <div class="w3-third">
              <img src="assets/images/scott.jpg" style="width:75%" class=" w3-hover-opacity">
              <h3>Scott J Wong</h3>
              <p>Executive Director</p>
            </div>

            <div class="w3-third">
              <img src="assets/images/jeffrey.jpg" style="width:75%" class=" w3-hover-opacity">
              <h3>Jeffrey Tay</h3>
              <p>Community Services Liaison</p>
            </div>

          </div>
        </div>
        <h3>Address</h3>
        <p>Feel free to reach out to us.</p>
        <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Kuala Lumpur, MY</p>
        <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +0123141100 </p>
        <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i> suriana4children@gmail.com</p>
      </div>
      <div class="w3-col m7">

        <form class="modal-content animate" action="/action_page.php">
         <header class="w3-container w3-teal"> 
          <h3>Do you need help now?</h3>
          <p>Please give us all the contact information you can.</p>
        </header>
        
        <div class="container">

          <div class="form-group modal-align row">
           <label><b>Email</b></label>
           <input type="text" placeholder="Enter Email" class="form-control" name="email" required>
         </div>


         <div class="form-group modal-align row">
           <label>Contact Us:</label>
           <textarea placeholder="Please feel free to contact us.." class="form-control" rows="5" cols="100" id="description"></textarea>
           <!-- <input type="checkbox" checked="checked"> Would you like to sign up for a subscription?<br/> -->
           
           
         </div>

         <div class="clearfix form-group col-lg-12">
          <button type="submit" class="modal-btn send-btn">Send</button>
        </div>

      </div>
      <div class="w3-teal modal-footer">
        <p>*All details given will be handled with the upmost privacy and addressed as soon as possible.</p>
      </div>
    </form>
  </div>
</div>
</div>



<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;"></div>
</div>
<?php

include_once 'subcontent/footer.php'; 

// Google Maps API ===============================================
echo '<script>
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
</script>';

echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4nO2W7RBU2pEJW4CNypCwek6qt30sl_s&callback=myMap"></script>';

?>

</body>

</html>
<?php

?>

