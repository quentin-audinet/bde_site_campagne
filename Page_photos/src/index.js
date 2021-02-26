function tournerLaCarte() {
    var elements = this.parentNode.querySelectorAll("div[class^='card']");
    for (var i = 0; i < elements.length; i++) {
        if (elements[i].className == "card-single") {
            elements[i].className += " rotated";
        } else {
            elements[i].className = "card-single";
        }
    }
}

window.onload = function () {
    buttons = document.querySelectorAll("div[class^='card']");
    for (i = 0; i < buttons.length; i++) {
        element = buttons[i];
        element.addEventListener("click", tournerLaCarte);
    }
};
