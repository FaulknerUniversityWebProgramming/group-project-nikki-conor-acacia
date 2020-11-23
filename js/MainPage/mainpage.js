var figure = document.querySelector("#featured");
var image = figure.getElementsByTagName('img')[0];
var caption = figure.getElementsByTagName('figcaption')[0];



document.getElementById("thumbnails").onclick = function(event) {
let target = event.target;
enlarge(target)
};


function enlarge(target) {
        image.src = target.src.replace("small", "medium");
        image.title = target.title;
        caption.innerHTML = target.title;
        
}

image.onmouseover = function() {mymouseover()};
image.onmouseout = function() {mymouseout()};

window.onload = function mymouseover() {
        caption.style.transition = "opacity 1s";
        caption.style.opacity = 0.8;
}

window.onload = function mymouseout() {
        caption.style.transition = "opacity 1s";
        caption.style.opacity = 0;
}