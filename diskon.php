<?php
   // var_dump($_POST);
   $totalbelanja = isset($_POST['totalbelanja']) ? $_POST['totalbelanja'] : "";
   $diskonrp = null;
   $diskonpersen = null;
   $hargabayar = null;

   if (isset($_POST["submit"])) {
    $totalbelanja = $_POST['totalbelanja'];
    $diskonrp = null;
    $diskonpersen = null; // Perbaikan: Menggunakan operator penugasan (=) daripada penjumlahan (+)

    if ($totalbelanja >= 5000000) {
        $diskonrp = 0.02 * $totalbelanja;
        $diskonpersen = 2;
    } elseif ($totalbelanja >= 3000000) {
        $diskonrp = 0.012 * $totalbelanja;
        $diskonpersen = 1.2;
    } elseif ($totalbelanja >= 1000000) {
        $diskonrp = 0.005 * $totalbelanja;
        $diskonpersen = 0.5;
    }

    $hargabayar = $totalbelanja - $diskonrp;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator Diskon</title>

        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <h1>Kalkulator Diskon</h1>
        
        <form action="" method="post">
            <table>
            <tr>
                    <td>Total Belanja</td>
                    <td>Rp <input name="totalbelanja" value="<?php echo $totalbelanja; ?>"></td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>Rp <input name="diskon_rp" value="<?php echo $diskonrp; ?>"> </td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>% <input name="diskon_persen" value="<?php echo $diskonpersen; ?>"> </td>
                </tr>
                <tr>
                    <td>Harga  Bayar</td>
                    <td>Rp <input name="harga_bayar" value="<?php echo $hargabayar; ?>"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input id="tombol-submit" type="submit" name="submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
