<form method='post' action='<?= base_url().'index.php/'.$uri_segment_one.'/save/' ?>'>
<label>nama mapel</label>

<input type="hidden" name="id_materi" value="<?= isset($data) ? $data->id_materi : '' ?>">
<input type="text" name="judul_materi" value="<?= isset($data) ? $data->judul_materi : '' ?>">
<input type="text" name="sub_materi" value="<?= isset($data) ? $data->sub_materi : '' ?>">
<input type="text" name="tanggal_materi" value="<?= isset($data) ? $data->tanggal_materi : '' ?>">
<input type="text" name="isi_materi" value="<?= isset($data) ? $data->isi_mapel : '' ?>">
<input type="text" name="referensi_materi" value="<?= isset($data) ? $data->referensi_materi : '' ?>">
<input type="text" name="file_materi" value="<?= isset($data) ? $data->file_materi : '' ?>">
<input type="text" name="kelas_materi" value="<?= isset($data) ? $data->kelas_mapel : '' ?>">
<input type="text" name="id_guru" value="<?= isset($data) ? $data->nama_guru : '' ?>">
<button type="submit">simpan</button>
</form>