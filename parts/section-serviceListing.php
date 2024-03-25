<?php $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/service.php',
        ),
    )
);
$the_query = new WP_Query($args); ?>
<div id="servicesListingSlider" class="mt-7">
    <?php if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
    ?>
            <div>
                <article class="serviceCard">
                    <img class="h-100 w-100 object-fit-cover" src="<?= $featured_img_url ?>" alt="<?= bloginfo('name') ?>">

                    <div class="inner d-flex justify-content-end flex-column align-items-center">
                        <p class="title d-flex justify-content-center align-items-center border border-white rounded-pill px-4 py-2 <?= strlen(get_the_title()) > 16 ? 'fs-16' : 'fs-24' ?> fw-600 text-center lh-1"><?= get_the_title() ?></p>

                        <p class="content text-center fs-14">
                            <?= get_field('short_description') ?>
                        </p>
                    </div>
                </article>
            </div>
    <?php endwhile;
    endif;
    wp_reset_query();
    ?>
</div>