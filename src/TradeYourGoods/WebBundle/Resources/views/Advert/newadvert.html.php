<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    <link rel="icon" href="favicon.ico">

    <title>New Ad</title>
    
    <!-- Bootstrap core CSS -->
    <!--<link href="public/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/signin.css') ?>">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
     <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-top:opx;margin-bottom:20px;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
			<img src="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/img/logo.png') ?>" alt="logo" height="auto" width="170px">
		  </a>
        </div>
          <div id="navbar" class="navbar-collapse collapse" >
        <div class="navbar-right">
			<a class="btn btn-default" href="profile.html" role="button" style="margin-top:20px;margin-bottom:20px;margin-right:10px;">My Profile</a>

			<a class="btn btn-default" href="/new_advert?mobile=<?php echo $_GET['mobile'] ?>" role="button" style="margin-top:20px; margin-bottom:20px;">New Ad</a>
        </div><!--/.navbar-right -->
        </div>
      </div>
    </nav>
    <div class="container">
        <form class="form-signin" action="/create_advert" method = "POST">
            <h2 class="form-signin-heading">New Ad</h2>
            <h5>Title</h5>
            <label for="text" class="sr-only">Ad Title</label>
            <input type ="hidden" name ="mobile" value ="<?php echo $_GET['mobile'] ?>" >
            <input type="text" id="title" name="title" class="form-control" placeholder="Ad Title" required autofocus>
            <br/>
            <h5>Item sold</h5>
            <label for="text" class="sr-only">Item</label>
            <input type="text" id="item" class="form-control" name="item" placeholder="Item" required autofocus>
            <br/>
            <h5>Quantity</h5>
            <label for="number" class="sr-only">Quantity</label>
            <input type="number" id="quantity" name="quantity" class="form-control" placeholder="Quantity" required autofocus>
            <br/>
            <h5>Total price</h5>
            <label for="text" class="sr-only">Price</label>
            <input type="number" id="price" name="price" class="form-control" placeholder="Price" required autofocus>
            <a class="btn btn-default" id="confrontButton" href="/price_guide">Compare</a>
            <br/>
            <h5>Type the description of your ad</h5>
            <textarea name="description" cols="40" rows="6" placeholder="Description" class="form-control"></textarea>
            <br/>
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Create new Ad" style="background-color:green"/>
        </form>
    </div> <!-- /container -->
  </body>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/js/bootstrap.min.js') ?>"></script>
</html>
