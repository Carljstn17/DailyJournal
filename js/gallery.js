function showImage(category, image1, image2, image3) {
  var titleElement = document.getElementById("title");
  var oneImageElement = document.getElementById("myImage");
  var twoImageElement = document.getElementById("myImage2");
  var threeImageElement = document.getElementById("myImage3");

  titleElement.textContent = category;
  oneImageElement.src = image1;
  twoImageElement.src = image2;
  threeImageElement.src = image3;
}

document.getElementById("change-img1").addEventListener('click', function() {
  showImage("Life cycle", '../media/img1.jpg', '../media/img3.jpeg', '../media/img4.jpg');
});

document.getElementById("change-img2").addEventListener('click', function() {
  showImage("Underworld", '../media/img2.jpg', '../media/img6.jpeg', '../media/img5.jpg');
});

document.getElementById("change-img3").addEventListener('click', function() {
  showImage("Live", '../media/img7.jpg', '../media/img8.jpg', '../media/img9.jpeg');
});
