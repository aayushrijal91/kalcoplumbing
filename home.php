<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="blogsPage">
    <div class="container py-5 py-md-9">
        <p class="text-light-grey highlight-primary fs-80 fw-800 text-center">Our <span>Blogs</span></p>

        <div class="row gy-5 pt-5 pt-md-7">
            <?php
            $args = array(
                'posts_per_page' => -1,
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    $post_date = get_the_date('Y-m-d'); // Get the post's publish date in 'Y-m-d' format
                    $current_date = current_time('Y-m-d'); // Get the current date in 'Y-m-d' format

                    $post_date = new DateTime($post_date);
                    $current_date = new DateTime($current_date);

                    $date_diff = $current_date->diff($post_date);

                    if ($date_diff->y >= 1) {
                        $formatted_date = $date_diff->y . ' year' . ($date_diff->y > 1 ? 's' : '') . ' ago';
                    } elseif ($date_diff->m >= 1) {
                        $formatted_date = $date_diff->m . ' month' . ($date_diff->m > 1 ? 's' : '') . ' ago';
                    } elseif ($date_diff->d >= 7) {
                        $formatted_date = floor($date_diff->d / 7) . ' week' . (floor($date_diff->d / 7) > 1 ? 's' : '') . ' ago';
                    } elseif ($date_diff->d >= 1) {
                        $formatted_date = $date_diff->d . ' day' . ($date_diff->d > 1 ? 's' : '') . ' ago';
                    } else {
                        $formatted_date = 'Today';
                    }
            ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="blogCard rounded-9 bg-lighter p-4 h-100">
                            <div class="mainImage rounded-9 w-100 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover object-position-top" src="<?= get_the_post_thumbnail_url($post->ID, 'full'); ?>" alt="<?= bloginfo('name') ?>">
                            </div>

                            <p class="text-light fs-12 pt-4 pb-2"><?= $formatted_date ?></p>
                            <p class="text-primary fw-700 fs-20"><?= get_the_title(); ?></p>

                            <p class="text-bright pt-2 pb-4"><?= get_field('short_description') ?></p>

                            <div class="d-flex justify-content-center">
                                <a href="<?= get_the_permalink() ?>" class="btn btn-primary text-white rounded-pill d-inline-flex fs-20 fw-600 px-6">View</a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>