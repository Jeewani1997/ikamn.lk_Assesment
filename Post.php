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
    			<a href="login.php" class="btn btn-Login">Log in</a>
    		</div>
    		<div class="col-md-2">
    			<a href="Post.php" class="btn btn-post">POST YOUR ADD</a>
    		</div>
    	</div>
    	</div>
    </div>

     <div id="section5" class="container-fluid">
    	<!--start of section-->
    	<div class="container">
    		<div class="row full-menu">
    			<!--start of full menu-->
    			<div class="us-details col-md-6">
    				<div class="us-heading">
    					<h2>Post an ad</h2>
    					<h3>Login to post your ad and keep track of it in your account.</h3>
    				</div>
    				<ul class="account-promo">
    					<li>
    						<span class="img-promo"><img width="72" height="72" srcset="https://w.ikman-st.com/dist/img/all/account/1-1x-a2fc1800.png 1x, https://w.ikman-st.com/dist/img/all/account/1-2x-cc37cb6a.png 1.3x"></span>
                            <span>Start posting your own ads.</span>
    					</li>
                        <li>
                            <span class="img-promo"><img width="72" height="72" srcset="https://w.ikman-st.com/dist/img/all/account/2-1x-3efcbe32.png 1x, https://w.ikman-st.com/dist/img/all/account/2-2x-4061a16d.png 1.3x"></span>
                            <span>Mark ads as favorite and view them later.</span>

                        </li>
                        <li>
                            <span class="img-promo"><img width="72" height="72" srcset="https://w.ikman-st.com/dist/img/all/account/3-1x-b04d6b82.png 1x, https://w.ikman-st.com/dist/img/all/account/3-2x-c5456d39.png 1.3x"></span>
                            <span>View and manage your ads at your convenience.</span>
                        </li>
    				</ul>
    					
    				</div>
                    <div class="col-md-6">
                    <div class="log-details">
                        <a href="/en/users/facebook-login" role="button" class="ui-btn fb-btn gtm-fb-login"><svg class="ui-icon i-fb-white is-l"><use xlink:href="#i-fb-white"></use></svg><span class="ui-sprite web fb-white"></span>Continue with Facebook</a>
                        <div class="t-center margin-tb">or</div>

                        <form action="login_action.php" method="POST" class="ui-form">
                            <div class="form-group">
                                <label><?=$L["Email"]?></label>
                                <input type="text" name="Email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label><?=$L["Password"]?></label>
                                <input type="text" name="Password" class="form-control" placeholder="Password">
                            </div>
                            <button class="ui-btn is-secondary has-busy is-auto is-island gtm-email-login"><span class="label">Log in</span><span class="spin"></span></button>

                            <!-- <input type="Submit" name="Submit" value="login"> -->
                            
                        </form>
                        <h5 class="t-center margin-top-16"><a href="/en/password-reset">Forgot password?</a></h5>

                        <div class="signup-details">
                            <h2 class="t-center">Don't have an account yet?</h2>
                            <div class="t-center">
                                <a href="signup.php" class="btn btn-signup">Sign-up</a>
                            </div>
                        </div>
                    </div>
                </div>
    			
    			<!--end of full menu-->
    		</div>
    	</div>
    	<!--end of section-->
    </div>

</body>
</html>