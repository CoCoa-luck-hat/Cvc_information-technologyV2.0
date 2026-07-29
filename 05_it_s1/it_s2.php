<style>
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0px solid rgba(0, 0, 0, .125);
        border-radius: 10px;
        box-shadow: 1px 2px 7px #b2b2b2;
        transition: all 0.5s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 1px 2px 7px #7f7f7f;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.2rem 2rem;
    }

    @media (min-width: 1200px) {

        /* CSS สำหรับหน้าจอโน้ตบุ๊ก */
        .recard-body {
            flex: 1 1 auto;
            padding: 1rem 1.5rem !important;
        }

        .rehcard {
            font-size: 1.45rem !important;
        }
    }

    @media (min-width: 1540px) {
        .recard-body {
            flex: 1 1 auto;
            padding: 1.2rem 2rem !important;
        }

        .rehcard {
            font-size: 1.45rem !important;
        }
    }
</style>

<div class="container-lg">
<!-- ค่าใช้จ่าย/สิทธิ์ที่ได้รับ -->
<div class="container service bg-light " style="position: relative; z-index: 9;">

    <!-- ส่วน ข้อความ -->
    <div class="text-center mx-auto pb-2 wow fadeInUp mb-3" data-wow-delay="0.2s" style="max-width: 1200px;">
        <h4 class="text-primary"> </h4>
        <div class="h2 display-4  ">
            <div class="reflex mb-2" style="color: #16243d; font-weight: 400;">
                <B class="mb-3"> ค่าใช้จ่าย/สิทธิ์ที่ได้รับ</B>
                <B class="mb-3"> ระดับ ปวส.</B>
            </div>
        </div>
    </div>

    <!-- ส่วน แถวที่ 1 -->
    <div class="row g-3 mb-0 pt-0 rep0 repCnothave justify-content-center ">

        <!-- ส่วน คอลที่ 1 -->
        <div class="col-md-6 col-lg-6 col-xl-3  mb-3 portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
            <div class="card">
                <div class="card-body recard-body" style="display: flex; flex-direction: column; justify-content: center;">
                    <h3 class="rehcard">ค่าลงทะเบียนเรียน</h3>
                    <p>ค่าแรกเข้า / ฿9,500 - ฿10,000 </p>
                    <h2 style="color: #007782;">฿4,750/เทอม</h2>
                </div>
            </div>
        </div>


        <!-- ส่วน คอลที่ 2 -->
        <div class="col-md-6 col-lg-6 col-xl-3  mb-3 portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
            <div class="card">
                <div class="card-body recard-body" style="display: flex; flex-direction: column; justify-content: center;">
                    <h3 class="rehcard">ค่าลงทะเบียนฝึกงาน</h3>
                    <p>
                        จำนวน 1 ภาคเรียน
                    </p>
                    <h2 style="color: #007782;">฿2,600/เทอม</h2>
                </div>
            </div>
        </div>

        <!-- ส่วน คอลที่ 3 -->
        <div class="col-md-6 col-lg-6 col-xl-3  mb-3 portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
            <div class="card">
                <div class="card-body recard-body" style="display: flex; flex-direction: column; justify-content: center;">
                    <h3 class="rehcard">ผ่อนจ่ายค่าเทอมได้</h3>
                    <p>
                        แบ่งเป็น 2 งวด
                    </p>
                    <h2 style="color: #007782;">ไม่มีดอกเบี้ย</h2>
                </div>
            </div>
        </div>

        <!-- ส่วน คอลที่ 4 -->
        <div class="col-md-6 col-lg-6 col-xl-3  mb-3 portfolio-item  wow fadeInUp" data-wow-delay="0.8s">
            <div class="card">
                <div class="card-body recard-body" style="display: flex; flex-direction: column; justify-content: center;">
                    <h3 class="rehcard">ประกันอุบัติเหตุ</h3>
                    <p>
                        วิริยะประกันภัย
                    </p>
                    <h2 style="color: #007782;">฿8,000/ครั้ง</h2>
                </div>
            </div>
        </div>
    </div>



</div>
</div>