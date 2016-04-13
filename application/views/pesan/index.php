<h3><?= $title ?></h3>
<p><?= $uri_segment_one ?></p>
<?php //[row] => value ?>
<a href="<?= base_url().'index.php/'.$uri_segment_one.'/add/' ?>">Tambah data</a>
<?php foreach ($items as $row) { ?>
	<table border='1'>
		<tr>
			<td><?=$row->id_mapel ?></td>
			<td><?=$row->id_siswa ?></td>
			<td><?=$row->id_guru ?></td>
			<td><?=$row->tanggal_pesan ?></td>
			<td><?=$row->subjek_pesan ?></td>
			<td><?=$row->isi_pesan ?></td>
			<td><?=$row->tujuan_pesan ?></td>
			<td>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/edit/'.$row->id_pesan ?>">Ubah</a>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/delete/'.$row->id_pesan ?>">hapus</a>
			</td>
		</tr>
	</table>
<?php } ?>