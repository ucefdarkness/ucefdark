const humber = document.querySelector(".humb");
const mobile = document.querySelector(".nav-mob");

humber.addEventListener("click", function () {
  humber.classList.toggle("is-active");
  mobile.classList.toggle("is-active");
});