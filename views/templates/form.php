<<<<<<< HEAD
    <script type="text/javascript" src="assets/js/script.js"></script>
    <form class="row align-items-center" method="post" action="index.php">
    <div class="col-12">
        <div class="row align-items-center bloc">
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
                        <label>Côtés de même taille :</label>
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
=======
    <script type="text/javascript">
        function selectOrdre(ordre) {
        var select = document.getElementById("ordre");
        var valeur = select.options[0].value;
        if (valeur==" "){
            select.remove(0);
        };
        var angle = document.getElementById("angles-droit");
        angle.remove(5);
        angle.remove(4);
        angle.remove(3);
        angle.remove(2);
        angle.remove(1);
        angle.remove(0);
        var option = document.createElement("option");
        if (ordre==3) {
            var option1 = document.createElement("option");
            var option0 = document.createElement("option");
            option0.text = "0";
            option1.text = "1";
            angle.add(option0);
            angle.add(option1);
        };
        if (ordre==4 || ordre==5) {
            var option = document.createElement("option");
            var option2 = document.createElement("option");
            var option3 = document.createElement("option");
            var option4 = document.createElement("option");
            var option5 = document.createElement("option");
            option.text = "1";
            option2.text = "2";
            option3.text = "3";
            option4.text = "4";
            option5.text = "0";
            angle.add(option5);
            angle.add(option);
            angle.add(option2);
            angle.add(option3);
            angle.add(option4);
        };
        }
    </script>
    <form class="row align-items-center" method="post" action="index.php">
    <div class="col-12">
        <div class="row align-items-center bloc">
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Nombre de côtés :</label>
                    </div>
                    <div class="col-12">
                        <select name="ordre" id="ordre" onchange="selectOrdre(this.value)">
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
                        <select id="angles-droit" name="angles-droit">
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="row align-items-center">
                    <div class="col-12">
                        <label>Côtés de même taille :</label>
                    </div>
                    <div class="col-12">
                        <input type="number" name="cotes-egaux">
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
>>>>>>> fde6a0713a0f0a797476ee25a5e0c26feedd9ad4
</form>