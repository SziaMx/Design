<?php
    include ('php/Includes/Header.php');
?>

<div class="band Banner">
	<div class="container-fluid">
		<div class="col-md-12">
             <div class="flexslider">
				<ul class="slides">
	            	<li>
	            		<img src="img/Banners/Banner3.jpg" alt="Primer Banner" >
					</li>
					<li>
	            		<img src="img/Banners/Banner2.jpg" alt="Contrata nuestros servicios desde $16.000." >
					</li>
				</ul><!-- end sliders -->
			</div><!-- end flexslider -->
		</div><!-- end sixteen slider -->
	</div><!-- end container -->
</div><!-- end slider -->

<div class="band News">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="white"><span>Noticias, Tips & Tradiciones</span></h1>
			</div>
			<div class="col-md-12 Content">
				<div class="col-md-8 Picture" >

				</div>
				<div class="col-md-4 Description">
					<h2>El velo de la novia</h2>
					<p class="hidden">Las novias llevan velo como parte de su atuendo de boda, principalmente para demostrar pureza.</p>
                    <hr>
                    <!-- Load Facebook SDK for JavaScript -->
                	<div id="fb-root"></div>
                	<script>(function(d, s, id) {
                	  var js, fjs = d.getElementsByTagName(s)[0];
                	  if (d.getElementById(id)) return;
                	  js = d.createElement(s); js.id = id;
                	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
                	  fjs.parentNode.insertBefore(js, fjs);
                	}(document, 'script', 'facebook-jssdk'));</script>

                	<!-- Your share button code -->
                	<div class="fb-share-button"
                		data-href="http://www.wedding.ganesha.com.mx/"
                		data-layout="button_count">
                	</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
    include ('php/Includes/Weddings.php');
?>

<div class="band alianza">
	<div class="container-fluid">
		<div class="row">
			<div class="twelve columns" style="text-align: center;">
				<a href="http://www.zankyou.com.mx/f/ganesha-wedding-64780"><img src="http://asset1.zankyou.com/img/sections/badgets/zk_recommend/circle/badge_green_mx.png" width="100" alt=""/></a>
			</div>
		</div>
	</div>
</div>

<?php
    include ('php/Includes/Footer.php');
?>


