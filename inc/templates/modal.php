<?php
/**
 * The template for displaying a modal.
 *
 * @package etbi
 */

$modal_id = ( isset( $modal_id ) ) ? $modal_id : '';
$modal_title = ( isset( $modal_title ) ) ? $modal_title : '';
$course = ( isset( $course ) ) ? $course : 0;

?>

<div class="etbi-modal <?php echo esc_attr( $modal_id ); ?>"> <!-- this is the entire modal form, including the background -->
    <div class="etbi-modal-container"> <!-- this is the container wrapper -->

        <div class="title-bar">
            <h3 class="left"><?php esc_html_e( $modal_title ); ?></h3>
            <button class="etbi-close-form right modal-close">
               <i class="lnr lnr-cross"></i>
            </button>
        </div>

        <div class="modal-content-area">


            <?php do_action( 'etbi_' . $modal_id . '_modal_content_area', $modal_id, $course ); ?>


        </div> <!-- .modal-content-area -->

        <div class="cssload-container"><div class="cssload-loading"><i></i><i></i><i></i><i></i></div></div>

    </div> <!-- etbi-modal-container -->

    <div class="overlay"></div>

</div> <!-- etbi-modal -->