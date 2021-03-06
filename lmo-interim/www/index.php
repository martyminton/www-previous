<?php

	if( isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != '/' )
	{
		header("Location: /",TRUE,307);
	}

?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="utf-8">
	<meta name="description" content="Based in Arlington, Virginia, LMO Advertising is a full service advertising agency specializing in branding, strategy, interactive and  direct marketing" />
	<meta name="keywords" content="advertising, advertising agency, traditional advertising, traditional marketing, interactive marketing, direct marketing, branding, advertisements, strategy, partnerships, creative" />

	<meta property="og:site_name" content="LMO Advertising - Full Service Advertising Agency in Arlington, Virginia"/>
	<meta property="og:title" content="LMO Advertising - Full Service Advertising Agency in Arlington, Virginia" />
	<meta property="og:description" content="Based in Arlington, Virginia, LMO Advertising is a full service advertising agency specializing in branding, strategy, interactive and  direct marketing" />
	<meta property="og:image" content="http://www.lmo.com/assets/images/logo-lmo.png" />
	<meta property="og:url" content="http://www.lmo.com" />

	<link rel="stylesheet" href="/assets/css/min.css" media="screen">
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/f55835a9-7ef5-4826-89b6-ca6100bcf158.css"/>
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/7229072/631122/css/fonts.css" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<script src="/assets/js/modernizr.custom.33517.js"></script>
	<link rel="canonical" href="http://www.lmo.com" />
	<title>LMO Advertising - Full Service Advertising Agency in Arlington, Virginia</title>

	<?php
		if($_SERVER['HTTP_HOST'] == "www.lmo.com"){
	?>
	<script type="text/javascript">

		window.analytics||(window.analytics=[]),window.analytics.methods=["identify","track","trackLink","trackForm","trackClick","trackSubmit","page","pageview","ab","alias","ready","group","on","once","off"],window.analytics.factory=function(t){return function(){var a=Array.prototype.slice.call(arguments);return a.unshift(t),window.analytics.push(a),window.analytics}};for(var i=0;i<window.analytics.methods.length;i++){var method=window.analytics.methods[i];window.analytics[method]=window.analytics.factory(method)}window.analytics.load=function(t){var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https://":"http://")+"d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n)},window.analytics.SNIPPET_VERSION="2.0.8",
		window.analytics.load("ejiauv7dl3");
		window.analytics.page();
	</script>
	<?php
		}else{
	?>
	<script type="text/javascript">
window.analytics||(window.analytics=[]),window.analytics.methods=["identify","track","trackLink","trackForm","trackClick","trackSubmit","page","pageview","ab","alias","ready","group","on","once","off"],window.analytics.factory=function(t){return function(){var a=Array.prototype.slice.call(arguments);return a.unshift(t),window.analytics.push(a),window.analytics}};for(var i=0;i<window.analytics.methods.length;i++){var method=window.analytics.methods[i];window.analytics[method]=window.analytics.factory(method)}window.analytics.load=function(t){var a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=("https:"===document.location.protocol?"https://":"http://")+"d2dq2ahtl5zl1z.cloudfront.net/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n)},window.analytics.SNIPPET_VERSION="2.0.8",
window.analytics.load("uj2x3m4k9b");
window.analytics.page();
</script>
	<?php
		}

	?>
</head>
<body>

	<header class="default">
		<div class="contain">
			<nav>
				<ul>
					<li class="purpose"><a href="#purpose">Purpose</a></li>
					<li class="work"><a href="#work">Work</a></li>
					<li class="clients"><a href="#clients">Clients</a></li>
					<li class="culture"><a href="#culture">Culture</a></li>
					<li class="opportunities"><a href="#opportunities">We're Hiring</a></li>
					<li class="contact"><a href="#contact">Say Hello</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section id="home">
		<div class="contain">
			<h1>
				<span class="logo">LMO</span>
				<span class="logo-advertising">Advertising</span>
			</h1>

			<a class="arrow-down" href="#purpose"></a>
		</div>
	</section>

	<section id="purpose">
		<div class="contain">
			<div class="content verticalAlign">
				<h2 class="orange">We Create Demand</h2>
				<h3 class="white">Creativity unbound by strategy is art. We don't sell art.</h3>
			</div>
		</div>
	</section>

	<section id="work">
		<div class="white_wrap">
			<div class="contain title">
				<div class="content verticalAlign title">
					<h2 class="orange">We build legacies</h2>
					<h3 class="white">Tactics are great, big ideas are better.</h3>
					<img src="/assets/images/arrow-orange.png" class="arrow" alt="" />
				</div>
			</div>
		</div>
		<div class="showcase">
			<ul class="bxslider">
				<li id="national-guard" class="inline national-guard active" data-prev-class="na" data-next-class="fvc-bank">
					<a href="/national-guard.php" class="cta modalWindow">What we did for the National Guard</a>
				</li>
				<li id="fvc-bank" class="inline fvc-bank" data-prev-class="national-guard" data-next-class="budget">
					<a href="/fvc-bank.php" class="cta modalWindow">What we're doing for FVCbank</a>
				</li>
				<li id="budget" class="inline budget" data-prev-class="fvc-bank" data-next-class="na">
					<a href="/budget.php" class="cta modalWindow">What we're doing for Avis</a>
				</li>
			</ul>
		</div>
	</section>
	<section id="clients">
		<div class="logos">
			<div class="title">
				<div class="contain">
					<h2 class="lightGrey">Our Clients</h2>
				</div>
			</div>
			<div class="contain">
				<ul class="client-logos">
					<li>
						<img data-src="/assets/images/logo-client-air-national-guard.png" src="/assets/images/holder.png" alt="Air National Guard">
						<noscript><img src="/assets/images/logo-client-air-national-guard.png" alt="Air National Guard"></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-uscg.png" src="/assets/images/holder.png" alt="Coast Guard, Coast Guard Reserve">
						<noscript><img src="/assets/images/logo-client-uscg.png" alt="Coast Guard, Coast Guard Reserve" /></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-big-brother-sisters.png" src="/assets/images/holder.png" alt="Big Brothers Big Sisters">
						<noscript><img src="/assets/images/logo-client-big-brother-sisters.png" alt="Big Brothers Big Sisters"></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-booz-allen-hamilton.png" src="/assets/images/holder.png" alt="Booz | Allen | Hamilton">
						<noscript><img src="/assets/images/logo-client-booz-allen-hamilton.png" alt="Booz | Allen | Hamilton"></noscript>

					</li>
				</ul>

				<ul class="client-logos">
					<li>
						<img data-src="/assets/images/logo-client-budget.png" src="/assets/images/holder.png" alt="Budget">
						<noscript><img src="/assets/images/logo-client-budget.png" alt="Budget"></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-bull-frog.png" src="/assets/images/holder.png" alt="Bull Frog Sunblock">
						<noscript><img src="/assets/images/logo-client-bull-frog.png" alt="Bull Frog Sunblock"></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-cafb.png" src="/assets/images/holder.png" alt="Capital Area Food Bank">
						<noscript><img src="/assets/images/logo-client-cafb.png" alt="Capital Area Food Bank" /></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-fairmont.png" src="/assets/images/holder.png" alt="Fairmont Hotel &amp; Resorts">
						<noscript><img src="/assets/images/logo-client-fairmont.png" alt="Fairmont Hotel &amp; Resorts" /></noscript>

					</li>
				</ul>

				<ul class="client-logos">
					<li>
						<img data-src="/assets/images/logo-client-french.png" src="/assets/images/holder.png" alt="The French Language Initiative">
						<noscript><img src="/assets/images/logo-client-french.png" alt="The French Language Initiative" /></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-fvcbank.png" src="/assets/images/holder.png" alt="FVCbank">
						<noscript><img src="/assets/images/logo-client-fvcbank.png" alt="FVCbank" /></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-jordan.png" src="/assets/images/holder.png" alt="Jordan">
						<noscript><img src="/assets/images/logo-client-jordan.png" alt="Jordan" /></noscript>
					</li>
					<li>
						<img data-src="/assets/images/logo-client-moaa.png" src="/assets/images/holder.png" alt="Millitary Officers Association of America">
						<noscript><img src="/assets/images/logo-client-moaa.png" alt="Millitary Officers Association of America" /></noscript>
					</li>
				</ul>

				<ul class="client-logos">
					<li>
						<img data-src="/assets/images/logo-client-national-guard2.png" src="/assets/images/holder.png" alt="National Guard">
						<noscript><img src="/assets/images/logo-client-national-guard2.png" alt="National Guard" /></noscript>

					</li>
					<li>
						<img data-src="/assets/images/logo-client-o-team.png" src="/assets/images/holder.png" alt="The O Team">
						<noscript><img src="/assets/images/logo-client-o-team.png" alt="The O Team" /></noscript>

					</li>
					<li>
						<img data-src="/assets/images/logo-client-radius-travel.png" src="/assets/images/holder.png" alt="Radius Travel">
						<noscript><img src="/assets/images/logo-client-radius-travel.png" alt="Radius Travel" /></noscript>

					</li>
					<li>
						<img data-src="/assets/images/logo-client-thanks-usa.png" src="/assets/images/holder.png" alt="Thanks USA">
						<noscript><img src="/assets/images/logo-client-thanks-usa.png" alt="Thanks USA" /></noscript>

					</li>
				</ul>

				<ul class="client-logos">
					<li class="last">
						<img data-src="/assets/images/logo-client-urban-arias.png" src="/assets/images/holder.png" alt="Urban Arias">
						<noscript><img src="/assets/images/logo-client-urban-arias.png" alt="Urban Arias" /></noscript>

					</li>

					<li class="last">
						<img data-src="/assets/images/logo-client-wwff.png" src="/assets/images/holder.png" alt="Washington West Film Festival">
						<noscript><img src="/assets/images/logo-client-wwff.png" alt="Washington West Film Festival" /></noscript>

					</li>
					<li class="last">
						<img data-src="/assets/images/logo-client-voices-of-america.png" src="/assets/images/holder.png" alt="Voices for America's Troops">
						<noscript><img src="/assets/images/logo-client-voices-of-america.png" alt="Voices for America's Troops" /></noscript>

					</li>
				</ul>
			</div>
		</div>
	</section>

	<section id="culture">
		<div class="bottom">
		<div class="culture-slideshow">
			<div class="contain">
				<div class="content verticalAlign title">
					<h2 class="white">We Celebrate Culture</h2>
					<h3 class="mildBlack">Because interesting lives produce interesting results.</h3>
				</div>
			</div>
			<div class="sliderEdgeLeft"></div>
			<div class="sliderEdgeRight"></div>
			<div class="sliderEdgeLeftBottom"></div>
			<div class="sliderEdgeRightBottom"></div>
			<ul class="culture-slider">
				<li>
					<div class="leftSide photo allison">
						<div class="desc">
							<h4 class="orange">Allison</h4>
							<p>loves traveling and trying the food!</p>
						</div>

						<img data-src="/assets/images/culture-allison-t.jpg" src="/assets/images/holder.png" alt="Allison">
						<noscript><img src="/assets/images/culture-allison-t.jpg" alt="Allison"></noscript>
					</div>

					<div class="photo andrew">
						<div class="desc">
							<h4 class="orange">Andrew</h4>
							<p>serves as commish of the Glover Park Co-ed Softball League.</p>
						</div>

						<img data-src="/assets/images/culture-andrew-g.jpg" src="/assets/images/holder.png" alt="Andrew">
						<noscript><img src="/assets/images/culture-andrew-g.jpg" alt="Andrew"></noscript>
					</div>

					<div class="photo ashley last">
						<div class="desc">
							<h4 class="orange">Ashley</h4>
							<p>has been dancing for over 20 years!</p>
						</div>

						<img data-src="/assets/images/culture-ashley-b.jpg" src="/assets/images/holder.png" alt="Ashley">
						<noscript><img src="/assets/images/culture-ashley-b.jpg" alt="Ashley"></noscript>
					</div>

					<div class="leftSide photo becky">
						<div class="desc">
							<h4 class="orange">Becky</h4>
							<p>A copywriter by trade, Becky is an artist at heart.</p>
						</div>

						<img data-src="/assets/images/culture-becky-n.jpg" src="/assets/images/holder.png" alt="Becky">
						<noscript><img src="/assets/images/culture-becky-n.jpg" alt="Becky"></noscript>
					</div>

					<div class="photo blythe">
						<div class="desc">
							<h4 class="orange">Blythe</h4>
							<p>travels around the world collecting ears.</p>
						</div>

						<img data-src="/assets/images/culture-blythe-l.jpg" src="/assets/images/holder.png" alt="Blythe">
						<noscript><img src="/assets/images/culture-blythe-l.jpg" alt="Blythe"></noscript>
					</div>

					<div class="photo christi last">
						<div class="desc">
							<h4 class="orange">Christi</h4>
							<p>likes adventures involving speed and the outdoors!</p>
						</div>

						<img data-src="/assets/images/culture-christi-b.jpg" src="/assets/images/holder.png" alt="Christi">
						<noscript><img src="/assets/images/culture-christi-b.jpg" alt="Christi"></noscript>
					</div>
				</li>
				<li>
					<div class="leftSide photo chris">
						<div class="desc">
							<h4 class="orange">Chris</h4>
							<p>coached an ankle-biter team to a championship.</p>
						</div>

						<img data-src="/assets/images/culture-chris-l.jpg" src="/assets/images/holder.png" alt="Chris">
						<noscript><img src="/assets/images/culture-chris-l.jpg" alt="Chris"></noscript>
					</div>

					<div class="photo coco">
						<div class="desc">
							<h4 class="orange">Coco</h4>
							<p>just shot skeet for the first time (and hit one!).</p>
						</div>

						<img data-src="/assets/images/culture-coco-p.jpg" src="/assets/images/holder.png" alt="Coco">
						<noscript><img src="/assets/images/culture-coco-p.jpg" alt="Coco"></noscript>
					</div>

					<div class="photo craig last">
						<div class="desc">
							<h4 class="orange">Craig</h4>
							<p>learned how to survive in the Amazon in Guyana.</p>
						</div>

						<img data-src="/assets/images/culture-craig-k.jpg" src="/assets/images/holder.png" alt="Craig">
						<noscript><img src="/assets/images/culture-craig-k.jpg" alt="Craig"></noscript>
					</div>

					<div class="leftSide photo dave">
						<div class="desc">
							<h4 class="orange">Dave</h4>
							<p>has a mole shaped like a cat.</p>
						</div>

						<img data-src="/assets/images/culture-dave-m.jpg" src="/assets/images/holder.png" alt="Dave">
						<noscript><img src="/assets/images/culture-dave-m.jpg" alt="Dave"></noscript>
					</div>

					<div class="photo dustin">
						<div class="desc">
							<h4 class="orange">Dustin</h4>
							<p>was crowned MVP of the DC Dart Club! </p>
						</div>

						<img data-src="/assets/images/culture-dustin-r.jpg" src="/assets/images/holder.png" alt="Dustin">
						<noscript><img src="/assets/images/culture-dustin-r.jpg" alt="Dustin"></noscript>
					</div>

					<div class="photo ellie last">
						<div class="desc">
							<h4 class="orange">Ellie</h4>
							<p>has big dreams of skiing in the Swiss Alps one day.</p>
						</div>

						<img data-src="/assets/images/culture-ellie-w.jpg" src="/assets/images/holder.png" alt="Ellie">
						<noscript><img src="/assets/images/culture-ellie-w.jpg" alt="Ellie"></noscript>
					</div>
				</li>
				<li>
					<div class="leftSide photo emily">
						<div class="desc">
							<h4 class="orange">Emily</h4>
							<p>enjoys supporting farm-to-table efforts like "Outstanding in the Field." </p>
						</div>

						<img data-src="/assets/images/culture-emily-r.jpg" src="/assets/images/holder.png" alt="Emily">
						<noscript><img src="/assets/images/culture-emily-r.jpg" alt="Emily"></noscript>
					</div>

					<div class="photo erica">
						<div class="desc">
							<h4 class="orange">Erica</h4>
							<p>enjoys hiking and rock-climbing almost every weekend.</p>
						</div>

						<img data-src="/assets/images/culture-erica-c.jpg" src="/assets/images/holder.png" alt="Erica">
						<noscript><img src="/assets/images/culture-erica-c.jpg" alt="Erica"></noscript>
					</div>

					<div class="photo hannah last">
						<div class="desc">
							<h4 class="orange">Hannah</h4>
							<p>Riding a real elephant has been Hannah's highlight of the year!</p>
						</div>

						<img data-src="/assets/images/culture-hannah-k.jpg" src="/assets/images/holder.png" alt="Hannah">
						<noscript><img src="/assets/images/culture-hannah-k.jpg" alt="Hannah"></noscript>
					</div>

					<div class="leftSide photo hernando">
						<div class="desc">
							<h4 class="orange">Hernando</h4>
							<p>and his wife mentor 3 kids through Southeast White House.</p>
						</div>

						<img data-src="/assets/images/culture-hernando-h.jpg" src="/assets/images/holder.png" alt="Hernando">
						<noscript><img src="/assets/images/culture-hernando-h.jpg" alt="Hernando"></noscript>
					</div>

					<div class="photo janette">
						<div class="desc">
							<h4 class="orange">Janette</h4>
							<p>enjoys capturing moments of joy and happiness.</p>
						</div>

						<img data-src="/assets/images/culture-janette-k.jpg" src="/assets/images/holder.png" alt="Janette">
						<noscript><img src="/assets/images/culture-janette-k.jpg" alt="Janette"></noscript>
					</div>

					<div class="photo jay last">
						<div class="desc">
							<h4 class="orange">Jay</h4>
							<p>loves finding hole in the wall restaurants and exploring cuisine.</p>
						</div>

						<img data-src="/assets/images/culture-jay-s.jpg" src="/assets/images/holder.png" alt="Jay">
						<noscript><img src="/assets/images/culture-jay-s.jpg" alt="Jay"></noscript>
					</div>
				</li>
				<li>
					<div class="leftSide photo jordan">
						<div class="desc">
							<h4 class="orange">Jordan</h4>
							<p>visited the Victoria and Albert Museum while in London.</p>
						</div>

						<img data-src="/assets/images/culture-jordan-n.jpg" src="/assets/images/holder.png" alt="Jordan">
						<noscript><img src="/assets/images/culture-jordan-n.jpg" alt="Jordan"></noscript>
					</div>

					<div class="photo kathie">
						<div class="desc">
							<h4 class="orange">Kathie</h4>
							<p>volunteers with Mr. Bones at the Natural History Museum.</p>
						</div>

						<img data-src="/assets/images/culture-kathie-k.jpg" src="/assets/images/holder.png" alt="Kathie">
						<noscript><img src="/assets/images/culture-kathie-k.jpg" alt="Kathie"></noscript>
					</div>

					<div class="photo kim last">
						<div class="desc">
							<h4 class="orange">Kim</h4>
							<p>As she rises up she reaches back with service projects.</p>
						</div>

						<img data-src="/assets/images/culture-kim-s.jpg" src="/assets/images/holder.png" alt="Kim">
						<noscript><img src="/assets/images/culture-kim-s.jpg" alt="Kim"></noscript>
					</div>

					<div class="leftSide photo mike-c">
						<div class="desc">
							<h4 class="orange">Mike C.</h4>
							<p>His ability to draw has gotten him out of more trouble.</p>
						</div>

						<img data-src="/assets/images/culture-mike-c.jpg" src="/assets/images/holder.png" alt="Mike C">
						<noscript><img src="/assets/images/culture-mike-c.jpg" alt="Mike C"></noscript>
					</div>

					<div class="photo mike-g">
						<div class="desc">
							<h4 class="orange">Mike G.</h4>
							<p>volunteers at the Caps' Convention to kick off the season.</p>
						</div>

						<img data-src="/assets/images/culture-mike-g.jpg" src="/assets/images/holder.png" alt="Mike G">
						<noscript><img src="/assets/images/culture-mike-g.jpg" alt="Mike G"></noscript>
					</div>

					<div class="photo mike-j last">
						<div class="desc">
							<h4 class="orange">Mike J.</h4>
							<p>enjoys snowboarding especially out West.</p>
						</div>

						<img data-src="/assets/images/culture-mike-j.jpg" src="/assets/images/holder.png" alt="Mike J">
						<noscript><img src="/assets/images/culture-mike-j.jpg" alt="Mike J"></noscript>
					</div>
				</li>
				<li>
					<div class="leftSide photo ray">
						<div class="desc">
							<h4 class="orange">Ray</h4>
							<p>enjoys doing makeup for celebrities.</p>
						</div>

						<img data-src="/assets/images/culture-ray-t.jpg" src="/assets/images/holder.png" alt="Ray">
						<noscript><img src="/assets/images/culture-ray-t.jpg" alt="Ray"></noscript>
					</div>

					<div class="photo sean">
						<div class="desc">
							<h4 class="orange">Sean</h4>
							<p>used to run marathons. Now, he chases after his little girls.</p>
						</div>

						<img data-src="/assets/images/culture-sean-b.jpg" src="/assets/images/holder.png" alt="Sean">
						<noscript><img src="/assets/images/culture-sean-b.jpg" alt="Sean"></noscript>
					</div>

					<div class="photo sharon last">
						<div class="desc">
							<h4 class="orange">Sharon</h4>
							<p>is the Chair for the St. Augustine St. Patrick's Day Parade.</p>
						</div>

						<img data-src="/assets/images/culture-sharon-c.jpg" src="/assets/images/holder.png" alt="Sharon">
						<noscript><img src="/assets/images/culture-sharon-c.jpg" alt="Sharon"></noscript>
					</div>

					<div class="leftSide photo sherri">
						<div class="desc">
							<h4 class="orange">Sherri</h4>
							<p>walked 115km of the Camino de Santiago this summer.</p>
						</div>

						<img data-src="/assets/images/culture-sherri-g.jpg" src="/assets/images/holder.png" alt="Sherri">
						<noscript><img src="/assets/images/culture-sherri-g.jpg" alt="Sherri"></noscript>
					</div>

					<div class="photo terrell">
						<div class="desc">
							<h4 class="orange">Terrell</h4>
							<p>is a 5-year member of the DC Bocce League.</p>
						</div>

						<img data-src="/assets/images/culture-terrell-f.jpg" src="/assets/images/holder.png" alt="Terrell">
						<noscript><img src="/assets/images/culture-terrell-f.jpg" alt="Terrell"></noscript>
					</div>

					<div class="last photo chris-b">
						<div class="desc">
							<h4 class="orange">Chris</h4>
							<p>grew up in Florida and loves offshore fishing any chance he can get.</p>
						</div>

						<img data-src="/assets/images/culture-chris-b.jpg" src="/assets/images/holder.png" alt="Chris">
						<noscript><img src="/assets/images/culture-chris-b.jpg" alt="Chris"></noscript>
					</div>
				</li>
			</ul>
			<div id="navigation">
				<p><span id="slider-prev"></span></p>
				<p><span id="slider-next"></span></p>
			</div>
		</div>
	</div>
	</section>

	<section id="opportunities">
		<div class="content">
			<div class="title">
				<div class="contain">
					<h2 class="orange">Looking for work?</h2>
					<h3 class="white">We're looking for talent.</h3>
					<h4 class="lightGrey">Select a Position</h4>
				</div>
			</div>
			<div class="contain">
				<ul class="careers">

					<li class="job">
						<a href="aedm.php">
							<span class="jobTitle">Account Executive: Database Marketing</span>
							<span class="experience">(2-4 Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-va.png" alt="VA" /></span>
						</a>
					</li>

					<li class="job">
						<a href="ac.php">
							<span class="jobTitle">Account Coordinator</span>
							<span class="experience">(1+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-va.png" alt="VA" /></span>
						</a>
					</li>

					<li class="job last">
						<a href="id.php">
							<span class="jobTitle">Interactive Designer</span>
							<span class="experience">(2+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-va.png" alt="VA" /></span>
						</a>
					</li>

					<li class="job">
						<a href="copy.php">
							<span class="jobTitle">Copywriter</span>
							<span class="experience">(1+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-va.png" alt="VA" /></span>
						</a>
					</li>

					<li class="job">
						<a href="qa.php">
							<span class="jobTitle">Quality Assurance Analyst</span>
							<span class="experience">(2+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-md.png" alt="Maryland" /></span>
						</a>
					</li>

					<li class="job last">
						<a href="fe.php">
							<span class="jobTitle">Front-end Developer</span>
							<span class="experience">(3+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-md.png" alt="Maryland" /></span>
						</a>
					</li>

					<li class="job">
						<a href="sys-analyst.php">
							<span class="jobTitle">System Analyst</span>
							<span class="experience">(3+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-md.png" alt="Maryland" /></span>
						</a>
					</li>

					<li class="job">
						<a href="c-sharp-developer.php">
							<span class="jobTitle">C# Developer</span>
							<span class="experience">(3+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-md.png" alt="Maryland" /></span>
						</a>
					</li>

					<li class="job last">
						<a href="ssis-developer.php">
							<span class="jobTitle">SSIS Developer</span>
							<span class="experience">(3+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-md.png" alt="Maryland" /></span>
						</a>
					</li>

					<li class="job">
						<a href="account-executive.php">
							<span class="jobTitle">Account Executive</span>
							<span class="experience">(3+ Years)</span>
							<span class="location"><img src="/assets/images/map-jobs-va.png" alt="VA" /></span>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="map">
			<div class="contain">
				<div class="wrapper">
					<p class="phone"><img src="/assets/images/icon-phone.png" alt="" /><a href="tel:7038752193">703.875.2193</a></p>
					<p class="orange">LMO</p>
					<address>1776 Wilson Boulevard<br>5<sup>th</sup> Floor<br>Arlington, VA 22209</address>
					<a class="directions" href="https://goo.gl/maps/7o9q7" target="_blank">View Directions</a>
				</div>
			</div>
		</div>
		<div class="title">
			<div class="contain">
				<h2 class="orange">Say Hello</h2>
				<h3 class="mildBlack">What should we talk about?</h3>
				<h4 class="lightGrey" id="select_contact">Select a Contact</h4>
			</div>
		</div>
		<div class="contain">
		<ul class="contacts">

				<li>
					<a href="#">
						<h5>Being our Client</h5>
						<img class="staff" src="/assets/images/say-hello-sherri.png" width="129" height="129" alt="" />
						<h6 class="name" data-name="Sherri">Sherri</h6>
					</a>
				</li>
				<li>
					<a href="#">
						<h5>Media Platforms</h5>
						<img class="staff" src="/assets/images/say-hello-christie.png" width="129" height="129" alt="" />
						<h6 class="name" data-name="Christi">Christi</h6>
					</a>
				</li>
				<li>
					<a href="#">
						<h5>Digital Ideas and Technology</h5>
						<img class="staff" src="/assets/images/say-hello-mike.png" width="129" height="129" alt="" />
						<h6 class="name" data-name="Mike">Mike</h6>
					</a>
				</li>
				<li>
					<a href="#">
						<h5>Production/Creative Freelance Opportunities</h5>
						<img class="staff" src="/assets/images/say-hello-jennifer.png" width="129" height="129" alt="" />
						<h6 class="name" data-name="Jennifer">Jennifer</h6>
					</a>
				</li>
				<li>
					<a href="#">
						<h5>General Office Administration</h5>
						<img class="staff" src="/assets/images/say-hello-horacio.png" width="129" height="129" alt="" />
						<h6 class="name" data-name="Horacio">Horacio</h6>
					</a>
				</li>
				<li>
					<a href="#">
						<h5>Working Here</h5>
						<img class="staff" src="/assets/images/say-hello-nora2.png" width="129" height="129" alt="" />
						<h6 class="name" data-name="Nora">Nora</h6>
					</a>
				</li>

		</ul>
		</div>

		<div class="clear"></div>

		<div class="contain">
			<div class="form-container closed">
				<form id="contact-form" method="post" action="mailer.php" enctype="multipart/form-data">
					<div class="col-1">
						<div class="inputWrapper">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" placeholder="Enter your name here" value="">
						</div>

						<div class="inputWrapper">
							<label for="phone">Phone</label>
							<input type="text" id="phone" name="phone" placeholder="Enter your number here" value="">
						</div>

						<div class="inputWrapper">
							<label for="email">Email</label>
							<input type="text" id="email" name="email" placeholder="Enter your email here" value="">
						</div>
					</div>
					<div class="col-1">
						<div class="inputWrapper">
							<label>How can we help?</label>
							<textarea id="comments" name="comments" placeholder="Enter your comment here"></textarea>
						</div>
						<div class="inputWrapper" style="display: none;">
							<label>Address</label>
							<input type="text" id="address" name="address" >
						</div>
						<div class="file_wrapper" class="inputWrapper">
							<label for="file" id="">Attachment</label>
							 <div id="progress"></div>
							<input type="file" id="file" name="file">
							<span class="sub-message">Send us your RFP, resume or proposal.</span>
						</div>
					</div>
					<div class="clear"></div>
					<input type="hidden" id="to" name="to"  value="" />
					<div id="server_message" class="server-error" ></div>
					<button class="form" type="submit">Send Message to <span class="name"></span></button>
				</form>
			</div>
			<div class="thankyou">
				<h1 class="white">Thank you.</h1>
				<span class="thanks">We're excited to hear from you.</span>
			</div>
		</div>

	</section>

	<footer>
		<div class="contain">
			<a href="http://www.linkedin.com/company/28125?trk=tyah&trkInfo=tas%3Alm%26%2Cidx%3A1-1-1" class="linkedin" target="_blank">
				<img src="/assets/images/social-linkedin.png" alt="LinkedIn" />
			</a>
			<a href="https://www.facebook.com/LMOadvertising" class="facebook" target="_blank">
				<img src="/assets/images/social-facebook.png" alt="Facebook" />
			</a>
			<a href="http://instagram.com/lmoadv" class="instagram" target="_blank">
				<img src="/assets/images/social-instagram.png" alt="Instagram" />
			</a>
			<a href="http://www.pinterest.com/lmoadvertising/" class="pinterest" target="_blank">
				<img src="/assets/images/social-pinterest.png" alt="Pintrest" />
			</a>
			<a href="https://twitter.com/lmoadv" class="twitter" target="_blank">
				<img src="/assets/images/social-twitter.png" alt="Twitter" />
			</a>
		</div>
	</footer>

	<div class="copyright">
		<p>&copy; Copyright 2014 LMO Advertising, All Rights Reserved.  <a href="#" id="pp">Privacy Policy</a></p>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<?php if( $_SERVER['REMOTE_ADDR'] == '108.12.181.76' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ):?>

	<script>var DEBUG=true;</script>
	<?php endif;?>
	<script src="/assets/js/jquery.unveil.min.js"></script>
	<script src="/build/js/main.js"></script>
	<script src="/assets/js/lib/waypoints.js"></script>
	<script src="/assets/js/lib/jquery.bxslider.js"></script>
	<script src="/assets/js/lib/jquery.colorbox.js"></script>
	<script src="/assets/js/lib/jquery.validate.js"></script>



</body>
</html>