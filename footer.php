<footer class="clearfix col-xs-12">
	<section class="content">
		<div class="row">
			<section class="col-xs-12 col-md-7 col-lg-8">
				<h3 class="light align-center">Shelter Hope Pet Shop could not operate without your generous donations.<br>We graciously accept donations by:</h3>
				<ul class="donate clearfix">
					<li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D7P25UFWWV6LQ" target="_blank"><i class="fa fa-cc-paypal fa-4x"></i><br>Online</a></li><li>
					<a href="donate.php"><i class="fa fa-shopping-cart fa-4x"></i><br>While You Shop</a></li><li>
					<a href="tel:8053793538"><i class="fa fa-phone fa-4x"></i><br>By Phone</a></li>
				</ul>
				<p class="align-center byphil">This website was built with &hearts; by <a href="http://www.philmayfield.com" target="_blank"><span class="nowrap">Phil Mayfield</span></a></p>
			</section>
			<section class="col-xs-12 col-md-5 col-lg-4 address align-center<?php if (strlen($locdata->hours_Mon) > 0) {echo ' with-hours';} ?>">
				<h3 class="visuallyhidden">Contact Shelter Hope</h3>
				<div class="vcard">
					<div class="name bold">Shelter Hope Pet Shop</div>
					<div class="street-address"><?php echo $locdata->address ?></div>
					<span class="locality"><?php echo $locdata->city ?></span>,
					<abbr class="region" title="California"><?php echo $locdata->state ?></abbr>
				    <span class="postal-code"><?php echo $locdata->zip ?></span>
				</div>
				<div class="tel">
					<span class="type">Tel:</span> <?php echo $locdata->tel ?>
				</div>
				<div class="tel<?php if(strlen($locdata->fax) < 8){echo ' hidden';} ?>">
					<span class="type">Fax:</span> <?php echo $locdata->fax; ?>
				</div>
				<div class="row<?php if (strlen($locdata->hours_Mon) == 0) {echo ' hidden';} ?>">
                    <div class="col-xs-6 align-right">
                        <ul class="hours">
                            <li>Mon: <?php echo $locdata->hours_Mon; ?></li>
                            <li>Tue: <?php echo $locdata->hours_Tue; ?></li>
                            <li>Wed: <?php echo $locdata->hours_Wed; ?></li>
                            <li>Thu: <?php echo $locdata->hours_Thu; ?></li>
                        </ul>
                    </div>
                    <div class="col-xs-6 align-left">
                        <ul class="hours">
                            <li>Fri: <?php echo $locdata->hours_Fri; ?></li>
                            <li>Sat: <?php echo $locdata->hours_Sat; ?></li>
                            <li>Sun: <?php echo $locdata->hours_Sun; ?></li>
                        </ul>
                    </div>
                </div>
			</section>
		</div>
	</section>
</footer>
