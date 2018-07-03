<?php 
require_once('fe_top_requirements.php');
?>
        <title>Press :: Shelter Hope Pet Shop</title>
        <meta name="description" content="Shelter Pet Hope Shop in the news and local press">
    </head>
    <body>
        
        <?php include_once('browsehappy.php'); ?>

        <?php include_once('header.php');?>

        <main class="clearfix col-xs-12">
            <section class="content main-content">
                <h1>Shelter Hope Pet Shop Press</h1>
                
                <p>Here you will find a collection of related news articles, television appearances and press releases about Shelter Hope</p>
                
                <?php 
                    $get_cont = $conn->prepare('SELECT * FROM press ORDER BY type DESC, date DESC');
                    $get_cont->execute();

                    $type = '';
                    $otype = '';
                    $it = 0;

                    while($content = $get_cont->fetch(PDO::FETCH_OBJ)){
                        if ($content->published == 0) {
                            continue;
                        }
                        $type = $content->type;
                        if($type != $otype){
                            if($it > 0){
                                echo '</ul>';
                            }
                            echo '<h2 class="sh-blue-txt">'.ucfirst($type).'s</h2>';
                            echo '<ul class="press">';
                        }
                        echo '<li>';
                        echo '<i class="fa fa-fw ';
                        switch ($content->type) {
                            case 'video':
                                echo 'fa-film';
                                break;
                            case 'article':
                                echo 'fa-newspaper-o';
                                break;
                            case 'release':
                                echo 'fa-bullhorn';
                                break;
                        }
                        echo '"></i> ';
                        echo '<a href="'.$content->link.'" target="_blank">';

                        $date = date_create($content->date);
                        echo $date->format('M d, Y').' - '.$content->title;

                        echo '</a></li>';
                        
                        $it++;
                        $otype = $type;
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
