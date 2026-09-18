<?php
define('INDEX_LOADED', true);
error_reporting(0);

// Unified Master Router
$route = trim($_GET['route'] ?? $_GET['click'] ?? $_GET['page'] ?? '', '/');

// Dynamic Base URL Engine (Supports Cloudflare & Reverse Proxies)
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    || (($_SERVER['SERVER_PORT'] ?? 80) == 443);
$protocol = $isHttps ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\');
$baseUrl = $protocol . $host . ($scriptDir ? $scriptDir : '');
$currentUrl = $baseUrl . '/' . ($route ? '?route=' . urlencode($route) : '');
$ogImageUrl = $baseUrl . '/02_design/Logo-it2.png';

// Asset versioning helper using filemtime for optimized browser caching
function asset_v($relativePath) {
    $fullPath = __DIR__ . '/' . ltrim($relativePath, '/');
    return file_exists($fullPath) ? filemtime($fullPath) : '2.0.0';
}

// Dynamic SEO & Metadata Engine
$metaTitles = [
    '' => 'แผนกวิชาเทคโนโลยีสารสนเทศ | วิทยาลัยอาชีวศึกษาเชียงราย (CVC)',
    'home' => 'แผนกวิชาเทคโนโลยีสารสนเทศ | วิทยาลัยอาชีวศึกษาเชียงราย (CVC)',
    '0_techer' => 'คณะครูและบุคลากร | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'teachers' => 'คณะครูและบุคลากร | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'c_all' => 'อาคารเรียนและห้องปฏิบัติการ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'classroom' => 'อาคารเรียนและห้องปฏิบัติการ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'graduate' => 'ทำเนียบบัณฑิตและศิษย์เก่า | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'gallery' => 'กิจกรรมและภาพบรรยากาศ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'event' => 'กิจกรรมและภาพบรรยากาศ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'it_coo1' => 'หลักสูตร ปวช. เทคโนโลยีสารสนเทศ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'pvc' => 'หลักสูตร ปวช. เทคโนโลยีสารสนเทศ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'it_s1' => 'หลักสูตร ปวส. เทคโนโลยีสารสนเทศ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'pvs_it' => 'หลักสูตร ปวส. เทคโนโลยีสารสนเทศ | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'game_s1' => 'หลักสูตร ปวส. คอมพิวเตอร์เกมและแอนิเมชัน | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
    'pvs_game' => 'หลักสูตร ปวส. คอมพิวเตอร์เกมและแอนิเมชัน | แผนกวิชาเทคโนโลยีสารสนเทศ CVC',
];

