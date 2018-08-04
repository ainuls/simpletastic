$(document).ready(function(){
	$(".sidebar-open > .btn").on('click', function(){
		$('#sidebar').addClass('sidebar-show');
	});

	$(".sidebar-close > .btn").on('click', function(){
		$('#sidebar').removeClass('sidebar-show');
	});

	$(".nav-dropdown")
	.append("<i class='icon-arrow-down nav-arrow'></i>")
	.on('click', function(e){
		$(this).find('.nav-arrow').toggleClass('icon-arrow-down icon-arrow-up');
	});

	var sidebarFooter = $('#sidebar-footer').outerHeight();
	$('#sidebar > .sidebar-nav').css('margin-bottom', sidebarFooter+'px');
});