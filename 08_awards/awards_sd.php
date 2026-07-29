

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb p-0" style="position: relative;">

        <img src="02_design/head-3.png" class="w-100 bannerrr1" alt="">
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
                <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-6 mb-0">สาขาเทคโนโลยีสารสนเทศ</h1>
                    </div>
                
                </div>
                <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-3 col-md-6 portfolio-item first1">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="03_photo/3.6_ผลงานนักเรียน/68_นักเรียน.jpg" alt="">
                            <div class="portfolio-btn">
                                <div class="animal-text pb-0 p-4">
                                    
                                </div>
                                <a class="btn  btn-immg border-2 mx-1"
                                    style="width: 45px; height: 45px; align-content: center;"
                                    href="03_photo/3.6_ผลงานนักเรียน/68_นักเรียน.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 portfolio-item first1">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="03_photo/3.6_ผลงานนักเรียน/67_นักเรียน.jpg" alt="">
                            <div class="portfolio-btn">
                                <div class="animal-text pb-0 p-4">
                                    
                                </div>
                                <a class="btn  btn-immg border-2 mx-1"
                                    style="width: 45px; height: 45px; align-content: center;"
                                    href="03_photo/3.6_ผลงานนักเรียน/67_นักเรียน.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                            </div>

                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 portfolio-item first1">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="03_photo/3.6_ผลงานนักเรียน/335-67-2-1.png" alt="">
                            <div class="portfolio-btn">
                                <div class="animal-text pb-0 p-4">
                                    
                                </div>
                                <a class="btn  btn-immg border-2 mx-1"
                                    style="width: 45px; height: 45px; align-content: center;"
                                    href="03_photo/3.6_ผลงานนักเรียน/335-67-2-1.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>

                            </div>

                        </div>
                    </div>


                </div>
            </div>



        </div>

    </div>
    <!-- Projects End -->



   