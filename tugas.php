<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form method="POST">
            <table>
                <tr>
                    <td>Alas</td>
                    <td><input type="number" name="alas"></td>
                </tr>

                <tr>
                <td>tinggi</td>
                    <td><input type="number" name="tinggi"></td>
                </tr>

                <tr>
                    <td>sisi miring</td>
                    <td><input type="number" name="sisi_miring"></td>
                </tr>

                <tr>
                    <td><button name="kirim">Kirim</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>

<?php
echo '<center>';
if (isset($_POST['kirim'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $sisi_miring = $_POST['sisi_miring'];
    $luas  = $alas * $tinggi;
    $keliling = 2 + ($alas + $sisi_miring);
    echo '<br> Luas Bangun Datar adalah ' . $luas;
    echo '<br> Keliling Bangun Datar adalah ' . $keliling;
}
echo '</center>';



?>