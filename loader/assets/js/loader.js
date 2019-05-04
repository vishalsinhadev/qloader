$(document).ready(function() {
	$.ajaxSetup({
	 beforeSend: function() {
	    $('#qloader').show();
	 },
	 complete: function() {
	    $('#qloader').hide();
	 },
	 success: function() {
	    $('#qloader').hide();
	 },
	 error: function() {
		 $('#qloader').hide();
	 }
	});
});
$(document).ajaxSend(function(){
	$('#qloader').show();
});
$(document).ajaxComplete(function(){
	$('#qloader').hide();
});