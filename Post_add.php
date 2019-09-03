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
	$file_name="en";
	if(isset($_GET["lang"])){
		$file_name=$_GET["lang"];
	}
	$L=parse_ini_file("lang/$file_name.ini");

	
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

    <div id="section6" class="container-fluid">
    	<!--start section-->
    	<div class="container">
    		<div class="post-menu">
    			<!--start post menu-->
    			<div class="post-intro t-center">
    				<h2>Welcome Jeewani Shalika! Let's post an ad. Choose any option below:</h2>
    			</div>
    			<div class="first-post-menu">
    				<!--start first menu-->
    				<div class="row">
    					<div class="col-md-6">
    						<div class="box">
    							<div class="box-title">
    								<img width="72" height="72" srcset="https://w.ikman-st.com/dist/img/all/post/offer-1x-c3448312.png 1x, https://w.ikman-st.com/dist/img/all/post/offer-2x-147b0fb2.png 1.3x">
    							</div>
    							<h3 class="t-center">Sell something</h3>
    								<nav class="stack">
    									<ul>
    										<li>Sell an item or service</li>
    										<li>Offer a property for rent</li>
    										<li>Post a job vacancy</li>
    										

    									</ul>
    								</nav>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<div class="box">
    							<div class="box-title">
    								<img width="72" height="72" srcset="https://w.ikman-st.com/dist/img/all/post/wanted-1x-0487f1af.png 1x, https://w.ikman-st.com/dist/img/all/post/wanted-2x-056fb7f9.png 1.3x">
    							</div>
    							<h3 class="t-center">Look for something</h3>
    								<nav class="stack">
    									<ul>
    										<li>Look for property to rent</li>
    										<li>Look for something to buy</li>
    										
    										

    									</ul>
    								</nav>
    						</div>
    					</div>
    				</div>
    				
    				<!--end first menu-->
    			</div>
    			<div class="second-post-menu">
    				<!--start second menu-->
    				<div class="post-allow t-center">
    					<img class="post-info-img" width="72" height="72" srcset="https://w.ikman-st.com/dist/img/all/post/ad-limits-lg-c2bac618.png 1x, https://w.ikman-st.com/dist/img/all/post/ad-limits-lg-2x-e46d4edd.png 1.3x">
    					<div class="post-intro">
    						<h3>Your posting allowance</h3>
    						<p>Learn more about posting ads on ikman.</p>
    					</div>
    				</div>
    				<!--end secnd menu-->
    			</div>

    			<!--end post menu-->
    		</div>
    	</div>
    	<!--end section-->
    </div>

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