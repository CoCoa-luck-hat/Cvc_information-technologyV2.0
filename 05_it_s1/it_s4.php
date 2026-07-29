<style>
    img {
        max-width: 100%;
        vertical-align: top;
    }

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
<div class="container-fluid feature  py-5 pt-5 px-lg-5" style="position: relative;">
    <div class="container-fluid p-5  repnott remb0" style="margin-bottom: 50px;position: relative; z-index: 5;">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"></h4>
            <h1 class="display-4 mb-4">โปรแกรมที่ใช้เรียนเบื้องต้น</h1>
            <p class="mb-0">
            </p>
        </div>

        <div class="row g-4 custom-grid">
            <div class="col pb-0 p-5 wow  fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem p-3">
                    <div class="iimg">
                        <img src="03_photo/icon/postgreSQL.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 w-100"
                    style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/XD.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/ae.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/node_js.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/javascript.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col pb-0 p-5 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/Clip Studio.png" alt="">
                    </div>
                </div>
            </div>


            <!--  -->
            <div class="col   reposimI wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem p-3">
                    <div class="iimg">
                        <img src="03_photo/icon/disco.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 w-100"
                    style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/angular.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/flutter.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/react.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/Unity_Technologies_logo.svg.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col p-5 pt-0 wow fadeInUp repnothave" data-wow-delay="0.2s">
                <div class="hoitem h-100 p-3" style="display: flex; justify-content: center; align-items: center;">
                    <div class="iimg">
                        <img src="03_photo/icon/vuejs-online-editor-compiler.original.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>