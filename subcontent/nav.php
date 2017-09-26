
<?php include_once 'vals/inc/configAll.php'; ?>

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
  <?php
  echo '<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="'.$defaulturl['home'].'/index.php" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="'.$defaulturl['home'].'/index.php" class="w3-bar-item w3-button teal-theme"><i class="fa fa-home w3-margin-right"></i>Suriana Welfare Society Of Malaysia</a>
  <a href="'.$defaulturl['home'].'/#test-target" class="w3-bar-item w3-button w3-hide-small w3-hover-white">What We Do</a>
  <a href="'.$defaulturl['home'].'/blog.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Blog</a>
  <a href="'.$defaulturl['home'].'/volunteer.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Take Action</a>
  <a href="'.$defaulturl['home'].'/contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
  <input type="hidden" value="'.$defaulturl['home'].'" id="homeurl" /> ';
  ?>

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
    <?php
    echo '<a href="'.$defaulturl['home'].'/index.php" class="w3-bar-item w3-button">What We Do</a>
    <a href="'.$defaulturl['home'].'/blog.php" class="w3-bar-item w3-button">Blog</a>
    <a href="'.$defaulturl['home'].'/volunteer.php" class="w3-bar-item w3-button">Take Action</a>
    <a href="'.$defaulturl['home'].'/contact.php" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>';
    ?>
  </div>

</div>