var homeurl = $('#homeurl').val();
var rdrlocation = $('#rdrlocation').text();

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

emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
$(".signupform").click(function(){

  $.confirm({
    title: "Sign Up",
    closeIcon: function(){
        $('.btn.active').removeClass('active');
    },
    alignMiddle: true,
    content: '' +
    '<form action="#">' +
    '<div class="signupsubtitle">Get your free account and enjoy booking or renting</div>' +
    '<div id="notify"></div>' +
    '<div class="form-group">'+
    '<input type="text" placeholder="Full name" class="userfname form-control" />' +
    '</div>' +
    '<div class="form-group">' +
    '<input type="email" placeholder="Email" class="useremail form-control" />' +
    '</div>' +
    '<div class="form-group">' +
    '<input type="password" placeholder="Create new password" class="userpassword form-control" />' +
    '</div>' +
    '<div class="form-group">' +
    '<input type="text" placeholder="Phone number" class="userphone form-control" />' +
    '</div>' +
    '<div class="form-group">'+
    '<p class="text-11">By clicking Sign up or Continue with, I agree to Suriana Welfare Society’s <a target="_blank" href="terms.php">Terms of Service</a>, and <a target="_blank" href="privacy.php">Privacy Policy</a></p>' +
    '</div>' +
    '</form>',
    buttons: {
      login: {
          text: '<i class="fa fa-sign-in"></i> Login',
          btnClass: 'btn-link-rm',
          action: function(){
            document.querySelector('.signinform').click();
          }
      },
      signup: {
        text: 'Sign Up',
        btnClass: 'btn-blue',
        action: function(){
          //trigger sign up ajax
          signupformrun();
          return false;
        }
      }
    }
});
});

function signupformrun(){
  var name = $('.userfname').val();
  var email = $('.useremail').val();
  var password = $('.userpassword').val();
  var phone = $('.userphone').val();

  if(!name){
      document.getElementById("notify").innerHTML = 'Please, enter your name'; return false;
  }
  if(!email){
      document.getElementById("notify").innerHTML = 'Please, enter your email'; return false;
  }
  if(!emailfilter.test(email)){
    document.getElementById("notify").innerHTML = 'Please, enter correct email'; return false;
  }
  if(!password){
      document.getElementById("notify").innerHTML = 'Please, type password'; return false;
  }
  if (!phone) {
    document.getElementById("notify").innerHTML = 'Please, enter your phone'; return false;
  }

  $.ajax({
      url: homeurl+'/vals/signup.php',
      type: 'post',
      data: "signup=1&name="+name+"&email="+email+"&password="+password+"&phone="+phone,
      success: function( data, textStatus, jQxhr ){
          if(data == 1){
            $.alert({
                type: 'green',
                icon: 'fa fa-thumbs-o-up',
                title: 'Congrats!',
                content: 'You are successfully registered with Suriana.',
                buttons: {
                  Ok:{
                    action: function(){
                      window.location.href = rdrlocation;
                    }
                  }
                }
            });
          }
          else{
            document.getElementById("notify").innerHTML = data;
          }
      },
      complete: function(){
        $('#loadingpage').hide();
      },
      error: function( jqXhr, textStatus, errorThrown ){
          console.log( errorThrown );
      }
  });
}

$(".signinform").click(function(){
  $.confirm({
    title: 'Login',
    closeIcon: function(){
        // $('.btn.active').removeClass('active');
    },
    alignMiddle: true,
    content: '' +
    '<form action="#">' +
    '</div>' +
    '<div id="notify" class="text-danger"></div>'+
    '<div class="form-group">'+
    '<div class="input-group">'+
    '<span class="input-group-addon"><i class="fa fa-user"></i></span>'+
    '<input type="text" name="username" placeholder="Username / Email / Phone" class="username form-control" />' +
    '</div>' +
    '</div>' +
    '<div class="form-group">'+
    '<div class="input-group">'+
    '<span class="input-group-addon"><i class="fa fa-lock"></i></span>'+
    '<input type="password" name="password" placeholder="Password" class="password form-control" />' +
    '</div>' +
    '</div>' +
    '<div class="form-group">'+
    'Need help with login? <a href="#" class="forgotpasswordform">click here</a>' +
    '</div>' +
    '</form>',
    buttons: {
        signup: {
            text: '<i class="fa fa-unlock-alt"></i> Sign Up',
            btnClass: 'btn-link-rm',
            action: function(){
              document.querySelector('.signupform').click();
            }
        },
        login: {
            text: 'Login',
            btnClass: 'btn-blue',
            action: function(){
              signinformrun();
              return false;
            }
        }
    }
});
});

