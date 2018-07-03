<?php 
require_once('fe_top_requirements.php');
?>
        <title>Volunteer :: Shelter Hope Pet Shop</title>
        <meta name="description" content="">
    </head>
    <body>
        
        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php'); ?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>Volunteer at Shelter Hope</h1>
                <div class="row clearfix">
                    <div class="col-xs-12 col-md-8">
                        <h2>How can I volunteer?</h2>
                        <p>Do you love animals? Do you want to help your community? Volunteer at Shelter Hope Pet Shop!</p>
                        <p>We run our store with volunteers... the more help we have, the more we can help!  If you enjoy being with dogs, and are willing to volunteer, please contact us!</p>
                        <p>We need to know your name, age, phone number, and days and times you can volunteer, and please tell us a little about yourself! What do you like to do? What skills do you have? How do you think you can best help Shelter Animals?  We can't wait to hear from you!</p>
                        <p>For more info about volunteering, <a href="about-us.php">contact us here!</a></p>
                        <h2>Foster a pet - Phillis's Fosters</h2>
                        <p>At Shelter Hope Pet Shop we are working to expand our foster care program.  Many people would like to save a dog's life but can't make a long-term commitment.  We have the perfect opportunity for those people - fostering!  By fostering, people get to love and care for a dog but also know that it is temporary.  We're looking for people who feel that fostering would be a great fit for their lifestyle.  Foster a dog, nurture and care for it until it's ready to come to The Shelter Hope Pet Shop!</p>
                        <p>Our foster program is named Phillis's Fosters, in honor of our dear friend Phillis Armstrong who passed away in June 2013.  Phillis dedicated her life to Shelter Hope and started the much needed foster program at the shop by herself.  It is fitting that we continue the program in her name.</p>
                        <p>For more info about fostering, <a href="about-us.php">contact us here!</a></p>
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
