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
				<div class="footer__box">
					<div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://yt2.org">convertidor online</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>	
					<p class="copy">Copyright © 2021 AMASFAC todos los derechos reservados.</p>
					<div class="card-float">
						<div class="text">
							<img alt="" src="<?php echo "$urlTemplate/assets/images/phone.png" ?>"srcset=""/>
							<h4>01 800 890 95 63</h4>
						</div>
						<div class="text text--more">
							<span>Ver más números</span>
							<img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-down.png" ?>"srcset=""/>
						</div>
						<div class="text">
							<img alt="" src="<?php echo "$urlTemplate/assets/images/ubication.png" ?>"srcset=""/>
							<h4>Florencia No.- 18 P.B. Col. JuárezC.P.06600; México, D.F.</h4>
						</div>
						<button class="button button--green">
							<img alt="" src="<?php echo "$urlTemplate/assets/images/email-white.png" ?>"srcset=""/>
							Envíar un correo electrónico
						</button>
					</div>
				</div>
				<div class="footer__box footer__box--right">
					<h2>
						Contribuimos a la Formación Profesional de Agentes de Seguros y Fianzas, promoviendo las mejores prácticas en el mercado.
					</h2>
					<button class="button button--white">
						Únete a AMASFAC
					</button>
					<div class="cont-list">
						<ul>
							<li>Acerca de AMASFAC</li>
							<li>Campus</li>
							<li>Blog</li>
							<li>Eventos</li>
							<li>Membresía</li>
						</ul>
						<div>
							<img alt="" src="<?php echo "$urlTemplate/assets/images/facebook-white.png" ?>"srcset=""/>
							<img alt="" src="<?php echo "$urlTemplate/assets/images/youtube-white.png" ?>"srcset=""/>
							<img alt="" src="<?php echo "$urlTemplate/assets/images/twiter-white.png" ?>"srcset=""/>
						</div>
					</div>
					<div class="footer__box--text">
						<p>Términos y condiciones</p>
						<p>Aviso de privacidad</p>
					</div>
				</div>

			</div>	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
