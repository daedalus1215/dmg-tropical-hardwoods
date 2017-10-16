jQuery(document).ready(function() {
    /* scroll on buttons */
      jQuery('.js--scroll-to-products').click(function() {
              jQuery('html, body').animate({ scrollTop: jQuery('.js--section-products').offset().top}, 1000);
      });
    
      jQuery('.js--scroll-to-benefits').click(function() {
              jQuery('html, body').animate({ scrollTop: jQuery('.js--section-benefits').offset().top}, 1000);
      });

});    