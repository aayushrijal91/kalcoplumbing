<?php
/*
* Template Name: FAQ
* The FAQ Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="faqPage">
    <section class="faqs py-8">
        <div class="container">
            <p class="text-light-grey fs-80 fw-800 text-center highlight-primary">Frequently Asked <span>Questions</span></p>


            <form id="faq-filter-form" class="mx-auto my-5 col-xl-10 bg-lighter py-3 px-4">
                <div class="row align-items-center gy-4">
                    <div class="col-md-6 col-lg-3 order-1">
                        <?php
                        $faq_categories = get_terms(array(
                            'taxonomy' => 'category',
                            'hide_empty' => true,
                        ));
                        ?>
                        <select id="category-filter" name="category-filter" class="w-100 shadow-none form-select border-0 bg-transparent">
                            <option selected disabled>Type Of Question</option>
                            <option value="">All Categories</option>
                            <?php foreach ($faq_categories as $category) : ?>
                                <option value="<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-12 col-lg order-2 order-md-3 order-lg-2">
                        <div class="row align-items-center">
                            <p class="col-auto">Selected Filters</p>
                            <div class="col-auto">
                                <p id="selected_filter" class="rounded-pill bg-light text-grey px-3 py-2 fs-14">All Categories</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 order-3 order-md-2 order-lg-3">
                        <div class="d-flex align-items-center bg-white px-3">
                            <input type="text" class="form-control px-0 border-0 faq-search" id="faq-search" placeholder="Search...">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                <g clip-path="url(#clip0_86_4103)">
                                    <path d="M12.7619 10.948L10.5625 8.74859C11.0744 7.89546 11.375 6.90015 11.375 5.83496C11.375 2.69871 8.82294 0.147461 5.6875 0.147461C2.55206 0.147461 0 2.69871 0 5.83496C0 8.97121 2.55206 11.5225 5.6875 11.5225C6.7535 11.5225 7.748 11.2226 8.60113 10.71L10.8006 12.9094C10.959 13.0678 11.167 13.1475 11.375 13.1475C11.583 13.1475 11.791 13.0678 11.9494 12.9094L12.7619 12.0969C13.0796 11.7792 13.0796 11.2657 12.7619 10.948ZM5.6875 9.89746C3.44419 9.89746 1.625 8.07827 1.625 5.83496C1.625 3.59165 3.44419 1.77246 5.6875 1.77246C7.93081 1.77246 9.75 3.59165 9.75 5.83496C9.75 8.07827 7.93081 9.89746 5.6875 9.89746Z" fill="#40E0D0" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_86_4103">
                                        <rect width="13" height="13" fill="white" transform="translate(0 0.147461)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </form>

            <div class="rounded-20 bg-lighter px-3 py-md-5 py-4 px-md-4">
                <?php
                $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'faq',
                    'orderby' => 'date',
                    'order' => 'ASC',
                );

                $the_query = new WP_Query($args);
                ?>

                <div class="row gx-xl-6">
                    <div class="col-3 d-none d-lg-block">
                        <p class="fw-800 pt-4">Quick Access</p>

                        <?php
                        function get_faqs_categories()
                        {
                            $args = array(
                                'taxonomy' => 'category',
                                'hide_empty' => false,
                            );

                            $categories = get_terms($args);

                            return $categories;
                        }

                        $faq_categories = get_faqs_categories();

                        // Display categories
                        if (!empty($faq_categories)) { ?>
                            <ul class="p-0 mt-4">
                                <?php foreach ($faq_categories as $category) { ?>
                                    <li class="border-bottom border-light py-3">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col" ?>
                                                <p class="fs-14 text-grey"><?= $category->name ?></p>
                                            </div>

                                            <div class="col-auto">
                                                <p class="text-white fw-600 bg-primary d-flex justify-content-center align-items-center rounded-circle" style="height: 26px; width: 26px;"><?= $category->count ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>

                    <div class="col-lg-9">
                        <div id="faq-results">
                            <?php
                            $all_faqs_query = new WP_Query(array(
                                'post_type' => 'faq',
                                'posts_per_page' => -1,
                                'orderby' => 'date',
                                'order' => 'DESC',
                            ));

                            if ($all_faqs_query->have_posts()) {
                                $index = 1; ?>
                                <div class="accordion-container">
                                    <?php while ($all_faqs_query->have_posts()) {
                                        $all_faqs_query->the_post(); ?>
                                        <div class="accordion-card">
                                            <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                                                <div class="row g-0 w-100 justify-content-between">
                                                    <div class="col h-inherit">
                                                        <?= get_the_title() ?>
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
                                                <?= get_the_content() ?>
                                            </div>
                                        </div>
                                    <?php
                                        $index++;
                                    } ?>
                                </div>
                            <?php wp_reset_postdata();
                            } else {
                                echo 'No FAQs found.';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>