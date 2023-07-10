<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <html>
    <head>
        <link rel="stylesheet" href="css/pridruzite12.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
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