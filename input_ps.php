<?php
include "koneksi.php";


if (isset($_POST['Input'])) {
	$nama_ps = addslashes(strip_tags($_POST['nama_ps']));
	$nominal_ps = addslashes(strip_tags($_POST['nominal_ps']));
	$saham_ps = addslashes(strip_tags($_POST['saham_ps']));
    $pers_ps = addslashes(strip_tags($_POST['pers_ps']));
	$jenis_ps = addslashes(strip_tags($_POST['jenis_ps']));
	$saham_psl = addslashes(strip_tags($_POST['saham_psl']));
	

	$query = "INSERT INTO pemegang_saham VALUES('','$nama_ps','$nominal_ps','$saham_ps','$pers_ps','$jenis_ps','$saham_psl')";
	$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if ($sql) {
		echo "<h2><font color=blue>Data Pemegang Saham telah berhasil ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Data Pemegang Saham gagal ditambahkan</font></h2>";
	}
}

if (isset($_POST['Input'])) {
	$nama_ps2 = addslashes(strip_tags($_POST['nama_ps2']));
	$jabatan_ps2 = addslashes(strip_tags($_POST['jabatan_ps2']));
    $nominal_ps2 = addslashes(strip_tags($_POST['nominal_ps2']));
	$saham_ps2 = addslashes(strip_tags($_POST['saham_ps2']));
    $pers_ps2 = addslashes(strip_tags($_POST['pers_ps2']));
	$jenis_ps2 = addslashes(strip_tags($_POST['jenis_ps2']));
	$saham_psl2 = addslashes(strip_tags($_POST['saham_psl2']));
	

	$query = "INSERT INTO pemegang_saham_dir VALUES('','$nama_ps2','$jabatan_ps2','$nominal_ps2','$saham_ps2','$pers_ps2','$jenis_ps2','$saham_psl2')";
	$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if ($sql) {
		echo "<h2><font color=blue>Data Pemegang Saham telah berhasil ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Data Pemegang Saham gagal ditambahkan</font></h2>";
	}
}

?>

<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Pemegang Saham || <a href="index.php?page=tampil_ps">Tampil Data Pemegang Saham</a></h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

            <tr>
				<td>Nama Pemegang Saham</td>
				<td>: <input type="text" name="nama_ps" size="30"></td>
			</tr>
            <tr>
				<td>Nominal Saham</td>
				<td>: <input type="text" name="nominal_ps" size="30"></td>
			</tr>
            <tr>
				<td>Presentasi Saham BPR WM</td>
				<td>: <input type="text" name="saham_ps" size="30"></td>
			</tr>
            <tr>
				<td>Nama Perusahaan Lain</td>
				<td>: <input type="text" name="pers_ps" size="30"></td>
			</tr>
			<tr>
				<td width="200">Jenis Perusahaan Lain</td>
				<td>: <select name="jenis_ps">
						<option>-- Pilih Jenis Perusahaan --</option>
						<option value="KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA">KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA</option>
						<option value="JASA TRANSPORTASI ">JASA TRANSPORTASI</option>
						<option value="PERBANKAN">PERBANKAN</option>
						<option value="RENTAL/PENYEWAAN">RENTAL/PENYEWAAN</option>
						<option value="PERDAGANGAN BESAR MOBIL BEKAS">PERDAGANGAN BESAR MOBIL BEKAS</option>
                        <option value="PENYALUR, EKSPOR, IMPOR">PENYALUR, EKSPOR, IMPOR</option>
                        <option value="PROPERTY AGENT">PROPERTY AGENT</option>
                        <option value="KONTRAKTOR & DEVELOPER">KONTRAKTOR & DEVELOPER</option>
                        <option value="BAHAN BANGUNAN">BAHAN BANGUNAN</option>
                        <option value="RETAIL">RETAIL</option>
                        <option value="-">-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Presentasi Saham Lain</td>
				<td>: <input type="text" name="saham_psl" size="30"></td>
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

<div id="content">
	<h2>Pemegang Saham Direksi|| <a href="index.php?page=tampil_ps">Tampil Data Pemegang Saham Direksi</a></h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

            <tr>
				<td>Nama Pemegang Saham</td>
				<td>: <input type="text" name="nama_ps2" size="30" maxlength="30"></td>
			</tr>
            <tr>
				<td>Jabatan Pemegang Saham</td>
				<td>: <input type="text" name="jabatan_ps2" size="30" maxlength="30"></td>
			</tr>
            <tr>
				<td>Nominal Saham</td>
				<td>: <input type="text" name="nominal_ps2" size="30" maxlength="30"></td>
			</tr>
            <tr>
				<td>Presentasi Saham BPR WM</td>
				<td>: <input type="text" name="saham_ps2" size="30" maxlength="30"></td>
			</tr>
            <tr>
				<td>Nama Perusahaan Lain</td>
				<td>: <input type="text" name="pers_ps2" size="30" maxlength="30"></td>
			</tr>
			<tr>
				<td width="200">Jenis Perusahaan Lain</td>
				<td>: <select name="jenis_ps2">
						<option>-- Pilih Jenis Perusahaan --</option>
						<option value="KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA">KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA</option>
						<option value="JASA TRANSPORTASI ">JASA TRANSPORTASI</option>
						<option value="PERBANKAN">PERBANKAN</option>
						<option value="RENTAL/PENYEWAAN">RENTAL/PENYEWAAN</option>
						<option value="PERDAGANGAN BESAR MOBIL BEKAS">PERDAGANGAN BESAR MOBIL BEKAS</option>
                        <option value="PENYALUR, EKSPOR, IMPOR">PENYALUR, EKSPOR, IMPOR</option>
                        <option value="PROPERTY AGENT">PROPERTY AGENT</option>
                        <option value="KONTRAKTOR & DEVELOPER">KONTRAKTOR & DEVELOPER</option>
                        <option value="BAHAN BANGUNAN">BAHAN BANGUNAN</option>
                        <option value="RETAIL">RETAIL</option>
                        <option value="-">-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Presentasi Saham Lain</td>
				<td>: <input type="text" name="saham_psl2" size="30" maxlength="30"></td>
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