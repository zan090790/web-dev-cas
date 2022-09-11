<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<img src="../../../../img/home/img-1.jpg" class="img-fluid" alt="" style="height: 150px; width: auto; object-fit: cover; object-position: 75%;">

<div class="row text-center align-items-center" style="background-color: #EBEBEB;">
    <div class="row m-auto">
        <p class="fs-1 fw-bold">Projects</p>
    </div>
</div>

<div class="kategori">
    <p class="pilihan"><a href="">housing</a> <a href="">public</a> <a href="">pool</a></p>
</div>

<!-- Desktop -->
<div class="desktop-P">
    <div class="row align-items-center">
        <?php for ($y = 0; $y < 3; $y++) { ?>
            <div class="baris">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="kolom">
                        <div class="card-P" style="width: 370px; background-color: black; border-radius: 10px;">
                            <img src="../../../../img/home/img-1.jpg" class="rounded-3 mx-auto d-block m-2 image" alt="">
                            <div class="middle">
                                <div class="judul">Judul Proyek</div>
                                <div class="text">Lihat</div>
                            </div>
                            <!-- <ul class="list-group list-group-flush">
                                <a href="" style="text-decoration: none;">
                                    <li class="fs-6 semi-bold list-group-item">JUDUL PROJECT</li>
                                </a>
                            </ul> -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>

<!-- Mobile -->
<div class="mobile-P">
    <div class="row align-items-center">
        <?php for ($y = 0; $y < 6; $y++) { ?>
            <div class="baris">
                <?php for ($i = 0; $i < 2; $i++) { ?>
                    <div class="kolom">
                        <div class="card-P" style="width: 265px; background-color: black; border-radius: 20px;">
                            <img src="../../../../img/home/img-1.jpg" class="rounded-3 mx-auto d-block m-2 image" alt="">
                            <div class="middle">
                                <div class="judul">Judul Proyek</div>
                                <div class="text">Lihat</div>
                            </div>
                            <!-- <ul class="list-group list-group-flush">
                                <a href="" style="text-decoration: none;">
                                    <li class="fs-6 semi-bold list-group-item">JUDUL PROJECT</li>
                                </a>
                            </ul> -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>
<?= $this->endSection(); ?>