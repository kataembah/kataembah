   <!-- TAMBAH MODAL -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit Status</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="../../../process/ubah/<?php echo $this->uri->segment(4); ?>" enctype="multipart/form-data">
          </div>
          <!-- /.box-header -->
          <div class="box-body" id="view">

              <?php
              foreach ($faktur as $row) { 
                ?>

                  <?php
                      if($row->status == 0){
                        echo "";
                      }elseif ($row->status == 1) {
                        echo "  
      <div class='form-group has-feedback'>
      <p>Nomor Resi</p>
      <input type='text' class='form-control' name='resi' required='true'>
      </div>";
                      }
                   ?> 
              <?php } ?> 

      <div class="form-group has-feedback">
         <p>Status :</p>
 <select name="status" class="form-control">

        <?php
              $no =  1 ;
              foreach ($faktur as $row) { 
                ?>
        <?php
                      if($row->status == 0){
                        echo "<option value='1'>Pengemasan</option>";
                      }elseif ($row->status == 1) {
                        echo "<option value='2'>Pengiriman</option>";
                      }
                   ?>
        <?php } ?> 


      
       	
       	
       </select>
      </div>
            </div>
            <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"> Batal</span></button>
            <button type="submit" name="register" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>    </div>

          </div>
        </div>
      </div>
    </form>
    <!-- END MODAL TAMBAH-->

  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="page-header" align="center"><b>Detail Pemesanan</b></h3>
            </div>
            <!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                   <th><center>No</center></th>
                  <th><center>Nama Produk</center></th>
                   <th> <center>Qty</center> </th>
                  <th><center>Harga</center></th>
                 
                  <th></th>
                 

                   
                </tr>
                </thead>
                <tbody>
                   <?php
              $no =  1 ;
              foreach ($produk as $row) { 
                ?>
                <tr>
                  <td><center><?php echo $no++ ?></center></td>
                  <td><center><?php echo $row->nama_produk ?></center> </td>
                   <td><center><?php echo $row->qty ?></center> </td>
                  <td><center>Rp. <?php echo number_format($row->harga) ?></center> </td>
                  
                      </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           <h3 class="page-header" style="margin-left: 10px" align="left"><b> Total :   <?php foreach ($faktur as $b): ?>
                                           Rp. <?= number_format($b->total) ?>
                                        <?php endforeach ?></b></h3>
          <!-- /.box -->
        </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="page-header" align="center"><b>Detail Pengiriman</b></h3>
            </div>
            <!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                   <th><center>No</center></th>
                  <th><center>ID Pelanggan</center></th>
                   <th> <center>Nama</center> </th>
                  <th><center>Jenis Kelamin</center></th>
                  <th><center>Email</center></th>
                   <th><center>Nomor Telepon</center></th>
                    <th><center>Alamat Pengiriman</center></th>
                  <th></th>
                 

                   
                </tr>
                </thead>
                <tbody>
                   <?php
              $no =  1 ;
              foreach ($pelanggan as $row) { 
                ?>
                <tr>
                  <td><center><?php echo $no++ ?></center></td>
                  <td><center><?php echo $row->id_pelanggan ?></center> </td>
                   <td><center><?php echo $row->nama_pelanggan ?></center> </td>
                  <td><center><?php echo $row->jenis_kelamin ?></center> </td>
                  <td><center><?php echo $row->email ?></center> </td>
                   <td><center><?php echo $row->no_hp ?></center> </td>
                   <td><center><?php echo $row->alamat ?></center> </td>
                  
                      </tr>
                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
           <h5 class="page-header" style="margin-left: 10px" align="left"><b> Status :   

 <?php
              $no =  1 ;
              foreach ($faktur as $row) { 
                ?>
				<?php
                      if($row->status == 0){
                        echo "Verifikasi";
                      }elseif ($row->status == 1) {
                        echo "Pengemasan";
                      }elseif ($row->status == 2) {
                        echo "Pengiriman";
                      }
                   ?>

                <?php } ?> 
           </b> <a href="" data-toggle="modal" data-target="#modal-default"><i class="fa fa-edit"></i></a></h5> 
          <!-- /.box -->
        </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


   <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
        </div>
           <form method="POST" action="../Admin/Produk/ubah" enctype="multipart/form-data">
          
       
        <div class="modal-body" id="modal_edit_info">
          <div class="form-group">
              <div class="input-group">
                <div class="input-group-addon">
                  <b>ID</b>
                </div>
                <input type="text" readonly="readonly" class="form-control" id="id_registrasi" name="id_registrasi" >
              </div>
          </div>
          <div class="form-group has-feedback">
          <label>Nama</label>
          <input type="text" class="form-control" id="nama_produk"   name="nama_produk"> 
          </div>
          <div class="form-group has-feedback">
          <label>Harga</label>
          <input type="text" class="form-control" id="harga"  name="harga"> 
          </div>
            <div class="form-group has-feedback">
          <label>Jenis</label>
          <input type="text" class="form-control" id="jenis_produk"  name="jenis_produk"> 
          </div>
            <div class="form-group has-feedback">
          <label>Deskripsi</label>
          <textarea class="form-control" id="deskripsi"  name="deskripsi"></textarea>
         
          </div>
            <div class="form-group has-feedback">
          <label>Gambar</label>  <p class="label label-danger"> Wajib di Upload Ulang</p>
           <input  type="file" required="true" name="userfile">
         
          </div>
        <div class="modal-footer">   

          <button type="button"class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"> Batal</span></button>
    <button type="submit" name="register" class="btn btn-primary"><span class="fa fa-save"> Simpan</span></button>   
        </div>
         </form>
      </div>
      </div>
      </div>  
     <!-- END EDIT -->
     
  <script type="text/javascript">

    $(document).on("click", "#edit_info", function(){
        var idd      = $(this).data('id');
        var napr    = $(this).data('np');
        var hrg    = $(this).data('hg');
         var tlep   = $(this).data('tlp');
        var jnp   = $(this).data('jp');
        var dsk   = $(this).data('ds');
        var igm   = $(this).data('im');
       

        $(".modal-body#modal_edit_info #id_registrasi").val(idd);             
        $(".modal-body#modal_edit_info #nama_produk").val(napr);
        $(".modal-body#modal_edit_info #harga").val(hrg);
        $(".modal-body#modal_edit_info #jenis_produk").val(jnp);
        $(".modal-body#modal_edit_info #deskripsi").val(dsk);
         $(".modal-body#modal_edit_info #userfile").val(igm);
         
      
       })
</script>
