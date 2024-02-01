// ===== for toggle button     =======
function sideMenu() {
  var menu = document.getElementById('menu-list-section');
  menu.style.left = "0"; // Slide in from the right
}

function hideMenu() {
  var menu = document.getElementById('menu-list-section');
  menu.style.left = "-100%"; // Hide off-screen to the right
}


// ============  show search-bar     ========
function searchbar() {
  document.getElementById('header-menu-form').style.display = "block";
  document.getElementById('show-searchbar').style.display = "none";
}
// ============   show dropdown menu =============

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("show-dropdown-1");
  const showSpecify = document.querySelector(".drop-down-1");

  toggleButton.addEventListener("click", function () {
    if (showSpecify.style.display === "none" || showSpecify.style.display === "") {
      showSpecify.style.display = "block";
    } else {
      showSpecify.style.display = "none";
    }
  });
});

// ---------

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("show-dropdown-2");
  const showSpecify = document.querySelector(".drop-down-2");

  toggleButton.addEventListener("click", function () {
    if (showSpecify.style.display === "none" || showSpecify.style.display === "") {
      showSpecify.style.display = "block";
    } else {
      showSpecify.style.display = "none";
    }
  });
});

// -------

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("show-dropdown-3");
  const showSpecify = document.querySelector(".drop-down-3");

  toggleButton.addEventListener("click", function () {
    if (showSpecify.style.display === "none" || showSpecify.style.display === "") {
      showSpecify.style.display = "block";
    } else {
      showSpecify.style.display = "none";
    }
  });
});


// -------

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("show-dropdown-4");
  const showSpecify = document.querySelector(".drop-down-4");

  toggleButton.addEventListener("click", function () {
    if (showSpecify.style.display === "none" || showSpecify.style.display === "") {
      showSpecify.style.display = "block";
    } else {
      showSpecify.style.display = "none";
    }
  });
});


// -------
document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("show-dropdown-5");
  const showSpecify = document.querySelector(".drop-down-5");

  toggleButton.addEventListener("click", function () {
    if (showSpecify.style.display === "none" || showSpecify.style.display === "") {
      showSpecify.style.display = "block";
    } else {
      showSpecify.style.display = "none";
    }
  });
});


// -------

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("show-dropdown-6");
  const showSpecify = document.querySelector(".drop-down-6");

  toggleButton.addEventListener("click", function () {
    if (showSpecify.style.display === "none" || showSpecify.style.display === "") {
      showSpecify.style.display = "block";
    } else {
      showSpecify.style.display = "none";
    }
  });
});



// ============     side menu bar -=================


function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}


// ===========   phone section details -section   =========

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}


// ----   about more details of product hide js code  -----

document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.getElementById("toggle-button");
  const showSpecify = document.querySelector(".show-specify");

  toggleButton.addEventListener("click", function () {
    if (showSpecify.style.display === "none" || showSpecify.style.display === "") {
      showSpecify.style.display = "block";
    } else {
      showSpecify.style.display = "none";
    }
  });
});

// ----------- review bar  ----------------------
// First progress bar
const progressBar = document.getElementById('progress-bar');

function updateProgressBar() {
  let width = 0;
  const interval = setInterval(() => {
    if (width >= 99) {
      clearInterval(interval);
    } else {
      width++;
      progressBar.style.width = width + '%';
      progressBar.innerText = width + '%';
    }
  }, 50);
}

// Call the updateProgressBar1 function to start the progress
updateProgressBar();

// First progress bar
const progressBar1 = document.getElementById('progress-bar-1');

function updateProgressBar1() {
  let width = 0;
  const interval1 = setInterval(() => {
    if (width >= 90) {
      clearInterval(interval1);
    } else {
      width++;
      progressBar1.style.width = width + '%';
      progressBar1.innerText = width + '%';
    }
  }, 50);
}

// Call the updateProgressBar1 function to start the progress
updateProgressBar1();

// Second progress bar
const progressBar2 = document.getElementById('progress-bar-2');

function updateProgressBar2() {
  let width = 0;
  const interval2 = setInterval(() => {
    if (width >= 70) {
      clearInterval(interval2);
    } else {
      width++;
      progressBar2.style.width = width + '%';
      progressBar2.innerText = width + '%';
    }
  }, 50);
}

// Call the updateProgressBar2 function to start the progress
updateProgressBar2();

// Third progress bar
const progressBar3 = document.getElementById('progress-bar-3');

function updateProgressBar3() {
  let width = 0;
  const interval3 = setInterval(() => {
    if (width >= 30) {
      clearInterval(interval3);
    } else {
      width++;
      progressBar3.style.width = width + '%';
      progressBar3.innerText = width + '%';
    }
  }, 50);
}

// Call the updateProgressBar3 function to start the progress
updateProgressBar3();




// -----  show compare-section   ----

function compareModal() {
  var compareSection = document.getElementById('compare-section');
  compareSection.style.display = "block";
  setTimeout(function () {
    compareSection.style.bottom = "0"; // Slide in from the right
  }, 100); // Use a small delay for the transition to work correctly
};

// -=-------  remove X icon js    ======
function compareTab() {
  var compareSection = document.getElementById('compare-section');
  compareSection.style.bottom = "-100"; // Slide out to the bottom
  setTimeout(function () {
    compareSection.style.display = "none";
  }, 10); // Delay the hide until after the transition
};


// ===========  compare product  js    ========

function changeProductView() {
  var hideProduct = document.querySelector('.prod-section');
  var showProduct = document.querySelector('#after-add-compare');

  hideProduct.style.display = "none";
  showProduct.style.display = "block";
}

function removeCompare() {
  var hideProduct = document.querySelector('.prod-section');
  var showProduct = document.querySelector('#after-add-compare');
  hideProduct.style.display = "block";
  showProduct.style.display = "none";
}

// ---------     catagories page ----- slider   ------


// --------------------------------------------  
//             top to scroll    
// -------------------------------------------- 


// Get the button
let mybutton = document.getElementById("scrollTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}