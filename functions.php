<?php

//require_once 'learnpress-v2/learnpressv3-functions.php';

define( 'ETBI_DIR', trailingslashit( get_stylesheet_directory() ) );
define( 'ETBI_URI', trailingslashit( get_stylesheet_directory_uri() ) );
define( 'PARENT_DIR', trailingslashit(  get_template_directory() ) );
define( 'PARENT_URI', trailingslashit(  get_template_directory_uri() ) );
define( 'ETBI_THEME_VERSION', '3.6.0' );

require_once ETBI_DIR . 'inc/etbi-functions.php';
require_once ETBI_DIR . 'inc/widgets/login-popup/etbi-login-popup-functions.php';
// dislay setting layout
require ETBI_DIR . 'inc/wrapper-before-after.php';

// include custom jQuery
// add_action('wp_enqueue_scripts', 'etbi_include_google_jquery');

// function etbi_include_google_jquery() {

// 	wp_deregister_script('jquery');
// 	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null, true);

// }

add_action( 'wp_print_styles',     'etbi_deregister_styles', 100 );

function etbi_deregister_styles()    { 
   //wp_deregister_style( 'amethyst-dashicons-style' ); 
   //wp_dequeue_style( 'dashicons' ); 

	if( is_front_page() ) {

		wp_dequeue_style( 'dashicons' );
		wp_deregister_style( 'dashicons' );

		wp_dequeue_style( 'lp-projects-style' );
		wp_deregister_style( 'lp-projects-style' );

		wp_dequeue_style( 'gradebook' );
		wp_deregister_style( 'gradebook' );

		wp_dequeue_style( 'lp-mycred' );
		wp_deregister_style( 'lp-mycred' );

		wp_dequeue_style( 'Conductor' );
		wp_deregister_style( 'Conductor' );

		wp_dequeue_style( 'wpems-owl-carousel-css' );
		wp_deregister_style( 'wpems-owl-carousel-css' );

	}


}

add_action( 'wp_print_scripts', 'etbi_deregister_scripts', 100 );

function etbi_deregister_scripts() {

	if( is_front_page() ) {

		wp_dequeue_script('fabric');
		wp_deregister_script('fabric');

		wp_dequeue_script('learn-press-stripe');
		wp_deregister_script('learn-press-stripe');

		wp_dequeue_script('table-js');
		wp_deregister_script('table-js');


		wp_dequeue_script('gradebook');
		wp_deregister_script('gradebook');

	}


}

add_action( 'wp_ajax_pick_date_range', 'pick_date_range' );
add_action( 'wp_ajax_nopriv_pick_date_range', 'pick_date_range' );

function thim_child_enqueue_styles() {
    if ( is_multisite() ) {
        wp_enqueue_style( 'thim-child-style', get_stylesheet_uri() );
    } else {
        wp_enqueue_style( 'thim-parent-style', get_template_directory_uri() . '/style.css' );
    }

    if( function_exists('bp_is_active') ) {
        if( is_buddypress() ) {

            if( bp_is_user() ) {
                 wp_enqueue_style( 'members-css', ETBI_URI . 'css/members.css', array(), ETBI_THEME_VERSION );
            }

            if ( bp_is_groups_component() ) {
                wp_enqueue_style( 'organizations-css', ETBI_URI . 'css/organizations.css', array(), ETBI_THEME_VERSION );
                wp_enqueue_style( 'bp-bbpress-css', ETBI_URI . 'css/bp-bbpress.min.css', array(), ETBI_THEME_VERSION );
            }

            if( bp_is_active( 'groups' ) && bp_is_group() ) {

                // wp_enqueue_style( 'date-range-picker', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css', array(), ETBI_THEME_VERSION );

                if( bp_is_current_action( 'curriculum' ) ) {

                    wp_enqueue_style( 'timeline-css', ETBI_URI . 'css/timeline.css', array(), ETBI_THEME_VERSION );

                }

            }

        }
    }

    if( is_page('omicslogic') ) {

        ////cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css

        wp_enqueue_style( 'omicslogic-css', ETBI_URI . 'css/omicslogic.css', array(), ETBI_THEME_VERSION );

    }

    wp_enqueue_style( 'linearicons',  ETBI_URI . 'css/linearicons.css', array(), ETBI_THEME_VERSION );

    wp_enqueue_style('front-flex', "/wp-content/plugins/siteorigin-panels/css/front-flex.css" );
}

