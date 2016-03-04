

// image hover effect

    var galleryImg = ["../img/gallery/box1.jpg", "../img/gallery/box2.jpg", 
        "../img/gallery/box3.jpg", "../img/gallery/box4.jpg", "../img/gallery/box5.jpg", "../img/gallery/box6.jpg",
        "../img/gallery/box7.jpg","../img/gallery/box8.jpg"];

    function hoverOn(index) {

        for (var a = 0; a < galleryImg.length; a++) {
            if(a !== index) {
                var imgsId = document.getElementById('im-bx' + a);
                imgsId.style.opacity = '0.4';
                document.getElementById('im-bx' + index).style.cursor = 'pointer';
            }

        }

    }
    
    function hoverOff() {
        
        for(var i = 0; i < galleryImg.length; i++) {
            var imgsId = document.getElementById('im-bx' + i);
                imgsId.style.opacity = '1';
        }
    }
    
    // hover nav links
    
    $(function(){
        $(".nav-links").mouseover(function(){
            
            $(this).css("border-bottom", "2px solid #d709ce");
            });
            
        $(".nav-links").mouseleave(function(){
            $(this).css("border-bottom", "");    
            
        });
        
        
    });

