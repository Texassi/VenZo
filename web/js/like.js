const like = document.querySelector("#like");

const popup2 = document.querySelector(".popup2");
const popupClose2 = document.querySelector("#popup_close2");


like.addEventListener("click", (e) => {
    e.preventDefault();
    popup2.classList.add("popup--open2");

});

popupClose2.addEventListener("click", (e) => {
    e.preventDefault();
    popup2.classList.remove("popup--open2");

});
