<?php
include "koneksi.php";


if (isset($_POST['Input'])) {
	$nama_peng = addslashes(strip_tags($_POST['nama_peng']));
	$jabatan_peng = addslashes(strip_tags($_POST['jabatan_peng']));
	$nominal_peng = addslashes(strip_tags($_POST['nominal_peng']));
    $saham_peng = addslashes(strip_tags($_POST['saham_peng']));
    $pers_peng = addslashes(strip_tags($_POST['pers_peng']));
    $jenis_peng = addslashes(strip_tags($_POST['jenis_peng']));
    $saham_pengl = addslashes(strip_tags($_POST['saham_pengl']));
    $keu_peng = addslashes(strip_tags($_POST['keu_peng']));
    $kel_peng = addslashes(strip_tags($_POST['kel_peng']));
    $mulai_peng = addslashes(strip_tags($_POST['mulai_peng']));
    $akhir_peng = addslashes(strip_tags($_POST['akhir_peng']));
    $rups_peng = addslashes(strip_tags($_POST['rups_peng']));
    $akte_rups = addslashes(strip_tags($_POST['akte_rups']));
    $ojk_peng = $_FILES['file_ojk']['name'];
    $sojk_peng = addslashes(strip_tags($_POST['sojk_peng']));
    $certif_peng = $_FILES['file_certif']['name'];
    $jatem_peng = addslashes(strip_tags($_POST['jatem_peng']));

	if (strlen($ojk_peng) > 0) {

		if (is_uploaded_file($_FILES['file_ojk']['tmp_name'])) {
			move_uploaded_file($_FILES['file_ojk']['tmp_name'], "files/ojk/" . $ojk_peng);
		}
	}

    if (strlen($certif_peng) > 0) {

		if (is_uploaded_file($_FILES['file_certif']['tmp_name'])) {
			move_uploaded_file($_FILES['file_ertif']['tmp_name'], "files/certif/" . $certif_peng);
		}
	}

	$query = "INSERT INTO pengurus VALUES('','$nama_peng','$jabatan_peng','$nominal_peng','$saham_peng','$pers_peng','$jenis_peng','$saham_pengl','$keu_peng','$kel_peng','$mulai_peng','$akhir_peng','$rups_peng','$akte_rups','$ojk_peng','$sojk_peng','$certif_peng','$jatem_peng')";
	$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if ($sql) {
		echo "<h2><font color=blue>Data Pengurus telah berhasil ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Data Pengurus gagal ditambahkan</font></h2>";
	}
}
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Data Pengurus || <a href="index.php?page=tampil_peng">Tampil Data Pengurus</a></h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

			<tr>
				<td>Nama Pemegang Saham</td>
				<td>: <input type="text" name="nama_peng" size="30"></td>
			</tr>
            <tr>
				<td>Jabatan Pemegang Saham</td>
				<td>: <input type="text" name="jabatan_peng" size="30"></td>
			</tr>
            <tr>
				<td>Nominal Saham</td>
				<td>: <input type="text" name="nominal_peng" size="30"></td>
			</tr>
            <tr>
				<td>Presentasi Saham BPR WM</td>
				<td>: <input type="text" name="saham_peng" size="30"></td>
			</tr>
            <tr>
				<td>Nama Perusahaan Lain</td>
				<td>: <input type="text" name="pers_peng" size="30"></td>
			</tr>
			<tr>
				<td width="200">Jenis Perusahaan Lain</td>
				<td>: <select name="jenis_peng">
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
				<td>: <input type="text" name="saham_pengl" size="30"></td>
			</tr>
            <tr>
				<td>Hubungan Keuangan</td>
				<td>: <input type="text" name="keu_peng" size="30"></td>
			</tr>
            <tr>
				<td>Hubungan Keluarga</td>
				<td>: <input type="text" name="kel_peng" size="30"></td>
			</tr>
            <tr>
				<td>Tanggal Mulai Menjabat</td>
				<td>: <input type="date" name="mulai_peng" size="30"></td>
			</tr>
            <tr>
				<td>Tanggal Akhir Jabatan</td>
				<td>: <input type="date" name="akhir_peng" size="30"></td>
			</tr>
            <tr>
				<td>Tanggal RUPS</td>
				<td>: <input type="date" name="rups_peng" size="30"></td>
			</tr>
            <tr>
				<td>Akte RUPS</td>
				<td>: <input type="text" name="akte_rups" size="30"></td>
			</tr>
            <tr>
				<td>Surat OJK</td>
				<td>: <input type="file" name="file_ojk" /></td>
			</tr>
            <tr>
				<td>Tanggal Surat OJK</td>
				<td>: <input type="date" name="sojk_peng" size="30"></td>
			</tr>
            <tr>
				<td>Certif</td>
				<td>: <input type="file" name="file_certif" /></td>
			</tr>
            <tr>
				<td>Jatuh Tempo Certif</td>
				<td>: <input type="date" name="jatem_peng" size="30"></td>
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