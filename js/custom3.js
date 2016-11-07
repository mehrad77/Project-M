/*=============================================================
    Authour URL: www.designbootstrap.com
    
    http://www.designbootstrap.com/

    License: MIT

    http://opensource.org/licenses/MIT

    100% Free To use For Personal And Commercial Use.

    IN EXCHANGE JUST TELL PEOPLE ABOUT THIS WEBSITE
   
========================================================  */

$(document).ready(function () {

    /*====================================
    SCROLLING SCRIPTS
    ======================================*/

    $('.scroll-me a').bind('click', function (event) { //just pass scroll-me in design and start scrolling
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1200, 'easeInOutExpo');
        event.preventDefault();
    });



    /*====================================
    VAGAS SLIDESHOW SCRIPTS
    ======================================
    $.vegas('slideshow', {
        firstTransition: 'fade',
    firstTransitionDuration: 5000,
    transition: 'slideDown2',
    transitionDuration: 2000,
        backgrounds: [
            { src: 'assets/img/1.jpg', fade: 500, delay: 9000 },
            { src: 'assets/img/2.jpg', fade: 500, delay: 9000 },
            { src: 'assets/img/3.jpg', fade: 500, delay: 9000 }
        ],
    overlay: '/js/vegas/overlays/15.png'
});
  
*/
    $("body").vegas({
        firstTransition: 'fade',
        firstTransitionDuration: 4000,
        transitionDuration: 2000,
        slides: [
            { src: 'js/vegas/1.jpg' },
            { src: 'js/vegas/2.jpg' },
            { src: 'js/vegas/3.jpg' },
            { src: 'js/vegas/4.jpg' }
        ],
        overlay: 'js/vegas/01.png'
    });
    $("body").vegas('pause');

    /*====================================
    WRITE YOUR CUSTOM SCRIPTS BELOW
    ======================================*/



    /* Time Line */


    var my_posts = $("[rel=tooltip]");

    var size = $(window).width();
    for (i = 0; i < my_posts.length; i++) {
        the_post = $(my_posts[i]);

        if (the_post.hasClass('invert') && size >= 767) {
            the_post.tooltip({ placement: 'left' });
            the_post.css("cursor", "pointer");
        } else {
            the_post.tooltip({ placement: 'rigth' });
            the_post.css("cursor", "pointer");
        }
    }


});



$(document).ready(function () {
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});