$pageTitle = $metaTitles[$route] ?? 'แผนกวิชาเทคโนโลยีสารสนเทศ | วิทยาลัยอาชีวศึกษาเชียงราย';
$pageDescription = 'หลักสูตรวิชาชีพด้านเทคโนโลยีสารสนเทศ ซอฟต์แวร์ เครือข่าย และคอมพิวเตอร์เกม วิทยาลัยอาชีวศึกษาเชียงราย มุ่งสู่อนาคตดิจิทัลระดับมืออาชีพ';
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="keywords" content="เทคโนโลยีสารสนเทศ, อาชีวะเชียงราย, CVC, IT CVC, ปวช., ปวส., คอมพิวเตอร์เกม, เชียงราย">
    <meta name="author" content="แผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยอาชีวศึกษาเชียงราย">
    <meta name="theme-color" content="#dc2626">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= htmlspecialchars($currentUrl) ?>">

    <!-- Open Graph / Social Media Preview -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($currentUrl) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImageUrl) ?>">
    <meta property="og:site_name" content="Information Technology CVC">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($ogImageUrl) ?>">

    <!-- Structured Data (JSON-LD) for Rich Snippets -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EducationalOrganization",
      "name": "แผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยอาชีวศึกษาเชียงราย",
      "alternateName": "Information Technology Department CVC",
      "url": "<?= htmlspecialchars($baseUrl) ?>",
      "logo": "<?= htmlspecialchars($ogImageUrl) ?>",
      "description": "<?= htmlspecialchars($pageDescription) ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "เมืองเชียงราย",
        "addressRegion": "เชียงราย",
        "addressCountry": "TH"
      },
      "sameAs": [
        "https://cvc.ac.th/webcvc/show_it",
        "https://admission.vec.go.th/"
      ]
    }
    </script>

    <!-- PWA & Web App Icons -->
    <link rel="manifest" href="./manifest.json">
    <link rel="icon" type="image/png" href="02_design/Logo-it2.png">
    <link rel="apple-touch-icon" href="02_design/Logo-it2.png">

    <!-- Preload Critical Assets (LCP Optimization) -->
    <link rel="preload" as="image" href="02_design/banner-1.webp" fetchpriority="high">

    <!-- Google Web Fonts (Optimized essential weights for blazing-fast mobile rendering) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet (High-reliability CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="include/css/tailwind.css?v=<?= asset_v('include/css/tailwind.css') ?>" rel="stylesheet">

    <!-- GSAP Core & Plugins (Local High-Speed Vendor Bundle) -->
    <script src="include/js/vendor/gsap.min.js?v=<?= asset_v('include/js/vendor/gsap.min.js') ?>"></script>
    <script src="include/js/vendor/ScrollTrigger.min.js?v=<?= asset_v('include/js/vendor/ScrollTrigger.min.js') ?>"></script>
    <script src="include/js/vendor/Observer.min.js?v=<?= asset_v('include/js/vendor/Observer.min.js') ?>"></script>
    <script>
        if (typeof gsap !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger, Observer);
            if (typeof ScrollTrigger !== 'undefined') {
                ScrollTrigger.config({
                    ignoreMobileResize: true,
                    autoRefreshEvents: "visibilitychange,DOMContentLoaded,load"
                });
            }
        }
    </script>

    <!-- Custom Stylesheet with Smart Caching -->
    <link rel="stylesheet" href="include/css/test.css?v=<?= asset_v('include/css/test.css') ?>">

    <!-- Subpage Module Stylesheets (Pre-cached for instant 0ms FOUC-free PJAX transitions) -->
    <link rel="stylesheet" href="include/css/modules/faculty.css?v=<?= asset_v('include/css/modules/faculty.css') ?>">
    <link rel="stylesheet" href="include/css/modules/classroom.css?v=<?= asset_v('include/css/modules/classroom.css') ?>">
    <link rel="stylesheet" href="include/css/modules/graduate.css?v=<?= asset_v('include/css/modules/graduate.css') ?>">
    <link rel="stylesheet" href="include/css/modules/gallery.css?v=<?= asset_v('include/css/modules/gallery.css') ?>">
</head>


