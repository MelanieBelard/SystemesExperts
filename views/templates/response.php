<div class="row align-items-center response bloc">
    <div class="retour">
        <a href="index.php">< Retour</a>
    </div>
    <?php
        if (isset($response)) {
            echo $response;
        } else {
            echo "ERROR";
        }
    ?>
</div>