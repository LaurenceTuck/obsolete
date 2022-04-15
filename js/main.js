$(document).ready( function() {

    var btn = document.getElementById("nav-btn");
    var title = document.getElementById("site-title");
    var nav = document.getElementById("main-nav");

    btn.onclick = function () {
        if (nav.style.display == "none") {
            rotateBtnRight();
            nav.style.display = "block";
            if (screen.width > 999) {
                title.style.display = "none";
            }
        } else {
            rotateBtnLeft();
            nav.style.display = "none";
            if (screen.width > 999) {
                title.style.display = "block";
            }
        }
    }

    function rotateBtnRight(d = 0) {
        if (d <= 90) {
            let btn = document.getElementById("nav-btn");
            btn.style.transform = 'rotate(' + d + 'deg)';
            d += 10;
            setTimeout(function () { rotateBtnRight(d); }, 5);
        }
        return;
    }

    function rotateBtnLeft(d = 90) {
        if (d >= 0) {
            let btn = document.getElementById("nav-btn");
            btn.style.transform = 'rotate(' + d + 'deg)';
            d -= 10;
            setTimeout(function () { rotateBtnLeft(d); }, 5);
        }
        return;
    }

});