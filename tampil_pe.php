<?php
include "koneksi.php";
?>
<div id="content">
	<br>
	<br>
	<br>
	<br>
	<h2>Data Pejabat Eksekutif</h2>
	<table id="tabel">
		<tr>
			<th>No</th>
			<th>Nama Pejabat Eksekutif</th>
            <th>Alamat</th>
            <th>Nama Ibu Kandung</th>
            <th>Nomor NPWP</th>
            <th>Nomor KTP</th>
            <th>Jabatan</th>
            <th>Tanggal Menjabat</th>
            <th>Surat Pengangkatan Dari Bank</th>
            <th>Surat Penegasan OJK</th>
            <th>Certif</th>
            <th>Jatuh Tempo Certif</th>
            
			<th>Action</th>
		</tr>
		<?php
		$no = 1;
		$query = "SELECT * FROM pengurus_eksekutif order by id asc";
		$sql = mysqli_query($conn, $query);
		while ($hasil = mysqli_fetch_array($sql)) {
			$id = $hasil['id'];
            $nama_pe = stripslashes($hasil['nama_pe']);
            $alamat_pe = stripslashes($hasil['alamat_pe']);
			$ibu_pe = stripslashes($hasil['ibu_pe']);
			$npwp_pe = stripslashes($hasil['npwp_pe']);
			$ktp_pe = stripslashes($hasil['ktp_pe']);
            $jabatan_pe = $hasil['jabatan_pe'];
            $mjb_pe = stripslashes($hasil['mjb_pe']);
            $spb_pe = stripslashes($hasil['spb_pe']);
            $spo_pe = stripslashes($hasil['spo_pe']);
            $certif_pe = stripslashes($hasil['certif_pe']);
            $jatem_pe = stripslashes($hasil['jatem_pe']);
			$warna = ($no % 2 == 1) ? "#ffffff" : "#efefef";
		?>
			<tr bgcolor="<?php echo "$warna"; ?>">
				<td><?php echo "$no"; ?></td>
				<td><?php echo " $nama_pe"; ?></td>
                <td><?php echo "$alamat_pe"; ?></td>
				<td><?php echo "$ibu_pe"; ?></td>
				<td><?php echo "$npwp_pe"; ?></td>
                <td><?php echo "$ktp_pe"; ?></td>
				<td><?php echo "$jabatan_pe"; ?></td>
                <td><?php echo "$mjb_pe"; ?></td>
                <td><img height='80px' src="<?php echo 'files/ojkpe/' . $spb_pe?>"</td>
                <td><?php echo "$spo_pe"; ?></td>
                <td><img height='80px' src="<?php echo 'files/certifpe/' . $certif_pe?>"</td>
                <td><?php echo "$jatem_pe"; ?></td>
                
                
                
				<td>
					<a href="index.php?page=edit_pe&id=<?php echo "$id"; ?>">Edit</a><br />
					<a href="index.php?page=delete_peng&id=<?php echo "$id"; ?>">Delete</a>
				</td>
			</tr>
		<?php $no++;
		} ?>
	</table>
</div>
