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

        $csvLine = "";
        foreach ([$ordre, $anglesDroits, $cotesEgaux, $cotesPara] as $key) {
            $csvLine .= $key['value'].';';
        }

        $csvContent = FactsTable::getCsvLines($csvPath);
        // var_dump($csvContent);
        $isInCsv = FactsTable::isInCsv($csvContent, $csvLine);
        // var_dump($isInCsv);die;

        if ($isInCsv !== false) {
            $response = "Trouvé !";
        } else {
            $response = "On va aller dans la table des règles";
        }
    } else {
        $response = "KO";
    }

    include('views/index.php');
