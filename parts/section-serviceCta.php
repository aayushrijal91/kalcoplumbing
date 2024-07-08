<section class="service-cta py-5 pt-md-6 pb-md-9">
    <div class="container">
        <?php if (!empty(get_field('service_cta_title'))) : ?>
            <p class="text-light-grey highlight-primary fs-60 lh-1 fw-800 text-center text-capitalize"><?= get_field('service_cta_title') ?></p>
        <?php endif; ?>

        <?php if (!empty(get_field('service_cta_description'))) : ?>
            <article class="col-xl-10 description mx-auto text-center text-dark pt-md-5 lh-1_67">
                <?= get_field('service_cta_description') ?>
            </article>
        <?php endif; ?>

        <div class="row gy-4 justify-content-center pt-5">
            <?php if (have_rows('service_cta')) :
                while (have_rows('service_cta')) : the_row(); ?>
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="bg-primary rounded-30 overflow-hidden position-relative h-100">
                            <img class="position-absolute bottom-0 start-0 w-100" src="<?= get_template_directory_uri() ?>/assets/images/icons/service-cross.png" alt="">

                            <div class="position-relative d-flex flex-column justify-content-between h-100">
                                <div class="px-5 pt-5 pb-3 pb-md-7 pb-lg-3 text-center text-white">
                                    <p class="fs-48 lh-0_9 fw-800 text-capitalize"><?= get_sub_field('title') ?></p>

                                    <article class="pt-4 lh-1_67"><?= get_sub_field('description') ?></article>
                                </div>

                                <div class="w-full d-flex justify-content-center">
                                    <img src="<?= get_sub_field('staff_image')['url'] ?>" alt="<?= get_sub_field('staff_image')['url'] ?>">
                                </div>
                            </div>

                            <img class="position-absolute bottom-0 end-0" src="<?= get_template_directory_uri() ?>/assets/images/icons/service-cta-line.png" alt="">
                        </div>
                    </div>
                <?php
                endwhile;
            elseif (have_rows('service_cta', 'options')) :
                while (have_rows('service_cta', 'options')) : the_row(); ?>
                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="bg-primary rounded-30 overflow-hidden position-relative h-100">
                            <img class="position-absolute bottom-0 start-0 w-100" src="<?= get_template_directory_uri() ?>/assets/images/icons/service-cross.png" alt="">

                            <div class="position-relative d-flex flex-column justify-content-between h-100">
                                <div class="px-5 pt-5 pb-3 pb-md-7 pb-lg-3 text-center text-white">
                                    <p class="fs-48 lh-0_9 fw-800 text-capitalize"><?= get_sub_field('title') ?></p>

                                    <article class="pt-4 lh-1_67"><?= get_sub_field('description') ?></article>
                                </div>

                                <div class="w-full d-flex justify-content-center">
                                    <img src="<?= get_sub_field('staff_image')['url'] ?>" alt="<?= get_sub_field('staff_image')['url'] ?>">
                                </div>
                            </div>

                            <img class="position-absolute bottom-0 end-0" src="<?= get_template_directory_uri() ?>/assets/images/icons/service-cta-line.png" alt="">
                        </div>
                    </div>
            <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</section>