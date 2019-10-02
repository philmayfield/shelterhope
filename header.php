<header>
	<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name;}else{echo 'index.php';} ?>">
		<section class="logo shrink">
			<h2 class="light"><span class="visuallyhidden">Shelter Hope Pet Shop </span><?php if(!$genSite){echo $locdata->name;} ?></h2>
		</section>
	</a>

	<section class="social">
		<div class="content">
			<h3 class="light">Connect with Shelter Hope</h3>
			<ul>
			<li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D7P25UFWWV6LQ" target="_blank"><i class="fa fa-paypal fa-3x fa-fw"></i><span class="visuallyhidden">Make a donation to Shelter Hope Pet Shop</span></a></li><li>
				<a href="https://www.facebook.com/ShelterHopePetShop" target="_blank"><i class="fa fa-facebook-official fa-3x fa-fw"></i><span class="visuallyhidden">Shelter Hope Pet Shop Facebook</span></a></li><li>
				<a href="https://instagram.com/shelterhope_petshop/" target="_blank"><i class="fa fa-instagram fa-3x fa-fw"></i><span class="visuallyhidden">Shelter Hope Pet Shop Instagram</span></a></li><li>
				<a href="https://www.youtube.com/user/ShelterHopeProject/" target="_blank"><i class="fa fa-youtube fa-3x fa-fw"></i><span class="visuallyhidden">Shelter Hope Pet Shop YouTube</span></a></li>
			</ul>
		</div>
	</section>

	<nav>
		<ul class="content">
			<li<?php if(strpos($_SERVER['PHP_SELF'],'index') > 0){echo ' class="active"';}?>><a href="<?php if(!$genSite && $locdata){echo $locdata->web_name;}else{echo 'index.php';} ?>">Home</a></li><li<?php if(strpos($_SERVER['PHP_SELF'],'adoptions') > 0){echo ' class="active"';}?>>
			<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name.'/';} ?>adoptions.php">Adoption</a></li><li<?php if(strpos($_SERVER['PHP_SELF'],'donate') > 0){echo ' class="active"';}?>>
			<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name.'/';} ?>donate.php">Donate</a></li><li<?php if(strpos($_SERVER['PHP_SELF'],'help') > 0){echo ' class="active"';}?>>
			<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name.'/';} ?>help.php">Help</a></li><li<?php if(strpos($_SERVER['PHP_SELF'],'events') > 0){echo ' class="active"';}?>>
			<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name.'/';} ?>events.php">Events</a></li><li<?php if(strpos($_SERVER['PHP_SELF'],'locations') > 0){echo ' class="active"';}?>>
			<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name.'/';} ?>locations.php">Location</a></li><li<?php if(strpos($_SERVER['PHP_SELF'],'press') > 0){echo ' class="active"';}?>>
			<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name.'/';} ?>press.php">Press</a></li><li<?php if(strpos($_SERVER['PHP_SELF'],'about-us') > 0){echo ' class="active"';}?>>
			<a href="<?php if(!$genSite && $locdata){echo $locdata->web_name.'/';} ?>about-us.php">About Us</a></li>
		</ul>
	</nav>
</header>
