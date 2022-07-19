<?php
include "koneksi.php";
?>
<div id="content">
    <br>
	<br>
	<br>
	<br>
	<h2>Data Pengurus</h2>
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
            <td>Hubungan Keuangan</td>
            <td>Hubungan Keluarga</td>
            <td>Tanggal Mulai Menjabat</td>
            <td>Tanggal Akhir Menjabat</td>
            <td>Tanggal RUPS</td>
            <td>Akte RUPS</td>
            <td>Surat OJK</td>
            <td>Tanggal Surat OJK</td>
            <td>Certif</td>
            <td>Jatuh Tempo Certif</td>
            
			<th>Action</td>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM pengurus order by id asc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$id = $hasil['id'];
            $nama_peng = stripslashes($hasil['nama_peng']);
            $jabatan_peng = stripslashes($hasil['jabatan_peng']);
			$nominal_peng = stripslashes($hasil['nominal_peng']);
			$saham_peng = stripslashes($hasil['saham_peng']);
			$pers_peng = stripslashes($hasil['pers_peng']);
            $jenis_peng = $hasil['jenis_peng'];
            $saham_pengl = stripslashes($hasil['saham_pengl']);
            $keu_peng = stripslashes($hasil['keu_peng']);
            $kel_peng = stripslashes($hasil['kel_peng']);
            $mulai_peng = stripslashes($hasil['mulai_peng']);
            $akhir_peng = stripslashes($hasil['akhir_peng']);
            $rups_peng = stripslashes($hasil['rups_peng']);
            $akte_rups = stripslashes($hasil['akte_rups']);
            $ojk_peng = stripslashes($hasil['ojk_peng']);
            $sojk_peng = stripslashes($hasil['sojk_peng']);
            $certif_peng = stripslashes($hasil['certif_peng']);
            $jatem_peng = stripslashes($hasil['jatem_peng']);
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no"; ?></td>
				<td><?php echo "$nama_peng"; ?></td>
                <td><?php echo "$jabatan_peng"; ?></td>
				<td><?php echo "$nominal_peng"; ?></td>
				<td><?php echo "$saham_peng"; ?></td>
                <td><?php echo "$pers_peng"; ?></td>
				<td><?php echo "$jenis_peng"; ?></td>
                <td><?php echo "$saham_pengl"; ?></td>
				<td><?php echo "$keu_peng"; ?></td>
                <td><?php echo "$kel_peng"; ?></td>
                <td><?php echo "$mulai_peng"; ?></td>
                <td><?php echo "$akhir_peng"; ?></td>
                <td><?php echo "$rups_peng"; ?></td>
                <td><?php echo "$akte_rups"; ?></td>
                <td><img height='80px' src="<?php echo 'files/ojk/' . $ojk_peng?>"</td>
                <td><?php echo "$sojk_peng"; ?></td>
                <td><img height='80px' src="<?php echo 'files/certif/' . $certif_peng?>"</td>
                <td><?php echo "$jatem_peng"; ?></td>
                
				<td>
					<a href="index.php?page=edit_peng&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_peng&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>
