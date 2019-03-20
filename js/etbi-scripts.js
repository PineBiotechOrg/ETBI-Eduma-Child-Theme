(function ($) {

	var ETBI_Core = {
		init               : function () {
			var $doc = $(document),
				$win = $(window);

			this.open_or_close_modal = this.open_or_close_modal.bind(this);
			this.finish_course_modal = this.finish_course_modal.bind(this);
			this.open_finish_course_modal = this.open_finish_course_modal.bind(this);
			this.open_comment_modal = this.open_comment_modal.bind(this);
			this.close_comment_modal = this.close_comment_modal.bind(this);
			this.review_from_modal = this.review_from_modal.bind(this);

			$doc.on('click', '#comment-toggle', this.open_comment_modal);
			$doc.on('click', '.cd-user-modal.is-visible > .overlay', this.close_comment_modal);
			$doc.on('click', '.cd-user-modal-container .cd-close-form', this.close_comment_modal);
			$doc.on('click', '.etbi-modal.is-visible .etbi-close-form', this.closeModal);
			$doc.on('click', '.etbi-modal.is-visible .overlay', this.closeModal);
			$doc.on('click', '.completed-course-info', this.open_finish_course_modal);
			$doc.on('click', '.course-data .course-review .value', this.review_from_modal )

			$win.on('load', this.finish_course_modal );



		},
		open_or_close_modal : function( modal ) {

			if( modal.length > 0 ) {

				$( modal ).toggleClass( 'is-visible' );

			} else {

				$( '.etbi-modal' ).toggleClass( 'is-visible' );

			}

			

		},
		closeModal : function( modal ) {

			$( modal ).removeClass('is-visible');

		},
		open_comment_modal	   : function ( e ) {

			e.preventDefault();

			this.open_or_close_modal( '.cd-user-modal' );

		},
		close_comment_modal		: function ( e ) {

			e.preventDefault();

			this.closeModal( '.cd-user-modal' );

		},
		open_finish_course_modal : function ( e ) {

			this.open_or_close_modal( '.completed-course' );

		},
		finish_course_modal : function () {

			var $success_message = $( '.entry-content > .message.message-success' );

			if( $success_message.length ) {

				$success_message.append('<a href="#more-info" class="completed-course-info"><i class="lnr lnr-question-circle"></i></a>');

				this.open_finish_course_modal();

			}

		},
		review_from_modal : function ( e ) {

			console.log( 'HELLO WORLD' );

			 var review_tab = $('.course-tabs a[href="#tab-reviews"]');

	        if (review_tab.length > 0) {

	        	this.open_or_close_modal( '.completed-course' );

	            review_tab.trigger('click');
	            $('body, html').animate({
	                scrollTop: review_tab.offset().top - 50
	            }, 800);
	        }

		}
	};

	$(document).ready(function () {

		ETBI_Core.init();

	});

	return window.ETBI_Core = ETBI_Core;

})(jQuery);