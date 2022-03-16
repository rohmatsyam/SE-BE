<?php 
include 'database.php';
$db = new database();
?>

<h3>Data User</h3>

<a href="create.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Pekerjaan</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $data){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['pekerjaan']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
			<a href="process.php?id=<?php echo $data['id']; ?>&method=delete">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>