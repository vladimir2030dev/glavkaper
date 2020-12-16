<?php
/*
Template Name: Главная страница
*/

get_header();
?>
<div class="slider">
    <?php echo do_shortcode ( '[slick-slider design="prodesign-20" sliderheight="500" dots_design="design-4" arrow_design="design-4"]' ) ; ?>
</div>
<div class="container about">
    <div class="about__logo col-lg-12 col-12 text-center">
        <img class="about__logo__img ml-auto mr-auto" src="<?php the_field('logo_img'); ?>" alt="Логотип Главкапер">
    </div>
    <div class="about__social col-12 col-lf-12 text-center pt-3 pb-5">
        <a class="about__social" href="<?php echo $redux_demo['url-telegram'] ?>" target="_blank">
            <i class="fab fa-telegram"></i>
        </a>
        <a class="about__social" href="<?php echo $redux_demo['url-instagram'] ?>" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="about__social" href="<?php echo $redux_demo['url-youtube'] ?>" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
    <div class="about__text col-12 col-lg-12">
        <?php the_field('about_text'); ?>
    </div>
    <div class="about__social__main col-12 col-lg-4 offset-lg-4 text-center align-items-center">
        <span>Написать основателю:</span>
            <a href="<?php echo $redux_demo['url-telegram'] ?>" target="_blank">
                <i class="fab fa-telegram"></i>
            </a>
    </div>
</div>
<?php
get_footer();