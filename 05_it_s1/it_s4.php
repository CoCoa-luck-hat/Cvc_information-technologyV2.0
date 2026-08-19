<!-- SECTION 4: PVS IT TECH STACK SINGLE ROW MARQUEE SHOWCASE -->
<style>
@keyframes pvsTechMarqueeLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.pvs-tech-marquee-container {
    background-color: #ffffff !important;
    padding: 50px 0 60px 0;
    position: relative;
    z-index: 10;
    overflow: hidden;
    border-bottom: 1px solid #e5e7eb;
}

.pvs-tech-marquee-row {
    display: flex;
    overflow: hidden;
    user-select: none;
    width: 100%;
    position: relative;
}

.pvs-tech-marquee-track {
    display: flex;
    flex-shrink: 0;
    gap: 60px;
    align-items: center;
    min-width: 100%;
    will-change: transform;
    animation: pvsTechMarqueeLeft 25s linear infinite;
}

.pvs-tech-marquee-row:hover .pvs-tech-marquee-track {
    animation-play-state: paused !important;
}

.pvs-tech-icon-item {
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent !important;
    border: none !important;
    box-shadow: none !important;
    padding: 10px;
    transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), filter 0.3s ease;
    cursor: pointer;
    flex-shrink: 0;
}

.pvs-tech-icon-item:hover {
    transform: scale(1.22) translateY(-4px);
    filter: drop-shadow(0 8px 18px rgba(220, 38, 38, 0.35));
}

.pvs-tech-icon-item img {
    height: 56px;
    max-width: 140px;
    width: auto;
    object-fit: contain;
    display: block;
    background: transparent !important;
    filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.08));
    transition: transform 0.3s ease;
}

.pvs-tech-marquee-edge-left,
.pvs-tech-marquee-edge-right {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 140px;
    z-index: 5;
    pointer-events: none;
}

.pvs-tech-marquee-edge-left {
    left: 0;
    background: linear-gradient(to right, #ffffff 0%, rgba(255, 255, 255, 0) 100%);
}

.pvs-tech-marquee-edge-right {
    right: 0;
    background: linear-gradient(to left, #ffffff 0%, rgba(255, 255, 255, 0) 100%);
}

/* Responsive adjustments for Section 4 Tech Marquee (< 1024px) */
@media (max-width: 1023px) {
    .pvs-tech-marquee-edge-left,
    .pvs-tech-marquee-edge-right {
        width: 40px !important;
    }
}
</style>

<div class="pvs-tech-marquee-container">
    <!-- Edge Fading Overlays -->
    <div class="pvs-tech-marquee-edge-left"></div>
    <div class="pvs-tech-marquee-edge-right"></div>

    <!-- SINGLE ROW MARQUEE: Running Left -->
    <div class="pvs-tech-marquee-row">
        <div class="pvs-tech-marquee-track">
            <!-- Loop Set 1 -->
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/vs.png" alt="VS Code"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/Docker.png" alt="Docker"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/python.png" alt="Python"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/php.png" alt="PHP Web"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/linux.png" alt="Linux OS"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/vmware.png" alt="VMware"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/ando.png" alt="Android Dev"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/bootstrap5.png" alt="Bootstrap 5"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/Power BI.png" alt="Power BI"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/GitHub.png" alt="GitHub"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/figma.png" alt="Figma"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/ภาษาC.png" alt="C / C++"></div>

            <!-- Loop Set 2 (Duplicate for Seamless Endless Scroll) -->
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/vs.png" alt="VS Code"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/Docker.png" alt="Docker"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/python.png" alt="Python"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/php.png" alt="PHP Web"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/linux.png" alt="Linux OS"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/vmware.png" alt="VMware"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/ando.png" alt="Android Dev"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/bootstrap5.png" alt="Bootstrap 5"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/Power BI.png" alt="Power BI"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/GitHub.png" alt="GitHub"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/figma.png" alt="Figma"></div>
            <div class="pvs-tech-icon-item"><img src="03_photo/icon/ภาษาC.png" alt="C / C++"></div>
        </div>
    </div>
</div>