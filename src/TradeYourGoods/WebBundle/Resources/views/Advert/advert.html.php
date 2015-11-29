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

    <title>Profile Info</title>

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
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">TradeYourGoods</a>
            </div>
            <div class="navbar-right">
                            <a class="btn btn-default" href="profile.html" role="button">My Profile</a>
                            <a class="btn btn-default" href="newad.html" role="button">New Ad</a>
            </div><!--/.navbar-right -->
        </div>
    </nav>
	
    <div class="container" style="padding-top: 20px; margin-left:100px;">
        <h1 class="page-header">Advert</h1>
	  <div class="row">
                <!-- edit form column -->
                <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                    <h3>Advert info</h3>
                    <form class="form-horizontal" role="form">
			<div class="form-group">
                            <label class="col-lg-3 control-label">Seller name:</label>
                            <div class="col-lg-8">
                                <p>nome</p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-lg-3 control-label">Seller last name:</label>
                            <div class="col-lg-8">
                                <p>cognome</p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-lg-3 control-label">Seller Email:</label>
                            <div class="col-lg-8">
                                <p>email</p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-md-3 control-label">Seller Telephone number:</label>
                            <div class="col-md-8">
                                <p>number</p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-md-3 control-label">Product description</label>
                            <div class="col-md-8">
                                <p>description</p>
                            </div>
			</div>
			<div class="form-group">
                            <label class="col-md-3 control-label" style="font-size:20px">Prize:</label>
                            <div class="col-md-8">
                                <p style="font-size:20px">credit</p>
                            </div>
			</div>
			<br/>
			<button class="btn btn-lg btn-primary btn-block" type="submit" style = "background-color:green; width:200px; margin-left:450px;">BUY</button>
		  </form>
		</div>
	  </div>
	</div>
</body>