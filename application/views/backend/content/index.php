<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $produk  ?></h3>

              <p>Daftar Produk</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-alt"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>2</h3>

              <p>Jenis Produk</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $pelanggan  ?></h3>

              <p>Pelanggan</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
           
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $pesan  ?></h3>

              <p>Pesanan</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
           
          </div>
      </div>
        <div  class="col-lg-12 col-md-12">
        <div class="box-body no-padding">
   <div class="bs-example" data-example-id="carousel-with-captions">
    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
        <li data-target="#carousel-example-captions" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
          <?php
                    $no =  1 ;
                    foreach ($utama->result() as $row) { 
                  ?>
        <div class="item active">
          <img data-src="holder.js/900x500/auto/#777:#777" alt="900x500" src="<?= base_url() ?>asset/images/slide/<?=$row->img?>" data-holder-rendered="true">
          <div class="carousel-caption">
            <h3><?php echo $row->nama ?></h3>
          
          </div>
        </div>

  <?php } ?>

   <?php
      $no =  1 ;
      foreach ($slide->result() as $row) { 
    ?>
        <div class="item">
          <img data-src="holder.js/900x500/auto/#666:#666" alt="900x500" src="<?= base_url() ?>asset/images/slide/<?=$row->img?>" data-holder-rendered="true">
          <div class="carousel-caption">
            <h3><b><?php echo $row->nama ?></b></h3>
         
          </div>
        </div>
         <?php } ?>

      <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

      <!-- /.row -->
            
        <!-- ./col -->
              