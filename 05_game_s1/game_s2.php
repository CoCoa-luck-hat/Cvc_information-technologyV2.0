<!-- SECTION 2: MADEWITHGSAP EXACT H-TEXTS & H-CARDS FOR PVS GAME & ANIMATION -->
<style>
/* Scoped Styles for PVS Game & Animation Section */
.pvc-gsap-section-exact {
    position: relative;
    background-color: #0A0A0B !important;
    color: #ffffff !important;
    overflow: hidden;
    font-family: 'Prompt', sans-serif !important;
    z-index: 2;
    width: 100%;
}

.pvc-gsap-section-exact .pvc-stage-container {
    position: relative;
    width: 100vw !important;
    max-width: 100vw !important;
    height: 100vh !important;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 !important;
    padding: 0 !important;
    box-sizing: border-box;
}

/* Background Ambient Glow */
.pvc-gsap-section-exact .ambient-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(220, 38, 38, 0.12) 0%, rgba(10, 10, 11, 0) 70%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
    z-index: 0;
}

/* H-TEXTS WRAPPER */
.pvc-h-texts-wrapper {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    margin: 0 auto;
    transform: translateY(-50%);
    width: 100%;
    max-width: 1200px;
    padding: 0 20px;
    text-align: center;
    z-index: 10;
    pointer-events: none;
    box-sizing: border-box;
}

.pvc-h-texts-wrapper .title-l {
    display: block;
    font-family: 'Prompt', sans-serif !important;
    font-size: clamp(32px, 4.5vw, 64px);
    font-weight: 900;
    line-height: 1.15;
    letter-spacing: -1px;
}

.pvc-h-texts-wrapper .title-mob {
    display: none;
    font-family: 'Prompt', sans-serif !important;
    font-size: clamp(24px, 6.5vw, 34px);
    font-weight: 900;
    line-height: 1.2;
    letter-spacing: -0.5px;
}

.pvc-h-texts-wrapper .mwg-line {
    display: block;
    margin-bottom: 8px;
}

.pvc-h-texts-wrapper .mwg-line.text-g {
    font-size: 0.62em;
    font-weight: 700;
    color: #9ca3af;
    letter-spacing: 0px;
    margin-top: 4px;
}

.pvc-h-texts-wrapper .mwg-word {
    display: inline-block;
    white-space: nowrap;
    margin: 0 0.12em;
}

.pvc-h-texts-wrapper .char {
    display: inline-block;
    will-change: transform, opacity;
}

.pvc-h-texts-wrapper .text-crimson {
    color: #ef4444 !important;
}

/* H-CARDS WRAPPER */
.pvc-h-cards-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 20;
    pointer-events: none;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pvc-h-cards-wrapper .circles {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    pointer-events: auto;
}

.pvc-h-cards-wrapper .circle {
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 0;
    display: none;
}

.pvc-h-cards-wrapper .circle:nth-child(1) { z-index: 1; }
.pvc-h-cards-wrapper .circle:nth-child(2) { z-index: 2; }
.pvc-h-cards-wrapper .circle:nth-child(3) { z-index: 3; }
.pvc-h-cards-wrapper .circle:nth-child(4) { z-index: 4; }

.pvc-h-cards-wrapper .circle.on {
    display: block;
}

.pvc-h-cards-wrapper .circle .media {
    position: absolute;
    top: 0;
    left: 0;
    width: 340px;
    max-width: 90vw;
    pointer-events: auto;
    box-sizing: border-box;
    will-change: transform, opacity;
}

/* Responsive Styles */
@media (max-width: 899px) {
    .pvc-h-texts-wrapper .title-l {
        display: none !important;
    }
    .pvc-h-texts-wrapper .title-mob {
        display: block !important;
    }
}
</style>

