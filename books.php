<!DOCTYPE html>

<html>
	<title>ICGC Devotional</title>
	<head>

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<!-- <script type="text/javascript" src="script.js"></script> -->
		<!-- <script type="text/javascript" src="http://216.224.161.207/icgc/script.js"></script> -->

		<link rel="stylesheet" href="css/style.css" />
		<!-- <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.2.0.min.js"></script> -->

		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="jquery.nivo.slider.js"></script>
		<script>
			function myFunction() {
				var x = document.getElementById("invoice_id")
				// x.innerHTML = Math.floor((Math.random() * 10) + 1);
				x.value = Math.floor((Math.random() * 10) + 1);
			}
		</script>
	</head>
	<body>
		<div id='quotes' data-role='page' >

			<div id='header' data-role='header' >
				<div class="div_header">
					BOOKS
				</div>
				<div class="wrapper1">
					<a href="mainpage.php" data-transition='flip'rel="external" class="span_menu" style="color: black; border-left: 1px solid gray;"><img src="icons/home.png" />
					<br/>
					HOME</a>
					<a href="daily.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/devotion.png" />
					<br/>
					Daily</a>
					<a href="quotes.php" data-transition='flip' class="span_menu" style="color: black; border-left: 1px solid gray;"><img src="icons/quote.png" />
					<br/>
					Quotes</a>
					<a href="sermon.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/sermon.png" />
					<br/>
					Sermon</a>
					<a href="books.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/books.png" />
					<br/>
					Books</a>
					<a href="videos.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/videos.png" />
					<br/>
					Videos</a>
					<a href="loc.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/loc.png" />
					<br/>
					Near You</a>
					<a href="more.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/more.png" />
					<br/>
					Donate</a>
				</div>

			</div>

			<div id='content' data-role='content'>
				<!-- <p style='vertical-align:center;color: gray;'>Dr. Otabil's quotes<img src="img/2_1.jpg" class="img_quote" style="float: left;"/></p> -->

				<div class="p_quotes">
					<form method=POST action="http://nalosolutions.api.ipaygh.com/gateway" id="frmbook" style="">
						<input type="hidden" name="merchant_key" id="merchant_key" size="30" value="6-f3028edd-7e93-446e-afe7-a712f3cf2950" required="required"/>
						<input type="hidden" name="invoice_id" id="invoice_id" value="<?php echo rand(); ?>" size="30"  required="required"/>
						<input type=hidden name=ver value="1" />
						<input type=hidden name="item_quantity_1" value="1" />
						<input type=hidden name="item_price_1" value="1.0" />
						<input type="hidden" name ="live_order"/>
						<input type="hidden" name="success_url" value="http://www.nalosolutions.com/payments/success.php"/>
						<input type="hidden" name="notification_url" value="http://www.nalosolutions.com/payments/notification.php"/>
						<input type="hidden" name="cancelled_url" value="http://www.nalosolutions.com/payments/index.php"/>

						<input type="hidden" name="item_description_1" value="Setting and Goal Getting" id="item_description_1"/>
						<input type="hidden" name="total" id="amount" value="6" />
						<img src="img/books/GoalSetting.png" class="img_quote" style="float: left;"/>
						<!-- <span class="date"><a href="https://www.mensaotabil.com/products-page/ebooks/goal-setting-and-goal-getting/">Setting and Goal Getting</a></span> -->
						<span class="date">Setting and Goal Getting</span>
						<br/>
						Price: $6.00
						<br/>
						With no clear sense of where we are going, we are bound to settle for any destination. Without vision, we easily accept anything that comes our way and allow other people to set the agenda for our lives. That is why we ned to set goals and go on to achieve them. Setting goals requires that you learn from your past experiences, locate your current opportunities and launch boldly into your future.
						<br />
						<br />
						Comment prendre des décisions éclairées présente comme approche systématique et pourtant simple qui comporte six étapes clés à recevoir de bons conseils et de prendre des décisions de qualité qui vous aideront à progresser dans la vie.

						<input type="submit" onclick="myFunction()" value="BUY" data-mini="true"/>
					</form>
				</div>
				<br/>
				<div class="p_quotes">
					<form method=POST action="http://nalosolutions.api.ipaygh.com/gateway" id="frmbook" style="">
						<input type="hidden" name="merchant_key" id="merchant_key" size="30" value="6-f3028edd-7e93-446e-afe7-a712f3cf2950" required="required"/>
						<input type="hidden" name="invoice_id" id="invoice_id" value="<?php echo rand(); ?>" size="30"  required="required"/>
						<input type=hidden name=ver value="1" />
						<input type=hidden name="item_quantity_1" value="1" />
						<input type=hidden name="item_price_1" value="1.0" />
						<input type="hidden" name ="live_order"/>
						<input type="hidden" name="success_url" value="http://www.nalosolutions.com/payments/success.php"/>
						<input type="hidden" name="notification_url" value="http://www.nalosolutions.com/payments/notification.php"/>
						<input type="hidden" name="cancelled_url" value="http://www.nalosolutions.com/payments/index.php"/>

						<input type="hidden" name="item_description_1" value="How to Make Wise Decisions" id="item_description_1"/>
						<input type="hidden" name="total" id="amount" value="2" />
						<img src="img/books/Howtomake.png" class="img_quote" style="float: left;"/>
						<!-- <span class="date"><a href="https://www.mensaotabil.com/products-page/ebooks/how-to-make-wise-decisions/">How to Make Wise Decisions</a></span> -->
						<span class="date">How to Make Wise Decisions</span>
						<br/>
						Price: $2.00
						<br/>
						Receiving good advice is an art that can be perfected by practice. The quality of our lives is influenced by the people from whom we receive advice. For each one of us, there are people who enrich our lives and others who deplete our lives because of the quality of advice they give to us.
						How to Make Wise Decisions presents as systematic and yet simple approach that involves six key steps to receiving good advice and making quality decisions which will help you advance in life.....
						<br/>
						<br/>
						En l'absence de vision claire de l'endroit où nous allons, nous sommes tenus de se contenter de n'importe quelle destination. Sans vision, nous acceptons facilement tout ce qui vient à notre rencontre et permettre aux autres de définir l'ordre du jour de nos vies. C'est pourquoi nous Ned se fixer des objectifs et de passer à leur réalisation. Fixer des objectifs exige que vous apprenez de vos expériences passées, retrouver vos possibilités actuelles et de lancer hardiment dans votre avenir
						.....

						<input type="submit" onclick="myFunction()" value="BUY" data-mini="true"/>
					</form>
				</div>

			</div>

			<!-- <div id='footer' data-role='footer'>

			</div> -->
		</div>

	</body>
</html>
<script type="text/javascript" >
	// $(document).ready(function() {
	//
	// $('#slider').nivoSlider();
	//
	// });
</script>
