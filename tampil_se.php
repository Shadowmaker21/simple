<?php
include "koneksi.php";
?>
<div id="content">
    <br>
	<br>
	<br>
	<br>
	<h2>Data SE DIREKSI</h2>
	<table id="tabel">
		<tr>
			<th>No</th>
			<th> Tanggal Terbit</th>
            <th> Tanggal Berlaku</th>
            <th> Nomor Surat</th>
            <th>Kode Surat</th>
			<th>Jenis SE</th>
            <th>Divisi</th>
            <th>Perihal</th>
            <th>Dicabut</th>
			<th>Mencabut</th>
            
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM se order by id asc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$no_se = $hasil['no_sk'];
            $tbt_se = stripslashes($hasil['tbt_se']);
            $blk_se = stripslashes($hasil['blk_se']);
			$surat_se = stripslashes($hasil['surat_se']);
			$kode_se = stripslashes($hasil['kode_se']);
			$jen_se = stripslashes($hasil['jen_se']);
			$div_se = stripslashes($hasil['div_se']);
            $hal_se = $hasil['hal_se'];
            $dic_se = stripslashes($hasil['dic_se']);
            $menc_se = stripslashes($hasil['menc_se']);
            
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no_se"; ?></td>
				<td><?php echo "$tbt_se"; ?></td>
                <td><?php echo "$blk_se"; ?></td>
				<td><?php echo "$surat_se"; ?></td>
				<td><?php echo "$kode_se"; ?></td>
				<td><?php echo "$jen_se"; ?></td>
                <td><?php echo "$div_se"; ?></td>
				<td><?php echo "$hal_se"; ?></td>
                <td><?php echo "$dic_se"; ?></td>
                <td><?php echo "$menc_se"; ?></td>
                
                
                
				<td>
					<a href="index.php?page=edit_se&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_peng&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>