<div class="pvc-gsap-section-exact" id="pvc-fees-section">
    <!-- 700vh Track Height for Smooth 2-Stage GSAP Scroll Animation -->
    <div class="pin-height" style="height: 700vh; position: relative;">
        <div class="pvc-stage-container">
            
            <!-- Ambient Glow -->
            <div class="ambient-glow"></div>

            <!-- 1. H-TEXTS WRAPPER (PINNED IN CENTER) -->
            <div class="h-texts pvc-h-texts-wrapper">
                <div class="title-l">
                    <div class="mwg-line">
                        <span class="mwg-word">ค่าใช้จ่าย</span>
                        <span class="mwg-word">&amp;</span>
                        <span class="mwg-word">สิทธิ์ประโยชน์ที่ได้รับ</span>
                        <span class="mwg-word text-crimson">(ปวส.)</span>
                    </div>
                    <div class="mwg-line text-g">
                        <span class="mwg-word">ระดับ</span>
                        <span class="mwg-word">ปวส.</span>
                        <span class="mwg-word text-white">คอมพิวเตอร์เกมและแอนิเมชัน</span>
                        <span class="mwg-word">CVC</span>
                    </div>
                </div>
                <div class="title-mob">
                    <div class="mwg-line">
                        <span class="mwg-word">ค่าใช้จ่าย</span>
                        <span class="mwg-word">&amp;</span>
                        <span class="mwg-word">สิทธิ์ประโยชน์</span>
                        <span class="mwg-word text-crimson">(ปวส.)</span>
                    </div>
                    <div class="mwg-line text-g">
                        <span class="mwg-word">ปวส.</span>
                        <span class="mwg-word text-white">เกมและแอนิเมชัน</span>
                    </div>
                </div>
            </div>

            <!-- 2. H-CARDS WRAPPER (2-STAGE SCROLL: STAGE 1 ORBIT WHEEL -> STAGE 2 RADIAL SPREAD OUT ROW) -->
            <div class="h-cards body-s pvc-h-cards-wrapper">
                <div class="circles">
                    
                    <!-- Circle Card 1: ค่าลงทะเบียนเรียน -->
                    <div class="circle on">
                        <div class="media pr m1 f f-space" style="background: #ffffff !important; border: 1px solid rgba(220, 38, 38, 0.18) !important; border-radius: 24px !important; padding: 30px 24px !important; box-shadow: 0 24px 50px rgba(0,0,0,0.5) !important;">
                            <div style="width: 48px; height: 48px; border-radius: 14px; background: rgba(220, 38, 38, 0.08); border: 1px solid rgba(220, 38, 38, 0.18); color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px;">
                                <i class="fa fa-coins"></i>
                            </div>
                            <h3 class="card-title-mwg" style="font-size: 21px !important; font-weight: 800 !important; color: #111827 !important; margin: 0 0 5px 0 !important; font-family: 'Prompt', sans-serif !important; letter-spacing: -0.3px;">ค่าลงทะเบียนเรียน</h3>
                            <p style="font-size: 13px !important; color: #6b7280 !important; font-family: 'Prompt', sans-serif !important; margin: 0 0 16px 0 !important; font-weight: 600 !important;">ค่าแรกเข้า / ฿9,500 - ฿10,000</p>
                            
                            <ul style="display: flex; flex-direction: column; gap: 9px; list-style: none; padding: 0; margin: 0 0 18px 0; font-size: 13.5px; font-weight: 600; color: #374151; font-family: 'Prompt', sans-serif !important;">
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>อัตราค่าเรียนเฉลี่ยรายภาคเรียน</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>รวมค่าธรรมเนียมและอุปกรณ์การเรียน</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>กู้ยืมกองทุน กยศ. ได้เต็มจำนวน 100%</span>
                                </li>
                            </ul>

                            <div style="margin-top: auto; border-top: 1px solid #f3f4f6; padding-top: 12px;">
                                <p style="font-size: clamp(26px, 2.3vw, 32px) !important; font-weight: 900 !important; color: #dc2626 !important; font-family: 'Prompt', sans-serif !important; margin: 0 !important; line-height: 1 !important; letter-spacing: -1px;">฿4,750/เทอม</p>
                            </div>
                        </div>
                    </div>

                    <!-- Circle Card 2: ค่าลงทะเบียนฝึกงาน -->
                    <div class="circle on">
                        <div class="media pr m2 f f-space" style="background: #ffffff !important; border: 1px solid rgba(220, 38, 38, 0.18) !important; border-radius: 24px !important; padding: 30px 24px !important; box-shadow: 0 24px 50px rgba(0,0,0,0.5) !important;">
                            <div style="width: 48px; height: 48px; border-radius: 14px; background: rgba(220, 38, 38, 0.08); border: 1px solid rgba(220, 38, 38, 0.18); color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px;">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <h3 class="card-title-mwg" style="font-size: 21px !important; font-weight: 800 !important; color: #111827 !important; margin: 0 0 5px 0 !important; font-family: 'Prompt', sans-serif !important; letter-spacing: -0.3px;">ค่าลงทะเบียนฝึกงาน</h3>
                            <p style="font-size: 13px !important; color: #6b7280 !important; font-family: 'Prompt', sans-serif !important; margin: 0 0 16px 0 !important; font-weight: 600 !important;">จำนวน 1 ภาคเรียน</p>
                            
                            <ul style="display: flex; flex-direction: column; gap: 9px; list-style: none; padding: 0; margin: 0 0 18px 0; font-size: 13.5px; font-weight: 600; color: #374151; font-family: 'Prompt', sans-serif !important;">
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>ฝึกประสบการณ์วิชาชีพในสถานประกอบการ</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>อัตราค่าลงทะเบียนเฉพาะเทอมฝึกงาน</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>มีอาจารย์นิเทศก์ดูแลและมีโอกาสรับเบี้ยเลี้ยง</span>
                                </li>
                            </ul>

                            <div style="margin-top: auto; border-top: 1px solid #f3f4f6; padding-top: 12px;">
                                <p style="font-size: clamp(26px, 2.3vw, 32px) !important; font-weight: 900 !important; color: #dc2626 !important; font-family: 'Prompt', sans-serif !important; margin: 0 !important; line-height: 1 !important; letter-spacing: -1px;">฿2,600/เทอม</p>
                            </div>
                        </div>
                    </div>

                    <!-- Circle Card 3: ผ่อนจ่ายค่าเทอมได้ -->
                    <div class="circle on">
                        <div class="media pr m3 f f-space" style="background: #ffffff !important; border: 1px solid rgba(220, 38, 38, 0.18) !important; border-radius: 24px !important; padding: 30px 24px !important; box-shadow: 0 24px 50px rgba(0,0,0,0.5) !important;">
                            <div style="width: 48px; height: 48px; border-radius: 14px; background: rgba(220, 38, 38, 0.08); border: 1px solid rgba(220, 38, 38, 0.18); color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px;">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <h3 class="card-title-mwg" style="font-size: 21px !important; font-weight: 800 !important; color: #111827 !important; margin: 0 0 5px 0 !important; font-family: 'Prompt', sans-serif !important; letter-spacing: -0.3px;">ผ่อนจ่ายค่าเทอมได้</h3>
                            <p style="font-size: 13px !important; color: #6b7280 !important; font-family: 'Prompt', sans-serif !important; margin: 0 0 16px 0 !important; font-weight: 600 !important;">แบ่งเป็น 2 งวด</p>
                            
                            <ul style="display: flex; flex-direction: column; gap: 9px; list-style: none; padding: 0; margin: 0 0 18px 0; font-size: 13.5px; font-weight: 600; color: #374151; font-family: 'Prompt', sans-serif !important;">
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>แบ่งชำระเป็น 2 งวดต่อภาคเรียน</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>ไม่มีดอกเบี้ย 0% ช่วยแบ่งเบาภาระ</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>ยื่นเรื่องขอผ่อนชำระกับงานการเงินได้สะดวก</span>
                                </li>
                            </ul>

                            <div style="margin-top: auto; border-top: 1px solid #f3f4f6; padding-top: 12px;">
                                <p style="font-size: clamp(26px, 2.3vw, 32px) !important; font-weight: 900 !important; color: #dc2626 !important; font-family: 'Prompt', sans-serif !important; margin: 0 !important; line-height: 1 !important; letter-spacing: -1px;">ไม่มีดอกเบี้ย</p>
                            </div>
                        </div>
                    </div>

                    <!-- Circle Card 4: ประกันอุบัติเหตุ -->
                    <div class="circle on">
                        <div class="media pr m4 f f-space" style="background: #ffffff !important; border: 1px solid rgba(220, 38, 38, 0.18) !important; border-radius: 24px !important; padding: 30px 24px !important; box-shadow: 0 24px 50px rgba(0,0,0,0.5) !important;">
                            <div style="width: 48px; height: 48px; border-radius: 14px; background: rgba(220, 38, 38, 0.08); border: 1px solid rgba(220, 38, 38, 0.18); color: #dc2626; display: flex; align-items: center; justify-content: center; font-size: 22px; margin-bottom: 14px;">
                                <i class="fa fa-shield-alt"></i>
                            </div>
                            <h3 class="card-title-mwg" style="font-size: 21px !important; font-weight: 800 !important; color: #111827 !important; margin: 0 0 5px 0 !important; font-family: 'Prompt', sans-serif !important; letter-spacing: -0.3px;">ประกันอุบัติเหตุ</h3>
                            <p style="font-size: 13px !important; color: #6b7280 !important; font-family: 'Prompt', sans-serif !important; margin: 0 0 16px 0 !important; font-weight: 600 !important;">วิริยะประกันภัย</p>
                            
                            <ul style="display: flex; flex-direction: column; gap: 9px; list-style: none; padding: 0; margin: 0 0 18px 0; font-size: 13.5px; font-weight: 600; color: #374151; font-family: 'Prompt', sans-serif !important;">
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>คุ้มครองอุบัติเหตุตลอด 24 ชั่วโมง</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>เคลมค่ารักษาพยาบาลสูงสุด ฿8,000 ต่อครั้ง</span>
                                </li>
                                <li style="display: flex; align-items: flex-start; gap: 8px;">
                                    <i class="fa fa-check-circle" style="color: #dc2626; font-size: 13px; margin-top: 3px; flex-shrink: 0;"></i>
                                    <span>ดูแลความคุ้มครองตลอดระยะเวลาการศึกษา</span>
                                </li>
                            </ul>

                            <div style="margin-top: auto; border-top: 1px solid #f3f4f6; padding-top: 12px;">
                                <p style="font-size: clamp(26px, 2.3vw, 32px) !important; font-weight: 900 !important; color: #dc2626 !important; font-family: 'Prompt', sans-serif !important; margin: 0 !important; line-height: 1 !important; letter-spacing: -1px;">฿8,000/ครั้ง</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
