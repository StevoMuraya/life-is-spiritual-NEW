let main_nav = document.getElementById("main_nav");
let mobile_nav = document.getElementById("mobile_nav");
let sticky = main_nav.offsetTop;

let hamburger = document.getElementById("hamburger");

window.onscroll = function () {
  navScroll();
};
hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("clicked");
  mobile_nav.classList.toggle("show");
});
function navScroll() {
  if (window.pageYOffset > sticky) {
    main_nav.classList.add("sticky");
    mobile_nav.classList.add("sticky");
  } else {
    main_nav.classList.remove("sticky");
    mobile_nav.classList.remove("sticky");
  }
}
