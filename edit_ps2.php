<?php
include "koneksi.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	die("Error. No id Selected! ");
}

$query = "SELECT nama_ps2 , jabatan_ps2 , nominal_ps2 , saham_ps2 , pers_ps2 , jenis_ps2 , saham_psl2 FROM pemegang_saham_dir WHERE id='$id'";
$sql = mysqli_query($conn, $query);
$hasil = mysqli_fetch_array($sql);
$nama_ps2 = stripslashes($hasil['nama_ps2']);
$jabatan_ps2 = stripslashes($hasil['jabatan_ps2']);
$nominal_ps2	 = stripslashes($hasil['nominal_ps2']);
$saham_ps2 = stripslashes($hasil['saham_ps2']);
$pers_ps2 = stripslashes($hasil['pers_ps2']);
$jenis_ps2 = $hasil['jenis_ps2'];
$saham_psl2 = stripslashes($hasil['saham_psl2']);

if (isset($_POST['Edit'])) {
	$id = $_POST['hid'];
	$nama_ps2 = stripslashes($hasil['nama_ps2']);
    $jabatan_ps2 = stripslashes($hasil['jabatan_ps2']);
    $nominal_ps2 = stripslashes($hasil['nominal_ps2']);
    $saham_ps2 = stripslashes($hasil['saham_ps2']);
    $pers_ps2 = stripslashes($hasil['pers_ps2']);
    $jenis_ps2 = $hasil['jenis_ps2'];
    $saham_psl2 = stripslashes($hasil['saham_psl2']);

	$query = "UPDATE pemegang_saham_dir SET nama_ps2='$nama_ps2', jabatan_ps2='$jabatan_ps2' , nominal_ps2='$nominal_ps2',
			  saham_ps2='$saham_ps2', pers_ps2='$pers_ps2',jenis_ps2='$jenis_ps2', saham_psl2='$saham_psl2' WHERE id='$id'";
	$sql = mysqli_query($conn, $query);
	if ($sql) {
		echo "<h2><font color=blue>Data Pemegang Saham Telah Berhasil diedit</font></h2>";
	} else {
		echo "<h2><font color=red>Data Pemegang Saham gagal diedit</font></h2>";
	}
}
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Edit Data Pemegang Saham</h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

			<tr>
				<td>Nama Pemegang Saham</td>
				<td>: <input type="text" name="nama_ps2" size="30" maxlength="30" value="<?php echo "$nama_ps2"; ?>"></td>
			</tr>
            <td>Jabatan Pemegang Saham</td>
				<td>: <input type="text" name="jabatan_ps2" size="30" maxlength="30" value="<?php echo "$jabatan_ps2"; ?>"></td>
			</tr>
            <tr>
				<td>Nominal Saham</td>
				<td>: <input type="text" name="nominal_ps2" size="30" maxlength="30" value="<?php echo "$nominal_ps2"; ?>"></td>
			</tr>
            <tr>
				<td>Presentasi Saham BPR WM</td>
				<td>: <input type="text" name="saham_ps2" size="30" maxlength="30" value="<?php echo "$saham_ps2"; ?>"></td>
			</tr>
            <tr>
				<td>Nama Perusahaan Lain</td>
				<td>: <input type="text" name="pers_ps2" size="30" maxlength="30" value="<?php echo "$pers_ps2"; ?>"></td>
			</tr>
			<tr>
				<td width="200">Jenis Perusahaan Lain</td>
				<td>: <select name="jenis_ps2">
						<option>-- Pilih Jenis Perusahaan --</option>
						<option value="KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA <?= ($jenis_ps2 == 'KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA') ? 'selected' : '' ?>">KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA</option>
						<option value="JASA TRANSPORTASI <?= ($jenis_ps2 == 'JASA TRANSPORTASI') ? 'selected' : '' ?>">JASA TRANSPORTASI</option>
						<option value="PERBANKAN <?= ($jenis_ps2 == 'PERBANKAN') ? 'selected' : '' ?>">PERBANKAN</option>
						<option value="RENTAL/PENYEWAAN <?= ($jenis_ps2 == 'RENTAL/PENYEWAAN') ? 'selected' : '' ?>">RENTAL/PENYEWAAN</option>
						<option value="PERDAGANGAN BESAR MOBIL BEKAS <?= ($jenis_ps2 == 'PERDAGANGAN BESAR MOBIL BEKAS') ? 'selected' : '' ?>">PERDAGANGAN BESAR MOBIL BEKAS</option>
                        <option value="PENYALUR, EKSPOR, IMPOR <?= ($jenis_ps2 == 'PENYALUR, EKSPOR, IMPOR') ? 'selected' : '' ?>">PENYALUR, EKSPOR, IMPOR</option>
                        <option value="PROPERTY AGENT <?= ($jenis_ps2 == 'PROPERTY AGENT') ? 'selected' : '' ?>">PROPERTY AGENT</option>
                        <option value="KONTRAKTOR & DEVELOPER <?= ($jenis_ps2 == 'KONTRAKTOR & DEVELOPER') ? 'selected' : '' ?>">KONTRAKTOR & DEVELOPER</option>
                        <option value="BAHAN BANGUNAN <?= ($jenis_ps2 == 'BAHAN BANGUNAN') ? 'selected' : '' ?>">BAHAN BANGUNAN</option>
                        <option value="RETAIL <?= ($jenis_ps2 == 'RETAIL') ? 'selected' : '' ?>">RETAIL</option>
                        <option value="- <?= ($jenis_ps2 == '-') ? 'selected' : '' ?>">-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Presentasi Saham Lain</td>
				<td>: <input type="text" name="saham_psl2" size="30" maxlength="30" value="<?php echo "$saham_psl2"; ?>"></td>
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