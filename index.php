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
  echo '<title>Suriana Welfare Society of Malaysia</title>';
  echo '<meta name="description" content="Promoting and Protecting The Rights Of Children">';

  include_once 'subcontent/headersub.php';

  ?>

</head>
<body>

  <?php 

  include_once'subcontent/nav.php';

  ?>

  <!-- Image Header -->
  <div class="w3-display-container w3-animate-opacity" id="myPage">
    <img src="assets/images/banner-image.jpg" style="margin-left:7%; width:85%; min-height:350px;max-height:600px;">
    <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Click Here">Do you need help now?</button>
    </div>
  </div>
  <!-- Image END -->


  <!-- Modal / Do you need help? -->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-teal w3-display-container"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
        <h3>Do you need help now?</h3>
        <p>Please give us all the contact information you can.</p>
      </header>
      <div class="container-fluid">

        <form class="form-inline">
          <hr/>
          <div class="form-group col-md-4">
            <label for="name">Full name: </label>
            <input type="email" class="form-control" id="name">
          </div>

          <div class="form-group col-md-4">
            <label for="location">Location:</label>
            <input type="email" class="form-control" id="location">
          </div>

          <div class="form-group col-md-4">
            <label for="number">Contact #: </label>
            <input type="email" class="form-control" id="number">
          </div>

          <div class="form-group" style="margin-top:10px">
            <textarea placeholder="Write a brief description of your situation.." class="form-control" rows="7" cols="100" id="description"></textarea>
          </div>
          <hr/>
          <button type="submit" class="modal-btn btn">Submit</button>
        </form>

      </div>
      <hr/>
      <div class="w3-teal modal-footer">
        <p>*All details given will be handled with the upmost privacy and addressed as soon as possible.</p>
      </div>
    </div>
  </div>
  <!-- Modal END -->

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
    <!-- END -->

    <!-- What We Do -->
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
  <!-- Google Maps ID -->
  <div id="googleMap" style="width:100%;height:420px;"></div>
  <!-- END -->








  <?php 

  include_once 'subcontent/footer.php'; 
// Google Maps JavaScript =========
  echo '
  <script> 
  function myMap() {
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
  function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
  }
  </script>';

  echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4nO2W7RBU2pEJW4CNypCwek6qt30sl_s&callback=myMap"></script>';

  ?>


</body>

</html>

<?php


?>