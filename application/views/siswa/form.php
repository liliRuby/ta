<?php 
$this->load->view('layout/head');
?>
<!-- tambahkan css di sini -->

<!-- batas penambahan css -->
<?php
$this->load->view('layout/topbar');
$this->load->view('layout/sidebar');
?>

    <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
    <!--banner-->   
             <div class="banner">
                <h2>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Dashboard</span>
                </h2>
            </div>
        <!--//banner-->
     <!--faq-->
        <div class="box-body">
                    <form method='post' action='<?= base_url().'index.php/'.$uri_segment_one.'/save/' ?>' enctype="multipart/form-data">

<label>Data Siswa</label>

<table>

<input type="hidden" name="id_siswa" value="<?= isset($data) ? $data->id_siswa : '' ?>">
<tr><td>Nama Siswa</td><td><input type="text" name="nama_siswa" value="<?= isset($data) ? $data->nama_siswa : '' ?>" required></td></tr>
<tr><td>Kelas</td><td>
  <?php 
    $options = array(
        ''=>'pilih',
        '7'=>'7',
        '8'=>'8',
        '9'=>'9'
    );
    echo form_dropdown('kelas_siswa',$options,'');
?>  
</td></tr>
<tr><td>Alamat</td><td><input type="text" name="alamat_siswa" value="<?= isset($data) ? $data->alamat_siswa : '' ?>" required></td><tr>
<tr><td> Nomor Telpon</td><td><input type="text" name="telp_siswa" value="<?= isset($data) ? $data->telp_siswa : '' ?>" required></td><tr>
<tr><td>Tanggal Lahir</td><td><input type="text" name="lahir_siswa" value="<?= isset($data) ? $data->lahir_siswa : '' ?>" required></td><tr>
<tr><td>(yyyy-mm-dd)</td></tr>
<tr><td>Jenis Kelamin</td><td>
   <select name="jk_siswa" required>
    <option value="">Pilih</option>
    <option value="P">PRIA</option>
    <option value="L">Laki-laki</option>
   </select>
</td></tr>
<tr><td>Foto</td><td><input type="file" name="foto_siswa" value="<?= isset($data) ? $data->foto_siswa : '' ?>"></td></tr>
<tr><td>Status siswa</td><td>
  <?php 
    $options = array(
        ''=>'pilih',
        'aktif'=>'aktif',
        'tidak aktif'=>'tidak aktif'
    );
    echo form_dropdown('status_siswa',$options,'');
?>  
</td></tr>
<tr><td><button type="submit">simpan</button></td></tr>
</table>
</form>
        </div>
    
    <!--//faq-->
        <!---->

        </div>
        </div>
        <div class="clearfix"> </div>
       </div>
     
<!---->
<?php 
$this->load->view('layout/js');
?>
<!--tambahkan custom js disini-->

<!--batas custom js disini-->
<?php
$this->load->view('layout/foot');
?>



