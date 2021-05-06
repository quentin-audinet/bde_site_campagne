<?php
if(getHint($_SESSION['username'], $level) ==-1) {
    $add=10000;
} else {
    $add=0;
}
?>

<div id="game"><p class="countdown"></p>

    <div class="cases">
        <?php
        $nb_listeux = random_int(5,15);
        print("<script>const nb_listeux = $nb_listeux;</script>");
        $images = array();
        for($i = 0; $i < $nb_listeux; $i++) {
            do {
                $id = random_int(1, 33);
                $balise = "<img class='photo listeux' src='../images/treasure_chase/photos/$id.jpeg' />";
            } while(in_array($balise, $images)==1);
            array_push($images, $balise);
        }
        for($i = 0; $i < 28 - $nb_listeux; $i++) {
            do {
                $id = random_int(34, 69);
                $balise = "<img class='photo random' src='../images/treasure_chase/photos/$id.jpeg' />";
            } while(in_array($balise, $images)==1);
            array_push($images, $balise);
        }

        shuffle($images);
        $line = 0;
        foreach($images as $img) {
            if($line%7==0) {
                print(" <div class='image'>".$img);
            } else if ($line%7==6) {
                print($img . "</div>");
            } else {
                print($img);
            }
            $line++;
        } ?>

        <button id="submit">Vérifier</button>
    </div>

    <p class="countdown"></p>
</div>

