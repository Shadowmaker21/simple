<?php
include "koneksi.php";
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Data Internal MEMO</h2>
	<table id="tabel">
		<tr>
			<th>No</th>
			<th> Tanggal Terbit</th>
            <th> Tanggal Berlaku</th>
            <th> Nomor Surat</th>
            <th>Kode Surat</th>
			<th>Jenis Surat</th>
            <th>Divisi</th>
            <th>Perihal</th>
            <th>Dicabut</th>
			<th>Mencabut</th>
            
			<th>Action</td>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM memo order by id asc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$no_mem = $hasil['no_mem'];
            $tbt_mem = stripslashes($hasil['tbt_mem']);
            $blk_mem = stripslashes($hasil['blk_mem']);
			$surat_mem = stripslashes($hasil['surat_mem']);
			$kode_mem = stripslashes($hasil['kode_mem']);
			$jen_mem = stripslashes($hasil['jen_mem']);
			$div_mem = stripslashes($hasil['div_mem']);
            $hal_mem = $hasil['hal_mem'];
            $dic_mem = stripslashes($hasil['dic_mem']);
            $menc_mem = stripslashes($hasil['menc_mem']);
            
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no_mem"; ?></td>
				<td><?php echo "$tbt_mem"; ?></td>
                <td><?php echo "$blk_mem"; ?></td>
				<td><?php echo "$surat_mem"; ?></td>
				<td><?php echo "$kode_mem"; ?></td>
				<td><?php echo "$jen_mem"; ?></td>
                <td><?php echo "$div_mem"; ?></td>
				<td><?php echo "$hal_mem"; ?></td>
                <td><?php echo "$dic_mem"; ?></td>
                <td><?php echo "$menc_mem"; ?></td>
                
                
                
				<td>
					<a href="index.php?page=edit_mem&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_peng&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>
