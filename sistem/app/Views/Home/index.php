<?php $this->extend('template'); ?>
            
<?php $this->section('css'); ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    
    @media only screen and (max-width: 600px) {
        .d-sm-none {
            display: none;
        }
    }

    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu button {
        display: inline-block;
        border-radius : 5px;
    }

    div.scrollmenu button:hover {
        background-color: #777;
    }
</style>
<?php $this->endSection(); ?>

<?php $this->section('content'); ?>
<div class="mb-4" style="padding-top: 110px;">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $no = 0; foreach ($banner as $loop): ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $no; ?>" <?= $no == 0 ? 'class="active"' : ''; ?>></li>
                <?php $no++; endforeach ?>
            </ol>
            <div class="carousel-inner" style="border-radius: 10px;">
                <?php $no = 1; foreach ($banner as $loop): ?>
                <div class="carousel-item <?= $no == 1 ? 'active' : ''; ?>">
                    <img class="d-block w-100" src="<?= base_url(); ?>/assets/images/banner/<?= $loop['image']; ?>" alt="First slide">
                </div>
                <?php $no++; endforeach ?>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        
        <div class="col-md-3">
            <ul class="nav nav-pills flex-column mb-3" id="pills-tab" role="tablist">
                <?php foreach ($category as $key => $value) { ?>
                    <li class="nav-item">
                        <a class="nav-link btn-tab btn-outline-primary text-left <?= $value['sort'] == 1 ? "active" : ""; ?>" id="v-tab<?= $value['sort'] ?> btn-block" id="pills-home-tab" data-toggle="pill" href="#pills-home<?= $value['sort'] . $value['sort'] ?>" role="tab" aria-controls="pills-home<?= $value['sort'] . $value['sort'] ?>" aria-selected="true"><i class="<?= $value['icon'] ?> mr-2"></i><?= $value['category'] ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <div class="col-md-9">
            <div class="tab-content" id="pills-tabContent">
                <?php foreach ($games as $game) { ?>
                    <div class="tab-pane fade show <?= $game['sort'] == 1 ? "active" : ""; ?>" id="pills-home<?= $game['sort'] . $game['sort'] ?>" role="tabpanel" aria-labelledby="pills-home<?= $game['sort'] . $game['sort'] ?>-tab">
                        <div class="row mb-3">
                            <?php foreach ($game['games'] as $loop): ?>
                                <?php if ($loop['status'] == 'On') { ?>
                                    <div class="col-md-3 col-4 mb-3">
                                        <a href="<?= base_url(); ?>/games/<?= $loop['slug']; ?>">
                                            <div class="card-product shadow">
                                                <img src="<?= base_url(); ?>/assets/images/games/<?= $loop['image']; ?>" style="border-radius: 10px" class="img-fluid" alt="" placeholder="blur">
                                                <div class="product-dsc">
                                                    <h4 class="product-title"><?= $loop['games']; ?></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php } ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php } ?>
            </div>

            
        </div>
    </div>

    <!-- display md -->
            <div class="tab-content d-sm-none .d-md-block" id="v-pills-tabContent">
                <?php foreach ($games as $game) { ?>
                <div class="tab-pane fade show <?= $game['sort'] == 1 ? "active" : ""; ?>" id="v-tab<?= $game['sort'] ?>" role="tabpanel" aria-labelledby="v-tab<?= $game['sort'] ?>-tab">
                    <div class="row mb-3">
                        <?php foreach ($game['games'] as $loop): ?>
                        <?php if ($loop['status'] == 'On'): ?>
                            <div class="col-md-3 col-4 text-center">
                                <a href="<?= base_url(); ?>/games/<?= $loop['slug']; ?>" class="text-decoration-none mb-4 d-block">
                                    <div>
                                        <img src="<?= base_url(); ?>/assets/images/games/<?= $loop['image']; ?>" alt="" class="w-100 rounded" />
                                        <a href="mobile-legends.html" class="text-white pl-4">
                                            <p style="margin-top : -100px;" class="mobile mb-0 fs-14 p-3"><?= $loop['games']; ?></p>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        <?php endif ?>
                        <?php endforeach ?>
                    </div>
                </div>
                <?php } ?>
            </div>

</div>


<!-- Modal PopUp

<div class="modal fade" id="modal-popup" tabindex="-1" aria-labelledby="modal-popupLabel" aria-modal="true" role="dialog" style="display: block;">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
        <div class="modal-content" style="background: var(--warna_5);">
            <div class="modal-body">
                <p><img width="100%" alt="" src="<?= base_url('/assets/images/modal/' . $modal_img) ?>" style="height:100%; width:100%"></p>
                <a id="promoClose" data-dismiss="modal" value="Close" href="#">×</a>
            </div>
        </div>
    </div>
</div>

End Modal PopUp -->

<?php $this->endSection(); ?>

<?php $this->section('js'); ?>
<script>
    $(window).resize(function(){
         if($(window).width() < 770){
             $('.tab').addClass('scrollmenu');
             $('.tab').removeClass('nav');
         } else {
             $('.tab').addClass('nav');
             $('.tab').removeClass('scrollmenu');
         }
    });
</script>
<?php $this->endSection(); ?>