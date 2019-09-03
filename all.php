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
	<!-- <?php
	$file_name="en";
	if(isset($_GET["lang"])){
		$file_name=$_GET["lang"];
	}
	$L=parse_ini_file("lang/$file_name.ini");

	?> -->

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
    			<a href="login.php" class="btn btn-Login">Log in</a>
    		</div>
    		<div class="col-md-2">
    			<a href="Post.php" class="btn btn-post">POST YOUR ADD</a>
    		</div>
    	</div>
    	</div>
    </div>

    <div id="section7" class="container-fluid">
    	<!--start section-->
    	<div class="container">
    		<div class="add-menu">
    			<!--start add menu-->
    			<div class="first-ad-menu">
    				<!--strat first ad menu-->
    				<div class="row">
    					<div class="col-md-3 bar1">
    						<a class="ui-buttn is-secondary set-location" data-modal-selector=".serp-locations" href="/en/ads-locations?categoryId=391"><svg class="ui-icon i-pin is-inline"><use xlink:href="#i-pin"></use></svg>Select Location</a>
    					</div>
    					<div class="col-md-3 bar1">
    						<a class="ui-buttn is-secondary set-category" data-modal-selector=".serp-categories" href="/en/ads-categories?categoryId=391"><svg class="ui-icon i-tag"><use xlink:href="#i-tag"></use></svg>Vehicles</a>
    					</div>
    					<div class="col-md-6 bar2">
    						<form method="GET" class="ui-form">
    							<div class="row">
    								<div class="col-md-9">
    									<input id="query" name="query" type="text" class="ui-input" placeholder="What are you searching for?" value="">
    								</div>
    								<!-- <div class="col-md-3 search">
    									<button class="ui-buttn is-secondary gtm-search"><svg class="ui-icon i-search"><use xlink:href="#i-search"></use></svg>Search</button>

    								</div> -->
    							</div>
    						</form>
    					</div>
    				</div>
    				<!--end first ad menu-->
    			</div>
    			<div class="second-ad-menu">
    				<!--start second ad menu-->
    				<!--end second ad menu-->
    			</div>
    			<!--end add menu-->
    		</div>
    	</div>
    	<!--end section-->
    </div>

</body>
</html>