// add_action( 'the_content', 'etbi_add_lesson_zoomable_canvas', 30, 1 );

// function etbi_add_lesson_zoomable_canvas( $content ) {

//     $content .= '<div class="zoomer">
//                     <canvas class="zoomer__canvas"></canvas>
//                 </div>';

//     return $content;

// }

add_action( 'learn-press/after-course-item-content', 'etbi_load_start_comment_modal', 9 );

function etbi_load_start_comment_modal() {

    echo '<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
                <div class="cd-user-modal-container"> <!-- this is the container wrapper -->

                    <div class="title-bar">
                        <h3 class="left">Comments</h3>
                        <button class="cd-close-form right modal-close">
                           <i class="lnr lnr-cross"></i>
                        </button>
                    </div>

                <div class="modal-content-area">';

}

add_action( 'learn-press/after-course-item-content', 'etbi_load_after_comment_modal', 11 );

function etbi_load_after_comment_modal() {

    echo '      </div> <!-- .modal-content-area -->

            </div> <!-- cd-user-modal-container -->

            <div class="overlay"></div>

        </div> <!-- cd-user-modal -->';

}

add_action( 'wp_enqueue_scripts', 'thim_child_enqueue_styles', 1000 );

function etbi_render_course_completion_modal() {

    $modal_id = 'completed_course';
    $modal_title = __( 'Congratulations!', 'etbi' );
    $course  = learn_press_get_the_course();

    echo etbi_get_template_content( 'modal.php', array( 'modal_id' => $modal_id, 'modal_title' => $modal_title, 'course' => $course ), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

}

add_action( 'learn-press/before-single-course', 'etbi_render_course_completion_modal', 10 );

function etbi_course_completion_content( $modal_id, $course ) {

    if( $modal_id == 'completed_course' ) {

        $user       = learn_press_get_current_user();

        echo etbi_get_template_content( 'completed-course-content.php', array( 'course' => $course, 'user' => $user ), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

    }

}

add_action( 'etbi_user_progress_modal_content_area', 'etbi_course_completion_content', 10, 2 );

function etbi_render_user_progress_modal() {

    $modal_id = 'user_progress';
    $modal_title = __( 'User Progress', 'etbi' );

    echo etbi_get_template_content( 'modal.php', array( 'modal_id' => $modal_id, 'modal_title' => $modal_title ), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

}

add_action( 'etbi_after_group_progress', 'etbi_render_user_progress_modal', 10 );

function etbi_render_contact_modal_content( $modal_id ) {

    if( $modal_id == 'omicslogic_contact' ) {

        echo etbi_get_template_content( 'contact-us-modal-content.php', array(), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

    }    

}

add_action( 'etbi_omicslogic_contact_modal_content_area', 'etbi_render_contact_modal_content', 20, 1 );

function etbi_render_pricing_modal_content( $modal_id ) {

    if( $modal_id == 'omicslogic_pricing' ) {

        echo etbi_get_template_content( 'pricing-tables-modal-content.php', array(), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

    }    

}

add_action( 'etbi_omicslogic_pricing_modal_content_area', 'etbi_render_pricing_modal_content', 10, 1 );



function etbi_render_omicslogic_contact_modal() {

    $modal_id = 'omicslogic_contact';
    $modal_title = __( 'Contact Us', 'etbi' );

    echo etbi_get_template_content( 'modal.php', array( 'modal_id' => $modal_id, 'modal_title' => $modal_title ), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

}

add_action( 'omicslogic_before_footer', 'etbi_render_omicslogic_contact_modal', 10 );

function etbi_render_omicslogic_pricing_modal() {

    $modal_id = 'omicslogic_pricing';
    $modal_title = __( 'Pricing', 'etbi' );

    echo etbi_get_template_content( 'modal.php', array( 'modal_id' => $modal_id, 'modal_title' => $modal_title ), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' );

}

add_action( 'omicslogic_before_footer', 'etbi_render_omicslogic_pricing_modal', 20 );

// function etbi_modal_contact_form() {

//     if( wp_doing_ajax() ) {

//         wp_send_json(array(

//             'html' => etbi_get_template_content( 'contact-us-modal-content.php', array(), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' )

//         ));

//         wp_die();

//     }

// }

// add_action( 'wp_ajax_etbi_modal_contact_form', 'etbi_modal_contact_form' );
// add_action( 'wp_ajax_nopriv_etbi_modal_contact_form', 'etbi_modal_contact_form' );

// function etbi_modal_pricing_tables() {

//     if( wp_doing_ajax() ) {

//         wp_send_json(array(

//             'html' => etbi_get_template_content( 'pricing-tables-modal-content.php', array(), ETBI_DIR . 'inc/templates/', ETBI_DIR . 'inc/templates/' )

//         ));

//         wp_die();

//     }

// }

// add_action( 'wp_ajax_etbi_modal_pricing_tables', 'etbi_modal_pricing_tables' );
// add_action( 'wp_ajax_nopriv_etbi_modal_pricing_tables', 'etbi_modal_pricing_tables' );

function load_scripts() {
    global $post;
    
    wp_enqueue_script('user-dropdown', get_stylesheet_directory_uri()  . '/js/dropdown.js', array('jquery'), '', true);
    wp_enqueue_script( 'etbi-scripts', get_stylesheet_directory_uri() . '/js/etbi-scripts.js', array( 'jquery' ) , ETBI_THEME_VERSION, true );

    if( is_page() || is_single() )
    {
        switch($post->post_name) // post_name is the post slug which is more consistent for matching to here
        {
            case 'user-history':
                wp_enqueue_script('user-history-scrollreveal', 'https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js', array('jquery'), '', true);
                wp_enqueue_script('user-history', get_stylesheet_directory_uri()  . '/js/history-fade.js', array('jquery'), '', true);
                break;
        }

        if( is_singular( array( 'lp_course' ) ) ) {

            wp_register_script( 'lp_checkout_form', get_stylesheet_directory_uri() . '/js/lp-checkout-form.js', array( 'jquery' ), ETBI_THEME_VERSION, true );

            wp_localize_script( 'lp_checkout_form', 'lp_checkout_form_params', array(

                'current_user'      => wp_get_current_user(),
                'default_btn_txt'  => apply_filters('learn-press/purchase-course-button-text', __( 'Buy this course', 'etbi' ) ),
                'close_btn_txt'     => apply_filters( 'etbi_close_btn_txt', __( 'Close', 'etbi' ) )

            ) );

            wp_enqueue_script( 'lp_checkout_form' );

            //wp_enqueue_script( 'zoomer', get_stylesheet_directory_uri() . '/js/image-zoomer.js', null, ETBI_THEME_VERSION, true );
            wp_enqueue_script( 'zoomer', get_stylesheet_directory_uri() . '/js/image-zoomer.js', array( 'jquery' ) , ETBI_THEME_VERSION, true );

        }

        if( is_page( 'omicslogic' ) ) {

            // wp_deregister_script('jquery');
            // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), null, true);

            wp_enqueue_script( 'parallaxie', get_stylesheet_directory_uri() . '/js/parallaxie.js', array('jquery'), ETBI_THEME_VERSION, true);
            wp_enqueue_script( 'omicslogic-charts-script', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js', null, ETBI_THEME_VERSION, true );
            wp_enqueue_script( 'omicslogic-js', get_stylesheet_directory_uri() . '/js/omicslogic.js', array( 'jquery' ) , ETBI_THEME_VERSION, true ); 

        }
    }

    if( function_exists('bp_is_active') ) {
        if( is_buddypress() ) {

            if( bp_is_user() ) {

                wp_enqueue_script( 'bp-members-script', ETBI_URI . 'js/members.js', array( 'jquery' ), ETBI_THEME_VERSION, false );

            }

            if( bp_is_active( 'groups' ) && bp_is_group() ) {

                $time_range = get_time_range();

                wp_enqueue_script( 'bp-org-script', ETBI_URI . 'js/organizations.js', array( 'jquery', 'etbi-scripts' ), ETBI_THEME_VERSION, false );

                if( bp_is_current_action( 'curriculum' ) ) {

                    wp_enqueue_script( 'timeline-js', ETBI_URI . 'js/timeline.min.js', array( 'jquery'), ETBI_THEME_VERSION, true );

                }

                if( bp_is_current_action('progress') ) {

                    wp_enqueue_script( 'bp-list-script', '//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js', array('jquery'), ETBI_THEME_VERSION, false );

                    wp_enqueue_script( 'bp-charts-script', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js', null, ETBI_THEME_VERSION, true );
                    wp_enqueue_script( 'date-range-picker', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js', array( 'jquery', 'bp-charts-script' ), ETBI_THEME_VERSION, true );
                    wp_enqueue_script( 'members-progress-chart', ETBI_URI . 'js/members-progress-chart.js', array( 'jquery', 'bp-charts-script' ), ETBI_THEME_VERSION, true );

                    wp_localize_script( 'members-progress-chart', 'etbi', apply_filters( 'etbi_progress_chart_l18n', array(

                        'total_points'      => get_total_members_points_by_time(),
                        'group_members'     => groups_get_group_members(),
                        'group_id'          => bp_get_current_group_id(),
                        'group_log'         => get_group_log( array( 'from' => $time_range['from'], 'until' => $time_range['until'] ) ),
                        'group_averages'    => get_average_points_by_date( $time_range['from'], $time_range['until'], 'edu' ),
                        'server_group_avg'  => get_average_points_by_date( $time_range['from'], $time_range['until'], 'server' ),
                        'from'              => $time_range[ 'from' ],
                        'until'             => $time_range[ 'until' ]

                    ) ) );

                }

            }


        }
        
    }
}

add_action('wp_enqueue_scripts', 'load_scripts');

/*
function thim_learnpress_course_assessment_options( $metabox ) {
    $metabox['fields'][0]['options']['evaluate_quizzes_passed'] = __( 'Evaluate quizzes passed', 'learnpress' ) . sprintf( '<p class="description option-desc">%s</p>', __( 'Evaluate by quizzes the user has passed.', 'learnpress' ) );   

    return $metabox;
}
add_filter( 'learn_press_course_assessment_metabox', 'thim_learnpress_course_assessment_options' );


function thim_learnpress_evaluation_course_results( $results ) {
    if( current_user_can( 'manage_options' ) ) {
        var_dump( $results );
    }


    return $results;
}
add_filter( 'learn_press_evaluation_course_results', 'thim_learnpress_evaluation_course_results' );
*/


function thim_learnpress_evaluation_course_results( $result, $course_id, $user_id ) {
    if( ! function_exists( 'learn_press_get_user' ) )
        return $result;

    $course  = learn_press_get_the_course();

    $quizzes = $course->get_quizzes();
    $lessons = $course->get_lessons();

    if( empty( $quizzes ) ) 
        return $result;

    $total_questions = sizeof( $quizzes ) + sizeof( $lessons );
    $total_quizzes   = sizeof( $quizzes );
    $total_lessons   = sizeof( $lessons );

    $completed_lessons = $course->get_completed_lessons( $user_id );

    $lesson_value = ( 50 / $total_lessons );
    $quiz_value   = ( 50 / $total_quizzes );

    $total_points = 0;

    $total_points+= $completed_lessons * $lesson_value;

    foreach( $quizzes as $_quiz ) {
        if( ! $course->enable_evaluate_item( $_quiz->ID, $user_id ) ) {
            continue;
        }

        $quiz  = LP_Quiz::get_quiz( $_quiz->ID );
        
        $user  = learn_press_get_user( $user_id );
        $grade = $user->get_quiz_graduation( $quiz->id, $course_id );

        if( $grade == 'passed' ) {
            $total_points+= $quiz_value;
        }
    }

    $result = round( $total_points );

    return $result;
}
add_filter( 'learn_press_evaluate_course_by_passed_quizzes_results', 'thim_learnpress_evaluation_course_results', 10, 3 );


function thim_learnpress_course_price( $price, $course ) {
    $coming_soon = get_post_meta( $course->id, 'coming_soon', true );

    if( $coming_soon == 'Yes' ) {
        return sprintf( '<span style="color: red;">%s</span>', __( 'Coming Soon', 'learnpress' ) );
    }

    return $price;
}
add_filter( 'learn_press_course_price_html', 'thim_learnpress_course_price', 20, 2 );
add_filter( 'learn_press_course_price_html_free', 'thim_learnpress_course_price', 20, 2 );
add_filter( 'learn_press_course_origin_price_html', 'thim_learnpress_course_price', 20, 2 );


function thim_learnpress_take_course_button( $button_text ) {
    if( function_exists( 'learn_press_get_course_id' ) && ! empty( $course_id = learn_press_get_course_id() ) ) {
        $coming_soon = get_post_meta( $course_id, 'coming_soon', true );
        
        if( $coming_soon == 'Yes' ) {
            return __( 'Subscribe', 'learnpress' );
        }
    }

    return $button_text;
}
add_filter( 'learn_press_enroll_button_text', 'thim_learnpress_take_course_button' );

/*

add_filter( 'mycred_setup_hooks', function( $installed ) {
    $installed['learnpress_learner2'] = array(
        'title'       => __( 'LearnPress: for learners 2', 'learnpress' ),
        'description' => __( 'Award %_plural% to users who are learning in LearnPress courses system.', 'learnpress' ),
        'callback'    => array( 'Thim_LearnPress_Learner_Hook' )
    );
    return $installed;
} );

class Thim_LearnPress_Learner_Hook extends myCRED_Hook {
    public function run() {
        add_action( 'update_post_metadata', function( $meta_id, $order_id, $meta_key, $_meta_value ) {
            
            error_log( 'trigger' );

            $order = get_post( $order_id );
        
            if( $order->post_type != LP_ORDER_CPT || $meta_key !== '_payment_method_title' ) {
                return;
            }
        
            $status = $order->post_status;
        
            $order = new LP_Order( $order_id );
        
            if ( !$order ) {
                return;
            }
            $user_id = $order->get_user( 'ID' ); // get_post_meta( $order_id, '_learn_press_customer_id', true ) ? get_post_meta( $order_id, '_learn_press_customer_id', true ) : 0;
            // Check if user is invalid
            if ( !$user_id ) {
                return;
            }
        
            // Check if user or order is invalid
            if ( $this->core->exclude_user( $user_id ) ) {
                return;
            }
        
            if ( $items = $order->get_items() ) {
                foreach ( $items as $item ) {
                    //$take_course = get_post_meta( $order_id, '_learn_press_transaction_method', true ) == 'free' ? 'take_free_course' : 'take_paid_course';
        
                    $course_id = !empty( $item['course_id'] ) ? absint( $item['course_id'] ) : 0;
                    if ( !$course_id ) {
                        continue;
                    }
                    $course = LP_Course::get_course( $course_id );
                    if ( !$course ) {
                        continue;
                    }
                    $take_course = $course->is_free() ? 'take_free_course' : 'take_paid_course';
        
                    // Make sure we award points other then zero
                    if ( !isset( $this->prefs[$take_course]['creds'] ) ) {
                        continue;
                    }
                    if ( empty( $this->prefs[$take_course]['creds'] ) || $this->prefs[$take_course]['creds'] == 0 ) {
                        continue;
                    }
                    // Execute
                    if ( !$this->over_hook_limit( $take_course, 'learnpress_learner', $user_id ) ) {
                        $this->core->add_creds(
                                'learnpress_learner', $user_id, $this->prefs[$take_course]['creds'], $this->prefs[$take_course]['log'], $course->id, array( 'ref_type' => 'post' ), $this->mycred_type
                        );
                    }
                }
            }
        }, 10, 4 );
    }
}

*/

/** Disable Ajax Call from WooCommerce on front page and posts*/
add_action( 'wp_enqueue_scripts', 'dequeue_woocommerce_cart_fragments', 11);
function dequeue_woocommerce_cart_fragments() {
if (is_front_page() || is_single() || is_home() ) { wp_dequeue_script('wc-cart-fragments'); } 
}

/** Conditional Menus*/

function mytheme_register_my_members_menu() {
    register_nav_menu( 'primary-members', __( 'Primary Menu - Members', 'theme-slug' ) );
    register_nav_menu( 'primary-nonmembers', __( 'Primary Menu - Non-Members', 'theme-slug' ) );
}
add_action( 'after_setup_theme', 'mytheme_register_my_members_menu' );

function project_cat_init() {
    // create a new taxonomy
    register_taxonomy(
        'project_category',
        'projects',
        array(
            'label' => __( 'Project Category' ),
        )
    );
}
add_action( 'init', 'project_cat_init' );


add_action('restrict_manage_posts', 'my_filter_post_type_by_taxonomy');
function my_filter_post_type_by_taxonomy() {
    global $typenow;
    $post_type = 'projects';
    $taxonomy  = 'project_category';
    if ($typenow == $post_type) {
        $selected      = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
        $info_taxonomy = get_taxonomy($taxonomy);
        wp_dropdown_categories(array(
            'show_option_all' => __("Show All {$info_taxonomy->label}"),
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'show_count'      => true,
            'hide_empty'      => true,
        ));
    };
}
/**
 * Filter posts by taxonomy in admin
 * @author  Mike Hemberger
 * @link http://thestizmedia.com/custom-post-type-filter-admin-custom-taxonomy/
 */
add_filter('parse_query', 'tsm_convert_id_to_term_in_query');
function tsm_convert_id_to_term_in_query($query) {
    global $pagenow;
    $post_type = 'projects';
    $taxonomy  = 'project_category';
    $q_vars    = &$query->query_vars;
    if ( $pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0 ) {
        $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
        $q_vars[$taxonomy] = $term->slug;
    }
}

/** Woocomerce Shop Cataloge Images */
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'new_woocommerce_template_loop_product_thumbnail', 10);

function new_woocommerce_template_loop_product_thumbnail() {
    $new_image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    echo '<img src="' . $new_image_src[0] . '">';
}

function check_float_value($float){

    $test = strtolower($float);

    if ( $test == "right"){
        return "absoluteright";
    }elseif ($test == "left"){
        return "absoluteleft";
    }

    return "fail";
}


/** Shortcode for tags */
function add_my_tags_function($atts) {
    extract(shortcode_atts(array(
        'color' => NULL,
        'fontsize' => NULL,
        'float' => NULL,
    ), $atts));

    $checkbox = '<input type="checkbox" />';
    $extras = '<i class="fa fa-plus"></i> <i class="fa fa-check"></i> ';

    $opening = '<div class="mytag-wrapper">';
    $closing = '</div>';

    $code = '';

    $attsize = sizeof($atts);

    /** Get all the style variables */
    $bgstyle="";
    if (!empty($color)){
        $attsize--;

        $split = preg_split('/[\ \n\,]+/', $color);

        /** make sure there is only one word color */
        if(sizeof($split)>1){
            $bgcolor = $split[0];
        }else{
            $bgcolor = $color;
        }
        $bgstyle = 'background:' . $bgcolor . '; ';
    }

    $fontstyle = "";
    if (!empty($fontsize)){
        $attsize--;

        $split = preg_split('/[\ \n\,]+/', $fontsize);

        /** make sure there is only one word color */
        if(sizeof($split)>1){
            $fontsizevalue = $split[0];
        }else{
            $fontsizevalue = $fontsize;
        }

        if (is_numeric ($fontsizevalue)){
            $fontstyle = 'font-size:' . $fontsizevalue . 'px; ';
        }

    }

    $floatstyle = "";
    if (!empty($float)){
        $attsize--;

        $split = preg_split('/[\ \n\,]+/', $float);

        /** make sure there is only one word color */
        if(sizeof($split)>1){
            $floatvalue = $split[0];
        }else{
            $floatvalue = $float;
        }

        $classvalue = check_float_value($floatvalue);
        if ($classvalue != "fail"){
            $floatclass = $classvalue;
        }

    }

    /** set style variables */
    $tagopencode = '<span class="mytag ' . $floatclass .  '"  style="' . '" ><label for="" style="' .  $bgstyle . $fontstyle .' ">';
    $tagclose = '</label></span>';


    /** Create all the tags */
    if ($attsize>1){

        //$code .= $opening;
        for ($i = 0; $i < $attsize; $i++) {
            $code .= $tagopencode . $atts[$i] . $tagclose;
        }
        //$code .= $closing;

    }else if($atts[0] != '' ){
        $code .= $tagopencode . $atts[0] . $tagclose;
    }else{

        $code = $tagopencode . 'free' . $tagclose . $tagopencode . 'members-only' . $tagclose;
    }

    return $code;
}
add_shortcode('my_tags', 'add_my_tags_function');

/** Shortcode for tags */
function add_my_tags_menu_function($atts)
{
    return add_my_tags_function($atts);
}
add_shortcode('my_tags_menu', 'add_my_tags_menu_function');

/**
 * Hook to implement shortcode logic inside WordPress nav menu items
 * Shortcode code can be added using WordPress menu admin menu in description field
 */
function shortcode_menu( $item_output, $item ) {

    if ( !empty($item->description)) {
        $output = do_shortcode($item->description);

        $itemurl = $item->url;
        $itemtitle = $item->title;
        $itemclassesarray = $item->classes;

        $outputastart ='<a href="';
        $outputamiddle = '" class="';
        $outputaend = '">';

        $itemclassesimplode = implode("' '",$itemclassesarray);
        $itemclasses = str_replace("'", '', $itemclassesimplode);

        $menuitemsend = '</a>';
        $menuitemstart = $outputastart . $itemurl . $outputamiddle . $itemclasses . $outputaend . $itemtitle;


        if ( $output != $item->description ){
            $item_output = $menuitemstart . $output . $menuitemsend;
        }else{
            $item_output = $menuitemstart . $menuitemsend;
        }

    }
    return $item_output;

}
add_filter("walker_nav_menu_start_el", "shortcode_menu" , 10 , 2);



add_filter( 'woocommerce_add_cart_item_data', 'wdm_empty_cart', 10,  3);

function wdm_empty_cart( $cart_item_data, $product_id, $variation_id ) 
{

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}

require_once ETBI_DIR . 'inc/buddypress-functions.php';


if ( ! function_exists( 'thim_remove_thim_hooks' ) ) {
    function thim_remove_thim_hooks() {

        remove_action( 'thim_single_course_meta', 'learn_press_course_categories', 15 );
        remove_action( 'thim_single_course_meta', 'thim_course_forum_link', 20 );



    }
}

add_action( 'after_setup_theme', 'thim_remove_thim_hooks', 25 );

/**
 * Process extra register fields
 *
 * @param $login
 * @param $email
 * @param $errors
 */
if ( ! function_exists( 'thim_check_name_register_fields' ) ) {
    function thim_check_name_register_fields( $login, $email, $errors ) {
        $firstname = ( isset( $_POST['user_firstname'] ) ) ? trim( $_POST['user_firstname'] ) : '';
        $lastname = ( isset( $_POST['user_lastname'] ) ) ? trim( $_POST['user_lastname'] ) : '';
        if ( empty( $firstname ) ) {
            $errors->add( 'empty_firstname', "<strong>ERROR</strong>: Must supply first name." );
        } else if( empty( $lastname ) ) {
            $errors->add( 'empty_lastname', "<strong>ERROR</strong>: Must supply last name." );
        }
    }
}
add_action( 'register_post', 'thim_check_name_register_fields', 10, 4 );

function etbi_register_form() {

    $first_name = ( ! empty( $_POST['user_firstname'] ) ) ? trim( $_POST['user_firstname'] ) : '';
    $last_name = ( ! empty( $_POST['user_lastname'] ) ) ? trim( $_POST['user_lastname'] ) : '';

    if( is_page() ) {

        ?>
        <p>
                <input type="text" name="user_firstname" id="user_firstname" placeholder="First Name" class="input required" value="<?php echo esc_attr( wp_unslash( $first_name ) ); ?>" size="25" /></label>
        </p>

        <p>
                <input type="text" name="user_lastname" id="user_lastname" placeholder="Last Name"  class="input required" value="<?php echo esc_attr( wp_unslash( $last_name ) ); ?>" size="25" /></label>
        </p>

        <?php

    } else {

        ?>
        <p>
            <label for="user_firstname"><?php _e( 'First Name', 'etbi' ) ?><br />
                <input type="text" name="user_firstname" id="user_firstname" class="input required" value="<?php echo esc_attr( wp_unslash( $first_name ) ); ?>" size="25" /></label>
        </p>

        <p>
            <label for="user_lastname"><?php _e( 'Last Name', 'etbi' ) ?><br />
                <input type="text" name="user_lastname" id="user_lastname" class="input required" value="<?php echo esc_attr( wp_unslash( $last_name ) ); ?>" size="25" /></label>
        </p>

        <?php

    }

}

add_action( 'register_form', 'etbi_register_form' );


function etbi_user_register( $user_id ) {

    $first_name = ( ! empty( $_POST['user_firstname'] ) ) ? ucfirst( trim( $_POST['user_firstname'] ) ) : '';
    $last_name = ( ! empty( $_POST['user_lastname'] ) ) ? ucfirst( trim( $_POST['user_lastname'] ) ) : '';

    update_user_meta( $user_id, 'first_name', $first_name );
    update_user_meta( $user_id, 'last_name', $last_name );
}

add_action( 'user_register', 'etbi_user_register' );