<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF=8">
	<title>Take Action</title>
	<link rel="stylesheet" href="default.css"/>
	<script src="main.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/slick/main.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/pins/bootstrap.css">
</head>

<?php include_once 'subcontent/headersub.php'; 
include_once'subcontent/nav.php'; ?>

<h1>Volunteer and Donation Page</h1>

<body>
	<!-- Button to open the modal -->
	<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

	<!-- The Modal (contains the Sign Up form) -->
	<div id="id01" class="modal">
		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
		<form class="modal-content animate" action="/action_page.php">
			<div class="container">
				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<label><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				<input type="checkbox" checked="checked"> Remember me
				<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				<div class="clearfix">
					<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					<button type="submit" class="signupbtn">Sign Up</button>
				</div>
			</div>
		</form>
	</div>

</body>
</html>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
</script>