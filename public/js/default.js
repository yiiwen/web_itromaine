window.onload = function() {
    var height = document.documentElement.scrollTop || document.body.scrollTop;//滚动条y轴上的距离
    if (height > 100) {
        document.getElementById("top-container").style.background = "#FFF";
        document.getElementById("top-container").style.boxShadow = "2px 2px 5px #CCC";
        var element = document.querySelectorAll(".nav-container ul li a");

        for (var i=0;i<element.length;i++) {
            element[i].style.color = '#807777';
            element[i].className += "block";
        }
    }
}

window.addEventListener("scroll",function(e){
    var height = document.documentElement.scrollTop || document.body.scrollTop;//滚动条y轴上的距离
    if (height > 100) {
        var background = document.getElementById("top-container").style.background;
        if (background == 'none') {
            document.getElementById("top-container").style.background = "#FFF";
            document.getElementById("top-container").style.boxShadow = "2px 2px 5px #CCC";
            var element = document.querySelectorAll(".nav-container ul li a");

            for (var i=0;i<element.length;i++) {
                element[i].style.color = '#807777';
                element[i].className += "block";
            }
        }
    } else {
        document.getElementById("top-container").style.background = "none";
        document.getElementById("top-container").style.boxShadow = "none";
        var element = document.querySelectorAll(".nav-container ul li a");
        for (var i=0;i<element.length;i++) {
            element[i].style.color = '#FFF';
            element[i].className = "";
        }
    }
});