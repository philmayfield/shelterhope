<?php
require_once('fe_top_requirements.php');
?>
        <title>Home Page :: Shelter Hope Pet Shop</title>
        <meta name="description" content="Shelter Hope Pet Shop - Volunteer ran humane pet adoption">
    </head>
    <body>

        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php'); ?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>Dedicated to connecting pets and people!</h1>
                <div class="row clearfix">
                    <div class="col-xs-12 col-lg-8">
                        <p>Shelter Hope Pet Shop was created to aid shelter pet adoptions, promote education and bring awareness to the communities we serve. We are the first and only volunteer humane pet shop partnering with companies, such as NewMark Merrill, who donate store front space in busy shopping locations in order to assist us with community outreach and shelter pet adoptions. Shelter Hope Pet Shop is a unique, large scale business model, which aims to eliminate puppy mill pet shops in our malls across the nation.</p>
                        <p>Shelter Hope Pet Shop provides a fun, friendly place where visitors and volunteers can meet and interact with animals needing adoption. You can also visit Shelter Hope Pet Shop for pet merchandise and know your dollars are going directly back to help save the lives of homeless pets.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <p class="impact-stmt sh-blue-txt"><strong>We are a non-profit volunteer-based pet shop that showcases shelter animals available for in-store adoption.</strong></p>
                    </div>
                    <div class="col-xs-6 col-md-4 chopstick">
                        <figure>
                            <img src="img/chopstick.jpg" alt="White dog named Chopstick" class="responsive-img">
                        </figure>
                    </div>
                </div>
                <div>
                    <h2>Finding love can be easier than you ever thought it was...</h2>
                    <div class="row clearfix">
                        <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/CfSjbSoq2xI?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-xs-12">
                        <?php
                            $get_cont = $conn->prepare('SELECT content FROM main_content WHERE id = :loc LIMIT 1');
                            $get_cont->execute(array('loc' => $locdata->id));

                            $content = $get_cont->fetch(PDO::FETCH_OBJ);
                            echo htmlspecialchars_decode($content->content);
                        ?>
                    </div>
                </div>
                <div>
                    <h2>We are now on AmazonSmile!</h2>
                    <div class="clearfix">
                        <p>AmazonSmile is an easy way for you to donate simply by shopping for all the things you already purchase on Amazon!   Click the link below to set Shelter Hope as your charity of choice.  Thats it!  Amazon will donate for every dollar spent on things you already buy!</p>
                        <p class="align-center">
                            <a href="https://smile.amazon.com/ch/46-2376346" target="_blank"><img src="img/amazon-smile.png" alt="AmazonSmile You Shop, Amazon Donates." class="responsive-img amazon-smile"></a>
                        </p>
                    </div>
                </div>
            </section>

            <?php

            include_once('employees.php');

            ?>

            <section class="photo-bg <?php include('get_bg.php'); ?> quote clearfix">
                <h2 class="visuallyhidden">Famous Dog Quote</h2>
                <div class="content">
                    <blockquote>&ldquo;A dog will teach you unconditional love. If you can have that in your life, things won't be too bad.&rdquo;</blockquote>
                    <footer>Robert Wagner - Actor</footer>
                </div>
            </section>

            <?php

            include_once('instagram_feed.php');
            include_once('twitter_feed.php');
            include_once('newsletter.php');

            ?>

        </main>

        <?php include_once('footer.php'); ?>

        <?php include_once('scripts.php'); ?>

    </body>
</html>