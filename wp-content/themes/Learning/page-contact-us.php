<?php
get_header();
if(have_posts()):
    while(have_posts()):the_post();

        ?>
        <article class="page">

            <?php the_content(); ?>
        </article>


        <?php
    endwhile;
else:
    echo '<p>No content found</p>';

endif;

get_footer();
?>