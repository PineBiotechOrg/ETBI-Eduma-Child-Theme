;(function ($, lp_checkout_form_params) {
	"use strict";

	var current_user = lp_checkout_form_params.current_user,
        default_btn_txt = lp_checkout_form_params.default_btn_txt,
        close_btn_txt = lp_checkout_form_params.close_btn_txt,
		$purchase_button = $( '.button-purchase-course' ),
		$checkout_form_container = $( '#lp-inline-checkout-form' ),
		$checkout_form = $('#learn-press-checkout'),
		// $payment_info = $( '#learn-press-payment' ),
		offset_margin = $('.course-payment').height() * 2;


    function _ready() {

    	var $landing_button = $( '.thim-course-landing-button .lp-course-buttons' ).find( 'button.button-purchase-course' );

        $('form.purchase-course').submit(function (e) {
        	e.preventDefault();

            var $form = $( this ),
            	$button = $('button.button-purchase-course'),
            	$course_payment = $( '.course-payment' ),
            	course_id = $( 'input[name=purchase-course]' ).val(),
            	nonce = $( 'input[name=nonce]' ).val(),
                $view_cart = $('.view-cart-button', this);

            if( $( 'form.purchase-course' ).data( "submitted" ) ) {

            	if( $button.hasClass('closer') ) {

            		if( $( e.target ).parent().parent().hasClass( 'thim-course-landing-button' ) ) {

		        		$('html, body').animate({
					        scrollTop: $("#lp-inline-checkout-form").offset().top - offset_margin 
					    }, 200 );

            		} else {

						$( '.checkout-form' ).hide();

						$button.removeClass('closer')
                    	       .text( default_btn_txt );  

            		}     		

            	} else {

            		$( '.checkout-form' ).show(); 

				    $('html, body').animate({
				        scrollTop: $("#lp-inline-checkout-form").offset().top - offset_margin 
				    }, 200 );

            		$button.addClass('closer')
                    	   .text( 'Close' ); 
                     $landing_button.text( default_btn_txt )
                     			    .removeClass('closer');

            	}

				return;

			}

            $button.removeClass('added').addClass('loading');
            

            $.ajax({
                url: window.location.href,
                type: 'post',
                data: {

                	'lp-ajax'  	: 'etbi_inline_checkout',
                	course_id 	: course_id,
                	nonce 		: nonce

                },
                beforeSend: function() {

        			$( 'form.purchase-course' ).data( 'submitted', true );

                },
                error: function ( error, data, y) {
                	console.log( error, data, y );
                    $button.removeClass('loading');
                },
                success: function (response) {

                    console.log( response );

                	var order = response,
                		$checkout_button = $( response ).find( '#learn-press-checkout-place-order' );

                    $button.removeClass('loading').addClass('closer');
                    $button.text( close_btn_txt );
                    $landing_button.text( default_btn_txt ).removeClass('closer');
                    $checkout_form.append( order );

                    $checkout_form_container.removeClass('hidden');


                     $('html, body').animate({
				        scrollTop: $("#lp-inline-checkout-form").offset().top - offset_margin 
				    }, 200 );

                    // $view_cart.removeClass('hide-if-js');
                    // if (typeof response.redirect === 'string') {
                    //     window.location.href = response.redirect;
                    // }
                }
            });
            return false;
        });
    }

    $(document).ready(_ready);
    
})(jQuery, lp_checkout_form_params);
