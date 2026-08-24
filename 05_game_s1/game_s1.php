<?php
/**
 * SECTION 1: H-HERO IT DEPARTMENT HIGH VOCATIONAL DIPLOMA (ปวส. คอมพิวเตอร์เกมและแอนิเมชัน)
 * 05_game_s1/game_s1.php
 * 
 * Authentic Hero Section for CVC IT Department (ปวส. สาขาคอมพิวเตอร์เกมและแอนิเมชัน).
 * Features:
 * - GSAP Observer 3D Vertical Photo Gallery Stack & Scrub Dragging
 * - 5 Primary Game Development, 3D Art & Lab Photos
 * - Thai Kinetic Split Wording Headlines ("หลักสูตร ปวส." / "เกมและแอนิเมชัน")
 * - Auto-cycling photo deck (2.5s interval)
 * - Responsive Mobile Horizontal Scroll with touch/drag support (< 900px)
 */
?>

<!-- DEPENDENCY LOADER (GSAP 3, SCROLLTRIGGER, OBSERVER) -->
<script>
(function() {
    function initAll() {
        if (typeof window.initPvsGameHeroSection === 'function') {
            window.initPvsGameHeroSection();
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
    --pvg-white: #FFFFFF;
    --pvg-black: #0A0A0B;
    --pvg-grey: #777777;
    --grid-margin: 25px;
    --font-prompt: 'Prompt', sans-serif !important;
}

/* Master Section Wrapper */
section.pvg-hero {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 650px;
    background-color: var(--pvg-white) !important;
    color: var(--pvg-black);
    overflow: hidden;
    user-select: none;
    -webkit-user-select: none;
    box-sizing: border-box;
    font-family: var(--font-prompt);
    z-index: 5;
    margin: 0;
    padding: 0;
}

section.pvg-hero .sr-only {
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
.pvg-hero > .wording-headline {
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

.pvg-hero > .wording-headline .l {
    width: calc(50% - 20vw - var(--grid-margin));
    display: flex;
    gap: 8px;
    justify-content: flex-start;
    flex-wrap: nowrap;
    white-space: nowrap;
    overflow: visible;
}

.pvg-hero > .wording-headline .r {
    width: calc(50% - 20vw - var(--grid-margin));
    display: flex;
    gap: 0px;
    justify-content: flex-start;
    flex-wrap: nowrap;
    white-space: nowrap;
    overflow: visible;
    color: var(--pvg-black);
}

.pvg-hero > .wording-headline span {
    display: inline-block;
    color: var(--pvg-black);
    font-family: var(--font-prompt);
}

/* Container & Vertical Card Deck Engine */
.pvg-hero .hero-deck-container {
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

.pvg-hero .hero-deck-content {
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

.pvg-hero .media {
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

.pvg-hero .media:active {
    cursor: grabbing;
}

.pvg-hero.grey .media {
    filter: brightness(0.85);
}

/* Subtitle Tagline (Bottom Left) */
.pvg-hero .join {
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

.pvg-join-mobile {
    display: none;
}
.pvg-join-desktop {
    display: inline-block;
}

/* Responsive Rules (< 900px) */
@media (max-width: 900px) {
    .pvg-hero {
        height: 100vh !important;
        height: 100dvh !important;
        min-height: 100vh !important;
        min-height: 100dvh !important;
        max-height: 100dvh !important;
        padding: 85px 16px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        box-sizing: border-box;
        overflow: hidden;
    }

    .pvg-hero > .wording-headline {
        position: relative;
        top: auto;
        left: auto;
        right: auto;
        transform: none;
        font-size: clamp(26px, 6.5vw, 38px);
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 0 0 10px;
        padding: 0;
        width: 100%;
        line-height: 1.25;
        gap: 2px;
    }
    
    .pvg-hero > .wording-headline .l, 
    .pvg-hero > .wording-headline .r {
        width: 100%;
        justify-content: center;
        gap: 6px;
    }

    .pvg-join-desktop {
        display: none !important;
    }
    .pvg-join-mobile {
        display: inline-flex !important;
        align-items: center;
        white-space: nowrap;
    }

    /* Modern Compact Glassmorphism Pill Badge on Mobile */
    .pvg-hero .join {
        position: relative;
        bottom: auto;
        left: auto;
        right: auto;
        opacity: 1 !important;
        visibility: visible !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        background: rgba(220, 38, 38, 0.08);
        border: 1px solid rgba(220, 38, 38, 0.22);
        border-radius: 9999px;
        padding: 5px 14px;
        color: #b91c1c;
        font-size: 12.5px;
        font-weight: 600;
        line-height: 1;
        margin: 0 auto 20px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(220, 38, 38, 0.05);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        max-width: fit-content;
    }

    .pvg-hero .hero-deck-container {
        width: 100vw;
        max-width: 100vw;
        height: auto;
        overflow-x: auto;
        overflow-y: hidden;
        margin: 0 -16px;
        padding: 8px 0 16px;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        touch-action: pan-x;
        scrollbar-width: none;
        -ms-overflow-style: none;
        cursor: grab;
        user-select: none;
    }

    .pvg-hero .hero-deck-container:active {
        cursor: grabbing;
    }

    .pvg-hero .hero-deck-container::-webkit-scrollbar {
        display: none;
    }

    .pvg-hero .hero-deck-content {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        right: auto !important;
        transform: none !important;
        flex-direction: row;
        width: max-content;
        height: auto;
        gap: 16px;
        padding: 0 max(20px, calc(50vw - 160px));
        margin: 0;
        pointer-events: auto;
    }

    .pvg-hero .media {
        width: 78vw;
        max-width: 320px;
        min-height: auto;
        aspect-ratio: 16 / 9;
        scroll-snap-align: center;
        border-radius: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        transform: none !important;
        cursor: pointer;
        pointer-events: auto;
        user-select: none;
        flex-shrink: 0;
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Mobile Carousel Pagination Dots */
    .pvg-hero-dots {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
        margin-top: 14px;
    }

    .pvg-hero-dot {
        width: 7px;
        height: 7px;
        border-radius: 9999px;
        background: rgba(0, 0, 0, 0.18);
        transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        cursor: pointer;
    }

    .pvg-hero-dot.active {
        width: 22px;
        background: #dc2626;
    }
}

@media (min-width: 901px) {
    .pvg-hero-dots {
        display: none;
    }
}
</style>

<!-- MAIN HERO SECTION HTML MARKUP -->
<section class="pvg-hero pr intro-playing" id="pvg-hero-section">
    <h1 class="sr-only">หลักสูตร ปวส. คอมพิวเตอร์เกมและแอนิเมชัน วิทยาลัยอาชีวศึกษาเชียงราย CVC IT Game</h1>

    <!-- Left & Right Split Headline -->
    <div class="wording-headline pa f f-space title-s">
        <div class="l">
            <span class="w1">หลักสูตร</span>
            <span class="w2" style="color: red;">ปวส.</span>
        </div>
        <div class="r right">
            <span class="w3">เกมและ</span>
            <span class="w4">แอนิเมชัน</span>
        </div>
    </div>

    <!-- Subtitle Tagline -->
    <div class="join pa body-s">
        <span class="pvg-join-desktop">สร้างสรรค์จินตนาการสู่โลกเกมมิ่ง 3D แอนิเมชัน <br>ปฏิบัติจริง 80% ต่อยอดระดับปริญญาตรีและพร้อมทำงานทันที CVC IT</span>
        <span class="pvg-join-mobile">Game Engine & 3D Art • CVC IT ปวส.</span>
    </div>

    <!-- Center Card Stack Photo Gallery Container -->
    <div class="hero-deck-container">
        <div class="hero-deck-content">
            <img class="media" draggable="false" src="03_photo/3.4_room/IMG_2963.jpg" alt="ผลงานและกิจกรรมเกม 1" />
            <img class="media" draggable="false" src="03_photo/3.4_room/IMG_2990.jpg" alt="ผลงานและกิจกรรมเกม 2" />
            <img class="media" draggable="false" src="03_photo/3.4_room/IMG_2966.jpg" alt="สตูดิโอพัฒนาเกม" />
            <img class="media" draggable="false" src="03_photo/3.4_room/IMG_2969.jpg" alt="ทีมพัฒนาเกมและแอนิเมชัน" />
            <img class="media" draggable="false" src="02_design/game1.png" alt="ผลงานและกิจกรรมเกม 1" />
            <img class="media" draggable="false" src="03_photo/3.4_room/IMG_2973.jpg" alt="ห้องปฏิบัติการดิจิทัลอาร์ตและเกม" />
        </div>
    </div>

    <!-- Mobile Slider Dots Indicator -->
    <div class="pvg-hero-dots">
        <?php for($d = 0; $d < 10; $d++): ?>
            <span class="pvg-hero-dot <?= $d === 0 ? 'active' : '' ?>"></span>
        <?php endfor; ?>
    </div>
</section>

<!-- PVS GAME GSAP OBSERVER DECK ENGINE -->
<script>
window.initPvsGameHeroSection = function(forceReinit = false) {
    if (typeof gsap === 'undefined') return;
    if (typeof Observer !== 'undefined') gsap.registerPlugin(Observer);

    const section = document.querySelector("#pvg-hero-section");
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
        const dots = section.querySelectorAll(".pvg-hero-dot");
        if (container) {
            let isDown = false;
            let startX = 0;
            let scrollLeft = 0;

            const handleStart = (clientX) => {
                isDown = true;
                startX = clientX;
                scrollLeft = container.scrollLeft;
                container.style.scrollBehavior = 'auto';
                container.style.scrollSnapType = 'none';
            };

            const handleMove = (clientX, e) => {
                if (!isDown) return;
                const walk = clientX - startX;
                if (Math.abs(walk) > 3) {
                    if (e && e.cancelable) e.preventDefault();
                    container.scrollLeft = scrollLeft - walk;
                }
            };

            const handleEnd = () => {
                if (!isDown) return;
                isDown = false;
                container.style.scrollBehavior = 'smooth';
                container.style.scrollSnapType = 'x mandatory';
                const cardWidth = mediaList[0] ? mediaList[0].offsetWidth + 16 : 300;
                const targetIdx = Math.max(0, Math.min(mediaList.length - 1, Math.round(container.scrollLeft / cardWidth)));
                container.scrollTo({ left: targetIdx * cardWidth, behavior: 'smooth' });
            };

            container.addEventListener('touchstart', (e) => {
                if (e.touches.length === 1) handleStart(e.touches[0].clientX);
            }, { passive: true });

            container.addEventListener('touchmove', (e) => {
                if (e.touches.length === 1) handleMove(e.touches[0].clientX, e);
            }, { passive: false });

            container.addEventListener('touchend', handleEnd, { passive: true });
            container.addEventListener('touchcancel', handleEnd, { passive: true });

            container.addEventListener('mousedown', (e) => {
                e.preventDefault();
                handleStart(e.clientX);
            });

            window.addEventListener('mousemove', (e) => {
                if (isDown) handleMove(e.clientX, e);
            });

            window.addEventListener('mouseup', () => {
                if (isDown) handleEnd();
            });

            mediaList.forEach(img => {
                img.addEventListener('dragstart', (e) => e.preventDefault());
            });

            let scrollTimeout;
            container.addEventListener("scroll", () => {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    const cardWidth = mediaList[0] ? mediaList[0].offsetWidth + 16 : 300;
                    const currentIdx = Math.round(container.scrollLeft / cardWidth);
                    dots.forEach((dot, idx) => {
                        dot.classList.toggle("active", idx === Math.min(dots.length - 1, Math.max(0, currentIdx)));
                    });
                }, 25);
            }, { passive: true });

            dots.forEach((dot, idx) => {
                dot.addEventListener("click", () => {
                    const cardWidth = mediaList[0] ? mediaList[0].offsetWidth + 16 : 300;
                    container.scrollTo({ left: idx * cardWidth, behavior: 'smooth' });
                });
            });
        }
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
            const activeHeightScaled = activeCard.offsetHeight * 1.4;
            const activeTopScaled = halfVh - activeHeightScaled / 2;
            const activeBottomScaled = halfVh + activeHeightScaled / 2;
            const gap = 24;

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

    let lastDragClosest = -1;
    const updateRealtimeDragStack = () => {
        const closest = findClosestIndex();
        if (closest !== lastDragClosest) {
            lastDragClosest = closest;
            updateDeckLayout(closest, { animate: true, duration: 0.25, ease: "power2.out" });
        }
    };

    if (!isMobile) {
        updateOffsets();
        updateDeckLayout(activeIndex, { animate: false });
    }

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

        gsap.to(".pvg-hero .join", {
            autoAlpha: 1,
            duration: 0.8,
            ease: "power4.inOut",
            delay: 0.5
        });

        if (typeof Observer !== 'undefined') {
            if (window.pvgMwgHeroObserver && typeof window.pvgMwgHeroObserver.kill === 'function') {
                window.pvgMwgHeroObserver.kill();
                window.pvgMwgHeroObserver = null;
            }

            const releaseHandler = () => {
                if (!isPressed) return;
                isPressed = false;
                const closest = findClosestIndex();
                updateDeckLayout(closest, { animate: true, duration: 0.5, ease: "power3.out" });
                section.classList.remove("grey");
            };

            window.pvgMwgHeroObserver = Observer.create({
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

            window.addEventListener("mouseup", releaseHandler);
            window.addEventListener("touchend", releaseHandler);
            window.addEventListener("pointerup", releaseHandler);
        }

        gsap.delayedCall(0.8, () => {
            section.classList.remove("intro-playing");
            startAutoTimer();
        });
    };

    runLayoutInitialization();

    window.addEventListener('resize', () => {
        isMobile = window.innerWidth <= 900;
        if (!isMobile) {
            updateOffsets();
            updateDeckLayout(activeIndex, { animate: false });
        }
    });

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

    window.addEventListener('load', () => {
        updateOffsets();
        updateDeckLayout(activeIndex, { animate: false });
    });
    setTimeout(() => {
        updateOffsets();
        updateDeckLayout(activeIndex, { animate: false });
    }, 400);
};

// Immediate bottom auto-initialization
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => initPvsGameHeroSection(true));
} else {
    initPvsGameHeroSection(true);
}
</script>
