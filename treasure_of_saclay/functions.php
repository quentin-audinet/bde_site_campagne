<?php

function getCode($team) {
    include "../db/db_connect.php";

    $code = array("1" => "V","2" => "I","3" => "V","5" => "E","6" => "L","8" => "'","11" => "A","12" => "S","13" => "S", "14" => "E");
    $req = "SELECT code FROM chase_teams WHERE name='$team'";
    $data = $db->query($req);
    $result = "<p id='code'>";
    if($row = $data->fetch()) {
        $team_code = $row['code'];
        for($i=0; $i<15; $i++) {
            if(isset($code[$i+1])) {
                if (($team_code >> ($i)) & 1) {
                    $result .= "<span class='letter'>" . $code[$i + 1] . "</span>";
                } else {
                    $result .= "<span class='letter'>&ensp;</span>";
                }
            }
        }
        $result.="</p>";
    } else {
        $result = "<p id='code'>" . "<span class='empty'></span>"*10 ."</p>";
    } return $result;
}

function listHints($team) {
    include "../db/db_connect.php";

    $hints = array("Avant de descendre les escaliers de l’enfer, Loys Petitjehan a réussi à laisser un dernier message, à jeter une dernière bouteille à la mer. Retrouvez-le !",
        " Au plaisir de Dieu 009", "RIP 1925 - 2017 303", "Un ancien compagnon de Petitjehan a perdu, en même temps que la vie, son prénom. Désespérée, son âme erre en attendant de le retrouver. Rendez-le-lui, il saura vous récompenser (en vrai, la première lettre ça devrait passer).",
        "tu leur parles pour qu’elle t’ouvre la porte, et encore… Pour une fois, intéresse-toi à elle, essaie de savoir ce qu’elle écoute comme musique.",
        "La tireuse du bar, ça consomme, et avec toutes les soirées qu’on fait, le réseau d’ALJT commence à lâcher. Y aurait moyen que tu nous donnes la puissance de la borne en bas d’ALJT, qu’on voie si on peut tirer un câble ?
", "Petitjehan allait souvent pêcher ici. Si t’allais jeter un coup d’oeil ?", "trois étages en-dessous des soirées, en 304");

    $req = "SELECT hints FROM chase_teams WHERE name='$team'";
    $data = $db->query($req);
    $result = "";
    if($row = $data->fetch()) {
        $team_hints = $row['hints'];
        for($i=3; $i<sizeof($hints)+3; $i++) {
            if(($team_hints >> $i) & 1) {
                $result .= "<li>".$hints[$i-3]."</li>";
            }
        }
    }
    return $result;
}

function checkCode($num, $code, $team) {
    include "../db/db_connect.php";
    //$table_lettres = ;
    $table_code = array("1" => "101", "2" => "103", "3" => "15", "4" => "24", "5" => "32", "6" => "29", "7" => "68", "8" => "72", "9" => "77", "10" => "32", "11" => "11", "12" => "23", "13" => "21", "14" => "1");
    $table_hints = array("1" => 264, "2" => 576, "3" => 144, "4" => 512, "5" => 96, "6" => 1040, "7" => 1032, "8" => 272, "9" => 1024, "10" => 1120, "11" => 256, "12" => 16, "13" => 32, "14" => 8);
    if($table_code[$num] === $code) {
        $req = "SELECT code, hints FROM chase_teams WHERE name='$team'";
        $data = $db->query($req);
        if($row = $data->fetch()) {
            $curr_code = $row['code'];
            $hints = $row['hints'];
        } else {$curr_code = 0;$hints=0;}
        $new_code = $curr_code | (1 << ($num-1));
        $new_hint = $hints | $table_hints[$num];

        $req = "UPDATE chase_teams SET code=$new_code, hints=$new_hint WHERE name='$team'";
        $db->exec($req);
        return true;
    } else {
        return false;
    }
}