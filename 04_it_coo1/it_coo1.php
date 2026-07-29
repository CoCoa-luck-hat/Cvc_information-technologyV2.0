<!-- ภาพส่วนหัวหน้าเว็บ -->
<div class="container-fluid bg-breadcrumb p-0" style="position: relative;">
    <img src="02_design/page-1.jpg" class="w-100 " alt="">
</div>

<style>
    img {
        max-width: 100%;
        vertical-align: top;
    }

    .gallery {
        display: flex;
        margin: 10px auto;
        max-width: 600px;
        position: relative;
        padding-top: 66.6666666667%;
    }

    @media screen and (min-width: 600px) {
        .gallery {
            padding-top: 400px;
        }
    }

    .ob_fit {
        object-fit: cover;
    }

    .gallery__img {
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .gallery__thumb {
        padding-top: 6px;
        margin: 6px;
        display: block;
    }

    .gallery__selector {
        position: absolute;
        opacity: 0;
        visibility: hidden;
    }

    .gallery__selector:checked+.gallery__img {
        opacity: 1;
    }

    .gallery__selector:checked~.gallery__thumb>img {
        box-shadow: 0 0 0 2px #5b94ff;
    }

    .fa-check {
        color: white;
        background: #EB0000;
        padding: 6px;
        border-radius: 5px;
        font-size: 10px;
        height: 100%;
    }


    .gallery2 {
        display: flex;
        margin: 10px auto;
        max-width: 600px;
        position: relative;
        padding-top: 66.6666666667%;
    }
</style>



<div class="container-fluid bg-light about pb-5 mt-5">
    <div class="container pb-5">
        <!-- แุถวที่ 1 -->
        <div class="row g-5">

            <!-- col ที่ 1 แสดงรูปภาพ -->
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-4 h-100 ">
                    <section class="gallery">
                        <div class="gallery__item">
                            <input type="radio" id="img-1" checked name="gallery" class="gallery__selector" />
                            <img class="GGG gallery__img " src="03_photo/3.4_room/P1.jpg" alt="" />
                            <label for="img-1" class="gallery__thumb">
                                <img width="150" height="60" src="03_photo/3.4_room/P1.jpg" alt=""
                                    class="ob_fit" /></label>
                        </div>
                        <div class="gallery__item">
                            <input type="radio" id="img-2" name="gallery" class="gallery__selector" />
                            <img class="GGG gallery__img " src="03_photo/3.4_room/P2.jpg" alt="" />
                            <label for="img-2" class="gallery__thumb">
                                <img width="150" height="60" src="03_photo/3.4_room/P2.jpg" alt=""
                                    class="ob_fit" /></label>
                        </div>
                        <div class="gallery__item">
                            <input type="radio" id="img-3" name="gallery" class="gallery__selector" />
                            <img class="GGG gallery__img " src="03_photo/3.4_room/3.0.jpg" alt="" />
                            <label for="img-3" class="gallery__thumb">
                                <img width="150" height="60" src="03_photo/3.4_room/3.0.jpg" alt=""
                                    class="ob_fit" /></label>
                        </div>
                        <div class="gallery__item">
                            <input type="radio" id="img-4" name="gallery" class="gallery__selector" />
                            <img class="GGG gallery__img " src="03_photo/3.4_room/5.0.jpg" alt="" />
                            <label for="img-4" class="gallery__thumb">
                                <img width="150" height="60" src="03_photo/3.4_room/5.0.jpg" alt=""
                                    class="ob_fit" /></label>
                        </div>
                        <div class="gallery__item">
                            <input type="radio" id="img-5" name="gallery" class="gallery__selector" />
                            <img class="GGG gallery__img " src="03_photo/3.4_room/4.jpg" alt="" />
                            <label for="img-5" class="gallery__thumb">
                                <img width="150" height="60" src="03_photo/3.4_room/4.jpg" alt=""
                                    class="ob_fit" /></label>
                        </div>

                    </section>
                </div>
            </div>


            <!-- col ที่ 2 จุดเด่นหลักสูตร -->
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">

                        <div class=" pt-0">
                            
                            <h2 class="mb-3 display-5 " style="color: #cb0707;">จุดเด่นของหลักสูตร</h2>
                            <p class=" resize16px" style="color: #787878; font-size: 20px;">
                                หลักสูตร ปวช. 2567 เทคโนโลยีสารสนเทศ
                            </p>
                         
                            <div class="row mb-4">
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            เน้นทักษะปฏิบัติจริง – 80 % ลงมือทำ
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            รายวิชาที่สอดคล้องกับอาชีพ IT โดยตรง
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            โครงงานและผลงานจริง
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            เพิ่มทักษะการเขียนโปรแกรม
                                        </p>
                            
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            เพิ่มทักษะระบบเครือข่ายและอินเทอร์เน็ต
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            เพิ่มทักษะระบบคอมพิวเตอร์และซอฟต์แวร์
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            ทักษะเทคโนโลยีดิจิทัลสมัยใหม่
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class=" d-flex align-items-center">
                                        <i class="fa fa-check  recheckre2" aria-hidden="true"></i>
                                        <p class="mb-0 repfont"
                                            style="font-weight: 600;  padding-left: 10px;   font-size: 22px;">
                                            ทักษะฐานข้อมูลและระบบสารสนเทศ
                                        </p>
                                    </div>
                                </div>
                                

                            <a target="_blank" class="btn btn-primary rounded-pill py-2 px-4 mt-3"
                                style="font-size: 1.5rem;" href="01_document/Brochure 2567_Edit2_F copy.pdf">
                                ดูรายละเอียด
                                <i class="fa fa-regular fa-file-pdf" style="margin-left: 5px;"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>




