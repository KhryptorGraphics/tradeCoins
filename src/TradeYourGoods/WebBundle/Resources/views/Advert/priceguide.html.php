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

    <title>Price Guide</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="public/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/css/signin.css') ?>">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<!-- tolto da me -->
    <!-- <script src="assets/js/ie-emulation-modes-warning.js"></script> -->

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
			  <a class="navbar-brand" href="index.html">
				<img src="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/img/logo.png') ?>" alt="logo" height="auto" width="170px">
			  </a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
		        <div class="navbar-right">
					<a class="btn btn-default" href="profile.html" role="button" >
						My Profile</a>

					<a class="btn btn-default" href="newad.html" role="button" style="margin-top:20px; margin-bottom:20px;">New Ad</a>
		        </div><!--/.navbar-right -->
	    	</div>
		  </div>
		</nav>

		<div class="container" style="margin-top: 60px;">
		<h1 class="page-header">Trade Coins: your coins</h1>
		</br>
		<div class="navbar" >
		<hr style="background-color:black;color:black;height:2px;line-height:0;width:100%; margin-bottom:0px; margin-top:0px;"/>
		</div>
		<div class="row">

			<!-- edit form column -->
			<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
				<h3 style="margin-left:60px">This is what you could buy:</h3>
			  <form class="form-horizontal" style="margin-left:70px" role="form">
					<table class="table">
					<thead>
						<tr>
							<th>Item</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Cow</td>
							<td>2</td>
						</tr>
						<tr>
							<td>Chicken</td>
							<td>10</td>
						</tr>
						<tr>
							<td>Chair</td>
							<td>4</td>
						</tr>
						<tr>
							<td>Egg</td>
							<td>50</td>
						</tr>

				</form>
		</div>
	  </div>
	</div>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
</body>