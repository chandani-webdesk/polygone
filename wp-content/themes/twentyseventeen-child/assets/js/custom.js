jQuery(document).ready(function($) {
	jQuery('.review_menu').removeClass('current-menu-item');
    jQuery(".review_menu").on("click", function(e) {

        jQuery('.home_menu').removeClass('current-menu-item');
        jQuery(this).addClass('current-menu-item');
    });
    jQuery('.checkbox-763 input[type=checkbox]').on('change', function() {
        jQuery('.checkbox-763 input[type=checkbox]').not(this).prop('checked', false);  
    });

   /* jQuery(".responsive-menu-item-has-children a").on("click", function(e) { 
        if (jQuery(this).hasClass('clicked')) {
            jQuery(this + ' .responsive-menu-submenu').css('display','none');
            jQuery(this + ' .responsive-menu-subarrow').removeClass('responsive-menu-subarrow-active');
            jQuery(this + ' .responsive-menu-subarrow').empty().text('▼');
        
        }else{
            jQuery(this + ' .responsive-menu-submenu').css('display','block');
            jQuery(this + ' .responsive-menu-subarrow').addClass('responsive-menu-subarrow-active');
            jQuery(this + ' .responsive-menu-subarrow').empty().text('▲');
        }
    });*/
    jQuery(".responsive-menu-button").on("click", function(e) {
        //jQuery(this).addClass('is_open');
        if (jQuery(this).hasClass('is_open')) {
            jQuery(this).removeClass('is_open');
            jQuery('html').removeClass('responsive-menu-open');
        }else{
            jQuery(this).addClass('is_open');
            jQuery('html').addClass('responsive-menu-open');
            
        }
       jQuery(this).removeClass('is-active');
       // e.stopPropagation();
    });
	
    jQuery('.site-content-contain,header .topbar,header .header_logo_menu').click(function(e){    
	
	    if (jQuery(".responsive-menu-button").hasClass('is_open') ){
            jQuery(".responsive-menu-button").removeClass('is_open');
            jQuery('html').removeClass('responsive-menu-open');
        }else if(jQuery('.responsive-menu-button').hasClass('is-active')) {
            jQuery('.responsive-menu-button').removeClass('is-active');
        }
    });
    
    
  jQuery(window).scroll(function(){
  	var sticky = jQuery('.site-header'),
  	scroll = jQuery(window).scrollTop();
  	if (scroll >= 100) sticky.addClass('sticky-header');
  		else sticky.removeClass('sticky-header');
	});
    jQuery( ".site-header .container" ).append( jQuery( ".responsive-menu-button" ) );
    
});
/*physicians_testimonials*/
jQuery('.testimonials-cat8').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
/*end*/
/*patients_testimonials*/
jQuery('.testimonials-cat9').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
/*end*/


/*
Reviews
*/
/*physicians_testimonials*/
var str = parseInt(jQuery("#trating-cat8").length) + 1;

for (var i = 0; i <= str; i++){
  document.getElementById("cat8_stars_"+i).innerHTML = getStarsCat8(document.getElementById("rno_cat8_"+i).textContent);
}

function getStarsCat8(rating) {
  rating = Math.round(rating * 2) / 2;
  let output = [];
  for (var i = rating; i >= 1; i--)
    output.push('<i class="fa fa-star" aria-hidden="true"></i>&nbsp;');
  if (i == .5) output.push('<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;');
  for (let i = (5 - rating); i >= 1; i--)
    output.push('<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;');
  return output.join('');

}
/*end*/
/*patients_testimonials*/
var strcat9 = parseInt(jQuery("#trating-cat9").length) + 1;
for (var ii = 0; ii <= strcat9; ii++){
  document.getElementById("cat9_stars_"+ii).innerHTML = getStarsCat9(document.getElementById("rno_cat9_"+ii).textContent);
}

function getStarsCat9(rating) {
  rating = Math.round(rating * 2) / 2;
  let output = [];
  for (var i = rating; i >= 1; i--)
    output.push('<i class="fa fa-star" aria-hidden="true"></i>&nbsp;');
  if (i == .5) output.push('<i class="fa fa-star-half-o" aria-hidden="true"></i>&nbsp;');
  for (let i = (5 - rating); i >= 1; i--)
    output.push('<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;');
  return output.join('');

}
/*end*/


