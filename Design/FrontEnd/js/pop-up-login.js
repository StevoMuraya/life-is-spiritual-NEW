let btn_buy = document.getElementById("btn_buy");
let popup_view = document.getElementById("popup_view");

btn_buy.addEventListener("click", function () {
  popup_view.classList.toggle("show");
});
popup_view.addEventListener("click", function () {
  //   setTimeout(() => {
  popup_view.classList.toggle("show");
  //   }, 500);
});
