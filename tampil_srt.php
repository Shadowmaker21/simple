<?php
include "koneksi.php";
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Data Surat</h2>
	<table id="tabel">

		<tr>
			<th>No</td>
			<th>Jenis Surat</td>
			<th>Jenis Sanksi</th>
			<th>Nomor Surat</td>
			<th>Keterangan</td>
			<th>File Surat</th>
			<th>Action</td>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM surat order by id desc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$id = $hasil['id'];
			$jenis_srt = $hasil['jenis_srt'];
			$sanksi = $hasil['sanksi'];
			$nomor_srt = stripslashes($hasil['nomor_srt']);
			$ket = stripslashes($hasil['ket']);
			$nama_file = stripslashes($hasil['nama_file']);
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no"; ?></td>
				<td><?php echo "$jenis_srt"; ?></td>
				<td><?php echo "$sanksi"; ?></td>
				<td><?php echo "$nomor_srt"; ?></td>
				<td><?php echo "$ket"; ?></td>
				<td><img height='80px' src="<?php echo 'files/surat/' . $nama_file?>"</td>
				<td>
					<a href="index.php?page=file_srt&id=<?php echo "$id"; ?>">File</a><br />
					<a href="index.php?page=edit_srt&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_srt&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>
