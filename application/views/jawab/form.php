<form method='post' action='<?= base_url().'index.php/'.$uri_segment_one.'/save/' ?>'>
<label>nama mapel</label>

<input type="hidden" name="id_jawab" value="<?= isset($data) ? $data->id_jawab : '' ?>">
<input type="text" name="id_siswa" value="<?= isset($data) ? $data->nama_siswa : '' ?>">
<input type="text" name="id_soal" value="<?= isset($data) ? $data->id_soal : '' ?>">
<input type="text" name="jawab_jawaban" value="<?= isset($data) ? $data->jawab_jawaban : '' ?>">
<button type="submit">simpan</button>
</form>