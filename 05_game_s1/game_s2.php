<!-- SECTION 2: PVS GAME & ANIMATION LEARNING PILLARS -->
<style>
.game-pillars-sec {
    background-color: #0f1117;
    color: #ffffff;
    padding: 90px 20px;
    position: relative;
    overflow: hidden;
    font-family: 'Prompt', sans-serif !important;
}

.game-pillar-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    align-items: center;
}

.game-check-list {
    list-style: none;
    padding: 0;
    margin: 24px 0 0 0;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.game-check-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    font-size: 16px;
    color: #e5e7eb;
    line-height: 1.5;
}

.game-check-icon {
    width: 26px;
    height: 26px;
    min-width: 26px;
    border-radius: 50%;
    background: rgba(220, 38, 38, 0.2);
    border: 1px solid rgba(220, 38, 38, 0.4);
    color: #ef4444;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    margin-top: 2px;
}

.game-stat-card {
    background: linear-gradient(145deg, rgba(255,255,255,0.05) 0%, rgba(220,38,38,0.08) 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 28px;
    padding: 36px 30px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

@media (max-width: 1023px) {
    .game-pillars-sec {
        padding: 60px 16px;
    }
    .game-pillar-row {
        grid-template-columns: 1fr;
        gap: 32px;
    }
    .game-stat-card {
        padding: 26px 20px;
    }
}
</style>

<section class="game-pillars-sec">
    <div class="game-pillar-row">
        
        <!-- Left Column: Content & Bullet List -->
        <div>
            <div style="display: inline-flex; align-items: center; gap: 6px; color: #dc2626; font-size: 13px; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 10px;">
                <i class="fas fa-bolt"></i> CORE SKILLS & CURRICULUM
            </div>
            
            <h2 style="font-size: clamp(26px, 4vw, 42px); font-weight: 900; line-height: 1.2; margin-bottom: 16px;">
                ทักษะสำคัญที่คุณจะได้เรียนรู้ <br>
                <span style="color: #f87171;">สู่การเป็นนักพัฒนาเกมมืออาชีพ</span>
            </h2>
            
            <p style="font-size: 16px; color: #9ca3af; line-height: 1.6; margin: 0;">
                หลักสูตรเข้มข้น 2 ปี มุ่งเน้นการลงมือปฏิบัติจริง (Hands-on Practice 80%) ทำโปรเจกต์เกมจริงตั้งแต่ Pre-Production จนถึง Game Publishing
            </p>

            <ul class="game-check-list">
                <li class="game-check-item">
                    <span class="game-check-icon"><i class="fas fa-check"></i></span>
                    <div>
                        <strong style="color: #ffffff;">Game Programming (C# / C++ / Blueprints):</strong>
                        <span style="color: #9ca3af; display: block; font-size: 14px; margin-top: 2px;">เขียนสคริปต์ควบคุมตัวละคร ระบบอาวุธ Inventory ระบบ Save และ AI ศัตรู</span>
                    </div>
                </li>
                <li class="game-check-item">
                    <span class="game-check-icon"><i class="fas fa-check"></i></span>
                    <div>
                        <strong style="color: #ffffff;">3D Character & Environment Design:</strong>
                        <span style="color: #9ca3af; display: block; font-size: 14px; margin-top: 2px;">ปั้นโมเดล Low-Poly/High-Poly, UV Unwrapping, Texturing, Lighting และ Shaders</span>
                    </div>
                </li>
                <li class="game-check-item">
                    <span class="game-check-icon"><i class="fas fa-check"></i></span>
                    <div>
                        <strong style="color: #ffffff;">Game Audio, VFX & Cutscenes:</strong>
                        <span style="color: #9ca3af; display: block; font-size: 14px; margin-top: 2px;">สร้างเอฟเฟกต์เวทมนตร์ ระเบิด Particle Systems, เสียง Sound FX และ Cinematic Trailer</span>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Right Column: Interactive Stat & Technology Matrix Box -->
        <div>
            <div class="game-stat-card">
                <h3 style="font-size: 22px; font-weight: 800; color: #ffffff; margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                    <i class="fas fa-trophy" style="color: #f59e0b;"></i>
                    มาตรฐานห้องปฏิบัติการ & ผลงาน
                </h3>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 24px;">
                    <div style="background: rgba(0,0,0,0.3); border-radius: 16px; padding: 18px 16px; border: 1px solid rgba(255,255,255,0.06);">
                        <span style="font-size: 28px; font-weight: 900; color: #ef4444; display: block; line-height: 1;">80%</span>
                        <span style="font-size: 13px; color: #9ca3af; margin-top: 4px; display: block;">ปฏิบัติจริงในสตูดิโอ</span>
                    </div>
                    <div style="background: rgba(0,0,0,0.3); border-radius: 16px; padding: 18px 16px; border: 1px solid rgba(255,255,255,0.06);">
                        <span style="font-size: 28px; font-weight: 900; color: #3b82f6; display: block; line-height: 1;">100%</span>
                        <span style="font-size: 13px; color: #9ca3af; margin-top: 4px; display: block;">คอมพิวเตอร์สเปกสูง</span>
                    </div>
                </div>

                <div style="background: rgba(220, 38, 38, 0.1); border-left: 3px solid #dc2626; border-radius: 12px; padding: 14px 16px;">
                    <p style="font-size: 13px; color: #fca5a5; margin: 0; line-height: 1.5;">
                        <i class="fas fa-info-circle mr-1"></i> นักศึกษาทุกคนจะมีผลงานเกม (Game Portfolio) ของตนเองที่สามารถนำไปจัดจำหน่ายหรือใช้สมัครงานในบริษัทเกมชั้นนำได้ทันทีเมื่อสำเร็จการศึกษา
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
