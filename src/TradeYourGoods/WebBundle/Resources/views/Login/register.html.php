<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/signin.css') ?>">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="/register_new" method="POST">
        <h2 class="form-signin-heading">Register</h2>
        <input type="hidden" name="mobile" value="<?php echo $mobile; ?>">
        
        <label for="name" class="sr-only" name="name">Name</label>
        <input type="text" id="name" class="form-control" name = "name" placeholder="name" required>
        
        <label for="surname" class="sr-only">Surname</label>
        <input type="text" id="surname" class="form-control" name = "surname" placeholder="surname" required>
        
        <label for="email" class="sr-only">Email address (optional)</label>
        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required autofocus>
        
        <label for="second_password" class="sr-only">Password</label>
        <input type="second_password" id="second_password" class="form-control" name = "password" placeholder="Type your password again" required>
        
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Register Now"/>
      </form>

    </div>
  </body>
</html>
