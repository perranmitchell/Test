<?php
	mysql_connect("db.getcontrol.co","getcontrol","RX931QTTQ139XR");
	mysql_select_db('getcontrol');
	
	$sql = "SELECT * FROM poll";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		$results[$row['choice']]++;
	}

	arsort($results);
	 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control : Poll results</title>
      <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.transitions.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <style>
	  	body{
			background:#FFFFFF;
		}
	  </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
  </head>
  <body>
  <section class="works">
     <div class="container animated fadeInDown fadeInLeft delayp2" style="opacity: 0;">
             <div class="col-md-12 title">
             	<h1><strong>GetControl</strong> Poll Results</h1>
               <?php foreach($results as $gateway => $votes){ ?>
                     <h2><strong><?php echo $gateway; ?></strong>: <?php echo $votes; ?></h2>		
            <?php	} ?>
            </div>
     </div>
</section>
		
    <script src="js/jquery1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="js/inview_custom.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/core.js"></script>
  </body>
</html>