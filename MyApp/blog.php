
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
	echo '<title>Stories, Articles, and Blog</title>';
	echo '<meta name="description" content="Promoting and Protecting The Rights Of Children">';

	include_once 'subcontent/headersub.php';

	?>

</head>
<body>

	<?php 

	include_once'subcontent/nav.php';

	?>


<!-- Re-sort feature -->
<div class="" style="height:400px;background-color:teal">
	<div style="height:200px; color:white">Here The two features basics are place, to be made</div>
	<button class="sort-btn" data-sort="order:asc">Ascending</button>
	<button class="sort-btn" data-sort="year:desc order:desc">Descending <span class="multi">(Multi)</span></button>


	<li class="mix-target undergraduate">
		<a href="#">Blogs<span>(U)</span></a>
	</li>
	<li class="mix-target graduate">
		<a href="#">Stories<span>(G)</span></a>
	</li>

</div>

<?php

include_once 'subcontent/footer.php'; 

?>

</body>

</html>
<?php

?>