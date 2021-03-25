<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Panorama - 34 Congreso Fendipetroleo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="mobile-web-app-capable" content="yes" />
	<link rel="shortcut icon" href="<?php echo constant('URL'); ?>public/icon/favicon.png">
	<style type="text/css">
		/* fullscreen */
		html {
			height: 100%;
		}

		body {
			height: 100%;
			margin: 0px;
			overflow: hidden;
			/* disable scrollbars */
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
			/* remove highlight on tab for iOS/Android */
		}

		/* fix for scroll bars on webkit & >=Mac OS X Lion */
		::-webkit-scrollbar {
			background-color: rgba(0, 0, 0, 0.5);
			width: 0.75em;
		}

		::-webkit-scrollbar-thumb {
			background-color: rgba(255, 255, 255, 0.5);
		}
	</style>
</head>

<body>
	<?php require "views/Header/header.php"; ?>
	<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - -->
	<script type="text/javascript" src="<?php echo constant('URL'); ?>pano2vr_player.js">
	</script>
	<script type="text/javascript" src="<?php echo constant('URL'); ?>skin.js">
	</script>
	<script src="<?php echo constant('URL'); ?>webxr/three.min.js"></script>
	<script src="<?php echo constant('URL'); ?>webxr/webxr-polyfill.min.js"></script>
	<div id="container" style="width:100%;height:100%;overflow:hidden;">
		<br>Loading...<br><br>
	</div>
	<script type="text/javascript">
		// create the panorama player with the container
		pano = new pano2vrPlayer("container");
		// add the skin object
		skin = new pano2vrSkin(pano);
		// load the configuration

		window.addEventListener("load", function() {
			pano.readConfigUrlAsync("<?php echo constant('URL'); ?>pano.xml");
		});
	</script>
	<noscript>
		<p><b>Please enable Javascript!</b></p>
	</noscript>
	<!-- - - - - - - 8<- - - - - - cut here - - - - - 8<- - - - - - - -->
	<!-- Hack needed to hide the url bar on iOS 9, iPhone 5s -->
	<div style="width:1px;height:1px;"></div>
	<?php require "views/Footer/footer.php"; ?>
</body>

</html>