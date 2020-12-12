<?php  
include 'header.php';
include 'adminsidebar.php';
?> 

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <!-- =================CONTENT============================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        gudang
        <small>Riwayat Pinjaman</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
       <!-- <a href="../gudang/input-alat.php"><i class="fa fa-edit"></i> Masukan Data Alat Yang Akan Di Kembalikan</span></a> -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Alat</h3>
        </div>

        <div class="box-body" >
       
        
           <table  id="table1" class="display table table-border table-hover">
                <thead>
                <tr>
                  <th>Nama Alat</th>
                  <th>Penanggungjawab</th>
                  <th>Tanggal Pinjaman</th>
                  <th>Tanggal Kembali</th>
                  <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                <?php
					require '../db_gudang/mdl_riwayatpinjaman.php';
					$conn = new mdlriwayatpinjaman();
					$read = $conn->read();
					while($fetch = $read->fetch_array()){ 
				?>
                <tr>
						      <td><?php echo $fetch['nama_alat']?></td>
                  <td><?php echo $fetch['penanggung_jawab']?></td>
                  <td><?php echo $fetch['tanggal_perbaikan']?></td>
                  <td><?php echo $fetch['tanggal_kembali']?></td>
						      <td><?php echo $fetch['jumlah']?></td>
                  
                  
					      </tr>
                <?php
					          }
				        ?>
                </tbody>
              </table>
        
            </div>
            <!-- <input type="button" value="Download Laporan" onclick="location.href='print-alat.php'"></input> -->
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php 
include 'footer.php';
 ?>

 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $("#table1").DataTable();
  });
</script>
