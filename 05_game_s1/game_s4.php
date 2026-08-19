<!-- SECTION 4: GAME & ANIMATION TECH STACK MARQUEE -->
<style>
@keyframes gameMarqueeLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.game-marquee-container {
    background-color: #ffffff !important;
    padding: 50px 0 60px 0;
    position: relative;
    z-index: 10;
    overflow: hidden;
    border-bottom: 1px solid #e5e7eb;
}

.game-marquee-row {
    display: flex;
    overflow: hidden;
    user-select: none;
    width: 100%;
    position: relative;
}

.game-marquee-track {
    display: flex;
    flex-shrink: 0;
    gap: 60px;
    align-items: center;
    min-width: 100%;
    will-change: transform;
    animation: gameMarqueeLeft 25s linear infinite;
}

.game-marquee-row:hover .game-marquee-track {
    animation-play-state: paused !important;
}

.game-icon-item {
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

.game-icon-item:hover {
    transform: scale(1.22) translateY(-4px);
    filter: drop-shadow(0 8px 18px rgba(220, 38, 38, 0.35));
}

.game-icon-item img {
    height: 56px;
    max-width: 140px;
    width: auto;
    object-fit: contain;
    display: block;
    background: transparent !important;
    filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.08));
    transition: transform 0.3s ease;
}

.game-marquee-edge-left,
.game-marquee-edge-right {
    position: absolute;
    top: 0;
    bottom: 0;
    width: 140px;
    z-index: 5;
    pointer-events: none;
}

.game-marquee-edge-left {
    left: 0;
    background: linear-gradient(to right, #ffffff 0%, rgba(255, 255, 255, 0) 100%);
}

.game-marquee-edge-right {
    right: 0;
    background: linear-gradient(to left, #ffffff 0%, rgba(255, 255, 255, 0) 100%);
}

/* Responsive adjustments for Section 4 Game Marquee (< 1024px) */
@media (max-width: 1023px) {
    .game-marquee-edge-left,
    .game-marquee-edge-right {
        width: 40px !important;
    }
}
</style>

<div class="game-marquee-container">
    <!-- Edge Fading Overlays -->
    <div class="game-marquee-edge-left"></div>
    <div class="game-marquee-edge-right"></div>

    <!-- SINGLE ROW MARQUEE: Running Left -->
    <div class="game-marquee-row">
        <div class="game-marquee-track">
            <!-- Loop Set 1 -->
            <div class="game-icon-item"><img src="03_photo/icon/Unity_Technologies_logo.svg.png" alt="Unity Game Engine"></div>
            <div class="game-icon-item"><img src="03_photo/icon/ภาษาC.png" alt="C# / C++"></div>
            <div class="game-icon-item"><img src="03_photo/icon/ae.png" alt="Adobe After Effects"></div>
            <div class="game-icon-item"><img src="03_photo/icon/adps.png" alt="Photoshop"></div>
            <div class="game-icon-item"><img src="03_photo/icon/Clip Studio.png" alt="Clip Studio Paint"></div>
            <div class="game-icon-item"><img src="03_photo/icon/figma.png" alt="Figma UI"></div>
            <div class="game-icon-item"><img src="03_photo/icon/python.png" alt="Python Scripting"></div>
            <div class="game-icon-item"><img src="03_photo/icon/vs.png" alt="VS Code"></div>
            <div class="game-icon-item"><img src="03_photo/icon/GitHub.png" alt="GitHub"></div>
            <div class="game-icon-item"><img src="03_photo/icon/adan.png" alt="Adobe Animate"></div>

            <!-- Loop Set 2 (Duplicate for Seamless Endless Scroll) -->
            <div class="game-icon-item"><img src="03_photo/icon/Unity_Technologies_logo.svg.png" alt="Unity Game Engine"></div>
            <div class="game-icon-item"><img src="03_photo/icon/ภาษาC.png" alt="C# / C++"></div>
            <div class="game-icon-item"><img src="03_photo/icon/ae.png" alt="Adobe After Effects"></div>
            <div class="game-icon-item"><img src="03_photo/icon/adps.png" alt="Photoshop"></div>
            <div class="game-icon-item"><img src="03_photo/icon/Clip Studio.png" alt="Clip Studio Paint"></div>
            <div class="game-icon-item"><img src="03_photo/icon/figma.png" alt="Figma UI"></div>
            <div class="game-icon-item"><img src="03_photo/icon/python.png" alt="Python Scripting"></div>
            <div class="game-icon-item"><img src="03_photo/icon/vs.png" alt="VS Code"></div>
            <div class="game-icon-item"><img src="03_photo/icon/GitHub.png" alt="GitHub"></div>
            <div class="game-icon-item"><img src="03_photo/icon/adan.png" alt="Adobe Animate"></div>
        </div>
    </div>
</div>
