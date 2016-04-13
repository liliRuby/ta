<?php // print_r($items); ?>
<form method='post' action='<?= base_url().'index.php/'.$uri_segment_one.'/save/' ?>'>

<label>Data Berita</label>

<table>

<!-- <input type="hidden" name="id_berita" value="<?= isset($data) ? $data->id_guru : '' ?>"> -->
<tr><td>Judul Berita</td><td><input type="text" name="judul_berita" value="<?= isset($data) ? $data->judul_berita : '' ?>"></td></tr>
<tr><td>Isi Berita</td><td><input type="text" name="isi_berita" value="<?= isset($data) ? $data->isi_berita : '' ?>"></td><tr>
<tr><td>Tanggal berita</td><td><input type="text" name="tanggal_berita" value="<?= isset($data) ? $data->tanggal_berita : '' ?>"></td><tr>
<tr><td>File berita</td><td><input type="text" name="file_berita" value="<?= isset($data) ? $data->file_berita : '' ?>"></td><tr>
<tr><td>Nama Guru</td><td>
<select name="id_guru">
	<option value="">pilih data</option>
	<?php foreach ($items as $row) { ?>
	<option value="<?= $row->id_guru ?>"><?= $row->nama_guru ?></option>
	<?php } ?>
</select>
</td><tr>
<tr><td><button type="submit">simpan</button></td></tr>
</form>


