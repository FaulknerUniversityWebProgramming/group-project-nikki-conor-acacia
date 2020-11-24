var figure = document.querySelector("#featured");
var image = figure.getElementsByTagName('img')[0];

document.getElementById("thumbnails").onclick = function(event) {
let target = event.target;
enlarge(target)
};


function enlarge(target) {
        image.src = target.src.replace("small", "medium");
        image.title = target.title;
        
        
}



