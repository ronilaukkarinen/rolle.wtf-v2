/**
 * http://www.mattcromwell.com/detecting-mobile-devices-javascript/
 *
 **/
var isMobile = {
Android: function() { return navigator.userAgent.match(/Android/i); },
BlackBerry: function() { return navigator.userAgent.match(/BlackBerry/i); },
iOS: function() { return navigator.userAgent.match(/iPhone|iPad|iPod/i); },
Opera: function() { return navigator.userAgent.match(/Opera Mini/i); },
Windows: function() { return navigator.userAgent.match(/IEMobile/i); },
any: function() { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };

$(document).ready(function() {

	// Fix viewport units on iOS
	window.viewportUnitsBuggyfill.init();

	// Twitter update
	$(".tweet").tweet({
		modpath: '/inc/twitter/',
		username: "rolle",
		join_text: "auto",
		count: 1,
		retweets: true,
		auto_join_text_default: "",
		auto_join_text_ed: "",
		auto_join_text_ing: "",
		auto_join_text_reply: "",
		auto_join_text_url: "",
		loading_text: "<span class=\"tweet_text\">Loading...</span>",
		avatar_size: "80px",
		template: "{avatar} Viimeksi tweetattu {time}."
	});

	if ( isMobile.any() ) {
	} else {

	// Scrolling animations
	skrollr.init({
		forceHeight: false
	});

	}

	var timelineBlocks = $('.timeline-block'),
		offset = 0.8;

	// Hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	// On scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame)
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.timeline-icon, .timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.timeline-icon').hasClass('is-hidden') ) && $(this).find('.timeline-icon, .timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}

});

$(window).ready(function() {

	// Flags
	$(".langs a").click(function() { $(".lang").toggleClass('visible'); });

	if(lang.currentLang == "en") {
		$(".langs .lang.fi").addClass('visible');
	} else {
		$(".langs .lang.en").addClass('visible');
	}

	console.log(lang);

});
