<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
  </head>
  <body>
  
  <div class="container">
    <div class="card">
      <form action="login-submit.php" method="post">
        <div class="form" >
            <div class="left-side"> <span></span> <span></span> <span></span> <span></span> </div>
            <div class="right-side">
                <div class="signin_form s_form ">
                    <div class="login">
                        <h2>User Login</h2>
                    </div>
                    <div class="input_text"> <input type="text" name="email" placeholder="Email-Id"> <i class="fa fa-user"></i> </div>
                    <div class="input_text"> <input class="signin_pass" type="password" name="password" placeholder="Password"> <i class="fa fa-lock"></i> <i class="fa fa-eye-slash"></i> </div>
                    <div class="login_btn"> <button class="login_button">LOGIN</button> </div>
                    <div class="forgot">
                        <p>Forgot <a href="forgot_password.php">Password</a> ?</p>
                    </div>
                      </div>
                
             
            </div>
        </div>
    </div>
</form>
</div>
        
       <!-- <form action="login-submit.php" method="post">
        <div class="mt-3 inputbox"> <input type="text" class="form-control" name="email" placeholder="Email"> <i class="fa fa-user"></i> </div>
        <div class="inputbox"> <input type="password" class="form-control" name="password" placeholder="Password"> <i class="fa fa-lock"></i> </div>
    </div>
    <div class="d-flex justify-content-between">
        <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Keep me Logged in </label> </div>
        <div> <a href="#" class="forgot">Forgot Password?</a> </div>
    </div>
    <div class="mt-2"> <button class="btn btn-primary btn-block">Log In</button> </div>
</form>-->
<script>
  var create_acc=document.querySelector(".create_acc");
var login_acc=document.querySelector(".login_acc");
var s_form=document.querySelectorAll(".s_form");
var login_button=document.querySelector(".login_button");
var signin_form_input=document.querySelectorAll(".signin_form input");

var signin_eye_click = document.querySelector(".fa-eye-slash");
var signin_type = document.querySelector(".signin_pass");
var set_signin_eye = document.querySelector(".fa-eye-slash");

var signup_eye_click = document.querySelector(".signup_eye");
var signup_type = document.querySelector(".signup_pass");
var set_signup_eye = document.querySelector(".signup_eye");

var signup_form_input=document.querySelectorAll(".signup_form input");
var signup_button=document.querySelector(".signup_button");


let formnumber=0;

create_acc.addEventListener('click',function(){
formnumber++;
create();
});

login_acc.addEventListener('click',function(){
formnumber--;
create();
});



function create(){
s_form.forEach((form_num)=>{
form_num.classList.add('d-none');
});
s_form[formnumber].classList.remove('d-none');
};


login_button.onclick=function(){
signin_form_input.forEach((e)=>{
if(e.value.length<1){ e.classList.add('signin_warn'); } }); }; signin_form_input.forEach((e)=>{
    e.addEventListener('keyup',function(){
    if(e.value.length<1){ e.classList.add('signin_warn'); } else{ e.classList.remove('signin_warn'); } }); }); signup_button.onclick=function(){ signup_form_input.forEach((signup_e)=>{
        if(signup_e.value.length<1){ signup_e.classList.add('signup_warn'); } }); }; signup_form_input.forEach((signup_e)=>{
            signup_e.addEventListener('keyup',function(){
            if(signup_e.value.length<1){ signup_e.classList.add('signup_warn'); } else{ signup_e.classList.remove('signup_warn'); } }); }); signin_eye_click.addEventListener('click',function(){ if(signin_type.type=="password" ){ signin_type.type="text" ; set_signin_eye.classList.remove('fa-eye-slash'); set_signin_eye.classList.add('fa-eye'); signin_type.classList.add('signin_eye_wrn'); } else{ signin_type.type="password" ; set_signin_eye.classList.add('fa-eye-slash'); set_signin_eye.classList.remove('fa-eye'); signin_type.classList.remove('signin_eye_wrn'); } }); signup_eye_click.addEventListener('click',function(){ if(signup_type.type=="password" ){ signup_type.type="text" ; set_signin_eye.classList.remove('fa-eye-slash'); set_signup_eye.classList.add('fa-eye'); signup_type.classList.add('signup_eye_wrn'); } else{ signup_type.type="password" ; set_signin_eye.classList.add('fa-eye-slash'); set_signup_eye.classList.remove('fa-eye'); signup_type.classList.remove('signup_eye_wrn'); } });
  </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>