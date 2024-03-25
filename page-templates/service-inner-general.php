<?php
/*
* Template Name: Service Inner General
* The Service Inner General Page Template
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="serviceInnerGeneralPage">
    <?php $introduction = get_field('introduction');
    if (!empty($introduction['title'])) :
    ?>
        <section class="introduction bg-lighter position-relative">
            <img class="position-absolute bottom-0 start-0 h-100 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-introduction.png" alt="">

            <div class="container position-relative">
                <div class="row align-items-center gx-xl-7">
                    <?php if (!empty($introduction['image']['url'])) : ?>
                        <div class="col-lg-6 order-2 order-md-1">
                            <div class="h-100 rounded-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>" />
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-lg-6 py-5 py-md-7 order-1 order-md-2">
                        <p class="text-dark-grey fw-800 fs-60 lh-0_9 highlight-primary text-capitalize"><?= $introduction['title'] ?></p>

                        <?php if (!empty($introduction['description'])) : ?>
                            <article class="description lh-1_67 text-dark fw-500 py-4">
                                <?= $introduction['description'] ?>
                            </article>
                        <?php endif; ?>

                        <div class="col-xl-9">
                            <div class="row gx-3">
                                <div class="col-6">
                                    <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                        Call Us
                                    </a>
                                </div>

                                <?php if (!empty($introduction['button']['url']) && !empty($introduction['button']['title'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $introduction['button']['url'] ?>" target="<?= $introduction['button']['target'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                            <?= $introduction['button']['title'] ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('sub_services')) :
        $i = 0;
    ?>
        <section class="subServices py-8">
            <div class="container">
                <div class="row g-4">
                    <?php while (have_rows('sub_services')) : the_row(); ?>
                        <div class="col-12 col-md-6 col-xl-4 col-xxl-3">
                            <div class="subServiceCard h-100 <?= $i % 8 < 4 ? 'bg-primary' : 'bg-dark-grey' ?> text-white p-4 rounded-20">
                                <div style="height:41px; width:41px;" class="rounded-circle overflow-hidden">
                                    <img class="h-100 w-100 object-fit-cover" src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">
                                </div>

                                <p class="text-white fw-800 fs-30 lh-0_9 text-capitalize py-4"><?= get_sub_field('title') ?></p>

                                <article class="description lh-1_5">
                                    <?= get_sub_field('description') ?>
                                </article>
                            </div>
                        </div>
                    <?php
                        $i++;
                    endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/icons/chevron-primary.png" alt="<?= bloginfo('name') ?>">

    <section class="faqsWrapper">
        <div class="faqs py-6">
            <div class="container">
                <p class="text-light-grey highlight-white fs-60 fw-800 text-center">Our <span>Frequently Asked Questions</span></p>

                <div class="accordion-container mt-7">
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