<?php
require_once('fe_top_requirements.php');
?>
        <title>About Us :: Shelter Hope Pet Shop</title>
        <meta name="description" content="What can you tell me about the Shelter Hope Pet Shop?  Info about Shelter Hope and its founders">
    </head>
    <body>

        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php'); ?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>About Shelter Hope Pet Shop</h1>

                <div class="row clearfix">
                    <div class="col-xs-12 col-md-8">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="//www.youtube.com/embed/mVzBJDmJvwM?rel=0" allowfullscreen></iframe>
						</div>
                        <p>We are a non-profit volunteer-based pet shop that showcases shelter animals available for in-store adoption. We find homes for the many shelter and rescue animals in need, and sales of merchandise in our pet shops goes directly back to help save more animals.</p>
                        <p>Shelter Hope Pet Shop is a volunteer-run nonprofit. We rely on the community for assistance, donations and volunteers.</p>
                        <h2>Our Mission:</h2>
                        <p>Shelter Hope Pet Shop is a 501c non-profit, charitable, volunteer-based organization devoted to: aiding in and facilitating shelter and rescue pet adoptions; promoting education and awareness within the communities we serve; and making a positive impact in the lives of shelter and rescue animals and their adopters, as well as local shelters.</p>
                        <p>Shelter Hope Pet Shop is the premier source for adoptable dogs within the community.  We help save the lives of hundreds of dogs each year. By doing so, we will also have a positive impact with helping to decrease the number of potential unhealthy puppy mill puppies purchased from for-profit and inhumane businesses.</p>
                        <p>Shelter Hope Pet Shop is part of the Shelter Hope Project, which strives to make this the business model for all pet shops nationwide. We hope to abolish all puppy mill pet shops, help find homes for the countless pets in our shelters that face euthanasia, and educate the public on how we can all help reduce future shelter population.</p>
                        <!-- <h2>Public Relations</h2>
                        <p>For all matters you may contact Rachel Weil at <a href="http://www.weilpr.com/contactus.html" target="_blank">Weil Public Relations</a>.</p> -->
                    </div>
                    <aside class="col-xs-12 col-md-4">
                        <h2>Contact Us</h2>
                        <form id="contact-form" action="contact-form.php" class="contact" method="post">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="item" required>
                            <label for="tel">Phone</label>
                            <input type="tel" id="tel" name="tel" class="item">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="item">
                            <label for="subject">Subject</label>
                            <select name="subject" id="subject" class="item" required>
                                <option value=""></option>
                                <option value="inquiry">General Inquiry</option>
                                <option value="volunteer">Volunteer</option>
                                <option value="donation">Donation</option>
                                <option value="events">Events</option>
                                <option value="other">Other</option>
                            </select>
                            <label for="comments">What's on your mind?</label>
                            <textarea name="comments" id="comments" class="item" cols="30" rows="10" required></textarea>
                            <div class="controls">
                                <input type="submit" class="button sh-blue" value="Send">
                                <span id="contact-spinner" class="hidden"><i class="fa fa-2x fa-spinner fa-pulse"></i></span>
                                <span id="contact-msg" style="display:none;"></span>
                            </div>
                        </form>
                    </aside>
                </div>
            </section>

            <section class="about-employees">
                <div class="content col-xs-12">
                    <h2 class="sh-blue-txt">Who is Shelter Hope Pet Shop?</h2>

                    <?php
                    $get_emps = $conn->prepare('SELECT * FROM employees WHERE published = 1 AND (location = :loc OR location = 999) ORDER BY location DESC, sort ASC, name ASC');
                    $eid = $locdata->id;
                    $get_emps->execute(array('loc' => $locdata->id));

                    while($row = $get_emps->fetch(PDO::FETCH_OBJ)) {
                    ?>
                        <div id="<?php echo str_replace(' ', '', $row->name); ?>" class="employee row">
                            <div class="col-xs-12 col-sm-4 col-sm-offset-0 col-md-3 photo clearfix">
                                <figure class="col-xs-8 col-xs-offset-2 col-sm-12 col-sm-offset-0">
                                    <img alt="<?php echo $row->name; ?> - <?php echo $row->position; ?>" src="<?php echo str_replace('../', '', $row->img); ?>" class="responsive-img profile-img">
                                </figure>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <h3><?php echo $row->name; ?> - <i><?php echo $row->position; ?></i></h3>
                                <?php
                                    if($row->email){
                                        echo '<div class="email"><a href="mailto:'.$row->email.'">Send '.$row->name.' an email</a></div>';
                                    }
                                ?>
                                <p><?php echo $row->bio; ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


                </div>
            </section>

            <section class="photo-bg <?php include('get_bg.php'); ?> quote clearfix">
                <h2 class="visuallyhidden">Famous Dog Quote</h2>
                <div class="content">
                    <blockquote>&ldquo;A dog is the only thing on earth that loves you more than he loves himself.&rdquo;</blockquote>
                    <footer><span class="nowrap">Josh Billings</span> - Writer</footer>
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
