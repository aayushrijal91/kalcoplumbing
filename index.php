<?php
get_header();
get_template_part('parts/section', 'nav');
?>

<section class="pt-12 pb-8">
    <div class="container text-center">
        <?= the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>