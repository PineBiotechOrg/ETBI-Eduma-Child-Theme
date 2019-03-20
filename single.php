<?php
/**
 * The template for displaying all single posts.
 *
 * @package thim
 */

//Get post type
$posttype = get_post_type();
$hasrights = true;
$Gotoproduct;

$membershipbuttontext = "Buy Unlimited Membership";
$upgradebutton = '<a class="pmpro_btn pmpro_btn-select margin-left-20" href="/test-checkout/?level=6">'. $membershipbuttontext . '</a>';
$previewcontent ="";

//if the page/post is a project
if ($posttype == "projects"){
    //get user information
    $current_user = wp_get_current_user();

    //Get product ID;
    global $post;
    $posttitle  = get_the_title($post->ID);
    $product = get_page_by_title( $posttitle, OBJECT, 'product' );
    $productID = $product->ID;

    //need to check if the user is owner of the project, else check for membership.
    if (is_null ( $product ) || get_field( "is_free")){
        $hasrights = true;
    }elseif( wc_customer_bought_product( $current_user->user_email, $current_user->ID, $productID ) ){
        $hasrights = true;
    }else{

        $current_user->membership_level = pmpro_getMembershipLevelForUser($current_user->ID);
        $currentusermembershiplvl = $current_user->membership_level;
        $currentusermembershipname = $currentusermembershiplvl->name;

        //if membership is unlimited do nothing
        if ($currentusermembershipname == "Unlimited") {
            $hasrights = true;

        }elseif ($currentusermembershipname == "Basic"){

            $hasrights = false;
            $previewcontent =get_field( "project_preview" );
        //if current member has specialization subscription, we need to check if the project is included in a specialization
        }elseif ($currentusermembershipname == "Specialization"){

            //if the custom field is checked, the user should have access to the project.
            $hasrights = $specializationproject = get_field( "part_of_specialization" );

            if (!$hasrights){
                $previewcontent =get_field( "project_preview" );
            }

        }elseif ($currentusermembershipname == ""){

            $hasrights = false;
            $previewcontent =get_field( "project_preview" );
        }else{

            $hasrights = false;
            $previewcontent =get_field( "project_preview" );
        }

        //create link to product to buy
        $url = get_permalink( $productID ) ;
        $Gotoproduct =  '<a class="pmpro_btn pmpro_btn-select" href="'. $url .'"> Buy Now </a>';
        $excerpt_end = '<div class="buy-area">' . $Gotoproduct . $upgradebutton ."</div>" ;
        $previewcontent .= $excerpt_end;
    }
}else{
    $hasrights = true;
}

?>

<div class="page-content">
<?php 
    while ( have_posts() ) : the_post();
    //if the user has rights to the content, show everything else: 
        if ($hasrights):
    ?>
         <?php get_template_part( 'content', 'single' ); ?>
         <?php
        else:
            /*
            $my_excerpt = get_the_content();
            $my_excerpt = strip_shortcodes( $my_excerpt );
            $my_excerpt = apply_filters('the_content', $my_excerpt);

            $my_excerpt = "<p>$my_excerpt</p>";
            $wanted_number_of_paragraph = 2;
            $tmp = explode ('</p>', $my_excerpt);
            for ($i = 0; $i < $wanted_number_of_paragraph; ++$i) {
                if (isset($tmp[$i]) && $tmp[$i] != '') {
                    $tmp_to_add[$i] = $tmp[$i];
                }
            }

            $my_excerpt = implode('</p>', $tmp_to_add) . '</p>';
            $my_excerpt = str_replace(']]>', ']]<', $my_excerpt);
            $excerpt_end = '<div class="buy-area">' . $Gotoproduct . $upgradebutton ."</div>" ;
            $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

            $my_excerpt .= $excerpt_end;
            echo $my_excerpt;*/
            echo $previewcontent;

         endif;
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() ) :
                comments_template();
            endif;
        ?>
    <?php endwhile; // end of the loop. ?>
</div>

