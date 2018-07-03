<?php
require_once('fe_top_requirements.php');
?>
        <title>Events :: Shelter Hope Pet Shop</title>
        <meta name="description" content="Are there any events coming up from Shelter Hope Pet Shop?  Check here to see if there are any events in your area.">
    </head>
    <body>

        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php');?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>Upcoming Events</h1>

                <?php
                    if($locdata->id == 999){
                        $get_cont = $conn->prepare('SELECT * FROM events WHERE date >= CURDATE()-1 AND published = 1 ORDER BY location ASC, date ASC');
                        $get_cont->execute();
                    } else {
                        $get_cont = $conn->prepare('SELECT * FROM events WHERE date >= CURDATE()-1 AND published = 1 AND location = '.$locdata->id.' ORDER BY date ASC');
                        $get_cont->execute();
                    }

                    $evcount = $get_cont->rowCount();

                    if ($evcount > 0) {
                        $location = '';
                        $olocation = '';
                        $it = 0;

                        while($content = $get_cont->fetch(PDO::FETCH_OBJ)){
                            $location = $content->location;
                            if($location != $olocation){
                                if($it > 0){
                                    echo '</ul>';
                                }
								if ($location == 999) {
									echo '<h2 class="sh-blue-txt">All Events</h2>';
								} else {
									$get_evloc = $conn->prepare('SELECT name FROM locations WHERE id = '.$location.' LIMIT 1');
									$get_evloc->execute();
									$evloc = $get_evloc->fetch(PDO::FETCH_OBJ);
									echo '<h2 class="sh-blue-txt">'.$evloc->name.' Events</h2>';
								}
                                echo '<ul class="events">';
                            }
                            echo '<li>';

                            $date = date_create($content->date);
                            echo '<h3><i class="fa fa-fw fa-calendar"></i> '.$date->format('M d, Y').' - '.$content->name.'</h3>';
                            echo htmlspecialchars_decode($content->details);

                            echo '</li>';
                            $olocation = $location;
                            $it++;
                        }
                    } else {
                        $location = $locdata->id == 999 ? '' : $locdata->name;
                        echo '<p>Shelter Hope '.$location.' has no events schedued at this time. But check back soon!</p>';
                    }
                ?>
            </section>

            <section class="photo-bg <?php include('get_bg.php'); ?> quote clearfix">
                <h2 class="visuallyhidden">Famous Quote</h2>
                <div class="content">
                    <blockquote>&ldquo;The dog is a gentleman; I hope to go to his heaven not man's&rdquo;</blockquote>
                    <footer>Mark Twain - Author</footer>
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
