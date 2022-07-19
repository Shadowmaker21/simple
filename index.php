<html>
<title>SEKAR</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="select2.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>




<body>
	<div id="main_container">
		<div id="header">
		</div>
		<div class="menu" id="navigation">
			<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="">Menu Surat</a>
				<ul>
					<li><a href="index.php?page=input_srt">Surat Teguran(Denda)</a></li>
					<li><a href="index.php?page=input_hkm">Hukum / Reelas</a></li>
				</ul>
			</li>
			<li><a href="">Corporate File</a>
				<ul>
					<li><a href="index.php?page=input_ps">Pemegang Saham</a></li>
					<li><a href="index.php?page=input_peng">Pengurus</a></li>
					<li><a href="index.php?page=input_pe">Pengurus Eksekutif</a></li>
				</ul>
			</li>
			<li><a href="">Notulen</a>
				<ul>
					<li><a href="index.php?page=input_not">Buat Notulen</a></li>
				</ul>
			</li>
			<li><a href="">Ketentuan Intern</a>
				<ul>
					<li><a href="index.php?page=input_sk">SK DIREKSI</a></li>
					<li><a href="index.php?page=input_se">SE DIREKSI</a></li>
					<li><a href="index.php?page=input_memo">INTERNAL MEMO</a></li>
				</ul>
			</li>
			<li><a href="">Download Center</a>
				<ul>
					<li><a href="index.php?page=download_surat">Rekap Surat</a></li>
					<li><a href="index.php?page=download_hkm">Rekap Hukum/Reelas</a></li>
					<li><a href="index.php?page=download_ps">Rekap Pemegang Saham</a></li>
					<li><a href="index.php?page=download_peng">Rekap Pengurus</a></li>
					<li><a href="index.php?page=download_pe">Rekap Pejabat Eksekutif</a></li>
					<li><a href="index.php?page=download_sk">Rekap SK</a></li>
					<li><a href="index.php?page=download_se">Rekap SE Direksi</a></li>
					<li><a href="index.php?page=download_memo">Rekap Internal Memo</a></li>
				</ul>
			</li>
			</ul>
		</div>
		
		<?php
		$page = (isset($_GET['page'])) ? $_GET['page'] : "main";
		switch ($page) {
			case 'input_srt':
				include "input_srt.php";
				break;
			case 'edit_srt':
				include "edit_srt.php";
				break;
			case 'delete_srt':
				include "delete_srt.php";
				break;
			case 'tampil_srt':
				include "tampil_srt.php";
				break;
			case 'file_srt':
				include "file_srt.php";
				break;
			case 'input_hkm':
				include "input_hkm.php";
				break;
			case 'tampil_hkm':
				include "tampil_hkm.php";
				break;
			case 'file_hkm':
				include "file_hkm.php";
				break;
			case 'input_ps':
				include "input_ps.php";
				break;
			case 'tampil_ps':
				include "tampil_ps.php";
				break;
			case 'edit_ps':
				include "edit_ps.php";
				break;
			case 'edit_ps2':
				include "edit_ps2.php";
				break;
			case 'input_peng':
				include "input_peng.php";
				break;
			case 'tampil_peng':
				include "tampil_peng.php";
				break;
			case 'edit_peng':
				include "edit_peng.php";
				break;
			case 'input_pe':
				include "input_pe.php";
				break;
			case 'tampil_pe':
				include "tampil_pe.php";
				break;
			case 'edit_pe':
				include "edit_pe.php";
				break;
			case 'input_not':
				include "input_not.php";
				break;
			case 'tampil_not':
				include "tampil_not.php";
				break;
			case 'input_sk':
				include "input_sk.php";
				break;
			case 'edit_sk':
				include "edit_sk.php";
				break;
			case 'tampil_sk':
				include "tampil_sk.php";
				break;
			case 'input_se':
				include "input_se.php";
				break;
			case 'tampil_se':
				include "tampil_se.php";
				break;
			case 'input_memo':
				include "input_memo.php";
				break;
			case 'tampil_memo':
				include "tampil_memo.php";
				break;
			case 'download_surat':
				include "download_surat.php";
				break;
			case 'download_hkm':
				include "download_hkm.php";
				break;
			case 'download_ps':
				include "download_ps.php";
				break;
			case 'download_peng':
				include "download_peng.php";
				break;
			case 'download_pe':
				include "download_pe.php";
				break;
			case 'download_sk':
				include "download_sk.php";
				break;
			case 'download_se':
				include "download_se.php";
				break;
			case 'download_memo':
				include "download_memo.php";
				break;
			case 'main':
			default:
				include 'utama.php';
		}
		?>

		<div id="footer">&copy; 2022 SEKAR</div>
	</div>
</body>

</html>