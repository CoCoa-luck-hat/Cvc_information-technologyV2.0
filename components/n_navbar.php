<?php
// Active page check helper
$current_page  = basename($_SERVER['PHP_SELF']);
$current_route = trim($_GET['route'] ?? $_GET['click'] ?? $_GET['page'] ?? '', '/');
$is_home_active = (empty($current_route) || $current_route == 'home');
?>
<style>
    #main-navbar-wrapper {
        background: transparent !important;
        background-color: transparent !important;
        border: none !important;
        box-shadow: none !important;
    }
    @media (min-width: 1024px) {
        #mobileMenuToggle {
            display: none !important;
        }
        #navbarCollapse {
            display: flex !important;
        }
        /* Smooth Dropdown Enter/Exit Animation */
        .nav-dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px) scale(0.98);
            transform-origin: top left;
            transition: opacity 0.25s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.25s cubic-bezier(0.16, 1, 0.3, 1),
                        visibility 0.25s;
            pointer-events: none;
            border-radius: 16px !important;
        }
        .group:hover .nav-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }
        .nav-pvs-sub-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateX(8px);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            pointer-events: none;
        }
        .nav-pvs-sub-menu::before {
            content: '';
            position: absolute;
            top: -10px;
            bottom: -10px;
            left: -20px;
            width: 25px;
            background: transparent;
            pointer-events: auto;
        }
        .group\/pvs:hover .nav-pvs-sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(0);
            pointer-events: auto;
        }
        .group\/pvs:hover .fa-chevron-right {
            transform: translateX(3px);
            color: #dc2626 !important;
        }
    }
    @media (max-width: 1023px) {
        #mobileMenuToggle {
            display: flex !important;
        }
        #navbarCollapse {
            display: none !important;
        }
        .nav-dropdown-menu {
            overflow: hidden !important;
            border-radius: 16px !important;
        }
    }

    /* Chevron Rotation on Hover */
    .fa-chevron-down {
        transition: transform 0.25s ease, color 0.25s ease;
    }
    .group:hover .fa-chevron-down {
        transform: rotate(180deg);
        color: #dc2626 !important;
    }

    /* Sub-menu Item Hover Effect */
    .nav-dropdown-item {
        display: block;
        padding: 10px 18px;
        font-size: 14px;
        color: #374151;
        text-decoration: none;
        transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .nav-dropdown-item:hover {
        background-color: #fef2f2 !important;
        color: #dc2626 !important;
        padding-left: 22px !important;
    }

    /* Fullscreen Glassmorphic Mobile Nav Overlay */
    #mobileNavOverlay {
        position: fixed;
        inset: 0;
        z-index: 99999;
        background: rgba(10, 12, 16, 0.96);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 24px 20px 32px;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(-20px);
        transition: opacity 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.35s cubic-bezier(0.16, 1, 0.3, 1),
                    visibility 0.35s;
        overflow-y: auto;
    }
    #mobileNavOverlay.mobile-menu-active {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0);
    }
    .mobile-nav-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        padding: 16px 0;
        font-size: 20px;
        font-weight: 700;
        color: #ffffff;
        text-decoration: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        transition: color 0.2s ease, padding-left 0.2s ease;
        background: transparent;
        border-top: none;
        border-left: none;
        border-right: none;
        cursor: pointer;
        text-align: left;
    }
    .mobile-nav-link:hover, .mobile-nav-link:focus {
        color: #dc2626;
        padding-left: 8px;
    }
    .mobile-sub-accordion {
        display: none;
        flex-direction: column;
        padding: 8px 0 16px 16px;
        gap: 12px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .mobile-sub-accordion.active {
        display: flex;
    }
    .mobile-sub-link {
        font-size: 16px;
        font-weight: 500;
        color: #9ca3af;
        text-decoration: none;
        transition: color 0.2s ease;
        padding: 4px 0;
    }
    .mobile-sub-link:hover {
        color: #dc2626;
    }
</style>

<!-- Navbar Start -->
<div id="main-navbar-wrapper" style="position: fixed; top: 12px; left: 0; right: 0; z-index: 50; width: 100%; padding: 0 16px; transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1); background: transparent !important; pointer-events: none;">
    <div style="max-width: 1240px; margin: 0 auto; background: rgba(255, 255, 255, 0.96); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-radius: 9999px; border: 1px solid rgba(229, 231, 235, 0.9); box-shadow: 0 12px 35px -10px rgba(0, 0, 0, 0.12), 0 2px 6px rgba(0, 0, 0, 0.04); padding: 8px 24px; position: relative; pointer-events: auto;">
        <nav style="display: flex; align-items: center; justify-content: space-between; gap: 16px; min-height: 48px;">
            
            <!-- Brand Logo -->
            <a href="index.php" style="display: flex; align-items: center; gap: 12px; text-decoration: none; flex-shrink: 0;" data-magnetic>
                <img id="navBrandLogo" src="02_design/Logo-it2.png" alt="IT Logo" style="width: 44px; height: 44px; min-width: 44px; min-height: 44px; max-width: 44px; max-height: 44px; object-fit: contain; flex-shrink: 0; display: block;">
                <div style="display: flex; flex-direction: column; justify-content: center; line-height: 1.2;">
                    <span style="font-size: 15px; font-weight: 700; color: #111827; white-space: nowrap;">แผนกวิชาเทคโนโลยีสารสนเทศ</span>
                    <span style="font-size: 11px; color: #9ca3af; letter-spacing: 0.05em; white-space: nowrap;">Information Technology</span>
                </div>
            </a>

            <!-- Mobile Toggle Button -->
            <button id="mobileMenuToggle" style="width: 40px; height: 40px; border-radius: 9999px; background: #f9fafb; border: 1px solid #e5e7eb; align-items: center; justify-content: center; color: #374151; cursor: pointer;" aria-label="Toggle Navigation">
                <i class="fa fa-bars" style="font-size: 18px;"></i>
            </button>

            <!-- Desktop Nav Links Container -->
            <div id="navbarCollapse" style="align-items: center; gap: 4px;">
                
                <!-- หน้าแรก -->
                <a href="index.php" style="white-space: nowrap; padding: 5px 16px; font-size: 15px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; <?= $is_home_active ? 'color: #dc2626;' : 'color: #374151;' ?> border-radius: 9999px;" data-magnetic>
                    <span class="link-draw-underline">หน้าแรก</span>
                </a>

                <!-- สาขาที่เปิดสอน (Dropdown with Nested Submenu) -->
                <div class="relative group" style="position: relative;">
                    <button style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; background: transparent; border: none; border-radius: 9999px; cursor: pointer; display: flex; align-items: center; gap: 6px; transition: all 0.2s;" data-magnetic>
                        <span class="link-draw-underline">สาขาที่เปิดสอน</span>
                        <i class="fa fa-chevron-down" style="font-size: 11px; color: #9ca3af;"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="nav-dropdown-menu lg:absolute left-0 top-full mt-2 z-50" style="min-width: 230px; background: #ffffff; border-radius: 16px; border: 1px solid #e5e7eb; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); padding: 6px 0; overflow: visible !important;">
                        <a href="index.php?click=it_coo1" class="nav-dropdown-item">ระดับ (ปวช.) เทคโนโลยีสารสนเทศ</a>
                        
                        <!-- Nested PVS Submenu -->
                        <div class="relative group/pvs" style="position: relative;">
                            <div class="nav-dropdown-item" style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                                <span>ระดับ (ปวส.) 2 สาขาวิชา</span>
                                <i class="fa fa-chevron-right" style="font-size: 11px; color: #9ca3af; transition: transform 0.2s;"></i>
                            </div>
                            <!-- Flyout Submenu -->
                            <div class="nav-pvs-sub-menu" style="min-width: 250px; background: #ffffff; border-radius: 14px; border: 1px solid #e5e7eb; box-shadow: 0 20px 30px -5px rgba(0,0,0,0.12); padding: 6px 0; position: absolute; left: 100%; top: -6px; margin-left: 4px; z-index: 60;">
                                <a href="index.php?click=it_s1" class="nav-dropdown-item">สาขาเทคโนโลยีสารสนเทศ</a>
                                <a href="index.php?click=game_s1" class="nav-dropdown-item">สาขาคอมพิวเตอร์เกมและแอนิเมชัน</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- แนะนำสาขาฯ (Dropdown) -->
                <div class="relative group" style="position: relative;">
                    <button style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; background: transparent; border: none; border-radius: 9999px; cursor: pointer; display: flex; align-items: center; gap: 6px; transition: all 0.2s;" data-magnetic>
                        <span class="link-draw-underline">แนะนำสาขาฯ</span>
                        <i class="fa fa-chevron-down" style="font-size: 11px; color: #9ca3af;"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="nav-dropdown-menu lg:absolute left-0 top-full mt-2 z-50" style="min-width: 220px; background: #ffffff; border-radius: 16px; border: 1px solid #e5e7eb; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); padding: 6px 0; overflow: hidden;">
                        <a href="index.php?click=0_techer" class="nav-dropdown-item">แนะนำครูผู้สอน</a>
                        <a href="index.php?click=c_653" class="nav-dropdown-item">แนะนำอาคารเรียน/ห้องเรียน</a>
                        <a href="index.php?click=gallery" class="nav-dropdown-item">ภาพกิจกรรมต่างๆ</a>
                        <a href="https://cvc.ac.th/webcvc/show_it" target="_blank" class="nav-dropdown-item">รางวัลของแผนกฯ</a>
                    </div>
                </div>

                <!-- ทำเนียบบัณฑิต -->
                <a href="index.php?click=graduate" target="_blank" style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; text-decoration: none; border-radius: 9999px; transition: all 0.2s;" data-magnetic>
                    <span class="link-draw-underline">ทำเนียบบัณฑิต</span>
                </a>

                <!-- สมัครเรียน (Dropdown) -->
                <div class="relative group" style="position: relative;">
                    <button style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; background: transparent; border: none; border-radius: 9999px; cursor: pointer; display: flex; align-items: center; gap: 6px; transition: all 0.2s;" data-magnetic>
                        <span class="link-draw-underline">สมัครเรียน</span>
                        <i class="fa fa-chevron-down" style="font-size: 11px; color: #9ca3af;"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="nav-dropdown-menu lg:absolute left-0 top-full mt-2 z-50" style="min-width: 210px; background: #ffffff; border-radius: 16px; border: 1px solid #e5e7eb; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); padding: 6px 0; overflow: hidden;">
                        <a href="https://admission.vec.go.th/app/applicant/initContact" target="_blank" class="nav-dropdown-item">วิธีการสมัครเรียนออนไลน์</a>
                        <a href="https://admission.vec.go.th/" target="_blank" class="nav-dropdown-item">สมัครเรียนออนไลน์</a>
                    </div>
                </div>

            </div>

            <!-- Contact Info Widget -->
            <div class="hidden xl:flex" style="align-items: center; gap: 12px; padding-left: 16px; border-left: 1px solid rgba(229, 231, 235, 0.8); flex-shrink: 0;">
                <a href="tel:053713036" style="width: 42px; height: 42px; min-width: 42px; min-height: 42px; max-width: 42px; max-height: 42px; border-radius: 9999px; background: #f9fafb; border: 1px solid #e5e7eb; display: flex; align-items: center; justify-content: center; color: #dc2626; text-decoration: none; position: relative; flex-shrink: 0;" data-magnetic aria-label="Contact Phone">
                    <i class="fa fa-phone-alt" style="font-size: 16px;"></i>
                    <span style="position: absolute; top: -2px; right: -2px; width: 15px; height: 15px; background: #dc2626; border: 2px solid #ffffff; border-radius: 9999px; display: flex; align-items: center; justify-content: center;">
                        <i class="fa fa-comment-dots" style="font-size: 7px; color: #ffffff;"></i>
                    </span>
                </a>
                <div style="display: flex; flex-direction: column; justify-content: center; line-height: 1.25;">
                    <span style="font-size: 12px; color: #9ca3af; white-space: nowrap;">ติดต่อสอบถามข้อมูล</span>
                    <a href="tel:053713036" style="font-size: 15px; font-weight: 700; color: #111827; text-decoration: none; white-space: nowrap;">053 713 036 ต่อ 109</a>
                </div>
            </div>

        </nav>
    </div>
</div>
<!-- Navbar End -->

<!-- Awwwards Fullscreen Glassmorphic Mobile Menu Overlay -->
<div id="mobileNavOverlay" aria-label="Mobile Navigation Overlay">
    <div>
        <!-- Overlay Header -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.12);">
            <div style="display: flex; align-items: center; gap: 12px;">
                <img src="02_design/Logo-it2.png" alt="IT Logo" style="width: 40px; height: 40px; object-fit: contain;">
                <div style="display: flex; flex-direction: column;">
                    <span style="font-size: 15px; font-weight: 700; color: #ffffff;">แผนกวิชาเทคโนโลยีสารสนเทศ</span>
                    <span style="font-size: 11px; color: #dc2626; font-weight: 600; letter-spacing: 0.05em;">CVC IT DEPARTMENT</span>
                </div>
            </div>
            <button id="mobileMenuClose" style="width: 42px; height: 42px; border-radius: 9999px; background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.15); color: #ffffff; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.2s;" aria-label="Close Mobile Navigation">
                <i class="fa fa-times" style="font-size: 18px;"></i>
            </button>
        </div>

        <!-- Overlay Navigation Links -->
        <div style="display: flex; flex-direction: column; margin-top: 16px;">
            <!-- หน้าแรก -->
            <a href="index.php" class="mobile-nav-link">
                <span>หน้าแรก</span>
                <i class="fa fa-arrow-right" style="font-size: 14px; opacity: 0.5;"></i>
            </a>

            <!-- สาขาที่เปิดสอน (Accordion) -->
            <button type="button" class="mobile-nav-link" onclick="toggleMobileAccordion('acc-majors', this)">
                <span>สาขาที่เปิดสอน</span>
                <i class="fa fa-chevron-down acc-icon" style="font-size: 14px; opacity: 0.5; transition: transform 0.25s ease;"></i>
            </button>
            <div id="acc-majors" class="mobile-sub-accordion">
                <a href="index.php?click=it_coo1" class="mobile-sub-link">• ระดับประกาศนียบัตรวิชาชีพ (ปวช.)</a>
                <div style="padding-left: 12px; margin-top: 6px; border-left: 2px solid rgba(220, 38, 38, 0.4);">
                    <span style="font-size: 12px; color: #dc2626; font-weight: 700; display: block; margin-bottom: 4px;">• ระดับ ปวส. (2 สาขาวิชา):</span>
                    <a href="index.php?click=it_s1" class="mobile-sub-link" style="padding-left: 8px;">- สาขาเทคโนโลยีสารสนเทศ</a>
                    <a href="index.php?click=game_s1" class="mobile-sub-link" style="padding-left: 8px;">- สาขาคอมพิวเตอร์เกมและแอนิเมชัน</a>
                </div>
            </div>

            <!-- แนะนำสาขาฯ (Accordion) -->
            <button type="button" class="mobile-nav-link" onclick="toggleMobileAccordion('acc-about', this)">
                <span>แนะนำสาขาฯ</span>
                <i class="fa fa-chevron-down acc-icon" style="font-size: 14px; opacity: 0.5; transition: transform 0.25s ease;"></i>
            </button>
            <div id="acc-about" class="mobile-sub-accordion">
                <a href="index.php?click=0_techer" class="mobile-sub-link">• แนะนำครูผู้สอน</a>
                <a href="index.php?click=c_653" class="mobile-sub-link">• แนะนำอาคารเรียน / ห้องเรียน</a>
                <a href="index.php?click=gallery" class="mobile-sub-link">• ภาพกิจกรรมต่างๆ</a>
                <a href="https://cvc.ac.th/webcvc/show_it" target="_blank" class="mobile-sub-link">• รางวัลของแผนกฯ</a>
            </div>

            <!-- ทำเนียบบัณฑิต -->
            <a href="index.php?click=graduate" target="_blank" class="mobile-nav-link">
                <span>ทำเนียบบัณฑิต</span>
                <i class="fa fa-external-link-alt" style="font-size: 14px; opacity: 0.5;"></i>
            </a>

            <!-- สมัครเรียน (Accordion) -->
            <button type="button" class="mobile-nav-link" onclick="toggleMobileAccordion('acc-apply', this)">
                <span>สมัครเรียน</span>
                <i class="fa fa-chevron-down acc-icon" style="font-size: 14px; opacity: 0.5; transition: transform 0.25s ease;"></i>
            </button>
            <div id="acc-apply" class="mobile-sub-accordion">
                <a href="https://admission.vec.go.th/app/applicant/initContact" target="_blank" class="mobile-sub-link">• วิธีการสมัครเรียนออนไลน์</a>
                <a href="https://admission.vec.go.th/" target="_blank" class="mobile-sub-link">• ระบบสมัครเรียนออนไลน์ VEC</a>
            </div>
        </div>
    </div>

    <!-- Overlay Footer Contact Card -->
    <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 20px; padding: 16px; margin-top: 24px; display: flex; align-items: center; justify-content: space-between;">
        <div style="display: flex; flex-direction: column;">
            <span style="font-size: 12px; color: #9ca3af;">สอบถามข้อมูลสมัครเรียน</span>
            <a href="tel:053713036" style="font-size: 16px; font-weight: 700; color: #ffffff; text-decoration: none;">053 713 036 ต่อ 109</a>
        </div>
        <a href="tel:053713036" style="padding: 10px 18px; background: #dc2626; color: #ffffff; border-radius: 9999px; text-decoration: none; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px;">
            <i class="fa fa-phone-alt" style="font-size: 12px;"></i>
            <span>โทรออก</span>
        </a>
    </div>
</div>

<script>
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenuClose = document.getElementById('mobileMenuClose');
    const mobileNavOverlay = document.getElementById('mobileNavOverlay');

    function openMobileMenu() {
        if (mobileNavOverlay) {
            mobileNavOverlay.classList.add('mobile-menu-active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeMobileMenu() {
        if (mobileNavOverlay) {
            mobileNavOverlay.classList.remove('mobile-menu-active');
            document.body.style.overflow = '';
        }
    }

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', openMobileMenu);
    }
    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', closeMobileMenu);
    }

    function toggleMobileAccordion(accId, btnEl) {
        const accordion = document.getElementById(accId);
        const icon = btnEl ? btnEl.querySelector('.acc-icon') : null;
        if (accordion) {
            const isExpanded = accordion.classList.contains('active');
            // Close all accordions first
            document.querySelectorAll('.mobile-sub-accordion').forEach(acc => acc.classList.remove('active'));
            document.querySelectorAll('.acc-icon').forEach(ic => ic.style.transform = 'rotate(0deg)');
            
            if (!isExpanded) {
                accordion.classList.add('active');
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        }
    }
</script>