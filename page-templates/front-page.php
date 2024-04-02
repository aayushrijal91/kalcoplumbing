<?php
/*
* Template Name: Home
* The Home page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="homepage" id="contactForm">
    <section class="partners py-4 py-md-5 bg-lighter">
        <div class="container">
            <div id="partnersSlider">
                <?php foreach (get_field('partners', 'options') as $partner) : ?>
                    <div><img src="<?= $partner['url'] ?>" alt=""></div>
                <?php endforeach;  ?>
            </div>
        </div>
    </section>

    <section class="contactFormWrapper pb-5 pb-md-7 pb-lg-10">
        <?= get_template_part('parts/section', 'contactForm'); ?>
    </section>

    <?php $about = get_field('about'); ?>
    <section class="about bg-primary position-relative">
        <img class="position-absolute bottom-0 start-0" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="about">
        <img class="position-absolute bottom-0 d-none d-xl-block end-0 h-100" src="<?= get_template_directory_uri() ?>/assets/images/lib/about.png" alt="about">

        <div class="container position-relative">
            <div class="row align-items-lg-end ">
                <div class="col-12 col-lg-6 py-5 py-md-8">
                    <?php if (!empty($about['title'])) : ?>
                        <p class="fs-70 lh-0_9 text-dark-grey fw-800 highlight-white"><?= $about['title'] ?></p>
                    <?php endif; ?>

                    <?php if (!empty($about['description'])) : ?>
                        <article class="description text-secondary lh-1_5 py-4 col-xl-11">
                            <?= $about['description'] ?>
                        </article>
                    <?php endif; ?>

                    <div class="col-xl-9">
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
                </div>

                <div class="col-auto col-lg-6 col-xl-auto">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/lib/plumber.png" class="mt-xl-n4" alt="<?= bloginfo('name') ?>">
                </div>
            </div>
        </div>
    </section>

    <div class="container pt-5">
        <?php if (have_rows('plumbing_service')) :
            while (have_rows('plumbing_service')) : the_row(); ?>
                <section class="bg-primary rounded-40 px-4 position-relative mt-4 mt-md-5">
                    <img class="position-absolute h-100 start-0 top-0 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/quality-service-bg.png" alt="plumber">

                    <div class="row align-items-end position-relative">
                        <div class="col-12 col-lg-6 text-center order-2 order-lg-1">
                            <img src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                        </div>

                        <div class="col-lg-6 col-xl-5 py-5 py-xl-9 order-1 order-lg-2">
                            <p class="text-white text-center text-lg-start fs-54 fw-700 text-capitalize lh-0_9"><?= get_sub_field('title') ?></p>

                            <article class="lh-1_67 description pt-4 text-center text-lg-start"><?= get_sub_field('description') ?></article>

                            <div class="row justify-content-center justify-content-lg-start align-items-center gx-2">
                                <div class="col-auto">
                                    <a href="#contactForm" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
                                        <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.1707 10.0286C8.87108 10.2007 8.53522 10.2909 8.1939 10.2909C7.85258 10.2909 7.51672 10.2007 7.2171 10.0286L0.0375977 5.90576V11.7215C0.0375977 12.4806 0.324062 13.2086 0.833972 13.7454C1.34388 14.2821 2.03547 14.5836 2.75659 14.5836H13.6326C14.3537 14.5836 15.0453 14.2821 15.5552 13.7454C16.0651 13.2086 16.3516 12.4806 16.3516 11.7215V5.90576L9.1707 10.0286Z" fill="white" />
                                            <path d="M8.19458 8.14372C8.08104 8.14364 7.96934 8.11363 7.86966 8.05643L0.392426 3.76328C0.285102 3.7018 0.195504 3.611 0.133062 3.50045C0.0706198 3.38989 0.0376416 3.26367 0.0375977 3.13505C0.0375977 2.37597 0.324062 1.64799 0.833972 1.11124C1.34388 0.574491 2.03547 0.272949 2.75659 0.272949H13.6326C14.3537 0.272949 15.0453 0.574491 15.5552 1.11124C16.0651 1.64799 16.3516 2.37597 16.3516 3.13505C16.3516 3.26352 16.3189 3.38965 16.2567 3.50019C16.1945 3.61073 16.1052 3.70161 15.9981 3.76328L8.52086 8.05643C8.42077 8.11386 8.30857 8.14388 8.19458 8.14372Z" fill="white" />
                                        </svg>
                                    </a>
                                </div>

                                <div class="col-auto">
                                    <a class="btn btn-secondary rounded-pill text-white fw-600 px-4 gap-2" href="tel:<?= get_field('general', 'options')['phone_number'] ?>">
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
                </section>
        <?php endwhile;
        endif; ?>
    </div>

    <div class="container">
        <section class="bg-dark-grey rounded-40 py-5 px-4 p-md-5 position-relative mt-4 mt-md-7 overflow-hidden">
            <img class="position-absolute h-100 top-0 end-0 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/arrow-service.png" alt="<?= bloginfo('name') ?>">

            <?php $serviceCta = get_field('service_cta'); ?>
            <div class="row align-items-center position-relative gy-5">
                <?php if (!empty($serviceCta['title'])) : ?>
                    <div class="col-12 col-lg-4 col-xl-3">
                        <p class="highlight-primary text-white text-center text-lg-start fs-48 fw-800 lh-0_9"><?= $serviceCta['title'] ?></p>
                    </div>
                <?php endif; ?>

                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="row gx-3 gy-4">
                        <?php
                        if (have_rows('service_cta')) :
                            while (have_rows('service_cta')) : the_row();
                                if (have_rows('list')) :
                                    while (have_rows('list')) : the_row();
                        ?>
                                        <div class="col-12 col-md-6 col-xl-3">
                                            <article class="bg-light-grey rounded-8 py-4 px-3 h-100 d-flex flex-column justify-content-between">
                                                <div>
                                                    <div class="bg-primary d-flex justify-content-center align-items-center rounded-circle overflow-hidden" style="width: 35px; height: 35px;">
                                                        <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['url'] ?>">
                                                    </div>

                                                    <div class="description pt-4">
                                                        <p class="text-white fs-14 fw-800"><?= get_sub_field('title') ?></p>
                                                        <p class="text-white fs-14"><?= get_sub_field('description') ?></p>
                                                    </div>
                                                </div>

                                                <a href="<?= get_sub_field('page_link') ?>" class="text-primary text-decoration-underline fw-700">Get Started ></a>
                                            </article>
                                        </div>
                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $transaction = get_field('transaction');
    if (!empty($transaction['title'])) : ?>
        <section class="transaction py-6">
            <div class="container">
                <p class="text-dark highlight-primary fs-54 text-center fw-800 lh-1"><?= $transaction['title'] ?></p>

                <?php if (!empty($transaction['description'])) : ?>
                    <article class="description text-secondary text-center text-md-start lh-1_67 pt-4">
                        <?= $transaction['description'] ?>
                    </article>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="serviceList bg-dark-grey py-5 py-md-7">
        <?php $service_list = get_field('service_list'); ?>
        <div class="container">
            <div class="col-xl-8 mx-auto">
                <?php if (!empty($service_list['title'])) : ?>
                    <p class="text-white highlight-primary text-white fs-60 text-center fw-800 lh-1 text-capitalize"><?= $service_list['title'] ?></p>
                <?php endif; ?>

                <?php if (!empty($service_list['description'])) : ?>
                    <article class="fs-14 text-white lh-1_67 text-center description py-3 py-md-4">
                        <?= $service_list['description'] ?>
                    </article>
                <?php endif; ?>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 mx-auto">
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

            <?= get_template_part('parts/section', 'serviceListing'); ?>
        </div>
    </section>

    <?= get_template_part('parts/section', 'extraMile'); ?>

    <section class="faqs py-6">
        <div class="container">
            <p class="text-light-grey highlight-primary fs-60 fw-800 text-center">Our <span>Frequently Asked Questions</span></p>

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
    </section>

    <section class="testimonials pb-7 py-md-9">
        <?php $clients = get_field('clients'); ?>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-xxl-11">
                    <div class="row align-items-center gy-5">
                        <div class="col-12 col-xl-4">
                            <?php if (!empty($clients['title'])) : ?>
                                <p class="text-center text-lg-start text-light-grey highlight-primary fs-60 fw-800 lh-1"><?= $clients['title'] ?></p>
                            <?php endif; ?>

                            <?php if (!empty($clients['description'])) : ?>
                                <article class="description text-center text-lg-start text-dark lh-1_67 fw-500 pt-4 pb-3">
                                    <?= $clients['description'] ?>
                                </article>
                            <?php endif; ?>

                            <div class="col-lg-6 col-xl-10">
                                <div class="row gy-5 gx-3">
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
                        </div>

                        <div class="col-12 col-xl-8">
                            <div id="testimonialSlider">
                                <?php if (have_rows('testimonials')) :
                                    while (have_rows('testimonials')) : the_row();
                                        $initials = strtoupper(preg_replace('/\b(\w)\w*\s*/', '$1', get_sub_field('username')));
                                ?>
                                        <div>
                                            <div class="row h-100">
                                                <div class="col-auto">
                                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M32 16.262L32 2.5477L18.2857 2.5477L18.2857 16.262L27.4285 16.262C27.4285 21.3033 23.327 25.4049 18.2857 25.4049L18.2857 29.9763C25.8482 29.9763 32 23.8245 32 16.262Z" fill="#6BF9EB" />
                                                        <path d="M4.52223e-05 25.4046L4.48227e-05 29.9761C7.56257 29.9761 13.7144 23.8243 13.7144 16.2618L13.7144 2.54746L4.72206e-05 2.54746L4.60216e-05 16.2618L9.14289 16.2618C9.14289 21.303 5.04131 25.4046 4.52223e-05 25.4046Z" fill="#6BF9EB" />
                                                    </svg>
                                                </div>

                                                <div class="col d-flex flex-column justify-content-between">
                                                    <article class="text-dark lh-1_67 description"><?= get_sub_field('comment') ?></article>

                                                    <div class="row align-items-center gx-3 pt-5">
                                                        <div class="col-auto">
                                                            <p class="initials"><?= $initials ?></p>
                                                        </div>

                                                        <div class="col">
                                                            <p class="fs-16 text-black fw-600"><?= get_sub_field('username') ?></p>
                                                            <p class="fs-14 text-black">Customer</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<?php get_footer(); ?>