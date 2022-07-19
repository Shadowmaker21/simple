<?php
include "koneksi.php";


if (isset($_POST['Input'])) {
    $no_se = addslashes(strip_tags($_POST['no_se']));
    $tbt_se = addslashes(strip_tags($_POST['tbt_se']));
    $blk_se = addslashes(strip_tags($_POST['blk_se']));
    $surat_se = addslashes(strip_tags($_POST['surat_se']));
    $kode_se = addslashes(strip_tags($_POST['kode_se']));
    $jen_se = addslashes(strip_tags($_POST['jen_se']));
    $div_se = addslashes(strip_tags($_POST['div_se']));
    $hal_se = addslashes(strip_tags($_POST['hal_se']));
    $dic_se = addslashes(strip_tags($_POST['dic_se']));
    $menc_se = addslashes(strip_tags($_POST['menc_se']));


    $query = "INSERT INTO sk VALUES('','$no_se','$tbt_se','$blk_se','$surat_se','$kode_se','$jen_se','$div_se','$hal_se','$dic_se','$menc_se')";
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
    <h2>Data SE DIREKSI || <a href="index.php?page=tampil_se">Tampil Data SE DIREKSI</a></h2>
    <FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
        <table cellpadding="0" cellspacing="0" border="0" width="700">

            <tr>
                <td>No</td>
                <td>: <input type="number" name="no_se" size="30" required ></td>
            </tr>
            <tr>
                <td>Tanggal Terbit</td>
                <td>: <input type="date" name="tbt_se" size="30"></td>
            </tr>
            <tr>
                <td>Tanggl Berlaku</td>
                <td>: <input type="date" name="blk_se" size="30"></td>
            </tr>
            <tr>
                <td>Nomor Surat</td>
                <td>: <input type="text" name="surat_se" size="30" required></td>
            </tr>
            <tr>
				<td width="200">Kode Surat</td>
				<td>: <select name="kode_se" required>
						<option>-- Pilih KODE SURAT --</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
					</select>
				</td>
			</tr>
            <tr>
				<td width="200">Jenis Kode</td>
				<td>: <select name="jen_se" required>
						<option>-- Pilih Jenis Kode --</option>
						<option value="Kredit">01-Kredit</option>
                        <option value="Dana">01-Dana</option>
                        <option value="Layanan">01-Layanan</option>
						<option value="Struktur Organisasi">02-Struktur Organisasi</option>
                        <option value="Promosi/Mutasi">02-Promosi/Mutasi</option>
                        <option value="Surat Teguran/Peringatan">02-Surat Teguran/Peringatan</option>
                        <option value="Penyesuaian">03-Penyesuaian</option>
                        <option value="Kewenangan">03-Kewenangan</option>
                        <option value="Standarisasi">03-Standarisasi</option>
					</select>
				</td>
			</tr>
            <tr>
                <td>Divisi</td>
                <td>: <input type="text" name="div_se" size="30" required ></td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td>: <input type="text" name="hal_se" size="30"></td>
            </tr>
            <tr>
                <td>Dicabut</td>
                <td>: <input type="text" name="dic_se" size="30"></td>
            </tr>
            <tr>
                <td>Mencabut</td>
                <td>: <input type="text" name="menc_se" size="30"></td>
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