$(document).ready(function() {
	$('div#header ul li').bind('mouseover', openSubMenu);
	$('div#header ul li').bind('mouseout', closeSubMenu);

	function openSubMenu() {
		$(this).find('ul').css('visibility','visible');	
	}
	
	function closeSubMenu() {
		$(this).find('ul').css('visibility','hidden');	
	}
});

