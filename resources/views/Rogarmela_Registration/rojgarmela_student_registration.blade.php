<!DOCTYPE html>
<<<<<<< HEAD
<html lng="en">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rojarmela.com: mainpage</title>
    <link href="{{url('/')}}/boot/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/css/body_css.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


  </head>

  <body >
    
         <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
              <a class="navbar-brand" href="#">Rojgarmela.com</a>
              <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About US</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contect US</a>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link" href="#">Apply</a>
                  </li>    
                  <li class="nav-item">
                    <a class="nav-link" href="#">Notice</a>
                  </li> 
                </ul>
              </div>  
            </nav>

       <div class="container-fluid">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
  <p>The navbar-expand-xl|lg|md|sm class determines when the navbar should stack vertically (on extra large, large, medium or small screens).</p>
=======
<!-- saved from url=(0044)https://s.codepen.io/oceatoon/fullpage/IeqHp -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
  <title>Registration Form</title>
  
  
  
  
      <style>
      * {
  margin: 0;
  padding: 0;
}

body {
  background: #0F0F0F;
  color:white;
  font-family: "Open Sans", sans-serif;
}

h2 {
  color:white;
  font-family: "Sofia", cursive;
  font-size: 15px;
  font-weight: bold;
  font-size: 3.6em;
  text-align: center;
  margin-bottom: 20px;
}

a {
  color: white;
  text-decoration: none;
}

.login {
  width: 350px;
  position: absolute;
  top: 10%;
  left: 50%;
  margin-left: -175px;
}

input[type="text"], input[type="password"] {
  width: 350px;
  padding: 20px 0px;
  background: transparent;
  border: 0;
  border-bottom: 1px solid #435160;
  outline: none;
  color: #6D7781;
  font-size: 16px;
}
input[type=checkbox] {
  display: none;
}

label {
  display: block;
  position: absolute;
  margin-right: 10px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: transparent;
  content: "";
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  border: 3px solid #435160;
}

#agree:checked ~ label[for=agree] {
  background: #435160;
}

input[type="submit"] {
  background: #1FCE6D;
  border: 0;
  width: 350px;
  height: 40px;
  border-radius: 3px;
  color: #fff;
  font-size: 12px;
  cursor: pointer;
  transition: background 0.3s ease-in-out;
}
input[type="submit"]:hover {
  background: #16aa56;
  animation-name: shake;
}

.forgot {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
}
.forgot:hover {
  margin-top: 30px;
  display: block;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
  color: #6D7781;
}

.agree {
  padding: 30px 0px;
  font-size: 12px;
  text-indent: 25px;
  line-height: 15px;
}

::-webkit-input-placeholder {
  color: white;
  font-size: 12px;
}

.animated {
  animation-fill-mode: both;
  animation-duration: 1s;
}

@keyframes shake {
  0%, 100% {
    transform: translateX(0);
  }
  10%, 30%, 50%, 70%, 90% {
    transform: translateX(-10px);
  }
  20%, 40%, 60%, 80% {
    transform: translateX(10px);
  }
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">

  <link href="./css(1)" rel="stylesheet" type="text/css">
<link href="./css(2)" rel="stylesheet" type="text/css">
<div class="login">
  <h2>Register</h2>
  <input name="username" placeholder="Username" type="text">
  <input id="pw" name="password" placeholder="Password" type="password">
  <input id="pw1" name="password" placeholder="Confirm Password" type="password">
  <input name="email" placeholder="E-Mail Address" type="text">
  <div class="agree">
    <input id="agree" name="agree" type="checkbox">
    <label for="agree"></label>Accept rules and conditions
  </div>
  <input class="animated" type="submit" value="Register">
  <a class="forgot" href="https://s.codepen.io/oceatoon/fullpage/IeqHp#">Already have an account?</a>
>>>>>>> d67bcc7ca3d3666e53c1a8c290ad790d22a9b3bd
</div>
    <script src="./stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js.download"></script>

  
  

    <script>
      /* 
  Based on Andreas Storm work
  URL: https://codepen.io/andreasstorm/pen/duBpt
*/
      //# sourceURL=pen.js
    </script>



  
  




 </body></html>