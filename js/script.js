(function( root, $, undefined ) {
	"use strict";

	$(function () {
		$('.burger').on('click', function() {
			$('#nav__items').toggleClass('active');
		  $(this).toggleClass('open');
		});
	});

} ( this, jQuery ));

var targetWidth = 768;
if ( $(window).width() >= targetWidth) {
	console.log('running');
	const scroll = new LocomotiveScroll({
			el: document.querySelector('[data-scroll-container]'),
			smooth: true
	});
} else {
	$('#nav__items .current-menu-item').append(
		'<svg xmlns="http://www.w3.org/2000/svg" width="430.906" height="283.707" viewBox="0 0 430.906 283.707"><defs><style>.cls-1 {fill: none;stroke: #faaf3a;stroke-width: 5px;}</style></defs><path id="Pfad_495" data-name="Pfad 495" class="cls-1" d="M5040.446,504.668s-8.12-99.013,74.508-139.111,137.993-28.764,223.084-7.331,115.482,71.984,115.482,71.984S5493.181,499.86,5431.552,555s-143.245,65.212-177.681,61.932-190.355-10.718-185.746-151.891" transform="translate(-5037.699 -336.297)"/></svg>'
	);
}

window.addEventListener("load", ()=>{
	document.querySelector('main').style.opacity = 1;
	document.querySelector('main').style.transform = "translateY(0)";
	document.querySelector('.load__effect').classList.add('active');
});

document.addEventListener("load", () => {
	document.querySelector('h1 svg').classList.add('animate');
})
