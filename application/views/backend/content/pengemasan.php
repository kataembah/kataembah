   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
              
       <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                  <li ><a href="<?php echo base_url()?>Admin/Pesanan"><i class="fa fa-hourglass-o"></i> Verifikasi  <span class="label label-danger pull-right"><?php echo $verifikasi ?></span></a></li>
                </li>
                 <li class="active" ><a href="#"><i class="fa fa-dropbox"></i> Pengemasan <span class="label label-success pull-right"><?php echo $pengemasan ?></span></a></li>
                </li>
                  <li><a href="<?php echo base_url()?>Admin/Pesanan/Pengiriman"><i class="fa fa-truck"></i> Pengiriman <span class="label label-warning pull-right"><?php echo $Pengiriman ?></span> </a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
 

      <div class="row">
        <div class="col-md-8">
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Pesanan</h3>
            </div>
            <!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                   <th><center>No</center></th>
                  <th><center>Id Pemesanan</center></th>
                  <th><center>Nama Pemesan</center></th>
                  <th> <center>Tanggal Pemesanan</center> </th>
                  <th> <center>Status</center> </th>
                  <th> <center>Aksi</center> </th>

                   
                </tr>
                </thead>
                <tbody>
                   <?php
              $no =  1 ;
              foreach ($datakks->result() as $row) { 
                ?>
                <tr>
                  <td><center><?php echo $no++ ?></center></td>
                  <td><center><?php echo $row->id_pesanan ?></center> </td>
                  <td><center><?php echo $row->nama_pelanggan ?></center> </td>
                   <td><center><?php echo $row->tgl_pemesanan ?></center> </td>
                 <td><center><?php
                      if($row->status == 0){
                        echo "Verifikasi";
                      }elseif ($row->status == 1) {
                        echo "Pengemasan";
                      }elseif ($row->status == 2) {
                        echo "Pengiriman";
                      }
                   ?></center> </td>
                     <td><center><a class="btn btn-primary" target="_BLANK" href="<?= base_url()?>Admin/Pesanan/details/<?php echo $row->id_faktur ?>"><i class="fa fa-search"></i></a></center></td>
                      </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
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
