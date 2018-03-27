<?php

	$ordre 			= [ 'libelle' => 'Ordre', 'value' => null ];
	$anglesDroits 	= [ 'libelle' => 'Nombre d\'angles droits', 'value' => null ];
	$cotesEgaux 	= [ 'libelle' => 'Nombre de côtés égaux', 'value' => null ];
	$cotesPara 		= [ 'libelle' => 'Nombre de côtés parallèles', 'value' => null ];

    if (isset($_POST['ordre']) && isset($_POST['angles-droits']) && isset($_POST['cotes-egaux']) && isset($_POST['cotes-paralleles'])) {

        $response = "OK";
        $ordre['value'] 		= strval($_POST['ordre']);
        $anglesDroits['value'] 	= strval($_POST['angles-droits']);
        $cotesEgaux['value'] 	= strval($_POST['cotes-egaux']);
        $cotesPara['value'] 	= strval($_POST['cotes-paralleles']);

    	foreach ([$ordre, $anglesDroits, $cotesEgaux, $cotesPara] as $key) {
    		if ($key['value'] == null) {
    			$key['value'] = "0"; // TROUVER UN MOYEN DE CONVERTIR 0 EN STRING
    			// var_dump($key);
    		}
    	}
    	// die();

        $csvLine = strval($ordre['value']).';'.strval($anglesDroits['value']).';'.strval($cotesEgaux['value']).';'.strval($cotesPara['value']);

    } else {
        $response = "KO";
    }

	include('views/index.php');