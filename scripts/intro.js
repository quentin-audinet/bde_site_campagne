const lines = document.getElementsByClassName("line");
const begin = document.getElementById("begin");
const nb_line = lines.length;
let curr_line = 0;

const increaseOpacity = (elt, opacity, speed) => {
    if(opacity < 1) {
        opacity+=speed;
        elt.style.opacity = opacity;
        setTimeout(() => {
            increaseOpacity(elt, opacity,speed);
        }, 100);
    }
}

const showLines = () => {
    if(curr_line < nb_line) {
        increaseOpacity(lines[curr_line],0, 0.025);
        curr_line++;
        setTimeout(showLines, 4000);
    } else {
        increaseOpacity(begin, 0, 0.05);
    }
}

setTimeout(showLines, 5000);