<?php
get_header();
if(have_posts()):
    while(have_posts()):the_post();

        ?>
        <article class="page">
            <h2><?php the_title(); ?></h2>


        </article>


        <?php
    endwhile;
else:
    echo '<p>No content found</p>';

endif;

?>

    <div class="login-page">
        <div class="form">
            <form class="login-form">
                <input type="text" placeholder="username"/>
                <input type="password" placeholder="password"/>
                <button>login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>

<?php
get_footer();
?>