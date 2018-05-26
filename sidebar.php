<div class="nav child-pages">

    <?php
    global $post;
    wp_list_pages( array(
        'title_li' => null,
        'depth' => 1,
        'child_of' => $post->ID
    ) );
    ?>

</div>