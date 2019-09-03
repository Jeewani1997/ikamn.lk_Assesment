<!DOCTYPE html>
<html>
<head>
	<title>ikman.lk</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/common.css">
</head>
<body>
	<?php
	// $file_name="en";
	// if(isset($_GET["lang"])){
	// 	$file_name=$_GET["lang"];
	// }
	// $L=parse_ini_file("lang/$file_name.ini");

	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	if (empty($_POST['Email']) || empty($_POST['Password'])) {
		# code...
		echo "Please Fill other blanks";
	}else{
		echo "Login sucessfull";
	}

	?>

	<div id="section1" class="container-fluid">
    	<!--start section1-->
    	<div class="container">
    	<div class="row">
    		<div class="col-md-2">
    			<img class="image" src="logo.png">
    		</div>
    		<div class="col-md-1">
    			<a href="all.php" class="btn btn-All">All ads</a>
    		</div>
    		<div class="col-md-5">
    			<ul class="locales gtm-hamburger-locale"><li class="gtm-hamburger-locale"><a href="/si" hreflang="si" class="gtm-hamburger-locale">සිංහල</a></li><li class="gtm-hamburger-locale"><a href="/ta" hreflang="ta" class="gtm-hamburger-locale">தமிழ்</a></li></ul>
    		</div>
    		<div class="col-md-1">
    			<p><a href="chat.php" class="btn btn-Chat">Chat</a></p>

    		</div>
    		<div class="col-md-1">
    			<a href="login.php" class="btn btn-Login">My account</a>
    		</div>
    		<div class="col-md-2">
    			<a href="Post_add.php" class="btn btn-post">POST YOUR ADD</a>
    		</div>
    	</div>
    	</div>
    </div>

    <div id="section2" class="container-fluid">
    	<!--start section2-->
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
    						<h1 class="t-bold">Welcome to ikman.lk - the largset marketplace in Sri Lanka!</h1>
    						<p1>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more <strong>in Sri Lanka!</strong> </p1>
    					</div>
    				</div>
    				<div class="home-menu"><!-- /div> -->
    				<div class="row">
    					<div class="col-md-12">
    						<p2>Browse our top categories:</p2>
    						<div class="home">
    							<div class="row"></div>
    							<div class="col-md-3">
    								<a href="/en/ads/sri-lanka/electronics"><span class="ui-sprite categories-36 mobiles"></span><span>Electronics</span></a>
    							</div>
    							<div class="col-md-3">
    								<a href="/en/ads/sri-lanka/property"><span class="ui-sprite categories-36 property"></span><span>Property</span></a>
    							</div>
    							<div class="col-md-3">
    								<a href="/en/ads/sri-lanka/vehicles"><span class="ui-sprite categories-36 vehicles"></span><span>Vehicles</span></a>
    							</div>
    							<div class="col-md-3"><a href="https://ikman.lk/en/jobs"><span class="ui-sprite categories-36 jobs"></span><span>Jobs in Sri Lanka</span></a></div>
    						<!-- </div>//home -->
    						</div>
    						<div class="row deals-link"><div class="deal-image"></div><a href="/en/shops/deals">ikman Deals</a><span class="ui-bubble is-member new-bubble">NEW!</span>Great deals delivered straight to your doorstep</div>
    					</div>
    				</div>
    				</div>
    			</div>
    			<!-- </div> -->
    			<div class="col-md-6">
    				<div class="home-locations"><div class="home-group is-region"><p class="h3">Districts</p><ul class="locations-1"><li><a href="/en/ads/colombo" data-id="1506">Colombo</a></li><li><a href="/en/ads/kandy" data-id="1636" class="">Kandy</a></li><li><a href="/en/ads/galle" data-id="1559" class="">Galle</a></li></ul><ul class="locations-2"><li><a href="/en/ads/ampara" data-id="1432" class="">Ampara</a></li><li><a href="/en/ads/anuradhapura" data-id="1452" class="">Anuradhapura</a></li><li><a href="/en/ads/badulla" data-id="1475" class="">Badulla</a></li><li><a href="/en/ads/batticaloa" data-id="1491" class="">Batticaloa</a></li><li><a href="/en/ads/gampaha" data-id="1577" class="">Gampaha</a></li><li><a href="/en/ads/hambantota" data-id="1592" class="">Hambantota</a></li><li><a href="/en/ads/jaffna" data-id="1605" class="">Jaffna</a></li><li><a href="/en/ads/kalutara" data-id="1620" class="">Kalutara</a></li><li><a href="/en/ads/kegalle" data-id="1658">Kegalle</a></li><li><a href="/en/ads/kilinochchi" data-id="1670" class="">Kilinochchi</a></li><li><a href="/en/ads/kurunegala" data-id="1674" class="">Kurunegala</a></li><li><a href="/en/ads/mannar" data-id="1706" class="">Mannar</a></li><li><a href="/en/ads/matale" data-id="1712" class="">Matale</a></li><li><a href="/en/ads/matara" data-id="1724" class="">Matara</a></li><li><a href="/en/ads/moneragala" data-id="1740" class="">Moneragala</a></li><li><a href="/en/ads/mullativu" data-id="1752" class="">Mullativu</a></li><li><a href="/en/ads/nuwara-eliya" data-id="1757" class="">Nuwara Eliya</a></li><li><a href="/en/ads/polonnaruwa" data-id="1763" class="">Polonnaruwa</a></li><li><a href="/en/ads/puttalam" data-id="1771" class="">Puttalam</a></li><li><a href="/en/ads/ratnapura" data-id="1788" class="">Ratnapura</a></li><li><a href="/en/ads/trincomalee" data-id="1806" class="">Trincomalee</a></li><li><a href="/en/ads/vavuniya" data-id="1818" class="">Vavuniya</a></li></ul></div></div>
    				<div class="home-map"><object type="image/svg+xml" data="/dist/svg/map/ikman-54879037.min.svg"></object><div class="map-info">Kandy</div></div>
    				
    				
    			</div>
    		</div>
    		</div>
    	</div>
    </div>

    <div id="section3" class="container-fluid">
    	<!--start section3-->
    	<div class="container">
    		<div class="home-info row lg-g"><div class="col-12 lg-9"><div class="ui-panel home-safety is-rounded is-pad-m"><div class="ui-panel-content ui-panel-block"><p class="h5">Stay safe while trading!</p><p>All ads are manually reviewed by our team for your safety. <a href="/en/help/stay-safe">Read our tips</a> on how to make safe deals.</p>
