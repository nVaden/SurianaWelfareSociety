
$(document).ready(function(){

  // Slick initalize ======================================
  $('#test').slick();




// Side Bar Pop Up ============================================
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}


// Volunteer Page Modal =================================
var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


});



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


  //     mixitup('#mix-wrapper', {
  //   load: {
  //     sort: 'order:asc' /* default:asc */
  //   },
  //   animation: {
  //     effects: 'fade rotateZ(-180deg)', /* fade scale */
  //     duration: 700 /* 600 */
  //   },
  //   classNames: {
  //     block: 'programs', /* mixitup */
  //     elementFilter: 'filter-btn', /* control */
  //     elementSort: 'sort-btn' /* control */
  //   },
  //   selectors: {
  //     target: '.mix-target' /* .mix */
  //   }
  // });