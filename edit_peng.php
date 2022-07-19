<?php
include "koneksi.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	die("Error. No id Selected! ");
}

$query = "SELECT nama_peng,jabatan_peng,nominal_peng,saham_peng,pers_peng,jenis_peng,saham_pengl,keu_peng,kel_peng,mulai_peng,akhir_peng,rups_peng,akte_rups,ojk_peng,sojk_peng,certif_peng,jatem_peng FROM pengurus WHERE id='$id'";
$sql = mysqli_query($conn, $query);
$hasil = mysqli_fetch_array($sql);
$nama_peng = stripslashes($hasil['nama_peng']);
$jabatan_peng = stripslashes($hasil['jabatan_peng']);
$nominal_peng = stripslashes($hasil['nominal_peng']);
$saham_peng = stripslashes($hasil['saham_peng']);
$pers_peng = stripslashes($hasil['pers_peng']);
$jenis_peng = stripslashes($hasil['jenis_peng']);
$saham_pengl = stripslashes($hasil['saham_pengl']);
$keu_peng = stripslashes($hasil['keu_peng']);
$kel_peng = stripslashes($hasil['kel_peng']);
$mulai_peng = stripslashes($hasil['mulai_peng']);
$akhir_peng = stripslashes($hasil['akhir_peng']);
$rups_peng = stripslashes($hasil['rups_peng']);
$akte_rups = stripslashes($hasil['akte_rups']);
$ojk_peng = stripslashes($hasil['file_ojk']);
$sojk_peng = stripslashes($hasil['sojk_peng']);
$certif_peng = stripslashes($hasil['file_certif']);
$jatem_peng = stripslashes($hasil['jatem_peng']);

