<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- img carousel -->
<div id="carouselExampleCaptions" class="carousel slide" id="myCarousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../../../../img/home/img-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../../../../img/home/img-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../../../../img/home/img-3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- description - desktop view -->
<!-- <div class="desktop-view"> -->



<div class="container">
    <div class="card1">
        <p class="headline">Kami mendesign blablablablablablablablablalbal</p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Ut rutrum, dolor eu commodo mattis, mauris enim pretium tortor,
            id tempus ipsum elit rhoncus neque. Praesent et mi sed sapien finibus maximus a vel tortor.
            Nam sit amet ante blandit, congue ante ac, tristique ligula. Maecenas nec convallis quam, ac ornare est. </p>
        <button type="button" class="tombol" id="home-btn-1" style="--bs-btn-padding-y: 20px; --bs-btn-padding-x: 100px; --bs-btn-font-size: 1rem;">
            Success
        </button>

    </div>
    <div class="card2">
        <img src="../../../../img/home/img-4.jpg" class="photo" id="home-img-4" alt="">
    </div>
</div>

<div class="container">
    <div class="card3">
        <img src="../../../../img/home/img-4.jpg" class="photo" id="home-img-5" alt="">
    </div>
    <div class="card4">
        <p class="headline">Kami mendesign blablablablablablablablablalbal</p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Ut rutrum, dolor eu commodo mattis, mauris enim pretium tortor,
            id tempus ipsum elit rhoncus neque. Praesent et mi sed sapien finibus maximus a vel tortor.
            Nam sit amet ante blandit, congue ante ac, tristique ligula. Maecenas nec convallis quam, ac ornare est. </p>
        <button type="button" class="tombol" id="home-btn-2" style="--bs-btn-padding-y: 20px; --bs-btn-padding-x: 100px; --bs-btn-font-size: 1rem;">
            Success
        </button>
    </div>
</div>
</div>
</div>

<!-- description - mobile view -->
<!-- <div class="mobile-view">
    <div class="row mt-5 mx-5">
        <div class="col mt-5">
            <p class="fs-1 fw-semibold">Kami mendesign blablablablablablablablablalbal</p>
            <p class="fs-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Ut rutrum, dolor eu commodo mattis, mauris enim pretium tortor,
                id tempus ipsum elit rhoncus neque. Praesent et mi sed sapien finibus maximus a vel tortor.
                Nam sit amet ante blandit, congue ante ac, tristique ligula. Maecenas nec convallis quam, ac ornare est. </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col text-center">
            <button type="button" class="btn mt-5 text-light" id="home-btn-2" style="--bs-btn-padding-y: 20px; --bs-btn-padding-x: 100px; --bs-btn-font-size: 1rem;">
                Success
            </button>
        </div>
    </div>

    <div class="row mt-5 mx-5">
        <div class="col mt-5">
            <p class="fs-1 fw-semibold">Kami mendesign blablablablablablablablablalbal</p>
            <p class="fs-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Ut rutrum, dolor eu commodo mattis, mauris enim pretium tortor,
                id tempus ipsum elit rhoncus neque. Praesent et mi sed sapien finibus maximus a vel tortor.
                Nam sit amet ante blandit, congue ante ac, tristique ligula. Maecenas nec convallis quam, ac ornare est. </p>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col text-center">
            <button type="button" class="btn btn-success my-5 text-light" id="home-btn-2" style="--bs-btn-padding-y: 20px; --bs-btn-padding-x: 100px; --bs-btn-font-size: 1rem;">
                Success
            </button>
        </div>
    </div>

</div> -->

<?= $this->endSection(); ?>