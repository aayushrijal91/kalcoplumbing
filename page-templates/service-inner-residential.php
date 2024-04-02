<?php
/*
* Template Name: Service Inner Residential
* The Service Inner Residential Page Template
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="serviceInnerResidentialPage">
    <?php $introduction = get_field('introduction'); ?>
    <?php if (!empty($introduction['title'])) : ?>
        <section class="introduction bg-lighter position-relative py-6 py-md-7">
            <img class="position-absolute bottom-0 start-0 h-100 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-about.png" alt="">

            <div class="container position-relative">
                <div class="row gx-xl-7 gy-5">
                    <div class="col-lg-6">
                        <?php if (!empty($introduction['image']['url'])) : ?>
                            <div class="h-100 rounded-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>" />
                            </div>
                        <?php else : ?>
                            <div class="bg-light py-7 d-flex justify-content-center align-items-center h-100 rounded-20">
                                <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M95.0295 0.355713H19.4684C14.4584 0.355713 9.65357 2.34593 6.11096 5.88855C2.56834 9.43116 0.578125 14.236 0.578125 19.246L0.578125 94.8071C0.578125 99.8171 2.56834 104.622 6.11096 108.165C9.65357 111.707 14.4584 113.697 19.4684 113.697H95.0295C100.039 113.697 104.844 111.707 108.387 108.165C111.93 104.622 113.92 99.8171 113.92 94.8071V19.246C113.92 14.236 111.93 9.43116 108.387 5.88855C104.844 2.34593 100.039 0.355713 95.0295 0.355713ZM38.3587 19.246C40.2267 19.246 42.0529 19.7999 43.6061 20.8378C45.1593 21.8756 46.37 23.3507 47.0848 25.0766C47.7997 26.8025 47.9868 28.7016 47.6223 30.5338C47.2579 32.366 46.3583 34.0489 45.0374 35.3698C43.7165 36.6908 42.0335 37.5903 40.2013 37.9548C38.3691 38.3192 36.47 38.1322 34.7442 37.4173C33.0183 36.7024 31.5432 35.4918 30.5053 33.9386C29.4675 32.3853 28.9135 30.5592 28.9135 28.6911C28.9135 26.1861 29.9086 23.7837 31.6799 22.0124C33.4513 20.2411 35.8537 19.246 38.3587 19.246ZM91.5442 85.3619H25.9855C25.5004 85.3617 25.0272 85.2121 24.6301 84.9334C24.233 84.6547 23.9314 84.2605 23.7663 83.8044C23.6012 83.3482 23.5806 82.8523 23.7073 82.384C23.8339 81.9158 24.1018 81.4979 24.4743 81.1872L73.6457 40.2142C73.9325 39.9761 74.2715 39.8093 74.6351 39.7274C74.9987 39.6455 75.3765 39.6509 75.7376 39.743C76.0987 39.8351 76.4329 40.0114 76.7129 40.2575C76.9928 40.5035 77.2105 40.8124 77.3482 41.1587L93.7355 82.1223C93.8791 82.4805 93.9327 82.8685 93.8915 83.2523C93.8504 83.6361 93.7158 84.0039 93.4996 84.3236C93.2833 84.6433 92.992 84.9051 92.6511 85.0861C92.3102 85.2671 91.9302 85.3618 91.5442 85.3619Z" fill="white" />
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6">
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

                                <?php if (!empty($introduction['link']['url']) && !empty($introduction['link']['title'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= $introduction['link']['url'] ?>" target="<?= $introduction['link']['target'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                            <?= $introduction['link']['title'] ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <img class="position-absolute bottom-0 start-0 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-about-line.png" alt="">
        </section>
    <?php endif; ?>

    <section class="serviceType py-6 py-md-7">
        <?php $comparison = get_field('comparison'); ?>
        <div class="container">
            <?php if (!empty($comparison['title'])) : ?>
                <p class="text-center highlight-primary fs-54 fw-800 text-capitalize"><?= $comparison['title'] ?></p>
            <?php endif; ?>

            <?php if (!empty($comparison['title'])) : ?>
                <article class="col-xl-10 description mx-auto text-center text-dark pt-3 lh-1_67">
                    <?= $comparison['description'] ?>
                </article>
            <?php endif; ?>

            <div class="rounded-20 rounded-md-40 bg-dark-grey overflow-hidden mt-6">
                <div class="text-white text-center d-md-none">
                    <p class="bg-primary fs-24 fw-800 py-3">Electric</p>

                    <div class="py-4 px-3">
                        <p class="fs-18">Cheaper to install and replace</p>
                    </div>

                    <div class="py-4 px-3">
                        <p class="fs-18">Simpler installation process</p>
                    </div>

                    <div class="py-4 px-3">
                        <p class="fs-18">There are more *efficient electric hot water systems being made on the market.</p>
                        <p class="fs-9 text-grey pt-3">*Instant electric systems can match the energy-efficiency of gas hot water systems but they require 3-phase power, making them more suitable for commercial properties over residences that often have single phase power.</p>
                    </div>
                </div>

                <div class="text-white text-center d-md-none">
                    <p class="bg-primary fs-24 fw-800 py-3 rounded-top-20">Gas</p>

                    <div class="py-4 px-3">
                        <p class="fs-18">Cheaper running costs & smaller bills</p>
                    </div>

                    <div class="py-4 px-3">
                        <p class="fs-18">No time of-use tariffs</p>
                    </div>

                    <div class="py-4 px-3">
                        <p class="fs-18">More energy-efficient and eco-conscious</p>
                    </div>
                </div>

                <table class="w-100 d-none d-md-block">
                    <thead>
                        <tr class="bg-tertiary text-white fs-33 fw-700 lh-1">
                            <td>Electric</td>
                            <td>Gas</td>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <p class="text-white fs-18">Cheaper to install and replace</p>
                            </td>

                            <td>
                                <p class="text-white fs-18">Cheaper running costs & small bills</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p class="text-white fs-18">Simpler installation process</p>
                            </td>

                            <td>
                                <p class="text-white fs-18">No time of-use tariffs</p>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p class="text-white fs-18">There are more *efficient electric hot water systems being made on the market.</p>
                                <p class="text-grey fs-9 pt-2 pb-7">*Instant electric systems can match the energy-efficiency of gas hot water systems but they require 3-phase power, making them more suitable for commercial properties over residences that often have single phase power.</p>
                            </td>

                            <td>
                                <p class="text-white fs-18">More energy-efficient and eco-conscious.</p>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <section class="bg-light-grey rounded-20 rounded-md-40 py-5 px-4 px-md-5 py-md-4 position-relative orverflow-hidden">
                    <img class="position-absolute h-100 top-0 end-0 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/arrow-service.png" alt="<?= bloginfo('name') ?>">

                    <div class="row position-relative gy-4 gy-md-5">
                        <?php if (get_field('why_us')['title']) : ?>
                            <div class="col-md-6 col-xl-3">
                                <div class="d-flex flex-column h-100 justify-content-between py-4">
                                    <p class="highlight-primary text-center text-lg-start text-white fs-40 fw-800 lh-0_9"><?= get_field('why_us')['title'] ?></p>

                                    <div class="row align-items-center gx-2 pt-4">
                                        <div class="col-auto">
                                            <a href="mailto:<?= get_field('general', 'options')['email_address'] ?>" class="btn btn-primary emailBtn rounded-circle d-flex justify-content-center align-items-center">
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.1707 10.0286C8.87108 10.2007 8.53522 10.2909 8.1939 10.2909C7.85258 10.2909 7.51672 10.2007 7.2171 10.0286L0.0375977 5.90576V11.7215C0.0375977 12.4806 0.324062 13.2086 0.833972 13.7454C1.34388 14.2821 2.03547 14.5836 2.75659 14.5836H13.6326C14.3537 14.5836 15.0453 14.2821 15.5552 13.7454C16.0651 13.2086 16.3516 12.4806 16.3516 11.7215V5.90576L9.1707 10.0286Z" fill="white" />
                                                    <path d="M8.19458 8.14372C8.08104 8.14364 7.96934 8.11363 7.86966 8.05643L0.392426 3.76328C0.285102 3.7018 0.195504 3.611 0.133062 3.50045C0.0706198 3.38989 0.0376416 3.26367 0.0375977 3.13505C0.0375977 2.37597 0.324062 1.64799 0.833972 1.11124C1.34388 0.574491 2.03547 0.272949 2.75659 0.272949H13.6326C14.3537 0.272949 15.0453 0.574491 15.5552 1.11124C16.0651 1.64799 16.3516 2.37597 16.3516 3.13505C16.3516 3.26352 16.3189 3.38965 16.2567 3.50019C16.1945 3.61073 16.1052 3.70161 15.9981 3.76328L8.52086 8.05643C8.42077 8.11386 8.30857 8.14388 8.19458 8.14372Z" fill="white" />
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="col-auto">
                                            <a class="btn btn-primary rounded-pill text-white fw-600 px-4 gap-2" href="tel:<?= get_field('general', 'options')['phone_number'] ?>">
                                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1_1155)">
                                                        <path d="M11.3978 10.292L9.09591 9.20124C8.85673 9.08714 8.58887 9.06073 8.33414 9.12613C8.07941 9.19152 7.85214 9.34504 7.68782 9.56272L7.02445 10.4474C5.93687 9.70303 5.01107 8.71921 4.30911 7.56192L5.13854 6.85433C5.34242 6.67911 5.48623 6.43685 5.54753 6.16533C5.60883 5.89381 5.58418 5.60829 5.47743 5.35328L4.46076 2.89159C4.34671 2.61748 4.14508 2.3955 3.89183 2.26523C3.63859 2.13497 3.3502 2.1049 3.0781 2.18038L1.12949 2.7226C0.847107 2.80099 0.601722 2.98767 0.440262 3.24692C0.278803 3.50617 0.212599 3.81981 0.254312 4.12786C0.61743 6.81611 1.78698 9.30663 3.58792 11.2267C5.38886 13.1467 7.72431 14.3929 10.2447 14.7789C10.5336 14.8225 10.8274 14.751 11.07 14.5782C11.3125 14.4053 11.4869 14.1431 11.5596 13.8417L12.068 11.7632C12.1387 11.4731 12.11 11.1655 11.9872 10.8958C11.8643 10.6262 11.6554 10.4121 11.3978 10.292Z" fill="white" />
                                                        <path d="M8.71457 7.56207C8.71457 7.80175 8.80383 8.03161 8.96272 8.20109C9.1216 8.37056 9.3371 8.46578 9.56179 8.46578C9.78649 8.46578 10.002 8.37056 10.1609 8.20109C10.3198 8.03161 10.409 7.80175 10.409 7.56207C10.409 6.60337 10.052 5.68393 9.41643 5.00602C8.7809 4.32811 7.91892 3.94727 7.02013 3.94727C6.79544 3.94727 6.57994 4.04248 6.42106 4.21195C6.26217 4.38143 6.17291 4.61129 6.17291 4.85097C6.17291 5.09064 6.26217 5.3205 6.42106 5.48998C6.57994 5.65946 6.79544 5.75467 7.02013 5.75467C7.46953 5.75467 7.90051 5.94509 8.21828 6.28405C8.53605 6.623 8.71457 7.08272 8.71457 7.56207Z" fill="white" />
                                                        <path d="M7.02013 0.33252C6.79544 0.33252 6.57994 0.427731 6.42106 0.597208C6.26217 0.766685 6.17291 0.996545 6.17291 1.23622C6.17291 1.4759 6.26217 1.70576 6.42106 1.87523C6.57994 2.04471 6.79544 2.13992 7.02013 2.13992C8.3679 2.14136 9.66008 2.71309 10.6131 3.72964C11.5661 4.74619 12.1021 6.12451 12.1035 7.56213C12.1035 7.80181 12.1927 8.03167 12.3516 8.20115C12.5105 8.37062 12.726 8.46584 12.9507 8.46584C13.1754 8.46584 13.3909 8.37062 13.5498 8.20115C13.7086 8.03167 13.7979 7.80181 13.7979 7.56213C13.7959 5.64538 13.0811 3.80775 11.8105 2.4524C10.5399 1.09705 8.81709 0.334672 7.02013 0.33252Z" fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_1_1155">
                                                            <rect width="13.5555" height="14.4592" fill="white" transform="translate(0.242371 0.33252)" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>

                                                <?= get_field('general', 'options')['phone_number'] ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php
                        if (have_rows('why_us_list')) :
                            while (have_rows('why_us_list')) : the_row(); ?>
                                <div class="col-md-6 col-xl-3">
                                    <article class="bg-alternate-grey rounded-8 py-4 px-3 h-100 d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="bg-primary d-flex justify-content-center align-items-center rounded-circle" style="width: 35px; height: 35px;">
                                                <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">
                                            </div>

                                            <div class="description pt-4">
                                                <p class="text-white fs-24 fw-800 lh-1"><?= get_sub_field('title') ?></p>
                                                <p class="text-white fs-14"><?= get_sub_field('description') ?></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                        <?php endwhile;
                        endif;
                        ?>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="serviceList bg-dark-grey pt-6 pt-md-7">
        <div class="container">
            <?php if (!empty(get_field('service_listing')['title'])) : ?>
                <div class="col-xl-8 mx-auto">
                    <p class="text-white highlight-primary text-white fs-60 text-center fw-800 lh-1 text-capitalize"><?= get_field('service_listing')['title'] ?></p>

                    <?php if (!empty(get_field('service_listing')['description'])) : ?>
                        <article class="fs-14 text-white lh-1_67 text-center description pt-4">
                            <?= get_field('service_listing')['description'] ?>
                        </article>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="col-md-8 col-lg-6 col-xl-4 mx-auto pt-4">
                <div class="row gx-3">
                    <div class="col-6">
                        <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.4656 11.412L10.8649 10.1797C10.5947 10.0508 10.2921 10.0209 10.0043 10.0948C9.71653 10.1687 9.45978 10.3421 9.27414 10.5881L8.52467 11.5876C7.29596 10.7466 6.25001 9.63507 5.45695 8.3276L6.39402 7.52818C6.62436 7.33022 6.78683 7.05653 6.85608 6.74977C6.92534 6.44302 6.89749 6.12044 6.77689 5.83233L5.62829 3.05119C5.49943 2.7415 5.27164 2.49071 4.98553 2.34354C4.69942 2.19638 4.3736 2.1624 4.06619 2.24768L1.8647 2.86026C1.54567 2.94883 1.26844 3.15973 1.08603 3.45262C0.903619 3.74552 0.828823 4.09986 0.875949 4.44789C1.28619 7.485 2.60752 10.2987 4.64217 12.4679C6.67682 14.6371 9.31536 16.0451 12.1629 16.4811C12.4892 16.5304 12.8211 16.4497 13.0952 16.2544C13.3692 16.059 13.5662 15.7628 13.6484 15.4224L14.2227 13.0741C14.3026 12.7463 14.2702 12.3988 14.1314 12.0942C13.9927 11.7895 13.7566 11.5476 13.4656 11.412Z" fill="#fff" />
                                <path d="M10.4342 8.32757C10.4342 8.59835 10.5351 8.85804 10.7146 9.04951C10.8941 9.24098 11.1376 9.34855 11.3914 9.34855C11.6453 9.34855 11.8887 9.24098 12.0682 9.04951C12.2477 8.85804 12.3486 8.59835 12.3486 8.32757C12.3486 7.24445 11.9452 6.20569 11.2272 5.4398C10.5092 4.67392 9.53534 4.24365 8.51991 4.24365C8.26605 4.24365 8.0226 4.35122 7.84309 4.54269C7.66359 4.73416 7.56274 4.99385 7.56274 5.26463C7.56274 5.53541 7.66359 5.7951 7.84309 5.98657C8.0226 6.17804 8.26605 6.28561 8.51991 6.28561C9.02762 6.28561 9.51454 6.50074 9.87355 6.88368C10.2326 7.26663 10.4342 7.78601 10.4342 8.32757Z" fill="#fff" />
                                <path d="M8.51991 0.159668C8.26606 0.159668 8.0226 0.267235 7.84309 0.458706C7.66359 0.650176 7.56274 0.909866 7.56274 1.18065C7.56274 1.45143 7.66359 1.71112 7.84309 1.90259C8.0226 2.09406 8.26606 2.20163 8.51991 2.20163C10.0426 2.20325 11.5025 2.84917 12.5792 3.99764C13.6558 5.14611 14.2614 6.70331 14.2629 8.3275C14.2629 8.59828 14.3638 8.85797 14.5433 9.04944C14.7228 9.24091 14.9662 9.34848 15.2201 9.34848C15.4739 9.34848 15.7174 9.24091 15.8969 9.04944C16.0764 8.85797 16.1773 8.59828 16.1773 8.3275C16.175 6.162 15.3675 4.08589 13.932 2.55466C12.4964 1.02342 10.5501 0.1621 8.51991 0.159668Z" fill="#fff" />
                            </svg>

                            <p class="ps-2"><?= get_field('general', 'options')['phone_number'] ?></p>
                        </a>
                    </div>
                    <?php if (!empty(get_field('general', 'options')['contact_us_link']['url'])) : ?>
                        <div class="col-6">
                            <a href="<?= get_field('general', 'options')['contact_us_link']['url'] ?>" target="<?= get_field('general', 'options')['contact_us_link']['target'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.3642 10.9267C10.052 11.1071 9.70201 11.2016 9.34634 11.2016C8.99066 11.2016 8.64068 11.1071 8.32846 10.9267L0.847046 6.60522V12.7012C0.847046 13.4969 1.14556 14.2599 1.67691 14.8225C2.20826 15.3852 2.92893 15.7012 3.68038 15.7012H15.0137C15.7652 15.7012 16.4858 15.3852 17.0172 14.8225C17.5485 14.2599 17.847 13.4969 17.847 12.7012V6.60522L10.3642 10.9267Z" fill="#fff" />
                                    <path d="M9.34705 8.95117C9.22874 8.95109 9.11234 8.91963 9.00846 8.85967L1.2168 4.35967C1.10496 4.29523 1.01159 4.20006 0.946525 4.08418C0.881457 3.9683 0.847092 3.83599 0.847046 3.70117C0.847046 2.90552 1.14556 2.14246 1.67691 1.57985C2.20826 1.01724 2.92893 0.701172 3.68038 0.701172H15.0137C15.7652 0.701172 16.4858 1.01724 17.0172 1.57985C17.5485 2.14246 17.847 2.90552 17.847 3.70117C17.8471 3.83584 17.813 3.96804 17.7482 4.08391C17.6834 4.19978 17.5903 4.29503 17.4787 4.35967L9.68705 8.85967C9.58275 8.91988 9.46583 8.95134 9.34705 8.95117Z" fill="#fff" />
                                </svg>

                                <p class="ps-2"><?= !empty(get_field('general', 'options')['book_online_link']['title']) ? get_field('general', 'options')['contact_us_link']['title'] : "Contact Us" ?></p>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (have_rows('service_listing_slider')) : ?>
                <div id="servicesListingSlider" class="mt-7">
                    <?php while (have_rows('service_listing_slider')) : the_row(); ?>
                        <div>
                            <article class="serviceCard">
                                <img class="h-100 w-100 object-fit-cover" src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">

                                <div class="inner d-flex justify-content-end flex-column align-items-center">
                                    <p class="title d-flex justify-content-center align-items-center border border-white rounded-pill px-4 py-2 <?= strlen(get_sub_field('title')) > 16 ? 'fs-16' : 'fs-24' ?> fw-600 text-center lh-1"><?= get_sub_field('title') ?></p>

                                    <p class="content text-center fs-14">
                                        <?= get_sub_field('description') ?>
                                    </p>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

        <img class="w-100 mt-5" src="<?= get_template_directory_uri() ?>/assets/images/icons/reverse-chevron-white.png" alt="">
    </section>

    <?= get_template_part('parts/section', 'serviceCta'); ?>

    <?php $about = get_field('about'); ?>
    <?php if (!empty($about['title'])) : ?>
        <section class="bg-lighter position-relative pt-5 pt-md-7">
            <img class="position-absolute bottom-0 start-0 h-100 d-none d-md-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-about.png" alt="">

            <div class="container position-relative pb-5 pb-md-0">
                <div class="row align-items-center gy-5 gx-xl-7">
                    <div class="col-lg-6">
                        <?php if (!empty($about['image']['url'])) : ?>
                            <div class="h-100 rounded-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $about['image']['url'] ?>" alt="<?= $about['image']['alt'] ?>" />
                            </div>
                        <?php else : ?>
                            <div class="bg-light py-7 d-flex justify-content-center align-items-center h-100 rounded-20">
                                <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M95.0295 0.355713H19.4684C14.4584 0.355713 9.65357 2.34593 6.11096 5.88855C2.56834 9.43116 0.578125 14.236 0.578125 19.246L0.578125 94.8071C0.578125 99.8171 2.56834 104.622 6.11096 108.165C9.65357 111.707 14.4584 113.697 19.4684 113.697H95.0295C100.039 113.697 104.844 111.707 108.387 108.165C111.93 104.622 113.92 99.8171 113.92 94.8071V19.246C113.92 14.236 111.93 9.43116 108.387 5.88855C104.844 2.34593 100.039 0.355713 95.0295 0.355713ZM38.3587 19.246C40.2267 19.246 42.0529 19.7999 43.6061 20.8378C45.1593 21.8756 46.37 23.3507 47.0848 25.0766C47.7997 26.8025 47.9868 28.7016 47.6223 30.5338C47.2579 32.366 46.3583 34.0489 45.0374 35.3698C43.7165 36.6908 42.0335 37.5903 40.2013 37.9548C38.3691 38.3192 36.47 38.1322 34.7442 37.4173C33.0183 36.7024 31.5432 35.4918 30.5053 33.9386C29.4675 32.3853 28.9135 30.5592 28.9135 28.6911C28.9135 26.1861 29.9086 23.7837 31.6799 22.0124C33.4513 20.2411 35.8537 19.246 38.3587 19.246ZM91.5442 85.3619H25.9855C25.5004 85.3617 25.0272 85.2121 24.6301 84.9334C24.233 84.6547 23.9314 84.2605 23.7663 83.8044C23.6012 83.3482 23.5806 82.8523 23.7073 82.384C23.8339 81.9158 24.1018 81.4979 24.4743 81.1872L73.6457 40.2142C73.9325 39.9761 74.2715 39.8093 74.6351 39.7274C74.9987 39.6455 75.3765 39.6509 75.7376 39.743C76.0987 39.8351 76.4329 40.0114 76.7129 40.2575C76.9928 40.5035 77.2105 40.8124 77.3482 41.1587L93.7355 82.1223C93.8791 82.4805 93.9327 82.8685 93.8915 83.2523C93.8504 83.6361 93.7158 84.0039 93.4996 84.3236C93.2833 84.6433 92.992 84.9051 92.6511 85.0861C92.3102 85.2671 91.9302 85.3618 91.5442 85.3619Z" fill="white" />
                                </svg>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-lg-6">
                        <p class="text-dark-grey fw-800 fs-60 lh-0_9 highlight-primary text-capitalize"><?= $about['title'] ?></p>

                        <?php if (!empty($about['description'])) : ?>
                            <article class="description lh-1_67 text-dark fw-500 py-4">
                                <?= $about['description'] ?>
                            </article>
                        <?php endif; ?>

                        <div class="col-xl-9">
                            <div class="row gx-3">
                                <div class="col-6">
                                    <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                        Call Us
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
    <?php endif; ?>

    <?php if (have_rows('faqs')) : ?>
        <section class="faqsWrapper">
            <div class="faqs py-6">
                <div class="container">
                    <p class="text-light-grey highlight-white fs-60 fw-800 text-center">Our <span>Frequently Asked Questions</span></p>

                    <div class="accordion-container mt-5 mt-md-7">
                        <?php $index = 1;
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
                        endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>