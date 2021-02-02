<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMASFAC
 */

get_header();
?>

    <div class="Home__banner">
        <div class="columns container">
            <div class="column">
            <?php the_custom_logo()?>
            </div>
            <div class="column">
                <button>asdasd</button>
            </div>
        </div>
    </div>
	<main id="primary" class="site-main">

	</main><!-- #main -->

<?php
get_footer();
