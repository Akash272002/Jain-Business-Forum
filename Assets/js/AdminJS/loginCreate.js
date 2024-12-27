// var base_path = "http://localhost/JBFAdminPanel";
// a=false;
// $(document).ready(function(){
// $("#btn_save").click(function(){
//     // alert('hi');
// if(a==false){
//   loginform();
//  }
//   });
// });

// function loginform()
// {


//   var flag = 0;
//   var mobileNo = $('#userName').val();
//   var password = $('#userPassword').val();
//     // alert("hi");

//     var toastMixin = Swal.mixin({
//       toast: true,
//       icon: 'success',
//       title: 'General Title',
//       animation: false,
//       position: 'center',
//       showConfirmButton: false,
//       timer: 3000,
//       timerProgressBar: true,
//       didOpen: (toast) => {
//           toast.addEventListener('mouseenter', Swal.stopTimer)
//           toast.addEventListener('mouseleave', Swal.resumeTimer)
//       }
//   });
//     if(mobileNo == ''){
//       document.getElementById("erroruname").innerHTML ="Enter Mobile No.";
//       flag = 1;
//       }
//       if(password == ''){
//         document.getElementById("errorpassword").innerHTML ="Enter Password.";
//         flag = 1;
//       }
//       myFunction();
//       if(flag == 0){
//         //alert('hi');

//         if (flag == 0) {
//           $.ajax({
//               url: base_path + "Admin/Login/login_validation", // Ensure the URL matches the controller method
//               method: 'POST',
//               data: $('#Form').serialize(),
//               dataType: 'json',
//               beforeSend: function() {
//                   $('#btn_save').prop('disabled', true);
//                   $('#btn_save').html('Loading');
//               },
//               success: function(result) {
//                   $('#btn_save').prop('disabled', false);
//                   $('#btn_save').html('Login');
  
//                   if (result.status == 1) {
//                       toastMixin.fire({
//                           animation: true,
//                           title: 'Login Successfully'

//                       });
//                        // Update the URL with the user ID without reloading the page
//                          // Store user_id in sessionStorage
//                         sessionStorage.setItem('user_id', result.user_id);
//                       setTimeout(function() {
//                         // window.location.href = base_path + 'employee_controller/Firms/dashboard' + '?user_id=' + result.user_id;
//                         // window.history.pushState({}, '', newUrl);

//                         // window.location.href = result.redirect_url;
//                         // window.location.href = base_path + "Admin/Admin/index"; // Redirect to home after successful login
//                         // Store user_id in global variable
//                         // window.user_id = result.user_id;
//                       }, 1000);
//                   } else {
//                       document.getElementById("errorLogin").innerHTML = result.message;
//                   }
//               },
             
//               error: function(xhr, status, error) {
//                   console.log('AJAX Error:', status, error);
//                   $('#btn_save').prop('disabled', false);
//                   $('#btn_save').html('Login');
//               }
//           });
//       }
//       }
// }
// function myFunction() {
//   var a = document.getElementById("errormobileNo");
//   var b = document.getElementById("errorpassword");
//   setTimeout(function() { a.innerHTML = "" }, 3000);
//   setTimeout(function() { b.innerHTML = "" }, 3000);
// }