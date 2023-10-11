
const profile1Dot = document.getElementById("profile1");
const profile2Dot = document.getElementById("profile2");
const profile3Dot = document.getElementById("profile3");
const profile4Dot = document.getElementById("profile4");


// Add an event listener to the profile2 dot.
profile2Dot.addEventListener("click", function() {
  // Remove the `active` class from the profile1 dot.
  profile1Dot.classList.remove("active");
  profile3Dot.classList.remove("active");
  profile4Dot.classList.remove("active");

  // Add the `active` class to the profile2 dot.
  profile2Dot.classList.add("active");

  // Change the iframe source.
  iframe.src = "https://www.youtube.com/yLLFPPGri_E";
  const iframe = document.querySelector('.iframe');

// Set the interval at which to refresh the iframe.
const refreshInterval = 5000; // milliseconds

// Create a function to refresh the iframe.
function refreshIframe() {
  iframe.contentWindow.document.location.href = iframe.src;
}

// Start the interval.
setInterval(refreshIframe, refreshInterval);

  
  
  // Change the text of the `<p>` and `<h1>` elements.
  const imageText = document.querySelector(".image-text");
  const nameHeading = document.querySelector(".name");
  imageText.querySelector("p:first-child").textContent = "wanted";
  imageText.querySelector("p:last-child").textContent = "kulong nyo na po to.";
  nameHeading.textContent = "carl";

  // Change the image source.
  const imageContainer = document.querySelector(".image-container");
  const image = imageContainer.querySelector("img");
  image.src = "../media/profile2.jpg";

});

// Get the nav dot with the ID `profile3`.


// Add an event listener to the nav dot.
profile3Dot.addEventListener("click", function() {

  profile1Dot.classList.remove("active");
  profile2Dot.classList.remove("active");
  profile4Dot.classList.remove("active");

  // Add the `active` class to the profile3 dot.
  profile3Dot.classList.add("active");
  // Change the text of the `<p>` and `<h1>` elements.
  const imageText = document.querySelector(".image-text");
  const nameHeading = document.querySelector(".name");
  imageText.querySelector("p:first-child").textContent = "profile3";
  imageText.querySelector("p:last-child").textContent = "This is the profile3 description.";
  nameHeading.textContent = "Bobo";

  // Change the image source.
  const imageContainer = document.querySelector(".image-container");
  const image = imageContainer.querySelector("img");
  image.src = "../media/profile3.jpg";

  
});

profile4Dot.addEventListener("click", function() {

profile1Dot.classList.remove("active");
profile2Dot.classList.remove("active");
profile3Dot.classList.remove("active");

// Add the `active` class to the profile3 dot.
profile4Dot.classList.add("active");
// Change the text of the `<p>` and `<h1>` elements.
const imageText = document.querySelector(".image-text");
const nameHeading = document.querySelector(".name");
imageText.querySelector("p:first-child").textContent = "profile4";
imageText.querySelector("p:last-child").textContent = "This is the profile4 description.";
nameHeading.textContent = "Jessica";

// Change the image source.
const imageContainer = document.querySelector(".image-container");
const image = imageContainer.querySelector("img");
image.src = "../media/profile3.jpg";

});