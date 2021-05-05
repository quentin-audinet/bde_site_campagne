const html = document.getElementsByTagName("html")[0];

const texts = document.getElementsByClassName("hidden_text");
var opacity = 0;

const change_opacity = () => {
    if(opacity <1) {
        opacity += 0.01;
    }

    for(let elt of texts) {
        elt.style.opacity = opacity;
    }


}
const sol = "NNNEESWWNNEEES";
var answer = "";
const enter = (event) => {

    switch (event.key) {
        case "ArrowUp":
            answer += "N";
            break;
        case "ArrowDown":
            answer += "S";
            break;
        case "ArrowLeft":
            answer += "W";
            break;
        case "ArrowRight":
            answer += "E";
            break;
        default:
            break;
    }

    if (answer.search(sol) != -1) {
        answer = "";
        window.location.replace("create_account.php");
    }

}

html.addEventListener("click", change_opacity);

document.addEventListener('keydown', enter);