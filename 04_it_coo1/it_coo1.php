<?php
/**
 * SECTION 1: H-HERO IT DEPARTMENT VOCATIONAL CERTIFICATE (ปวช.)
 * 04_it_coo1/it_coo1.php
 * 
 * Authentic Hero Section for CVC IT Department (ปวช. เทคโนโลยีสารสนเทศ).
 * Features:
 * - GSAP Observer 3D Vertical Photo Gallery Stack & Scrub Dragging
 * - 5 Primary Facility & Lab Photos from 03_photo/3.4_room/ (P1, P2, 3.0, 5.0, 4)
 * - Thai Kinetic Split Wording Headlines ("หลักสูตร ปวช." / "เทคโนโลยีสารสนเทศ")
 * - Auto-cycling photo deck (2.5s interval)
 * - Clean Minimal UI (No CTA buttons or floating badges)
 * - Responsive Mobile Horizontal Scroll fallback (< 900px)
 */
?>

<!-- DEPENDENCY LOADER (GSAP 3, SCROLLTRIGGER, OBSERVER) -->
<script>
(function() {
    function initAll() {
        if (typeof window.initMwgHeroSection === 'function') {
            window.initMwgHeroSection();
        }
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAll);
    } else {
        initAll();
    }
})();
</script>

<!-- HERO SECTION SCOPED STYLES -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700;800&display=swap');

:root {
    --mwg2-white: #FFFFFF;
    --mwg2-black: #0A0A0B;
    --mwg2-grey: #777777;
    --grid-margin: 25px;
    --font-prompt: 'Prompt', sans-serif !important;
}

/* Master Section Wrapper */
section.h-hero {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 650px;
    background-color: var(--mwg2-white) !important;
    color: var(--mwg2-black);
    overflow: hidden;
    user-select: none;
    -webkit-user-select: none;
    box-sizing: border-box;
    font-family: var(--font-prompt);
    z-index: 5;
    margin: 0;
    padding: 0;
}

section.h-hero .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
}

/* Wording Headlines (Centered Vertically) */
.h-hero > .wording-headline {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    width: 100%;
    padding: 0 var(--grid-margin);
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-sizing: border-box;
    font-size: min(3.4vw, 46px);
    line-height: 1.05;
    font-weight: 800;
    letter-spacing: -0.02em;
    z-index: 3;
    pointer-events: none;
    font-family: var(--font-prompt);
}

.h-hero > .wording-headline .l {
    width: calc(50% - 20vw - var(--grid-margin));
    display: flex;
    gap: 8px;
    justify-content: flex-start;
    flex-wrap: nowrap;
    white-space: nowrap;
    overflow: visible;
}

.h-hero > .wording-headline .r {
    width: calc(50% - 20vw - var(--grid-margin));
    display: flex;
    gap: 0px;
    justify-content: flex-start;
    flex-wrap: nowrap;
    white-space: nowrap;
    overflow: visible;
    color: var(--mwg2-black);
}

.h-hero > .wording-headline span {
    display: inline-block;
    color: var(--mwg2-black);
    font-family: var(--font-prompt);
}

/* Container & Vertical Card Deck Engine */
.h-hero .hero-deck-container {
    width: 35vw;
    min-width: 360px;
    max-width: 560px;
    height: 100%;
    margin: 0 auto;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2;
    overflow: hidden !important;
}

.h-hero .hero-deck-content {
    display: flex;
    flex-direction: column;
    gap: 6px;
    width: 25vw;
    min-width: 260px;
    max-width: 400px;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin: 0 auto;
    height: max-content;
    will-change: transform;
}

.h-hero .media {
    width: 100%;
    aspect-ratio: 16 / 9;
    min-height: 180px;
    border-radius: 12px;
    object-fit: cover;
    display: block;
    background-color: #1a1a1a;
    box-shadow: 0 16px 36px rgba(0, 0, 0, 0.16);
    will-change: transform, opacity;
    cursor: grab;
    transition: filter 0.3s ease, border-color 0.3s ease;
    border: 2px solid rgba(255, 255, 255, 0.8);
}

.h-hero .media:active {
    cursor: grabbing;
}

.h-hero.grey .media {
    filter: brightness(0.85);
}

/* Subtitle Tagline (Bottom Left) */
.h-hero .join {
    position: absolute;
    bottom: 35px;
    left: var(--grid-margin);
    font-size: 16px;
    line-height: 1.45;
    color: #4b5563;
    font-weight: 500;
    margin: 0;
    opacity: 0;
    visibility: hidden;
    font-family: var(--font-prompt);
    z-index: 5;
}

