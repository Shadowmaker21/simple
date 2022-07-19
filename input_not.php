<?php
include "koneksi.php";


if (isset($_POST['Input'])) {
    $no_mem = addslashes(strip_tags($_POST['no_mem']));
    $tbt_mem = addslashes(strip_tags($_POST['tbt_mem']));
    $blk_mem = addslashes(strip_tags($_POST['blk_mem']));
    $surat_mem = addslashes(strip_tags($_POST['surat_mem']));
    $kode_mem = addslashes(strip_tags($_POST['kode_mem']));
    $jen_mem = addslashes(strip_tags($_POST['jen_mem']));
    $div_mem = addslashes(strip_tags($_POST['div_mem']));
    $hal_mem = addslashes(strip_tags($_POST['hal_mem']));
    $dic_mem = addslashes(strip_tags($_POST['dic_mem']));
    $menc_mem = addslashes(strip_tags($_POST['menc_mem']));


    $query = "INSERT INTO memo VALUES('','$no_mem','$tbt_mem','$blk_mem','$surat_mem','$kode_mem','$jen_mem','$div_mem','$hal_mem','$dic_mem','$menc_mem')";
    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($sql) {
        echo "<h2><font color=blue>Data SK DIREKSI telah berhasil ditambahkan</font></h2>";
    } else {
        echo "<h2><font color=red>Data SK DIREKSI gagal ditambahkan</font></h2>";
    }
}
?>
<div id="content">
    <br>
	<br>
	<br>
	<br>
    <h2>Input Notulen  || <a href="index.php?page=tampil_not">Tampil Data Hasil Rapat</a></h2>
    <FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
        <table cellpadding="0" cellspacing="0" border="0" width="700">

            <tr>
                <td>Hari / Tanggal</td>
                <td>: <input type="text" name="" size="30" required></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>: <input type="text" name="" size="30" required></td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>: <input type="text" name="" size="30" required></td>
            </tr>
            <tr>
                <td>Peserta</td>
                <td>: <input type="text" name="" size="30" required></td>
            </tr>
            <tr>
                <td>Agenda Rapat</td>
                <td>: <input type="text" name="" size="30" required></td>
            </tr>
            <tr>
                <td>Input Hasil Rapat</td>
                <td>: <input type="text" name="dic_mem" size="30"></td>
            </tr>
    
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Data">&nbsp;
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </FORM>
</div>