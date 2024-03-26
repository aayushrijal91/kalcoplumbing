<?php
/*
* Template Name: Areas
* The Areas Page
*/
get_header();
get_template_part('parts/section', 'banner');

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/suburb.php'
        )
    )
);
$the_query = new WP_Query($args);
?>

<main class="areasPage">
    <section class="areas py-8">
        <div class="container">
            <p class="text-light-grey fs-80 fw-800 text-center highlight-primary">Our <span>Areas</span></p>

            <div class="mx-auto my-5 col-xl-10 bg-dark-grey py-3 px-4 text-white">
                <div class="row align-items-center gy-4">
                    <div class="col-12 col-md-3">
                        <?php
                        if ($the_query->have_posts()) {
                            $count = 0;
                        ?>

                            <div class="areas_droplist">
                                <div class="caption">Find Your Suburb</div>
                                <div class="list">
                                    <div class="areas_alphabet item areas_allSearch">All</div>
                                    <?php foreach (range('A', 'Z') as $char) {
                                    ?>
                                        <div class="areas_alphabet item" id="<?= $char ?>"><?= $char ?></div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="alphbetwrap d-none">
                                <div class="areas_allSearch active">ALL</div>
                                <?php foreach (range('A', 'Z') as $char) {
                                    $htm3[$char] = '';
                                ?>
                                    <div class="areas_alphabet"><?= $char ?></div>
                                <?php while ($the_query->have_posts()) : $the_query->the_post();
                                        if (strpos(get_the_title(), $char) === 0) {
                                            $liclass = str_replace(' ', '-', strtolower(get_the_title()));

                                            $htm3[$char] .= '<li class=' . $liclass . '><a class="suburb_link" href=' . get_the_permalink() . '>' . get_the_title() . '</a></li>';
                                        }
                                    endwhile;
                                } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="col-12 col-md">
                        <div class="row align-items-center">
                            <p class="col-auto">Selected Filters</p>
                            <div class="col-auto">
                                <p id="selected_suburb_filter" class="rounded-pill bg-light text-grey px-3 py-2 fs-14">All</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="d-flex align-items-center bg-grey px-3">
                            <input type="text" class="form-control px-0 border-0 bg-transparent rounded-0 suburb-search" id="suburb-search" placeholder="Search For Suburb...">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                <g clip-path="url(#clip0_86_4103)">
                                    <path d="M12.7619 10.948L10.5625 8.74859C11.0744 7.89546 11.375 6.90015 11.375 5.83496C11.375 2.69871 8.82294 0.147461 5.6875 0.147461C2.55206 0.147461 0 2.69871 0 5.83496C0 8.97121 2.55206 11.5225 5.6875 11.5225C6.7535 11.5225 7.748 11.2226 8.60113 10.71L10.8006 12.9094C10.959 13.0678 11.167 13.1475 11.375 13.1475C11.583 13.1475 11.791 13.0678 11.9494 12.9094L12.7619 12.0969C13.0796 11.7792 13.0796 11.2657 12.7619 10.948ZM5.6875 9.89746C3.44419 9.89746 1.625 8.07827 1.625 5.83496C1.625 3.59165 3.44419 1.77246 5.6875 1.77246C7.93081 1.77246 9.75 3.59165 9.75 5.83496C9.75 8.07827 7.93081 9.89746 5.6875 9.89746Z" fill="#fff" />
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
            </div>
        </div>

        <section class="areawrap section-space">
            <div class="container">
                <?php  // The Loop
                if ($the_query->have_posts()) {
                    $count = 0;
                ?>
                    <div class="arealistwrap">
                        <div class="row g-4 g-md-5">
                            <?php foreach (range('A', 'Z') as $char) {
                                if (isset($htm3[$char]) && $htm3[$char] != '') {
                            ?>
                                    <div class="col-lg-4 col-md-6 arealist char<?= $char ?> <?php echo ($count > 5) ? 'arealisthide' : ''; ?> ">
                                        <div class="arealist_inner bg-lighter">
                                            <p class="alphabet-title fw-700 text-primary"><?= $char ?></p\\>
                                            <ul>
                                                <?php echo $htm3[$char]; ?>
                                            </ul>
                                            <div class="mbottom "></div>
                                        </div>
                                    </div>
                            <?php $count++;
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="noresult">No Result Found.</div>
                    <div class="areas_loadMoreWrap "><a href="javascript:void(0)" class="areas_loadMoreBtn btn btn-secondary text-white px-4 px-xl-5">Load More</a></div>
                <?php }
                wp_reset_postdata(); ?>

            </div>
        </section>
    </section>

</main>

<?php get_footer(); ?>