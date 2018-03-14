<?php

    if (isset($_GET['ordre']) && isset($_GET['ordre']) && isset($_GET['ordre']) && isset($_GET['ordre'])) {
        $response = "OK";
    } else {
        $response = "KO";
    }
	include('views/index.php');