</div></div></div><<!-- div class="col-12 lg-3"><div class="ui-panel home-fb is-rounded is-pad-m"><div class="ui-panel-content ui-panel-block"><p1 class="title"><a href="https://www.facebook.com/ikmanclassifieds" target="_blank" rel="nofollow"><svg class="ui-icon i-facebook"><use xlink:href="#i-facebook"></use></svg>&nbsp;Like us on Facebook</a></p1></div></div></div></div> -->
    	</div>
    	<!--end section3-->
    </div>

  <div id="section4" class="container-fluid">
  	<!--start section-->
  	<div class="container">
  		<div class="full-menu">
  			<!--start full menu-->
  			<div class="row first-menu">
  				<!--start first menu-->
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/vehicles" class="t-bold"><span class="ui-sprite categories-36 vehicles"></span><span>Vehicles</span></a>
  					</h2>
  					<p class="count">
  						<span class="badge">"69,313"</span>
  					</p>
  					<p class="info t-small">Buy and sell used cars, motorbikes and other vehicles in Sri Lanka. Choose from top brands including Toyota, Nissan, Honda and Suzuki.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/electronics" class="t-bold"><span class="ui-sprite categories-36 mobiles"></span><span>Electronics</span></a>
  					</h2>
  					<p class="count">
  						<span class="badge">"53,258"</span>
  					</p>
  					<p class="info t-small">Find great deals for used electronics in Sri Lanka including mobile phones, computers, laptops, TVs, home theatres and much more.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/property" class="t-bold"><span class="ui-sprite categories-36 property"></span><span>Property</span></a>
  					</h2>
  					<p class="count">
  						<span class="badge">"22,047"</span>
  					</p>
  					<p class="info t-small">View listings for property in Sri Lanka. Find the cheapest rates for apartments, commercial and residential properties, as well as for land and plots.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/home-garden" class="t-bold"><span class="ui-sprite categories-36 home"></span><span>Home &amp; Garden</span></a>

  					</h2>
  					<p class="count">
  						<span class="badge">"10,058"</span>
  					</p>
  					<p class="info t-small">Buy and sell new and used home appliances including furniture, kitchen items, garden products and other household items in Sri Lanka.</p>
  				</div>
  				<!--end first menu-->
  			</div>
  			<div class="row second-menu">
  				<!--start second menu-->
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/fashion-health-beauty" class="t-bold"><span class="ui-sprite categories-36 fashion"></span><span>Fashion, Health &amp; Beauty</span></a>

  					</h2>
  					<p class="count">
  						<span class="badge">"7,693"</span>
  					</p>
  					<p class="info t-small">Everything you need to look and feel amazing! check out the latest fashion items and a range of health and beauty products being offered in Sri Lanka.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/hobby-sport-kids" class="t-bold"><span class="ui-sprite categories-36 hobby"></span><span>Hobby, Sport &amp; Kids</span></a>

  					</h2>
  					<p class="count">
  						<span class="badge">"7,549"</span>
  					</p>
  					<p class="info t-small">Buy and sell used musical instruments, sports gear and accessories, art and collectibles, items for kids and more</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/business-industry" class="t-bold"><span class="ui-sprite categories-36 business"></span><span>Business &amp; Industry</span></a>

  					</h2>
  					<p class="count">
  						<span class="badge">"7,451"</span>
  					</p>
  					<p class="info t-small">Browse through a range of business services and industrial companies offering products and services to both other businesses and consumers alike</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/animals" class="t-bold"><span class="ui-sprite categories-36 animals"></span><span>Animals</span></a>

  					</h2>
  					<p class="count">
  						<span class="badge">"5,284"</span>
  					</p>
  					<p class="info t-small">Search from the widest variety of pets in Sri Lanka. Select from dogs, puppies, cats, kittens, birds and other domesticated animals.</p>
  				</div>
  				<!--end of second menu-->
  			</div>
  			<div class="row third-menu">
  				<!--start third menu-->
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/services" class="t-bold"><span class="ui-sprite categories-36 services"></span><span>Services</span></a>

  					</h2>
  					<p class="count">
  						<span class="badge">"3,430"</span>
  					</p>
  					<p class="info t-small">Browse through a range of service based companies offering services to both other businesses and consumers alike.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="https://ikman.lk/en/jobs" class="t-bold"><span class="ui-sprite categories-36 jobs"></span><span>Jobs in Sri Lanka</span></a>

  					</h2>
  					<p class="count">
  						<span class="badge">"2,628"</span>
  					</p>
  					<p class="info t-small">Post and apply for jobs and career opportunities in Sri Lanka. Search for job vacancies in your city.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/food-agriculture" class="t-bold"><span class="ui-sprite categories-36 food"></span><span>Food &amp; Agriculture</span></a>
  					</h2>
  					<p class="count">
  						<span class="badge">"1,243"</span>
  					</p>
  					<p class="info t-small">Find food and edible products, including fresh fruits and vegetables, meats, fish, seafood, crop seeds, plants and other agricultural products in Sri Lanka.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/education" class="t-bold"><span class="ui-sprite categories-36 education"></span><span>Education</span></a>
  					</h2>
  					<p class="count">
  						<span class="badge">"1,058"</span>
  					</p>
  					<p class="info t-small">Buy and sell books and magazines, find tuition, classes and other educational resources in Sri Lanka.</p>
  				</div>
  				<!--end third menu-->
  			</div>
  			<div class="row forth-menu">
  				<!--start forth menu-->
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/other" class="t-bold"><span class="ui-sprite categories-36 other"></span><span>Other</span></a>
  					</h2>
  					<p class="count">
  						<span class="badge">"567"</span>
  					</p>
  					<p class="info t-small">Classified ads for miscellaneous products and items all over Sri Lanka. Buy and sell almost anything.</p>
  				</div>
  				<div class="col-md-3">
  					<h2 class="header">
  						<a href="/en/ads/sri-lanka/work-overseas" class="t-bold"><span class="ui-sprite categories-36 overseas_jobs"></span><span>Work Overseas</span></a>
  					</h2>
  					<p class="count">
  						<span class="badge">418</span>
  					</p>
  					<p class="info t-small">Find best international job opportunities only on ikman. Browse over hundreds of vacancies and apply online.</p>
  				</div>
  				<div class="col-md-3"></div>
  				<div class="col-md-3"></div>
  				<!--end forth menu-->
  			</div>
  			<!--end full menu-->
  		</div>
  	</div>
  	<!--end section-->
  </div>

  <div class="post-cta t-center">
  	<!--start first footer-->
  	  <h3>Do you have something to sell?</h3>
  	  <h4>Post your ad on ikman.lk</h4>
  	  <p class="posted">
  	  	<svg class="ui-icon i-pointer-l"><use xlink:href="#i-pointer-l"></use></svg>
  	  	<a class="ui-btn is-primary gtm-postad" href="/en/post-ad" rel="nofollow">Post an ad now!</a>
  	  	<svg class="ui-icon i-pointer-r"><use xlink:href="#i-pointer-r"></use></svg>
  	  </p>

  	<!--end first footr-->
  </div>	
  <div id="fb-root"></div>
  <div id="section4" class="container-fluid">
  	<!--start section4-->
  <div class="footer container">
  	<!--start footer c-->
  	<div class="row foot-menu">
  		<!--start full  menu-->
         <nav class="footer-intro ui-nav-links col-md-4">
  			<p class="Title">Download our app</p>
  			<ul><li class="gtm-hamburger-download-app"><a href="https://play.google.com/store/apps/details?id=lk.ikman&amp;referrer=utm_source%3D(direct)%26utm_medium%3Dfooter_banner%26utm_campaign%3Dandroid_app" rel="nofollow" target="_blank" class="app-android gtm-hamburger-download-app"><img width="136" height="41" srcset="https://w.ikman-st.com/dist/img/all/app/android-a9c12585.png 1x, https://w.ikman-st.com/dist/img/all/app/android-2x-f6e6a4fb.png 1.3x"></a></li><li class="gtm-hamburger-download-app"><a href="https://itunes.apple.com/us/app/ikman/id991709749" rel="nofollow" target="_blank" class="app-ios gtm-hamburger-download-app"><img width="136" height="41" srcset="https://w.ikman-st.com/dist/img/all/app/ios-f93749bf.png 1x, https://w.ikman-st.com/dist/img/all/app/ios-2x-5670037f.png 1.3x"></a></li></ul>
  			<p class="Title">Connect with us</p>
  			<a href="https://www.facebook.com/ikmanclassifieds" rel="nofollow" target="_blank" class="ui-social-btn is-fb gtm-like-us-fb"><span class="icon gtm-like-us-fb"><svg class="ui-icon i-facebook is-l"><use xlink:href="#i-facebook"></use></svg></span><span class="gtm-like-us-fb text">Like us on Facebook</span></a>
  		</nav>
  		<nav class="ui-nav-links col-md-2">
  			<p class="Title">Learn More</p>
  			<ul>
  				<li class="ui-nav-item">
  					<a href="/en/help/sell-fast#help-content" rel="" target=""><span class="hide-for-inactive">How to sell fast</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/buy-now" rel="" target=""><span class="hide-for-inactive">Buy Now on ikman.lk</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/membership" rel="" target=""><span class="hide-for-inactive">Membership</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="http://advertise.ikman.lk"><span class="hide-for-inactive">Banner Advertising</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/promotions" rel="" target=""><span class="hide-for-inactive">Promote your ad</span></a>
  				</li>
  			</ul>
  		</nav>
  		<nav class="ui-nav-links col-md-2">
  			<p class="Title">Help & Support</p>
  			<ul>
  				<li class="ui-nav-item">
  					<a href="/en/help/faq#help-content" rel="" target=""><span class="hide-for-inactive">FAQ</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/help/stay-safe#help-content" rel="" target=""><span class="hide-for-inactive">Stay safe on ikman.lk</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/help/contact#help-content" rel="" target=""><span class="hide-for-inactive">Contact us</span></a>
  				</li>
  			</ul>
  		</nav>
  		<nav class="ui-nav-links col-md-2">
  			<p class="Title">Social</p>
  			<ul>
  				<li class="ui-nav-item">
  					<a href="http://blog.ikman.lk/">Blog</a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="https://www.facebook.com/ikmanclassifieds" rel="nofollow" target="_blank">Facebook</a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="https://twitter.com/Ikman_lk" rel="nofollow" target="_blank">Twitter</a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="https://www.youtube.com/user/Ikmansl" rel="nofollow" target="_blank">YouTube</a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="https://plus.google.com/+IkmanLk/posts" rel="nofollow" target="_blank">Google+</a>
  				</li>
  			</ul>
  		</nav>
  		<nav class="ui-nav-links col-md-2">
  			<p class="Title">About us</p>
  			<ul>
  				
  				<li class="ui-nav-item">
  					<a href="/en/help/about#help-content" rel="" target=""><span class="hide-for-inactive">About us</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="https://ikman.lk/en/shops/ikman-careers" class="careers">Career</a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/terms" rel="nofollow" target=""><span class="hide-for-inactive">Terms &amp; Conditions</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/privacy" rel="nofollow" target=""><span class="hide-for-inactive">Privacy Policy</span></a>
  				</li>
  				<li class="ui-nav-item">
  					<a href="/en/sitemap" rel="" target=""><span class="hide-for-inactive">Sitemap</span></a>
  				</li>
  			</ul>
  		</nav>
  		<!--end full menu-->
  	</div>
  	<div class="footer-final row">
  		<!--start final f-->
  		<div class="col-md-8">Copyright © Saltside Technologies</div>
  		<div class="col-md-4">
  			<img height="18" srcset="https://w.ikman-st.com/dist/img/ikman/all/logos/footer-65b165d1.png 1x, https://w.ikman-st.com/dist/img/ikman/all/logos/footer-2x-54fad31b.png 1.3x">
  		</div>
  		<!--end final f-->
  	</div>
  	<!--end footer c-->
  </div>
  <!--end section-->
</div>


</body>
</html>