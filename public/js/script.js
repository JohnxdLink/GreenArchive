function open_define_one() {
    document.getElementById("explore-ask-main").style.display = "none";
    document.getElementById("explore-define-one").style.display = "flex";
}

function open_define_two() {
    document.getElementById("explore-define-one").style.display = "none";
    document.getElementById("explore-define-two").style.display = "flex";
}

function open_define_three() {
    document.getElementById("explore-define-two").style.display = "none";
    document.getElementById("explore-define-three").style.display = "flex";
}

function open_define_return() {
    document.getElementById("explore-define-three").style.display = "none";
    document.getElementById("explore-ask-main").style.display = "flex";
}
