$(document).ready(function(){
	$('nav ul').droptab({
		breakWidth : 768,
		targetWidth : $('body'),
		openMsg : 'Menu'
	});

	if($('#aap').length){
		var aapTimer = setTimeout(function(){
			var theSpan = $('#aap').find('span');
			if(theSpan.length){
				clearTimeout(aapTimer)
				var html = theSpan.html();
				theSpan.html(html.replace('<br>', ' '));
			}
		},1000)
	}

	// Twitter Feed
	if($('#twfeed').length){
		var displaylimit = 3,
			twitterprofile = "shelterhopepets",
			screenname = "Shelter Hope PetShop",
			showdirecttweets = false,
			showretweets = true,
			showtweetlinks = true,
			showprofilepic = false,
			loadingHTML = '';

	    loadingHTML += '<div id="loading-container"><img src="images/fancybox_loading.gif" width="32" height="32" alt="tweet loader" /></div>';

	    $('#twitter-feed').html(loadingHTML);

	    $.getJSON('get-tweets.php',
	        function(feeds) {
	            //alert(feeds);
	            var feedHTML = '',
	            	displayCounter = 1;

	            for (var i=0; i<feeds.length; i++) {
	                var tweetscreenname = feeds[i].user.name,
	                	tweetusername = feeds[i].user.screen_name,
	                	profileimage = feeds[i].user.profile_image_url_https.replace('normal', 'bigger'),
	                	status = feeds[i].text,
	                	isaretweet = false,
	                	isdirect = false,
	                	tweetid = feeds[i].id_str;

	                //If the tweet has been retweeted, get the profile pic of the tweeter
	                if(typeof feeds[i].retweeted_status != 'undefined'){
						profileimage = feeds[i].retweeted_status.user.profile_image_url_https.replace('normal', 'bigger');
						tweetscreenname = feeds[i].retweeted_status.user.name;
						tweetusername = feeds[i].retweeted_status.user.screen_name;
						tweetid = feeds[i].retweeted_status.id_str
						isaretweet = true;
					};

	                //Check to see if the tweet is a direct message
	                if (feeds[i].text.substr(0,1) == "@") {
	                    isdirect = true;
	                }

	                //console.log(feeds[i]);

	                if (((showretweets == true) || ((isaretweet == false) && (showretweets == false))) && ((showdirecttweets == true) || ((showdirecttweets == false) && (isdirect == false)))) {
	                    if ((feeds[i].text.length > 1) && (displayCounter <= displaylimit)) {
	                        if (showtweetlinks == true) {
	                            status = addlinks(status);
	                        }

	                        feedHTML += '<div class="twt col-xs-12 col-md-4">';
	                        feedHTML += '<div class="row no-margin">';
	                        feedHTML += '<div class="col-xs-3 padding-0 tw-img">';
	                        feedHTML += '<img src="'+profileimage+'"images/twitter-feed-icon.png" class="responsive-img-full" alt="'+tweetusername+'" />';
	                        feedHTML += '</div>';
	                        feedHTML += '<div class="col-xs-9 tw-body">';
	                        feedHTML += '<span class="at"><a href="https://twitter.com/'+tweetusername+'">@'+tweetusername+'</a></span> <span class="time">'+relative_time(feeds[i].created_at)+'</span>';
	                        feedHTML += '<p>'+status+'</p>';
	                        feedHTML += '</div>';
	                        feedHTML += '</div>';
	                        feedHTML += '</div>';
	                    }
	                }
	            }
	    	$('#twfeed > .row').html(feedHTML);
	    	}
	    );
	}

	// Instagram Feed
	if($("#instfeed").length){
		var feed = $("#instfeed");
		if(sesStorage()){
			if(sessionStorage.getItem("instContent") === null || sessionStorage.getItem("instContent").length < 1000){
				populateInstagram(feed);
				setTimeout(function(){
					sessionStorage.setItem("instContent", $("#instfeed").html());
				},1000);
			} else {
				 $("#instfeed").empty().html(sessionStorage.getItem("instContent"));
			}
		} else {
			populateInstagram(feed);
		}
	}

	// Contact Form
	if($('#contact-form').length){
		var stop = false;

		$('#contact-form').on('submit', function(e){
			e.preventDefault();

			$('[required]').each(function(){
				if($(this).val() == ''){
					stop = true;
				};
			});

			if(!stop){
				$('#contact-form').find('.button').addClass('hidden');
				$('#contact-spinner').removeClass('hidden');
				$.ajax({
					type: 'POST',
					url: 'contact-form.php',
					data: $('#contact-form .item').serializeArray(),
					success: function(info){
						$('#contact-form')[0].reset();
						$('#contact-msg').addClass('green').html(info);
					},
					error: function(){
						$('#contact-msg').addClass('red').html("Uh oh, we ran into a problem sending your message.  Please try again later, or give us a call.");
					},
					complete: function(){
						$('#contact-spinner').fadeOut('fast', function(){
							$('#contact-msg').fadeIn('fast');
						});
					}
				});
			}
		});
	}

	// Newsletter Form
	if($('#newsletter-form').length){
		$('#newsletter-form').on('submit', function(e){
			$('#newsletter-button').addClass('hidden');
			$('#newsletter-spinner').removeClass('hidden');
		});
	}

});

//Function modified from Stack Overflow
function addlinks(data) {
    //Add link to all http:// links within tweets
    data = data.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,;'">\:\s\<\>\)\]\!])/g, function(url) {
        return '<a href="'+url+'" >'+url+'</a>';
    });

	//Add link to @usernames used within tweets
	data = data.replace(/\B@([_a-z0-9]+)/ig, function(reply) {
		return '<a href="http://twitter.com/'+reply.substring(1)+'" style="font-weight:lighter;" >'+reply.charAt(0)+reply.substring(1)+'</a>';
	});
    return data;
}

function relative_time(time_value) {
	var values = time_value.split(" "),
		time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3],
		parsed_date = Date.parse(time_value),
		relative_to = (arguments.length > 1) ? arguments[1] : new Date(),
		delta = parseInt((relative_to.getTime() - parsed_date) / 1000),
		shortdate = time_value.substr(4,2) + " " + time_value.substr(0,3);

	delta = delta + (relative_to.getTimezoneOffset() * 60);

	if (delta < 60) {
		return '1m';
	} else if(delta < 120) {
		return '1m';
	} else if(delta < (60*60)) {
		return (parseInt(delta / 60)).toString() + 'm';
	} else if(delta < (120*60)) {
		return '1h';
	} else if(delta < (24*60*60)) {
		return (parseInt(delta / 3600)).toString() + 'h';
	} else if(delta < (48*60*60)) {
	//return '1 day';
		return shortdate;
	} else {
		return shortdate;
	}
}

function populateInstagram(feed) {
	feed.find('.feed').instagram({
		userId: '327816113',
		accessToken: '327816113.1677ed0.572bac214e3c418a97c6773e591567aa',
		image_size: 'thumbnail',
		show: 12
	}).find('.spinner').addClass('hidden');
}

function sesStorage() {
	try {
		return 'sessionStorage' in window && window['sessionStorage'] !== null;
	} catch (e) {
		return false;
	}
}
