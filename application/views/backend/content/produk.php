 <!-- TAMBAH MODAL -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">TAMBAH Produk</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="../Admin/Produk/simpan" enctype="multipart/form-data">
          </div>
          <!-- /.box-header -->
          <div class="box-body" id="view">
      <div class="form-group has-feedback">
         <p>Nama Produk :</p>
        <input type="text" focus="true" name="nama" class="form-control" required="required" placeholder="Nama Produk">
      </div>
      <div class="form-group has-feedback">
        <p>Harga :</p>
        <input type="text" focus="true" name="harga" class="form-control" required="required" placeholder="Harga">
      </div>
       <div class="form-group has-feedback">
         <p>Jenis Produk :</p>
        <select name="jenis_produk" class="form-control">
          <option value="lokal">Lokal</option>
          <option value="Thailand">Thailand</option>
        </select>
      </div>
       <div class="form-group has-feedback">
          <p>Deskripsi :</p>
       <textarea name="deskripsi" required="required"  class="form-control"></textarea>
      </div>
     <div class="form-group has-feedback">
       <p>Gambar :</p>
      <div class="form-group">
       <input required="required"   type="file" name="userfile">
        </div>
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
            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-default">
       + Tambah</button>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slide</h3>
            </div>
            <!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                   <th><center>No</center></th>
                  <th><center>Nama Produk</center></th>
                  <th><center>Harga</center></th>
                  <th> <center>Jenis</center> </th>
                   <th> <center>Deskripsi</center> </th>
                    <th> <center>Gambar</center> </th>
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
                  <td><center><?php echo $row->nama_produk ?></center> </td>
                  <td><center><?php echo $row->harga ?></center> </td>
                   <td><center><?php echo $row->jenis_produk ?></center> </td>
                 <td style="width: 450px"><center><?php echo $row->deskripsi ?></center> </td>
                  <td><center><img style="width: 80px; height: 80px" src="<?= base_url() ?>asset/images/portfolio/<?= ($row->img == NULL) ? '1.jpg' : $row->img ?>"  alt="<?= $row->nama_produk ?>" style="width:261px;height:269px"> </center></td>

                  <td><center>
                  
                         <a  onclick="return confirm('Apa Anda Yakin Hapus Data??')" class='btn btn-danger' href='<?php echo base_url()?>index.php/Admin/Produk/hapus/<?php echo $row->id_produk ?>' ><i class='fa fa-trash-o' ></i></a>
                        <a class="btn btn-primary " id="edit_info" data-toggle="modal"
                                                                data-target="#edit"
                                                                data-id="<?= $row->id_produk;?>"
                                                                data-np="<?= $row->nama_produk;?>"
                                                                data-hg="<?= $row->harga;?>"
                                                                 data-jp="<?= $row->jenis_produk;?>"
                                                                  data-ds="<?= $row->deskripsi;?>"
                                                                   data-im="<?= $row->img;?>"><i class="fa fa-edit"></i></a> 
                    </center>
                      </td>    
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
