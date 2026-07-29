<!-- Header Start -->
<div class="container-fluid bg-breadcrumb p-0" style="position: relative;">
    <img src="02_design/head-4.png" class="w-100" alt="">
</div>
<!-- Header End -->
<style>
    /*** Animal ***/
    .animal-item {
        position: relative;
        display: block;
    }

    .animal-item .animal-text {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, .7);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding-bottom: 100px !important;
        opacity: 0;
        transition: .5s;
    }

    .animal-item:hover .animal-text {
        opacity: 1;
        padding-bottom: 20px !important;
    }

    .portfolio-btn {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        background: rgba(47, 47, 47, 0.466);
        display: flex;
        align-items: flex-end !important;
        padding: 15px !important;
        padding-bottom: 100px !important;
        opacity: 0;
        transition: .5s;
        justify-content: space-between;

    }

    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        /*Without this, clicking will make it sticky*/
        pointer-events: none;
    }

    .dropbtn {
        font-size: 16px;
        border: none;
        font-weight: 500;
        background: #ffffff00;
        /* ใช้สีพื้นหลังจากตัวแปร */
        transition: 0.5s;
        color: var(--dark);
    }

    .dropdown12 {
        position: relative;
    }

    .dropdown12-content {
        position: absolute;
        visibility: hidden;
        top: 100%;
        transform: rotateX(-75deg);
        transform-origin: 0% 0%;
        border: 0;
        border-radius: 10px;
        transition: 0.5s;
        opacity: 0;
        background-color: var(--bs-light);
        /* ใช้สีพื้นหลังจากตัวแปร */
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        min-width: 160px;
        z-index: 1;
    }



    .dropdown12:hover .dropdown12-content {
        transform: rotateX(0deg);
        visibility: visible;
        margin-top: 3px;
        transition: 0.5s;
        opacity: 1;
    }

    .dropdown-item {
        border: none !important;
    }

    .dropdown-item:hover {
        background: #d90707;
        color: white !important;
    }


    #portfolio-flters li.active {
        color: var(--primary);
        border-color: var(--primary);
    }

    .dropdown-item.active {
        background: #ff8888;
        color: white !important;
    }
</style>

<!-- Projects Start -->
<div class="bg-light" style="position: relative;">
    <div class="container-xxl py-6 pt-5 " id="project" style="padding-bottom: 150px;">
        <div class="container">
            <?php include ('navbar.php'); ?>


            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">

            

                 <!-- ห้อง 242 -->
                <div class="col-lg-3 col-md-6 portfolio-item first1">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="03_photo/3.4_room/1.jpg" alt="">
                        <div class="portfolio-btn">
                            <div class="animal-text pb-0 p-4">
                                <p class="text-white small text-uppercase mb-0">อาคาร 2</p>
                                <h5 class="text-white mb-0">ห้อง 242</h5>
                            </div>
                            <a class="btn  btn-immg border-2 mx-1"
                                style="width: 45px; height: 45px; align-content: center;"
                                href="03_photo/3.4_room/1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 portfolio-item first1">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="03_photo/3.4_room/3.0.jpg" alt="">
                        <div class="portfolio-btn">
                            <div class="animal-text pb-0 p-4">
                                <p class="text-white small text-uppercase mb-0">อาคาร 2</p>
                                <h5 class="text-white mb-0">ห้อง 242</h5>
                            </div>
                            <a class="btn  btn-immg border-2 mx-1"
                                style="width: 45px; height: 45px; align-content: center;"
                                href="03_photo/3.4_room/3.0.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 portfolio-item first1">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="03_photo/3.4_room/4.jpg" alt="">
                        <div class="portfolio-btn">
                            <div class="animal-text pb-0 p-4">
                                <p class="text-white small text-uppercase mb-0">อาคาร 2</p>
                                <h5 class="text-white mb-0">ห้อง 242</h5>
                            </div>
                            <a class="btn  btn-immg border-2 mx-1"
                                style="width: 45px; height: 45px; align-content: center;"
                                href="03_photo/3.4_room/4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 portfolio-item first1">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="03_photo/3.4_room/5.1.jpg" alt="">
                        <div class="portfolio-btn">
                            <div class="animal-text pb-0 p-4">
                                <p class="text-white small text-uppercase mb-0">อาคาร 2</p>
                                <h5 class="text-white mb-0">ห้อง 242</h5>
                            </div>
                            <a class="btn  btn-immg border-2 mx-1"
                                style="width: 45px; height: 45px; align-content: center;"
                                href="03_photo/3.4_room/5.1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 portfolio-item first1">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="03_photo/3.4_room/5.2.jpg" alt="">
                        <div class="portfolio-btn">
                            <div class="animal-text pb-0 p-4">
                                <p class="text-white small text-uppercase mb-0">อาคาร 2</p>
                                <h5 class="text-white mb-0">ห้อง 242</h5>
                            </div>
                            <a class="btn  btn-immg border-2 mx-1"
                                style="width: 45px; height: 45px; align-content: center;"
                                href="03_photo/3.4_room/5.2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                        </div>

                    </div>
                </div>

               

              
          
           
             
            
            </div>
        </div>



    </div>

</div>
<!-- Projects End -->