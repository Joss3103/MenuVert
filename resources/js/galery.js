const fulImgBox = document.getElementById("#fulImgBox"),
fulimg = document.getElementById("#fulImg");

function openFulImg() {
    fulImgBox.style.display = "flex";
    fulimg.src = reference;
}
function closeImg() {
    fulImgBox.style.display = "none";
}