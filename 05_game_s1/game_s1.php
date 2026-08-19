<!-- SECTION 1: PVS GAME & ANIMATION HERO SHOWCASE -->
<style>
.game-hero-wrapper {
    position: relative;
    background: #0a0c10;
    color: #ffffff;
    padding: 140px 20px 80px 20px;
    overflow: hidden;
    font-family: 'Prompt', sans-serif !important;
}

.game-hero-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.18) 0%, rgba(10, 12, 16, 0) 70%);
    top: 20%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
    z-index: 1;
}

.game-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(220, 38, 38, 0.12);
    border: 1px solid rgba(220, 38, 38, 0.3);
    padding: 8px 18px;
    border-radius: 9999px;
    font-size: 14px;
    font-weight: 700;
    color: #f87171;
    margin-bottom: 24px;
    backdrop-filter: blur(8px);
}

.game-hero-title {
    font-size: clamp(32px, 5.5vw, 68px);
    font-weight: 900;
    line-height: 1.15;
    letter-spacing: -1px;
    margin-bottom: 18px;
}

.game-hero-sub {
    font-size: clamp(16px, 2.2vw, 20px);
    color: #9ca3af;
    max-width: 780px;
    margin: 0 auto 36px;
    line-height: 1.6;
}

.game-card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
    max-width: 1200px;
    margin: 40px auto 0;
    position: relative;
    z-index: 2;
}

.game-feature-card {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 24px;
    padding: 28px 24px;
    text-align: left;
    transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    overflow: hidden;
}

.game-feature-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #dc2626, #f97316);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.game-feature-card:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.07);
    border-color: rgba(220, 38, 38, 0.4);
    box-shadow: 0 20px 40px -15px rgba(220, 38, 38, 0.25);
}

.game-feature-card:hover::before {
    opacity: 1;
}

.game-icon-box {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    background: rgba(220, 38, 38, 0.15);
    border: 1px solid rgba(220, 38, 38, 0.3);
    color: #ef4444;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 20px;
}

@media (max-width: 1023px) {
    .game-hero-wrapper {
        padding: 100px 16px 50px 16px;
    }
    .game-card-grid {
        grid-template-columns: 1fr;
        gap: 16px;
    }
}
</style>

<div class="game-hero-wrapper">
    <div class="game-hero-glow"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; text-align: center; position: relative; z-index: 2;">
        
        <!-- Badge -->
        <div class="game-hero-badge">
            <i class="fas fa-gamepad"></i>
            <span>หลักสูตร ปวส. • สาขาคอมพิวเตอร์เกมและแอนิเมชัน</span>
        </div>

        <!-- Headline -->
        <h1 class="game-hero-title">
            เปลี่ยนไอเดียสู่โลกเกม <br>
            <span style="background: linear-gradient(135deg, #ffffff 0%, #dc2626 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Game Dev & 3D Animation
            </span>
        </h1>

        <!-- Subtitle -->
        <p class="game-hero-sub">
            หลักสูตรวิชาชีพชั้นสูงที่ออกแบบมาเพื่อสร้าง <strong>Game Developer, 3D Animator และ Technical Artist</strong> ตัวจริง เรียนรู้การสร้างสรรค์เกมด้วย Unreal Engine, Unity, Blender, การออกแบบตัวละคร และระบบเกมมิ่งระดับสากล
        </p>

        <!-- Feature Cards Grid -->
        <div class="game-card-grid">
            <!-- Card 1 -->
            <div class="game-feature-card">
                <div class="game-icon-box"><i class="fas fa-cubes"></i></div>
                <h3 style="font-size: 20px; font-weight: 700; color: #ffffff; margin-bottom: 8px;">Game Engine Development</h3>
                <p style="font-size: 14px; color: #9ca3af; line-height: 1.6; margin: 0;">
                    พัฒนาเกมระดับ Next-Gen ด้วย Unreal Engine 5 และ Unity ทั้งเกม 2D, 3D, ระบบ Physics, Game Logic และ AI
                </p>
            </div>

            <!-- Card 2 -->
            <div class="game-feature-card">
                <div class="game-icon-box"><i class="fas fa-dragon"></i></div>
                <h3 style="font-size: 20px; font-weight: 700; color: #ffffff; margin-bottom: 8px;">3D Modeling & Animation</h3>
                <p style="font-size: 14px; color: #9ca3af; line-height: 1.6; margin: 0;">
                    ปั้นโมเดลตัวละคร ฉาก และพร็อพ 3 มิติ ด้วย Blender, Maya, ZBrush พร้อมการ Rigging และตัดต่อแอนิเมชันเต็มรูปแบบ
                </p>
            </div>

            <!-- Card 3 -->
            <div class="game-feature-card">
                <div class="game-icon-box"><i class="fas fa-vr-cardboard"></i></div>
                <h3 style="font-size: 20px; font-weight: 700; color: #ffffff; margin-bottom: 8px;">VR / AR & Interactive Media</h3>
                <p style="font-size: 14px; color: #9ca3af; line-height: 1.6; margin: 0;">
                    เปิดประสบการณ์สู่โลกเสมือนจริง Virtual Reality, Augmented Reality และสื่ออินเทอร์แอคทีฟแห่งอนาคต
                </p>
            </div>
        </div>

    </div>
</div>
