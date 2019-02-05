   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
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
                  <th><center>Id Pelanggan</center></th>
                  <th><center>Nama Pelanggan</center></th>
                  <th> <center>Jenis Kelamin</center> </th>
                   <th> <center>Email</center> </th>
                  <th> <center>No Hp</center> </th>
                  <th> <center>Alamat</center> </th>
                   
                </tr>
                </thead>
                <tbody>
                   <?php
              $no =  1 ;
              foreach ($datakks->result() as $row) { 
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
          <!-- /.box -->
        </div>
        
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  
  