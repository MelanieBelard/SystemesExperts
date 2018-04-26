<?php

    $ordre          = [ 'libelle' => 'Ordre', 'value' => null ];
    $anglesDroits   = [ 'libelle' => 'Nombre d\'angles droits', 'value' => null ];
    $cotesEgaux     = [ 'libelle' => 'Nombre de côtés égaux', 'value' => null ];
    $cotesPara      = [ 'libelle' => 'Nombre de côtés parallèles', 'value' => null ];

    // var_dump($_POST);
    // die();

    if (isset($_POST['ordre']) && isset($_POST['angles-droits']) && isset($_POST['cotes-egaux']) && isset($_POST['cotes-paralleles'])) {

        $response = "OK";
        $ordre['value']         = strval($_POST['ordre']);
        $anglesDroits['value']  = strval($_POST['angles-droits']);
        $cotesEgaux['value']    = strval($_POST['cotes-egaux']);
        $cotesPara['value']     = strval($_POST['cotes-paralleles']);

        $csvLine = "";
        foreach ([$ordre, $anglesDroits, $cotesEgaux, $cotesPara] as $key) {
            if ($key['value'] == null) {
                $key['value'] = "0";
                // var_dump:($key);
            }
            $csvLine .= $key['value'].';';
        }
        // On va ensuite chercher si la même ligne existe dans le CSV
        // Si oui, on va dans model
        // Si non, on va dans controller et on utilise l'algo
    } else {
        $response = "KO";
    }

    include('views/index.php');