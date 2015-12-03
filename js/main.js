$(document).ready(function() {

	//Попап менеджер FancyBox
	$(".fancybox").fancybox();
	
	$("#callback").submit(function() {
		setTimeout(function() {
			$.fancybox.close();
		}, 1000);
		return false;
	});

});