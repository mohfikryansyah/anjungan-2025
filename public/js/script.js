window.onscroll = function() {
    const header = document.querySelector("nav");
    const scrollToTop = document.getElementById("scrollToTop");
    const fixedNv = header.offsetTop;

    if (window.pageYOffset > fixedNv) {
        scrollToTop.classList.remove("hidden")
    } else {
        scrollToTop.classList.add("hidden")
    }
};

function backTop() {
    window.scrollTo(0, 0);
}

var image = document.getElementsByClassName("thumbnail");
new simpleParallax(image, {
    scale: 2,
    delay: 0.9,
    // orientation: bottom,
});
