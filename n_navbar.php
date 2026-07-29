<?php
// Active page check helper
$current_page = basename($_SERVER['PHP_SELF']);
$current_click = isset($_GET['click']) ? $_GET['click'] : '';
$is_home_active = ($current_page == 'index.php' && empty($current_click));
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
    }
    @media (max-width: 1023px) {
        #mobileMenuToggle {
            display: flex !important;
        }
        #navbarCollapse {
            display: none;
        }
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

            <!-- Nav Links Container -->
            <div id="navbarCollapse" style="align-items: center; gap: 4px;">
                
                <!-- หน้าแรก -->
                <a href="index.php" style="white-space: nowrap; padding: 5px 16px; font-size: 15px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; <?= $is_home_active ? 'color: #dc2626;' : 'color: #374151;' ?> border-radius: 9999px;" data-magnetic>
                    <span>หน้าแรก</span>
                </a>

                <!-- สาขาที่เปิดสอน (Dropdown) -->
                <div class="relative group" style="position: relative;">
                    <button style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; background: transparent; border: none; border-radius: 9999px; cursor: pointer; display: flex; align-items: center; gap: 6px; transition: all 0.2s;" data-magnetic>
                        <span>สาขาที่เปิดสอน</span>
                        <i class="fa fa-chevron-down" style="font-size: 11px; color: #9ca3af;"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="lg:absolute left-0 top-full mt-2 hidden group-hover:block z-50" style="min-width: 200px; background: #ffffff; border-radius: 16px; border: 1px solid #e5e7eb; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); padding: 6px 0;">
                        <a href="index_it.php?click=it_coo1" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">ในระดับ (ปวช.)</a>
                        <a href="index_it.php?click=it_s1" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">ในระดับ (ปวส.)</a>
                    </div>
                </div>

                <!-- แนะนำสาขาฯ (Dropdown) -->
                <div class="relative group" style="position: relative;">
                    <button style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; background: transparent; border: none; border-radius: 9999px; cursor: pointer; display: flex; align-items: center; gap: 6px; transition: all 0.2s;" data-magnetic>
                        <span>แนะนำสาขาฯ</span>
                        <i class="fa fa-chevron-down" style="font-size: 11px; color: #9ca3af;"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="lg:absolute left-0 top-full mt-2 hidden group-hover:block z-50" style="min-width: 220px; background: #ffffff; border-radius: 16px; border: 1px solid #e5e7eb; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); padding: 6px 0;">
                        <a href="index_it.php?click=0_techer" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">แนะนำครูผู้สอน</a>
                        <a href="index_it.php?click=c_653" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">แนะนำอาคารเรียน/ห้องเรียน</a>
                        <a href="index_it.php?click=gallery" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">ภาพกิจกรรมต่างๆ</a>
                        <a href="https://cvc.ac.th/webcvc/show_it" target="_blank" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">รางวัลของแผนกฯ</a>
                    </div>
                </div>

                <!-- ทำเนียบบัณฑิต -->
                <a href="index_it.php?click=graduate" target="_blank" style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; text-decoration: none; border-radius: 9999px; transition: all 0.2s;" data-magnetic>
                    <span>ทำเนียบบัณฑิต</span>
                </a>

                <!-- สมัครเรียน (Dropdown) -->
                <div class="relative group" style="position: relative;">
                    <button style="white-space: nowrap; padding: 6px 14px; font-size: 15px; font-weight: 500; color: #374151; background: transparent; border: none; border-radius: 9999px; cursor: pointer; display: flex; align-items: center; gap: 6px; transition: all 0.2s;" data-magnetic>
                        <span>สมัครเรียน</span>
                        <i class="fa fa-chevron-down" style="font-size: 11px; color: #9ca3af;"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div class="lg:absolute left-0 top-full mt-2 hidden group-hover:block z-50" style="min-width: 210px; background: #ffffff; border-radius: 16px; border: 1px solid #e5e7eb; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); padding: 6px 0;">
                        <a href="https://admission.vec.go.th/app/applicant/initContact" target="_blank" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">วิธีการสมัครเรียนออนไลน์</a>
                        <a href="https://admission.vec.go.th/" target="_blank" style="display: block; padding: 9px 18px; font-size: 14px; color: #374151; text-decoration: none;" onmouseover="this.style.background='#fef2f2';this.style.color='#dc2626';" onmouseout="this.style.background='transparent';this.style.color='#374151';">สมัครเรียนออนไลน์</a>
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

<style>
    .bg-imm {
        background-image: url(img/bnbn.png) !important;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<script>
    // Toggle Mobile Menu
    document.getElementById('mobileMenuToggle').addEventListener('click', function() {
        const menu = document.getElementById('navbarCollapse');
        if (window.getComputedStyle(menu).display !== 'none' && menu.style.display !== 'none') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'flex';
            menu.style.flexDirection = 'column';
            menu.style.position = 'absolute';
            menu.style.top = '100%';
            menu.style.left = '0';
            menu.style.right = '0';
            menu.style.marginTop = '12px';
            menu.style.background = '#ffffff';
            menu.style.borderRadius = '24px';
            menu.style.padding = '16px';
            menu.style.border = '1px solid #e5e7eb';
            menu.style.boxShadow = '0 20px 25px -5px rgba(0,0,0,0.1)';
        }
    });
</script>