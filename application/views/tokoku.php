<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	table, th, td {
		border:1px solid black;
	}

	</style>
</head>
<body>
	<h1>Tabel Daftar Buku</h1>

	<a href="<?php echo base_url('/tokoku/halaman_tambah') ?>">Tambah Buku</a> 
	<br>
	<br>
	<table>
		<tr>
			<td>ID</td>
			<td>Judul</td>
			<td>Pengarang</td>
			<td>Penerbit</td>
			<td>Tahun</td>
			<td>Status</td>
			<td>Aksi</td>
		</tr>
	</table>

	<?php foreach ($queryAlltoko as $row) : ?>
		<tr>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->Judul ?></td>
			<td><?php echo $row->Pengarang ?></td>
			<td><?php echo $row->Penerbit ?></td>
			<td><?php echo $row->Tahun ?></td>
			<td><?php echo $row->Status ?></td>
			<td><a href="<?php echo base_url('/tokoku/hal_edit') ?>/<?php echo $row->id ?>">Edit </a> | <a href="<?php echo base_url('tokoku/funcDel') ?>/<?php echo $row->id ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
</body>
</html>