jQuery(document).ready(function($){
	$('.menubtn').click(function(){
		$(this).toggleClass('is-active');
        $('.menu').toggleClass('change-menu');
	});
    $('.sub-menu').slideUp();
    $('.parent').on('click',function(){
        $('.sub-menu').slideToggle();
        /*event.preventDefault();*/
    });
    $('.intour-list-parent').children().slideUp();
    $('.intour-list-parent').on('click', function(){
    	$(this).children().slideToggle();
    	/*event.preventDefault();*/
        var anchor = $(this).children();
    });
    $('.hr-tab li a').on('click', function(){
        event.preventDefault();
        var anchor = $(this).attr('href');
        var length = anchor.length;
        var anchorslide = anchor.slice(1, length)
        // console.log(anchor, length, anchorslide);
        $('.hr-tab-content-item').removeClass('show');
        $('.hr-tab-content').find('#'+anchorslide).addClass('show');
    });
    
    // $(window).scroll(function(){
    //     var top = $(window).scrollTop();
    //     if(top > 11) {
    //         $('.menu-wrap').addClass('scroll');
    //         $('.logo').addClass('width');
    //     }
    //     else {
    //         $('.menu-wrap').removeClass('scroll');
    //         $('.logo').removeClass('width');
    //     }
    // });
    $('.ser-select-wrap').on('click', function(){
        $('.ser-select-choice').slideToggle();
        $('.ser-select-wrap .fa-angle-down').toggleClass('rotate');
    });
    $('.search-btn').on('click', function(){
        console.log('cff');
        $('.search-frm').toggleClass('show-search-frm');
    });
});