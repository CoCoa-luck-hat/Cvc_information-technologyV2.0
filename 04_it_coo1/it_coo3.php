<!-- SECTION 3: PURE DIAGRAM SHOWCASE & OFF-SCREEN BOTTOM CARDS GSAP SEQUENCE -->
<div id="sec3-sequence-outer" style="position: relative; z-index: 10; background-color: #f8f9fa !important;">
    <div id="sec3-pinned-view" style="min-height: 100vh; padding: 20px; display: flex; flex-direction: column; justify-content: center; align-items: center; box-sizing: border-box; overflow: hidden; position: relative;">
        <div style="max-width: 1240px; width: 100%; margin: 0 auto; display: flex; flex-direction: column; align-items: center;">
            
            <!-- Step 1: Section Header (Fades Out before Step 3) -->
            <div style="text-align: center; margin-bottom: 20px; opacity: 0; transform: translateY(-30px); will-change: transform, opacity; position: relative; z-index: 2;" id="sec3-header">
                <h2 style="font-size: 34px; font-weight: 800; color: #dc2626 !important; margin: 0; font-family: 'Prompt', sans-serif !important;">
                    โครงสร้างหลักสูตร & <span style="color: #1f2937;">คุณสมบัติผู้สมัคร</span>
                </h2>
            </div>

            <!-- Vertical Stage Container -->
            <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; gap: 4px; position: relative;" id="sec3-vertical-wrapper">
                
                <!-- Step 2: Pure Standalone Diagram Showcase (No White Background Card) -->
                <div id="sec3-diagram-card" style="background: transparent !important; border: none !important; padding: 0 !important; box-shadow: none !important; text-align: center; will-change: transform, opacity; max-width: 1050px; width: 100%; opacity: 0; transform: scale(0.85); margin: 0 auto;">
                    <img src="02_design/โครงสร้างหลักสูตร_ปวช.png" alt="ผังโครงสร้างหลักสูตร ปวช." style="width: 100%; max-height: 80vh; height: auto; object-fit: contain; display: block; mix-blend-mode: multiply !important; margin: 0 auto;">
                </div>

                <!-- Step 3: Bottom Side-by-Side 2 Cards Row (Initially 100% Off-Screen Below Viewport Fold) -->
                <div style="display: flex; flex-wrap: wrap; gap: 24px; justify-content: center; width: 100%; opacity: 0; transform: translateY(100vh); will-change: transform, opacity;" id="sec3-bottom-cards-row">
                    
                    <!-- Card 1: Qualifications -->
                    <div style="flex: 1 1 450px; max-width: 580px; min-width: 300px; background-color: #ffffff !important; border-radius: 24px; padding: 24px; border: 1px solid rgba(220, 38, 38, 0.14); box-shadow: 0 15px 35px rgba(0,0,0,0.06); box-sizing: border-box;">
                        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 14px;">
                            <div style="width: 42px; height: 42px; border-radius: 14px; background: rgba(220, 38, 38, 0.1); color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                <i class="fa fa-user-check"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 19px; font-weight: 800; color: #1f2937 !important; margin: 0; font-family: 'Prompt', sans-serif !important;">
                                    คุณสมบัติผู้สมัคร (ปวช.)
                                </h3>
                                <span style="font-size: 12px; color: #6b7280; font-family: 'Prompt', sans-serif !important;">เกณฑ์และข้อกำหนดการเข้าศึกษาต่อ</span>
                            </div>
                        </div>
                        
                        <ul style="display: flex; flex-direction: column; gap: 10px; color: #374151 !important; font-size: 13.5px; font-family: 'Prompt', sans-serif !important; padding: 0; margin: 0; list-style: none;">
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-check-circle" style="color: #dc2626; margin-top: 3px; font-size: 14px; flex-shrink: 0;"></i>
                                <span><strong>ระดับการศึกษา:</strong> สำเร็จการศึกษาระดับ มัธยมศึกษาปีที่ 3 (ม.3) หรือเทียบเท่า</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-check-circle" style="color: #dc2626; margin-top: 3px; font-size: 14px; flex-shrink: 0;"></i>
                                <span><strong>ผลการเรียน:</strong> เกรดเฉลี่ยสะสม (GPAX) 5 ภาคเรียน ไม่ต่ำกว่า 2.00</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-check-circle" style="color: #dc2626; margin-top: 3px; font-size: 14px; flex-shrink: 0;"></i>
                                <span><strong>ความสนใจ:</strong> มีความสนใจ ทักษะพื้นฐาน หรือความมุ่งมั่นในสายงานไอทีและดิจิทัล</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-check-circle" style="color: #dc2626; margin-top: 3px; font-size: 14px; flex-shrink: 0;"></i>
                                <span><strong>การสอบคัดเลือก:</strong> ผ่านการคัดเลือกตามเกณฑ์ของวิทยาลัยอาชีวศึกษาเชียงราย</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Card 2: Duration & Learning Systems -->
                    <div style="flex: 1 1 450px; max-width: 580px; min-width: 300px; background-color: #ffffff !important; border-radius: 24px; padding: 24px; border: 1px solid rgba(220, 38, 38, 0.14); box-shadow: 0 15px 35px rgba(0,0,0,0.06); box-sizing: border-box;">
                        <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 14px;">
                            <div style="width: 42px; height: 42px; border-radius: 14px; background: rgba(220, 38, 38, 0.1); color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 18px;">
                                <i class="fa fa-clock"></i>
                            </div>
                            <div>
                                <h3 style="font-size: 19px; font-weight: 800; color: #1f2937 !important; margin: 0; font-family: 'Prompt', sans-serif !important;">
                                    ระยะเวลา & ระบบการเรียน
                                </h3>
                                <span style="font-size: 12px; color: #6b7280; font-family: 'Prompt', sans-serif !important;">รูปแบบและโครงสร้างการเรียนการสอน</span>
                            </div>
                        </div>

                        <ul style="display: flex; flex-direction: column; gap: 10px; color: #374151 !important; font-size: 13.5px; font-family: 'Prompt', sans-serif !important; padding: 0; margin: 0; list-style: none;">
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-graduation-cap" style="color: #dc2626; margin-top: 3px; font-size: 14px; flex-shrink: 0;"></i>
                                <span><strong>ระยะเวลาเรียน:</strong> รวม 3 ปีการศึกษา (6 ภาคเรียน) เน้นปฏิบัติจริง 80%</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-laptop-code" style="color: #dc2626; margin-top: 3px; font-size: 14px; flex-shrink: 0;"></i>
                                <span><strong>ระบบปกติ:</strong> เรียนทฤษฎีและปฏิบัติ + ฝึกงานในสถานประกอบการ 1 ภาคเรียน (ปวช.3)</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-building" style="color: #dc2626; margin-top: 3px; font-size: 15px; flex-shrink: 0;"></i>
                                <span><strong>ระบบทวิภาคี:</strong> เรียนควบคู่กับการฝึกอาชีพจริงในบริษัทสถานประกอบการพาร์ตเนอร์ชั้นนำ</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; gap: 10px;">
                                <i class="fa fa-user-shield" style="color: #dc2626; margin-top: 3px; font-size: 14px; flex-shrink: 0;"></i>
                                <span><strong>การดูแลนักศึกษา:</strong> มีอาจารย์ที่ปรึกษา ดูแลการฝึกงานอย่างใกล้ชิดตลอดหลักสูตร</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!-- GSAP ScrollTrigger Script for Section 3 Sequence -->
