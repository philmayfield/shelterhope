<?php 
require_once('fe_top_requirements.php');
?>
        <title>Adoptions :: Shelter Hope Pet Shop</title>
        <meta name="description" content="Local pet adoption from humane volunteer ran rescue pet shop">
    </head>
    <body>
        
        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php');?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>Pets available for adoption</h1>
                <?php 
                    $get_cont = $conn->prepare('SELECT aapcode FROM main_content WHERE id = :loc LIMIT 1');
                    $get_cont->execute(array('loc' => $locdata->id));

                    $content = $get_cont->fetch(PDO::FETCH_OBJ);
                    if (strlen($content->aapcode) > 0) {
                        echo '<div id="aap" class="aap">';
                        echo htmlspecialchars_decode($content->aapcode, ENT_QUOTES);
                        echo '</div>';
                    } else {
                        ?>
                        <p>Each Shelter Pet Hope Shop has pets looking for their forever home.  Click <a href="locations.php">here</a> to choose the shop closest to you, then click back on adoptions.</p>
                        <p><a class="button sh-blue" href="locations.php">Click here to choose a shop</a></p>
                        <?php
                    }
                ?>
                <h2>Veterans and Seniors</h2>
                <p>Shelter Hope Pet Shop wants to give back to all our veterans and seniors, so every week we will sponsor the adoption of one dog! We'll provide the adoption fee, food, bed, collar, leash, and a free visit with our veterinarian!</p>
                <h2>Adoption Expenses</h2>
                <p>Adoption fees range, depending on the pet you select. We work with a wide range of rescues and shelters, and certain animals need more care than others before they can be adopted, such as puppies. Please contact us for more information.</p>
            </section>

            <section class="photo-bg <?php include('get_bg.php'); ?> quote clearfix">
                <h2 class="visuallyhidden">Famous Quote</h2>
                <div class="content">
                    <blockquote>&ldquo;I think dogs are the most amazing creature; they give unconditional love.  For me they are the role model for being alive.&rdquo;</blockquote>
                    <footer>Gilda Radner - Actress</footer>
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
