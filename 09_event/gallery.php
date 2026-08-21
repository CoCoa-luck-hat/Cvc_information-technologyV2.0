<?php
// Master Activity Journal Gallery - Information Technology Department (CVC)
// Ultra-Premium Visual-First Dynamic Multi-Column Flex Masonry with Load More
$targetCat = isset($_GET['target']) ? trim($_GET['target']) : '';

// Curated Activity Photo Database (หมวด กิจกรรมการเรียนรู้)
$eventItems = [
    [ 
        "src" => "03_photo/3.8_ภาพกิจกรรม/66-ปวช3-1.jpg", 
        "category" => "academic", 
        "catLabel" => "กิจกรรมครู และนักเรียน", 
        "title" => "กิจกรรมแลกของขวัญวันปีใหม่", 
        "caption" => "กิจกรรมแลกของขวัญวันปีใหม่ เพื่อสร้างความสัมพันธ์อันดีระหว่างครูและนักเรียน" 
    ],
    [ 
        "src" => "03_photo/3.8_ภาพกิจกรรม/66-ปวช3-2.jpg", 
        "category" => "academic", 
        "catLabel" => "กิจกรรมครู และนักเรียน", 
        "title" => "กิจกรรมแลกของขวัญวันปีใหม่", 
        "caption" => "กิจกรรมแลกของขวัญวันปีใหม่ เพื่อสร้างความสัมพันธ์อันดีระหว่างครูและนักเรียน" 
    ],
    [ 
        "src" => "03_photo/3.8_ภาพกิจกรรม/66-ปวช3-3.jpg", 
        "category" => "academic", 
        "catLabel" => "กิจกรรมนักเรียน", 
        "title" => "ตั้งบูธผลงาน", 
        "caption" => "กิจกรรมตั้งบูธผลงาน" 
    ],
    [ 
        "src" => "03_photo/3.8_ภาพกิจกรรม/66-ปวช3-4.jpg", 
        "category" => "academic", 
        "catLabel" => "กิจกรรมนักเรียน", 
        "title" => "ตั้งบูธผลงาน", 
        "caption" => "กิจกรรมตั้งบูธผลงาน" 
    ]
];

$totalEvents = count($eventItems);
$initialLimit = 12;
?>

<!-- Modular Stylesheet -->
<link rel="stylesheet" href="include/css/modules/gallery.css?v=<?= time() ?>">

<!-- MAIN EVENT ACTIVITY JOURNAL COMPONENT -->
<section id="evt-activity-journal">
    <!-- Blueprint Atmospheric Grid -->
    <div class="evt-blueprint-grid"></div>
    <div class="evt-ambient-glow"></div>

    <div class="evt-container">
        <!-- 1. Hero Header Section -->
        <header class="evt-hero-header">
            <h1 class="evt-hero-title">
                ภาพกิจกรรมครู <span class="evt-title-crimson">และนักเรียน</span>
            </h1>

            <p class="evt-hero-desc">
                ภาพบรรยากาศภาพกิจกรรมครูและนักเรียนแผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยอาชีวศึกษาเชียงราย
            </p>
        </header>

        <!-- 2. Dynamic Multi-Column Flex Masonry Grid -->
        <div class="evt-masonry-wrapper">
            <div class="evt-masonry-grid" id="evt-masonry-grid">
                <div class="evt-masonry-col" id="evt-col-0"></div>
                <div class="evt-masonry-col" id="evt-col-1"></div>
                <div class="evt-masonry-col" id="evt-col-2"></div>
            </div>
        </div>

        <!-- 3. Load More Button Container -->
        <div class="evt-load-more-wrap" id="evt-load-more-wrap" style="display: none;">
            <button type="button" class="evt-btn-load-more" id="evt-btn-load-more">
                <span>ดูภาพกิจกรรมเพิ่มเติม</span>
                <span id="evt-load-count-badge" style="font-size: 12px; padding: 2px 8px; background: rgba(220, 38, 38, 0.1); border-radius: 9999px;">+6</span>
                <i class="fas fa-arrow-down"></i>
            </button>
        </div>
    </div>
</section>

<!-- 4. Cinematic Ultra-Minimal Lightbox Modal -->
<div id="evt-lightbox-modal" role="dialog" aria-modal="true" aria-label="ภาพกิจกรรมขนาดใหญ่">
    <!-- Top Bar Navigation Controls -->
    <div class="evt-lb-top-bar">
        <div class="evt-lb-left-brand">
            <span class="evt-lb-badge" id="evt-lb-badge-cat">ภาพกิจกรรม CVC IT</span>
        </div>
        <div class="evt-lb-top-right">
            <span class="evt-lb-counter-pill" id="evt-lb-counter">1 / <?= $totalEvents ?></span>
            <button type="button" class="evt-lb-close-btn" id="evt-btn-close-lb" aria-label="ปิด Modal">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <!-- Main Lightbox Stage Area -->
    <div class="evt-lb-stage" id="evt-lb-stage">
        <button type="button" class="evt-lb-nav-btn evt-lb-prev" id="evt-btn-prev-lb" aria-label="ภาพก่อนหน้า">
            <i class="fas fa-chevron-left"></i>
        </button>

        <div class="evt-lb-img-wrap" id="evt-lb-img-wrap">
            <img src="" alt="" class="evt-lb-main-img" id="evt-lb-main-img">
            <div class="evt-lb-caption-bar">
                <h3 class="evt-lb-caption-title" id="evt-lb-title"></h3>
                <p class="evt-lb-caption-text" id="evt-lb-caption"></p>
            </div>
        </div>

        <button type="button" class="evt-lb-nav-btn evt-lb-next" id="evt-btn-next-lb" aria-label="ภาพถัดไป">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</div>

<!-- Pass PHP Event Data & Load Modular Engine -->
<script>
    window.__EVENT_ITEMS__ = <?= json_encode($eventItems, JSON_UNESCAPED_UNICODE) ?>;
</script>
<script src="include/js/modules/gallery.js?v=<?= time() ?>"></script>