<body class="bg-neutral-bg text-neutral-text relative font-sans overflow-x-hidden">
    <!-- Fast Network-Adaptive PJAX Top Loading Indicator -->
    <div id="page-progress-bar" style="position: fixed; top: 0; left: 0; height: 3px; width: 0%; background: #dc2626; z-index: 9999999; transition: width 0.2s cubic-bezier(0.1, 0.9, 0.2, 1), opacity 0.3s ease; pointer-events: none; opacity: 0; box-shadow: 0 0 10px #dc2626, 0 0 5px #ef4444;"></div>

    <!-- Cinematic Dark Tech Preloader -->
    <?php include('include/preloader.php'); ?>

    <!-- Background Grid Pattern -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0 opacity-80" id="globalGridBg"></div>

    <div class="relative z-10 w-full">
        <!-- ส่วน เมนู -->
        <?php include('components/n_navbar.php'); ?>

        <!-- Dynamic Main Content Section -->
        <main id="swup-container">
            <?php
            switch ($route) {
                // 1. หลักสูตร ปวช.
                case 'it_coo1':
                case 'pvc':
                    include('04_it_coo1/it_coo1.php');
                    include('04_it_coo1/it_coo2.php');
                    include('04_it_coo1/it_coo3.php');
                    include('04_it_coo1/it_coo4.php');
                    include('04_it_coo1/it_coo5.php');
                    break;

                // 2. หลักสูตร ปวส. สาขาเทคโนโลยีสารสนเทศ
                case 'it_s1':
                case 'pvs_it':
                case 'pvs':
                    include('05_it_s1/it_s1.php');
                    include('05_it_s1/it_s2.php');
                    include('05_it_s1/it_s3.php');
                    include('05_it_s1/it_s4.php');
                    include('05_it_s1/it_s5.php');
                    break;

                // 2.1 หลักสูตร ปวส. สาขาคอมพิวเตอร์เกมและแอนิเมชัน
                case 'game_s1':
                case 'pvs_game':
                case 'game':
                case 'games':
                    include('05_game_s1/game_s1.php');
                    include('05_game_s1/game_s2.php');
                    include('05_game_s1/game_s3.php');
                    include('05_game_s1/game_s4.php');
                    include('05_game_s1/game_s5.php');
                    break;

                // 3. คณะครูผู้สอน (Unified 100vh Faculty Interactive Stage)
                case '0_techer':
                case 'teachers':
                case 'teacher':
                case '1_thawatchai':
                case '2_piyamat':
                case '3_plaopilart':
                case '4_rodsathon':
                case '5_teerapat':
                case '6_teem':
                case '7_jam':
                    include('06_techer/0_techer.php');
                    break;

                // 4. แนะนำอาคารเรียน & ห้องปฏิบัติการ
                case 'c_all':
                case 'c_241':
                case 'c_242':
                case 'c_653':
                case 'c_654':
                case 'classroom':
                case 'classrooms':
                    include('07_classroom/c_all.php');
                    break;

                // 5. กิจกรรมภาคเรียน / ภาพบรรยากาศ
                case 'event':
                case 'events':
                case 'gallery':
                    include('09_event/gallery.php');
                    break;

                // 6. ทำเนียบบัณฑิต & ผลงาน
                case 'graduate':
                case 'graduates':
                case 'awards':
                    include('08_awards/graduate.php');
                    break;

                // 0. Default Homepage
                case '':
                case 'home':
                default:
                    include('00_home/carousel.php');
                    echo '<div class="bg-neutral-bg w-full relative z-10">';
                    include('00_home/content_1.php');
                    include('00_home/content_2.php');
                    include('00_home/content_steps.php');
                    include('00_home/content_ribbons.php');
                    include('00_home/content_jop.php');
                    echo '</div>';
                    break;
            }
            ?>
        </main>
        
        <!-- ส่วน footer -->
        <?php include('components/footer.php'); ?>
    </div>

    <!-- Core JavaScript Libraries (Local High-Speed Vendor Bundle) -->
    <script src="include/js/vendor/jquery.min.js?v=<?= asset_v('include/js/vendor/jquery.min.js') ?>"></script>
    <script src="include/js/vendor/bootstrap.bundle.min.js?v=<?= asset_v('include/js/vendor/bootstrap.bundle.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="include/js/lenis.min.js?v=<?= asset_v('include/js/lenis.min.js') ?>"></script>
    <script src="include/js/main.js?v=<?= asset_v('include/js/main.js') ?>"></script>
    <script src="include/js/test.js?v=<?= asset_v('include/js/test.js') ?>"></script>
    <!-- Subpage Interactive Modules -->
    <script src="include/js/modules/faculty.js?v=<?= asset_v('include/js/modules/faculty.js') ?>"></script>
    <script src="include/js/modules/classroom.js?v=<?= asset_v('include/js/modules/classroom.js') ?>"></script>
    <script src="include/js/modules/graduate.js?v=<?= asset_v('include/js/modules/graduate.js') ?>"></script>
    <script src="include/js/modules/gallery.js?v=<?= asset_v('include/js/modules/gallery.js') ?>"></script>

    <!-- GSAP & Awwwards Page Transitions and Interactions -->
    <script src="include/js/awwwards.js?v=<?= asset_v('include/js/awwwards.js') ?>"></script>

    <!-- Preloader Engine -->
    <script src="include/js/preloader.js?v=<?= asset_v('include/js/preloader.js') ?>"></script>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                if (targetElement) {
                    if (typeof window.lenis?.scrollTo === 'function') {
                        window.lenis.scrollTo(targetElement, { offset: -50 });
                    } else {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center',
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>