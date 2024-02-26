
<div class="main-content">
      <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="<?php echo base_url(); ?>assets/images/slider3.jpg">
        <div class="container pt-120 pb-120">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <h2 class="title text-white"><?=$activeMenu;?></h2>
                <ol class="breadcrumb text-center text-black mt-10">
                  <li><a href="#">Home</a></li>
                  <!-- <li><a href="#">Pages</a></li> -->
                  <li class="active text-gray-silver">Quality Initiatives</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
       <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
          <div class="row">
            <div class="col-md-8 pull-right flip sm-pull-none">
              <div class="row mt-10">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-sm-20 p-20 pt-0 wow fadeInUp" data-wow-duration="1s"
                  data-wow-delay="0.5s">
                  <h3 class="line-bottom mt-0"> <span class="text-theme-colored">
                     <?=$activeMenu;?></span></h3>
                     
                    
                     <table class="table table-striped">

<tbody>
  <?php
  $documents = $this->admin_model->getDetailsbyfieldSort('13', 'naac_id','order','asc', 'naac_files')->result();

  foreach ($documents as $docs) { ?>
    <tr>

      <td><?= $docs->order; ?></td>
      <td><?= $docs->title; ?></td>

      <td> <?php echo anchor('home/Initiative/' . $docs->id, '<i class="fa fa-download"></i> View Here', 'class="btn btn-warning btn-sm" target="_blank"'); ?></td>
    </tr>
  <?php } ?>
</tbody>
</table>
                   
                
                </div>


              </div>

            </div>
            <div class="col-md-4">
          <?php
          $sideBar = sideBar($mainMenu, $parentMenu, $activeMenu);
          print_r($sideBar);
          ?>


        </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->