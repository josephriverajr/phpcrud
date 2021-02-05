<?php
session_start();
include 'inc/functions.php';
    
            

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Login Page</title>
  <!-- CSS  -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>
  <?php 
    include 'inc/nav.php';
  ?>
  <div class="contents order-2 order-md-1">
    <div class="container login_form">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="form-block">
          <div class="card">
            <div class="card-body">
              <div class="text-center mb-5">
              <h3>Login</h3>

              </div>
              <form action="#" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input class='form-control' type='email' id='username' name="log_username" />
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input id="password" class='form-control' type='password' id='passwordSignIn' name="log_password"/>
              </div>
               <button name='signin' class='btn btn-block btn-primary'>Login</button>
               <a href="#" class='btn btn-block btn-info'>Register</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>



  <footer class="page-footer blue">
          <div class="footer-copyright">
            <div class="container">

            <a class="grey-text text-lighten-4 right" href="#!">© 2020 Copyright</a>
            </div>
          </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>