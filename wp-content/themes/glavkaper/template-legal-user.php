<?php
/*
Template Name: Пользовательское соглашение
*/

get_header();
?>
    <section class="section">
        <div class="container legal pl-2 pr-2">
        <?php the_field('legal_user'); ?>
        </div>
    </section>
<?php
get_footer();