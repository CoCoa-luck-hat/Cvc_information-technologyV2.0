/**
 * True Asset-Driven Preloader Engine
 * Tracks Real Image & Font Loading Progress (0% -> 100%)
 * Uses GSAP + HTML5 Canvas + Promise Asset Decoder
 */
(function initRealAssetPreloader() {
    const run = () => {
        const overlay = document.getElementById('preloader-overlay');
        if (!overlay) return;

        // 1. Session check: if already visited in this browser session, open immediately
        try {
            if (sessionStorage.getItem('cvc_it_preloader_shown') === 'true') {
                if (overlay.parentNode) overlay.parentNode.removeChild(overlay);
                document.body.style.overflow = '';
                if (typeof ScrollTrigger !== 'undefined') ScrollTrigger.refresh();
                return;
            }
        } catch (e) { }

        const curtainTop = document.getElementById('preloader-curtain-top');
        const curtainBottom = document.getElementById('preloader-curtain-bottom');
        const canvas = document.getElementById('preloader-canvas');
        const contentBox = document.getElementById('preloader-content');
        const counterEl = document.getElementById('preloader-counter');
        const logoWrapper = document.querySelector('.preloader-logo-wrapper');
        const titleText = document.getElementById('preloader-title');

        // Lock body scrolling during preloading
        document.body.style.overflow = 'hidden';

        let isCompleted = false;

        const hidePreloader = () => {
            if (isCompleted) return;
            isCompleted = true;

            if (animFrameId) cancelAnimationFrame(animFrameId);
            document.body.style.overflow = '';

            try {
                sessionStorage.setItem('cvc_it_preloader_shown', 'true');
            } catch (e) { }

            if (overlay) {
                gsap.to(overlay, {
                    opacity: 0,
                    duration: 0.25,
                    ease: 'power2.inOut',
                    onComplete: () => {
                        if (overlay && overlay.parentNode) {
                            overlay.parentNode.removeChild(overlay);
                        }
                        window.dispatchEvent(new Event('resize'));
                        if (typeof ScrollTrigger !== 'undefined') {
                            ScrollTrigger.refresh();
                        }
                    }
                });
            }
        };

        // Safety fallback timeout (5 seconds max in case of network stall)
        const fallbackTimer = setTimeout(() => {
            if (!isCompleted) {
                completeAndReveal(100);
            }
        }, 5000);

        if (typeof gsap === 'undefined') {
            clearTimeout(fallbackTimer);
            hidePreloader();
            return;
        }

        // Ambient Background Canvas Particles
        let animFrameId;
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let width = (canvas.width = window.innerWidth);
            let height = (canvas.height = window.innerHeight);

            const handleResize = () => {
                width = canvas.width = window.innerWidth;
                height = canvas.height = window.innerHeight;
            };
            window.addEventListener('resize', handleResize, { passive: true });

            const particles = Array.from({ length: 30 }, () => ({
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.7,
                vy: (Math.random() - 0.5) * 0.7,
                radius: Math.random() * 2 + 1,
                alpha: Math.random() * 0.5 + 0.2
            }));

            function draw() {
                ctx.clearRect(0, 0, width, height);
                particles.forEach((p) => {
                    p.x += p.vx;
                    p.y += p.vy;
                    if (p.x < 0 || p.x > width) p.vx *= -1;
                    if (p.y < 0 || p.y > height) p.vy *= -1;

                    ctx.fillStyle = `rgba(220, 38, 38, ${p.alpha})`;
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                    ctx.fill();
                });
                animFrameId = requestAnimationFrame(draw);
            }
            draw();
        }

        // 2. REAL ASSET PROMISE TRACKING
        // Collect all images in the document + font ready promise
        const images = Array.from(document.images);
        const totalAssets = Math.max(images.length + 1, 2); // +1 for Web Fonts
        let loadedAssets = 0;

        const currentProgress = { value: 0 };

        function updateProgress(targetPercent) {
            gsap.to(currentProgress, {
                value: targetPercent,
                duration: 0.25,
                ease: 'power1.out',
                onUpdate: () => {
                    if (counterEl) {
                        counterEl.textContent = `${Math.floor(currentProgress.value)}%`;
                    }
                }
            });
        }

        function onItemLoaded() {
            loadedAssets++;
            const realPercent = Math.min(Math.round((loadedAssets / totalAssets) * 100), 100);
            updateProgress(realPercent);

            if (loadedAssets >= totalAssets) {
                completeAndReveal(realPercent);
            }
        }

        function completeAndReveal(finalPercent) {
            clearTimeout(fallbackTimer);

            // Ensure counter reaches 100%
            gsap.to(currentProgress, {
                value: 100,
                duration: 0.2,
                onUpdate: () => {
                    if (counterEl) counterEl.textContent = `${Math.floor(currentProgress.value)}%`;
                },
                onComplete: () => {
                    // Play Final Entrance Sequence
                    const tl = gsap.timeline({
                        onComplete: hidePreloader
                    });

                    // 1. Counter Out & Logo Entrance
                    tl.to(counterEl, { opacity: 0, scale: 0.85, duration: 0.2, ease: 'power2.in' });
                    tl.to(logoWrapper, {
                        opacity: 1,
                        scale: 1.0,
                        duration: 0.35,
                        ease: 'back.out(1.4)'
                    }, '<+=0.05');

                    if (titleText) {
                        tl.set(titleText, { display: 'block' }, '<');
                        tl.to(titleText, { opacity: 1, y: 0, duration: 0.25 }, '<');
                    }

                    // 2. Smooth Curtain Opening
                    tl.to(contentBox, { opacity: 0, scale: 0.95, duration: 0.2, ease: 'power2.in' }, '+=0.2');
                    tl.to(curtainTop, {
                        yPercent: -100,
                        duration: 0.55,
                        ease: 'power2.inOut',
                        force3D: true,
                        onStart: () => {
                            document.body.style.overflow = '';
                        }
                    }, '-=0.08');
                    tl.to(curtainBottom, {
                        yPercent: 100,
                        duration: 0.55,
                        ease: 'power2.inOut',
                        force3D: true
                    }, '<');
                }
            });
        }

        // Track Fonts Loading
        if (document.fonts && document.fonts.ready) {
            document.fonts.ready.then(() => {
                onItemLoaded();
            }).catch(() => {
                onItemLoaded();
            });
        } else {
            onItemLoaded();
        }

        // Track All Image Loading / Decoding
        if (images.length === 0) {
            onItemLoaded();
        } else {
            images.forEach((img) => {
                if (img.complete && img.naturalWidth !== 0) {
                    onItemLoaded();
                } else if (typeof img.decode === 'function') {
                    img.decode().then(() => {
                        onItemLoaded();
                    }).catch(() => {
                        onItemLoaded();
                    });
                } else {
                    img.addEventListener('load', onItemLoaded, { once: true });
                    img.addEventListener('error', onItemLoaded, { once: true });
                }
            });
        }
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', run);
    } else {
        run();
    }
})();
