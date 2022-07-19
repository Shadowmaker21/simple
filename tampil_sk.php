<?php
include "koneksi.php";
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Data SK DIREKSI</h2>
	<table id="tabel">
		<tr>
			<th>No</th>
			<th> Tanggal Terbit</th>
            <th> Tanggal Berlaku</th>
            <th> Nomor Surat</th>
            <th>Kode Surat</th>
			<th>Jenis SK</th>
            <th>Divisi</th>
            <th>Perihal</th>
            <th>Dicabut</th>
			<th>Mencabut</th>
            
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM sk order by id asc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$no_sk = $hasil['no_sk'];
            $tbt_sk = stripslashes($hasil['tbt_sk']);
            $blk_sk = stripslashes($hasil['blk_sk']);
			$surat_sk = stripslashes($hasil['surat_sk']);
			$kode_sk = stripslashes($hasil['kode_sk']);
			$jen_sk = stripslashes($hasil['jen_sk']);
			$div_sk = stripslashes($hasil['div_sk']);
            $hal_sk = $hasil['hal_sk'];
            $dic_sk = stripslashes($hasil['dic_sk']);
            $menc_sk = stripslashes($hasil['menc_sk']);
            
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no_sk"; ?></td>
				<td><?php echo "$tbt_sk"; ?></td>
                <td><?php echo "$blk_sk"; ?></td>
				<td><?php echo "$surat_sk"; ?></td>
				<td><?php echo "$kode_sk"; ?></td>
				<td><?php echo "$jen_sk"; ?></td>
                <td><?php echo "$div_sk"; ?></td>
				<td><?php echo "$hal_sk"; ?></td>
                <td><?php echo "$dic_sk"; ?></td>
                <td><?php echo "$menc_sk"; ?></td>
                
                
                
				<td>
					<a href="index.php?page=edit_sk&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_peng&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>
