<h3><?= $title ?></h3>
<p><?= $uri_segment_one ?></p>
<?php //[row] => value ?>
<a href="<?= base_url().'index.php/'.$uri_segment_one.'/add/' ?>">Tambah data</a>
<?php 
foreach($items as $row) { ?>
	<table border='1'>
		<tr>
			<td><?=$row->id_berita ?></td>
			<td><?=$row->judul_berita ?></td>
			<td><?=$row->isi_berita ?></td>
			<td><?=$row->tanggal_berita ?></td>
			<td><?=$row->file_berita ?></td>
			<td>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/edit/'.$row->id_berita ?>">Ubah</a>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/delete/'.$row->id_berita ?>">hapus</a>
			</td>
		</tr>
	</table>
<?php } ?>