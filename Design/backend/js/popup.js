let popup_btn = document.getElementById("popup_btn");
let close_popup = document.getElementById("close_popup");
let popup = document.getElementById("popup");

popup_btn.addEventListener("click", function () {
  popup.classList.toggle("show");
  close_popup.classList.toggle("show");
});

close_popup.addEventListener("click", function () {
  popup.classList.toggle("show");
  close_popup.classList.toggle("show");
});
