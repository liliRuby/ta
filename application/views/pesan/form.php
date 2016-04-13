<form method='post' action='<?= base_url().'index.php/'.$uri_segment_one.'/save/' ?>'>
<label>nama mapel</label>

<input type="hidden" name="id_pesan" value="<?= isset($data) ? $data->id_pesan '' ?>">
<input type="text" name="id_siswa" value="<?= isset($data) ? $data->nama_siswa : '' ?>">
<input type="text" name="id_guru" value="<?= isset($data) ? $data->nama_guru : '' ?>">
<input type="text" name="tanggal_pesan" value="<?= isset($data) ? $data->tanggal_pesan : '' ?>">
<input type="text" name="subjek_pesan" value="<?= isset($data) ? $data->subjek_pesan : '' ?>">
<input type="text" name="isi_pesan" value="<?= isset($data) ? $data->isi_pesan : '' ?>">
<input type="text" name="tujuan_pesan" value="<?= isset($data) ? $data->tujuan_pesan : '' ?>">
<button type="submit">simpan</button>
</form>