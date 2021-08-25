var currentSlide = 0;
var testimonies = document.getElementsByClassName("testimony-text");
var imageIndex = 1;

for (let index = 0; index < testimonies.length; index++) {
  var dot = document.createElement("div");
  dot.className = "testimony-dot";
  document.getElementById("testimony_indicator").appendChild(dot);
}

const testimony = document.querySelectorAll(".testimony-text");
const testimony_dots = document.querySelectorAll(".testimony-dot");

console.log(testimony_dots.length);

const initialize = (n) => {
  testimony.forEach((slide) => {
    slide.classList.remove("active");
    testimony_dots.forEach((dot) => {
      dot.classList.remove("active");
    });
  });
  testimony[n].classList.add("active");
  testimony_dots[n].classList.add("active");
};

testimony_dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    initialize(index);
    currentSlide = index;
    timer.stop();
    timer.start();
  });
});

function Timer(fn, t) {
  var timerObj = setInterval(fn, t);

  this.stop = function () {
    if (timerObj) {
      clearInterval(timerObj);
      timerObj = null;
    }
    return this;
  };

  // start timer using current settings (if it's not already running)
  this.start = function () {
    if (!timerObj) {
      this.stop();
      timerObj = setInterval(fn, t);
    }
    return this;
  };

  // start with new or original interval, stop current interval
  this.reset = function (newT = t) {
    t = newT;
    return this.stop().start();
  };
}

const nextone = () => {
  currentSlide >= slides.length - 1 ? (currentSlide = 0) : currentSlide++;
  initialize(currentSlide);

  timer.stop();
  timer.start();
};

const prevone = () => {
  currentSlide <= 0 ? (currentSlide = slides.length - 1) : currentSlide--;
  initialize(currentSlide);

  timer.stop();
  timer.start();
};

var timer = new Timer(function () {
  nextone();
}, 4000);
document.addEventListener("DOMContentLoaded", initialize(currentSlide));
