<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package GlavKaper
 */

get_header();
?>
	<div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 align-items-center">
                <h2>
                    Упс! Что-то пошло не так...
                </h2>
                <h3>
                    Проверьте корректность URL адреса
                </h3>
                <p class="error">
                    404
                </p>
            </div>
            <div class="col-lg-6">
                <a class="error__link" href="<?php echo get_home_url(); ?>">→ На главную страницу</a>
            </div>
        </div>
    </div>
<?php
get_footer();
