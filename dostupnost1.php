<?php

require_once "konekcijasabazom.php";

if(isset($_POST['searchBtn'])) {
if(!empty($_REQUEST['krvna_grupa'])){

    $krvna_grupa=mysqli_real_escape_string($link, $_REQUEST['krvna_grupa']);
    $select="SELECT ime_i_prezime, datum_rodjenja, kontakt_telefon, krvna_grupa FROM donori
             WHERE krvna_grupa='$krvna_grupa'";
    $rezultat=mysqli_query($link,$select);
    if(mysqli_num_rows($rezultat)>0) {
        print "<table>";
        print "<tr>
               <td align='center' style='font-size: 30px'> Ime i prezime </td>
               <td align='center' style='font-size: 30px'> Datum rodjenja </td>
               <td align='center' style='font-size: 30px'> Kontakt telefon </td>
               <td align='center' style='font-size: 30px'> Krvna grupa </td>
</tr>";

        while($row=mysqli_fetch_array($rezultat)) {
            $ime=$row['ime_i_prezime'];
            $datum=$row['datum_rodjenja'];
            $kontakt=$row['kontakt_telefon'];
            $krvna=$row['krvna_grupa'];

            print "<tr>
                   <td align='center' style='font-size: 30px'> $ime </td>
                   <td align='center' style='font-size: 30px'> $datum </td>
                   <td align='center' style='font-size: 30px'> $kontakt </td>
                   <td align='center' style='font-size: 30px'> $krvna </td>
</tr>";
        }
        print "</table>";
        print "<HR>";

    }


}
}
mysqli_close($link);
?>

<html>
<head>
    <link rel="stylesheet" href="css/dostupnost12.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        table, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form class="form-inline" role='form' method="post" action="dostupnost1.php">
                <label class="form-label">Izaberite krvnu grupu: </label>
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
                <input type="submit" name="searchBtn" value="Provjerite dostupnost">
            </form>
            <br>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>



</body>
</html>

