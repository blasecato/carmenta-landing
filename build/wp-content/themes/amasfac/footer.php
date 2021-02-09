<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMASFAC
 */

?>

	<footer id="colophon" class="site-footer">
		<?php $urlTemplate = get_template_directory_uri()?>
		<div class="site-info footer">
			<div class="container">
				<div class="box-left">
					<ul class="list">
						<li>ABOUT</li>
						<li>TEAM</li>
						<li>CONTACT</li>
					</ul>
					<p>
						© 2021 Carmenta Labs
					</p>
				</div>
				<div class="networks">
					<img src="<?php echo "$urlTemplate/assets/images/face-white.PNG" ?>" alt="" srcset="">
					<img src="<?php echo "$urlTemplate/assets/images/instagram.PNG" ?>" alt="" srcset="">
					<img src="<?php echo "$urlTemplate/assets/images/int.PNG" ?>" alt="" srcset="">
				</div>
			</div>	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
