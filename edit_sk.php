<?php
include "koneksi.php";

if (isset($_GET['hid'])) {
	$id = $_GET['hid'];
} else {
	die("Error. No id Selected! ");
}

$query = "SELECT no_sk,tbt_sk, blk_sk,surat_sk,kode_sk,jen_sk,div_sk,hal_sk, dic_sk, menc_sk FROM sk WHERE id='$id'";
$sql = mysqli_query($conn, $query);
$hasil = mysqli_fetch_array($sql);

$no_sk = stripslashes($hasil['no_sk']);
$tbt_sk = stripslashes($hasil['tbt_sk']);
$blk_sk = stripslashes($hasil['blk_sk']);
$surat_sk = stripslashes($hasil['surat_sk']);
$kode_sk = stripslashes($hasil['kode_sk']);
$jen_sk = stripslashes($hasil['jen_sk']);
$div_sk = stripslashes($hasil['div_sk']);
$hal_sk = stripslashes($hasil['hal_sk']);
$dic_sk = stripslashes($hasil['dic_sk']);
$menc_sk = stripslashes($hasil['menc_sk']);

if (isset($_POST['Edit'])) {
	$id = $_POST['hid'];
	$no_sk = stripslashes($hasil['no_sk']);
    $tbt_sk = stripslashes($hasil['tbt_sk']);
    $blk_sk = stripslashes($hasil['blk_sk']);
    $surat_sk = stripslashes($hasil['surat_sk']);
    $kode_sk = stripslashes($hasil['kode_sk']);
    $jen_sk = stripslashes($hasil['jen_sk']);
    $div_sk = stripslashes($hasil['div_sk']);
    $hal_sk = stripslashes($hasil['hal_sk']);
    $dic_sk = stripslashes($hasil['dic_sk']);
    $menc_sk = stripslashes($hasil['menc_sk']);

	$query = "UPDATE sk SET no_sk='$no_sk', tbt_sk='$tbt_sk' , blk_sk='$blk_sk',
			  surat_sk='$surat_sk', kode_sk='$kode_sk',jen_sk='$jen_sk', div_sk='$div_sk', hal_sk='$hal_sk', dic_sk='$dic_sk', menc_sk='$menc_sk', WHERE id='$id'";
	$sql = mysqli_query($conn, $query);
	if ($sql) {
		echo "<h2><font color=blue>Data SK Telah Berhasil diedit</font></h2>";
	} else {
		echo "<h2><font color=red>Data SK gagal diedit</font></h2>";
	}
}
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Edit Data SK</h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

            <tr>
                <td>No</td>
                <td>: <input type="number" name="no_sk" size="30" value="<?php echo "$no_sk"; ?>"></td>
			</tr>
            <tr>
                <td>Tanggal Terbit</td>
                <td>: <input type="date" name="tbt_sk" size="30" value="<?php echo "$tbt_sk"; ?>"></td>
            </tr>

            <tr>
                <td>Tanggl Berlaku</td>
                <td>: <input type="date" name="blk_sk" size="30" value="<?php echo "$blk_sk"; ?>"></td>
            </tr>

            <tr>
                <td>Nomor Surat</td>
                <td>: <input type="text" name="surat_sk" size="30" value="<?php echo "$surat_sk"; ?>"></td>
            </tr>

            <tr>
				<td width="200">Kode Surat</td>
				<td>: <select name="kode_sk" required>
						<option>-- Pilih KODE SURAT --</option>
						<option value="01 <?= ($kode_sk == '01') ? 'selected' : '' ?>">01</option>
						<option value="02 <?= ($kode_sk == '02') ? 'selected' : '' ?>">02</option>
						<option value="03 <?= ($kode_sk == '03') ? 'selected' : '' ?>">03</option>
					</select>
				</td>
			</tr>

            <tr>
				<td width="200">Jenis Kode</td>
				<td>: <select name="jen_sk" required>
						<option>-- Pilih Jenis Kode --</option>
						<option value="Kredit <?= ($jen_sk == 'Kredit') ? 'selected' : '' ?>">01-Kredit</option>
                        <option value="Dana <?= ($jen_sk == 'Dana') ? 'selected' : '' ?>">01-Dana</option>
                        <option value="Layanan <?= ($jen_sk == 'Layanan') ? 'selected' : '' ?>">01-Layanan</option>
						<option value="Struktur Organisasi <?= ($jen_sk == 'Struktur Organisasi') ? 'selected' : '' ?>">02-Struktur Organisasi</option>
                        <option value="Promosi/Mutasi <?= ($jen_sk == 'Promosi/Mutasi') ? 'selected' : '' ?>">02-Promosi/Mutasi</option>
                        <option value="Surat Teguran/Peringatan <?= ($jen_sk == 'Surat Teguran/Peringatan') ? 'selected' : '' ?>">02-Surat Teguran/Peringatan</option>
                        <option value="Penyesuaian <?= ($jen_sk == 'Penyesuaian') ? 'selected' : '' ?>">03-Penyesuaian</option>
                        <option value="Kewenangan <?= ($jen_sk == 'Kewenangan') ? 'selected' : '' ?>">03-Kewenangan</option>
                        <option value="Standarisasi <?= ($jen_sk == 'Standarisasi') ? 'selected' : '' ?>">03-Standarisasi</option>
					</select>
				</td>
			</tr>

            <tr>
                <td>Divisi</td>
                <td>: <input type="text" name="div_sk" size="30" value="<?php echo "$div_sk"; ?>"></td>
            </tr>

            <tr>
                <td>Perihal</td>
                <td>: <input type="text" name="hal_sk" size="30" value="<?php echo "$hal_sk"; ?>"></td>
            </tr>

            <tr>
                <td>Dicabut</td>
                <td>: <input type="text" name="dic_sk" size="30" value="<?php echo "$dic_sk"; ?>"></td>
            </tr>

            <tr>
                <td>Mencabut</td>
                <td>: <input type="text" name="menc_sk" size="30" value="<?php echo "$menc_sk"; ?>"></td>
            </tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;&nbsp;
					<input type="hidden" name="hid" value="<?php echo "$id"; ?>">
					<input type="submit" name="Edit" value="Edit Data">&nbsp;
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</FORM>
</div>