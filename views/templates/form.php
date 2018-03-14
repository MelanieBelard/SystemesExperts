<form class="row align-items-center" method="get" action="index.php">
    <div class="col-12">
        <div class="row align-items-center bloc">
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Nombre de côtés :</label>
                    </div>
                    <div class="col-12">
                        <select name="ordre">
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Angles droits :</label>
                    </div>
                    <div class="col-12">
                        <input type="number" name="angles-droits">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Côtés de même taille :</label>
                    </div>
                    <div class="col-12">
                        <input type="number" name="cotes">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Côtés parallèles :</label>
                    </div>
                    <div class="col-12">
                        <input type="number" name="paralleles">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <button type="submit">
                ENVOYER
            </button>
        </div>
    </div>
</form>