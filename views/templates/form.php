    <script type="text/javascript" src="assets/js/script.js"></script>
    <form class="row align-items-center" method="post" action="index.php">
    <div class="col-12">
        <div class="row align-items-center form bloc">
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Nombre de côtés :</label>
                    </div>
                    <div class="col-12">
                        <select name="ordre" id="ordre" onchange="selectOrdre(this.value)">
                            <option value=" "> </option>
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
                        <select id="angles-droits" name="angles-droits">
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Côtés égaux :</label>
                    </div>
                    <div class="col-12">
                        <select type="number" name="cotes-egaux" id="cotes-egaux">
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Côtés parallèles :</label>
                    </div>
                    <div class="col-12">
                        <input type="number" name="cotes-paralleles">
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