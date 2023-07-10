<?php

include_once 'konekcijasabazom.php';
$result = mysqli_query($link,"SELECT * FROM donori");
?>

<html lang="en">
<head>
    <title> Retrive data</title>
    <link rel="stylesheet" href="css/donori12.css">
</head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>

        <tr>
            <td>Ime i prezime</td>

            <td>Kontakt telefon</td>
            <td>Krvna grupa</td>
        </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["ime_i_prezime"]; ?></td>

                <td><?php echo $row["kontakt_telefon"]; ?></td>
                <td><?php echo $row["krvna_grupa"]; ?></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
    <?php
}
else{
    echo "No result found";
}
?>
</body>
</html>
