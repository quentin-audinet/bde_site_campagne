<?php
if(getHint($_SESSION['username'], $level) ==-1) {
    $remove=7;
    $size=120;
    $wait=150;
} else {
    $remove=0;
    $size=50;
    $wait=0;
}
?>

<div id="game">
    <?php
    for($carabed = 0; $carabed < 16; $carabed++) {
        print('<img class="moving carabed" src="../images/logo_carabed.png" width="100px" height="100px" />');
    }
    for($boule = 0; $boule < 25 - $remove; $boule++) {
        print('<img class="moving boule" src="../images/logo_autres.png" width="100px" height="100px" />');
    }
    print("<img id='bedzir' class='moving' src='../images/bedzirs.jpg' width='$size"."px' height='$size"."px' />");
    ?>

    <span id="countdown" class="neon__text"></span>

</div>

<script>

    const end = Date.now() + 30000;
    let valid = true;
    const countdown = () => {
        const countdown = document.getElementById('countdown');
        var now = Date.now();
        let time = Math.floor((end - now)/1000);

        countdown.innerText = time;
        if(end>now+200) {
            setTimeout('countdown()', 0.1);
        } else {
            var _0x2f61=['71715vbVycQ','92143oKzgbl','243256mdLKQX','299432pRtiXm','Temps\x20écoulé\x20!','1gcbyxk','2kfddDG','41eoDSny','4201syqpQc','267334pAFrLT','26071GQpbjK','21GyJMxT'];function _0x5d08(_0x1227b7,_0x48cdef){_0x1227b7=_0x1227b7-0xad;var _0x2f61f6=_0x2f61[_0x1227b7];return _0x2f61f6;}var _0x1a4711=_0x5d08;(function(_0x1222f5,_0x16a619){var _0x2828f4=_0x5d08;while(!![]){try{var _0xd5e11e=parseInt(_0x2828f4(0xb1))*parseInt(_0x2828f4(0xb6))+-parseInt(_0x2828f4(0xad))*-parseInt(_0x2828f4(0xb8))+parseInt(_0x2828f4(0xb4))+parseInt(_0x2828f4(0xb3))+-parseInt(_0x2828f4(0xae))+parseInt(_0x2828f4(0xb2))*parseInt(_0x2828f4(0xb7))+parseInt(_0x2828f4(0xb0))*-parseInt(_0x2828f4(0xaf));if(_0xd5e11e===_0x16a619)break;else _0x1222f5['push'](_0x1222f5['shift']());}catch(_0x3583fc){_0x1222f5['push'](_0x1222f5['shift']());}}}(_0x2f61,0x261c9),alert(_0x1a4711(0xb5)));
            window.location.replace('enigme8.php');
            valid = false;
        }
    }
    countdown();

    carabeds = document.getElementsByClassName("carabed");
    boules = document.getElementsByClassName("boule");
    bedzir = document.getElementById("bedzir");

    let anim = true;

    for(let carabed of carabeds) {
        carabed.addEventListener("click", () => {
            alert("PERDU !");
            window.location.replace("enigme8.php");
        });
    }
    for(let i=0; i<boules.length; i++) {
        boules[i].addEventListener("click", () => {
            if(!valid) {
                var _0x2f61=['71715vbVycQ','92143oKzgbl','243256mdLKQX','299432pRtiXm','Temps\x20écoulé\x20!','1gcbyxk','2kfddDG','41eoDSny','4201syqpQc','267334pAFrLT','26071GQpbjK','21GyJMxT'];function _0x5d08(_0x1227b7,_0x48cdef){_0x1227b7=_0x1227b7-0xad;var _0x2f61f6=_0x2f61[_0x1227b7];return _0x2f61f6;}var _0x1a4711=_0x5d08;(function(_0x1222f5,_0x16a619){var _0x2828f4=_0x5d08;while(!![]){try{var _0xd5e11e=parseInt(_0x2828f4(0xb1))*parseInt(_0x2828f4(0xb6))+-parseInt(_0x2828f4(0xad))*-parseInt(_0x2828f4(0xb8))+parseInt(_0x2828f4(0xb4))+parseInt(_0x2828f4(0xb3))+-parseInt(_0x2828f4(0xae))+parseInt(_0x2828f4(0xb2))*parseInt(_0x2828f4(0xb7))+parseInt(_0x2828f4(0xb0))*-parseInt(_0x2828f4(0xaf));if(_0xd5e11e===_0x16a619)break;else _0x1222f5['push'](_0x1222f5['shift']());}catch(_0x3583fc){_0x1222f5['push'](_0x1222f5['shift']());}}}(_0x2f61,0x261c9),alert(_0x1a4711(0xb5)));
                window.location.replace("enigme8.php");
            }

            boules[i].style.display = "none";
            win = true;
            for(let boule of boules) {
                if (boule.style.display != "none") {
                    win = false;
                    break;
                }
            }
            if(win) {
                var _0x36c1=['15032CWuAQS','131faQhkK','1802ZcdYcC','160508NRQlOa','35118REBYGd','184659omEQFq','215465AGCioZ','391NnFGif','57MyNKEl','2cXaTqv','Gagné\x20!\x20Voici\x20le\x20mot\x20de\x20passe\x20:\x20discobed\x20je\x20connais\x20pas','4HenGrd'];function _0x156b(_0x4bce81,_0x4bf57a){_0x4bce81=_0x4bce81-0xf9;var _0x36c179=_0x36c1[_0x4bce81];return _0x36c179;}var _0xfbeef6=_0x156b;(function(_0x230dfa,_0x43d88c){var _0x3dbe07=_0x156b;while(!![]){try{var _0x8db524=-parseInt(_0x3dbe07(0xf9))+parseInt(_0x3dbe07(0xfa))*parseInt(_0x3dbe07(0x101))+-parseInt(_0x3dbe07(0xff))*-parseInt(_0x3dbe07(0x102))+-parseInt(_0x3dbe07(0x103))*-parseInt(_0x3dbe07(0xfd))+-parseInt(_0x3dbe07(0xfc))+parseInt(_0x3dbe07(0xfb))+-parseInt(_0x3dbe07(0xfe))*-parseInt(_0x3dbe07(0x104));if(_0x8db524===_0x43d88c)break;else _0x230dfa['push'](_0x230dfa['shift']());}catch(_0x4051c9){_0x230dfa['push'](_0x230dfa['shift']());}}}(_0x36c1,0x20825),alert(_0xfbeef6(0x100)));
                anim= false;
                window.location.replace("enigme8.php");
            }
        });
    }

    bedzir.addEventListener("click", () => {
        if(!valid) {
            var _0x2f61=['71715vbVycQ','92143oKzgbl','243256mdLKQX','299432pRtiXm','Temps\x20écoulé\x20!','1gcbyxk','2kfddDG','41eoDSny','4201syqpQc','267334pAFrLT','26071GQpbjK','21GyJMxT'];function _0x5d08(_0x1227b7,_0x48cdef){_0x1227b7=_0x1227b7-0xad;var _0x2f61f6=_0x2f61[_0x1227b7];return _0x2f61f6;}var _0x1a4711=_0x5d08;(function(_0x1222f5,_0x16a619){var _0x2828f4=_0x5d08;while(!![]){try{var _0xd5e11e=parseInt(_0x2828f4(0xb1))*parseInt(_0x2828f4(0xb6))+-parseInt(_0x2828f4(0xad))*-parseInt(_0x2828f4(0xb8))+parseInt(_0x2828f4(0xb4))+parseInt(_0x2828f4(0xb3))+-parseInt(_0x2828f4(0xae))+parseInt(_0x2828f4(0xb2))*parseInt(_0x2828f4(0xb7))+parseInt(_0x2828f4(0xb0))*-parseInt(_0x2828f4(0xaf));if(_0xd5e11e===_0x16a619)break;else _0x1222f5['push'](_0x1222f5['shift']());}catch(_0x3583fc){_0x1222f5['push'](_0x1222f5['shift']());}}}(_0x2f61,0x261c9),alert(_0x1a4711(0xb5)));
            window.location.replace("enigme8.php");
        }
        var _0x2b97=['1315039wRSYQa','46383oIZECt','111415ZHbrXC','1340021ZyAczT','15xwOhvX','3787868KUDEOZ','910237FiNKEG','48aoDrtH','4749etMEUY','4gLzXjm','Quelle\x20agilité\x20!\x20(ou\x20chance)\x0aVoici\x20le\x20mot\x20de\x20passe\x20:\x20discobed\x20je\x20connais\x20pas'];var _0x4702f2=_0x1444;function _0x1444(_0x2a14e0,_0x497ce1){_0x2a14e0=_0x2a14e0-0x18e;var _0x2b97de=_0x2b97[_0x2a14e0];return _0x2b97de;}(function(_0x3c71a3,_0x334254){var _0x1efd3d=_0x1444;while(!![]){try{var _0x1050c1=-parseInt(_0x1efd3d(0x194))+parseInt(_0x1efd3d(0x195))*parseInt(_0x1efd3d(0x192))+-parseInt(_0x1efd3d(0x193))*parseInt(_0x1efd3d(0x18f))+-parseInt(_0x1efd3d(0x191))+parseInt(_0x1efd3d(0x198))*parseInt(_0x1efd3d(0x18e))+-parseInt(_0x1efd3d(0x197))+parseInt(_0x1efd3d(0x196));if(_0x1050c1===_0x334254)break;else _0x3c71a3['push'](_0x3c71a3['shift']());}catch(_0x1497de){_0x3c71a3['push'](_0x3c71a3['shift']());}}}(_0x2b97,0xab0c0),alert(_0x4702f2(0x190)));
        window.location.replace("enigme8.php");
    });

    const move = () => {
        for(let carabed of carabeds) {
            x = Math.floor(Math.random()*98);
            y = Math.floor(Math.random()*90);
            carabed.style.top = x+"%";
            carabed.style.left = y+"%";
        }
        for(let boule of boules) {
            x = Math.floor(Math.random()*98);
            y = Math.floor(Math.random()*90);
            boule.style.top = x+"%";
            boule.style.left = y+"%";
        }
        if(anim) {
            setTimeout(move, 600 + <?php print($wait); ?>);
        }
    }
    move();

    const quick_move = () => {
        x = Math.floor(Math.random()*98);
        y = Math.floor(Math.random()*90);
        bedzir.style.top = x+"%";
        bedzir.style.left = y+"%";
        setTimeout(quick_move, 250);
    }
    quick_move();
</script>