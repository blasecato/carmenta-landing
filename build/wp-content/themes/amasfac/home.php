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
    <?php $urlTemplate = get_template_directory_uri()?>
        <div class="columns container">
            <div class="column">
            <?php the_custom_logo()?>
            </div>
            <div class="Home__banner--header">
                <div class="Home__banner--header__box">
					<img alt="" src="<?php echo "$urlTemplate/assets/images/logo.png" ?>"srcset="" class="logo"/>
                </div>
				<button class="login">
					Ingresa a AMASFAC
				</button>
            </div>
            <div class="Home__banner--content">
                <div class="box-left">
                    <h1>Creamos valor</h1>
                    <p>Id quam molestie auctor pharetra. Eu, risus penatibus convallis elit id tempor netus at arcu. In enim vitae sed tellus turpis vitae senectus aliquam. Gravida id maecenas vestibulum vel a est lorem ut non. Condimentum platea egestas lacinia nibh mattis nec gravida quam. </p>
                    <a class="more-button" href="./">
                        <span>Más sobre nosotros</span>
					    <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                    </a>
                    <button class="login-green">Únete a AMASFAC</button>
                </div>
                <div class="box-right">
                </div>
            </div>
        </div>
    </div>
    <div class="Home__campus">
        <div class="container__campus">
            <div class="Home__campus--box-left">
                <h2 class="title">
                    Campus
                </h2>
                <p>Eget sed tortor, mauris facilisi nulla amet. Ullamcorper semper est urna dio. Cum dictum aenean ac proin.</p>
                <a class="more-button" href="./">
                    <span>Ser AMASFAC</span>
                    <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                </a>
                <button class="login-green">Ingresa al Campus</button>
            </div>
            <div class="Home__campus--box-right">
                <div class="Home__campus--box-right__top">
                    <h2 class="title">
                        Campañas
                    </h2>
                    <p>Eget sed tortor, mauris facilisi nulla amet. Ullamcorper semper est urna odi. Cum dictum aenean ac proin.</p>
                    <a class="more-button" href="./">
                        <span>Nunc senectus.</span>
                        <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                    </a>
                </div>
                <div class="Home__campus--box-right__bottom">
                    <h2 class="title">
                        Acervo digital priv.
                    </h2>
                    <p>Eget sed tortor, mauris facilisi nulla amet. Ullamcorper semper est urna oio. Cum dictum aenean ac proin.</p>
                    <a class="more-button" href="./">
                        <span>Turpis tellus.</span>
                        <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="Home__content">
        <div class="container__content">
            <div class="numbers">
                <div class="cont-num">
                    <h1>10</h1>
                    <p>Ipsum non eu.</p>
                </div>
                <div class="cont-num">
                    <h1>25</h1>
                    <p>Magnis sed proin.</p>
                </div>
                <div class="cont-num">
                    <h1>19</h1>
                    <p>Enim lacinia.</p>
                </div>
                <div class="cont-num">
                    <h1>93</h1>
                    <p>Mauris pretium.</p>
                </div>
            </div>
            <div class="cont-text">
                <p>Odo faucibus sed fermentum imperdiet justo sed ullamcorper.</p>
                <button class="login-green">Únete a AMASFAC</button>
            </div>
        </div>
    </div>

    <div class="Home__sponsorships">
        <div class="container">
            <div class="Home__sponsorships__box">
                <h1>Patrocinios</h1>
                <p>Nulla vitae mauris hendrerit commodo. Suspendisse auctor faucibus tristique odio diam leo amet. Mattis arcu id adipiscing amet tempor, ante. Nec hac elit vel quis purus etiam duis. Mauris, in tellus non quam dolor et amet, ornare sit. Vel elementum egestas dis pulvinar nulla diam condimentum. Sit cras nunc tortor nullam. Ac cursus gravida risus, morbi ut porttitor. Eget quis diam arcu quis at arcu vitae feugiat. Vitae donec ullamcorper.</p>
                <a href="./">Ver esquema de patrocinios</a>
                <button class="button button--green">Únete como patrocinante</button>
            </div>
            <div class="Home__sponsorships__box box--right">
                <h2>Nuestros patrocinantes </h2>
            </div>
        </div>
    </div>

    <div class="Home__articles">
        <div class="Home__articles__container">
            <div class="Home__articles__card card1">
                <h1>Boletin</h1>
                <div>
                    <span>Reciente</span>
                    <ul>
                        <li>Faucibus consectetur tincidunt lobortis morbi eget nisl nullam. Non </li>
                        <li>Dui tellus, vulputate molestie cursus. Amet at pulvinar a faucibus. Dui fermentum. </li>
                    </ul>
                </div>
                <a href="./" class="see-more">
                    Ver más
                    <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-withe.png" ?>"srcset=""/>
                </a>
            </div>
            <div class="Home__articles__card card2">
                <h1>Seminarios</h1>
                <div>
                    <span>Reciente</span>
                    <ul>
                        <li>Faucibus consectetur tincidunt lobortis morbi eget nisl nullam. Non </li>
                        <li>Dui tellus, vulputate molestie cursus. Amet at pulvinar a faucibus. Dui fermentum. </li>
                    </ul>
                </div>
                <a href="./" class="see-more">
                    Ver más
                    <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-withe.png" ?>"srcset=""/>
                </a>
            </div>
            <div class="Home__articles__card card3">
                <h1>Snp xxi</h1>
                <div>
                    <span>Reciente</span>
                    <ul>
                        <li>Faucibus consectetur tincidunt lobortis morbi eget nisl nullam. Non </li>
                        <li>Dui tellus, vulputate molestie cursus. Amet at pulvinar a faucibus. Dui fermentum. </li>
                    </ul>
                </div>
                <a href="./" class="see-more">
                    Ver más
                    <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-withe.png" ?>"srcset=""/>
                </a>
            </div>
        </div>
    </div>
    <div class="Home__videos">
        <div class="container">
            <h1>Videos</h1>
            <div class="Home__videos--content">
                <div class="Home__videos--content--box-left">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/4Ps6ku8bJsE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="Home__videos--content--box-right">
                    <div class="Home__videos--content--box-right__box">
                        <h3>La Responsabilidad Civil "Generalidades y Casos de Uso"</h3>
                        <p>Bibendum in tincidunt tortor, augue cras nibh nec, magna egestas. In enim sit diam sapien, vehicula. Amet tellus lectus oio pharetra elementum, platea id. Aliquet dolor porttitor faucibus eget pellentesque dio a adipiscing. Gravida diam velit auctor aenea.</p>
                        <a href="./">Ver más</a>
                        <div class="button-emergent">
                            <img alt="" src="<?php echo "$urlTemplate/assets/images/v.png" ?>"srcset=""/>
                            <img alt="" src="<?php echo "$urlTemplate/assets/images/y.png" ?>"srcset=""/>
                        </div>
                    </div>
                    <div class="Home__videos--content--box-right__box box-bottom">
                        <h3>Más videos relacionados</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Home__outstanding">
        <div class="container">
            <div class="Home__outstanding__box box--left">
                <h1>Rhoncus tellus</h1>
                <p>Mattis est montes, urna egestas mauris pharetra phasellus. Habitant vitae dolor mauris mattis tortor, mollis amet. Enim non parturient in posuere turpis sit placerat nisi. Ultricies arcu dictum est sed tempor nisl quisque hac. Feugiat et turpis imperdiet odio aliquam.</p>
                <a href="./">
                    Leer más
                    <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                </a>
                <button class="button button--white">Ver blog</button>
            </div>
            <div class="Home__outstanding__box box--right">
                <div class="content">
                    <h2>Otros destacados</h2>
                    <ul>
                        <li>Tempor sagittis, fermentum vel eleifend ac. Ultrices massa urna, rutrum risus, nulla at et. Nibh tincidunt elementum nibh.</li>
                        <li>Tempor sagittis, fermentum vel eleifend ac. Ultrices massa urna, rutrum risus, nulla at et. Nibh tincidunt elementum nibh.</li>
                    </ul>
                    <h2>Ver categorías</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="Home__press">
        <div class="container">
        <div class="content">
            <div class="content--header">
                <h1>Prensa</h1>
                <div class="images">
                    <img alt="" src="<?php echo "$urlTemplate/assets/images/search.png" ?>"srcset=""/>
                    <img alt="" src="<?php echo "$urlTemplate/assets/images/menu.png" ?>"srcset=""/>
                </div>
            </div>
            <div class="content--body">
                <div class="content--body--box">
                    <div class="content--body__card">
                        <h3>Website.com</h3>
                        <div class="line"></div>
                        <span class="date">10 de Octubre, 2020</span>
                        <p>Duis ipsum viverra massa enim lectus. Mi sed massa mauris cursus quis at blandit vulputate lorem. Facilisi scelerisque bibendum enim ipsum, lectus. </p>
                        <a href="./" class="more-button">
                            <span>Leer noticia</span>
                            <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                        </a>
                    </div>
                    <div class="content--body__card">
                        <h3>Website.com</h3>
                        <div class="line"></div>
                        <span class="date">10 de Octubre, 2020</span>
                        <p>Duis ipsum viverra massa enim lectus. Mi sed massa mauris cursus quis at blandit vulputate lorem. Facilisi scelerisque bibendum enim ipsum, lectus. </p>
                        <a href="./" class="more-button">
                            <span>Leer noticia</span>
                            <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                        </a>
                    </div>
                </div>
                <div class="content--body--box">
                    <div class="content--body__card">
                        <h3>Website.com</h3>
                        <div class="line"></div>
                        <span class="date">10 de Octubre, 2020</span>
                        <p>Duis ipsum viverra massa enim lectus. Mi sed massa mauris cursus quis at blandit vulputate lorem. Facilisi scelerisque bibendum enim ipsum, lectus. </p>
                        <a href="./" class="more-button">
                            <span>Leer noticia</span>
                            <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                        </a>
                    </div>
                    <div class="content--body__card">
                        <h3>Website.com</h3>
                        <div class="line"></div>
                        <span class="date">10 de Octubre, 2020</span>
                        <p>Duis ipsum viverra massa enim lectus. Mi sed massa mauris cursus quis at blandit vulputate lorem. Facilisi scelerisque bibendum enim ipsum, lectus. </p>
                        <a href="./" class="more-button">
                            <span>Leer noticia</span>
                            <img alt="" src="<?php echo "$urlTemplate/assets/images/arrow-green.png" ?>"srcset=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="Home__Social-networks">
        <div class="container">
            <h1>Redes sociales</h1>
            <div class="Home__Social-networks__content">
                <div class="box-left">
                    <div class="cont-img">
                        <img alt="" src="<?php echo "$urlTemplate/assets/images/facebook-black.png" ?>"srcset=""/>
                        <img alt="" src="<?php echo "$urlTemplate/assets/images/youtube-black.png" ?>"srcset=""/>
                        <img alt="" src="<?php echo "$urlTemplate/assets/images/twiter-black.png" ?>"srcset=""/>
                    </div>
                    <p>
                        “Nisl diam ornare porta diam sagittis quis. Scelerisque est dolor sagittis ipsum. Eu blandit ornare et cursus risus. At maecenas adipiscing convallis amet in. Purus nibh facilisis sodales purus sapien ultrices adipiscing. Lorem libero consectetur non dignissim. Non eu at aliquam eget nam scelerisque. Velit urna id risus sit velit ac.
                        Orci, adipiscing consequat diam egestas dolor, eu diam sodales molestie. Laoreet.”
                    </p>
                    <h2>-Lic. Alejandro Sobera </h2>
                    <h3>Presidente Nacional de AMASFAC</h3>
                </div>
                <div class="box-right">
                    <div class="caroucel-Social-networks">
                        <div class="item"><h3>1</h3></div>
                        <div class="item"><h3>2</h3></div>
                        <div class="item"><h3>3</h3></div>
                        <div class="item"><h3>4</h3></div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
	<main id="primary" class="site-main">
       

	</main><!-- #main -->

<?php
get_footer();
