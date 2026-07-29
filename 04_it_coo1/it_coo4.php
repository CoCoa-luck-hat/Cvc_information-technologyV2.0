<style>
    .hoblack {
        transition: 0.5s;
    }

    .hoitem {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
    }

    .hoitem img {
        transition: 0.5s;
        z-index: 2;
        position: relative;
    }

    .hoitem:hover img {
        transform: scale(1.1);
    }

    .hoitem::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 0;
        top: 0;
        left: 0;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
        background: #0000000d;
        transition: height 0.5s ease;
        z-index: 1;
    }

    .hoitem:hover::after {
        height: 100%;
    }

    .custom-grid .col {
        flex: 0 0 calc(100% / 6);
        /* แบ่งความกว้างเป็น 5 คอลัมน์ */
        max-width: calc(100% / 6);
    }

    @media (max-width: 768px) {
        .custom-grid .col {
            flex: 0 0 50%;
            /* สำหรับหน้าจอเล็ก ให้เป็น 2 คอลัมน์ */
            max-width: 33.333333333333%;
        }
    }
</style>

<div class="container-fluid feature py-5 pt-0 px-lg-5" style="position: relative;">
    <div class="row">
        <!-- ส่วน ข้อความ -->
        <div class="text-center mx-auto pb-2 wow fadeInUp mb-3" data-wow-delay="0.2s" style="max-width: 1200px;">
            <h4 class="text-primary"> </h4>
            <div class="h2 display-4  ">
                <div class="reflex mb-2" style="color: #16243d; font-weight: 400;">
                    <B class="mb-3"> โปรแกรมที่ใช้เรียนเบื้องต้น</B>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 repnott pt-0 remb0"
        style="margin-bottom: 50px;position: relative; z-index: 5;">


        <div class="row g-4 custom-grid">
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem p-3">
                    <div class="iimg">
                        <img src="03_photo/icon/vs.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 w-100"
                    style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/vmware.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/figma.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/linux.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/ando.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/python.png" alt="">
                    </div>
                </div>
            </div>


            <!--  -->
            <div class="col   reposimI wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem p-3">
                    <div class="iimg">
                        <img src="03_photo/icon/bootstrap5.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 w-100"
                    style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/Power BI.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/php.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/GitHub.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/Docker.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/ภาษาC.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>