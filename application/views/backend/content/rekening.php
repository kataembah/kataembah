   <!-- TAMBAH MODAL -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">TAMBAH REKENING SAYA</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="../../process/addrek" method="POST" enctype="multipart/form-data">
          </div>
          <!-- /.box-header -->
          <div class="box-body" id="view">
      <div class="form-group has-feedback">
         <p>Atas Nama :</p>
        <input type="text" focus="true" name="atas_nama" class="form-control" required="required" placeholder="Atas Nama">
      </div>
      <div class="form-group has-feedback">
         <p>Nomor Rekening :</p>
        <input type="text" focus="true" name="nomor_rekening" class="form-control" required="required" placeholder="Nomor Rekening">
      </div>
       <div class="form-group has-feedback">
         <p>Nama Bank :</p>
       <select class="form-control" name="nama_bank">
         <option value="BCA">BCA</option>
         <option value="MANDIRI">MANDIRI</option>
         <option value="BNI">BNI</option>
         <option value="DKI">DKI</option>
         <option value="BJB">BJB</option>
          <option value="BRI">BRI</option>
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
        <div class="col-md-3">
              <button type="button" class="btn btn-success btn-block margin-bottom" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-plus-circle"></i> Tambah
              </button>

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
                  <li ><a href="<?php echo base_url()?>Admin/setting"><i class="fa fa-camera"></i> Bukti Transfer  <span class="label label-danger pull-right"><?php echo $verifikasi ?></span> </a></li>
                </li>
                 <li class="active"><a href="#"><i class="fa fa-money"></i> Rekening Saya  <span class="label label-success pull-right"><?php echo $pengemasan ?></span></a></li>
              
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
 

      <div class="row">
        <div class="col-md-8">
          <div class="box">

            <div class="box-header">
              <h3 class="box-title">Rekening Saya</h3>
            </div>
            <!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                   <th><center>No</center></th>
                  <th><center>Atas Nama</center></th>
                  <th> <center>Nomor Rekening</center> </th>
                  <th> <center>Nama Bank</center> </th>
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
                  <td><center><?php echo $row->atas_nama ?></center> </td>
                  <td><center><?php echo $row->nomor_rekening ?></center> </td>
                   <td><center><?php echo $row->nama_bank ?></center> </td>
                     <td><center>  <a class="btn btn-primary " id="edit_info" data-toggle="modal"
                                                                data-target="#edit"
                                                                data-id="<?= $row->id_rekening;?>"
                                                                data-np="<?= $row->nomor_rekening;?>"
                                                                data-hg="<?= $row->nama_bank;?>"
                                                                  data-ds="<?= $row->atas_nama;?>"><i class="fa fa-edit"></i></a> 
          <a  onclick="return confirm('Apa Anda Yakin Hapus Data??')" class='btn btn-danger' href='<?php echo base_url()?>process/hapusrek/<?php echo $row->id_rekening ?>' ><i class='fa fa-trash-o' ></i></a>
                     </center></td>
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
           <form method="POST" action="./../../process/editrek" enctype="multipart/form-data">
          
       
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
          <label>Atas Nama</label>
          <input type="text" class="form-control" id="deskripsi"  name="deskripsi">
          </div>
          <div class="form-group has-feedback">
          <label>Nomor Rekening</label>
          <input type="text" class="form-control" id="nama_produk"   name="nama_produk"> 
          </div>
          <div class="form-group has-feedback">
          <label>Nama Bank</label>
          <input type="text" class="form-control" id="harga"  name="harga"> 
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
