<?php
session_start();
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>แผนกวิชาเทคโนโลยีสารสนเทศ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="shortcut icon" href="img/Logo-it2.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="include/lib/animate/animate.min.css" />
    <link href="include/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="include/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="include/css/tailwind.css" rel="stylesheet">

    <link rel="shortcut icon" href="02_design/Logo-it2.png">
    <!--สำหรับเพิ่มไอคอนเว็บไซต์ -->

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="include/css/test.css?v=<?= time() ?>">
</head>


<body class="bg-neutral-bg text-neutral-text relative font-sans">
    <!-- Cinematic Dark Tech Preloader -->
    <?php include('include/preloader.php'); ?>

    <!-- Background Grid Pattern -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0 opacity-80" id="globalGridBg"></div>

    <div class="relative z-10 w-full">
        <!-- ส่วน เมนู -->
        <?php include('n_navbar.php'); ?>

        <!-- ส่วน แบนเนอร์ -->
        <main id="swup-container">
            <?php include('carousel.php'); ?>

            <!-- ส่วน Content -->
            <div class="bg-neutral-bg w-full relative z-10">
                <?php include('content_1.php'); ?>
                <?php include('content_2.php'); ?>
                <?php include('content_steps.php'); ?>
                <?php include('content_ribbons.php'); ?>
                <?php include('content_jop.php'); ?>
            </div>
        </main>
        
        <!-- ส่วน footer -->
        <?php include('footer.php'); ?>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="include/lib/wow/wow.min.js"></script>
    <script src="include/lib/easing/easing.min.js"></script>
    <script src="include/lib/waypoints/waypoints.min.js"></script>
    <script src="include/lib/counterup/counterup.min.js"></script>
    <script src="include/lib/lightbox/js/lightbox.min.js"></script>
    <script src="include/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="include/js/lenis.min.js"></script>
    <script src="include/js/main.js"></script>


    <script src="include/js/test.js"></script>

    <!-- GSAP & Awwwards Interactions -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="include/js/awwwards.js?v=<?= time() ?>"></script>
    <script src="include/js/preloader.js?v=<?= time() ?>"></script>



    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    if (typeof lenis !== 'undefined') {
                        lenis.scrollTo(targetElement, { offset: -50 });
                    } else {
                        targetElement.scrollIntoView({
                            behavior: 'smooth', // เลื่อนแบบสมูธ
                            block: 'center', // จัดตำแหน่งเป้าหมายให้อยู่ตรงกลาง
                        });
                    }
                }
            });
        });
    </script>

</body>

</html>