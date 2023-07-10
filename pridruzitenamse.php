<?php

require_once "konekcijasabazom.php";

if (isset($_POST["potvrdi"])) {
    $name = mysqli_real_escape_string($link, $_POST['ime_i_prezime']);
    $jmbg = mysqli_real_escape_string($link, $_POST['maticni_br_donora']);
    $dob = mysqli_real_escape_string($link, $_POST['datum_rodjenja']);
    $btype = mysqli_real_escape_string($link, $_POST['krvna_grupa']);
    $adress = mysqli_real_escape_string($link, $_POST['adresa_stanovanja']);
    $contact = mysqli_real_escape_string($link, $_POST['kontakt_telefon']);


    if (!empty ($name AND $jmbg AND $dob AND $btype AND $adress AND $contact)) {
        $insert = "INSERT INTO donori (ime_i_prezime, maticni_br_donora, datum_rodjenja, krvna_grupa, adresa_stanovanja, kontakt_telefon) 
         VALUES ('$name','$jmbg','$dob','$btype','$adress','$contact')";
        $rez = mysqli_query($link, $insert);
        if ($rez) {
            print "Uspjesno ste unijeli podatke";
        } else {
            print "provjerite kod";
        }
    } else {
        print "neko polje je prazno";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <html>
    <head>
        <link rel="stylesheet" href="css/pridruzite12.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <style>
            body {
                background-image: url("https://preview.pixlr.com/images/800wm/100/1/1001264057.jpg");
            }
        </style>

    </head>
<body>


<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">



        <div class="panel panel-default">
            <div class="panel-heading">

                <p>Pridružite nam se i pomozite onima kojima je to potrebno.</p>
            </div>
            <div class="panel-body">
                <form method="post" action="pridruzitenamse.php" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-md-4 form-label">Ime i prezime</label>
                        <div class="col-md-4">
                            <input type="text" name="ime_i_prezime" class="form-control" placeholder="Ime i prezime" required="true">
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 form-label">Maticni broj</label>
                        <div class="col-md-4">
                            <input type="text" name="maticni_br_donora" class="form-control" placeholder="Maticni broj" required="true">
                        </div>

                    </div>


                    <div class="form-group">
                        <label class="form-label col-md-4">Datum rodjenja</label>
                        <div class="col-md-8">
                            <input type="date" class="form-control" name="datum_rodjenja" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label col-md-4">Krvna grupa</label>
                        <div class="col-md-8">

                            <select name="krvna_grupa" class="form-control">
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4">Adresa stanovanja</label>
                        <div class="col-md-8">
                            <textarea  minlength="5" class="form-control" name="adresa_stanovanja"
                                       rows="6" placeholder="Ulica, grad i država." ></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label col-md-4">Kontakt telefon</label>
                        <div class="col-md-8">
                            <input type="number"  class="form-control" name="kontakt_telefon" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label col-md-4"></label>
                        <div class="col-md-8">
                            <input type="submit" value="Potvrdite" name="potvrdi" id="potvrdi">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
</body>
</html>


