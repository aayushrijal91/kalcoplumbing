<?php global $post; ?>
<section class="bg-primary position-relative <?= ($post && !empty($post->page_template) && $post->page_template === "page-templates/contact-us.php") ? "" : "overflow-hidden" ?>">
    <img class="w-100 position-absolute top-0 opacity-20 h-100 w-100 object-fit-cover" src="<?= get_template_directory_uri() ?>/assets/images/background/hive.png" alt="<?= bloginfo('name') ?>">

    <?php if ($post && !empty($post->page_template) && $post->page_template === "page-templates/contact-us.php") : ?>
        <img class="w-100 position-relative" src="<?= get_template_directory_uri() ?>/assets/images/icons/chevron-white.png" alt="<?= bloginfo('name') ?>">
    <?php else : ?>
        <img class="w-100 position-relative d-none d-md-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/chevron.png" alt="<?= bloginfo('name') ?>">
        <img class="w-100 position-relative d-md-none" src="<?= get_template_directory_uri() ?>/assets/images/icons/chevron-sm.png" alt="<?= bloginfo('name') ?>">
    <?php endif; ?>

    <img class="position-absolute w-100 bottom-0 start-0" src="<?= get_template_directory_uri() ?>/assets/images/icons/reverse-chevron-white.png" alt="">

    <div class="position-relative">
        <div class="container">
            <div class="bg-white rounded-pill overflow-hidden col-xl-7 px-2 px-md-5 py-3 mx-auto <?= ($post && !empty($post->page_template) && $post->page_template === "page-templates/contact-us.php") ? "mt-n4" : "mt-n7 mt-md-n6 mt-lg-n7" ?>  position-relative">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <p class="fw-700 fs-18 text-dark-grey d-none d-md-block">Accredited Plumbers</p>
                        <p class="fw-700 fs-12 text-dark-grey d-md-none">Accredited Plumbers</p>
                    </div>
                    <div class="col col-md-7">
                        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/lib/brands-logos.png" alt="">
                    </div>
                </div>
            </div>

            <?php if (!empty(get_field('extra_mile', 'options')['title'])) : ?>
                <p class="text-dark-grey highlight-white fw-800 fs-80 text-capitalize mt-5 mt-md-8 text-center lh-1"><?= get_field('extra_mile', 'options')['title'] ?></p>

                <?php if (!empty(get_field('extra_mile', 'options')['description'])) : ?>
                    <article class="text-white lh-1_67 text-center py-4 col-lg-11 col-xl-10 mx-auto description"><?= get_field('extra_mile', 'options')['description'] ?></article>
                <?php endif; ?>
                
                <div class="col-md-10 col-lg-6 col-xl-5 mx-auto">
                    <div class="row gx-3">
                        <div class="col-6">
                            <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-white w-100 rounded-pill text-primary fs-18 fw-600">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4656 11.412L10.8649 10.1797C10.5947 10.0508 10.2921 10.0209 10.0043 10.0948C9.71653 10.1687 9.45978 10.3421 9.27414 10.5881L8.52467 11.5876C7.29596 10.7466 6.25001 9.63507 5.45695 8.3276L6.39402 7.52818C6.62436 7.33022 6.78683 7.05653 6.85608 6.74977C6.92534 6.44302 6.89749 6.12044 6.77689 5.83233L5.62829 3.05119C5.49943 2.7415 5.27164 2.49071 4.98553 2.34354C4.69942 2.19638 4.3736 2.1624 4.06619 2.24768L1.8647 2.86026C1.54567 2.94883 1.26844 3.15973 1.08603 3.45262C0.903619 3.74552 0.828823 4.09986 0.875949 4.44789C1.28619 7.485 2.60752 10.2987 4.64217 12.4679C6.67682 14.6371 9.31536 16.0451 12.1629 16.4811C12.4892 16.5304 12.8211 16.4497 13.0952 16.2544C13.3692 16.059 13.5662 15.7628 13.6484 15.4224L14.2227 13.0741C14.3026 12.7463 14.2702 12.3988 14.1314 12.0942C13.9927 11.7895 13.7566 11.5476 13.4656 11.412Z" fill="#40E0D0" />
                                    <path d="M10.4342 8.32757C10.4342 8.59835 10.5351 8.85804 10.7146 9.04951C10.8941 9.24098 11.1376 9.34855 11.3914 9.34855C11.6453 9.34855 11.8887 9.24098 12.0682 9.04951C12.2477 8.85804 12.3486 8.59835 12.3486 8.32757C12.3486 7.24445 11.9452 6.20569 11.2272 5.4398C10.5092 4.67392 9.53534 4.24365 8.51991 4.24365C8.26605 4.24365 8.0226 4.35122 7.84309 4.54269C7.66359 4.73416 7.56274 4.99385 7.56274 5.26463C7.56274 5.53541 7.66359 5.7951 7.84309 5.98657C8.0226 6.17804 8.26605 6.28561 8.51991 6.28561C9.02762 6.28561 9.51454 6.50074 9.87355 6.88368C10.2326 7.26663 10.4342 7.78601 10.4342 8.32757Z" fill="#40E0D0" />
                                    <path d="M8.51991 0.159668C8.26606 0.159668 8.0226 0.267235 7.84309 0.458706C7.66359 0.650176 7.56274 0.909866 7.56274 1.18065C7.56274 1.45143 7.66359 1.71112 7.84309 1.90259C8.0226 2.09406 8.26606 2.20163 8.51991 2.20163C10.0426 2.20325 11.5025 2.84917 12.5792 3.99764C13.6558 5.14611 14.2614 6.70331 14.2629 8.3275C14.2629 8.59828 14.3638 8.85797 14.5433 9.04944C14.7228 9.24091 14.9662 9.34848 15.2201 9.34848C15.4739 9.34848 15.7174 9.24091 15.8969 9.04944C16.0764 8.85797 16.1773 8.59828 16.1773 8.3275C16.175 6.162 15.3675 4.08589 13.932 2.55466C12.4964 1.02342 10.5501 0.1621 8.51991 0.159668Z" fill="#40E0D0" />
                                </svg>

                                <p class="ps-2"><?= get_field('general', 'options')['phone_number'] ?></p>
                            </a>
                        </div>
                        <?php if (!empty(get_field('general', 'options')['contact_us_link']['url'])) : ?>
                            <div class="col-6">
                                <a href="<?= get_field('general', 'options')['contact_us_link']['url'] ?>" target="<?= get_field('general', 'options')['contact_us_link']['target'] ?>" class="btn btn-white w-100 rounded-pill text-primary fs-18 fw-600">
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.3642 10.9267C10.052 11.1071 9.70201 11.2016 9.34634 11.2016C8.99066 11.2016 8.64068 11.1071 8.32846 10.9267L0.847046 6.60522V12.7012C0.847046 13.4969 1.14556 14.2599 1.67691 14.8225C2.20826 15.3852 2.92893 15.7012 3.68038 15.7012H15.0137C15.7652 15.7012 16.4858 15.3852 17.0172 14.8225C17.5485 14.2599 17.847 13.4969 17.847 12.7012V6.60522L10.3642 10.9267Z" fill="#40E0D0" />
                                        <path d="M9.34705 8.95117C9.22874 8.95109 9.11234 8.91963 9.00846 8.85967L1.2168 4.35967C1.10496 4.29523 1.01159 4.20006 0.946525 4.08418C0.881457 3.9683 0.847092 3.83599 0.847046 3.70117C0.847046 2.90552 1.14556 2.14246 1.67691 1.57985C2.20826 1.01724 2.92893 0.701172 3.68038 0.701172H15.0137C15.7652 0.701172 16.4858 1.01724 17.0172 1.57985C17.5485 2.14246 17.847 2.90552 17.847 3.70117C17.8471 3.83584 17.813 3.96804 17.7482 4.08391C17.6834 4.19978 17.5903 4.29503 17.4787 4.35967L9.68705 8.85967C9.58275 8.91988 9.46583 8.95134 9.34705 8.95117Z" fill="#40E0D0" />
                                    </svg>

                                    <p class="ps-2"><?= !empty(get_field('general', 'options')['book_online_link']['title']) ? get_field('general', 'options')['contact_us_link']['title'] : "Contact Us" ?></p>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div dir="rtl">
            <div class="pt-8" id="uteSlider">
                <div>
                    <div class="container position-relative">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/lib/ute.png" alt="">
                        <img class="front-wheel" src="<?= get_template_directory_uri() ?>/assets/images/lib/wheel.png" alt="<?= bloginfo('name') ?>">
                        <img class="rear-wheel" src="<?= get_template_directory_uri() ?>/assets/images/lib/wheel.png" alt="<?= bloginfo('name') ?>">
                    </div>
                </div>
                <div>
                    <div class="container position-relative">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/lib/ute.png" alt="">
                        <img class="front-wheel" src="<?= get_template_directory_uri() ?>/assets/images/lib/wheel.png" alt="<?= bloginfo('name') ?>">
                        <img class="rear-wheel" src="<?= get_template_directory_uri() ?>/assets/images/lib/wheel.png" alt="<?= bloginfo('name') ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>