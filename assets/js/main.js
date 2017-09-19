
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

