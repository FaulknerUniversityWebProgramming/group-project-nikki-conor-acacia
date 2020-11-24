var figure = document.querySelector("#featured");
var image = figure.getElementsByTagName('img')[0];
var images =["pictures/MainPage/medium/Clocktower.png",
             "pictures/MainPage/medium/Court.png",
             "pictures/MainPage/medium/Drive.png",
             "pictures/MainPage/medium/HPBuilding.png"];
document.getElementById("thumbnails").onclick = function(event) {
let target = event.target;
enlarge(target)
};


function enlarge(target) {
        image.src = target.src.replace("small", "medium");
        image.title = target.title;    
}
var imageIndex = 0;
function changeImage() {
  image.setAttribute("src",images[imageIndex]);
  imageIndex++;
  if (imageIndex >= images.length) {
    imageIndex = 0;
  }
}

setInterval(changeImage,8000);



