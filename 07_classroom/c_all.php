<?php
// Master Architecture Journal Gallery - Information Technology Department (CVC)
// Ultra-Premium Visual-First Dynamic Multi-Column Flex Masonry with Load More & Mobile Scroll Arrows
$targetRoom = isset($_GET['target']) ? trim($_GET['target']) : '';
if (empty($targetRoom) && isset($_GET['click'])) {
    $click = trim($_GET['click']);
    if (in_array($click, ['c_241', 'c_242', 'c_653', 'c_654'])) {
        $targetRoom = str_replace('c_', '', $click);
    }
}

// Curated Architecture Photo Database
$galleryItems = [
    // ROOM 241 (Building 2, Floor 4)
    [ "src" => "03_photo/3.4_room/5.3.jpg", "room" => "241", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 241", "caption" => "มุมมองกว้างห้องปฏิบัติการระบบเครือข่าย & ฮาร์ดแวร์ 241" ],
    [ "src" => "03_photo/3.4_room/5.0.jpg", "room" => "241", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 241", "caption" => "โต๊ะปฏิบัติการระบบเครือข่ายและเครื่องคอมพิวเตอร์" ],
    [ "src" => "03_photo/3.4_room/5.1.jpg", "room" => "241", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 241", "caption" => "สถานีทดลองและฝึกปฏิบัติการติดตั้งระบบ" ],
    [ "src" => "03_photo/3.4_room/5.2.jpg", "room" => "241", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 241", "caption" => "มุมจอภาพแสดงผลและอุปกรณ์เซิร์ฟเวอร์" ],
    [ "src" => "03_photo/3.4_room/5.4.jpg", "room" => "241", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 241", "caption" => "บรรยากาศห้องเรียนและการจัดวางพื้นที่การสอน" ],
    [ "src" => "03_photo/3.4_room/room-241-2.jpg", "room" => "241", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 241", "caption" => "ภาพรวมอุปกรณ์ฮาร์ดแวร์และการเชื่อมต่อระบบ" ],
    [ "src" => "03_photo/3.4_room/อาคาร2.jpg", "room" => "241", "building" => "b2", "buildingLabel" => "อาคาร 2", "roomLabel" => "อาคารเฉลิมพระเกียรติ", "caption" => "ทัศนียภาพภายนอก อาคาร 2 (อาคารเฉลิมพระเกียรติ)" ],

    // ROOM 242 (Building 2, Floor 4)
    [ "src" => "03_photo/3.4_room/1.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "บรรยากาศการเรียนพัฒนาซอฟต์แวร์และเขียนโค้ด" ],
    [ "src" => "03_photo/3.4_room/2.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "สถานีคอมพิวเตอร์สำหรับฝึกปฏิบัติการโปรแกรมมิ่ง" ],
    [ "src" => "03_photo/3.4_room/3.0.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "หน้าจอการพัฒนาเว็บแอปพลิเคชันและทดสอบระบบ" ],
    [ "src" => "03_photo/3.4_room/4.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "การพัฒนาโปรเจกต์โครงงานซอฟต์แวร์ของนักศึกษา" ],
    [ "src" => "03_photo/3.4_room/7.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "มุมมองโต๊ะผู้เรียนพร้อมจอคู่สำหรับการเขียนโค้ด" ],
    [ "src" => "03_photo/3.4_room/8.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "บรรยากาศการเรียนรู้และการทำกิจกรรมกลุ่มร่วมกัน" ],
    [ "src" => "03_photo/3.4_room/9.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "การทดสอบและ Deploy แอปพลิเคชัน" ],
    [ "src" => "03_photo/3.4_room/10.jpg", "room" => "242", "building" => "b2", "buildingLabel" => "อาคาร 2 (ชั้น 4)", "roomLabel" => "ห้อง 242", "caption" => "มุมควบคุมสื่อการสอนของอาจารย์ผู้สอน" ],

    // ROOM 653 (Building 6, Floor 5)
    [ "src" => "03_photo/3.4_room/653-1.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "สตูดิโอมัลติมีเดีย, 3D แอนิเมชัน & ออกแบบเกม" ],
    [ "src" => "03_photo/3.4_room/653-2.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "สถานีคอมพิวเตอร์กราฟิกประสิทธิภาพสูง Dedicated GPU" ],
    [ "src" => "03_photo/3.4_room/653-3.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "มุมตัดต่อวิดีโอความละเอียดสูงและทำแอนิเมชัน" ],
    [ "src" => "03_photo/3.4_room/653-4.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "การออกแบบโมเดล 3 มิติและจัดแสงด้วย Blender" ],
    [ "src" => "03_photo/3.4_room/653-5.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "อุปกรณ์และจอภาพแสดงผลสีกราฟิกมาตรฐาน" ],
    [ "src" => "03_photo/3.4_room/653-6.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "การเรียนรู้การพัฒนาเกมด้วย Unity Engine" ],
    [ "src" => "03_photo/3.4_room/653-7.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "การเรนเดอร์ผลงานสร้างสรรค์ 3D Animation" ],
    [ "src" => "03_photo/3.4_room/653-8.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "ภาพรวมห้องปฏิบัติการมัลติมีเดีย 653" ],
    [ "src" => "03_photo/3.4_room/room-653-1.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "โต๊ะทำงานแบบสตูดิโอสร้างสรรค์ดิจิทัลมีเดีย" ],
    [ "src" => "03_photo/3.4_room/room-653-2.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 653", "caption" => "มุมมองกว้างสตูดิโอห้อง 653" ],
    [ "src" => "03_photo/3.4_room/อาคาร6.jpg", "room" => "653", "building" => "b6", "buildingLabel" => "อาคาร 6", "roomLabel" => "อาคารปฏิบัติการวิชาชีพ", "caption" => "ทัศนียภาพภายนอก อาคาร 6 (อาคารปฏิบัติการวิชาชีพ)" ],

    // ROOM 654 (Building 6, Floor 5)
    [ "src" => "03_photo/3.4_room/IMG_2958.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "ห้องปฏิบัติการ AI, Data Science & นวัตกรรมดิจิทัล 654" ],
    [ "src" => "03_photo/3.4_room/IMG_2963.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "สถานีประมวลผลข้อมูลและจำลองโมเดล Machine Learning" ],
    [ "src" => "03_photo/3.4_room/IMG_2965.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "จอภาพและเครื่องมือวิเคราะห์ข้อมูลเชิงลึก (Data Analytics)" ],
    [ "src" => "03_photo/3.4_room/IMG_2966.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "มุมทำงานกลุ่มและระดมความคิดสร้างสรรค์นวัตกรรม" ],
    [ "src" => "03_photo/3.4_room/IMG_2968.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "อุปกรณ์ทดสอบโมเดล AI และชุดเซนเซอร์" ],
    [ "src" => "03_photo/3.4_room/IMG_2969.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "โต๊ะปฏิบัติการนวัตกรรมเทคโนโลยีสารสนเทศ" ],
    [ "src" => "03_photo/3.4_room/IMG_2973.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "การเรียนรู้ Deep Learning และ Computer Vision" ],
    [ "src" => "03_photo/3.4_room/IMG_2978.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "บรรยากาศห้องปฏิบัติการนวัตกรรม 654" ],
    [ "src" => "03_photo/3.4_room/IMG_2990.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "สถานีออกแบบ UI/UX และพัฒนา Prototype" ],
    [ "src" => "03_photo/3.4_room/IMG_2992.jpg", "room" => "654", "building" => "b6", "buildingLabel" => "อาคาร 6 (ชั้น 5)", "roomLabel" => "ห้อง 654", "caption" => "มุมมองสตูดิโอดิจิทัลอินโนเวชัน 654" ]
];

$totalCount = count($galleryItems);
$initialLimit = 12;
?>

<!-- Modular Stylesheet -->
<link rel="stylesheet" href="include/css/modules/classroom.css?v=<?= time() ?>">

<!-- MAIN ARCHITECTURAL JOURNAL STAGE -->
<section id="maj-architecture-journal">
    
    <!-- Atmospheric Blueprint Grid & Ambient Lights -->
    <div class="maj-blueprint-grid"></div>
    <div class="maj-ambient-glow"></div>

    <div class="maj-container">
        
        <!-- 1. MINIMAL ELEGANT HEADER -->
        <header class="maj-header-wrap">
            <h1 class="maj-main-title">
                อาคารเรียน &amp; <span class="maj-crimson-text">ห้องปฏิบัติการ</span>
            </h1>
            <p class="maj-sub-desc">
                ทัศนียภาพและบรรยากาศห้องปฏิบัติการเทคโนโลยีสารสนเทศ วิทยาลัยอาชีวศึกษาเชียงราย
            </p>
        </header>

        <!-- 2. SLEEK FLOATING FILTER CAPSULE BAR WITH ARROW BUTTONS -->
        <div class="maj-filter-bar-container">
            <div class="maj-filter-scroll-wrapper">
                <button class="maj-filter-arrow maj-filter-arrow-left" id="maj-filter-prev" type="button" aria-label="เลื่อนแถบซ้าย">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <nav class="maj-filter-bar" id="maj-filter-bar" aria-label="หมวดหมู่อาคารเรียน">
                    <button class="maj-filter-item-btn active" data-filter="all" type="button">
                        <span>ทั้งหมด</span>
                        <span class="maj-count-badge" id="maj-total-count"><?= $totalCount ?></span>
                    </button>
                    <button class="maj-filter-item-btn" data-filter="b2" type="button">
                        <span>อาคาร 2</span>
                    </button>
                    <button class="maj-filter-item-btn" data-filter="b6" type="button">
                        <span>อาคาร 6</span>
                    </button>
                    <button class="maj-filter-item-btn" data-filter="241" type="button">
                        <span>ห้อง 241</span>
                    </button>
                    <button class="maj-filter-item-btn" data-filter="242" type="button">
                        <span>ห้อง 242</span>
                    </button>
                    <button class="maj-filter-item-btn" data-filter="653" type="button">
                        <span>ห้อง 653</span>
                    </button>
                    <button class="maj-filter-item-btn" data-filter="654" type="button">
                        <span>ห้อง 654</span>
                    </button>
                </nav>
                <button class="maj-filter-arrow maj-filter-arrow-right" id="maj-filter-next" type="button" aria-label="เลื่อนแถบขวา">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- 3. VISUAL-FIRST MULTI-COLUMN FLEX MASONRY (Server-Side Rendered Initial 12 Items) -->
        <main class="maj-masonry-wrapper" id="maj-masonry-wrapper">
            <div class="maj-masonry-col" id="maj-col-0">
                <?php for ($idx = 0; $idx < min($initialLimit, $totalCount); $idx++): if ($idx % 3 === 0): $item = $galleryItems[$idx]; ?>
                    <figure class="maj-photo-tile" onclick="openCinematicLightbox(<?= $idx ?>)" data-idx="<?= $idx ?>" data-room="<?= htmlspecialchars($item['room']) ?>" data-building="<?= htmlspecialchars($item['building']) ?>">
                        <img src="<?= htmlspecialchars($item['src']) ?>" alt="<?= htmlspecialchars($item['caption']) ?>" class="maj-tile-img" loading="eager">
                        <div class="maj-hover-scrim">
                            <div class="maj-hover-top-badges">
                                <span class="maj-badge-building-tag"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($item['buildingLabel']) ?></span>
                                <div class="maj-badge-zoom-icon"><i class="fas fa-search-plus"></i></div>
                            </div>
                            <div class="maj-hover-content">
                                <div class="maj-hover-room-code"><?= htmlspecialchars($item['roomLabel']) ?></div>
                            </div>
                        </div>
                    </figure>
                <?php endif; endfor; ?>
            </div>

            <div class="maj-masonry-col" id="maj-col-1">
                <?php for ($idx = 0; $idx < min($initialLimit, $totalCount); $idx++): if ($idx % 3 === 1): $item = $galleryItems[$idx]; ?>
                    <figure class="maj-photo-tile" onclick="openCinematicLightbox(<?= $idx ?>)" data-idx="<?= $idx ?>" data-room="<?= htmlspecialchars($item['room']) ?>" data-building="<?= htmlspecialchars($item['building']) ?>">
                        <img src="<?= htmlspecialchars($item['src']) ?>" alt="<?= htmlspecialchars($item['caption']) ?>" class="maj-tile-img" loading="eager">
                        <div class="maj-hover-scrim">
                            <div class="maj-hover-top-badges">
                                <span class="maj-badge-building-tag"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($item['buildingLabel']) ?></span>
                                <div class="maj-badge-zoom-icon"><i class="fas fa-search-plus"></i></div>
                            </div>
                            <div class="maj-hover-content">
                                <div class="maj-hover-room-code"><?= htmlspecialchars($item['roomLabel']) ?></div>
                            </div>
                        </div>
                    </figure>
                <?php endif; endfor; ?>
            </div>

            <div class="maj-masonry-col" id="maj-col-2">
                <?php for ($idx = 0; $idx < min($initialLimit, $totalCount); $idx++): if ($idx % 3 === 2): $item = $galleryItems[$idx]; ?>
                    <figure class="maj-photo-tile" onclick="openCinematicLightbox(<?= $idx ?>)" data-idx="<?= $idx ?>" data-room="<?= htmlspecialchars($item['room']) ?>" data-building="<?= htmlspecialchars($item['building']) ?>">
                        <img src="<?= htmlspecialchars($item['src']) ?>" alt="<?= htmlspecialchars($item['caption']) ?>" class="maj-tile-img" loading="eager">
                        <div class="maj-hover-scrim">
                            <div class="maj-hover-top-badges">
                                <span class="maj-badge-building-tag"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($item['buildingLabel']) ?></span>
                                <div class="maj-badge-zoom-icon"><i class="fas fa-search-plus"></i></div>
                            </div>
                            <div class="maj-hover-content">
                                <div class="maj-hover-room-code"><?= htmlspecialchars($item['roomLabel']) ?></div>
                            </div>
                        </div>
                    </figure>
                <?php endif; endfor; ?>
            </div>
        </main>

        <!-- 4. LOAD MORE BUTTON SECTION -->
        <div class="maj-load-more-wrap" id="maj-load-more-wrap">
            <button class="maj-btn-load-more" id="maj-btn-load-more" type="button">
                <span class="maj-btn-load-text">ดูภาพเพิ่มเติม</span>
                <span class="maj-btn-load-count" id="maj-load-count-badge">+6</span>
                <i class="fas fa-arrow-down maj-btn-load-icon"></i>
            </button>
        </div>

    </div>
</section>

<!-- 5. CINEMATIC ULTRA-MINIMAL FULLSCREEN LIGHTBOX -->
<div id="maj-cinematic-lightbox" role="dialog" aria-modal="true" aria-label="ภาพถ่ายห้องเรียน">
    
    <!-- Top Bar -->
    <div class="maj-lb-top-bar">
        <div class="maj-lb-room-title">
            <i class="fas fa-building text-danger"></i>
            <span id="maj-lb-room-text">ห้อง 241 — อาคาร 2 ชั้น 4</span>
        </div>
        <button class="maj-lb-close-btn" id="maj-btn-close-lb" type="button" aria-label="ปิด">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <!-- Main Visual Stage -->
    <div class="maj-lb-stage">
        <button class="maj-lb-arrow-btn maj-lb-prev" id="maj-lb-prev" type="button" aria-label="ภาพก่อนหน้า">
            <i class="fas fa-chevron-left"></i>
        </button>
        
        <div class="maj-lb-img-wrap">
            <img src="" alt="ภาพบรรยากาศห้องเรียน" class="maj-lb-main-img" id="maj-lb-img">
        </div>

        <button class="maj-lb-arrow-btn maj-lb-next" id="maj-lb-next" type="button" aria-label="ภาพถัดไป">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <!-- Bottom Floating Counter Bar -->
    <div class="maj-lb-bottom-bar">
        <div class="maj-lb-counter-pill" id="maj-lb-counter">1 / <?= $totalCount ?></div>
    </div>
</div>

<!-- Pass PHP Classroom Data & Load Modular Engine -->
<script>
    window.__CLASSROOM_ITEMS__ = <?= json_encode($galleryItems, JSON_UNESCAPED_UNICODE) ?>;
    window.__CLASSROOM_TARGET_ROOM__ = "<?= htmlspecialchars($targetRoom, ENT_QUOTES, 'UTF-8') ?>";
</script>
<script src="include/js/modules/classroom.js?v=<?= time() ?>"></script>