// $(document).ready(function(){
// $('button').toggleClass('toggled')
// });
// (jQuery);
jq = jQuery.noConflict();

jq(document).ready(function(){
	jq('.menu-toggle').click(function(){
		jq('.widget-area').toggleClass('toggled');
	});
	
});
			
