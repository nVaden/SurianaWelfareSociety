
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
    $("#changebox-content").html("Suriana is a part of The Malaysian Royal Police (PDRM’s D11- Child Abuse and Sexual Investigation Division Section) Child Protection Taskforce. Through this, we are able to support and to improve our effectiveness in protecting children from abuse.");
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
    $("#changebox-content").html("In light of the pedophile. Richard Huckle who preyed on our children, NECF has engaged Suriana to conduct the Childsafe Initiative to increase the awareness of the church to be vigilant in protecting our children. The Childsafe Initiative is an Initiative for childcare organizations to implement proper employee screening programs, implementation of SOPs, training programs that include proper ways of disciplining children, cyber-wellness programs for parents and children, and the implementation of standards that would ensure the safety of children in any childcare institution.");
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
    $("#changebox-content").html("Suriana is proactively providing training for parents, children, government officers, volunteers and non-government organizations in the areas that advocate children against child abuse, victims of urban poverty as well as survivors of human trafficking.");
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