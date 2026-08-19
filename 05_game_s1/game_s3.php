<!-- SECTION 3: PVS GAME CURRICULUM STRUCTURE & QUALIFICATIONS -->
<style>
.game-structure-sec {
    position: relative;
    background-color: #f8f9fa !important;
    color: #111827 !important;
    padding: 100px 20px 80px 20px;
    font-family: 'Prompt', sans-serif !important;
    z-index: 10;
}

.game-top-wave-wrapper {
    position: absolute;
    top: -59px;
    left: 0;
    width: 100%;
    height: 60px;
    overflow: hidden;
    line-height: 0;
    z-index: 5;
    pointer-events: none;
}

.game-top-wave-wrapper svg {
    width: 100%;
    height: 100%;
    display: block;
}

.game-qual-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 24px;
    max-width: 1200px;
    margin: 40px auto 0;
}

.game-qual-card {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 24px;
    padding: 32px 28px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.game-qual-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(220, 38, 38, 0.08);
    border-color: rgba(220, 38, 38, 0.3);
}

@media (max-width: 1023px) {
    .game-structure-sec {
        padding: 60px 16px 50px 16px;
    }
    .game-top-wave-wrapper {
        top: -39px;
        height: 40px;
    }
    .game-qual-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
}
</style>

<section class="game-structure-sec">
    <!-- Top S-Curve Wave Transition from Section 2 (#0f1117) to Section 3 (#f8f9fa) -->
    <div class="game-top-wave-wrapper">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,0 C380,60 720,10 1080,50 C1240,70 1360,25 1440,40 L1440,80 L0,80 Z" fill="#f8f9fa"/>
        </svg>
    </div>

    <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
        
        <div style="display: inline-flex; align-items: center; gap: 6px; color: #dc2626; font-size: 13px; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 10px;">
            <i class="fas fa-graduation-cap"></i> ELIGIBILITY & ADMISSION
        </div>
        
        <h2 style="font-size: clamp(26px, 4.5vw, 44px); font-weight: 900; color: #111827; margin-bottom: 12px; line-height: 1.2;">
            คุณสมบัติผู้สมัคร & <span style="color: #dc2626;">โครงสร้างหลักสูตร ปวส.</span>
        </h2>
        
        <p style="font-size: 16px; color: #6b7280; max-width: 650px; margin: 0 auto;">
            หลักสูตร 2 ปี สำหรับผู้ที่ต้องการต่อยอดทักษะสู่ระดับเชี่ยวชาญด้านเกมมิ่งและแอนิเมชัน
        </p>

        <!-- Qualification Cards Grid -->
        <div class="game-qual-grid">
            
            <!-- Card 1: ปวช. -->
            <div class="game-qual-card">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 8px; background: #fee2e2; color: #dc2626; font-weight: 800; font-size: 13px; padding: 6px 14px; border-radius: 9999px; margin-bottom: 16px;">
                        <i class="fas fa-certificate"></i> กลุ่มผู้จบ ปวช.
                    </div>
                    <h3 style="font-size: 22px; font-weight: 800; color: #111827; margin-bottom: 12px; text-align: left;">
                        ผู้สำเร็จการศึกษาระดับ ปวช. ทุกสาขาวิชา
                    </h3>
                    <p style="font-size: 14px; color: #6b7280; text-align: left; line-height: 1.6; margin-bottom: 20px;">
                        ผู้จบ ปวช. สาขาเทคโนโลยีสารสนเทศ, คอมพิวเตอร์ธุรกิจ, อิเล็กทรอนิกส์, ศิลปกรรม หรือสาขาอื่นๆ ที่มีความสนใจและหลงใหลในอุตสาหกรรมเกม
                    </p>
                </div>
                <div style="background: #f9fafb; border-radius: 14px; padding: 14px; text-align: left; border: 1px solid #f3f4f6;">
                    <span style="font-size: 13px; font-weight: 700; color: #111827; display: block;">⏱️ ระยะเวลาศึกษา: 2 ปี (4 ภาคเรียน)</span>
                    <span style="font-size: 12px; color: #6b7280; margin-top: 2px; display: block;">เรียนทฤษฎีควบคู่ปฏิบัติการสตูดิโอ + ฝึกงานในสถานประกอบการจริง</span>
                </div>
            </div>

            <!-- Card 2: ม.6 หรือเทียบเท่า -->
            <div class="game-qual-card">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 8px; background: #eff6ff; color: #2563eb; font-weight: 800; font-size: 13px; padding: 6px 14px; border-radius: 9999px; margin-bottom: 16px;">
                        <i class="fas fa-user-graduate"></i> กลุ่มผู้จบ ม.6 / กศน.
                    </div>
                    <h3 style="font-size: 22px; font-weight: 800; color: #111827; margin-bottom: 12px; text-align: left;">
                        ผู้สำเร็จการศึกษาระดับ ม.6 หรือเทียบเท่า
                    </h3>
                    <p style="font-size: 14px; color: #6b7280; text-align: left; line-height: 1.6; margin-bottom: 20px;">
                        เปิดรับผู้จบ ม.6 ทุกแผนการเรียน (วิทย์-คณิต, ศิลป์-คำนวณ, ศิลป์-ภาษา) และ กศน. มีการปูพื้นฐานการเขียนโค้ดและศิลปะดิจิทัลตั้งแต่เริ่มต้น
                    </p>
                </div>
                <div style="background: #f9fafb; border-radius: 14px; padding: 14px; text-align: left; border: 1px solid #f3f4f6;">
                    <span style="font-size: 13px; font-weight: 700; color: #111827; display: block;">⏱️ ระยะเวลาศึกษา: 2 ปี (มีรายวิชาปรับพื้นฐาน)</span>
                    <span style="font-size: 12px; color: #6b7280; margin-top: 2px; display: block;">เรียนรู้เข้มข้นจนสามารถสร้างเกมและแอนิเมชันได้จริง 100%</span>
                </div>
            </div>

        </div>

    </div>
</section>
