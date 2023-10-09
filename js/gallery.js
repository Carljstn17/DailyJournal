const firstTitle = document.getElementById("title");
const oneImageElement = document.getElementById("myImage"); 
const twoImageElement = document.getElementById("myImage2"); 
const threeImageElement = document.getElementById("myImage3"); 
const oneButtonElement = document.getElementById("change-img1"); 

oneButtonElement.addEventListener('click', function(){ 
  firstTitle.textContent = "Life cycle";
  oneImageElement.src = '../media/img1.jpg';
  twoImageElement.src = '../media/img3.jpeg'; 
  threeImageElement.src = '../media/img4.jpg'; 
});

const secondTitle = document.getElementById("title");
const fourImageElement = document.getElementById("myImage"); 
const fiveImageElement = document.getElementById("myImage2"); 
const sixImageElement = document.getElementById("myImage3"); 
const twoButtonElement = document.getElementById("change-img2"); 
twoButtonElement.addEventListener('click', function(){ 
  secondTitle.textContent = "Underworld";
  fourImageElement.src = '../media/img2.jpg';
  fiveImageElement.src = '../media/img6.jpg'; 
  sixImageElement.src = '../media/img5.jpg'; 
});

const thirdTitle = document.getElementById("title");
const sevenImageElement = document.getElementById("myImage"); 
const eightImageElement = document.getElementById("myImage2"); 
const nineImageElement = document.getElementById("myImage3"); 
const threeButtonElement = document.getElementById("change-img3"); 
threeButtonElement.addEventListener('click', function(){ 
  thirdTitle.textContent = "Live";
  sevenImageElement.src = '../media/img7.jpg';
  eightImageElement.src = '../media/img8.jpg'; 
  nineImageElement.src = '../media/img9.jpeg'; 
});