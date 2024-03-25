<footer class="bg-dark">
    <section class="footer-top">
        <div class="container">
            <div class="row justify-content-center justify-content-xl-between align-items-center gy-4">
                <div class="col-12 col-md-auto">
                    <p class="text-capitalize text-white highlight-primary fw-800 fs-20 lh-1 d-none d-md-block">We Solve your plumbing <span>issue first time around</span></p>

                    <p class="text-capitalize text-white text-center text-md-start highlight-primary fw-800 fs-60 lh-1 d-md-none">We Solve your plumbing <span>issue first time around</span></p>
                </div>

                <div class="col-12 col-xl-7">
                    <div class="row justify-content-center justify-content-lg-between gy-4 align-items-center">
                        <div class="col-auto">
                            <div class="d-flex align-items-center bg-primary rounded-pill p-2">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/icons/tick.gif" style="height: 35px; width: 35px;" alt="">

                                <p class="text-white fw-700 ps-3 pe-4">5 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0721 4.53659L8.53214 4.02259L6.94814 0.814586C6.90226 0.735944 6.83657 0.670701 6.75761 0.625357C6.67865 0.580013 6.58919 0.556152 6.49815 0.556152C6.4071 0.556152 6.31764 0.580013 6.23868 0.625357C6.15972 0.670701 6.09403 0.735944 6.04814 0.814586L4.46814 4.02259L0.928145 4.53659C0.835795 4.55 0.749041 4.58898 0.677698 4.64914C0.606354 4.70929 0.553268 4.78821 0.524446 4.87697C0.495624 4.96572 0.492215 5.06077 0.514606 5.15137C0.536997 5.24196 0.584293 5.32448 0.651145 5.38959L3.21315 7.88959L2.60715 11.4156C2.59132 11.5076 2.60158 11.6022 2.63676 11.6887C2.67194 11.7752 2.73063 11.8501 2.80619 11.9049C2.88175 11.9598 2.97116 11.9924 3.06429 11.999C3.15742 12.0057 3.25056 11.9861 3.33314 11.9426L6.50014 10.2746L9.66714 11.9396C9.73856 11.9775 9.81828 11.9971 9.89915 11.9966C9.97201 11.9967 10.044 11.981 10.1102 11.9504C10.1763 11.9198 10.2349 11.8751 10.282 11.8195C10.3291 11.7639 10.3634 11.6986 10.3826 11.6283C10.4018 11.558 10.4054 11.4844 10.3931 11.4126L9.78714 7.88659L12.3491 5.38659C12.416 5.32148 12.4633 5.23896 12.4857 5.14837C12.5081 5.05777 12.5047 4.96272 12.4758 4.87397C12.447 4.78521 12.3939 4.70629 12.3226 4.64614C12.2512 4.58598 12.1645 4.547 12.0721 4.53359V4.53659Z" fill="#ffffff" />
                                    </svg> On Call Plumbers</p>
                            </div>
                        </div>

                        <?php if (have_rows('socials', 'options')) :
                            while (have_rows('socials', 'options')) : the_row();
                        ?>
                                <div class="col-auto">
                                    <a href="<?= get_sub_field('link')['url'] ?>" target="<?= get_sub_field('link')['target'] ?>" class="d-flex gap-2 gap-lg-3">
                                        <img src="<?= get_sub_field('icon_2')['url'] ?>" alt="<?= get_sub_field('icon_2')['alt'] ?>">

                                        <p class="text-white fw-600">@kalcoplumbing</p>
                                    </a>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-middle py-5">
        <div class="container">
            <div class="row justify-content-lg-center justify-content-xl-between gy-5">
                <div class="col-6 col-md-3 col-xl-2 order-2 order-lg-1">
                    <p class="text-white fs-36 fw-800 pb-4">Quick Links</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Primary Menu',
                        'item_class' => 'nav-item',
                        'link_class' => 'text-bright fs-16',
                        'menu_class' => 'ps-0 d-flex flex-column gap-3'
                    )); ?>
                </div>

                <div class="col-12 col-md-6 col-xl-5 order-4 order-lg-2">
                    <p class="text-white fs-36 fw-800 pb-4">Services</p>
                    <?php wp_nav_menu(array(
                        'menu' => 'Services',
                        'item_class' => 'nav-item py-2',
                        'link_class' => 'text-bright fs-16',
                        'menu_class' => 'ps-0 footer column-count-2'
                    )); ?>
                </div>

                <div class="col-6 col-md-3 col-xl-2 order-3">
                    <p class="text-white fs-36 fw-800 pb-4">Support</p>

                    <?php wp_nav_menu(array(
                        'menu' => 'Support Menu',
                        'item_class' => 'nav-item',
                        'link_class' => 'text-bright fs-16',
                        'menu_class' => 'ps-0 d-flex flex-column gap-3'
                    )); ?>
                </div>

                <div class="col-12 col-lg-7 col-xl-2 order-1 order-lg-4">
                    <div class="row g-3">
                        <div class="col-6 col-xl-12">
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
                            <div class="col-6 col-xl-12">
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
        </div>
    </section>

    <section class="footer-bottom py-3 py-md-4 py-lg-6">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-4">
                <div class="col-12 col-md-auto">
                    <p class="text-bright fs-14 text-center">Copyright <?= date('Y') ?> <span class="px-2 px-md-4 text-white">/</span> <?= bloginfo('name') ?> <span class="px-2 px-md-4 text-white">/</span> All Rights Reserved</p>
                </div>

                <div class="col-auto">
                    <a href="https://www.aiims.com.au/like-our-work/"><img src="<?= get_template_directory_uri() ?>/assets/images/logo/aiims-logo.png" alt="Aiims Group"></a>
                </div>
            </div>
        </div>
    </section>
</footer>

<?= get_field('custom_code', 'options')['footer']; ?>
<?php wp_footer(); ?>

</body>

</html>