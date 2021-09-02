/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

  // Remove empty P tags created by WP inside of Accordion and Orbit
  jQuery('.accordion p:empty, .orbit p:empty').remove();


  jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
      // Get the SVG tag, ignore the rest
      var $svg = jQuery(data).find('svg');
      // Add replaced image's ID to the new SVG
      if(typeof imgID !== 'undefined') { $svg = $svg.attr('id', imgID); }
      // Add replaced image's classes to the new SVG
      if(typeof imgClass !== 'undefined') { $svg = $svg.attr('class', imgClass+' replaced-svg'); }
      // Remove any invalid XML tags as per http://validator.w3.org
      $svg = $svg.removeAttr('xmlns:a');
      // Replace image with new SVG
      $img.replaceWith($svg);
    }, 'xml');
  });


  // Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen responsive-embed'/>");
    } else {
      jQuery(this).wrap("<div class='responsive-embed'/>");
    }
  });

});

/* Initiate the moby */
var mobyMenu = new Moby( {
  menu              : $( '#menu-container' ), // The menu that will be cloned
  mobyTrigger       : $( '#menu-icon' ), // Button that will trigger the Moby menu to open
  subMenuOpenIcon   : "<img  src='/content/themes/cognitive/assets/images/arrow-right-thin-white.svg' class='slick-next svg' />",
  subMenuCloseIcon  : '<i class="fas fa-caret-up"></i>',
  template          : '<div class="moby-close"><span class="moby-close-icon"></span></div><div class="moby-wrap"><div class="moby-menu"></div></div>'
} );