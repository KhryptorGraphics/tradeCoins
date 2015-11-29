<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

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
          <a class="navbar-brand" href="#">
			<img src="<?php echo $view['assets']->getUrl('bundles/tradeyourgoodsweb/img/logo.png') ?>" alt="logo" height="auto" width="170px">
		  </a>
        </div>
        <div class="navbar-right">
			<a class="btn btn-default" href="profile.html" role="button" style="margin-top:20px;margin-bottom:20px;margin-right:10px;">My Profile</a>

			<a class="btn btn-default" href="/new_advert?mobile=<?php echo $_GET['mobile'] ?>" role="button" style="margin-top:20px; margin-bottom:20px;">New Ad</a>
        </div><!--/.navbar-right -->

      </div>
    </nav>

    <div class="container">

        <?php
        foreach ($ads as $ad) {
        ?>

        <div class="media" style="margin-top: 50px;">
          <div class="media-body">
            <a href="<?php echo "/advert?adId=" . $ad->getId();?>"><h4 class="media-heading"><?php echo $ad->getTitle();?> </h4></a>
            <?php echo $ad->getDescription();?>
          </div>
        </div>

        <?php
        }
        ?>
      <hr>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
