<?php
/*
* Template Name: Contact Us
* The Contact Us Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="contactUsPage">
    <div class="container">
    <section class="bg-primary rounded-40 px-4 position-relative mt-4 mt-md-5">
            <?php $introduction = get_field('introduction'); ?>
            <img class="position-absolute h-100 start-0 top-0 d-none d-md-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/quality-service-bg.png" alt="plumber">

            <div class="row align-items-end position-relative">
            <div class="col-12 col-md-6 text-center order-2 order-md-1">
                    <img src="<?= $introduction['image']['url'] ?>" alt="<?= $introduction['image']['alt'] ?>">
                </div>

                <div class="col-xl-5 py-5 py-md-9 order-1 order-md-2">
                    <p class="text-white text-center text-md-start fs-54 fw-700 text-capitalize lh-0_9"><?= $introduction['title'] ?></p>

                    <article class="lh-1_67 description pt-4 text-center text-md-start"><?= $introduction['description'] ?></article>

                    <div id="contactForm" class="row justify-content-center justify-content-md-start align-items-center gx-2">
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
    </div>

    <div class="my-5">
        <?= get_template_part('parts/section', 'contactForm'); ?>
    </div>

    <div class="py-6">
        <?= get_template_part('parts/section', 'extraMile'); ?>
    </div>
</main>

<?php get_footer(); ?>