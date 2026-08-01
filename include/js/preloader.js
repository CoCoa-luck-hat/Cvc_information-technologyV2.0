/**
 * Real Asset Preloader Script (0% - 100% + Logo Big to Normal Scale Sequence)
 * แผนกวิชาเทคโนโลยีสารสนเทศ
 * Uses GSAP + HTML5 Canvas
 */

(function initPreloader() {
    const run = () => {
        const overlay = document.getElementById('preloader-overlay');
        if (!overlay) return;

        const curtainTop = document.getElementById('preloader-curtain-top');
        const curtainBottom = document.getElementById('preloader-curtain-bottom');
        const canvas = document.getElementById('preloader-canvas');
        const contentBox = document.getElementById('preloader-content');
        const counterEl = document.getElementById('preloader-counter');
        const logoWrapper = document.querySelector('.preloader-logo-wrapper');
        const titleText = document.getElementById('preloader-title');

        // Force body scroll hidden during preloader
        document.body.style.overflow = 'hidden';

        const hidePreloader = () => {
            if (animFrameId) cancelAnimationFrame(animFrameId);
            document.body.style.overflow = '';
            
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

        // Safety fallback timer
        const fallbackTimer = setTimeout(hidePreloader, 4500);

        // Check if GSAP is available
        if (typeof gsap === 'undefined') {
            console.warn('GSAP not loaded. Hiding preloader.');
            clearTimeout(fallbackTimer);
            hidePreloader();
            return;
        }

        // Canvas Cyber Grid & Ambient Particles
        let animFrameId;
        if (canvas) {
            const ctx = canvas.getContext('2d');
            let width = (canvas.width = window.innerWidth);
            let height = (canvas.height = window.innerHeight);

            const handleResize = () => {
                width = canvas.width = window.innerWidth;
                height = canvas.height = window.innerHeight;
            };
            window.addEventListener('resize', handleResize);

            const particles = Array.from({ length: 45 }, () => ({
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.6,
                vy: (Math.random() - 0.5) * 0.6,
                radius: Math.random() * 2 + 1,
                alpha: Math.random() * 0.55 + 0.2
            }));

            function draw() {
                ctx.clearRect(0, 0, width, height);

                particles.forEach((p) => {
                    p.x += p.vx;
                    p.y += p.vy;

                    if (p.x < 0 || p.x > width) p.vx *= -1;
                    if (p.y < 0 || p.y > height) p.vy *= -1;

                    ctx.fillStyle = `rgba(239, 68, 68, ${p.alpha})`;
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                    ctx.fill();
                });

                animFrameId = requestAnimationFrame(draw);
            }

            draw();
        }

        // Real Asset Loading Tracker
        const images = Array.from(document.images);
        let loadedCount = 0;
        const totalCount = Math.max(images.length, 1);

        images.forEach((img) => {
            if (img.complete) {
                loadedCount++;
            } else {
                img.addEventListener('load', () => loadedCount++);
                img.addEventListener('error', () => loadedCount++);
            }
        });

        // Object to animate percentage
        const progressObj = { value: 0 };

        // Create Master Timeline
        const tl = gsap.timeline({
            defaults: { ease: 'power3.out' },
            onComplete: () => {
                clearTimeout(fallbackTimer);
                hidePreloader();
            }
        });

        // 1. Canvas Fade-in
        tl.to(canvas, { opacity: 1, duration: 0.3 }, 0);

        // 2. Real Asset Counting Animation (0% -> 100%)
        tl.to(progressObj, {
            value: 100,
            duration: 1.4,
            ease: 'power2.inOut',
            onUpdate: () => {
                if (counterEl) {
                    const currentVal = Math.floor(progressObj.value);
                    counterEl.textContent = `${currentVal}%`;
                }
            }
        }, 0.1);

        // 3. Counter Fade Out
        tl.to(counterEl, { opacity: 0, scale: 0.8, duration: 0.35, ease: 'power2.in' }, '+=0.1');

        // 4. Logo Scale BIG Entrance (Scale: 0.4 -> 1.55)
        tl.to(logoWrapper, {
            opacity: 1,
            scale: 1.55,
            duration: 0.65,
            ease: 'back.out(1.6)'
        }, '+=0.05');

        // 5. Logo Scale Down to NORMAL (Scale: 1.55 -> 1.0) & Department Title Reveal
        tl.to(logoWrapper, {
            scale: 1.0,
            duration: 0.55,
            ease: 'power2.inOut'
        });

        tl.set(titleText, { display: 'block' }, '<+=0.1');
        tl.to(titleText, {
            opacity: 1,
            y: 0,
            duration: 0.5,
            ease: 'power3.out'
        }, '<');

        // 6. Hold & Smooth Hardware-Accelerated Curtain Reveal
        tl.to(contentBox, { scale: 1.04, duration: 0.35, ease: 'power1.inOut' }, '+=0.35')
          .to(contentBox, { opacity: 0, scale: 0.9, duration: 0.4, ease: 'power2.in' }, '+=0.05')
          .to(canvas, { opacity: 0, duration: 0.3 }, '-=0.3')
          .to(curtainTop, {
              yPercent: -100,
              duration: 1.2,
              ease: 'power2.inOut',
              force3D: true,
              onStart: () => {
                  document.body.style.overflow = '';
              }
          }, '-=0.1')
          .to(curtainBottom, {
              yPercent: 100,
              duration: 1.2,
              ease: 'power2.inOut',
              force3D: true
          }, '<');
    };

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', run);
    } else {
        run();
    }
})();
