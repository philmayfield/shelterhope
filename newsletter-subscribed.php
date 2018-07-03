<?php
require_once('fe_top_requirements.php');
?>
        <title>Thank you for subscribing to our newsletter :: Shelter Hope Pet Shop</title>
        <meta name="description" content="Thank you for subscribing to our newsletter">
    </head>
    <body>

        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php'); ?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1 class="align-center">Thank you for subscribing to our newsletter!</h1>
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