/* Responsive Rules (< 900px) */
@media (max-width: 900px) {
    .h-hero > .wording-headline {
        position: relative;
        top: initial;
        transform: initial;
        font-size: 32px;
        flex-direction: column;
        align-items: center;
        margin-top: 80px;
        padding: 0 15px;
    }
    
    .h-hero > .wording-headline .l, .h-hero > .wording-headline .r {
        width: 100%;
        justify-content: center;
    }

    .h-hero .hero-deck-container {
        width: calc(100% + 30px);
        height: auto;
        overflow-x: auto;
        margin: 25px 0 0 -15px;
        scroll-snap-type: x mandatory;
    }

    .h-hero .hero-deck-content {
        position: relative;
        flex-direction: row;
        width: max-content;
        gap: 15px;
        padding: 0 25px;
        margin: 0;
        left: auto;
        right: auto;
        transform: none !important;
    }

    .h-hero .media {
        width: calc(100vw - 60px);
        max-width: 450px;
        scroll-snap-align: center;
        transform: none !important;
    }

    .h-hero .join {
        display: none;
    }
}
</style>

<!-- MAIN HERO SECTION HTML MARKUP -->
<section class="h-hero pr intro-playing">
    <h1 class="sr-only">หลักสูตร ปวช. เทคโนโลยีสารสนเทศ วิทยาลัยอาชีวศึกษาชลบุรี CVC IT</h1>

    <!-- Left & Right Split Headline -->
    <div class="wording-headline pa f f-space title-s">
        <div class="l">
            <span class="w1">หลักสูตร</span>
            <span class="w2">ปวช.</span>
        </div>
        <div class="r right">
            <span class="w3">เทคโนโลยี</span>
            <span class="w4">สารสนเทศ</span>
        </div>
    </div>

    <!-- Subtitle Tagline -->
    <p class="join pa body-s">มุ่งเน้นทักษะปฏิบัติจริง 80% <br>สร้างสรรค์ผลงานดิจิทัลระดับมืออาชีพ CVC IT</p>

    <!-- Center Card Stack Photo Gallery Container -->
    <div class="hero-deck-container">
        <div class="hero-deck-content">
            <img class="media" draggable="false" src="03_photo/3.4_room/P1.jpg" alt="ห้องปฏิบัติการคอมพิวเตอร์ 1" />
            <img class="media" draggable="false" src="03_photo/3.4_room/P2.jpg" alt="ห้องปฏิบัติการคอมพิวเตอร์ 2" />
            <img class="media" draggable="false" src="03_photo/3.4_room/3.0.jpg" alt="เครื่องมืออุปกรณ์ไอที" />
            <img class="media" draggable="false" src="03_photo/3.4_room/5.0.jpg" alt="ห้องคอมพิวเตอร์กราฟิก" />
            <img class="media" draggable="false" src="03_photo/3.4_room/4.jpg" alt="ผลงานและกิจกรรมไอที" />
            <img class="media" draggable="false" src="03_photo/3.4_room/P1.jpg" alt="ห้องปฏิบัติการคอมพิวเตอร์ 1" />
            <img class="media" draggable="false" src="03_photo/3.4_room/P2.jpg" alt="ห้องปฏิบัติการคอมพิวเตอร์ 2" />
            <img class="media" draggable="false" src="03_photo/3.4_room/3.0.jpg" alt="เครื่องมืออุปกรณ์ไอที" />
            <img class="media" draggable="false" src="03_photo/3.4_room/5.0.jpg" alt="ห้องคอมพิวเตอร์กราฟิก" />
            <img class="media" draggable="false" src="03_photo/3.4_room/4.jpg" alt="ผลงานและกิจกรรมไอที" />
        </div>
    </div>
</section>

