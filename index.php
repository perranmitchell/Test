<?php
	mysql_connect("db.getcontrol.co","getcontrol","RX931QTTQ139XR");
	mysql_select_db('getcontrol');
	
	$sql = "SELECT * FROM poll WHERE ipx = '".$_SERVER['REMOTE_ADDR']."'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0){
		$poll_allowed = false;	
		$poll = mysql_fetch_array($result);
	}else{
		$poll_allowed = true;		
	}

	if($poll_allowed){
		if($_POST['poll']){
			if(!empty($_POST['poll'])){
				if($_POST['poll'] == 'Other'){
					$_POST['poll'] = $_POST['other'];	
				}
				mysql_query("INSERT INTO poll (choice,ip) VALUES ('".$_POST['poll']."','".$_SERVER['REMOTE_ADDR']."')");
				$poll_allowed = false;
				$poll['choice'] = $_POST['poll'];
			}
		}
	}
	 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control : Your Business on the Go</title>
      <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/owl.transitions.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
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

<div class="top animated fadeInDown delayp4">
  <div class="container">
      <div class="social">
  <a href="https://www.facebook.com/GetControlApp" title="Facebook"><i class="fa fa-facebook-square"></i></a>
  <a href="https://twitter.com/GetControlApp" title="Twitter"><i class="fa fa-twitter-square"></i></a>
  <a href="http://www.linkedin.com/company/control/" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
</div>
      <a href="body" title="Control your app on the go" class="logoA">Control</a>
      <nav>
          <i class="fa fa-bars"></i>
        <ul>
            <li><a href="body" title="">Control</a></li>
            <li><a href=".works" title="">How it Works</a></li>
            <li><a href=".merchants" title="">By Merchants</a></li>
            <li><a href=".connect" title="">Connect</a></li>
          </ul>
      </nav>

  </div>
</div>

<header id="header" class="banner animated fadeInUp">
    <div class="container">
        <h3 class="scrolldown">Scroll Down <i class="fa fa-angle-down"></i></h3>
      <div class="col-md-8">
        <h1><b>Control</b> : your business on the go</h1>
        <h2>Your customers are mobile, Control allows you to<br class="hidden-xs">
manage their payments on the  go as well.</h2>
<h4>Sign up for the beta <i class="fa fa-apple"></i> <i class="fa fa-android"></i> </h4>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://getcontrol.us8.list-manage1.com/subscribe/post?u=265ed66fa2da347f1559c990e&amp;id=5b04b1ebd7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_265ed66fa2da347f1559c990e_5b04b1ebd7" value=""></div>
<button type="submit" value="Subscribe" name="subscribe" class="button">Stay updated</button>
</form>
</div>

<!--End mc_embed_signup-->



      </div>
    </div>
</header><!-- /header -->

<section class="works">
     <div class="container animated fadeInDown">
             <div class="col-md-12 title">
               <h1>How it works</h1>
               <h2>Download the <b>Control</b> app, authorize your merchant account access, <br class="hidden-xs">
          and easily monitor and refund payments.</h2>
            </div>

            <div class="col-md-4">
               <h2><i class="fa fa-clock-o"></i>Be notified of time sensitive events such as</h2>
               <ul>
                 <li>New revenue</li>
                 <li>Chargebacks</li>
                 <li>Large transaction amounts</li>
                 <li>Settlements to your account</li>
                 <li>Fraudlent transactions</li>
               </ul>
            </div>

             <div class="col-md-4">
               <h2><i class="fa fa-tasks"></i>Access relevant and actionable data</h2>
               <ul>
                 <li>Consolidate transactional data from multiple gateways </li>
                 <li>Access timely data on your revenue 
    performance </li>
                 <li>Refund suspicious transactions before 
    fraudsters chargeback </li>
                 <li>A/B test Approval  performance of multiple 
    gateways</li>
               </ul>
            </div>

             <div class="col-md-4">
               <h2><i class="fa fa-bell-o"></i>Manage real-time<br class="hidden-xs"> notifications</h2>
               <ul>
                 <li>Set what events you want to know in real time, pushed directly to your phone </li>
                 <li>Configure specific alert rules</li>
                 <li>Set which events you want to see in real time  </li>
                 <li>Receive push notifications directly to your phone</li>
               </ul>
            </div>

     </div>
</section>

<section class="phonesliders">
    <div class="container">
    <div class="slider">
        <div><img src="img/phone1.jpg"></div>
        <div><img src="img/phone2.jpg"></div>
        <div><img src="img/phone3.jpg"></div>
        <div><img src="img/phone4.jpg"></div>
        <div><img src="img/phone5.jpg"></div>
    </div>
        </div>
</section>

<section class="getapp">
  <div class="container">
        <h4>Get the app</h4>
      <a href="#"><img src="img/app_store.jpg"></a>
      <a href="#"><img src="img/google_play.jpg"></a>
      <a href="body" class="button scrolly">Sign up for the beta</a>
    </div>
