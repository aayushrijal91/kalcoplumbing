<?php
/*
* Template Name: Suburb
* The suburb Page
*/
get_header();
get_template_part('parts/section', 'banner');
?>

<main class="suburbPage">
    <section class="introduction bg-lighter position-relative">
        <img class="position-absolute top-0 h-100 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-introduction.png" alt="<?= bloginfo('name') ?>">

        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 text-center order-2 order-lg-1">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/lib/suburb-introduction.png" alt="<?= bloginfo('name') ?>">
                </div>

                <div class="col-12 col-lg-6 py-5 order-1 order-lg-2">
                    <p class="text-dark highlight-primary fw-700 fs-70 lh-1"><span>Plumbing Problems in <?= get_the_title(); ?>?</span> Kalco Plumbing Has You Covered!</p>

                    <article class="description lh-1_67 text-dark fw-500 py-4">
                        <p>
                            Do you find yourself constantly dealing with plumbing issues at home or in your business? Burst pipes, leaking taps, or a malfunctioning hot water system – these problems can strike at any moment, causing not just inconvenience but also potential damage. It’s time to turn your attention to Kalco Plumbing, the most reliable local plumbers in <?= get_the_title() ?>, NSW.
                        </p>
                    </article>

                    <div class="col-md-8 col-lg-9">
                        <div class="row gx-3">
                            <div class="col-6">
                                <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                    Call Us
                                </a>
                            </div>

                            <?php if (!empty(get_field('general', 'options')['contact_us_link']['url'])) : ?>
                                <div class="col-6">
                                    <a href="<?= get_field('general', 'options')['contact_us_link']['url'] ?>" target="<?= get_field('general', 'options')['contact_us_link']['target'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                        <?= !empty(get_field('general', 'options')['book_online_link']['title']) ? get_field('general', 'options')['contact_us_link']['title'] : "Contact Us" ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta py-6 py-md-8">
        <div class="container">
            <p class="text-center text-primary fw-700 fs-60 lh-1 pb-4">Discover a Comprehensive Range of Plumbing Services</p>

            <article class="description fs-18 lh-1_67 text-center text-dark">
                <p>At Kalco Plumbing, we offer a wide array of services to tackle every plumbing challenge. Our experienced plumbers, equipped with years of experience and high-quality tools, are experts in handling everything from routine maintenance to emergency plumbing situations. Whether it's a gas leak, a broken water heater, or high-pressure plumbing needs, our team has the skills and expertise to get the job done right.</p>
            </article>

            <div class="row gy-4 mt-5">
                <div class="col-xl-6">
                    <div class="ctaCard h-100">
                        <img class="position-absolute bottom-0 start-0" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="<?= bloginfo('name') ?>">

                        <p class="fs-60 fw-700 lh-1 position-relative">Hot Water in <?= get_the_title() ?></p>

                        <article class="description lh-1_67 pt-4 py-md-5 text-lighter position-relative">
                            <p>Need hot water solutions in <?= get_the_title() ?>? Kalco Plumbing is here to help. We're experts in keeping your hot water flowing smoothly, whether it's fixing your current system or setting up a new one. Our technicians are all about providing quick, effective services tailored to your needs. Count on us for reliable hot water in <?= get_the_title() ?>, ensuring your home or business never misses a beat.</p>
                        </article>

                        <div class="row gx-2 justify-content-center align-items-center position-relative">
                            <div class="col-auto">
                                <a href="<?= home_url() ?>/contact-us" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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

                <div class="col-xl-6">
                    <div class="ctaCard h-100">
                        <img class="position-absolute top-0 end-0 rotate-180" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="<?= bloginfo('name') ?>">

                        <p class="fs-60 fw-700 lh-1 position-relative">Drain Inspection<br> in <?= get_the_title() ?></p>

                        <article class="description lh-1_67 pt-4 py-md-5 position-relative">
                            <p>Keep your plumbing in top shape with Kalco Plumbing’s drain inspection services in <?= get_the_title() ?>. Our skilled team uses the latest tools to spot and fix any drain issues before they become big problems. Regular drain checks mean no unexpected blockages, just smooth-running pipes. Trust us to handle your drain inspections, protecting your property from pesky plumbing troubles.</p>
                        </article>

                        <div class="row gx-2 justify-content-center align-items-center position-relative">
                            <div class="col-auto">
                                <a href="<?= home_url() ?>/contact-us" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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

                <div class="col-xl-6">
                    <div class="ctaCard h-100">
                        <img class="position-absolute bottom-0 start-0" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="<?= bloginfo('name') ?>">

                        <p class="fs-60 fw-700 lh-1 position-relative">Home Plumbing Services: Making Every <?= get_the_title() ?> House a Home</p>

                        <article class="description lh-1_67 pt-4 py-md-5 text-lighter position-relative">
                            <p>Your home deserves the best care. Kalco Plumbing offers an extensive range of residential plumbing services. Our Home Plumbing Services include:</p>
                            <ul>
                                <li>Leak Detection and Repair</li>
                                <li>Clearing Blocked Drains</li>
                                <li>Hot Water System Installation and Maintenance</li>
                                <li>Comprehensive Kitchen and Bathroom Plumbing</li>
                                <li>Gas Fitting and Leak Repair by Licensed Plumbers</li>
                            </ul>
                        </article>

                        <div class="row gx-2 justify-content-center align-items-center position-relative">
                            <div class="col-auto">
                                <a href="<?= home_url() ?>/contact-us" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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

                <div class="col-xl-6">
                    <div class="ctaCard h-100">
                        <img class="position-absolute top-0 end-0 rotate-180" src="<?= get_template_directory_uri() ?>/assets/images/icons/homepage-about.png" alt="<?= bloginfo('name') ?>">

                        <p class="fs-60 fw-700 lh-1 position-relative">Commercial Plumbing: Keeping <?= get_the_title() ?> Businesses Running</p>

                        <article class="description lh-1_67 pt-4 py-md-5 position-relative">
                            <p>For <?= get_the_title() ?> businesses, uninterrupted operation is vital. Our commercial plumbing services are designed to ensure your business keeps flowing smoothly. From burst pipes to regular maintenance, our experienced commercial plumbers in <?= get_the_title() ?> are ready to offer quick solutions. Need reliable plumbing services for your business? Reach out to Kalco Plumbing. Our Commercial Plumbing Expertise:</p>
                            <ul>
                                <li>Installation and Maintenance of Plumbing Systems</li>
                                <li>Advanced Solutions for Drainage and Sewer Issues</li>
                                <li>Backflow Prevention and Testing</li>
                                <li>Gas Line Installations and Repairs by Expert Gas Fitters</li>
                                <li>Routine Plumbing Health Checks</li>
                            </ul>
                        </article>

                        <div class="row gx-2 justify-content-center align-items-center position-relative">
                            <div class="col-auto">
                                <a href="<?= home_url() ?>/contact-us" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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

    <section class="about bg-lighter position-relative py-5 py-md-7">
        <img class="position-absolute bottom-0 start-0 h-100 d-none d-lg-block" src="<?= get_template_directory_uri() ?>/assets/images/icons/suburb-about.png" alt="">

        <div class="container position-relative">
            <div class="row align-items-center gx-xl-7 gy-5">
                <div class="col-lg-6">
                    <div class="h-100 rounded-20 overflow-hidden">
                        <img class="h-100 w-100 object-fit-cover" src="<?= get_template_directory_uri() ?>/assets/images/lib/suburb-about.jpg" alt="<?= bloginfo('name') . " " . get_the_title() ?>" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <p class="text-primary fw-700 fs-60 lh-1">Contact Us Today for Stress-Free Plumbing in <?= get_the_title() ?></p>

                    <article class="description lh-1_67 text-dark fw-500 py-4">
                        <p>
                            Ready to say goodbye to all your plumbing worries? Get in touch with Kalco Plumbing now. We are available 24/7, ready to provide efficient, reliable, and affordable plumbing services. Whether it’s for a quote or to discuss your plumbing needs, our friendly team is just a call away.
                        </p>

                        <p>Experience the difference with Kalco Plumbing – where your plumbing needs are met with expertise and care.</p>
                    </article>

                    <div class="col-xl-9">
                        <div class="row gx-3">
                            <div class="col-6">
                                <a href="tel:<?= get_field('general', 'options')['phone_number'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                    <?= get_field('general', 'options')['phone_number'] ?>
                                </a>
                            </div>

                            <?php if (!empty(get_field('general', 'options')['contact_us_link']['url'])) : ?>
                                <div class="col-6">
                                    <a href="<?= get_field('general', 'options')['contact_us_link']['url'] ?>" target="<?= get_field('general', 'options')['contact_us_link']['target'] ?>" class="btn btn-primary w-100 rounded-pill text-white fs-18 fw-600">
                                        <?= !empty(get_field('general', 'options')['book_online_link']['title']) ? get_field('general', 'options')['contact_us_link']['title'] : "Contact Us" ?>
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


    <div class="container">
        <section class="bg-primary rounded-40 px-4 position-relative mt-7">
            <img class="position-absolute h-100 start-0 top-0 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/quality-service-bg.png" alt="plumber">

            <div class="row align-items-end position-relative">
                <div class="col-12 col-xl-6 text-center order-2 order-xl-1">
                    <img src="<?= home_url() ?>/wp-content/uploads/2024/03/story-of-commitment.png" alt="Kalco Plumbing">
                </div>

                <div class="col-xl-6 py-5 order-1 order-xl-2">
                    <p class="text-white fs-54 fw-700 text-capitalize lh-0_9 text-center text-xl-start">Same Day Plumber in <?= get_the_title() ?>: Ready 24/7 for Any Plumbing Emergencies</p>

                    <article class="lh-1_67 description pt-4 text-center text-xl-start">
                        <p>Facing a sudden plumbing emergency? Our 24-hour emergency plumbers in <?= get_the_title() ?> are always ready to respond. From gas leaks to burst pipes, we provide swift, same-day service to address your urgent needs. Don't let a plumbing emergency disrupt your day – call us for prompt assistance!</p>
                    </article>

                    <div class="row justify-content-center justify-content-xl-start align-items-center gx-2">
                        <div class="col-auto">
                            <a href="<?= home_url() ?>/contact-us" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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

        <section class="bg-primary rounded-40 px-4 position-relative mt-5 mb-7">
            <img class="position-absolute h-100 start-0 top-0 d-none d-xl-block" src="<?= get_template_directory_uri() ?>/assets/images/lib/quality-service-bg.png" alt="plumber">

            <div class="row align-items-end position-relative">
                <div class="col-xl-6 text-center order-2 order-xl-1">
                    <img src="<?= home_url() ?>/wp-content/uploads/2024/03/expertise-tailored.png" alt="Kalco Plumbing">
                </div>

                <div class="col-xl-6 py-5 order-1 order-xl-2">
                    <p class="text-white fs-54 fw-700 text-capitalize lh-0_9 text-center text-xl-start">Exceptional Service with a Personal Touch</p>

                    <article class="lh-1_67 description pt-4 text-center text-xl-start">
                        <p>Whether it's a leaking tap, a hot water system issue, or high-pressure plumbing needs, we handle it all with no call-out fee. We’re not just any plumbing company; we’re a family-owned business that values each customer. Our licensed plumbers are committed to providing not only high-quality work but also outstanding customer service. Imagine living and working in spaces free from plumbing hassles, where every tap and pipe functions perfectly. That’s the peace of mind Kalco Plumbing offers.</p>
                    </article>

                    <div class="row justify-content-center justify-content-xl-start align-items-center gx-2">
                        <div class="col-auto">
                            <a href="<?= home_url() ?>/contact-us" class="btn btn-secondary emailBtn rounded-circle d-flex justify-content-center align-items-center">
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
</main>

<?php get_footer(); ?>