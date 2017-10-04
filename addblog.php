<?php
include_once 'vals/inc/configAll.php';

$blogcategoryquery = mysqli_query($connecDB,"SELECT * FROM blogcategory order by category");
$blogcategorycol='<select name="category" required class="form-control"><option value=""> - Choose -</option>';
while($blogcategoryrow = mysqli_fetch_array($blogcategoryquery)){
  $blogcategorycol .='<option value="'.$blogcategoryrow['id'].'">'.$blogcategoryrow['category'].'</option>';
}
$blogcategorycol .='</select>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="RentMarket">

	<?php
	echo '<title>Add Blog</title>';
	echo '<meta name="description" content="">';
	include 'subcontent/headersub.php';
	?>
</head>

<body>
	<?php
	include 'subcontent/nav.php';
	?>

	<!-- Page Content -->
	<div class="container">
		<div class="container-fluid" style="margin-top: 60px;">
			<div class="col-sm-12">
				<?php
				echo $notficationmsg;
				?>
				<form action="vals/addblog.php" method="post" enctype="multipart/form-data">

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Title *</label>
								<input type="text" required name="title" class="form-control" placeholder="Give a beautiful title">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Cover image *</label>
								<input type="file" required name="cover" class="form-control">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Category *</label>
								<?php
								echo $blogcategorycol;
								?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Short description *</label>
								<textarea  name="shortinfo" required maxlength="250" class="form-control"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label>Post body</label>
								<textarea  name="fullpost" required rows="6" class="form-control summernote"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group pull-right">
								<button type="submit" name="publish" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	<!-- /.container -->
	
	<?php
	include 'subcontent/footer.php';
	?>
</body>

</html>