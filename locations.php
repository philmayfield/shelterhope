<?php
require_once('fe_top_requirements.php');

$get_locs = $conn->prepare('SELECT * FROM locations ORDER BY name ASC');
$get_locs->execute();

$mapsApiKey = "AIzaSyCL_ydsjO3sthk6lNU2errdRe_erGpNttg";
?>
        <title>Our Location :: Shelter Hope Pet Shop</title>
        <meta name="description" content="Are you looking for a humane pet rescue in your area?  Shelter Hope Pet Shop locations.">
    </head>
    <body>

        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php'); ?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>Shelter Pet Hope Shop Location</h1>

                <?php
                while($location = $get_locs->fetch(PDO::FETCH_OBJ)){
                    if($location->id == 999 || $location->published == 0){
                        continue;
                    }
                    $as = str_replace('#', '', $location->address).', '.$location->city.', '.$location->state.' '.$location->zip;
                ?>
                    <div class="row clearfix location">
                        <div class="col-xs-12 col-md-7">
                            <div class="vcard">
                                <div class="name bold">
                                    Shelter Hope Pet Shop <?php echo $location->name;?>
                                </div>
                                <!-- <div class="website">
                                    <a href="<?php echo $location->web_name;?>">shelterhopepetshop.org/<?php echo $location->web_name;?></a>
                                </div> -->
                                <div class="street-address">
                                    <?php echo $location->address;?>
                                </div>
                                <span class="locality"><?php echo $location->city;?></span>, <abbr class="region" title="<?php echo $location->state; ?>"><?php echo $location->state;?></abbr> <span class="postal-code"><?php echo $location->zip;?></span>
                            </div>
                            <div class="tel">
                                <span class="type">Tel:</span> <a href="tel:<?php echo str_replace(array('(', ')', '-', ' '), '', $location->tel);?>"><?php echo $location->tel;?></a>
                            </div>
                            <?php if($location->hours_Mon){ ?>
                            <div class="row">
                                <div class="col-xs-6">
                                    <ul class="hours">
                                        <li>Mon: <?php echo $location->hours_Mon; ?></li>
                                        <li>Tue: <?php echo $location->hours_Tue; ?></li>
                                        <li>Wed: <?php echo $location->hours_Wed; ?></li>
                                        <li>Thu: <?php echo $location->hours_Thu; ?></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                    <ul class="hours">
                                        <li>Fri: <?php echo $location->hours_Fri; ?></li>
                                        <li>Sat: <?php echo $location->hours_Sat; ?></li>
                                        <li>Sun: <?php echo $location->hours_Sun; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-xs-12 col-md-5 align-center">
                            <a href="https://maps.google.com?saddr=Current+Location&daddr=<?php echo urlencode($as); ?>" target="_blank" title="Click map for directions to Shelter Hope <?php echo $location->name;?> using Google Maps"><img class="responsive-img sh-blue-shadow" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo urlencode($as); ?>&zoom=14&size=400x200&markers=color:0x9F3ED5%7Clabel:S%7C<?php echo urlencode($as); ?>&key=<?php echo urlencode($mapsApiKey) ?>" alt="Shelter Hope Pet Shop <?php echo $location->name;?>"></a>
                            <!-- <iframe class="sh-blue-shadow" width="100%" height="200" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAalnkqQ-0Dcyf7MI-hqgnthVi_1MBZqD8&q=<?php echo urlencode($as);?>"></iframe> -->
                        </div>
                    </div>
                <?php
                    }
                ?>

            </section>

            <section class="photo-bg <?php include('get_bg.php'); ?> quote clearfix">
                <h2 class="visuallyhidden">Famous Dog Quote</h2>
                <div class="content">
                    <blockquote>&ldquo;Dogs are not our whole life, but they make our lives whole.&rdquo;</blockquote>
                    <footer><span class="nowrap">Roger Caras</span> <span class="nowrap">- Wildlife Preservationist</span></footer>
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
