<?php
    $satu = $_POST['satu'];
    $dua = $_POST['dua'];
    $deret = $_POST['deret'];
echo "
    <table border=0>
        <tr align=right>
            <td>Angka 1</td>
            <td>:</td>
            <td>$satu</td>
        <tr>
        <tr align=right>
            <td>Angka 2</td>
            <td>:</td>
            <td>$dua</td>
        </tr>";
    $hasil = 0;
    for ($i = 1; $i <= $deret; $i++) {
            $hasil = $satu + $dua;
            $satu = $dua;
            $dua = $hasil;

            echo "
                <tr align=right>
                    <td></td>
                    <td></td>
                    <td>$hasil</td>
                </tr>";
    }
    echo "</table>";
?>
