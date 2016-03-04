// javascript slider

    var myImage = document.getElementById("myPhoto");

    var imageArray = ["img/home/home-bg1.png", "img/home/home-bg2.png", "img/home/home-bg3.png", "img/home/home-bg4.png","img/home/home-bg5.png"];

    var imageIndex = 0;

    function imageSlider() {
        document.getElementById("myPhoto").setAttribute("src", imageArray[imageIndex]);
        imageIndex++;

        if (imageIndex >= imageArray.length) {
            imageIndex = 0;

        }
    }

    var intervalHandle = setInterval(imageSlider, 4000);

    // stoping slide on mouse click
    // myPhoto.onclick = function () {
    //     clearInterval(intervalHandle);

    // }

