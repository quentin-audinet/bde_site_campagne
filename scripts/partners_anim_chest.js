let id=null;

const open = () => {
    const chest = document.getElementById("chest_img");
    chest.setAttribute("src","images/chest_opening-min.gif");
    chest.style.cursor = "auto";
    chest.removeEventListener("click",open);
    setTimeout(move_logos, 820);

};

class Point {
    constructor(x,y) {
        this.x=x;
        this.y=y;
    }
}

const move_logos = () => {

    let id=null;
    let logos_obj = document.getElementsByClassName("logo");
    let logos = [];
    const positions = [
        new Point(23,15),
        new Point(23,15),
        new Point(61,15),
        new Point(61,15),
        new Point(42,12),
        new Point(42,12),
        new Point(4,20),
        new Point(4,20),
        new Point(80,20),
        new Point(80,20)];

    const offx = 50;
    const offy = 50;
    const interval_cpt = 30;
    for(let logo of logos_obj) {
        logo.style.opacity = "1";
        logos.push({
            obj:logo,
            posx: 50,
            posy: 50
        });
    }
    let cpt=0;
    clearInterval(id);
    id = setInterval(anim,20);
    function anim() {
        if(cpt>interval_cpt) {
            clearInterval(id);
        } else {
            for(let i in logos) {
                let logo = logos[i];
                logo.posx = chg_scale(cpt,50, positions[i].x, interval_cpt);
                logo.posy = droite(logo.posx, 50, 50, positions[i].x, positions[i].y);

                logo.obj.style.top = logo.posx+'%';
                if(i%2==0){             //Logos de gauche
                    logo.obj.style.left = logo.posy + '%';
                } else {                //Logos de droite
                    logo.obj.style.right = logo.posy + '%';
                }
                const size = chg_scale(cpt,30,100,interval_cpt);
                logo.obj.style.width = size+'px';
                logo.obj.style.height = size+'px';
            }
            cpt+=1;
        };
    }
};
const chg_scale = (x,xa,xb,interval) => {
    return (x/interval)*(xb-xa)+xa;
}

const droite = (x,xa,ya,xb,yb) => {
    return ya + (yb-ya)*(x-xa)/(xb-xa)
}
document.getElementById("chest_img").addEventListener("click", open);