<?php
print("
<script>
const end = Date.now() + 16000 + $add;
let valid = true;
const countdown = () => {
    const countdowns = document.getElementsByClassName('countdown');
    var now = Date.now();
    let time = Math.floor((end - now)/1000);
    
    for(let count of countdowns) {
       count.innerText = time;
    }
    if(end>now+200) {
    let actualisation = setTimeout('countdown()', 0.1);
    } else {
        alert('Temps écoulé !');
        window.location.replace('enigme7.php');
        valid = false;
    }
}
countdown();
</script>
");

?>

<script>
    const clickImage = (elt) => {
        if(elt.classList.contains("clicked")) {
            elt.classList.remove("clicked");
            elt.style.border = "none";
            elt.style.opacity = "1";
        } else {
            elt.classList.add("clicked");
            elt.style.border = "solid 5px #d7c6c1";
            elt.style.opacity = "0.5";
        }
    }

    const verify = () => {
        clicked = document.getElementsByClassName("clicked");
        if(!valid) {
            var _0x4def=['491757obAMhM','208318NNqaEu','4xbYTZD','11aWNCZc','625938jrqfMT','581546PAevDp','94385saaIyo','Temps\x20écoulé\x20!','64007zOczCx','221623EBLuJz'];function _0x2b47(_0x2d773e,_0x28381a){_0x2d773e=_0x2d773e-0xf0;var _0x4defc=_0x4def[_0x2d773e];return _0x4defc;}var _0x1ae843=_0x2b47;(function(_0xf0cca2,_0x1a62e1){var _0xb0902a=_0x2b47;while(!![]){try{var _0x4042f7=parseInt(_0xb0902a(0xf1))+-parseInt(_0xb0902a(0xf6))+parseInt(_0xb0902a(0xf2))+-parseInt(_0xb0902a(0xf3))*-parseInt(_0xb0902a(0xf9))+-parseInt(_0xb0902a(0xf5))*parseInt(_0xb0902a(0xf0))+-parseInt(_0xb0902a(0xf7))+parseInt(_0xb0902a(0xf8));if(_0x4042f7===_0x1a62e1)break;else _0xf0cca2['push'](_0xf0cca2['shift']());}catch(_0x5ea42f){_0xf0cca2['push'](_0xf0cca2['shift']());}}}(_0x4def,0x5bc4d),alert(_0x1ae843(0xf4)));
            window.location.replace('enigme7.php');
        } else {
            if (clicked.length != nb_listeux) {
                var _0x3669 = ['380959ldjGSv', '1671949RjnWtx', 'Raté\x20!', '2uxTDbz', '95788dPDYnu', '25799EAdgLU', '869346OcozdJ', '409309OoSCSP', '5bUooch', '23tviyDo', '196145bkhuEs', '1uYMqTM'];

                function _0x3f1c(_0x43f3c8, _0x142ede) {
                    _0x43f3c8 = _0x43f3c8 - 0x103;
                    var _0x366983 = _0x3669[_0x43f3c8];
                    return _0x366983;
                }

                var _0x5d39d1 = _0x3f1c;
                (function (_0x2cba8f, _0x3830d6) {
                    var _0x59dbb2 = _0x3f1c;
                    while (!![]) {
                        try {
                            var _0x4ec304 = -parseInt(_0x59dbb2(0x109)) * -parseInt(_0x59dbb2(0x10a)) + -parseInt(_0x59dbb2(0x10d)) + -parseInt(_0x59dbb2(0x105)) * parseInt(_0x59dbb2(0x106)) + parseInt(_0x59dbb2(0x10b)) * -parseInt(_0x59dbb2(0x103)) + -parseInt(_0x59dbb2(0x104)) * -parseInt(_0x59dbb2(0x10e)) + -parseInt(_0x59dbb2(0x10c)) + parseInt(_0x59dbb2(0x107));
                            if (_0x4ec304 === _0x3830d6) break; else _0x2cba8f['push'](_0x2cba8f['shift']());
                        } catch (_0x1a8011) {
                            _0x2cba8f['push'](_0x2cba8f['shift']());
                        }
                    }
                }(_0x3669, 0x9059b), alert(_0x5d39d1(0x108)));
                window.location.replace('enigme7.php');
            } else {
                for (let img of clicked) {
                    if (!img.classList.contains("listeux")) {
                        var _0x3669 = ['380959ldjGSv', '1671949RjnWtx', 'Raté\x20!', '2uxTDbz', '95788dPDYnu', '25799EAdgLU', '869346OcozdJ', '409309OoSCSP', '5bUooch', '23tviyDo', '196145bkhuEs', '1uYMqTM'];

                        function _0x3f1c(_0x43f3c8, _0x142ede) {
                            _0x43f3c8 = _0x43f3c8 - 0x103;
                            var _0x366983 = _0x3669[_0x43f3c8];
                            return _0x366983;

                        }

                        var _0x5d39d1 = _0x3f1c;
                        (function (_0x2cba8f, _0x3830d6) {
                            var _0x59dbb2 = _0x3f1c;
                            while (!![]) {
                                try {
                                    var _0x4ec304 = -parseInt(_0x59dbb2(0x109)) * -parseInt(_0x59dbb2(0x10a)) + -parseInt(_0x59dbb2(0x10d)) + -parseInt(_0x59dbb2(0x105)) * parseInt(_0x59dbb2(0x106)) + parseInt(_0x59dbb2(0x10b)) * -parseInt(_0x59dbb2(0x103)) + -parseInt(_0x59dbb2(0x104)) * -parseInt(_0x59dbb2(0x10e)) + -parseInt(_0x59dbb2(0x10c)) + parseInt(_0x59dbb2(0x107));
                                    if (_0x4ec304 === _0x3830d6) break; else _0x2cba8f['push'](_0x2cba8f['shift']());
                                } catch (_0x1a8011) {
                                    _0x2cba8f['push'](_0x2cba8f['shift']());
                                }
                            }
                        }(_0x3669, 0x9059b), alert(_0x5d39d1(0x108)));
                        window.location.replace('enigme7.php');
                    }

                }
                var _0x23b9 = ['477918BHoKva', '747331EIhtNU', '34AIhTob', '1lHmoVI', '183354UglpXZ', '1364AaaLpJ', '294958sEfNhK', '1dcpjYc', '419653clKOzH', 'Bravo,\x20tu\x20peux\x20valider\x20le\x20challenge\x20avec\x20le\x20mot\x20de\x20passe:\x20Les\x20Carabeds\x20sont\x20trop\x20beaux', '440997acxSFl'];

                function _0x57cc(_0x57f507, _0x3ccd49) {
                    _0x57f507 = _0x57f507 - 0x1db;
                    var _0x23b9c1 = _0x23b9[_0x57f507];
                    return _0x23b9c1;
                }

                var _0x3957c2 = _0x57cc;
                (function (_0x5c3963, _0x47f72c) {
                    var _0x543a41 = _0x57cc;
                    while (!![]) {
                        try {
                            var _0x56fa18 = -parseInt(_0x543a41(0x1e0)) * -parseInt(_0x543a41(0x1dd)) + parseInt(_0x543a41(0x1e5)) * parseInt(_0x543a41(0x1e2)) + parseInt(_0x543a41(0x1e1)) + parseInt(_0x543a41(0x1db)) + -parseInt(_0x543a41(0x1e3)) + -parseInt(_0x543a41(0x1de)) * -parseInt(_0x543a41(0x1df)) + -parseInt(_0x543a41(0x1dc));
                            if (_0x56fa18 === _0x47f72c) break; else _0x5c3963['push'](_0x5c3963['shift']());
                        } catch (_0x5d71bf) {
                            _0x5c3963['push'](_0x5c3963['shift']());
                        }
                    }
                }(_0x23b9, 0x4388b), alert(_0x3957c2(0x1e4)));
                window.location.replace('enigme7.php');
            }
        }
    }

    submit_btn = document.getElementById("submit");
    submit_btn.addEventListener("click", verify);

    const images = document.getElementsByClassName('photo');
    for(let elt of images) {
        elt.addEventListener("click", ()=> {clickImage(elt)});
    }
</script>