if (isset($_POST['Edit'])) {
	$id = $_POST['hid'];
	$nama_peng = stripslashes($hasil['nama_peng']);
    $jabatan_peng = stripslashes($hasil['jabatan_peng']);
    $nominal_peng = stripslashes($hasil['nominal_peng']);
    $saham_peng = stripslashes($hasil['saham_peng']);
    $pers_peng = stripslashes($hasil['pers_peng']);
    $jenis_peng = stripslashes($hasil['jenis_peng']);
    $saham_pengl = stripslashes($hasil['saham_pengl']);
    $keu_peng = stripslashes($hasil['keu_peng']);
    $kel_peng = stripslashes($hasil['kel_peng']);
    $mulai_peng = stripslashes($hasil['mulai_peng']);
    $akhir_peng = stripslashes($hasil['akhir_peng']);
    $rups_peng = stripslashes($hasil['rups_peng']);
    $akte_rups = stripslashes($hasil['akte_rups']);
    $ojk_peng = $_FILES['file_ojk']['name'];

	if (strlen($ojk_peng) > 0) {
		if (is_uploaded_file($_FILES['file_ojk']['tmp_name'])) {
			move_uploaded_file($_FILES['file_ojk']['tmp_name'], "files/ojk/" . $ojk_peng);
			mysqli_query($conn, "UPDATE pengurus SET ojk_peng='$ojk_peng' WHERE id='$id'");
		}
    }
    
    $sojk_peng = stripslashes($hasil['sojk_peng']);
        
    $certif_peng = $_FILES['file_certif']['name'];
	if (strlen($certif_peng) > 0) {
		if (is_uploaded_file($_FILES['file_certif']['tmp_name'])) {
			move_uploaded_file($_FILES['file_certif']['tmp_name'], "files/certif/" . $certif_peng);
			mysqli_query($conn, "UPDATE pengurus SET certif_peng='$certif_peng' WHERE id='$id'");
        }
    }
    
    $jatem_peng = stripslashes($hasil['jatem_peng']);

	$query = "UPDATE pengurus SET nama_peng='$nama_peng', jabatan_peng='$jabatan_peng' , nominal_peng='$nominal_peng',
			  aham_peng='$aham_peng', pers_peng='$pers_peng',jenis_peng='$jenis_peng', saham_pengl='$saham_pengl' , 
              keu_peng='$keu_peng' ,kel_peng='$kel_peng' ,mulai_peng='$mulai_peng' ,akhir_peng='$akhir_peng' ,
              rups_peng='$rups_peng' ,akte_rups='$akte_rups' ,sojk_peng='$sojk_peng' ,jatem_peng='$jatem_peng' , WHERE id='$id'";
	$sql = mysqli_query($conn, $query);
	if ($sql) {
		echo "<h2><font color=blue>Data Pengurus Telah Berhasil diedit</font></h2>";
	} else {
		echo "<h2><font color=red>Data Pengurus gagal diedit</font></h2>";
	}
}
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Edit Data Pengurus</h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

			<tr>
				<td>Nama Pemegang Saham</td>
				<td>: <input type="text" name="nama_peng" size="30"  value="<?php echo "$nama_peng"; ?>"></td>
			</tr>
            <td>Jabatan Pemegang Saham</td>
				<td>: <input type="text" name="jabatan_peng" size="30"  value="<?php echo "$jabatan_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Nominal Saham</td>
				<td>: <input type="text" name="nominal_peng" size="30"  value="<?php echo "$nominal_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Presentasi Saham BPR WM</td>
				<td>: <input type="text" name="saham_peng" size="30"  value="<?php echo "$saham_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Nama Perusahaan Lain</td>
				<td>: <input type="text" name="pers_peng" size="30"  value="<?php echo "$pers_peng"; ?>"></td>
			</tr>
			<tr>
				<td width="200">Jenis Perusahaan Lain</td>
				<td>: <select name="jenis_peng">
						<option>-- Pilih Jenis Perusahaan --</option>
						<option value="KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA <?= ($jenis_peng == 'KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA') ? 'selected' : '' ?>">KEGIATAN TEKNOLOGI DAN JASA KOMPUTER LAINNYA</option>
						<option value="JASA TRANSPORTASI <?= ($jenis_peng == 'JASA TRANSPORTASI') ? 'selected' : '' ?>">JASA TRANSPORTASI</option>
						<option value="PERBANKAN <?= ($jenis_peng == 'PERBANKAN') ? 'selected' : '' ?>">PERBANKAN</option>
						<option value="RENTAL/PENYEWAAN <?= ($jenis_peng == 'RENTAL/PENYEWAAN') ? 'selected' : '' ?>">RENTAL/PENYEWAAN</option>
						<option value="PERDAGANGAN BESAR MOBIL BEKAS <?= ($jenis_peng == 'PERDAGANGAN BESAR MOBIL BEKAS') ? 'selected' : '' ?>">PERDAGANGAN BESAR MOBIL BEKAS</option>
                        <option value="PENYALUR, EKSPOR, IMPOR <?= ($jenis_peng == 'PENYALUR, EKSPOR, IMPOR') ? 'selected' : '' ?>">PENYALUR, EKSPOR, IMPOR</option>
                        <option value="PROPERTY AGENT <?= ($jenis_peng == 'PROPERTY AGENT') ? 'selected' : '' ?>">PROPERTY AGENT</option>
                        <option value="KONTRAKTOR & DEVELOPER <?= ($jenis_peng == 'KONTRAKTOR & DEVELOPER') ? 'selected' : '' ?>">KONTRAKTOR & DEVELOPER</option>
                        <option value="BAHAN BANGUNAN <?= ($jenis_peng == 'BAHAN BANGUNAN') ? 'selected' : '' ?>">BAHAN BANGUNAN</option>
                        <option value="RETAIL <?= ($jenis_peng == 'RETAIL') ? 'selected' : '' ?>">RETAIL</option>
                        <option value="- <?= ($jenis_peng == '-') ? 'selected' : '' ?>">-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Presentasi Saham Lain</td>
				<td>: <input type="text" name="saham_pengl" size="30"  value="<?php echo "$saham_pengl"; ?>"></td>
			</tr>
            <tr>
				<td>Hubungan Keuangan</td>
				<td>: <input type="text" name="keu_peng" size="30" value="<?php echo "$keu_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Hubungan Keluarga</td>
				<td>: <input type="text" name="kel_peng" size="30" value="<?php echo "$kel_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Tanggal Mulai Menjabat</td>
				<td>: <input type="date" name="mulai_peng" size="30" value="<?php echo "$mulai_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Tanggal Akhir Jabatan</td>
				<td>: <input type="date" name="akhir_peng" size="30" value="<?php echo "$akhir_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Tanggal RUPS</td>
				<td>: <input type="date" name="rups_peng" size="30" value="<?php echo "$rups_peng"; ?>"></td>
			</tr>
            <tr>
				<td>Akte RUPS</td>
				<td>: <input type="text" name="akte_rups" size="30" value="<?php echo "$akte_rups"; ?>"></td>
			</tr>
            <tr>
				<td>File</td>
				<td>: <input type="file" name="file_ojk" /> File: <?php echo "/files/ojk/$ojk_peng"; ?></td>
			</tr>
            <tr>
				<td>Tanggal Surat OJK</td>
				<td>: <input type="date" name="sojk_peng" size="30" value="<?php echo "$sojk_peng"; ?>"></td>
			</tr>
            <tr>
				<td>File</td>
				<td>: <input type="file" name="file_certif" /> File: <?php echo "/files/ojk/$certif_peng"; ?></td>
			</tr>
            <tr>
				<td>Jatuh Tempo Certif</td>
				<td>: <input type="date" name="jatem_peng" size="30" value="<?php echo "$jatem_peng"; ?>"></td>
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