<?php
include "koneksi.php";
?>
<div id="content">
	
	<h2>File Hukum / Reelas</h2>
	<div align="center">
		<?php
		$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
		if ($id == 0) die("no id selected");
		$query = "SELECT file_hkm FROM hukum WHERE id='$id'";
		$sql = mysqli_query($conn, $query);
		$hasil = mysqli_fetch_array($sql);
		$file = $hasil['file_hkm'];
		if (empty($file)) echo "<strong>File surat tidak tersedia</strong>";
		echo "File berada di /files/hukum/$file";
		?>
	</div>
</div>