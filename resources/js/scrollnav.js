window.addEventListener("scroll", function(){
    let header = document.querySelector(("header"))

    if (window.scrollY>0) {

        header.style.backgroundColor="#151517";

    }else{

        header.style.backgroundColor="transparent";

    }

})