<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMASFAC
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>

	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Raleway:ital,wght@0,100;0,200;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
<div id="page" class="site">
		<?php $urlTemplate = get_template_directory_uri()?> 
		<header class="Header">
			<nav class="columns is-mobile Header__topBar is-gapless">
				<div class="column">
					<ul>
						<li>
							<img src="<?php echo "$urlTemplate/assets/images/fb.svg" ?>" alt="" srcset="">
						</li>
						<li>
							<img src="<?php echo "$urlTemplate/assets/images/yt.svg" ?>" alt="" srcset="">
						</li>
						<li>
							<img src="<?php echo "$urlTemplate/assets/images/tw.svg" ?>" alt="" srcset="">
						</li>
					</ul>
				</div>
				<div class="column">
					<?php wp_nav_menu(['theme_location' => 'menu-1', 'menu_id' => 'primary-menu']); ?>
				</div>
			</nav>
		</header>
