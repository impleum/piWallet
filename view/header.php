<?php if (!defined("IN_WALLET")) { die("Auth Error!"); } ?>
<!DOCTYPE HTML>

<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!-- Bootstrap include stuff -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Rubik" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="assets/css/wallet.css" rel="stylesheet">
		<link href="assets/css/languages.min.css" rel="stylesheet">
		

		<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://impleum.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><link rel="icon" href="https://impleum.com/wp-content/uploads/2018/03/cropped-favicon-32x32.png" sizes="32x32" />
		<link rel="icon" href="https://impleum.com/wp-content/uploads/2018/03/cropped-favicon-192x192.png" sizes="192x192" />
		<link rel="apple-touch-icon-precomposed" href="https://impleum.com/wp-content/uploads/2018/03/cropped-favicon-180x180.png" />
		<meta name="msapplication-TileImage" content="https://impleum.com/wp-content/uploads/2018/03/cropped-favicon-270x270.png" />


		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.6.0/moment.min.js"></script>
        <!-- End Bootstrap include stuff-->
        <title><?=$fullname?> Wallet</title>
		<link rel="shortcut icon" href="favicon.ico">
		
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
			(function (d, w, c) {
				(w[c] = w[c] || []).push(function() {
					try {
						w.yaCounter49458412 = new Ya.Metrika2({
							id:49458412,
							clickmap:true,
							trackLinks:true,
							accurateTrackBounce:true,
							webvisor:true
						});
					} catch(e) { }
				});

				var n = d.getElementsByTagName("script")[0],
					s = d.createElement("script"),
					f = function () { n.parentNode.insertBefore(s, n); };
				s.type = "text/javascript";
				s.async = true;
				s.src = "https://d31j93rd8oukbv.cloudfront.net/metrika/tag.js";

				if (w.opera == "[object Opera]") {
					d.addEventListener("DOMContentLoaded", f, false);
				} else { f(); }
			})(document, window, "yandex_metrika_callbacks2");
		</script>
		<noscript><div><img src="https://d31j93rd8oukbv.cloudfront.net/watch/49458412" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
    </head>
    
    
    <body>
	<div class="navbar-container">
	<div class="container">
        <nav class="navbar navbar-expand-lg" role="navigation">
			
			<a href="https://impleum.com/wallet"  rel="home" itemprop="url"><img width="auto" height="32" src="assets/img/impleum-logo-wallet.png" class="navbar-brand" alt="Impleum" itemprop="logo"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link  ml-sm-2" target="_blank" href="https://impleum.com">Home <span class="sr-only">Home</span></a>
					</li>
					<li class="nav-item  ml-sm-2">
						<a class="nav-link" target="_blank"  href="https://impleum.com/#wallets">Desktop wallets <span class="sr-only">Desktop wallets</span></a>
					</li>
					<li class="nav-item  ml-sm-2">
						<a class="nav-link" target="_blank"  href="https://impleum.com/#roadmap">Road map <span class="sr-only">Road map</span></a>
					</li>
					<li class="nav-item ml-sm-2">
						<a class="nav-link" target="_blank" href="https://impleum.com/#team">Team <span class="sr-only">Team</span></a>
					</li>
					<li class="nav-item  ml-sm-2">
						<a class="nav-link" target="_blank"  href="https://impleum.com/blog/">Blog <span class="sr-only">Blog</span></a>
					</li>
					<li class="nav-item  ml-sm-2">
						<a class="nav-link" target="_blank"  href="https://impleum.com/faq/">FAQ <span class="sr-only">FAQ</span></a>
					</li>
					<li class="nav-item  dropdown ml-sm-2">

						<a class="nav-link dropdown-toggle" href="#" id="Airdrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Airdrop
						</a>
						<div class="dropdown-menu" aria-labelledby="Airdrop">
							<a class="dropdown-item" target="_blank" href="https://impleum.com/test-by-quizi-io/">Test by Quizi.io</a>
							<a class="dropdown-item" target="_blank" href="https://bitcointalk.org/index.php?topic=4455120">Twitter</a>
							
							<a class="dropdown-item" target="_blank" href="https://bitcointalk.org/index.php?topic=4437470">YouTube</a>
						</div>
					</li>
					<li class="nav-item  dropdown ml-sm-2">

						<a class="nav-link dropdown-toggle" href="#" id="Resources" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Resources
						</a>
						<div class="dropdown-menu" aria-labelledby="Resources">
							<a class="dropdown-item" target="_blank" href="http://www.masterpool.pw/">Pool</a>
							<a class="dropdown-item" target="_blank" href="https://explorer.impleum.com/">Explorer</a>
							
							<a class="dropdown-item" target="_blank" href="https://impleum.com/wp-content/uploads/2018/05/impleum-press-kit.zip">Press Kit</a>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav ml-sm-2">
					<div class="nav navbar-nav navbar-right">
					<li class="nav-item dropdown langselect">
				
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Language
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="index.php?lang=en">
									<span class="lang-sm lang-lbl" lang="en"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=grc">
									<span class="lang-sm lang-lbl" lang="el"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=zho">
									<span class="lang-sm lang-lbl" lang="zh"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=ita">
									<span class="lang-sm lang-lbl" lang="it"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=por">
									<span class="lang-sm lang-lbl" lang="pt"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=hin">
									<span class="lang-sm lang-lbl" lang="hi"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=spa">
									<span class="lang-sm lang-lbl" lang="es"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=tgl">
									<span class="lang-sm"></span> Tagalog
							</a>
							<a class="dropdown-item" href="index.php?lang=rus">
									<span class="lang-sm lang-lbl" lang="ru"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=nld">
									<span class="lang-sm lang-lbl" lang="nl"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=fra">
									<span class="lang-sm lang-lbl" lang="fr"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=deu">
									<span class="lang-sm lang-lbl" lang="de"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=tur">
									<span class="lang-sm lang-lbl" lang="tr"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=vie">
									<span class="lang-sm lang-lbl" lang="vi"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=jpn">
									<span class="lang-sm lang-lbl" lang="ja"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=kor">
									<span class="lang-sm lang-lbl" lang="ko"></span>
							</a>
							<a class="dropdown-item" href="index.php?lang=ara">
									<span class="lang-sm lang-lbl" lang="ar"></span>
							</a>
						</ul>
					</div>
				</div>
				</ul>

        </nav>
        </div>
        </div>
        <div class="jumbotron" style="background-color:#2B2B2B">
            <div class="container">
