
<?php

$data = require('data/gallery.php');


function FindOneById($id) {
    global $data;
        // pour chaque images
    foreach ($data as $datas) {
        // si l'identiiant de la l'image est egale
        // a la valeur du parametre id
        if ( $id == $datas['id']) {
            return $datas;
        }
    }

    return false;
}

function getCount($data) {
    return count ($data);
}

function find_Paged($limit, $offset){
    global $data;
    $imgselect=[];
    $compteur=0;
    foreach($data as $dattas) {
        $imgselect[]=$dattas;
        $compteur++;
        if ($compteur==$limit) {
        break;
        }
    
    }
    return $imgselect;
}


?>