 <!-- TAMBAH MODAL -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">TAMBAH SLIDE</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="../Admin/slide/simpan" enctype="multipart/form-data">
          </div>
          <!-- /.box-header -->
          <div class="box-body" id="view">
      <div class="form-group has-feedback">
         <p>Judul :</p>
        <input type="text" focus="true" name="nama" class="form-control" required="required" placeholder="Judul Slide">
      </div>
       <div class="form-group has-feedback">
          <p>Deskripsi :</p>
       <textarea name="deskripsi"  class="form-control"></textarea>
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
                 <li class="active" ><a href="#"><i class="fa fa-image"></i> SLIDE  </a></li>
                </li>
                 <li><a href="<?php echo base_url()?>Admin/slide/utama"><i class="fa fa-image"></i> SLIDE UTAMA </a></li>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
 
   
        <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slide</h3>
            </div>
            <!-- /.box-header -->
             <div class="box-body table-responsive no-padding">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th><center>No</center></th>
                  <th><center>Nama</center></th>
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
                  <td><center><?php echo $row->nama ?></center> </td>
                  <td><center>
                    <?php
                        if($row->deskripsi == null){
                          echo "-";
                          }else{
                            echo $row->deskripsi; 

                          }?></center> </td>
                  
                  <td><center><img style="width: 180px; height: 80px" src="<?= base_url() ?>asset/images/slide/<?= ($row->img == NULL) ? '1.jpg' : $row->img ?>"  alt="<?= $row->nama ?>" style="width:261px;height:269px"> </center></td>


                  <td><center>
                    <a  onclick="return confirm('Apa Anda Yakin Hapus Data??')" class='btn btn-danger' href='<?php echo base_url()?>index.php/Admin/slide/hapus/<?php echo $row->id ?>' ><i class='fa fa-trash-o' ></i></a>
                      <a class="btn btn-primary " id="edit_info" data-toggle="modal"
                                                                data-target="#edit"
                                                                data-id="<?= $row->id;?>"
                                                                data-np="<?= $row->nama;?>"
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
           <form method="POST" action="../Admin/slide/ubah" enctype="multipart/form-data">
          
       
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
          <input type="text" required="true" class="form-control" id="nama_produk"   name="nama_produk"> 
          </div>
          <div class="form-group has-feedback">
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
        var dsk   = $(this).data('ds');
        var igm   = $(this).data('im');
       

        $(".modal-body#modal_edit_info #id_registrasi").val(idd);             
        $(".modal-body#modal_edit_info #nama_produk").val(napr);
        $(".modal-body#modal_edit_info #deskripsi").val(dsk);
         $(".modal-body#modal_edit_info #userfile").val(igm);
         
      
       })
</script>
