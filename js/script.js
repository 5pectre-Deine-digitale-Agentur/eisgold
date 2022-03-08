(function( root, $, undefined ) {
	"use strict";

	$(function () {
		$('.img__reveal').mouseenter(function(){
			var img1 = $(this).attr('data-img1');
			var img2 = $(this).attr('data-img2');
			$('.img1').attr('src', img1);
			$('.img1').css('opacity', '1');
			$('.img2').attr('src', img2);
			$('.img2').css('opacity', '1');
		});
		$('.img__reveal').mouseleave(function(){
			$('.img1').css('opacity', '0');
			$('.img2').css('opacity', '0');
			$('.img1').attr('src', img);
			$('.img2').attr('src', img2);
		});
		$(".img__reveal").on('mousemove', function (e) {
			let imgX = -($(".img__reveal").position().left - e.clientX) * 0.25;
			let imgY = -($(".img__reveal").position().top - e.clientY) * 0.25;
    	$(".data__img").css("transform", "translate(" + imgX + "px, " + imgY + "px)");
		});
		$(document).scroll(function (e) {
			// containerPosition = $('.sticky__container').scrollTop()
			console.log($('').scrollTop())
		});
	});

} ( this, jQuery ));

document.addEventListener("load", () => {
	document.querySelector('h1 svg').classList.add('animate');
})
