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
    	<div class="container">
    		<div style="padding-top:50px" class="row category-toolbar">
    			<div class="col-lg-7 col-sm-12 col-xs-12 ">

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



    <script>
    	$(".category-toolbar").change(function() {
    		if(document.getElementById('box-1').checked) {
    			
    			$('label[for=box-1]').addClass('active-box');
    			$('label[for=box-1]').siblings().removeClass('active-box');
    			$("#changebox-title").html("Food Aid");
    			$("#changebox-content").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in dolor repellendus rerum esse libero, ut veritatis, modi harum dolores sed ullam consectetur, minima labore. Beatae repellendus voluptatum, dolorum laborum.");
    			$("#content-image").attr('src', 'assets/images/food-icon.png');

    		}
    		else if(document.getElementById('box-2').checked) {
    			
    			$('label[for=box-2]').addClass('active-box');
    			$('label[for=box-2]').siblings().removeClass('active-box');
    			$("#changebox-title").html("Advocacy");
    			$("#changebox-content").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in dolor repellendus rerum esse libero, ut veritatis, modi harum dolores sed ullam consectetur, minima labore. Beatae repellendus voluptatum, dolorum laborum.");
    			$("#content-image").attr('src', 'assets/images/advo-icon.png');


    		}
    		else if(document.getElementById('box-3').checked) {
    			
    			$('label[for=box-3]').addClass('active-box');
    			$('label[for=box-3]').siblings().removeClass('active-box');
    			$("#changebox-title").html("Empowerment Programs");
    			$("#changebox-content").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in dolor repellendus rerum esse libero, ut veritatis, modi harum dolores sed ullam consectetur, minima labore. Beatae repellendus voluptatum, dolorum laborum.");
    			$("#content-image").attr('src', 'assets/images/empower-icon.png');

    		}
    		else if(document.getElementById('box-4').checked) {
    			
    			$('label[for=box-4]').addClass('active-box');
    			$('label[for=box-4]').siblings().removeClass('active-box');
    			$("#changebox-title").html("Counselling");
    			$("#changebox-content").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in dolor repellendus rerum esse libero, ut veritatis, modi harum dolores sed ullam consectetur, minima labore. Beatae repellendus voluptatum, dolorum laborum.");
    			$("#content-image").attr('src', 'assets/images/counsel-icon.png');

    		}
    		else if(document.getElementById('box-5').checked) {
    			
    			$('label[for=box-5]').addClass('active-box');
    			$('label[for=box-5]').siblings().removeClass('active-box');
    			$("#changebox-title").html("Reform initiatives");
    			$("#changebox-content").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in dolor repellendus rerum esse libero, ut veritatis, modi harum dolores sed ullam consectetur, minima labore. Beatae repellendus voluptatum, dolorum laborum.");
    			$("#content-image").attr('src', 'assets/images/reform-icon.png');

    		}
    		else if(document.getElementById('box-6').checked) {
    			
    			$('label[for=box-6]').addClass('active-box');
    			$('label[for=box-6]').siblings().removeClass('active-box');
    			$("#changebox-title").html("Training");
    			$("#changebox-content").html("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam in dolor repellendus rerum esse libero, ut veritatis, modi harum dolores sed ullam consectetur, minima labore. Beatae repellendus voluptatum, dolorum laborum.");
    			$("#content-image").attr('src', 'assets/images/train-icon.png');

    		}
    	});
    </script>