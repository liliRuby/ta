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
<h3><?= $title ?></h3>
<table class="table table-striped table-responsive datatables">
	<thead>
	<tr>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>No Telpon</th>
			<th>Tanggal Lahir (yyyy-mm-dd)</th>
			<th>Jenis Kelamin</th>
			<th>Foto</th>
			<th>Status Siswa</th>

			<th>
				Aksi
			</th>
		</tr>
	</thead>
		<tbody>

<?php foreach ($items as $row) { ?>
		<tr>
			<td><?=$row->nama_siswa ?></td>
			<td><?=$row->kelas_siswa ?></td>
			<td><?=$row->alamat_siswa ?></td>
			<td><?=$row->telp_siswa ?></td>
			<td><?=$row->lahir_siswa ?></td>
			<td><?=$row->jk_siswa ?></td>
			<td><img src="<?= base_url('assets/images/teacher/'.$row->foto_siswa)?>" style="height:50px;width:50px;"></td>
			<td><?=$row->status_siswa ?></td>
			<td>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/edit/'.$row->id_siswa ?>" class="btn btn-sm btn-warning">Ubah</a>
				<a href="<?= base_url().'index.php/'.$uri_segment_one.'/delete/'.$row->id_siswa ?>"  class="btn btn-sm btn-danger">Hapus</a>
			</td>
		</tr>
<?php } ?>
		</tbody>
</table>

<a href="<?= base_url().'index.php/'.$uri_segment_one.'/add/' ?>" class="btn btn-info">Tambah data</a>
		</div>
	
	<!--//faq-->
		<!---->
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<?php 
$this->load->view('layout/js');
?>
<!--tambahkan custom js disini-->
<script type="text/javascript">
	$(function () {
        $('.datatables').DataTable({
            "aoColumnDefs": [
              { 'bSortable': false, 'aTargets': [0] }
            ],
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });

</script>
<!--batas custom js disini-->
<?php
$this->load->view('layout/foot');
?>

