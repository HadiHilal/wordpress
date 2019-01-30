<?php

if (comments_open()) {
    ?>
     <h3 class="comment-count"> <?php comments_number('0 comments' , '1 comment' , '%comments') ?></h3>

     <?php
    echo '<ul class="list-unstyled">';

    $comment_argument = array(
        'max_depth'   => 3 ,
        'type'        => 'comment',
        'avater_size' => 50
    );
    wp_list_comments($comment_argument);

    comment_form();

    echo '</ul>' ;
}else{
    echo 'sorry the comment are disable';
}