<!-- IT DEPARTMENT GSAP OBSERVER DECK ENGINE -->
<script>
window.initMwgHeroSection = function(forceReinit = false) {
    if (typeof gsap === 'undefined') return;
    if (typeof Observer !== 'undefined') gsap.registerPlugin(Observer);

    if (window.mwgHeroObserver && typeof window.mwgHeroObserver.kill === 'function') {
        window.mwgHeroObserver.kill();
        window.mwgHeroObserver = null;
    }

    const section = document.querySelector(".h-hero");
    if (!section) return;
    if (section.dataset.initialized === "true" && !forceReinit) return;
    section.dataset.initialized = "true";

    const content = section.querySelector(".hero-deck-content");
    const mediaList = [...section.querySelectorAll(".media")];
    const totalMedia = mediaList.length;
    if (!totalMedia || !content) return;

    let isMobile = window.innerWidth <= 900;
    if (isMobile) {
        const container = section.querySelector(".hero-deck-container");
        if (container) container.scrollLeft = (container.scrollWidth - container.clientWidth) / 2;
        return;
    }

    let currentY = 0;
    let activeIndex = Math.floor(totalMedia / 2);
    let isPressed = false;
    let isDragging = false;
    let offsets = [];

    const updateOffsets = () => {
        const containerWidth = section.querySelector(".hero-deck-container") ? section.querySelector(".hero-deck-container").clientWidth : 300;
        const fallbackH = containerWidth * (9 / 16);
        let accumulatedTop = 0;
        offsets = mediaList.map(card => {
            const cardH = card.offsetHeight || fallbackH;
            const topPos = card.offsetTop || accumulatedTop;
            accumulatedTop += cardH + 6;
            return topPos + cardH / 2;
        });
    };

    const findClosestIndex = () => {
        const total = mediaList.length;
        if (!total || offsets.length !== total) updateOffsets();
        const halfVh = window.innerHeight / 2;
        const contentTop = content.getBoundingClientRect().top;
        let closest = 0;
        let minDiff = Infinity;
        for (let i = 0; i < total; i++) {
            const centerPos = contentTop + offsets[i];
            const diff = Math.abs(centerPos - halfVh);
            if (diff < minDiff) {
                minDiff = diff;
                closest = i;
            }
        }
        return closest;
    };

    const updateDeckLayout = (targetIndex, { animate = true, duration = 0.5, ease = "power3.out" } = {}) => {
        const activeCard = mediaList[targetIndex];
        if (!activeCard) return;
        activeIndex = targetIndex;

        const vh = window.innerHeight;
        const halfVh = vh / 2;
        const targetY = -activeCard.offsetTop + halfVh - activeCard.offsetHeight / 2;
        const activeCenter = activeCard.offsetTop + activeCard.offsetHeight / 2;

        currentY = targetY;

        if (animate) {
            gsap.to(content, {
                y: targetY,
                ease: ease,
                duration: duration,
                onComplete: () => {
                    if (!isPressed) {
                        startAutoTimer();
                    }
                }
            });
        } else {
            gsap.set(content, { y: targetY });
        }

        mediaList.forEach((card, idx) => {
            let cardState;

            // Compute active 1.4x card bounds
            const activeHeightScaled = activeCard.offsetHeight * 1.4;
            const activeTopScaled = halfVh - activeHeightScaled / 2;
            const activeBottomScaled = halfVh + activeHeightScaled / 2;
            const gap = 24; // 24px gap between stacked cards

            if (idx === targetIndex) {
                cardState = { y: 0, scale: 1.4, autoAlpha: 1, zIndex: 10 };
            } else if (idx === targetIndex - 1) {
                const cardCenter = card.offsetTop + card.offsetHeight / 2;
                const naturalCenter = halfVh + (cardCenter - activeCenter);
                const desiredCenter = activeTopScaled - gap - card.offsetHeight / 2;
                cardState = {
                    y: desiredCenter - naturalCenter,
                    scale: 0.95,
                    autoAlpha: 1,
                    zIndex: 5
                };
            } else if (idx === targetIndex + 1) {
                const cardCenter = card.offsetTop + card.offsetHeight / 2;
                const naturalCenter = halfVh + (cardCenter - activeCenter);
                const desiredCenter = activeBottomScaled + gap + card.offsetHeight / 2;
                cardState = {
                    y: desiredCenter - naturalCenter,
                    scale: 0.95,
                    autoAlpha: 1,
                    zIndex: 5
                };
            } else {
                const cardCenter = card.offsetTop + card.offsetHeight / 2;
                const naturalCenter = halfVh + (cardCenter - activeCenter);
                const direction = idx < targetIndex ? -1 : 1;
                const desiredCenter = direction === -1 
                    ? activeTopScaled - gap * 2 - card.offsetHeight * 1.5
                    : activeBottomScaled + gap * 2 + card.offsetHeight * 1.5;
                cardState = {
                    y: desiredCenter - naturalCenter,
                    scale: 0.85,
                    autoAlpha: isPressed ? 0.7 : 0,
                    zIndex: 1
                };
            }

            if (animate) {
                gsap.to(card, { ...cardState, ease: ease, duration: duration });
            } else {
                gsap.set(card, cardState);
            }
        });
    };

    // Update real-time 3D Card Stack scales dynamically during dragging
    let lastDragClosest = -1;
    const updateRealtimeDragStack = () => {
        const closest = findClosestIndex();
        if (closest !== lastDragClosest) {
            lastDragClosest = closest;
            updateDeckLayout(closest, { animate: true, duration: 0.25, ease: "power2.out" });
        }
    };

    // Immediate initial layout calculation
    if (!isMobile) {
        updateOffsets();
        updateDeckLayout(activeIndex, { animate: false });
    }

    // Auto-advance Timer (2.5s)
    let autoTimer = null;
    const startAutoTimer = () => {
        stopAutoTimer();
        autoTimer = gsap.delayedCall(2.5, () => {
            autoTimer = null;
            if (isPressed) return;
            const nextIndex = (activeIndex + 1) % mediaList.length;
            updateDeckLayout(nextIndex, { duration: 0.8 });
        });
    };

    const stopAutoTimer = () => {
        if (autoTimer) {
            autoTimer.kill();
            autoTimer = null;
        }
    };

    const runLayoutInitialization = () => {
        updateOffsets();
        updateDeckLayout(activeIndex, { animate: false });

        // Headline Reveal Stagger
        const leftBox = section.querySelector(".l");
        const rightBox = section.querySelector(".r");
        if (leftBox && rightBox) {
            const gapWidth = rightBox.getBoundingClientRect().left - leftBox.getBoundingClientRect().right;
            gsap.fromTo(leftBox.querySelectorAll("span"), 
                { x: gapWidth / 2 }, 
                { x: 0, stagger: 0.07, ease: "expo.inOut", duration: 1, delay: 0.3 }
            );
            gsap.fromTo(rightBox.querySelectorAll("span"), 
                { x: -gapWidth / 2 }, 
                { x: 0, stagger: -0.07, ease: "expo.inOut", duration: 1, delay: 0.3 }
            );
        }

        gsap.to(".h-hero .join", {
            autoAlpha: 1,
            duration: 0.8,
            ease: "power4.inOut",
            delay: 0.5
        });

        // GSAP Observer Smooth 3D Drag (No DOM Mutation Stutter)
        if (typeof Observer !== 'undefined') {
            if (window.mwgHeroObserver && typeof window.mwgHeroObserver.kill === 'function') {
                window.mwgHeroObserver.kill();
                window.mwgHeroObserver = null;
            }

            const releaseHandler = () => {
                if (!isPressed) return;
                isPressed = false;
                const closest = findClosestIndex();
                updateDeckLayout(closest, { animate: true, duration: 0.5, ease: "power3.out" });
                section.classList.remove("grey");
            };

            window.mwgHeroObserver = Observer.create({
                target: section,
                type: "pointer,touch,wheel",
                preventDefault: false,
                onPress: () => {
                    isPressed = true;
                    stopAutoTimer();
                    section.classList.add("grey");
                },
                onRelease: releaseHandler,
                onReleaseBack: releaseHandler,
                onDrag: () => { isDragging = true; },
                onDragEnd: () => { isDragging = false; },
                onChangeY: (evt) => {
                    if (!isPressed) return;
                    const maxDragHeight = content.clientHeight - window.innerHeight;
                    currentY = gsap.utils.clamp(-maxDragHeight, 0, currentY + evt.deltaY);
                    gsap.to(content, { y: currentY, duration: 0.15, ease: "power1.out", overwrite: "auto" });
                    updateRealtimeDragStack();
                }
            });

            // Safety listeners for mouseup, touchend, and pointerup
            window.addEventListener("mouseup", releaseHandler);
            window.addEventListener("touchend", releaseHandler);
            window.addEventListener("pointerup", releaseHandler);
        }

        gsap.delayedCall(0.8, () => {
            section.classList.remove("intro-playing");
            startAutoTimer();
        });
    };

    // Execute layout initialization and Observer setup immediately
    runLayoutInitialization();

    // Handle window resize
    window.addEventListener('resize', () => {
        isMobile = window.innerWidth <= 900;
        if (!isMobile) {
            updateOffsets();
            updateDeckLayout(activeIndex, { animate: false });
        }
    });

    // Remeasure when photo images load and prevent native image drag
    mediaList.forEach(img => {
        img.addEventListener('dragstart', e => e.preventDefault());
        if (img.complete) {
            updateOffsets();
            updateDeckLayout(activeIndex, { animate: false });
        } else {
            img.addEventListener('load', () => {
                updateOffsets();
                updateDeckLayout(activeIndex, { animate: false });
            });
        }
    });

    // Force recalculation on window load and after minor delay
    window.addEventListener('load', () => {
        updateOffsets();
        updateDeckLayout(activeIndex, { animate: false });
    });
    setTimeout(() => {
        updateOffsets();
        updateDeckLayout(activeIndex, { animate: false });
    }, 400);
};
</script>
