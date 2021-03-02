var canvas, ctx;
var image;
var iMouseX, iMouseY = 1;
var bMouseDown = false;
var iZoomRadius = 100;
var iZoomPower = 10;

const clear = () => {
    ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
}

const drawScene = () => {
    clear();
    if(bMouseDown) {
        ctx.drawImage(image, 0 - iMouseX * (iZoomPower - 1), 0 - iMouseY * (iZoomPower - 1),
            ctx.canvas.width * iZoomPower, ctx.canvas.height * iZoomPower);
        ctx.globalCompositeOperation = 'destination-atop';

        var oGrd = ctx.createRadialGradient(iMouseX, iMouseY, 0, iMouseX, iMouseY, iZoomRadius);
        oGrd.addColorStop(0.8, "rgba(0, 0, 0, 1.0)");
        oGrd.addColorStop(1.0, "rgba(0, 0, 0, 0.1)");
        ctx.fillStyle = oGrd;
        ctx.beginPath();
        ctx.arc(iMouseX, iMouseY, iZoomRadius, 0, Math.PI * 2, true);
        ctx.closePath();
        ctx.fill();
    }

    ctx.drawImage(image, 0, 0, ctx.canvas.width, ctx.canvas.height);
}

$(function(){
    image = new Image();
    image.onload = function () {
    }
    image.src = "images/map.jpg";

    canvas = document.getElementById('map_panel');
    ctx = canvas.getContext('2d');
    $('#map_panel').mousemove(function (e){
        var canvasOffset = $(canvas).offset();
        iMouseX = Math.floor(e.pageX - canvasOffset.left);
        iMouseY = Math.floor(e.pageY - canvasOffset.top);
    });
    $('#map_panel').mousedown(function (e) {
        bMouseDown = true;
        document.getElementById("map_panel").style.cursor = "none";
    });
    $('#map_panel').mouseup(function (e) {
        bMouseDown = false;
        document.getElementById("map_panel").style.cursor = "zoom-in";


    });
    setInterval(drawScene, 30);
});