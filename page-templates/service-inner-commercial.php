<?php
/*
* Template Name: Service Inner Commercial
* The Service Inner Commercial Page Template
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="serviceInnerCommercialPage">
    <?php $introduction = get_field('introduction'); ?>
    <?php if (!empty($introduction['title'])) : ?>
        <section class="introduction bg-lighter position-relative">
            <img class="position-absolute bottom-0 start-0 h-100 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-introduction.png" alt="">

            <div class="container position-relative">
                <div class="row align-items-center gx-xl-7">
                    <?php if (!empty($introduction['image']['url'])) : ?>
                        <div class="col-12 col-xl-6 order-2 order-xl-1">
                            <div class="h-100 rounded-20 overflow-hidden">
                                <img class="h-100 w-100 object-fit-cover" src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>" />
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-12 col-xl-6 py-5 py-md-7 order-1 order-xl-2">
                        <p class="text-dark-grey fw-800 fs-60 lh-0_9 highlight-primary text-capitalize"><?= $introduction['title'] ?></p>

                        <?php if (!empty($introduction['description'])) : ?>
                            <article class="description lh-1_67 text-dark fw-500 py-4">
                                <?= $introduction['description'] ?>
                            </article>
                        <?php endif; ?>

                        <div class="col-md-6 col-xl-9">
                            <div class="row gx-3">
                                <div class="col-6">
                                    <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                        Call Now
                                    </a>
                                </div>

                                <?php
                                if (!empty($introduction['button']['url'])) : ?>
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

    <?php if (have_rows('cta')) : ?>
        <div class="container py-4">
            <?php while (have_rows('cta')) : the_row();
            ?>
                <section class="bg-primary rounded-40 px-4 position-relative mt-5">
                    <img class="position-absolute h-100 start-0 top-0 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/quality-service-bg.png" alt="plumber">
                    <img class="position-absolute w-100 start-0 bottom-0 d-md-none" src="<?= get_template_directory_uri() ?>/assets/images/icons/mobile-cta-bg.png" alt="plumber">

                    <div class="row position-relative">
                        <?php if (!empty(get_sub_field('image')['url'])) : ?>
                            <div class="col-xl-6 text-center order-2 order-xl-1">
                                <div class="h-100 d-flex align-items-end">
                                    <img src="<?= get_sub_field('image')['url'] ?>" alt="<?= get_sub_field('image')['alt'] ?>">
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="col-xl-6 col-xxl-5 py-5 order-1 order-xl-2">
                            <div class="h-100 d-flex align-items-center">
                                <div>
                                    <p class="text-white fs-54 fw-700 text-capitalize lh-0_9 text-center text-xl-start"><?= get_sub_field('title') ?></p>

                                    <article class="lh-1_67 description pt-4 text-center text-xl-start"><?= get_sub_field('description') ?></article>

                                    <div class="row justify-content-center justify-content-xl-start align-items-center gx-2">
                                        <div class="col-auto">
                                            <a href="mailto:<?= get_field('general', 'options')['email_address'] ?>" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <?php $about = get_field('about');
    if (!empty($about['title'])) : ?>
        <section class="about bg-dark position-relative mt-8">
            <img class="position-absolute bottom-0 start-0 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="about">
            <img class="position-absolute bottom-0 end-0 h-100 d-none d-xxl-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/about.png" alt="about">

            <div class="container position-relative">
                <div class="row justify-content-lg-center align-items-xl-end">
                    <div class="col-12 col-lg-10 col-xl-6 py-5 py-md-8">
                        <p class="fs-70 lh-0_9 text-white fw-800 highlight-primary text-capitalize text-center text-md-start"><?= $about['title'] ?></p>

                        <?php if (!empty($about['description'])) : ?>
                            <article class="description text-white lh-1_5 py-4 col-xl-11 text-center text-md-start">
                                <?= $about['description'] ?>
                            </article>
                        <?php endif; ?>

                        <div class="col-xl-9">
                            <div class="row gx-3">
                                <div class="col-6">
                                    <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-white w-100 rounded-pill text-dark fs-18 fw-600">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.4656 11.412L10.8649 10.1797C10.5947 10.0508 10.2921 10.0209 10.0043 10.0948C9.71653 10.1687 9.45978 10.3421 9.27414 10.5881L8.52467 11.5876C7.29596 10.7466 6.25001 9.63507 5.45695 8.3276L6.39402 7.52818C6.62436 7.33022 6.78683 7.05653 6.85608 6.74977C6.92534 6.44302 6.89749 6.12044 6.77689 5.83233L5.62829 3.05119C5.49943 2.7415 5.27164 2.49071 4.98553 2.34354C4.69942 2.19638 4.3736 2.1624 4.06619 2.24768L1.8647 2.86026C1.54567 2.94883 1.26844 3.15973 1.08603 3.45262C0.903619 3.74552 0.828823 4.09986 0.875949 4.44789C1.28619 7.485 2.60752 10.2987 4.64217 12.4679C6.67682 14.6371 9.31536 16.0451 12.1629 16.4811C12.4892 16.5304 12.8211 16.4497 13.0952 16.2544C13.3692 16.059 13.5662 15.7628 13.6484 15.4224L14.2227 13.0741C14.3026 12.7463 14.2702 12.3988 14.1314 12.0942C13.9927 11.7895 13.7566 11.5476 13.4656 11.412Z" fill="#1E1E23" />
                                            <path d="M10.4342 8.32757C10.4342 8.59835 10.5351 8.85804 10.7146 9.04951C10.8941 9.24098 11.1376 9.34855 11.3914 9.34855C11.6453 9.34855 11.8887 9.24098 12.0682 9.04951C12.2477 8.85804 12.3486 8.59835 12.3486 8.32757C12.3486 7.24445 11.9452 6.20569 11.2272 5.4398C10.5092 4.67392 9.53534 4.24365 8.51991 4.24365C8.26605 4.24365 8.0226 4.35122 7.84309 4.54269C7.66359 4.73416 7.56274 4.99385 7.56274 5.26463C7.56274 5.53541 7.66359 5.7951 7.84309 5.98657C8.0226 6.17804 8.26605 6.28561 8.51991 6.28561C9.02762 6.28561 9.51454 6.50074 9.87355 6.88368C10.2326 7.26663 10.4342 7.78601 10.4342 8.32757Z" fill="#1E1E23" />
                                            <path d="M8.51991 0.159668C8.26606 0.159668 8.0226 0.267235 7.84309 0.458706C7.66359 0.650176 7.56274 0.909866 7.56274 1.18065C7.56274 1.45143 7.66359 1.71112 7.84309 1.90259C8.0226 2.09406 8.26606 2.20163 8.51991 2.20163C10.0426 2.20325 11.5025 2.84917 12.5792 3.99764C13.6558 5.14611 14.2614 6.70331 14.2629 8.3275C14.2629 8.59828 14.3638 8.85797 14.5433 9.04944C14.7228 9.24091 14.9662 9.34848 15.2201 9.34848C15.4739 9.34848 15.7174 9.24091 15.8969 9.04944C16.0764 8.85797 16.1773 8.59828 16.1773 8.3275C16.175 6.162 15.3675 4.08589 13.932 2.55466C12.4964 1.02342 10.5501 0.1621 8.51991 0.159668Z" fill="#1E1E23" />
                                        </svg>

                                        <p class="ps-2"><?= get_field('general', 'options')['phone_number'] ?></p>
                                    </a>
                                </div>
                                <?php if (!empty(get_field('general', 'options')['contact_us_link']['url'])) : ?>
                                    <div class="col-6">
                                        <a href="<?= get_field('general', 'options')['contact_us_link']['url'] ?>" target="<?= get_field('general', 'options')['contact_us_link']['target'] ?>" class="btn btn-white w-100 rounded-pill text-dark fs-18 fw-600">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.3642 10.9267C10.052 11.1071 9.70201 11.2016 9.34634 11.2016C8.99066 11.2016 8.64068 11.1071 8.32846 10.9267L0.847046 6.60522V12.7012C0.847046 13.4969 1.14556 14.2599 1.67691 14.8225C2.20826 15.3852 2.92893 15.7012 3.68038 15.7012H15.0137C15.7652 15.7012 16.4858 15.3852 17.0172 14.8225C17.5485 14.2599 17.847 13.4969 17.847 12.7012V6.60522L10.3642 10.9267Z" fill="#1E1E23" />
                                                <path d="M9.34705 8.95117C9.22874 8.95109 9.11234 8.91963 9.00846 8.85967L1.2168 4.35967C1.10496 4.29523 1.01159 4.20006 0.946525 4.08418C0.881457 3.9683 0.847092 3.83599 0.847046 3.70117C0.847046 2.90552 1.14556 2.14246 1.67691 1.57985C2.20826 1.01724 2.92893 0.701172 3.68038 0.701172H15.0137C15.7652 0.701172 16.4858 1.01724 17.0172 1.57985C17.5485 2.14246 17.847 2.90552 17.847 3.70117C17.8471 3.83584 17.813 3.96804 17.7482 4.08391C17.6834 4.19978 17.5903 4.29503 17.4787 4.35967L9.68705 8.85967C9.58275 8.91988 9.46583 8.95134 9.34705 8.95117Z" fill="#1E1E23" />
                                            </svg>

                                            <p class="ps-2"><?= !empty(get_field('general', 'options')['book_online_link']['title']) ? get_field('general', 'options')['contact_us_link']['title'] : "Contact Us" ?></p>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($about['image']['url'])) : ?>
                        <div class="col-12 col-lg-6 text-center">
                            <img src="<?= $about['image']['url'] ?>" alt="<?= $about['image']['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('service')) :
        $index = 1;
    ?>
        <section class="cta pt-5">
            <div class="container">
                <div class="row gy-5">
                    <?php while (have_rows('service')) : the_row(); ?>
                        <div class="col-12 col-xl-6">
                            <div class="ctaCard h-100">
                                <?php if ($index % 2) : ?>
                                    <img class="position-absolute bottom-0 start-0 d-none d-md-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="<?= bloginfo('name') ?>">
                                <?php else : ?>
                                    <img class="position-absolute top-0 end-0 rotate-180 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="<?= bloginfo('name') ?>">
                                <?php endif; ?>

                                <p class="fs-70 fw-700 lh-1 position-relative"><?= get_sub_field('title') ?></p>

                                <article class="description lh-1_67 pt-4 py-md-5 text-lighter position-relative">
                                    <?= get_sub_field('description') ?>
                                </article>

                                <div class="row gx-2 justify-content-center align-items-center position-relative">
                                    <div class="col-auto">
                                        <a href="mailto:<?= get_field('general', 'options')['email_address'] ?>" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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
                    <?php
                        $index++;
                    endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php $join_us = get_field('join_us');
    if (!empty($join_us['hero_title'])) : ?>
        <div class="container">
            <section class="bg-dark-grey rounded-20 rounded-md-40 px-3 py-4 p-md-5 position-relative mt-5 mb-8">
                <img class="position-absolute h-100 top-0 end-0 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/arrow-service.png" alt="<?= bloginfo('name') ?>">

                <div class="row position-relative gy-4">
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="h-100 d-flex flex-column justify-content-between">
                            <p class="highlight-primary text-white fs-60 fw-800 lh-0_9 text-center text-lg-start text-capitalize"><?= $join_us['hero_title'] ?></p>
    
                            <div class="row justify-content-center justify-content-xl-start align-items-center gx-2 pt-4">
                                <div class="col-auto">
                                    <a href="mailto:<?= get_field('general', 'options')['email_address'] ?>" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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

                    <div class="col-12 col-lg-8 col-xl-9">
                        <article class="bg-light-grey rounded-8 py-4 px-3 px-md-5 h-100">
                            <?php if (!empty($join_us['inner_title'])) : ?>
                                <p class="text-white fs-40 lh-1 fw-800 highlight-primary"><?= $join_us['inner_title'] ?></p>
                            <?php endif; ?>

                            <?php if (!empty($join_us['description'])) : ?>
                                <div class="description text-white fs-14 mt-4">
                                    <?= $join_us['description']; ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    </div>
                </div>
            </section>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>