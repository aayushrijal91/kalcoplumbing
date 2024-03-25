<?php
// enable ACF options page

function init_setup()
{
    add_theme_support('title-tag');

    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }
}
add_action('after_setup_theme', 'init_setup');

if (function_exists('acf_add_options_page')) acf_add_options_page();

add_filter('wpcf7_validate_customlist*', 'wpcf7_customlist_validation_filter', 10, 2);

function wpcf7_customlist_validation_filter($result, $tag)
{
    $tag = new WPCF7_FormTag($tag);

    $name = $tag->name;

    if (isset($_POST[$name]) && is_array($_POST[$name])) {
        foreach ($_POST[$name] as $key => $value) {
            if ('' === $value) {
                unset($_POST[$name][$key]);
            }
        }
    }

    $empty = !isset($_POST[$name]) || empty($_POST[$name]) && '0' !== $_POST[$name];

    if ($tag->is_required() && $empty) {
        $result->invalidate($tag, wpcf7_get_message('invalid_required'));
    }

    return $result;
}

/* CF7 remove auto p */
add_filter('wpcf7_autop_or_not', '__return_false');

function numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="d-flex flex-wrap align-items-center justify-content-center mt-md-5 mt-2 mb-md-0 mb-5"><ul class="pagination">' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="page-item">%s</li>' . "\n", get_previous_posts_link('Prev'));

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';

        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li class="page-item">�</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>�</li>' . "\n";

        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li class="page-item">%s</li>' . "\n", get_next_posts_link('Next'));

    echo '</ul></div>' . "\n";
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
    return 'class="page-link link-arrow"';
}

/* contact 7 button */
/* removing default submit tag */
remove_action('wpcf7_init', 'wpcf7_add_form_tag_submit');
/* adding action with function which handles our button markup */
add_action('wpcf7_init', 'aiims_child_cf7_button');
/* adding out submit button tag */
if (!function_exists('aiims_child_cf7_button')) {

    function aiims_child_cf7_button()
    {
        wpcf7_add_form_tag('submit', 'aiims_child_cf7_button_handler');
    }
}
/* out button markup inside handler */
if (!function_exists('aiims_child_cf7_button_handler')) {

    function aiims_child_cf7_button_handler($tag)
    {
        $tag = new WPCF7_FormTag($tag);
        $class = wpcf7_form_controls_class($tag->type);
        $atts = array();
        $atts['class'] = $tag->get_class_option($class);
        $atts['id'] = $tag->get_id_option();
        $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);
        $value = isset($tag->values[0]) ? $tag->values[0] : '';
        if (empty($value)) {
            $value = esc_html__('Contact Us', 'twentysixteen');
        }
        $atts['type'] = 'submit';
        $atts = wpcf7_format_atts($atts);
        $html = sprintf('<button %1$s>%2$s</button>', $atts, $value);
        return $html;
    }
}

// function catch_that_image()
// {
//     global $post, $posts;
//     $first_img = '';
//     ob_start();
//     ob_end_clean();
//     $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
//     if (!empty($matches[1][0])) {
//         $first_img = $matches[1][0];
//     }

//     if (empty($first_img)) { //Defines a default image
//         $website_url = get_template_directory_uri();
//         $first_img =  "$website_url/images/default.jpg";
//     }
//     return $first_img;
// }

// function echo_image($image = null, $attachment_id = null, $class = '')
// {
//     $url = '';
//     $alt_text = '';

//     // ACF image array

//     if ($image) {
//         $url = $image['url'];
//         $alt_text = !empty($image['alt']) ? $image['alt'] : get_bloginfo('name');
//     }

//     // WordPress attachment ID

//     else if ($attachment_id) {
//         $url = wp_get_attachment_url($attachment_id);
//         $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', TRUE);
//         $alt_text = !empty($alt_text) ? $alt_text : get_bloginfo('name');
//     }

//     if ($url) {
//         echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt_text) . '" class="' . esc_attr($class) . '" />';
//     }
// }

// function echo_theme_image($relative_url, $class = '')
// {
//     $url = get_template_directory_uri() . $relative_url;
//     $alt_text = get_bloginfo('name');  // Default alt text is site name

//     echo '<img src="' . esc_url($url) . '" alt="' . esc_attr($alt_text) . '" class="' . esc_attr($class) . '" />';
// }

// add_action('rest_api_init', function () {
//     register_rest_route('api', '/areas', array(
//         'methods' => 'GET',
//         'callback' => 'get_areas_data',
//     ));
// });

// function get_areas_data()
// {
//     $args = array(
//         'post_type'      => 'page',
//         'posts_per_page' => -1,
//         'order'          => 'ASC',
//         'orderby'        => 'date', // Fixed this line
//         'meta_query' => array(
//             array(
//                 'key' => '_wp_page_template',
//                 'value' => 'page-templates/suburb.php',
//             ),
//         )
//     );
//     $the_query = new WP_Query($args);
//     $areaData = array();

//     if ($the_query->have_posts()) :
//         while ($the_query->have_posts()) : $the_query->the_post();
//             array_push($areaData, get_the_title());
//         endwhile;
//     endif;
//     wp_reset_postdata();

//     return $areaData;
// }

add_action('wp_ajax_filter_faqs', 'filter_faqs');
add_action('wp_ajax_nopriv_filter_faqs', 'filter_faqs');

function filter_faqs()
{
    $selected_category = isset($_POST['category']) ? sanitize_text_field($_POST['category']) : '';
    $search_query = isset($_POST['search']) ? sanitize_text_field($_POST['search']) : '';

    $args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
    );

    if (!empty($selected_category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $selected_category,
            ),
        );
    }

    if (!empty($search_query)) {
        $args['s'] = $search_query;
    }

    $faqs_query = new WP_Query($args);

    // Display FAQs
    if ($faqs_query->have_posts()) {
        $index = 1;

        echo '<div class="accordion-container">';

        while ($faqs_query->have_posts()) {
            $faqs_query->the_post();

            echo '<div class="accordion-card">';
            echo '<div class="accordion-head' . ($index == 1 ? ' active' : '') . '">';
            echo '<div class="row g-0 w-100 justify-content-between">';
            echo '<div class="col h-inherit">';
            echo get_the_title();
            echo '</div>';
            echo '<div class="col-auto h-inherit">';
            echo '<div class="plusminus">';
            if ($index == 1) {
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
            <path d="M0.299316 19.2793L0.299317 12.0586L16.0668 0.470715L16.0668 7.69143L0.299316 19.2793Z" fill="white" />
            <path d="M31.8344 19.2793L31.8344 12.0586L16.0668 0.470714L16.0668 7.69143L31.8344 19.2793Z" fill="white" />
          </svg>';
            } else {
                echo '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20" fill="none">
            <path d="M0.299316 0.640625L0.299317 7.86134L16.0668 19.4492L16.0668 12.2285L0.299316 0.640625Z" fill="#6BF9EB" />
            <path d="M31.8344 0.640625L31.8344 7.86134L16.0668 19.4492L16.0668 12.2285L31.8344 0.640625Z" fill="#6BF9EB" />
          </svg>';
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="accordion-body" style="' . ($index == 1 ? 'display: block;' : '') . '">';
            echo get_the_content();
            echo '</div>';
            echo '</div>';

            $index++;
        }

        echo '</div>';
        wp_reset_postdata();
    } else {
        echo 'No FAQs found.';
    }

    wp_die();
}
