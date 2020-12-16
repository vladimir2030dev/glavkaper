<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GlavKaper
 */

?>
<?php global $redux_demo; ?>
<footer class="footer">
        <div class="container">
            <dir class="row ml-0 mr-0 pl-0">
                <div class="text-lg-start text-center pb-5 pb-lg-0 col-lg-3 col-12">
                    <img class="footer__logo" src="<?php echo $redux_demo['logo-main']['url'] ?>" alt="">
                    <div class="row">
                        <span class="footer__res">Все права защищены © 2020</span>
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-center d-block pb-5 pb-lg-0">
                    <div class="row">
                        <a class="footer__link" href="<?php echo get_home_url(); ?>" target="_blank">
                            Политика конфиденциальности
                        </a>
                    </div>
                    <div class="row">
                        <a class="footer__link pt-3" href="<?php echo get_home_url(); ?>" target="_blank">
                            Пользовательское соглашение
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-12 text-lg-start text-center">
                    <a class="footer__social" href="<?php echo $redux_demo['url-telegram'] ?>" target="_blank">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a class="footer__social" href="<?php echo $redux_demo['url-instagram'] ?>" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="footer__social" href="<?php echo $redux_demo['url-youtube'] ?>" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </dir>
        </div>
    </footer>
<?php wp_footer(); ?>

</body>

</html>