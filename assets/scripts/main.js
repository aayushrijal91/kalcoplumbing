// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                $('#toggleSlideOutMenu').on('click', function() {
                    $("#slideOutMenu").slideToggle();
                });

                $('#partnersSlider').slick({
                    slidesToShow: 11,
                    slidesToScroll: 1,
                    arrows: false,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 7,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 0,
                                speed: 1000,
                                cssEase: 'linear',
                                arrows: false
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 5,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 0,
                                speed: 1000,
                                cssEase: 'linear',
                                arrows: false
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 0,
                                speed: 1000,
                                cssEase: 'linear',
                                arrows: false
                            }
                        }
                    ]
                });

                $('#uteSlider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    speed: 3000,
                    arrows: false,
                    rtl: true,
                    draggable: false,
                    focusOnSelect: false,
                });

                $('#uteSlider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    $('.front-wheel, .rear-wheel').addClass('rotating');
                });

                // When the slide finishes changing, remove the rotating class
                $('#uteSlider').on('afterChange', function (event, slick, currentSlide) {
                    $('.front-wheel, .rear-wheel').removeClass('rotating');
                });

                $('#testimonialSlider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                            }
                        }
                    ]
                });

                $('#servicesListingSlider').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                centerPadding: "20px",
                            }
                        }
                    ]
                })

                if ($(".arealist:visible").length)
                    $(".noresult").hide();
                else
                    $(".noresult").show();

                $(".areas_loadMoreBtn").on('click', function () {
                    $(".arealist").show();
                    $(".areas_loadMoreWrap").remove();
                });

                $(".areas_alphabet").on('click', function () {
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                    $(".all-list").hide();
                    $(".arealist").show();
                    let chr = $(this).text();
                    $(".arealist").hide();
                    $(".char" + chr).show();
                    $(".areas_loadMoreWrap").remove();

                    if ($(".arealist:visible").length)
                        $(".noresult").hide();
                    else
                        $(".noresult").show();
                });

                $(".areas_allSearch").on('click', function () {
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");
                    $(".all-list").show();
                    $(".arealist").show();
                    $(".noresult").hide();
                });

                $('.arealist ul').each(function () {
                    var max = 19
                    if ($(this).find("li").length > max) {
                        $(this)
                            .find('li:gt(19)')
                            .hide()
                            .end()
                            .append(
                                $('<li class="show-more mt-3">Show More</li>').click(function () {
                                    $(this).siblings(':hidden').show().end().remove();
                                })
                            );
                    }
                });

                $('.areas_droplist > .caption').on('click', function () {
                    $(this).parent().toggleClass('open');
                });

                $('.areas_droplist > .list > .item').on('click', function () {
                    $('#selected_suburb_filter').text($(this).text());
                    $('.areas_droplist > .list > .item').removeClass('active selected');
                    $(this).addClass('selected').parent().parent().removeClass('open').children('.caption').text($(this).text());
                });

                $('#suburb-search').on('keyup', function (e) {
                    e.preventDefault();
                    let chr = $(this).val().toUpperCase();

                    if (chr.length > 0) {
                        $(this).siblings().removeClass("active");
                        $(this).addClass("active");
                        $(".all-list").hide();
                        $(".arealist").show();
                        $(".arealist").hide();
                        $(".char" + chr).show();
                        $(".areas_loadMoreWrap").remove();

                        if ($(".arealist:visible").length)
                            $(".noresult").hide();
                        else
                            $(".noresult").show();
                    }
                })
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

jQuery(document).ready(function ($) {
    $(document).on('click', '.accordion-head', function () {
        $(".accordion-head").removeClass("active");
        $(this).addClass('active');

        if ($('.accordion-body').is(':visible')) {
            $(".accordion-body").slideUp(300);
        }
        if ($(this).next(".accordion-body").is(':visible')) {
            $(this).next(".accordion-body").slideUp(300);
        } else {
            $(this).next(".accordion-body").slideDown(300);
        }

        $(".accordion-head").find('.plusminus').html('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none"><path d="M0.299316 0.640625L0.299317 7.86134L16.0668 19.4492L16.0668 12.2285L0.299316 0.640625Z" fill="#6BF9EB" /><path d="M31.8344 0.640625L31.8344 7.86134L16.0668 19.4492L16.0668 12.2285L31.8344 0.640625Z" fill="#6BF9EB" /></svg>');

        $(".accordion-head.active").find('.plusminus').html('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none"><path d="M0.299316 19.2793L0.299317 12.0586L16.0668 0.470715L16.0668 7.69143L0.299316 19.2793Z" fill="white" /><path d="M31.8344 19.2793L31.8344 12.0586L16.0668 0.470714L16.0668 7.69143L31.8344 19.2793Z" fill="white" /></svg>');
    });

    $('#faq-filter-form').on('change', '#category-filter', function (e) {
        e.preventDefault();
        let selectedCategory = $(this).val();
        let selectedCategoryName = $(this).children("option:selected").text();
        $("#selected_filter").text(selectedCategoryName);

        // AJAX request to load filtered FAQs
        $.ajax({
            url: window.location.origin + "/wp-admin/admin-ajax.php",
            type: 'POST',
            data: {
                action: 'filter_faqs',
                category: selectedCategory
            },
            success: function (response) {
                $('#faq-results').html(response);
            }
        });
    });

    $('#faq-filter-form').on('change keyup', '#faq-search', function (e) {
        e.preventDefault();

        let searchQuery = $('#faq-search').val().toLowerCase();

        // AJAX request to load filtered FAQs
        $.ajax({
            url: window.location.origin + "/wp-admin/admin-ajax.php",
            type: 'POST',
            data: {
                action: 'filter_faqs',
                search: searchQuery
            },
            success: function (response) {
                $('#faq-results').html(response);
            }
        });
    });
});