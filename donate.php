<?php 
require_once('fe_top_requirements.php');
?>
        <title>Home Page :: Shelter Hope Pet Shop</title>
        <meta name="description" content="">
    </head>
    <body>
        
        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php'); ?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>How can I donate to Shelter Hope Pet Shop?</h1>
                
                <h2 class="sh-blue-txt"><i class="fa fa-paw"></i> Donate directly to Shelter Hope</h2>
                <p>We graciously accept donations of any amount to Shelter Hope securely via PayPal.</p>
                <p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D7P25UFWWV6LQ" target="_blank">Click here to donate via PayPal</a></p>

                <h2 class="sh-blue-txt"><i class="fa fa-paw"></i> Amazon Wish List</h2>
                <p>We are always in need of supplies at Shelter Hope Pet Shop, for both our 4 legged, and 2 legged friends.  You can help by purchasing items we need on a daily basis to run the pet shop.</p>
                <p><a href="https://www.amazon.com/registry/wishlist/1XFWCTFF0JFLZ/ref=cm_pdp_wish_all_itms">Click here for our Amazon Wish List</a></p>

                <h2 class="sh-blue-txt"><i class="fa fa-paw"></i> Shop Online and Give Back</h2>
                <p>Help Shelter Hope Pet Shop every time you shop online for items you would be purchasing anyways.  It's easy to register and doesn't cost you a thing!  Sign up at iGive.com and Shelter Hope receives a portion of the proceeds of every purchase.  Shop at online stores, such as Amazon, Expedia, Lowes, PetCo, BestBuy, Orbitz and more...</p>
                <p><a href="http://www.igive.com/welcome/lp7/wr22.cfm?c=64452">Click here to sign up at iGive.com</a></p>

                <h2 class="sh-blue-txt"><i class="fa fa-paw"></i> Ralphs Gives Back</h2>
                <p>Shelter Hope is now a member of the Ralph's community contribution program!  Donating to Shelter Hope is as easy as shopping and swiping your Ralph's reward card.  Link your Ralph's rewards car to The Shelter Hope Pet Shop today!</p>
                <p><a href="https://www.ralphs.com/topic/community-contribution-2">Click here for information and to sign up</a></p>
                
                <p>If you need a Ralph's Reward card, they are available at any Ralph's customer service desk.</p>

                <h3>Once you get your card, you need to sign up online</h3>
                <ol>
                    <li>Log in to <a href="https://www.ralphs.com/" target="_blank">www.ralphs.com</a></li>
                    <li>Click on &ldquo;Create an Account&rdquo;</li>
                    <li>Follow the 5 easy steps to create an online account</li>
                    <li>You will be instructed to go to your email inbox to confirm your account</li>
                    <li>After your confirm your online account by clicking on the link in your email, return to www.ralphs.com and click on &ldquo;My Account&rdquo; (you may have to sign in again).</li>
                    <li>View all your information and edit as necessary.</li>
                    <li>Link your Ralph's Reward Card to Shelter Hope Pet Shop by clicking on: &ldquo;Community Rewards&rdquo;</li>
                    <li>&ldquo;Edit my Community Contribution&rdquo; and follow the instructions</li>
                    <li>Remember to click on the circle to the left of Shelter Hope Pet Shop</li>
                </ol>

                <h3>Already have a Ralph's account?</h3>
                <p>If you've alrady got a Ralph's Reward card and signed up for an account (this means you've entered your email address and assigned yourself a password), here is how to link your card to Shelter Hope Pet Shop</p>
                <ol>
                    <li>Log in to www.ralphs.com</li>
                    <li>Click &ldquo;Sign In&rdquo;</li>
                    <li>Enter your email address and password</li>
                    <li>Click on &ldquo;My Account&rdquo; (in the top right-hand corner)</li>
                    <li>View all your info and edit as necessary</li>
                    <li>Link your rewards card to Shelter Hope Pet Shop by clicking on: &ldquo;Community Rewards&rdquo;</li>
                    <li>&ldquo;Edit my Community Contribution&rdquo; and follow the instructions</li>
                    <li>Remember to click on the circle to the left of Shelter Hope Pet Shop</li>
                </ol>
                
                <p>If you use your phone number at the register and don't know your actual Ralph's card number, simply call 800-660-9003 to get your Rewards Card number!</p>

                <p>If you don't have a computer, please ask us for a copy of the Ralph's &ldquo;Scanbar Letter&rdquo;. You can present this to the cashier when you're checking out.

                <p><strong>THANK YOU FOR TAKING THE TIME TO ENROLL IN THIS VALUABLE COMMUNITY PROGRAM AT RALPH'S!!!</strong></p>
                
            </section>

            <?php 

            include_once('employees.php'); 

            ?>

            <section class="photo-bg <?php include('get_bg.php'); ?> quote clearfix">
                <h2 class="visuallyhidden">Famous Dog Quote</h2>
                <div class="content">
                    <blockquote>&ldquo;Not Carnegie, Vanderbilt, and Astor together could have raised money enough to buy a quarter share in my little dog.&rdquo;</blockquote>
                    <footer>Ernest Thompson Seton - Author</footer>
                </div>
            </section>

            <?php 

            include_once('instagram_feed.php'); 
            include_once('twitter_feed.php'); 

            ?>
            
        </main>

        <?php include_once('footer.php'); ?>

        <?php include_once('scripts.php'); ?>
        
    </body>
</html>
