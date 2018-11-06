/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function( $ ) {
	"use strict";
	var sFont;
	
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title a, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );
	wp.customize( 'havawebsite_color_scheme', function( value ) {
		value.bind( function( to ) {

			if ( 'inverse' === to ) {

				$( 'body' ).css({
					background: '#222',
					color:      '#fff'
				});
				$( '.well' ).css({
					background: '#222',
					color:      '#fff',
					border: '0'
				});
				$( 'h2.widget-title' ).css({
					color:      '#fff',
				});
				$( 'h2.widget-title::before' ).css({
					color:      '#fff'
				});

			} else {

				$( 'body' ).css({
					background: '#FFFFFF',
					color:      '#333'
				});
				$( '.well' ).css({
				        background: '#f5f5f5',
					border: '1px solid #e3e3e3',
					color:'333'
				});
				$( 'h2.widget-title' ).css({
					color:      '#333'
				});
				$( 'h2.widget-title::before' ).css({
					color:      '#333'
				});
				$( 'h3.widget-title' ).css({
					color:      '#fff'
				});
				$( '.widget-title::before' ).css({
					color:      '#fff'
				});
			} // end if/else

		});
	});
	wp.customize( 'havawebsite_home_h1_color', function( value ) {
		value.bind( function( to ) {
			$( '#heading' ).css( 'color', to );
		} );
	});
	wp.customize( 'havawebsite_font_weight', function( value ) {
		value.bind( function( to ) {
			$( '#heading' ).css( 'font-weight', to );
		} );
	});
	wp.customize( 'havawebsite_home_h2_color', function( value ) {
		value.bind( function( to ) {
			$( '#heading2' ).css( 'color', to );
		} );
	});
	wp.customize( 'havawebsite_font_weight2', function( value ) {
		value.bind( function( to ) {
			$( '#heading2' ).css( 'font-weight', to );
		} );
	});
	wp.customize( 'havawebsite_home_p_color', function( value ) {
		value.bind( function( to ) {
			$( '#paragraph' ).css( 'color', to );
		} );
	});
	wp.customize( 'havawebsite_paragraph_weight', function( value ) {
		value.bind( function( to ) {
			$( '#paragraph' ).css( 'font-weight', to );
		} );
	});
	wp.customize( 'havawebsite_font', function( value ) {
		value.bind( function( to ) {
			$( '#welcome-text blockquote' ).css( 'font-family', to );
		} );
	})
	wp.customize( 'havawebsite_home_q_color', function( value ) {
		value.bind( function( to ) {
			$( '#welcome-text blockquote' ).css( 'color', to );
		} );
	});
	wp.customize( 'havawebsite_quote_weight', function( value ) {
		value.bind( function( to ) {
			$( '#welcome blockquote' ).css( 'font-weight', to );
		} );
	});
	wp.customize( 'havawebsite_heading_color', function( value ) {
		value.bind( function( to ) {
			$( 'h1,h2,h3,h4,h5,h6' ).css( 'color', to );
		} );
	});
	wp.customize( 'havawebsite_link_color', function( value ) {
		value.bind( function( to ) {
			$( 'a' ).css( 'color', to );
			$( '#masthead' ).css( 'border-color', to );
			$( '.glyphicon-phone-alt' ).css( 'color', to );
			$( '#social-contact-options ul li a' ).css( 'color', to );
			$( '.glyphicon-circle-arrow-up:before' ).css( 'color', to );
			$( '.site-description' ).css( 'color', to );
		} );
	});
	wp.customize( 'havawebsite_hoverlink_color', function( value ) {
		value.bind( function( to ) {
			$( 'a:hover' ).css( 'color', to );
			$( '.glyphicon-phone-alt:hover' ).css( 'color', to );
			$( '#social-contact-options ul li a:hover' ).css( 'color', to );
			$( '.main-navigation li:hover > a' ).css( 'color', to );
			$( '.main-navigation li:hover > a' ).css( 'color', to );
			$( '#footer-links li a:hover' ).css( 'color', to );
			$( '.glyphicon-circle-arrow-up:hover:before' ).css( 'color', to );
		} );
	});
	wp.customize( 'havawebsite_header_color', function( value ) {
		value.bind( function( to ) {
			$( '#masthead' ).css( 'background-color', to );
		} );
	});
	wp.customize( 'havawebsite_footer_color', function( value ) {
		value.bind( function( to ) {
			$( '.site-footer' ).css( 'background-color', to );
		} );
	});
	wp.customize( 'havawebsite_display_logo', function( value ) {
		value.bind( function( to ) {
			false === to ? $( '#logo' ).hide() : $( '#logo' ).show();
		} );
	});
	wp.customize( 'havawebsite_font', function( value ) {
		value.bind( function( to ) {

			switch( to.toString().toLowerCase() ) {

				case 'open-sans':
					sFont = 'Open Sans';
					break;
				case 'martel':
					sFont = 'Martel';
					break;
				case 'arial':
					sFont = 'Arial';
					break;
				case 'times':
					sFont = 'Times New Roman';
					break;
				default:
					sFont = 'Open Sans';
					break;

			} // end switch/case

			$( 'body' ).css({
				fontFamily: sFont
			});

		});

	});
	wp.customize( 'havawebsite_phonenumber', function( value ) {
		value.bind( function( to ) {
			$( '#phonenumber' ).text( to );
		});
	});

	wp.customize( 'havawebsite_heading_text', function( value ) {
		value.bind( function( to ) {
			$( '#heading' ).text( to );
		});
	});
	wp.customize( 'havawebsite_heading2_text', function( value ) {
		value.bind( function( to ) {
			$( '#heading2' ).text( to );
		});
	});
	wp.customize( 'havawebsite_paragraph_text', function( value ) {
		value.bind( function( to ) {
			$( '#paragraph' ).text( to );
		});
	});
	wp.customize( 'havawebsite_quote_text', function( value ) {
		value.bind( function( to ) {
			$( 'blockquote' ).text( to );
		});
	});
	wp.customize( 'havawebsite_logo_image', function( value ) {
		value.bind( function( to ) {
			$( '#company-logo' ).attr( 'src' , to );
		});
	});
	wp.customize( 'havawebsite_logo_image_alt', function( value ) {
		value.bind( function( to ) {
			$( '#company-logo' ).attr( 'alt' , to );
		});
	});
	wp.customize( 'havawebsite_slide1_image', function( value ) {
		value.bind( function( to ) {
			$( '#img-loc' ).attr( 'src' , to );
		});
	});
	wp.customize( 'havawebsite_slide1_image_alt', function( value ) {
		value.bind( function( to ) {
			$( '#img-loc' ).attr( 'alt' , to );
		});
	});
	wp.customize( 'havawebsite_slide2_image', function( value ) {
		value.bind( function( to ) {
			$( '#img-welcome' ).attr( 'src' , to );
		});
	});
	wp.customize( 'havawebsite_slide2_image_alt', function( value ) {
		value.bind( function( to ) {
			$( '#img-welcome' ).attr( 'alt' , to );
		});
	});
	wp.customize( 'havawebsite_button_image', function( value ) {
		value.bind( function( to ) {
			$( '#start-here-btn' ).attr( 'src' , to );
		});
	});
	wp.customize( 'havawebsite_button_link', function( value ) {
		value.bind( function( to ) {
			$( '#action a' ).attr( 'href' , to );
		});
	});
	wp.customize( 'havawebsite_button_alt', function( value ) {
		value.bind( function( to ) {
			$( '#start-here-btn' ).attr( 'alt' , to );
		});
	});
	wp.customize( 'havawebsite_action_text', function( value ) {
		value.bind( function( to ) {
			$( '#action-text p' ).text( to );
		});
	});
	wp.customize( 'havawebsite_dashicon_one', function( value ) {
		value.bind( function( to ) {
			$( ' #featured-head-1' ).class( to );
		});
	})
	wp.customize( 'havawebsite_dashicon_two', function( value ) {
		value.bind( function( to ) {
			$( '#featured-head-2' ).class( to );
		});
	});
	wp.customize( 'havawebsite_dashicon_three', function( value ) {
		value.bind( function( to ) {
			$( '#featured-head-3' ).class( to );
		});
	});
	wp.customize( 'havawebsite_dashicon_four', function( value ) {
		value.bind( function( to ) {
			$( '#featured-head-4' ).class( to );
		});
	});
	wp.customize( 'havawebsite_featured_one', function( value ) {
		value.bind( function( to ) {
			$( '#featured-head-1' ).text( to );
		});
	});
	wp.customize( 'havawebsite_featured_txt_one', function( value ) {
		value.bind( function( to ) {
			$( '#featured-text-1' ).text( to );
		});
	});
	wp.customize( 'havawebsite_featured_two', function( value ) {
		value.bind( function( to ) {
			$( '#featured-head-2' ).text( to );
		});
	});
	wp.customize( 'havawebsite_featured_txt_two', function( value ) {
		value.bind( function( to ) {
			$( '#featured-text-2' ).text( to );
		});
	});
	wp.customize( 'havawebsite_featured_three', function( value ) {
		value.bind( function( to ) {
			$( '#featured-head-3' ).text( to );
		});
	});
	wp.customize( 'havawebsite_featured_txt_three', function( value ) {
		value.bind( function( to ) {
			$( '#featured-text-3' ).text( to );
		});
	});
	wp.customize( 'havawebsite_featured_four', function( value ) {
		value.bind( function( to ) {
			$( '#featured-head-4' ).text( to );
		});
	});
	wp.customize( 'havawebsite_featured_txt_four', function( value ) {
		value.bind( function( to ) {
			$( '#featured-text-4' ).text( to );
		});
	});
	wp.customize( 'havawebsite_fullwidth_slide1', function( value ) {
		value.bind( function( to ) {
			$( '#full-slide-1' ).attr( 'src' , to );
		});
	});
	wp.customize( 'havawebsite_fullwidth_slide1_alt', function( value ) {
		value.bind( function( to ) {
			$( '#full-slide-1' ).attr( 'alt' , to );
		});
	});
	wp.customize( 'havawebsite_fullwidth_slide2', function( value ) {
		value.bind( function( to ) {
			$( '#full-slide-2' ).attr( 'src' , to );
		});
	});
	wp.customize( 'havawebsite_fullwidth_slide2_alt', function( value ) {
		value.bind( function( to ) {
			$( '#full-slide-2' ).attr( 'alt' , to );
		});
	});
	wp.customize( 'havawebsite_footer_copyright_text', function( value ) {
		value.bind( function( to ) {
			$( '#copyright-message' ).text( to );
		});
	});

})( jQuery );