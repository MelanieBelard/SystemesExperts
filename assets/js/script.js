        function selectOrdre(ordre) {
        var select = document.getElementById("ordre");
        var valeur = select.options[0].value;
        if (valeur==" "){
            select.remove(0);
        };
        var coteegaux = document.getElementById("cotes-egaux");
        coteegaux.remove(5);
        coteegaux.remove(4);
        coteegaux.remove(3);
        coteegaux.remove(2);
        coteegaux.remove(1);
        coteegaux.remove(0);
        var optio = document.createElement("option");
        if (ordre==3) {
            var optio1 = document.createElement("option");
            var optio2 = document.createElement("option");
            var optio0 = document.createElement("option");
            optio2.text = "0";
            optio0.text = "2";
            optio1.text = "3";
            coteegaux.add(optio2);
            coteegaux.add(optio0);
            coteegaux.add(optio1);
        };
        if (ordre==4) {
            var optio = document.createElement("option");
            var optio2 = document.createElement("option");
            var optio3 = document.createElement("option");
            var optio4 = document.createElement("option");
            optio2.text = "0";
            optio.text = "2";
            optio3.text = "3";
            optio4.text = "4";
            coteegaux.add(optio2);
            coteegaux.add(optio);
            coteegaux.add(optio3);
            coteegaux.add(optio4);
        };
        if (ordre==5) {
            var optio = document.createElement("option");
            var optio2 = document.createElement("option");
            var optio3 = document.createElement("option");
            var optio4 = document.createElement("option");
            var optio5 = document.createElement("option");
            optio2.text = "0";
            optio.text = "2";
            optio3.text = "3";
            optio4.text = "4";
            optio5.text = "5";
            coteegaux.add(optio2);
            coteegaux.add(optio);
            coteegaux.add(optio3);
            coteegaux.add(optio4);
            coteegaux.add(optio5);
        };



        var angle = document.getElementById("angles-droits");
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