<section class="newsletter clearfix">
	<div class="content">
		<h2 class="align-center"><i class="fa fa-envelope fa-2x fa-fw"></i><span class="visuallyhidden">Newsletter</span></h2>
		<h3 class="align-center">Subscribe to our newsletter!</h3>
		<form id="newsletter-form" method="post" action="http://oi.vresp.com?fid=a8d450ec72" >
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0 col-lg-5 col-lg-offset-1 margin-bottom-15">
					<label for="email">Email</label>
					<input id="email" name="email_address">

					<label for="first-name">First Name</label>
					<input id="first-name" name="first_name">

					<label for="last-name">Last Name</label>
					<input id="last-name" name="last_name">
				</div>
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0 col-lg-5 margin-bottom-15">
					<div id="captchaPreview" class="field">
						<label for="captcha" id="captcha_text">Enter the letters shown below</label>
						<input id="captcha" name="captcha_guess"/>
						<input type=hidden id="vrCaptchaHash" name="captcha_hash" value="">
					</div>

					<div class="align-right">
						<img class="captcha" id="vrCaptchaImage" src="https://img.verticalresponse.com/blank.gif" height="35" width="125" />
					</div>

					<div class="controls align-right">
						<input id="newsletter-button" class="button sh-blue" type="submit" value="Subscribe">
						<span id="newsletter-spinner" class="hidden"><i class="fa fa-2x fa-spinner fa-pulse"></i></span>
					</div>

					<script>
					hex_chars=Array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');hash='';hash_length=20;for(h=0;h<hash_length;h++)
					{hash=hash+hex_chars[Math.floor(16*Math.random())];}document.getElementById('vrCaptchaHash').value=hash;captcha_image_url='https://captcha.vresp.com/produce/'+hash;document.getElementById('vrCaptchaImage').src=captcha_image_url;
					</script>
				</div>
			</div>
		</form>
	</div>
</section>
