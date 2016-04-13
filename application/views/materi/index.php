<h3><?= $title ?></h3>
<p><?= $uri_segment_one ?></p>
<?php //[row] => value ?>
<a href="<?= base_url().'index.php/'.$uri_segment_one.'/add/' ?>">Tambah data</a>
<?php foreach ($items as $row) { ?>
	<table border='1'>
		<tr>
			<td><?=$row->id_materi ?></td>
			<td><?=$row->judul_materi ?></td>
			<td><?=$row->sub_materi ?></td>
			<td><?=$row->tanggal_materi ?></td>
			<td><?=$row->isi_materi ?></td>
			<td><?=$row->referensi_materi ?></td>
			<td><?=$row->file_materi ?></td>
			<td><?=$row->kelas_materi ?></td>
			<td><?=$row->id_guru ?></td>
			

			<td>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/edit/'.$row->id_materi ?>">Ubah</a>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/delete/'.$row->id_materi ?>">hapus</a>
			</td>
		</tr>
	</table>
<?php } ?>