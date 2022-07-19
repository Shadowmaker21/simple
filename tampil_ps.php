<?php
include "koneksi.php";
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Data Pemegang Saham</h2>
	<table id="tabel">
		<tr>
			<th>No</td>
			<th>Nama Pemegang Saham</th>
            <td>Nominal (Rp)</td>
            <td>% Saham</td>
            <td>Nama Perusahaan</td>
            <td>Jenis Usaha</td>
            <td>% Saham</td>
			<th>Action</td>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM pemegang_saham order by id asc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$id = $hasil['id'];
			$nama_ps = stripslashes($hasil['nama_ps']);
			$nominal_ps = stripslashes($hasil['nominal_ps']);
			$saham_ps = stripslashes($hasil['saham_ps']);
			$pers_ps = stripslashes($hasil['pers_ps']);
            $jenis_ps = $hasil['jenis_ps'];
            $saham_psl = stripslashes($hasil['saham_psl']);
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no"; ?></td>
				<td><?php echo "$nama_ps"; ?></td>
				<td><?php echo "$nominal_ps"; ?></td>
				<td><?php echo "$saham_ps"; ?></td>
                <td><?php echo "$pers_ps"; ?></td>
				<td><?php echo "$jenis_ps"; ?></td>
				<td><?php echo "$saham_psl"; ?></td>
				<td>
					<a href="index.php?page=edit_ps&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_srt&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>


<?php
include "koneksi.php";
?>
<div id="content">
    <h2>Data Pemegang Saham Internal</h2>
    <table id="tabel">
		<tr>
			<th>No</td>
			<th>Nama Pemegang Saham</th>
            <th>Jabatan Pemegang Saham</th>
            <td>Nominal (Rp)</td>
            <td>% Saham</td>
            <td>Nama Perusahaan</td>
            <td>Jenis Usaha</td>
            <td>% Saham</td>
			<th>Action</td>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM pemegang_saham_dir order by id asc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$id = $hasil['id'];
			$nama_ps2 = $hasil['nama_ps2'];
            $jabatan_ps2 = $hasil['jabatan_ps2'];
			$nominal_ps2 = stripslashes($hasil['nominal_ps2']);
			$saham_ps2 = stripslashes($hasil['saham_ps2']);
			$pers_ps2 = stripslashes($hasil['pers_ps2']);
            $jenis_ps2 = stripslashes($hasil['jenis_ps2']);
            $saham_psl2 = stripslashes($hasil['saham_psl2']);
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no"; ?></td>
				<td><?php echo "$nama_ps2"; ?></td>
                <td><?php echo "$jabatan_ps2"; ?></td>
				<td><?php echo "$nominal_ps2"; ?></td>
				<td><?php echo "$saham_ps2"; ?></td>
                <td><?php echo "$pers_ps2"; ?></td>
				<td><?php echo "$jenis_ps2"; ?></td>
				<td><?php echo "$saham_psl2"; ?></td>
				<td>
					<a href="index.php?page=edit_ps2&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_srt&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>    
    </table>
</div>