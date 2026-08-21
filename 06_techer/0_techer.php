<?php
/**
 * SECTION: FACULTY & INSTRUCTORS SHOWCASE (คณะครูและบุคลากรทางการศึกษา)
 * 06_techer/0_techer.php
 * 
 * 100vh Single Fullscreen Global Portfolio Showcase with In-Place Section Morphing
 * - Verified accurate teacher data synchronized 1:1 with individual teacher PHP files
 * - Showcase Mode: Pure Cutout Center Hero (86vh) + Giant Typography Backdrop + Flanks
 * - In-Place Morph: Pure Editorial Typography & Timeline (NO CARDS / NO BOXES)
 * - 01. EDUCATION (Real Logos) / 02. EXPERTISE / 03. CONTACT & CHANNELS
 * - Flawless State Isolation (No Overlapping Elements) & Floating Pill "← ย้อนกลับ"
 */
?>

<!-- Modular Stylesheet -->
<link rel="stylesheet" href="include/css/modules/faculty.css?v=<?= time() ?>">

<!-- MAIN FULLSCREEN STAGE -->
<div id="faculty-fullscreen-stage">
    
    <!-- Atmospheric Background & Glows -->
    <div class="fp-bg-grid"></div>
    <div class="fp-ambient-glow" id="fp-ambient-glow"></div>

    <!-- Giant Typography Backdrop -->
    <div class="fp-giant-backdrop-wrap">
        <div class="fp-giant-backdrop-text" id="fp-backdrop-name">THAWATCHAI</div>
    </div>

    <!-- 1. TOP HEADER BRANDING BAR -->
    <div class="fp-top-bar" id="fp-top-bar">
        <div class="fp-top-title-wrap">
            <h1 class="fp-top-heading">
                คณะครู &amp; <span class="crimson">บุคลากรทางการศึกษา</span>
            </h1>
            <span class="fp-top-college-name">วิทยาลัยอาชีวศึกษาเชียงราย</span>
        </div>

        <!-- Sleek Floating Back Button (Appears only in Bio Mode) -->
        <button class="fp-btn-back-floating" id="fp-btn-back-showcase" type="button">
            <i class="fas fa-arrow-left"></i>
            <span>ย้อนกลับไปทำเนียบครู</span>
        </button>
    </div>

    <!-- 2. MAIN CENTER STAGE & CINEMATIC SPLIT-FLANK -->
    <div class="fp-main-stage-container" id="fp-stage-touch-area">
        
        <!-- LEFT FLANK: Name, Nickname, Role & Quote -->
        <div class="fp-left-flank" id="fp-left-flank">
            <div class="fp-nickname-badge">
                <i class="fas fa-certificate"></i>
                <span id="fp-nickname-text">ครูเหน่ง</span>
            </div>
            <h2 class="fp-fullname-heading" id="fp-fullname-text">นายธวัชชัย สาเกตุ</h2>
            <div class="fp-role-text" id="fp-role-text">หัวหน้าแผนกวิชาฯ • ครูชำนาญการพิเศษ (คศ.3)</div>
        </div>

        <!-- CENTER HERO: Pure Cutout Standing Portrait -->
        <div class="fp-center-portrait-stage" id="fp-portrait-box">
            <img class="fp-pure-cutout-img" id="fp-main-portrait" src="03_photo/3.3_teacher/removebg_ครูธวัชชัย.png" alt="ครูธวัชชัย สาเกตุ" draggable="false">
        </div>

        <!-- RIGHT FLANK: Skills Chips & Primary CTA Action Button -->
        <div class="fp-right-flank" id="fp-right-flank">
            <div class="fp-skills-label">
                <i class="fas fa-code-branch"></i> ความเชี่ยวชาญ
            </div>
            <div class="fp-skills-container" id="fp-skills-box">
                <span class="fp-skill-chip">Programming</span>
                <span class="fp-skill-chip">Game Programming</span>
                <span class="fp-skill-chip">Web Programming</span>
                <span class="fp-skill-chip">Network Computer</span>
            </div>
            <div class="fp-cta-action-row">
                <button class="fp-btn-modal-open" id="fp-btn-morph-open" type="button">
                    <span>ดูประวัติและผลงาน</span>
                    <i class="fas fa-arrow-right"></i>
                </button>
                <a href="#" target="_blank" class="fp-btn-yt-link" id="fp-btn-yt" style="display: none;" aria-label="YouTube Channel">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>

    </div>

    <!-- 3. BOTTOM MINIMALIST THUMBNAIL RAIL -->
    <div class="fp-bottom-rail-container" id="fp-bottom-rail">
        <div class="fp-rail-wrapper">
            <div class="fp-rail-fade-left" id="fp-rail-fade-left"></div>
            <div class="fp-thumbnail-deck" id="fp-thumb-deck">
                <button class="fp-thumb-item-btn active" data-idx="0" type="button">
                    <img class="fp-thumb-item-avatar" src="03_photo/3.3_teacher/crop_ครูธวัชชัย.png" alt="ครูเหน่ง">
                    <span>ครูเหน่ง</span>
                </button>
                <button class="fp-thumb-item-btn" data-idx="1" type="button">
                    <img class="fp-thumb-item-avatar" src="03_photo/3.3_teacher/crop_ครูเพลาพิลาส.png" alt="ครูก้อย">
                    <span>ครูก้อย</span>
                </button>
                <button class="fp-thumb-item-btn" data-idx="2" type="button">
                    <img class="fp-thumb-item-avatar" src="03_photo/3.3_teacher/crop_ครูปิยะมาส-2.png" alt="ครูส้ม">
                    <span>ครูส้ม</span>
                </button>
                <button class="fp-thumb-item-btn" data-idx="3" type="button">
                    <img class="fp-thumb-item-avatar" src="03_photo/3.3_teacher/crop2_เจม.png" alt="ครูเจม">
                    <span>ครูเจม</span>
                </button>
                <button class="fp-thumb-item-btn" data-idx="4" type="button">
                    <img class="fp-thumb-item-avatar" src="03_photo/3.3_teacher/crop_ครูรสธร.png" alt="ครูหลิน">
                    <span>ครูหลิน</span>
                </button>
                <button class="fp-thumb-item-btn" data-idx="5" type="button">
                    <img class="fp-thumb-item-avatar" src="03_photo/3.3_teacher/crop2_ครูธีภัทร.png" alt="ครูเยียร์">
                    <span>ครูเยียร์</span>
                </button>
            </div>
            <div class="fp-rail-fade-right" id="fp-rail-fade-right">
                <i class="fas fa-chevron-right fp-rail-swipe-chevron"></i>
            </div>
        </div>
    </div>

    <!-- 4. PURE EDITORIAL TYPOGRAPHY BIO PANEL (NO CARDS / NO BOXES) -->
    <div id="fp-bio-detail-panel" data-lenis-prevent>
        
        <!-- Profile Header -->
        <div class="fp-editorial-header">
            <div class="fp-editorial-meta-row">
                <span class="fp-nickname-badge" id="fp-bio-nick-badge" style="margin-bottom: 0;">
                    <i class="fas fa-certificate"></i>
                    <span id="fp-bio-nick-text">ครูเหน่ง</span>
                </span>
            </div>
            <h2 class="fp-editorial-fullname" id="fp-bio-fullname">นายธวัชชัย สาเกตุ</h2>
            <div class="fp-editorial-role" id="fp-bio-role">หัวหน้าแผนกวิชาฯ • ครูชำนาญการพิเศษ (คศ.3)</div>
        </div>

        <!-- 01. Education Section -->
        <div class="fp-editorial-sec-label">
            <span class="fp-editorial-sec-num">01</span>
            <span>วุฒิการศึกษา (Education Degrees)</span>
        </div>
        <div class="fp-editorial-edu-list" id="fp-bio-edu-box">
            <!-- Populated via JavaScript -->
        </div>

        <!-- 02. Skills Section -->
        <div class="fp-editorial-sec-label">
            <span class="fp-editorial-sec-num">02</span>
            <span>ความเชี่ยวชาญ (Specialized Skills)</span>
        </div>
        <div class="fp-editorial-skills-wrap" id="fp-bio-skills-box">
            <!-- Populated via JavaScript -->
        </div>

        <!-- 03. Contact Section -->
        <div class="fp-editorial-sec-label">
            <span class="fp-editorial-sec-num">03</span>
            <span>ข้อมูลการติดต่อ (Contact Info)</span>
        </div>
        <div class="fp-editorial-contact-list" id="fp-bio-contact-box">
            <!-- Populated via JavaScript -->
        </div>

        <!-- 04. Media Channel Link -->
        <div class="fp-editorial-media-row" id="fp-bio-media-wrap">
            <a href="#" target="_blank" class="fp-btn-modal-open" id="fp-bio-yt-btn" style="display: none; background: #ef4444;">
                <i class="fab fa-youtube"></i>
                <span>เผยแพร่สื่อการสอนบน YouTube Channel</span>
            </a>
        </div>

    </div>

</div>

<!-- Modular JavaScript Engine -->
<script src="include/js/modules/faculty.js?v=<?= time() ?>"></script>