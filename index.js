/* navbar */
$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 885) {
            $('#navbarre').addClass("active");
        } else {
            $('#navbarre').removeClass("active");
        }
    });
});



/*open-close section album*/

function openclosespoilalbum(div) {
    let divContenu = div.getElementsByTagName("div")[0];
    if (divContenu.classList.contains("active")) {
        divContenu.classList.remove("active");
    } else {
        divContenu.classList.add("active");
    }
}


/*open-close album*/
function openclosespoil(div) {
    let divContenu = div.getElementsByTagName("div")[0];
    if (divContenu.classList.contains("active")) {
        divContenu.classList.remove("active");
    } else {
        divContenu.classList.add("active");
    }
}

/*popup*/
function OpenModal() {
    let element = document.getElementById('overlay')
    element.style.display = 'block'
}

function CloseModal() {
    let element = document.getElementById('overlay')
    element.style.display = 'none'
}

ScrollReveal().reveal(".titredisco");
ScrollReveal().reveal("#alignement");
ScrollReveal().reveal(".droite");
ScrollReveal().reveal("#gauche");