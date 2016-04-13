<h3><?= $title ?></h3>
<p><?= $uri_segment_one ?></p>
<?php //[row] => value ?>
<a href="<?= base_url().'index.php/'.$uri_segment_one.'/add/' ?>">Tambah data</a>
<?php foreach ($items as $row) { ?>
	<table border='1'>
		<tr>
			<td><?=$row->id_mapel ?></td>
			<td><?=$row->nama_mapel ?></td>
			<td>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/edit/'.$row->id_mapel ?>">Ubah</a>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/delete/'.$row->id_mapel ?>">hapus</a>
			</td>
		</tr>
	</table>
<?php } ?>