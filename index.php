<?php

    $ordre          = [ 'libelle' => 'Ordre', 'value' => null ];
    $anglesDroits   = [ 'libelle' => 'Nombre d\'angles droits', 'value' => null ];
    $cotesEgaux     = [ 'libelle' => 'Nombre de côtés égaux', 'value' => null ];
    $cotesPara      = [ 'libelle' => 'Nombre de côtés parallèles', 'value' => null ];

    // var_dump($_POST);
    // die();

    if (isset($_POST['ordre']) && isset($_POST['angles-droits']) && isset($_POST['cotes-egaux']) && isset($_POST['cotes-paralleles'])) {

        $response = "OK";
        $ordre['value']         = ($_POST['ordre'] == null) ? "0" : $_POST['ordre'];
        $anglesDroits['value']  = ($_POST['angles-droits'] == null) ? "0" : $_POST['angles-droits'];
        $cotesEgaux['value']    = ($_POST['cotes-egaux'] == null) ? "0" : $_POST['cotes-egaux'];
        $cotesPara['value']     = ($_POST['cotes-paralleles'] == null) ? "0" : $_POST['cotes-paralleles'];

        $csvLine = "";
        foreach ([$ordre, $anglesDroits, $cotesEgaux, $cotesPara] as $key) {
            $csvLine .= $key['value'].';';
        }
        // echo $csvLine;
        // On va ensuite chercher si la même ligne existe dans le CSV
        // Si oui, on va dans model
        // Si non, on va dans controller et on utilise l'algo
    } else {
        $response = "KO";
    }

    include('views/index.php');