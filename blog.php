
<?php 

include_once 'vals/inc/configAll.php'; 


$targetpagelink=$defaulturl['blog'];

$whereclause = "WHERE b.status = 1 ";
// $agenturl = 'blog.php?';

$blogtitle = 'All blog posts';
if(isset($_GET['cat']) && !empty($_GET['cat'])){
	$blogcategory = mysqli_real_escape_string($connecDB,$_GET['cat']);
	$whereclause .= 'AND b.category = "'.$blogcategory.'"'; 
	$blogtitle = $blogcategory;
	$targetpagelink = $defaulturl['home'].'/blog.php?cat='.$blogcategory;
}

//categories
$categoriescol = '<h2 style="margin-top:50px;">Categories</h2>';
$categoriescol .='<form name="cats" method="get" action="'.$targetpagelink.'"><div class="blogcategorys"><select name="cat">';
$categoriescol .='<option value="" categoryid="'.$allcats['id'].'">All Categories</option>';
$getallcats = mysqli_query($connecDB,"SELECT * FROM blogcategory");
while($allcats = mysqli_fetch_array($getallcats)){
	if($allcats['category'] == $blogcategory){
		$categoriescol .= '<option value="'.$allcats['category'].'" selected>'.$allcats['category'].'</option>';
	}else{
		$categoriescol .= '<option value="'.$allcats['category'].'">'.$allcats['category'].'</option>';
	}
}
$categoriescol .='</select><input type="submit" /></div></form>';


$targetpage = $targetpagelink."&page";
$targetpage = preg_replace('/&/', '?', $targetpage, 1);



$blogsql = "SELECT * FROM blog b ".$whereclause." order by b.postdate desc";
//$blogquery = mysqli_query($connecDB,$blogsql);

$sql = mysqli_query($connecDB,$blogsql);

$total = mysqli_num_rows($sql);

$adjacents = 3;

$limit = 6; //how many items to show per page
$counter=1;

if(isset($_GET['page']))
	$page = $_GET['page'];
else
	$page=1;

if($page){
$start   = ($page - 1) * $limit; //first item to display on this page
}else{
	$start = 0;
}

/* Setup page vars for display. */
if ($page == 0) $page = 1; //if no page var is given, default to 1.
$prev = $page - 1; //previous page is current page - 1
$next = $page + 1; //next page is current page + 1
$lastpage = ceil($total/$limit); //lastpage.
$lpm1 = $lastpage - 1; //last page minus 1

$sql2 = "$blogsql limit $start, $limit";

$sql_query = mysqli_query($connecDB,$sql2);
$curnm = mysqli_num_rows($sql_query);

/* CREATE THE PAGINATION */

$pagination = "";
if($lastpage > 1)
{
	$pagination .= "<div> <ul class='pagination'>";
	if ($page > $counter+1) {
		$pagination.= "<li><a href=\"$targetpage=$prev\">&laquo;</a></li>";
	}

	if ($lastpage < 7 + ($adjacents * 2))
	{
		for ($counter = 1; $counter <= $lastpage; $counter++)
		{
			if ($counter == $page)
				$pagination.= "<li class='active'><a href='#'>$counter</a></li>";
			else
				$pagination.= "<li><a href=\"$targetpage=$counter\">$counter</a></li>";
		}
	}
elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
{
//close to beginning; only hide later pages
	if($page < 1 + ($adjacents * 2))
	{
		for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
		{
			if ($counter == $page)
				$pagination.= "<li class='active'><a href='#'>$counter</a></li>";
			else
				$pagination.= "<li><a href=\"$targetpage=$counter\">$counter</a></li>";
		}
		$pagination.= "<li><a href='#'>...</a></li>";
		$pagination.= "<li><a href=\"$targetpage=$lpm1\">$lpm1</a></li>";
		$pagination.= "<li><a href=\"$targetpage=$lastpage\">$lastpage</a></li>";
	}
//in middle; hide some front and some back
	elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
	{
		$pagination.= "<li><a href=\"$targetpage=1\">1</a></li>";
		$pagination.= "<li><a href=\"$targetpage=2\">2</a></li>";
		$pagination.= "<li><a href='#'>...</a></li>";
		for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
		{
			if ($counter == $page)
				$pagination.= "<li class='active'><a href='#'>$counter</a></li>";
			else
				$pagination.= "<li><a href=\"$targetpage=$counter\">$counter</a></li>";
		}
		$pagination.= "<li><a href='#'>...</a></li>";
		$pagination.= "<li><a href=\"$targetpage=$lpm1\">$lpm1</a></li>";
		$pagination.= "<li><a href=\"$targetpage=$lastpage\">$lastpage</a></li>";
	}
//close to end; only hide early pages
	else
	{
		$pagination.= "<li><a href=\"$targetpage=1\">1</a></li>";
		$pagination.= "<li><a href=\"$targetpage=2\">2</a></li>";
		$pagination.= "<li><a href='#'>...</a></li>";
		for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage;
			$counter++)
		{
			if ($counter == $page)
				$pagination.= "<li class='active'><a href='#'>$counter</a></li>";
			else
				$pagination.= "<li><a href=\"$targetpage=$counter\">$counter</a></li>";
		}
	}
}

//next button
if ($page < $counter - 1)
	$pagination.= "<li><a href=\"$targetpage=$next\">&raquo;</a></li>";
else
	$pagination.= "";
$pagination.= "</ul></div>\n";
}
//end of pagination

$blogcategorysstr = '';
$blogcol='';
$totalposts = mysqli_num_rows($sql_query);
if($totalposts>0){
	while($blogrow = mysqli_fetch_array($sql_query)){
		$blogurl = $defaulturl['home'].'/blogview.php?bid='.$blogrow['id'].'&burl='.$blogrow['url'];
		$blogcol .='<div class="col-sm-12 bloglist">
		<div class="col-lg-2 col-sm-3 paddingno">
		<a href="'.$blogurl.'"><img src="'.$blogimgcoverurl.'/thumb/'.$blogrow['cover'].'" alt="'.$blogrow['title'].'" class="img-responsive" /></a>
		</div>
		<div class="col-lg-10 col-sm-9">
		<div class="title text-limit-1"><a href="'.$blogurl.'" title="'.$blogrow['title'].'">'.$blogrow['title'].'</a></div>
		<p class="text-limit-3">'.$blogrow['shortinfo'].'</p>
		</div>
		<div class="col-sm-12 paddingno text-muted text-limit-1">comments: 12, category: '.$blogrow['category'].'</div>
		</div>';
	}
}
else {
	$blogcol .= '<div class="col-sm-12"><p class="alert alert-warning text-center"><i class=="fa fa-warning"></i> No blog posts found!</p></div>';
}



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
	echo '<link href="'.$defaulturl['home'].'/assets/css/blog.css" rel="stylesheet">';

	?>

</head>
<body>

	<?php 

	include_once'subcontent/nav.php';

	?>


	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-md-3 col-sm-4 hidden-xs">
				<?php
				echo $categoriescol;
				?>
			</div>
			<div class="col-md-9 col-sm-8">
				<div class="col-sm-12" style="margin-bottom: 30px;margin-top: 40px;"><h1><?php echo $blogtitle; ?></h1></div>

				<?php
				echo $blogcol;

				echo $pagination;
				?>

			</div>
		</div>
	</div>


<?php

include_once 'subcontent/footer.php'; 

?>

</body>

</html>
<?php

?>