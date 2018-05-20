<?php

    require('models/FactsTable.php');
    require('controllers/RulesTable.php');

    $csvPath = "models/facts_table.csv";

    $ordre          = [ 'libelle' => 'Ordre', 'value' => null ];
    $anglesDroits   = [ 'libelle' => 'Nombre d\'angles droits', 'value' => null ];
    $cotesEgaux     = [ 'libelle' => 'Nombre de côtés égaux', 'value' => null ];
    $cotesPara      = [ 'libelle' => 'Nombre de côtés parallèles', 'value' => null ];

    if (isset($_POST['ordre']) && isset($_POST['angles-droits']) && isset($_POST['cotes-egaux']) && isset($_POST['cotes-paralleles'])) {
        $ordre['value']         = ($_POST['ordre'] == null) ? "0" : $_POST['ordre'];
        $anglesDroits['value']  = ($_POST['angles-droits'] == null) ? "0" : $_POST['angles-droits'];
        $cotesEgaux['value']    = ($_POST['cotes-egaux'] == null) ? "0" : $_POST['cotes-egaux'];
        $cotesPara['value']     = ($_POST['cotes-paralleles'] == null) ? "0" : $_POST['cotes-paralleles'];

        $csvLine  = "";
        $response = '';
        foreach ([$ordre, $anglesDroits, $cotesEgaux, $cotesPara] as $key) {
            $csvLine  .= $key['value'].';';
            $response .= '<strong>'.$key['libelle'].' :</strong> '.$key['value'].'<br>';
        }

        $csvContent = FactsTable::getCsvLines($csvPath);
        // var_dump($csvContent);
        $isInCsv = FactsTable::isInCsv($csvContent, $csvLine);
        // var_dump($isInCsv);die;


        if ($isInCsv !== false) {
            $response .= "<br>Résultat trouvé en base :<br>";
            $response .= "<strong>".explode(';', $csvContent[$isInCsv])[4]."</strong>";
        } else {
            $result = RulesTable::verifyFigure($ordre['value'], $anglesDroits['value'], $cotesEgaux['value'], $cotesPara['value']);
            if ($result === false) {
                $response = "Données non trouvées.<br>Le polygone n'existe pas ou n'est pas traité par notre application.";
            } else {
                FactsTable::insert($csvPath, $csvLine.$result);
                $response .= "<br>Résultat non trouvé en base :<br>";
                $response .= "<strong>".$result."</strong>";
                $response .= "<br>Données enregistrées !";
            }
        }
    } else {
        $response = "KO";
    }

    include('views/index.php');
