<form method='post' action='<?= base_url().'index.php/'.$uri_segment_one.'/save/' ?>'>
<label>nama mapel</label>

<input type="hidden" name="id_jawabty" value="<?= isset($data) ? $data->id_jawabty : '' ?>">
<input type="text" name="id_siswa" value="<?= isset($data) ? $data->nama_siswa : '' ?>">
<input type="text" name="id_soalty" value="<?= isset($data) ? $data->id_soalty : '' ?>">
<input type="text" name="jawabty" value="<?= isset($data) ? $data->jawabty : '' ?>">
<input type="text" name="nilai" value="<?= isset($data) ? $data->nilai : '' ?>">
<input type="text" name="waktu" value="<?= isset($data) ? $data->waktu : '' ?>">

<button type="submit">simpan</button>
</form>