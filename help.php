<?php 
require_once('fe_top_requirements.php');
?>
        <title>How you can help :: Shelter Hope Pet Shop</title>
        <meta name="description" content="Can I help your pet rescue?  How you can help Shelter Hope Pet Shop">
    </head>
    <body>
        
        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php'); ?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>How you can help at Shelter Hope</h1>
                <div class="row clearfix">
                    <div class="col-xs-12 col-md-8">
                        <h2>Donate</h2>
                        <p>The quickest and easiest way to help the Shelter Hope Pet Shop is by donating.  Your generous tax deductible donation will help us to find a home for neglected and and abandoned pets who would otherwise be put to death.</p>
                        <p><a href="donate.php">Click here</a> to go to our donation page.</p>
                        <h2>How can I volunteer?</h2>
                        <p>Do you love animals? Do you want to help your community? Volunteer at Shelter Hope Pet Shop!</p>
                        <p>We run our store with volunteers... the more help we have, the more we can help!  If you enjoy being with dogs, and are willing to volunteer, please contact us!</p>
                        <p>We need to know your name, age, phone number, and days and times you can volunteer, and please tell us a little about yourself! What do you like to do? What skills do you have? How do you think you can best help Shelter Animals?  We can't wait to hear from you!</p>
                        <p>For more info about volunteering, <a href="about-us.php">contact us here!</a></p>
                        <h2>Foster a pet - Phillis's Fosters</h2>
                        <p>At Shelter Hope Pet Shop we are working to expand our foster care program.  Many people would like to save a dog's life but can't make a long-term commitment.  We have the perfect opportunity for those people - fostering!  By fostering, people get to love and care for a dog but also know that it is temporary.  We're looking for people who feel that fostering would be a great fit for their lifestyle.  Foster a dog, nurture and care for it until it's ready to come to The Shelter Hope Pet Shop!</p>
                        <p>Our foster program is named Phillis's Fosters, in honor of our dear friend Phillis Armstrong who passed away in June 2013.  Phillis dedicated her life to Shelter Hope and started the much needed foster program at the shop by herself.  It is fitting that we continue the program in her name.</p>
                        <p>For more info about fostering, <a href="about-us.php">contact us here!</a></p>
                        <h2>Are you crafty?</h2>
                        <p>Our shops are always in need of bedding and toys for our pets.  Below are some simple items you can easily make at home and donate to your local Shelter Hope Pet Shop.</p>
                        <ul class="img-list">
                            <li><a href="http://www.frugal-freebies.com/2012/09/frugal-pet-tip-no-sew-pet-bed.html" target="_blank"><img class="sh-blue-shadow" src="img/craft-bed.jpg" alt="Washable fleece dog bed">Washable fleece pet beds for our adoptable dogs &amp; puppies</a></li><li>
                            <a href="http://makingithomeblog.com/tutorial-fleece-tug-toy-dogs/" target="_blank"><img class="sh-blue-shadow" src="img/craft-fleecetugtoy.jpg" alt="Washable fleece tug toy for dogs">Washable fleece tug toys for our adoptable dogs &amp; puppies</a></li><li>
                            <a href="http://www.adventuresofadiymom.com/2012/12/no-sew-fleece-blanket.html" target="_blank"><img class="sh-blue-shadow" src="img/craft-noknot.jpg" alt="Washable fleece blanket">Washable fleece blankets for our adoptable dogs &amp; puppies (no knots)</a></li><li>
                            <a href="http://piecesofmepapercrafts.blogspot.com/2010/10/no-sew-blanket-tutorial.html" target="_blank"><img class="sh-blue-shadow" src="img/craft-knotted.jpg" alt="Washable fleece blanket">Washable fleece blankets for our adoptable dogs &amp; puppies (knotted)</a></li>
                        </ul>
                    </div>
                    <aside class="col-xs-12 col-md-4">
                        <figure>
                            <img src="img/volunteer1.jpg" class="responsive-img sh-blue-shadow" alt="Volunteer at Shelter Hope with Dogs">
                            <figcaption>Shelter Hope Pet Shop is a volunteer-run nonprofit.</figcaption>
                        </figure>
                        <figure>
                            <img src="img/volunteer2.jpg" class="responsive-img sh-blue-shadow" alt="Phillis Armstrong">
                            <figcaption>Phillis Armstrong - Watch her video <a href="https://www.youtube.com/watch?v=hAkenkdN7qc" target="_blank">here</a>.</figcaption>
                        </figure>
                    </aside>
                </div>
            </section>

            <section class="photo-bg <?php include('get_bg.php'); ?> quote clearfix">
                <h2 class="visuallyhidden">Famous Dog Quote</h2>
                <div class="content">
                    <blockquote>&ldquo;Dogs are not our whole life, but they make our lives whole.&rdquo;</blockquote>
                    <footer>Roger Caras - Wildlife Preservationist</footer>
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