function signinformrun() {
  var username = $('.username').val();
  var password = $('.password').val();

  if(!username){
      document.getElementById("notify").innerHTML = 'Please, enter your username / email / phone'; return false;
  }
  if(!password){
      document.getElementById("notify").innerHTML = 'Please, enter your password'; return false;
  }

  $.ajax({
      url: homeurl+'/vals/signup.php',
      type: 'post',
      data: "signin=1&username="+username+"&password="+password,
      success: function( data, textStatus, jQxhr ){
          if(data == 1){
            window.location.href = rdrlocation;
          }
          else{
            document.getElementById("notify").innerHTML = data;
          }
      },
      complete: function(){
        $('#loadingpage').hide();
      },
      error: function( jqXhr, textStatus, errorThrown ){
          console.log( errorThrown );
      }
  });
}


// $(document).on('click', '.forgotpasswordform', function(){
//   $('.jconfirm').remove();
//   $.confirm({
//     title: 'Recover your account',
//     closeIcon: true,
//     alignMiddle: true,
//     content: '' +
//     '<form action="#">' +
//     '<div class="signupsubtitle">Forgot your username / password?</div>' +
//     '<p id="notify"></p>' +
//     '<div class="form-group">'+
//     '<div class="input-group">'+
//     '<span class="input-group-addon"><i class="fa fa-envelope"></i></span>'+
//     '<input type="email" placeholder="Enter your email" class="email form-control" />' +
//     '</div>' +
//     '</div>' +
//     '</form>',
//     buttons: {
//         signup: {
//             text: '<i class="fa fa-unlock-alt"></i>',
//             btnClass: 'btn-default',
//             action: function(){
//               document.querySelector('.signupform').click();
//               $('.jconfirm').remove();
//             }
//         },
//         login: {
//             text: '<i class="fa fa-sign-in"></i>',
//             btnClass: 'btn-default',
//             action: function(){
//               document.querySelector('.signinform').click();
//               $('.jconfirm').remove();
//             }
//         },
//         submit: {
//             text: 'Send',
//             btnClass: 'btn-primary',
//             action: function(){
//               forgotpasswordformrun();
//               return false;
//             }
//         }
//     }
// });
// });


// function forgotpasswordformrun(){
//   var email = $('.email').val();
//   if(!email){
//       document.getElementById("notify").innerHTML = 'Please enter your email'; return false;
//   }
// 
//   $.ajax({
//       url: homeurl+'/vals/forgotpassword.php',
//       type: 'post',
//       data: "passwordreset="+email,
//       success: function( data, textStatus, jQxhr ){
//           if(data == 1){
//             $.confirm({
//               title: 'Email is sent',
//               type: 'green',
//               closeIcon: true,
//               content: 'We have sent you password reset link to your email. Please check your inbox as well as junk/spam folder.',
//               buttons:{
//                 ok: {
//                     text: 'Ok',
//                     action: function(){
//                       $('.jconfirm').remove();
//                     }
//                 }
//               }
//             });
//           }
//           else{
//             $.confirm({
//               title: 'Error!',
//               type: 'red',
//               closeIcon: true,
//               content: data,
//               buttons:{
//                 forgot: {
//                     text: 'Retry',
//                     action: function(){

//                     }
//                 }
//               }
//             });
//           }
//       },
//       complete: function(){
//         $('#loadingpage').hide();
//       },
//       error: function( jqXhr, textStatus, errorThrown ){
//           console.log( errorThrown );
//       }
//   });
// }


// Change Box Feature ========================================
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


