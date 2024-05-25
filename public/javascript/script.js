const rumahsakit = document.querySelector(".rumahsakit");
const sistempakar = document.querySelector(".sistempakar");
const blog = document.querySelector(".blog");

blog.addEventListener("click", function () {
    var ele = document.getElementById("blog");
    window.scrollTo(ele.offsetLeft, ele.offsetTop);
});
rumahsakit.addEventListener("click", function () {
    var ele = document.getElementById("rumahsakit");
    window.scrollTo(ele.offsetLeft, ele.offsetTop);
});
sistempakar.addEventListener("click", function () {
    var ele = document.getElementById("sistempakar");
    window.scrollTo(ele.offsetLeft, ele.offsetTop);
});