</section>

<section class="merchants">
  <div class="container">
    <div class="col-md-12 title">
               <h1>By Merchants for Merchants</h1>
               <p>Developed by Merchants for Merchants, Control allows the modern online business owner to undock from their desks and manage the most important aspect of their business payment integrity  remotely and via their mobile device. Roam the globe  and manage your online business simultaneously.  View revenue reports , action transactions, and be notified in real time on new sales. </p>
            </div>
            
            <div class="col-md-4 ontheleft">
              <img src="img/stripe.png" class="stripe" alt="">
              <p>Global business requires a variety of global payment solutions.</p>
              <p>Control can plug-in and payment gateway that exposes their data via REST API. </p>
              <img src="img/paypal.png" class="paypal" alt="">
            </div>

            <div class="col-md-4 phonemiddle">
              <img src="img/phonemiddle.jpg" alt="">
            </div>

            <div class="col-md-4">
              <img src="img/paymill.png" class="paymill" alt="">
              <p>Control consolidates your key reports and time sensitive actions into one centralized control board. </p>
              <p>Control allows you to act on key events directly from your phone.</p>
              <img src="img/pin.png" class="pin" alt="">
            </div>
  </div>
</section>

<section class="connect">
  <div class="container">
    
      <div class="col-md-7 col-md-push-5">
               <h1>Connect Securely</h1>
               <h2>Provide <b>Control</b> secure access to you payment and business data with Merchant Connect. Via oAuth authentication, your private key and credentials are never shared. </h2>
               <p>Your users can easily and securely connect their accounts in a few clicks.
Authorize once, access your data on your phone forever.</p>

  <div class="apps">
    <h2>Connecting <b>Control</b> to your Apps</h2>
    <a href="#" title="" class="button str">Stripe</a><a href="#" title="" class="button pm">Paymill</a><a href="#" title="" class="button pp">Paypal</a>
  </div>
      </div>
      <div class="col-md-5 paymill_phone col-md-pull-7">
      </div>
  </div>
</section>


<?php if($poll_allowed){ ?>

<section class="poll" id="poll">
  <div class="container">
    <div class="col-md-12">
      <h1>What Payment Gateway do You want Supported?</h1>
      <form action="#poll" method="post">
        <select name="poll">
  <option disabled>Select here...</option>
  <option name="Amazon Payment">Amazon Payment</option>
<option value="Paypal">Paypal</option>
<option value="Balanced">Balanced</option>
<option value="Bitpay">Bitpay</option>
<option value="Conekta">Conekta</option>
<option value="Dwolla">Dwolla</option>
<option value="Evo Snap">Evo Snap</option>
<option value="FastSpring">FastSpring</option>
<option value="Fortumo">Fortumo</option>
<option value="GharPay">GharPay</option>
<option value="Google Payments">Google Payments</option>
<option value="Moneybookers">Moneybookers</option>
<option value="Openpay">Openpay</option>
<option value="Pagr.me">Pagr.me</option>
<option value="Telr">Telr</option>
<option value="PaymentWall">PaymentWall</option>
<option value="Paypoint">Paypoint</option>
<option value="Pin Payments">Pin Payments</option>
<option value="WebMoney">WebMoney</option>
<option value="Other">Other...</option>
</select>
<input type="text" name="other" value="<?php $_POST['other']; ?>"/>
<button type="submit" class="button">Submit Poll</button>
      </form>
    </div>
  </div>
</section>
<?php }else{ ?>
<section class="poll">
  <div class="container">
    <div class="col-md-12">
      <h1>Thank you for voting on the payment gateway! You voted for <strong><?php echo $poll['choice']; ?></strong></h1>
      
      </div>
  </div>
</section>
<?php } ?>
<footer>
  <div class="container">
    <div class="col-sd-12">
              <div class="social">
  <a href="https://www.facebook.com/GetControlApp" title="Facebook"><i class="fa fa-facebook-square"></i></a>
  <a href="https://twitter.com/GetControlApp" title="Twitter"><i class="fa fa-twitter-square"></i></a>
  <a href="http://www.linkedin.com/company/control/" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
</div>
      <img src="" alt="">
      <p>&copy Control. All rights reserved.</p>
        
    </div>
  </div>
</footer>
      
    <!-- Scripts -->
    <script src="js/jquery1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/jquery.inview.js"></script>
    <script src="js/inview_custom.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/core.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$('[name="poll"]').change(function(){
				if($(this).val() == 'Other'){
					$('[name="other"]').fadeIn();
				}
			});
		});
	</script>
    <?php if($_POST){ ?>
    	<script type="text/javascript">
			$(document).ready(function(){
				$('html,body').animate({ scrollTop: parseInt($('.poll').position().top-100)+'px' },700);
			});
		</script>
    <?php } ?>
  </body>
</html>