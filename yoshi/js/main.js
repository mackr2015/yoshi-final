





// Scroll Animation

$(function () {

    $(".scroll-top").click(function () {
//       $(window).scrollTop(0,100); 

        $('html, body').animate({
            scrollTop: 0
        }, 1250);

    });



    $(".fancybox").fancybox({
        helpers: {
            title: {
                overlay: {
                    css: {
                        'background': 'rgba(58, 42, 45, 1)'
                    }

                }
            }


        },
        nextEffect: 'fade',
        prevEffect: 'fade'

    });
    
    
    $(".slide").slidesjs({
        // from http://slidesjs.com/
        height: 1500,
        navigation: false,
        pagination: false
        
        
        
        
    });

});


// fancybox image preview







// functions for form






