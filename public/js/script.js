function open_define_two() {
    document.getElementById("explore-define-one").style.display = "none";
    document.getElementById("explore-define-two").style.display = "block";
    document.getElementById("explore__ask-image-one").style.display = "none";
    document.getElementById("explore__ask-image-two").style.display = "block";
}

function open_define_three() {
    document.getElementById("explore-define-two").style.display = "none";
    document.getElementById("explore-define-three").style.display = "block";
    document.getElementById("explore__ask-image-two").style.display = "none";
    document.getElementById("explore__ask-image-three").style.display = "block";
}

function open_define_return() {
    document.getElementById("explore-define-three").style.display = "none";
    document.getElementById("explore-define-one").style.display = "block";
    document.getElementById("explore__ask-image-three").style.display = "none";
    document.getElementById("explore__ask-image-one").style.display = "block";
}
