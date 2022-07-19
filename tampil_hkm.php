<?php
include "koneksi.php";
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Data Hukum / Reelas</h2>
	<table id="tabel">
		<tr>
			<th>No</th>
			<th>Nama Hukum</th>
			<th>Nomor Hukum</th>
			<th>Keterangan Hukum</th>
			<th>File Hukum / Reelas</th>
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM hukum order by id desc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$id = $hasil['id'];
			$nama_hkm = $hasil['nama_hkm'];
			$nomor_hkm = stripslashes($hasil['nomor_hkm']);
			$ket_hkm = stripslashes($hasil['ket_hkm']);
			$file_hkm = stripslashes($hasil['file_hkm']);
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no"; ?></td>
				<td><?php echo "$nama_hkm"; ?></td>
				<td><?php echo "$nomor_hkm"; ?></td>
				<td><?php echo "$ket_hkm"; ?></td>
				<td><img height='80px' src="<?php echo 'files/hukum/' . $file_hkm?>"</td>
				<td>
					<a href="index.php?page=file_hkm&id=<?php echo "$id"; ?>">File</a><br />
					<a href="index.php?page=edit_srt&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_srt&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>