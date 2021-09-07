var slideIndexDois = 1;
showDivsDois(slideIndexDois);

function plusDivsDois(m) {
  showDivsDois(slideIndexDois += m);

}

function showDivsDois(m) {
  var i;
  var y = document.getElementsByClassName("Slides2");
  if (m > y.length) {slideIndexDois = 1;};    
  if (m < 1) {slideIndexDois = y.length;};
  for (i = 0; i < y.length; i++) {
     y[i].style.display = "none";  
  }
  y[slideIndexDois-1].style.display = "block";  



    setTimeout(showDivsDois, 2000); // Change image every 2 seconds
    
}
var slideIndexDois = 0;
carousel();

function carousel() {
    var i;
    var y = document.getElementsByClassName("Slides2");
    for (i = 0; i < y.length; i++) {
      y[i].style.display = "none"; 
    }
    slideIndexDois++;
    if (slideIndexDois > y.length) {slideIndexDois = 1} 
    y[slideIndexDois-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
}