
  $(document).ready(function(){
  
    $('#test').slick();


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

  });

$(document).on('click', '.signupform', function(){
  $.confirm({
    title: "Sign Up",
    closeIcon: function(){
      // $('.btn.active').removeClass('active');
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
    '<p class="text-11">By clicking Sign up or Continue with, I agree to RentMarket’s <a target="_blank" href="terms.php">Terms of Service</a>, and <a target="_blank" href="privacy.php">Privacy Policy</a></p>' +
    '</div>' +
    '</form>',
    buttons: {
      login: {
        text: 'Login',
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
  var rfcode = $('.rfcode').text();

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
  $('#loadingpage').show();
  $.ajax({
      url: homeurl+'/vals/signup.php',
      type: 'post',
      data: "signup=1&name="+name+"&email="+email+"&password="+password+"&phone="+phone+"&rfcode="+rfcode,
      success: function( data, textStatus, jQxhr ){
          if(data == 1){
            $.alert({
                type: 'green',
                icon: 'fa fa-thumbs-o-up',
                title: 'Congrats!',
                content: 'You are successfully registered to RentMarket. Please, check your email for email verification.',
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


// $(document).on('click', '.forgotpasswordform', function(){
//   $('.jconfirm').remove();
//  $.confirm({
//    title: 'Recover your account',
//    closeIcon: true,
//    alignMiddle: true,
//    content: '' +
//    '<form action="#">' +
//     '<div class="signupsubtitle">Forgot your username / password?</div>' +
//    '<p id="notify"></p>' +
//    '<div class="form-group">'+
//    '<div class="input-group">'+
//    '<span class="input-group-addon"><i class="fa fa-envelope"></i></span>'+
//    '<input type="email" placeholder="Enter your email" class="email form-control" />' +
//    '</div>' +
//    '</div>' +
//    '</form>',
//    buttons: {
//        signup: {
//            text: '<i class="fa fa-unlock-alt"></i>',
//            btnClass: 'btn-default',
//            action: function(){
//              document.querySelector('.signupform').click();
//               $('.jconfirm').remove();
//            }
//        },
//        login: {
//            text: '<i class="fa fa-sign-in"></i>',
//            btnClass: 'btn-default',
//            action: function(){
//              document.querySelector('.signinform').click();
//               $('.jconfirm').remove();
//            }
//        },
//        submit: {
//            text: 'Send',
//            btnClass: 'btn-primary',
//            action: function(){
//               forgotpasswordformrun();
//               return false;
//             }
//        }
//    }
// });
// });


// function forgotpasswordformrun(){
//   var email = $('.email').val();
//   if(!email){
//       document.getElementById("notify").innerHTML = 'Please enter your email'; return false;
//   }
//   $('#loadingpage').show();
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


// $(".signinform").click(function(){
//  $.confirm({
//     title: 'Login',
//     closeIcon: function(){
//         $('.btn.active').removeClass('active');
//     },
//     alignMiddle: true,
//     content: '' +
//     '<form action="#">' +
//     ''+ continuewith +
//     '</div>' +
//     '<div id="notify" class="text-danger"></div>'+
//     '<div class="form-group">'+
//     '<div class="input-group">'+
//     '<span class="input-group-addon"><i class="fa fa-user"></i></span>'+
//     '<input type="text" name="username" placeholder="Username / Email / Phone" class="username form-control" />' +
//     '</div>' +
//     '</div>' +
//     '<div class="form-group">'+
//     '<div class="input-group">'+
//     '<span class="input-group-addon"><i class="fa fa-lock"></i></span>'+
//     '<input type="password" name="password" placeholder="Password" class="password form-control" />' +
//     '</div>' +
//     '</div>' +
//     '<div class="form-group">'+
//     'Need help with login? <a href="#" class="forgotpasswordform">click here</a>' +
//     '</div>' +
//     '</form>',
//     buttons: {
//         signup: {
//             text: '<i class="fa fa-unlock-alt"></i> Sign Up',
//             btnClass: 'btn-link-rm',
//             action: function(){
//               document.querySelector('.signupform').click();
//             }
//         },
//         login: {
//             text: 'Login',
//             btnClass: 'btn-blue',
//             action: function(){
//               signinformrun();
//               return false;
//             }
//         }
//     }
// });
// });

// function signinformrun() {
//  var username = $('.username').val();
//   var password = $('.password').val();
//  var rdrlocation = $('#rdrlocation').text();

//   if(!username){
//       document.getElementById("notify").innerHTML = 'Please, enter your username / email / phone'; return false;
//   }
//   if(!password){
//       document.getElementById("notify").innerHTML = 'Please, enter your password'; return false;
//   }
//   $('#loadingpage').show();
//   $.ajax({
//       url: homeurl+'/vals/signin.php',
//       type: 'post',
//       data: "signin=1&username="+username+"&password="+password,
//       success: function( data, textStatus, jQxhr ){
//           if(data == 1){
//             window.location.href = rdrlocation;
//           }
//           else{
//             document.getElementById("notify").innerHTML = data;
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

