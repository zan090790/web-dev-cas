<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<img src="../../../../img/home/img-1.jpg" class="img-fluid" alt="" style="height: 150px; width: auto; object-fit: cover; object-position: 75%;">

<div class="row text-center align-items-center" style="background-color: #EBEBEB;">
    <div class="row m-auto">
        <p class="fs-1 fw-bold">Projects</p>
    </div>
</div>

<div class="row mx-auto">
    <p class="fs-5"><a href="">housing</a> - <a href="">public</a> - <a href="">pool</a></p>
</div>

<div class="row align-items-center">
    <?php for ($y = 0; $y < 3; $y++) { ?>
        <div class="row mx-auto">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="col ms-4 mb-4 bg-light text-center">
                    <div class="card" style="width: 270px;">
                        <a href="" style="text-decoration: none;">
                            <img src="../../../../img/home/img-1.jpg" class="rounded-3 mx-auto d-block m-2" alt="" style="width: 250px; height: 400px;">
                        </a>
                        <ul class="list-group list-group-flush">
                            <a href="" style="text-decoration: none;">
                                <li class="fs-6 semi-bold list-group-item">JUDUL PROJECT</li>
                            </a>
                        </ul>

                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>
<?= $this->endSection(); ?>