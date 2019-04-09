// Navigation Bar
jQuery(function($){

	$(document).ready( function() {

		function userMenuOpen() {

			return $('#user-menu.dropdown').hasClass( 'open' );

		}

		function closeUserMenu() {

			if ( userMenuOpen() ) {

					 $( '#user-menu.dropdown' ).removeClass( 'open' );
					 $( '#user-menu.dropdown' ).attr( 'aria-hidden', 'true' );
					 $( '#user-menu-trigger' ).attr( 'aria-expanded', 'false' );

					 return true;

			}

			return false;

		}

		function openUserMenu() {

			if( ! userMenuOpen() ) {

				$( '#user-menu.dropdown' ).addClass( 'open' ); 
				$( '#user-menu.dropdown' ).attr( 'aria-hidden', 'false' );
				$( '#user-menu-trigger' ).attr( 'aria-expanded', 'true' );

				closeNotificationMenu();

				return true;

			}

			return false;

		}

		function notificationMenuOpen() {

			return $('#notification-menu.dropdown').hasClass( 'open' );

		}

		function closeNotificationMenu() {

			if ( notificationMenuOpen() ) {

					 $( '#notification-menu.dropdown' ).removeClass( 'open' );
					 $( '#notification-menu.dropdown' ).attr( 'aria-hidden', 'true' );
					 $( '#notification-menu-trigger' ).attr( 'aria-expanded', 'false' );

					 return true;

			}

			return false;

		}

		function openNotificationMenu() {

			if( ! notificationMenuOpen() ) {

				$( '#notification-menu.dropdown' ).addClass( 'open' ); 
				$( '#notification-menu.dropdown' ).attr( 'aria-hidden', 'false' );
				$( '#notification-menu-trigger' ).attr( 'aria-expanded', 'true' );

				closeUserMenu();

				return true;

			}

			return false;

		}

		$( document ).click( function() {

			closeUserMenu();
			closeNotificationMenu();

		} );


		$('#top-menu a.priority-nav-trigger').on( 'click', function(e) {

			var $main_menu = $('#main-menu.priority-nav'),
				menu_height = $main_menu.addClass( 'open expand' ).height();

			$main_menu.removeClass( 'expand' ).animate( {

				height : ( menu_height == $main_menu.height() ) ? 21 : menu_height 

			}, 300 );

		} );

		$('#top-menu a.priority-nav-close-trigger').on( 'click', function(e) {

			var $open_main_menu = $('#main-menu.priority-nav.open'),
				closed_menu_height = 21;

			$open_main_menu.animate( {

				height : ( closed_menu_height == $open_main_menu.height() ) ? closed_menu_height : 21 

			}, 300, function() {

				$open_main_menu.removeClass( 'open' ).css( 'height', '' );

			} );

		} );

		$('.dropdown').click( function(e) {

			e.stopPropagation();

		} );

		$('a.dropdown-trigger').on( 'click', function(e) {

			e.stopPropagation();

			if( e.currentTarget.id == "user-menu-trigger" ) {


				if ( userMenuOpen() ) {

					closeUserMenu();

					$( this ).attr( 'aria-expanded', 'false' );

				} else {

					openUserMenu();

					$( this ).attr( 'aria-expanded', 'true' );

				}


				$('#user-menu-dropdown-close').on( 'click', function(e) {

					e.preventDefault();

					closeUserMenu();

					

				} );

			}

			if( e.currentTarget.id == "notification-menu-trigger" ) {


				if ( notificationMenuOpen() ) {

					closeNotificationMenu();

					$( this ).attr( 'aria-expanded', 'false' );

				} else {

					openNotificationMenu();

					$( this ).attr( 'aria-expanded', 'true' );

				}


				$('#user-menu-dropdown-close').on( 'click', function(e) {

					e.preventDefault();

					closeNotificationMenu();

					

				} );				

			}

		} );

	} );

} );