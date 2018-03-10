(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		
		
	});
	
})(jQuery, this);


window.onload = function() {
	//selectors
	const navButton = document.getElementById('nav-button');
	const closeNavButton = document.getElementById('close-nav-button');
	const navMenu = document.querySelector('.header-nav .nav-sidebar');
	
	
	//functions 
	function toggleNav(e){
		navMenu.classList.toggle('open');
	}
	
	//event listeners
	navButton.addEventListener('click', toggleNav);  
	closeNavButton.addEventListener('click', toggleNav);  
	
};

