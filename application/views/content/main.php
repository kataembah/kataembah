<section id="shortcodes">
    <div class="container">
        <div id="carousel-container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php
              $no =  1 ;
              foreach ($utama->result() as $row) { 
                ?>
                    <div class="item active">
                       <img src="<?= base_url() ?>asset/images/slide/<?=$row->img?>"  alt="<?= $row->nama ?>">     
                     
                    </div>
                  <?php } ?>
                <?php
              $no =  1 ;
              foreach ($slide->result() as $row) { 
                ?>
                    <div class="item">
                       <img src="<?= base_url() ?>asset/images/slide/<?=$row->img?>"  alt="<?= $row->nama ?>">       
                       
                    </div>
                  <?php } ?>
                </div>
                <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <?php
              $no =  1 ;
              foreach ($slide->result() as $row) { 
                ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $no ?>"></li>
                
                <?php } ?>    
                </ol>
                <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div><!--/#carousel-example-generic-->
        </div><!--/#carousel-container-->
    </div>
</section>

<?php $this->load->view('resource/services'); ?>
<!--/#services-->

<?php $this->load->view('resource/tour'); ?>
<!--/#action-->


<div class="padding"></div>