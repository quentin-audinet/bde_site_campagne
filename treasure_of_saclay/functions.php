<?php

function getCode($team) {
    include "../db/db_connect.php";

    $code = array("V","I","V","E","L","'","A","S","S","E");
    $req = "SELECT code FROM chase_teams WHERE name='$team'";
    $data = $db->query($req);
    $result = "<p id='code'>";
    if($row = $data->fetch()) {
        $team_code = $row['code'];
        for($i=0; $i<sizeof($code); $i++) {
            if(($team_code >> ($i)) & 1) {
                $result.="<span class='letter'>".$code[$i]."</span>";
            } else {
                $result.="<span class='letter'>&ensp;</span>";
            }
        }
        $result.="</p>";
    } else {
        $result = "<p id='code'>" . "<span class='empty'></span>"*10 ."</p>";
    } return $result;
}

function listHints($team) {
    include "../db/db_connect.php";

    $hints = array("indice1", "indice2", "indice3", "indice4", "indice5", "indice6", "indice7", "indice8");

    $req = "SELECT hints FROM chase_teams WHERE name='$team'";
    $data = $db->query($req);
    $result = "";
    if($row = $data->fetch()) {
        $team_hints = $row['hints'];
        for($i=0; $i<sizeof($hints); $i++) {
            if(($team_hints >> $i) & 1) {
                $result .= "<li>".$hints[$i]."</li>";
            }
        }
    }
    return $result;
}

function checkCode($num, $code, $team) {
    include "../db/db_connect.php";
    $table = array("1" => "CODE1", "2" => "CODE2");
    if($table[$num] === $code) {
        $req = "SELECT code FROM chase_teams WHERE name='$team'";
        $data = $db->query($req);
        if($row = $data->fetch()) {
            $curr_code = $row['code'];
        } else {$curr_code = 0;}
        $new_code = $curr_code | (1 << ($num-1));

        $req = "UPDATE chase_teams SET code=$new_code WHERE name='$team'";
        $db->exec($req);
        return true;
    } else {
        return false;
    }
}