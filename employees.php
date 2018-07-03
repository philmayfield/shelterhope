<?php if ($locdata->id != 999) { ?>
<section class="sh-blue employees align-center">
    <div class="content">
        <h2 class="visuallyhidden">Who is Shelter Hope?</h2>
        <div class="row">
            <?php

            $get_emps = $conn->prepare('SELECT name,position,img FROM employees WHERE published = 1 AND location = :loc');
            $eid = $locdata->id;
            $get_emps->execute(array('loc' => $locdata->id));

            while($row = $get_emps->fetch(PDO::FETCH_OBJ)) {
                echo '<div class="employee col-xs-6 col-sm-4 col-md-3">';
                echo '<a href="';
                if($locdata->web_name != 'default'){
                        echo $locdata->web_name.'/';
                }
                echo 'about-us.php#'.str_replace(' ', '', $row->name).'">';
                echo '<figure>';
                echo '<img class="responsive-img profile-img" src="';
                if($row->img){
                    echo str_replace('../', '', $row->img);
                } else {
                    echo '/shelterhope/img/user_blank.png';
                }
                echo '" alt="'.$row->name.'">';
                echo '<figcaption><b>'.$row->name.'</b> <i>'.$row->position.'</i></figcaption>';
                echo '</figure>';
                echo '</a>';
                echo '</div>';
            }

            ?>
        </div>
    </div>
</section>
<?php } ?>