<script>
(function() {
    window.initSec3Sequence = function initSec3Sequence() {
        if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
            setTimeout(initSec3Sequence, 100);
            return;
        }

        let mm = gsap.matchMedia();

        mm.add("(min-width: 1024px)", () => {
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: "#sec3-sequence-outer",
                    pin: true,
                    start: "top top",
                    end: "+=100%",
                    scrub: 0.4,
                    anticipatePin: 1
                }
            });

            // Phase 1: Header Reveal & Pure Standalone Huge Diagram Image Reveal (0% -> 15% scroll)
            tl.to("#sec3-header", {
                y: 0,
                opacity: 1,
                duration: 0.4,
                ease: "power1.out"
            }, 0);

            tl.to("#sec3-diagram-card", {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "power1.out"
            }, 0.1);

            // Phase 2: Short Read Hold Phase (15% -> 25% scroll) - Quick hold before cards ascend
            tl.to({}, { duration: 0.5 }, 0.9);

            // Phase 3: Header Fade-Out & Pure Diagram Image Shrinks & Shifts Up (25% -> 50% scroll)
            tl.to("#sec3-header", {
                opacity: 0,
                y: -30,
                duration: 0.6,
                ease: "power1.in"
            }, 1.4);

            tl.to("#sec3-diagram-card", {
                scale: 0.84,
                y: -10,
                duration: 0.8,
                ease: "power1.inOut"
            }, 1.4);

            // Phase 4: Fast H-CARDS ASCEND (50% -> 100% scroll) - Bottom 2 Cards Row ascends quickly close to diagram
            tl.to("#sec3-bottom-cards-row", {
                opacity: 1,
                translateY: "-38px",
                duration: 1.4,
                ease: "power1.out"
            }, 1.8);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initSec3Sequence);
    } else {
        initSec3Sequence();
    }
})();
</script>