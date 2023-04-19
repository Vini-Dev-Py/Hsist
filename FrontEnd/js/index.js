const botao = document.querySelector(".btn-fixed");

window.addEventListener("scroll", function () {
    if (window.scrollY == 0) {
        botao.classList.remove("visible")
    } else {
        botao.classList.add("visible")
    }
});