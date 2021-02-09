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
    <div class="container">
        <!-- <div class="column">
            <?php the_custom_logo()?>
        </div> -->
        <h1>
            Carmenta Labs is dedicated to helping early stage tech startups in LATAM grow by leveraging our experience and extensive networks.
        </h1>
        </div>
</div>
<!-- ------------------------------------------------------------------------------------- -->
<div class="Home__about">
    <div class="container">
        <h1 class="title">About Us</h1>
        <p class="paragraph">
            We partner with early stage tech companies, accompanying them in their growth through the development of sustainable business models, tech infrastructure, monetization schemes and fundraising strategies. Our experience in tech-based investment, software development, our investor networks and knowledge of the LATAM startup ecosystem enable us to assist startups on these three pillars.
        </p>
        <div class="content--cards">
            <div class="card">
                <img src="<?php echo "$urlTemplate/assets/images/reloj.PNG" ?>" alt="" srcset=""> 
                <p>Development of business models & monetization schemes</p> 
            </div>
            <div class="card">
                <img src="<?php echo "$urlTemplate/assets/images/cuadros.PNG" ?>" alt="" srcset=""> 
                <p>Development of tech platforms</p> 
            </div>
            <div class="card">
                <img src="<?php echo "$urlTemplate/assets/images/chaleco.PNG" ?>" alt="" srcset=""> 
                <p>Structuring of investment rounds</p> 
            </div>
            <div class="card">
                <img src="<?php echo "$urlTemplate/assets/images/reloj.PNG" ?>" alt="" srcset=""> 
                <p>Development of business models & monetization schemes</p> 
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------- -->
<div class="Home__team">
    <div class="container">
        <h1 class="title">The Team</h1>
        <h3 class="paragraph">Trend setters, market booster, this is our Team!</h3>
        <div class="Home__team--photo">
            <div class="people">
                <img src="<?php echo "$urlTemplate/assets/images/avatar.jpg" ?>" alt="" srcset="">
                <p>Juan Sebastián Ortiz</p>  
                <span>Co-founder</span>
            </div>
            <div class="people">
                <img src="<?php echo "$urlTemplate/assets/images/avatar.jpg" ?>" alt="" srcset="">
                <p>Juan Sebastián Ortiz</p>  
                <span>Co-founder</span>
            </div>
            <div class="people">
                <img src="<?php echo "$urlTemplate/assets/images/avatar.jpg" ?>" alt="" srcset="">
                <p>Juan Sebastián Ortiz</p>  
                <span>Co-founder</span>
            </div>
            <div class="people">
                <img src="<?php echo "$urlTemplate/assets/images/avatar.jpg" ?>" alt="" srcset="">
                <p>Juan Sebastián Ortiz</p>  
                <span>Co-founder</span>
            </div>
            <div class="people">
                <img src="<?php echo "$urlTemplate/assets/images/avatar.jpg" ?>" alt="" srcset="">
                <p>Juan Sebastián Ortiz</p>  
                <span>Co-founder</span>
            </div>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------- -->
<div class="Home__Alliances">
    <div class="container">
        <h1 class="title">Alliances</h1>
        <div class="cont-photo">
            <img src="<?php echo "$urlTemplate/assets/images/logo3.png" ?>" alt="" srcset="">
            <img src="<?php echo "$urlTemplate/assets/images/logo5.png" ?>" alt="" srcset="">
            <img src="<?php echo "$urlTemplate/assets/images/logo6.png" ?>" alt="" srcset="">
            <img src="<?php echo "$urlTemplate/assets/images/logo4.png" ?>" alt="" srcset="">
        </div>
        <h1 class="title">Our portfolio</h1>
        <div class="cont-photo">
            <img src="<?php echo "$urlTemplate/assets/images/logo7.png" ?>" alt="" srcset="">
            <img src="<?php echo "$urlTemplate/assets/images/logo2.png" ?>" alt="" srcset="">
            <img src="<?php echo "$urlTemplate/assets/images/logo1.png" ?>" alt="" srcset="">
        </div>
    </div>
</div>
<!-- ------------------------------------------------------------------------------------- -->
<div class="Home__touch">
    <div class="container">
        <h1 class="title">Get in touch with us</h1>
        <button>Contact Us</button>
    </div>
</div>
   

    
	<main id="primary" class="site-main">
       

	</main><!-- #main -->

<?php
get_footer();
