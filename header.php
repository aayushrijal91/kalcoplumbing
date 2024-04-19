<?php

/**
 * The template for displaying the header
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('name') ?> | Your trusted plumbing partner in Sydney">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>

    <?= get_field('custom_code', 'options')['head']; ?>
</head>

<body <?php body_class(); ?>>
    <?= get_field('custom_code', 'options')['body']; ?>
    <header>
        <nav class="bg-dark py-3">
            <div class="container">
                <div class="row gy-4 text-white align-items-center justify-content-center justify-content-md-between">
                    <div class="col-5 col-md-auto">
                        <a href="<?= home_url() ?>">
                            <img src="<?= get_field('general', 'options')['logo']['url'] ?>" alt="<?= get_field('general', 'options')['logo']['alt'] ?>">
                        </a>
                    </div>

                    <div class="col-7 d-md-none">
                        <div class="row gx-2 align-items-center">
                            <div class="col">
                                <a class="btn btn-primary rounded-pill text-white fw-600 px-2 gap-2 fs-14" href="tel:<?= get_field('general', 'options')['phone_number'] ?>">
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

                            <div class="col-auto">
                                <button id="toggleSlideOutMenu" class="btn border-none outline-none shadow-none p-0">
                                    <svg width="29" height="25" viewBox="0 0 29 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.5833 19.3335H2.41667C1.77573 19.3335 1.16104 19.5881 0.707825 20.0413C0.254612 20.4945 0 21.1092 0 21.7502C0 22.3911 0.254612 23.0058 0.707825 23.459C1.16104 23.9122 1.77573 24.1668 2.41667 24.1668H26.5833C27.2243 24.1668 27.839 23.9122 28.2922 23.459C28.7454 23.0058 29 22.3911 29 21.7502C29 21.1092 28.7454 20.4945 28.2922 20.0413C27.839 19.5881 27.2243 19.3335 26.5833 19.3335Z" fill="#40E0D0" />
                                        <path d="M26.5833 0H2.41667C1.77573 0 1.16104 0.254612 0.707825 0.707825C0.254612 1.16104 0 1.77573 0 2.41667C0 3.05761 0.254612 3.6723 0.707825 4.12551C1.16104 4.57872 1.77573 4.83333 2.41667 4.83333H26.5833C27.2243 4.83333 27.839 4.57872 28.2922 4.12551C28.7454 3.6723 29 3.05761 29 2.41667C29 1.77573 28.7454 1.16104 28.2922 0.707825C27.839 0.254612 27.2243 0 26.5833 0Z" fill="#40E0D0" />
                                        <path d="M26.5833 9.6665H2.41667C1.77573 9.6665 1.16104 9.92112 0.707825 10.3743C0.254612 10.8275 0 11.4422 0 12.0832C0 12.7241 0.254612 13.3388 0.707825 13.792C1.16104 14.2452 1.77573 14.4998 2.41667 14.4998H26.5833C27.2243 14.4998 27.839 14.2452 28.2922 13.792C28.7454 13.3388 29 12.7241 29 12.0832C29 11.4422 28.7454 10.8275 28.2922 10.3743C27.839 9.92112 27.2243 9.6665 26.5833 9.6665Z" fill="#40E0D0" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="slideOutMenu" class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <?php wp_nav_menu(array(
                                    'menu' => 'Primary Menu',
                                    'item_class' => 'nav-item',
                                    'link_class' => 'text-capitalize text-white fw-600 fs-14',
                                    'menu_class' => 'd-flex flex-column gap-3 ps-0'
                                )); ?>
                            </div>

                            <div class="col-8">
                                <?php wp_nav_menu(array(
                                    'menu' => 'Services',
                                    'item_class' => 'nav-item',
                                    'link_class' => 'text-capitalize text-white fw-600 fs-14',
                                    'menu_class' => 'd-flex flex-column gap-3 ps-0'
                                )); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto mb-n4 mb-md-0 d-lg-none d-xl-block">
                        <div class="d-flex align-items-center bg-primary rounded-pill p-2 mb-n3 mb-md-0">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icons/tick.gif" style="height: 35px; width: 35px;" alt="">

                            <p class="text-white fw-700 ps-3 pe-4">5 <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0721 4.53659L8.53214 4.02259L6.94814 0.814586C6.90226 0.735944 6.83657 0.670701 6.75761 0.625357C6.67865 0.580013 6.58919 0.556152 6.49815 0.556152C6.4071 0.556152 6.31764 0.580013 6.23868 0.625357C6.15972 0.670701 6.09403 0.735944 6.04814 0.814586L4.46814 4.02259L0.928145 4.53659C0.835795 4.55 0.749041 4.58898 0.677698 4.64914C0.606354 4.70929 0.553268 4.78821 0.524446 4.87697C0.495624 4.96572 0.492215 5.06077 0.514606 5.15137C0.536997 5.24196 0.584293 5.32448 0.651145 5.38959L3.21315 7.88959L2.60715 11.4156C2.59132 11.5076 2.60158 11.6022 2.63676 11.6887C2.67194 11.7752 2.73063 11.8501 2.80619 11.9049C2.88175 11.9598 2.97116 11.9924 3.06429 11.999C3.15742 12.0057 3.25056 11.9861 3.33314 11.9426L6.50014 10.2746L9.66714 11.9396C9.73856 11.9775 9.81828 11.9971 9.89915 11.9966C9.97201 11.9967 10.044 11.981 10.1102 11.9504C10.1763 11.9198 10.2349 11.8751 10.282 11.8195C10.3291 11.7639 10.3634 11.6986 10.3826 11.6283C10.4018 11.558 10.4054 11.4844 10.3931 11.4126L9.78714 7.88659L12.3491 5.38659C12.416 5.32148 12.4633 5.23896 12.4857 5.14837C12.5081 5.05777 12.5047 4.96272 12.4758 4.87397C12.447 4.78521 12.3939 4.70629 12.3226 4.64614C12.2512 4.58598 12.1645 4.547 12.0721 4.53359V4.53659Z" fill="#ffffff" />
                                </svg>
                                Plumbers</p>
                        </div>
                    </div>

                    <div class="col-auto d-none d-md-block">
                        <?php wp_nav_menu(array(
                            'menu' => 'Primary Menu',
                            'item_class' => 'nav-item py-3',
                            'link_class' => 'text-capitalize text-white fw-600 fs-16',
                            'menu_class' => 'd-flex flex-wrap gap-5 ps-0'
                        )); ?>
                    </div>

                    <div class="col-auto d-none d-md-block">
                        <div class="row align-items-center gx-2">
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

                            <div class="col-auto">
                                <div class="row align-items-center gx-3">
                                    <?php if (have_rows('socials', 'options')) :
                                        while (have_rows('socials', 'options')) : the_row();
                                    ?>
                                            <div class="col-auto">
                                                <a href="<?= get_sub_field('link')['url'] ?>">
                                                    <img src="<?= get_sub_field('icon')['url'] ?>" alt="<?= get_sub_field('icon')['alt'] ?>">
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
                </div>
            </div>
        </nav>

        <section class="nav-services bg-light-grey py-4 d-none d-md-block">
            <div class="container">
                <?php wp_nav_menu(array(
                    'menu' => 'Services',
                    'item_class' => 'nav-item',
                    'link_class' => 'text-white text-capitalize fw-500 fs-16',
                    'menu_class' => 'd-flex justify-content-between justify-content-lg-center justify-content-xl-between align-items-center gap-4 p-0 flex-md-wrap'
                )); ?>
            </div>
        </section>
    </header>