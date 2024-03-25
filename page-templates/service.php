<?php
/*
* Template Name: Service
* The Service Page Template
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="servicePage">
    <?php $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent' => get_the_ID(),
        'order'          => 'ASC',
        'orderby'        => 'publish_date',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => ['page-templates/service-inner-residential.php', 'page-templates/service-inner-general.php', 'page-templates/service-inner-commercial.php']
            )
        )
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    ?>
        <div class="container">
            <p class="text-light-grey fs-80 fw-700 text-center text-capitalize highlight-primary lh-1 py-5 pt-md-8 pb-md-7">Our <span><?= get_the_title() ?> services</span></p>

            <div class="row gy-4 gy-md-5 mb-4 mb-md-7">
                <?php
                while ($the_query->have_posts()) : $the_query->the_post();
                    $featured_img_url = null;

                    if (get_the_post_thumbnail_url($post->ID, 'full')) {
                        $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                    } else if (isset(get_field('banner', $post->ID)['image'])) {
                        $featured_img_url = get_field('banner', $post->ID)['image']['url'] ? get_field('banner', $post->ID)['image']['url'] : null;
                    }
                ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="serviceCard rounded-9 bg-lighter p-4 h-100 d-flex flex-column">
                            <div class="mainImage rounded-9 w-100 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover object-position-top" src="<?= $featured_img_url ?>" alt="<?= bloginfo('name') ?>">
                            </div>

                            <div class="d-flex flex-column justify-content-between flex-grow-1">
                                <p class="text-primary fw-700 fs-30 text-center py-4"><?= get_the_title(); ?></p>

                                <div class="d-flex justify-content-center">
                                    <a href="<?= get_the_permalink() ?>" class="btn btn-primary text-white rounded-pill d-inline-flex fs-20 fw-600 px-6">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php
    endif;
    wp_reset_query();
    ?>

    <?= get_template_part('parts/section', 'serviceCta'); ?>

    <section class="bg-lighter position-relative pt-5 pt-md-7">
        <?php $about = get_field('about'); ?>
        <img class="position-absolute bottom-0 start-0 h-100 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-about.png" alt="">

        <div class="container position-relative pb-5 pb-md-0">
            <div class="row align-items-center gy-7 gx-xl-7">
                <div class="col-12 col-lg-6 order-2 order-md-1">
                    <div class="h-100 rounded-20 overflow-hidden">
                        <img class="h-100 w-100 object-fit-cover" src="<?= $about['image']['url'] ?>" alt="<?= $about['image']['alt'] ?>" />
                    </div>
                </div>

                <div class="col-12 col-lg-6 order-1 order-md-2">
                    <p class="text-dark-grey fw-800 fs-60 lh-0_9 highlight-primary text-capitalize"><?= $about['title'] ?></p>

                    <article class="description lh-1_67 text-dark fw-500 py-4">
                        <?= $about['description'] ?>
                    </article>

                    <div class="col-xl-9">
                        <div class="row gx-3">
                            <div class="col-6">
                                <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                    <?= get_field('general', 'options')['phone_number'] ?>
                                </a>
                            </div>

                            <?php if (!empty($about['link']['url']) && !empty($about['link']['title'])) : ?>
                                <div class="col-6">
                                    <a href="<?= $about['link']['url'] ?>" target="<?= $about['link']['target'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                        <?= $about['link']['title'] ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/icons/chevron-primary.png" alt="<?= bloginfo('name') ?>">
    </section>

    <section class="faqsWrapper">
        <div class="faqs py-6">
            <div class="container">
                <p class="text-light-grey highlight-white fs-60 lh-1 fw-800 text-center">Our <span>Frequently Asked Questions</span></p>

                <div class="accordion-container mt-5 mt-md-7">
                    <?php if (have_rows('faqs')) :
                        $index = 1;
                        while (have_rows('faqs')) : the_row();
                            $question = get_sub_field('question');
                            $answer = get_sub_field('answer');
                    ?>
                            <div class="accordion-card">
                                <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                                    <div class="row g-0 w-100 justify-content-between">
                                        <div class="col h-inherit">
                                            <?= $question ?>
                                        </div>
                                        <div class="col-auto h-inherit">
                                            <div class="plusminus">
                                                <?php if ($index == 1) { ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
                                                        <path d="M0.299316 19.2793L0.299317 12.0586L16.0668 0.470715L16.0668 7.69143L0.299316 19.2793Z" fill="white" />
                                                        <path d="M31.8344 19.2793L31.8344 12.0586L16.0668 0.470714L16.0668 7.69143L31.8344 19.2793Z" fill="white" />
                                                    </svg>
                                                <?php } else { ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
                                                        <path d="M0.299316 0.640625L0.299317 7.86134L16.0668 19.4492L16.0668 12.2285L0.299316 0.640625Z" fill="#6BF9EB" />
                                                        <path d="M31.8344 0.640625L31.8344 7.86134L16.0668 19.4492L16.0668 12.2285L31.8344 0.640625Z" fill="#6BF9EB" />
                                                    </svg>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                                    <?= $answer ?>
                                </div>
                            </div>
                    <?php
                            $index++;
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>