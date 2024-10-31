// Make sure there is no conflict to be safe
var $j=jQuery.noConflict();

// Create the tooltips only on document load
$j(document).ready(function() 
{
	// Target links with the class "scan-link"
	$j('a.scan-link').each(function()
  		{
		
		// We make use of the .each() loop to gain specific access to each element on the page via the "this" keyword...
		$j(this).qtip({
		   content: {
		      text: 'Loading<img src="' + pkmn_linker_params.plugin_url + 'images/ellipsis.gif" height="19" width="19" alt="..." class="pkmn-loader" />', // Show loading while gathering the information
		      ajax: {
		      	//url: 'http://pkmncards.com/api/', // Use the PKMN API to get card data and show it via ajax
		      	url: 'http://pkmncards.com/wp-admin/admin-ajax.php',
		      	data: {
		      		link: $j(this).attr('href'), // pass link
		      		site: pkmn_linker_params.home_url, // pass site
		      		action : 'show_card',
		      	},
		      	dataType: 'jsonp', // Use JSONP so we don't have any cross-site restrictions!
		      	success: function(pkmnrequest) {
	                  // Set the tooltip content using the .set() API call and stop the default action
	                  this.set('content.text', pkmnrequest.output);
	                  return false;
	               }
		      },
		   },
		   position: {
		      my: 'center',
		      at: 'center',
		      target: $j(window), // Show tooltip at center of the page
		      viewport: $j(window), 
		      effect: false, // Disable positioning animation
		   },
		   show: {
		      event: 'click', // Click link to show tooltip
		      solo: true, // Only show one tooltip at a time
		      modal: true, // Dim the background
		   },
		   hide: {
		      event: 'unfocus', // Hide the tooltip back the background is clicked
		   },
		   style: {
	          classes: 'pkmn-tooltip',
	       },
	       
		})
		
  		})
  		.click(function(event) { event.preventDefault(); }); // Prevent link from opening when it's clicked
  		
  		//$j('<style type="text/css"> .pkmn-tooltip img { max-height: ' + ( $j(window).height() - 40 ) + 'px } </style>').appendTo('head'); // Make sure image doesn't get too big for smaller screens

});