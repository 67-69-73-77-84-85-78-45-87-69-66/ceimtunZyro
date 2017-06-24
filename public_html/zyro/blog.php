<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.8" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.50" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1498015826" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1498015826" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance504" class="wb_element wb_element_picture"><a href="http://ceimtun.hol.es/"><img alt="gallery/ceimtun vinotintodegradado" src="gallery_gen//dbf16ded1e32c654f746fa743653a765_200x62.png"></a></div><div id="wb_element_instance505" class="wb_element wb_element_picture"><a href="http://ceimtun.hol.es/"><img alt="gallery/unrobot vinotinto" src="gallery_gen//37aeda3a5e6816231b92e7dca4524187_750x110.png"></a></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance516" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance516");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance516").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 610px;">
	
<div id="wb_element_instance506" class="wb_element wb_element_picture"><a href="https://www.facebook.com/RAS.UNAL/"><img alt="gallery/ras_hifi" src="gallery_gen//5113c9398cbeaaef6b61a2c33971bead_190x70.png"></a></div><div id="wb_element_instance507" class="wb_element wb_element_picture"><a href="https://www.ingenieria.bogota.unal.edu.co/dependencias/direccion-de-bienestar"><img alt="gallery/bienestar" src="gallery_gen//2454b191459e6efe872067a21901e499_390x220.png"></a></div><div id="wb_element_instance508" class="wb_element wb_element_picture"><a href="http://www.museodelosninos.org.co/"><img alt="gallery/museodelosninos" src="gallery_gen//fac920ba6637eec830f87655bde5a3f1_200x100.png"></a></div><div id="wb_element_instance509" class="wb_element wb_element_picture"><a href="http://www.atdsas.com/"><img alt="gallery/fischereducational" src="gallery_gen//810b72891a28294cdd112c6b0c56e955_490x70.png"></a></div><div id="wb_element_instance510" class="wb_element wb_element_picture"><a href="https://www.facebook.com/ieeeunbog/"><img alt="gallery/ieeeun" src="gallery_gen//2046f6826c820e950debf0fd36469e20_190x150.png"></a></div><div id="wb_element_instance511" class="wb_element wb_element_picture"><a href="http://www.edukabot.com/"><img alt="gallery/edukabot" src="gallery_gen//cb4fca4006b1f816c9b5dce4acc91b67_210x170.png"></a></div><div id="wb_element_instance512" class="wb_element wb_element_picture"><a href="http://tdrobotica.co/"><img alt="gallery/tdr" src="gallery_gen//4a26aabda484ad543a5b7af42cbb1ba0_210x60.png"></a></div><div id="wb_element_instance513" class="wb_element wb_element_picture"><a href="http://www.moviltronics.com.co/"><img alt="gallery/moviltronics" src="gallery_gen//2fb453f6b6043ce3eee666d4ff995aeb_430x130.png"></a></div><div id="wb_element_instance514" class="wb_element wb_element_picture"><a href="http://www.hica.com.co"><img alt="gallery/hicateclogo" src="gallery_gen//a1243e72e054c511ec5f4582af9ea706_210x110.jpg"></a></div><div id="wb_element_instance515" class="wb_element wb_element_picture"><a href="http://www.colsein.com.co/"><img alt="gallery/colsein" src="gallery_gen//84acac4a57076e9808948d52fe73dfae_230x110.jpg"></a></div><div id="wb_element_instance517" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(530);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
