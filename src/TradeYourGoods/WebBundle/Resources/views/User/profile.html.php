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
        <a class="navbar-brand" href="homepage.html">
            <img src="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/img/logo.png') ?>" alt="logo" height="auto" width="170px">
        </a>
        </div>
        <div class="navbar-right">
			<a class="btn btn-default" href="profile.html" role="button" style="margin-top:20px;margin-bottom:20px;margin-right:10px;">My Profile</a>
			
			<a class="btn btn-default" href="newad.html" role="button" style="margin-top:20px; margin-bottom:20px;">New Ad</a>
        </div><!--/.navbar-right -->
      </div>
    </nav>
	
    <div class="container" style="padding-top: 20px; margin-left:100px;">
        <h1 class="page-header">Profile</h1>
        <div class="row">

            <!-- edit form column -->
            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
              <h3>Personal info</h3>
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="col-lg-3 control-label">First name:</label>
                  <div class="col-lg-8">
                        <p>nome</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Last name:</label>
                  <div class="col-lg-8">
                        <p>cognome</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-3 control-label">Email:</label>
                  <div class="col-lg-8">
                        <p>email</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Telephone number:</label>
                  <div class="col-md-8">
                        <p>number</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Password:</label>
                  <div class="col-md-8">
                        <p>password</p>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" style="font-size:20px">Credit:</label>
                  <div class="col-md-8">
                        <p style="font-size:20px">credit</p>
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</body>

