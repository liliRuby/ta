<h3><?= $title ?></h3>
<p><?= $uri_segment_one ?></p>
<?php //[row] => value ?>
<a href="<?= base_url().'index.php/'.$uri_segment_one.'/add/' ?>">Tambah data</a>
<?php foreach ($items as $row) { ?>
	<table border='1'>
		<tr>
			<td><?=$row->id_jawabty ?></td>
			<td><?=$row->id_siswa ?></td>
			<td><?=$row->id_soalty ?></td>
			<td><?=$row->jawabty ?></td>
			<td><?=$row->nilai ?></td>
			<td><?=$row->waktu ?></td>

			<td>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/edit/'.$row->id_jawabty ?>">Ubah</a>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/delete/'.$row->id_jawabty ?>">hapus</a>
			</td>
		</tr>
	</table>
<?php } ?>