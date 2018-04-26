<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/bootstrap.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Systèmes experts</title>
</head>
<body>
    <div class="container">

        <div class="row align-items-center title">
            <div class="col-12 text-center">
                <h1>Systèmes experts</h1>
            </div>
        </div>

        <?php
        if ($response == "KO") {
            include('views/templates/form.php');
        } else {
            include('views/templates/response.php');
        }
        ?>

    </div>
</body>
</html>