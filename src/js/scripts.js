$(document).ready(function(){

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

	var s = skrollr.init({
		forceHeight: false
	});

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
