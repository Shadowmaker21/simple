<?php
include "koneksi.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	die("Error. No id Selected! ");
}

$query = "SELECT nama_pe,alamat_pe,ibu_pe,npwp_pe,ktp_pe,jabatan_pe,mjb_pe,spb_pe,spo_pe,certif_pe,jatem_pe FROM pengurus_eksekutif WHERE id='$id'";
$sql = mysqli_query($conn, $query);
$hasil = mysqli_fetch_array($sql);
$nama_pe = stripslashes($hasil['nama_pe']);
$alamat_pe = stripslashes($hasil['alamat_pe']);
$ibu_pe = stripslashes($hasil['ibu_pe']);
$npwp_pe = stripslashes($hasil['npwp_pe']);
$ktp_pe = stripslashes($hasil['ktp_pe']);
$jabatan_pe = stripslashes($hasil['jabatan_pe']);
$mjb_pe = stripslashes($hasil['mjb_pe']);
$spb_pe =stripslashes($hasil['file_spb']);
$spo_pe = stripslashes($hasil['spo_pe']);
$certif_pe = stripslashes($hasil['file_cert']);
$jatem_pe = stripslashes($hasil['jatem_pe']);

if (isset($_POST['Edit'])) {
	$id = $_POST['hid'];
	$nama_pe = stripslashes($hasil['nama_pe']);
    $alamat_pe = stripslashes($hasil['alamat_pe']);
    $ibu_pe = stripslashes($hasil['ibu_pe']);
    $npwp_pe = stripslashes($hasil['npwp_pe']);
    $ktp_pe = stripslashes($hasil['ktp_pe']);
    $jabatan_pe = stripslashes($hasil['jabatan_pe']);
    $mjb_pe = stripslashes($hasil['mjb_pe']);
    $spb_pe =stripslashes($hasil['file_spb']);
    if (strlen($spb_pe) > 0) {
		if (is_uploaded_file($_FILES['file_spb']['tmp_name'])) {
			move_uploaded_file($_FILES['file_spb']['tmp_name'], "files/ojkpe/" . $spb_pe);
			mysqli_query($conn, "UPDATE pengurus_eksekutif SET spb_pe='$spb_pe' WHERE id='$id'");
    
        }
    }
    $spo_pe = stripslashes($hasil['spo_pe']);

    $certif_pe = stripslashes($hasil['file_cert']);
	if (strlen($certif_pe) > 0) {
		if (is_uploaded_file($_FILES['file_cert']['tmp_name'])) {
			move_uploaded_file($_FILES['file_cert']['tmp_name'], "files/certifpe/" . $certif_pe);
			mysqli_query($conn, "UPDATE pengurus_eksekutif SET certif_pe='$certif_pe' WHERE id='$id'");
        }
    }
    $jatem_pe = stripslashes($hasil['jatem_pe']);

	$query = "UPDATE pengurus_eksekutif SET nama_pe='$nama_pe',alamat_pe='$alamat_pe',ibu_pe='$ibu_pe',npwp_pe='$npwp_pe',ktp_pe='$ktp_pe',jabatan_pe='$jabatan_pe',mjb_pe='$mjb_pe',spo_pe='$spo_pe',jatem_pe='$jatem_pe' , WHERE id='$id'";
	$sql = mysqli_query($conn, $query);
	if ($sql) {
		echo "<h2><font color=blue>Data Pengurus Eksekutif Telah Berhasil diedit</font></h2>";
	} else {
		echo "<h2><font color=red>Data Pengurus gagal Eksekutif diedit</font></h2>";
	}
}
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Edit Data Pejabat Eksekutif</h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

			<tr>
				<td>Nama Pemegang Saham</td>
				<td>: <input type="text" name="nama_pe" size="30"  value="<?php echo "$nama_pe"; ?>"></td>
			</tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat_pe" size="30" value="<?php echo "$alamat_pe"; ?>"></td>
            </tr>

            <tr>
                <td>Nama Ibu Kandung</td>
                <td>: <input type="text" name="ibu_pe" size="30" value="<?php echo "$ibu_pe"; ?>"></td>
            </tr>

            <tr>
                <td>Nomor NPWP</td>
                <td>: <input type="text" name="npwp_pe" size="30" value="<?php echo "$npwp_pe"; ?>"></td>
            </tr>

            <tr>
                <td>Nomor KTP</td>
                <td>: <input type="text" name="ktp_pe" size="30" value="<?php echo "$ktp_pe"; ?>"></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>: <input type="text" name="jabatan_pe" size="30" value="<?php echo "$jabatan_pe"; ?>"></td>
            </tr>

            <tr>
                <td>Tanggal Menjabat</td>
                <td>: <input type="date" name="mjb_pe" size="30" value="<?php echo "$mjb_pe"; ?>"></td>
            </tr>

            <tr>
                <td>Surat Pengangkatan Dari Bank</td>
                <td>: <input type="file" name="file_spb" /> File: <?php echo "/files/ojkpe/$spb_pe"; ?></td>
            </tr>

            <tr>
                <td>Surat Penegasan OJK</td>
                <td>: <input type="text" name="spo_pe" size="30" value="<?php echo "$spo_pe"; ?>"></td>
            </tr>

            <tr>
                <td>Certificate</td>
                <td>: <input type="file" name="file_cert" /> File: <?php echo "/files/certifpe/$certif_pe"; ?></td>
            </tr>

            <tr>
                <td>Tanggal Jatuh Tempo</td>
                <td>: <input type="date" name="jatem_pe" size="30" value="<?php echo "$jatem_pe"; ?>"></td>
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