<!-- SECTION 5: PVS GAME ADMISSION CTA & CAREER PATHWAYS -->
<style>
.game-cta-sec {
    background: #000000;
    color: #ffffff;
    padding: 80px 20px 100px 20px;
    position: relative;
    overflow: hidden;
    font-family: 'Prompt', sans-serif !important;
    text-align: center;
}

.game-cta-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.22) 0%, rgba(0, 0, 0, 0) 70%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
    z-index: 1;
}

.game-cta-card {
    background: #ffffff;
    color: #111827;
    border-radius: 32px;
    padding: 48px 36px;
    max-width: 900px;
    margin: 0 auto;
    box-shadow: 0 25px 60px -15px rgba(220, 38, 38, 0.3);
    position: relative;
    z-index: 2;
}

.game-career-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
    max-width: 1000px;
    margin: 40px auto 0;
    position: relative;
    z-index: 2;
}

.game-career-badge {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 18px;
    padding: 18px 16px;
    text-align: center;
    transition: all 0.3s ease;
}

.game-career-badge:hover {
    background: rgba(220, 38, 38, 0.15);
    border-color: rgba(220, 38, 38, 0.4);
    transform: translateY(-4px);
}

@media (max-width: 1023px) {
    .game-cta-sec {
        padding: 50px 16px 70px 16px;
    }
    .game-cta-card {
        padding: 32px 20px;
        border-radius: 24px;
    }
    .game-career-grid {
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }
}
</style>

<section class="game-cta-sec">
    <div class="game-cta-glow"></div>

    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 2;">
        
        <!-- CTA Box -->
        <div class="game-cta-card">
            <!-- Icon -->
            <div style="width: 72px; height: 72px; border-radius: 50%; background: rgba(220, 38, 38, 0.1); border: 1.5px solid rgba(220, 38, 38, 0.25); color: #dc2626; display: inline-flex; align-items: center; justify-content: center; font-size: 32px; margin-bottom: 20px;">
                <i class="fas fa-gamepad"></i>
            </div>

            <h2 style="font-size: clamp(26px, 4.8vw, 42px); font-weight: 900; color: #111827; margin-bottom: 12px; line-height: 1.2;">
                ก้าวสู่ครีเอเตอร์เกมมืออาชีพกับ <span style="color: #dc2626;">CVC IT</span>
            </h2>

            <p style="font-size: 16px; color: #4b5563; max-width: 650px; margin: 0 auto 28px; line-height: 1.6;">
                เปิดรับสมัครผู้สำเร็จการศึกษา ปวช. และ ม.6 เข้าศึกษาต่อระดับ ปวส. สาขาคอมพิวเตอร์เกมและแอนิเมชัน โควตาเรียนดี ทุนการศึกษา และอุปกรณ์ครบครันตลอดหลักสูตร
            </p>

            <div style="display: flex; flex-wrap: wrap; gap: 14px; justify-content: center;">
                <a href="https://admission.vec.go.th/" target="_blank" style="padding: 14px 32px; background: #dc2626; color: #ffffff; font-weight: 800; font-size: 16px; border-radius: 9999px; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 10px 25px rgba(220, 38, 38, 0.35); transition: all 0.25s;">
                    <span>สมัครเรียนออนไลน์</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="tel:053713036" style="padding: 14px 28px; background: #f3f4f6; color: #1f2937; font-weight: 700; font-size: 16px; border-radius: 9999px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.25s;">
                    <i class="fas fa-phone-alt" style="color: #dc2626;"></i>
                    <span>สอบถามเพิ่มเติม</span>
                </a>
            </div>
        </div>

        <!-- Career Pathways Grid -->
        <div style="margin-top: 60px;">
            <h3 style="font-size: 22px; font-weight: 800; color: #ffffff; margin-bottom: 8px;">
                เส้นทางอาชีพในอุตสาหกรรมเกมและดิจิทัลคอนเทนต์
            </h3>
            <p style="font-size: 14px; color: #9ca3af; margin: 0 auto 20px;">
                โอกาสร่วมงานกับสตูดิโอเกม บริษัทแอนิเมชัน และดิจิทัลเอเจนซี่ชั้นนำ
            </p>

            <div class="game-career-grid">
                <div class="game-career-badge">
                    <i class="fas fa-code text-red-500 text-xl mb-2"></i>
                    <h4 style="font-size: 16px; font-weight: 700; color: #ffffff; margin: 0;">Game Developer / Programmer</h4>
                </div>
                <div class="game-career-badge">
                    <i class="fas fa-cube text-red-500 text-xl mb-2"></i>
                    <h4 style="font-size: 16px; font-weight: 700; color: #ffffff; margin: 0;">3D Modeler & Texture Artist</h4>
                </div>
                <div class="game-career-badge">
                    <i class="fas fa-film text-red-500 text-xl mb-2"></i>
                    <h4 style="font-size: 16px; font-weight: 700; color: #ffffff; margin: 0;">2D/3D Character Animator</h4>
                </div>
                <div class="game-career-badge">
                    <i class="fas fa-drafting-compass text-red-500 text-xl mb-2"></i>
                    <h4 style="font-size: 16px; font-weight: 700; color: #ffffff; margin: 0;">Game Level Designer</h4>
                </div>
                <div class="game-career-badge">
                    <i class="fas fa-magic text-red-500 text-xl mb-2"></i>
                    <h4 style="font-size: 16px; font-weight: 700; color: #ffffff; margin: 0;">Technical Artist & VFX</h4>
                </div>
                <div class="game-career-badge">
                    <i class="fas fa-vr-cardboard text-red-500 text-xl mb-2"></i>
                    <h4 style="font-size: 16px; font-weight: 700; color: #ffffff; margin: 0;">AR / VR Content Creator</h4>
                </div>
            </div>
        </div>

    </div>
</section>
