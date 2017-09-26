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
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-#009688" title="Click Here">Do you need help now?</button>
    </div>
  </div>
  <!-- Image END -->


  <!-- Modal / Do you need help? -->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-#009688 w3-display-container"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-#009688 w3-display-topright"><i class="fa fa-remove"></i></span>
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
      <div class="w3-#009688 modal-footer">
        <p>*All details given will be handled with the upmost privacy and addressed as soon as possible.</p>
      </div>
    </div>
  </div>
  <!-- Modal END -->

  <!-- Main Blog Body -->
  <div class="w3-row-padding w3-padding-64" style="background-color:#01C1C6; height:800px">

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
      <br/>
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
    <div class="w3-container">
      <a class="pull-right" style="padding-top:10px;text-decoration: underline" href="#"><h4>View More -></h4></a>
    </div>
    <hr/>
    <!-- END -->

    <!-- What We Do -->
  </div>
  <hr id="test-target"/>
  <br />

  <div class="what-we-do"  style="height:280px; margin-top:10%">
    <h1 href="info-sect" class="info-sect"> Suriana Welfare Society of Malaysia </h1>
    <br/>
    <h2 align="center"> What We Do: </h2>
    <div class="container">
      <p>Suriana Welfare Society is a registered NGO in Kuala Lumpur. Through the years since our inception is 2011, we have been actively involved in the promoting and protecting the rights of children of who have been subject to abuse, abandonment, neglect, exploitation as well subject to human trafficking.</p>

      <p>Through our programs, Suriana reaches out to the following:</p>

      <li>Victims of Urban Poverty</li>
      <li>Victims of Child Abuse</li>
      <li>Survivors of Human Trafficking</li>
      <br/>
      <p>Suriana Welfare Society passionately pursues our mission to serve with both excellence and compassion because the victims and survivors of whom we serve deserve nothing less.
      </p>
    </div>
    <div class="container">
      <div class="col-lg-4 do-box">
        <h3 style="color: #01C1C6">VICTIMS OF URBAN POVERTY</h3>
        <p>Our mission is to serve and bring economic transformation and enrichment in the lives of the victims of urban poverty in Malaysia. We achieve this through practical and innovative solutions and we advocate for the rights of the victims.</p>

        <p>We serve the Urban Poor Communities by providing for their felt needs and mentorship in financial management and in some cases, micro financing as well as business opportunities. It is our hope and aspiration that the individual and their family’s dignity are restored and that the cycle of poverty will be overcome. We aim to achieve this through improved education, provision of nutrition and raising the awareness of the importance of hygiene and expansion of economic opportunity to the victims of urban poverty.</p>
      </div>

      <div class="col-lg-4 do-box">
        <h3 style="color: #01C1C6">TRAFFICKING SURVIVORS</h3>
        <p>Human trafficking is a form of modern slavery — a multi-billion dollar criminal industry that denies freedom to 20.9 million people around the world. And no matter where you live, chances are it’s happening nearby. From the girl forced into prostitution, to the man discovered in a restaurant kitchen, a foreign laborer stripped of his passport and held against his will. All trafficking survivors share one essential experience: the loss of freedom.</p>

        <p>The human trafficking survivors become trapped and fear leaving for myriad reasons, including psychological trauma, shame, emotional attachment, or physical threats to themselves or their children’s safety.</p>

        <p>Suriana Welfare Society has been appointed by the Ministry of Social Welfare to conduct counseling sessions and empowerment programs to restore dignity to the Survivors of Human Trafficking.</p>
      </div>

      <div class="col-lg-4 do-box">
        <h3 style="color:#01C1C6">VICTIMS OF CHILD ABUSE</h3>
        <p>Child abuse is subjecting a child through action or failing to act: causes injury, death, emotional harm or risk of serious harm to a child, many forms of child maltreatment, including neglect, physical abuse, sexual abuse, exploitation, emotional abuse, denying a child his/her basic rights to proper nutrition and education, caning and detaining a child in juvenile or refugee detention centers.</p>

        <p>Suriana Welfare Society is spearheading a nationwide ChildSafe Initiative that is designed to protect children from the scourge of Pedophiles and Sexual Predators. This campaign encompasses implementing Standard Operating Procedures, Tougher Screening Procedures and Educational Initiatives for educators, parents and children.</p>
      </div>
    </div>


    <div class="container">
      <div style="padding-top:20px; padding-bottom:20px" class="row category-toolbar">
        <div class="col-lg-7 col-sm-12 col-xs-12">

          <label class="categorybox active-box col-xs-6" for="box-1">
            Food Aid
            <div><img src="assets/images/food-icon.png" class="change-icon"></div>
          </label>
          <label class="categorybox col-xs-6" for="box-2">
            Advocacy
            <div><img src="assets/images/advo-icon.png" class="change-icon"></div>
          </label>
          <label class="categorybox col-xs-6" for="box-3">
            Empowerment Programs
            <div><img src="assets/images/empower-icon.png" class="change-icon"></div>
          </label>
          <label class="categorybox col-xs-6" for="box-4">
            Counselling
            <div><img src="assets/images/counsel-icon.png" class="change-icon"></div>
          </label>
          <label class="categorybox col-xs-6" for="box-5">
            Reform initiatives
            <div><img src="assets/images/reform-icon.png" class="change-icon"></div>
          </label>
          <label class="categorybox col-xs-6" for="box-6">
            Training
            <div><img src="assets/images/train-icon.png" class="change-icon"></div>
          </label>

          <input type="radio" id="box-1" class="incategory hidden" name="category" value="live" catid="1" checked />
          <input type="radio" id="box-2" class="incategory hidden" name="category" value="work" catid="2" />
          <input type="radio" id="box-3" class="incategory hidden" name="category" value="party" catid="3" />
          <input type="radio" id="box-4" class="incategory hidden" name="category" value="live" catid="4" checked />
          <input type="radio" id="box-5" class="incategory hidden" name="category" value="work" catid="5" />
          <input type="radio" id="box-6" class="incategory hidden" name="category" value="party" catid="6" />

        </div>
        <div class="col-lg-5" id="changebox">

          <div id="changebox-title">
            Food Aid
          </div>
          <div class="col-lg-12 text-center">
            <img id="content-image" src="assets/images/food-icon.png" class="change-icon">
          </div>

          <div id="changebox-content" class="col-lg-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione commodi, sed perspiciatis cupiditate accusantium at corrupti, eos distinctio enim dolor eius magnam saepe reprehenderit asperiores adipisci voluptas rem ab molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta beatae dicta ratione nihil iusto laboriosam enim eius, corporis assumenda ea dolorum! Cum veniam excepturi provident nobis sunt voluptatibus quos repellendus!
          </div>
          <hr/>
          <a class="pull-right" style="padding-top:3px" href="#"><p>View More -></p></a>




        </div>
      </div>
    </div>
    <!-- Google Maps ID -->
    <div class="container">
      <div id="googleMap" style="width:100%;height:420px;"></div>
    </div>
    <hr/>
    <br/>
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