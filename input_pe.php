<?php
include "koneksi.php";


if (isset($_POST['Input'])) {
	$nama_pe = addslashes(strip_tags($_POST['nama_pe']));
	$alamat_pe = addslashes(strip_tags($_POST['alamat_pe']));
	$ibu_pe = addslashes(strip_tags($_POST['ibu_pe']));
	$npwp_pe = addslashes(strip_tags($_POST['npwp_pe']));
	$ktp_pe = addslashes(strip_tags($_POST['ktp_pe']));
	$jabatan_pe = addslashes(strip_tags($_POST['jabatan_pe']));
	$mjb_pe = addslashes(strip_tags($_POST['mjb_pe']));
	$spb_pe = $_FILES['file_spb']["name"];
	$spo_pe = addslashes(strip_tags($_POST['spo_pe']));
	$certif_pe = $_FILES['file_cert']["name"];
	$jatem_pe = addslashes(strip_tags($_POST['jatem_pe']));

	if (strlen($spb_pe) > 0) {

		if (is_uploaded_file($_FILES['file_spb']['tmp_name'])) {
			move_uploaded_file($_FILES['file_spb']['tmp_name'], "files/ojkpe/" . $spb_pe);
		}
	}

	if (strlen($certif_pe) > 0) {

		if (is_uploaded_file($_FILES['file_cert']['tmp_name'])) {
			move_uploaded_file($_FILES['file_cert']['tmp_name'], "files/certifpe/" . $certif_pe);
		}
	}

	$query = "INSERT INTO pengurus_eksekutif VALUES('','$nama_pe','$alamat_pe','$ibu_pe','$npwp_pe','$ktp_pe','$jabatan_pe','$mjb_pe','$spo_pe','$jatem_pe')";
	$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if ($sql) {
		echo "<h2><font color=blue>Data Pengurus Eksekutif telah berhasil ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Data Pengurus Eksekutif gagal ditambahkan</font></h2>";
	}
}
?>
<div id="content">
    <br>
	<br>
    <br>
    <h2>Data Pejabat Eksekutif || <a href="index.php?page=tampil_pe">Tampil Data Pejabat Eksekutif</a></h2>
    <FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
        <table cellpadding="0" cellspacing="0" border="0" width="700">

            <tr>
                <td>Nama Pejabat Eksekutif</td>
                <td>: <input type="text" name="nama_pe" size="30"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat_pe" size="30"></td>
            </tr>

            <tr>
                <td>Nama Ibu Kandung</td>
                <td>: <input type="text" name="ibu_pe" size="30"></td>
            </tr>

            <tr>
                <td>Nomor NPWP</td>
                <td>: <input type="text" name="npwp_pe" size="30"></td>
            </tr>

            <tr>
                <td>Nomor KTP</td>
                <td>: <input type="text" name="ktp_pe" size="30"></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td>: <input type="text" name="jabatan_pe" size="30"></td>
            </tr>

            <tr>
                <td>Tanggal Menjabat</td>
                <td>: <input type="date" name="mjb_pe" size="30"></td>
            </tr>

            <tr>
                <td>Surat Pengangkatan Dari Bank</td>
                <td>: <input type="File" name="file_spb" size="30"></td>
            </tr>

            <tr>
                <td>Surat Penegasan OJK</td>
                <td>: <input type="text" name="spo_pe" size="30"></td>
            </tr>

            <tr>
                <td>Certificate</td>
                <td>: <input type="File" name="file_cert" size="30"></td>
            </tr>

            <tr>
                <td>Tanggal Jatuh Tempo</td>
                <td>: <input type="date" name="jatem_pe" size="30"></td>
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