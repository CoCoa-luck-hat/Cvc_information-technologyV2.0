<!-- Header Start -->
<div class="container-fluid bg-breadcrumb p-0" style="position: relative;">

    <img src="02_design/head-.png" class="w-100 bannerrr1" alt="">
</div>
<!-- Header End -->


<style>
    /*** Service Start ***/
    .service .service-item {
        border-radius: 15px;
        box-shadow: 0px 2px 15px #c1c1c1;
        transition: 0.5s;
    }

    .service .service-item:hover {

        transform: translateY(-10px);
    }

    .service .service-item .service-img {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .service .service-item .service-img img {
        transition: 0.5s;
    }

    .service .service-item:hover .service-img img {
        transform: scale(1.05);
    }

    .service .service-item .service-img::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 0;
        top: 0;
        left: 0;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        background: #2b2b2b0d;
        transition: 0.5s;
        z-index: 1;
    }

    .service .service-item:hover .service-img::after {
        height: 100%;
    }

    .service .service-item .service-img .service-icon {
        position: absolute;
        width: 70px;
        bottom: 0;
        right: 25px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        background: var(--bs-light);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.5s;
        z-index: 9;
    }

    .service .service-item .service-img .service-icon i {
        color: var(--bs-primary);
        transition: 0.5s;
    }

    .service .service-item:hover .service-img .service-icon i {
        transform: rotateX(360deg);
        color: var(--bs-white);
    }

    .service .service-item:hover .service-img .service-icon {
        bottom: 0;
        color: var(--bs-white);
        background: var(--bs-primary);
    }

    .service .service-content {
        position: relative;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        background: var(--bs-light);
    }

    .service .service-item .service-content .service-content-inner {
        position: relative;
        z-index: 9;
    }

    .service .service-item .service-content .service-content-inner .h4,
    .service .service-item .service-content .service-content-inner p {
        transition: 0.5s;
    }

    .service .service-item:hover .service-content .service-content-inner .h4,
    .service .service-item:hover .service-content .service-content-inner p {
        color: var(--bs-white);
    }

    .service .service-item:hover .service-content .service-content-inner .btn.btn-primary {
        color: var(--bs-primary);
        background: white !important;
    }

    .service .service-item:hover .service-content .service-content-inner .btn.btn-primary:hover {
        color: white;
        background: #16243d !important;
    }

    .service .service-item:hover .service-content .service-content-inner .h4:hover {
        color: var(--bs-dark);
    }

    .service .service-item .service-content::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 0;
        bottom: 0;
        left: 0;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        background: var(--bs-primary);
        transition: 0.5s;
        z-index: 1;
    }

    .service .service-item:hover .service-content::after {
        height: 100%;
    }

    /*** Service End ***/
</style>
<style>
    .portfolio-item:hover .portfolio-btn {
        opacity: 1;
    }

    .portfolio-img {
        position: relative;
        border-radius: 25px !important;
    }
</style>
<!-- Service Start -->
<div class="container-fluid service py-5 " style="
    background: #f7f7f7;
">
    <div class="container p-5 pt-0  rep0">
        <div class=" mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
            <h4 class="text-primary"></h4>
            <h1 class="display-6 mb-3 retextcenter">การแข่งขันทักษะวิชาชีพ ระดับภาค/ระดับประเทศ</h1>
            <p class="mb-0">
            </p>
        </div>
        <div class="row g-3 p-5 mb-0 pt-0 px-0 rep0 justify-content-center ">
            <div class="col-md-6 col-lg-6 col-xl-4 px-3  portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-img  overflow-hidden">
                    <img class="img-fluid" src="03_photo/3.5_ผลงานแผนก/68_แข่งขันทักษะ_ปวส.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn  btn-immg border-2 mx-1"
                            style="width: 45px; height: 45px; align-content: center;" href="03_photo/3.5_ผลงานแผนก/68_แข่งขันทักษะ_ปวส.jpg"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 px-3   portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-img  overflow-hidden">
                    <img class="img-fluid" src="03_photo/3.5_ผลงานแผนก/68_แข่งขันทักษะ_ปวส-1.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn  btn-immg border-2 mx-1"
                            style="width: 45px; height: 45px; align-content: center;" href="03_photo/3.5_ผลงานแผนก/68_แข่งขันทักษะ_ปวส-1.jpg"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 px-3   portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-img  overflow-hidden">
                    <img class="img-fluid" src="03_photo/3.5_ผลงานแผนก/68_แข่งขันทักษะ_ปวช-1.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn  btn-immg border-2 mx-1"
                            style="width: 45px; height: 45px; align-content: center;" href="03_photo/68_แข่งขันทักษะ_ปวช-1.jpg"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-5 pt-0  rep0">
        <div class="row g-3 p-5 mb-0 pt-0 px-0 rep0 justify-content-center ">
            <div class="col-md-6 col-lg-6 col-xl-4 px-3  mb-3 portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-img  overflow-hidden">
                    <img class="img-fluid" src="03_photo/3.5_ผลงานแผนก/67_แข่งขันทักษะ_ปวช.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn  btn-immg border-2 mx-1"
                            style="width: 45px; height: 45px; align-content: center;" href="03_photo/3.5_ผลงานแผนก/67_แข่งขันทักษะ_ปวช.jpg"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 px-3  mb-3 portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-img  overflow-hidden">
                    <img class="img-fluid" src="03_photo/3.5_ผลงานแผนก/67_แข่งขันทักษะ_ปวส.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn  btn-immg border-2 mx-1"
                            style="width: 45px; height: 45px; align-content: center;" href="03_photo/3.5_ผลงานแผนก/67_แข่งขันทักษะ_ปวส.jpg"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 px-3  mb-3 portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
                <div class="portfolio-img  overflow-hidden">
                    <img class="img-fluid" src="03_photo/3.5_ผลงานแผนก/66_แข่งขันทักษะ_ปวส.jpg" alt="">
                    <div class="portfolio-btn">
                        <a class="btn  btn-immg border-2 mx-1"
                            style="width: 45px; height: 45px; align-content: center;" href="03_photo/3.5_ผลงานแผนก/66_แข่งขันทักษะ_ปวส.jpg"
                            data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->