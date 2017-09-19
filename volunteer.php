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
	echo '<title>Take Action</title>';
	echo '<meta name="description" content="Promoting and Protecting The Rights Of Children">';

	include_once 'subcontent/headersub.php';

	?>

</head>
<body>

	<?php 

	include_once'subcontent/nav.php';

	?>
	<br/>

	<div class="container">

		<h1>Volunteer and Donation Page</h1>
		<!-- Button to open the modal -->
		<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

		<!-- The Modal (contains the Sign Up form) -->
		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			<form class="modal-content animate" action="/action_page.php">
       <header class="w3-container w3-teal"> 
        <h3>Take Action Now</h3>
        <p>Stand with us to fight against human trafficking and urban poverty.</p>
      </header>
      <div class="container">
        <div class="form-group">
         <label><b>Email</b></label>
         <input type="text" placeholder="Enter Email" class="form-control" name="email" required>
       </div>

       <div class="form-group">
         <label>Password</label>
         <input type="password" placeholder="Enter Password" class="form-control"  name="psw" required>
       </div>


       <div class="form-group">
         <label>Repeat Password</label>
         <input type="password" placeholder="Repeat Password" class="form-control" name="psw-repeat" required>
         <input type="checkbox" checked="checked"> Remember me
         <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
       </div>

       <div class="clearfix form-group">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>

    </div>
    <div class="w3-teal modal-footer">
      <p>*All details given will be handled with the upmost privacy and addressed as soon as possible.</p>
    </div>
  </form>
</div>
</div>

<?php

include_once 'subcontent/footer.php'; 

?>

</body>

</html>
<?php

?>

<!-- Container -->


<!-- Do you need help now? -->
<!-- <div class="w3-container" style="position:relative">
  <a onclick="w3_open()" id="sideTask" class="w3-button w3-xlarge w3-circle w3-red"
  style="position:absolute;top:-28px;right:24px">Do you need help now?</a>

</div> -->

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


