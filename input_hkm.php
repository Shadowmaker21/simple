<?php
include "koneksi.php";


if (isset($_POST['Input'])) {
	$nama_hkm = addslashes(strip_tags($_POST['nama_hkm']));
	$nomor_hkm = addslashes(strip_tags($_POST['nomor_hkm']));
	$ket_hkm = addslashes(strip_tags($_POST['ket_hkm']));
	$file_hkm = $_FILES['file']['name'];

	if (strlen($file_hkm) > 0) {

		if (is_uploaded_file($_FILES['file']['tmp_name'])) {
			move_uploaded_file($_FILES['file']['tmp_name'], "files/hukum/" . $file_hkm);
		}
	}

	$query = "INSERT INTO hukum VALUES('','$nama_hkm','$nomor_hkm','$ket_hkm','$file_hkm')";
	$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if ($sql) {
		echo "<h2><font color=blue>Hukum / Reelas telah berhasil ditambahkan</font></h2>";
	} else {
		echo "<h2><font color=red>Data Hukum/Reelas gagal ditambahkan</font></h2>";
	}
}
?>
<div id="content">
	<br>
	<br>
	<br>
	<h2>Hukum /Reelas  || <a href="index.php?page=tampil_hkm">Tampil Data Hukum / Reelas</a></h2>
	<FORM ACTION="" METHOD="POST" NAME="input" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" border="0" width="700">

            <tr>
				<td>Nama Hukum / Reelas</td>
				<td>: <input type="text" name="nama_hkm" size="30" ></td>
			</tr>

			<tr>
				<td>Nomor Hukum / Reelas</td>
				<td>: <input type="text" name="nomor_hkm" size="30" ></td>
			</tr>

			<tr>
				<td>Keterangan Hukum / Reelas</td>
				<td>: <textarea name="ket_hkm" cols="40" rows="5"></textarea></td>
			</tr>


			<tr>
				<td>Upload File</td>
				<td>: <input type="file" name="file" /></td>
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