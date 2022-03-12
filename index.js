// var login =document.querySelector(".user");
// var form = document.querySelector(".form");
// login.addEventListener("click", function() {
//      form.classList.add("login-active");
//      form.classList.remove("sign-up-active");
// });

// var signup = document.querySelector(".sign-up-btn");
// signup.addEventListener("click",function(){
//      form.classList.add("sign-up-active");
//      form.classList.remove("login-active");
// });

// var cancle = document.getElementsByClassName(".form-cancel");
// Array.from(cancle).forEach
// cancle.addEventListener('click',()=>{
//      form.classList.remove("login-active");
//      form.classList.remove("sign-up-active");

// });

// login.classList.add(".login-active");
// login.classList.remove(".sign-up-active");

$(document).on('click','.user,.already-account',function(){
     $('.form').addClass('login-active').removeClass('sign-up-active')
 });
 
 $(document).on('click','.sign-up-btn',function(){
     $('.form').addClass('sign-up-active').removeClass('login-active')
 });
 
 $(document).on('click','.form-cancel',function(){
     $('.form').removeClass('login-active').removeClass('sign-up-active')
 })
