<form method='post' action='<?= base_url().'index.php/'.$uri_segment_one.'/save/' ?>'>
<label>nama mapel</label>

<input type="hidden" name="id_mapel" value="<?= isset($data) ? $data->id_mapel : '' ?>">
<input type="text" name="nama_mapel" value="<?= isset($data) ? $data->nama_mapel : '' ?>">
<button type="submit">simpan</button>
</form>