/*
Custom js for accordion
 */
$(function() {
    var icons = {
      header: "ui-icon-plus",
      activeHeader: "ui-icon-minus"
    };
    $( ".hs-faq-accordion" ).accordion({
        icons: false,
	    collapsible: true,
		active: false,
		heightStyle: "content"
    });
    $( "#toggle" ).button().click(function() {
      if ( $( ".hs-faq-accordion" ).accordion( "option", "icons" ) ) {
        $( ".hs-faq-accordion" ).accordion( "option", "icons", null );
      } else {
        $( ".hs-faq-accordion" ).accordion( "option", "icons", icons );
      }
    });
  });