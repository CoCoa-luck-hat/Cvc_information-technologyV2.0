/**
 * Awwwards-Level Interactive Script
 * Handles: Custom Cursor, Preloader, Magnetic Buttons, and Page Transitions via GSAP.
 */

document.addEventListener("DOMContentLoaded", () => {
    // 1. DYNAMIC DOM GENERATION FOR AWWWARDS ELEMENTS
    createInteractiveElements();

    // 2. INITIALIZE SERVICES
    initCursor();
    initPreloader();
    initMagneticElements();
    initPageTransitions();
    initSmartNavbar();

    // 3. INITIALIZE SCROLL TRIGGERS & TEXT SPLITTING
    initGlobalBackgroundParallax();
    initHeroParallax();
    initVideoHeroBlinds();
    initStorytellingTransition();
    init3DCardStacking();
    initTextSplitting();
    initHeadingFadeAnimations();
    initCareersWipe();
    initKoraComparisonScroll();
    initGalleryHorizontal();
    init3DSpatialPortalTransitions();
    initStepsPinScroll();
    initRibbonsMomentumHover();
});

/**
 * Dynamically inserts the required HTML structures so templates don't need manual changes.
 */
function createInteractiveElements() {
    // Custom Cursor Elements disabled per user request
    document.body.classList.remove("cursor-active");

    // Curtain Wipe Element

    if (!document.getElementById("transition-curtain")) {
        const curtain = document.createElement("div");
        curtain.id = "transition-curtain";
        document.body.appendChild(curtain);
    }
}

/**
 * Smart Hide-on-Scroll and Floating Capsule Navbar transition
 */
let lastScrollTop = 0;
function initSmartNavbar() {
    const navbarWrapper = document.getElementById("main-navbar-wrapper");
    if (!navbarWrapper) return;

    const threshold = 15;
    const floatingThreshold = 80;

    const handleScroll = (scrollTop) => {
        // Hide-on-scroll toggle
        const delta = scrollTop - lastScrollTop;
        if (scrollTop > threshold && delta > 4) {
            // Scrolling down: Hide
            navbarWrapper.classList.add("navbar-hidden");
        } else if (delta < -4 || scrollTop <= threshold) {
            // Scrolling up or near top: Show
            navbarWrapper.classList.remove("navbar-hidden");
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    };

    window.addEventListener("scroll", () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        handleScroll(scrollTop);
    }, { passive: true });

    // Support Lenis smooth scroll if active
    if (window.lenis && typeof window.lenis.on === "function") {
        window.lenis.on('scroll', (e) => {
            handleScroll(e.scroll);
        });
    }
}

/**
 * GSAP ScrollTrigger for vertical wipe reveal comparison
 */
function initCareersWipe() {
    const revealSection = document.getElementById("careers-reveal-section");
    if (!revealSection) return;

    const layerAfter = revealSection.querySelector(".layer-after");
    const revealDivider = revealSection.querySelector(".reveal-divider");
    const revealSticky = revealSection.querySelector(".reveal-sticky");
    if (!layerAfter || !revealDivider || !revealSticky) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: revealSection,
                pin: revealSticky,
                start: "top top",
                end: "bottom bottom",
                scrub: 0.5,
                anticipatePin: 1
            }
        });

        tl.to(revealDivider, {
            opacity: 1,
            duration: 0.05,
            ease: "none"
        }, 0)
            .to(layerAfter, {
                clipPath: "inset(0% 0% 0% 0%)",
                ease: "none"
            }, 0)
            .to(revealDivider, {
                top: "100%",
                ease: "none"
            }, 0)
            .to(revealDivider, {
                opacity: 0,
                duration: 0.05,
                ease: "none"
            }, ">-0.05");
    }
}


/**
 * Panorama Horizontal Pinned Scroll Gallery
 */
function initGalleryHorizontal() {
    if (window.innerWidth < 768) return;
    const track = document.querySelector(".gallery-horizontal-track");
    if (!track) return;

    const cards = track.querySelectorAll(".panorama-card");
    const rulerItems = document.querySelectorAll(".ruler-item");
    const sticky = document.querySelector(".gallery-sticky");
    const section = document.getElementById("gallery-horizontal-section");
    if (!cards.length || !sticky || !section) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // Reset track position and sticky properties
        gsap.set(track, { x: 0 });
        gsap.set(sticky, { scale: 1, borderRadius: "0px", opacity: 1 });

        const getScrollAmount = () => {
            return -(track.scrollWidth - window.innerWidth);
        };

        const galleryTl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                pin: sticky,
                start: "top top",
                end: "bottom bottom",
                scrub: 1,
                invalidateOnRefresh: true,
                onUpdate: (self) => {
                    // Normalize progress over 75% scroll movement so last card holds for remaining 25% (~1.5-2 steps)
                    const normProgress = Math.min(1, self.progress / 0.75);
                    const activeIndex = Math.min(
                        Math.floor(normProgress * cards.length),
                        cards.length - 1
                    );

                    rulerItems.forEach((item, idx) => {
                        if (idx === activeIndex) {
                            item.classList.add("active");
                        } else {
                            item.classList.remove("active");
                        }
                    });
                }
            }
        });

        // Horizontal scroll movement (0% -> 75% of section height)
        galleryTl.to(track, {
            x: getScrollAmount,
            ease: "none",
            duration: 0.75
        })
        // Card 06 Hold Phase (75% -> 100% of section height: stays 100% locked and steady)
        .to(track, {
            x: getScrollAmount,
            ease: "none",
            duration: 0.25
        });

        // Entrance Staggered Reveal Animation for Gallery Header and Panorama Cards
        const headerContainer = section.querySelector(".gallery-header-anim");
        if (headerContainer) {
            gsap.fromTo(headerContainer,
                { y: 50, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.9,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: section,
                        start: "top 80%",
                        toggleActions: "play none none reverse"
                    }
                }
            );
        }

        if (cards.length) {
            gsap.fromTo(cards,
                { y: 70, opacity: 0, scale: 0.95 },
                {
                    y: 0,
                    opacity: 1,
                    scale: 1,
                    duration: 0.8,
                    stagger: 0.12,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: section,
                        start: "top 75%",
                        toggleActions: "play none none reverse"
                    }
                }
            );
        }
    }

    // 3D Reveal animation for section_steps title & subtle wave parallax
    const stepsHeader = document.querySelector(".steps-title .heading-xl");
    const waveBorder = document.querySelector(".section-border.is-steps .section-border-svg");

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        if (stepsHeader) {
            gsap.fromTo(stepsHeader,
                { y: 60, opacity: 0, scale: 0.95 },
                {
                    y: 0,
                    opacity: 1,
                    scale: 1,
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: ".steps-title",
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    }
                }
            );
        }

        if (waveBorder) {
            gsap.set(waveBorder, { transformOrigin: "center bottom" });
            gsap.to(waveBorder, {
                scaleY: 1.2,
                ease: "none",
                scrollTrigger: {
                    trigger: ".section_steps",
                    start: "top bottom",
                    end: "top 20%",
                    scrub: 0.5
                }
            });
        }
    }
}


/**
 * Custom Cursor Logic
 */
let mouseX = 0, mouseY = 0;
let ringX = 0, ringY = 0;

function initCursor() {
    // Custom cursor disabled per user request
    return;
    const ring = document.querySelector(".custom-cursor-ring");

    if (!dot || !ring) return;

    // Track mouse coordinates
    window.addEventListener("mousemove", (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;

        // Immediate position for center dot
        gsap.set(dot, { x: mouseX, y: mouseY });
    });

    // Smooth lerp for ring follower
    gsap.ticker.add(() => {
        const dt = 1.0 - Math.pow(0.7, gsap.ticker.deltaRatio()); // framerate independent lerp
        ringX += (mouseX - ringX) * dt;
        ringY += (mouseY - ringY) * dt;
        gsap.set(ring, { x: ringX, y: ringY });
    });

    // Bind Hover States
    bindCursorHovers();
}

function bindCursorHovers() {
    const ring = document.querySelector(".custom-cursor-ring");
    if (!ring) return;

    // Remove old classes
    ring.classList.remove("cursor-hover", "cursor-magnetic-hover");

    // Standard hoverables
    const hoverables = document.querySelectorAll("a, button, select, input[type='submit'], [role='button'], .lightbox");
    hoverables.forEach(item => {
        item.addEventListener("mouseenter", () => {
            if (item.hasAttribute("data-magnetic")) {
                ring.classList.add("cursor-magnetic-hover");
            } else {
                ring.classList.add("cursor-hover");
            }
        });
        item.addEventListener("mouseleave", () => {
            ring.classList.remove("cursor-hover", "cursor-magnetic-hover");
        });
    });
}

/**
 * 100% Authentic Lama Lama (js-loader / ll-loader) Preloader Sequence
 */
function initPreloader() {
    const preloader = document.querySelector(".js-loader") || document.getElementById("preloader");
    if (!preloader) {
        triggerHeroReveal();
        return;
    }

    const counter = preloader.querySelector(".js-progress") || document.getElementById("preloadCounter");
    const loaderData = { progress: 0 };

    const tl = gsap.timeline({
        onComplete: () => {
            finishPreloader();
        }
    });

    tl.to(loaderData, {
        progress: 100,
        duration: 1.5,
        ease: "power2.inOut",
        onUpdate: () => {
            if (counter) counter.innerText = Math.round(loaderData.progress);
        }
    });

    function finishPreloader(isSkipped = false) {
        tl.kill();

        window.removeEventListener("keydown", handleSkipKeys);
        preloader.removeEventListener("click", handlePreloaderClick);

        // Smooth Opacity Fade Out (1-to-1 with lamalama.com exit)
        gsap.to(preloader, {
            opacity: 0,
            duration: isSkipped ? 0.35 : 0.65,
            ease: "power2.out",
            onComplete: () => {
                preloader.remove();
                document.body.classList.remove("preloader-active");
                triggerHeroReveal();
            }
        });
    }

    // Skip Handlers
    function handleSkipKeys(e) {
        if (e.key === " " || e.key === "Enter" || e.key === "Escape") {
            e.preventDefault();
            finishPreloader(true);
        }
    }

    function handlePreloaderClick() {
        finishPreloader(true);
    }

    window.addEventListener("keydown", handleSkipKeys);
    preloader.addEventListener("click", handlePreloaderClick);
}



/**
 * 100% Authentic Lama Lama Hero Reveal Sequence
 */
function triggerHeroReveal() {
    const heroVideo = document.querySelector(".home-hero-video");
    const navbar = document.getElementById("main-navbar-wrapper");
    const lines = document.querySelectorAll(".hero-line-animate");
    const subtitle = document.getElementById("heroSubtitle");
    const cta = document.getElementById("heroCtaGroup");
    const scrollIndicator = document.getElementById("heroScrollIndicator");

    // 1. Hero Video 3D Camera Zoom Reveal
    if (heroVideo) {
        gsap.fromTo(heroVideo,
            { scale: 1.18 },
            { scale: 1.0, duration: 1.4, ease: "power3.out" }
        );
    }

    // 2. Navbar Spring Drop Entrance
    if (navbar) {
        gsap.fromTo(navbar,
            { y: -60, opacity: 0 },
            { y: 0, opacity: 1, duration: 1.0, ease: "power4.out", delay: 0.15, onComplete: () => gsap.set(navbar, { clearProps: "transform,y" }) }
        );
    }

    // 3. Masked 3D Line Text Reveal
    if (lines.length) {
        lines.forEach((line, index) => {
            if (line.dataset.maskDone) return;
            line.dataset.maskDone = "true";

            const text = line.innerText;
            line.innerHTML = `<span class="hero-mask-wrap"><span class="hero-mask-inner">${text}</span></span>`;

            const inner = line.querySelector(".hero-mask-inner");
            gsap.fromTo(inner,
                { yPercent: 110, rotateX: -35, opacity: 0 },
                { yPercent: 0, rotateX: 0, opacity: 1, duration: 1.1, ease: "power4.out", delay: 0.2 + (index * 0.14) }
            );
        });
    }

    // 4. Subtitle, CTA Group & Scroll Indicator Reveal
    if (subtitle) {
        gsap.fromTo(subtitle,
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.9, ease: "power3.out", delay: 0.45 }
        );
    }
    if (cta) {
        gsap.fromTo(cta,
            { y: 25, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.9, ease: "power3.out", delay: 0.6 }
        );
    }
    if (scrollIndicator) {
        gsap.fromTo(scrollIndicator,
            { opacity: 0 },
            { opacity: 1, duration: 1.1, ease: "power2.out", delay: 0.75 }
        );
    }
}

/**
 * Magnetic Button effect for immersive UI depth
 */
function initMagneticElements() {
    const magneticItems = document.querySelectorAll("[data-magnetic]");

    magneticItems.forEach(item => {
        item.addEventListener("mousemove", (e) => {
            const rect = item.getBoundingClientRect();
            const relX = e.clientX - rect.left;
            const relY = e.clientY - rect.top;

            // Calculate distance relative to center
            const xOffset = relX - rect.width / 2;
            const yOffset = relY - rect.height / 2;

            // Pull the parent element
            gsap.to(item, {
                x: xOffset * 0.35,
                y: yOffset * 0.35,
                duration: 0.3,
                ease: "power2.out"
            });

            // Pull inner content/text slightly less to create 3D depth
            const textContent = item.querySelector("span, i, div");
            if (textContent) {
                gsap.to(textContent, {
                    x: xOffset * 0.15,
                    y: yOffset * 0.15,
                    duration: 0.3,
                    ease: "power2.out"
                });
            }
        });

        item.addEventListener("mouseleave", () => {
            // Elastic release on leave
            gsap.to(item, {
                x: 0,
                y: 0,
                duration: 0.6,
                ease: "elastic.out(1, 0.3)"
            });

            const textContent = item.querySelector("span, i, div");
            if (textContent) {
                gsap.to(textContent, {
                    x: 0,
                    y: 0,
                    duration: 0.6,
                    ease: "elastic.out(1, 0.3)"
                });
            }
        });
    });
}

/**
 * PJAX Custom Page Transition
 */
function initPageTransitions() {
    document.addEventListener("click", (e) => {
        const link = e.target.closest("a");

        if (!link) return;

        const url = link.getAttribute("href");
        const target = link.getAttribute("target");

        // Skip external, blank targets, hashes, and download links
        if (!url ||
            url.startsWith("#") ||
            url.startsWith("javascript:") ||
            url.startsWith("mailto:") ||
            url.startsWith("tel:") ||
            target === "_blank" ||
            link.hasAttribute("download") ||
            url.includes("admission.vec.go.th") ||
            url.includes("cvc.ac.th/webcvc")) {
            return;
        }

        // Check if URL points to same domain/subdomain directory
        try {
            const linkHost = new URL(link.href).host;
            if (linkHost !== window.location.host) return;
        } catch (err) {
            // Handle relative URLs if host extraction fails
            if (url.startsWith("http://") || url.startsWith("https://")) return;
        }

        // Valid internal link: trigger page transition
        e.preventDefault();

        // Lock actions during swap
        document.body.classList.add("transition-lock");

        const curtain = document.getElementById("transition-curtain");
        if (curtain) {
            curtain.classList.add("active");
            // Slide Curtain UP
            gsap.to(curtain, {
                yPercent: -100,
                duration: 0.6,
                ease: "power3.inOut",
                onStart: () => {
                    // Reset curtain position to bottom if it was slid up
                    gsap.set(curtain, { yPercent: 100 });
                }
            });

            gsap.to(curtain, {
                yPercent: 0,
                duration: 0.6,
                ease: "power3.inOut",
                onComplete: () => {
                    // Fetch new page content
                    performPageSwap(url);
                }
            });
        } else {
            // Fallback if no curtain
            performPageSwap(url);
        }
    });

    // Handle browser back/forward buttons
    window.addEventListener("popstate", () => {
        const curtain = document.getElementById("transition-curtain");
        if (curtain) {
            gsap.set(curtain, { yPercent: 100 });
            gsap.to(curtain, {
                yPercent: 0,
                duration: 0.5,
                ease: "power3.inOut",
                onComplete: () => {
                    performPageSwap(window.location.href, false);
                }
            });
        } else {
            performPageSwap(window.location.href, false);
        }
    });
}

/**
 * Fetch HTML of the new page and swap dynamic contents
 */
function performPageSwap(url, pushToHistory = true) {
    fetch(url)
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const newDoc = parser.parseFromString(html, "text/html");

            const newContainer = newDoc.getElementById("swup-container");
            const currentContainer = document.getElementById("swup-container");

            if (newContainer && currentContainer) {
                // Update DOM content
                currentContainer.innerHTML = newContainer.innerHTML;

                // Update page metadata
                document.title = newDoc.title;

                // Update navbar active states by copying over class names from navbar items
                const currentNavbar = document.getElementById("navbarCollapse");
                const newNavbar = newDoc.getElementById("navbarCollapse");
                if (currentNavbar && newNavbar) {
                    currentNavbar.innerHTML = newNavbar.innerHTML;
                    // Re-bind mobile menu toggle since navbar HTML was overwritten
                    const mobileBtn = document.getElementById('mobileMenuToggle');
                    const collapseMenu = document.getElementById('navbarCollapse');
                    if (mobileBtn && collapseMenu) {
                        mobileBtn.addEventListener('click', () => {
                            collapseMenu.classList.toggle('hidden');
                            collapseMenu.classList.toggle('flex');
                        });
                    }
                }

                // Push history state if requested
                if (pushToHistory) {
                    history.pushState(null, "", url);
                }

                // Scroll to top
                if (typeof lenis !== "undefined") {
                    lenis.scrollTo(0, { immediate: true });
                } else {
                    window.scrollTo(0, 0);
                }

                // Re-initialize page scripts
                reinitPageScripts();

                // Animate dynamic entry fade-in
                gsap.fromTo(currentContainer,
                    { opacity: 0, y: 15 },
                    { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" }
                );

                // Slide Curtain DOWN (wipe out)
                const curtain = document.getElementById("transition-curtain");
                if (curtain) {
                    gsap.to(curtain, {
                        yPercent: -100,
                        duration: 0.6,
                        ease: "power3.inOut",
                        onComplete: () => {
                            document.body.classList.remove("transition-lock");
                            curtain.classList.remove("active");
                        }
                    });
                } else {
                    document.body.classList.remove("transition-lock");
                }
            } else {
                // Fallback redirect if page structure doesn't match
                window.location.href = url;
            }
        })
        .catch(err => {
            console.error("PJAX load error: ", err);
            window.location.href = url;
        });
}

/**
 * Re-runs scripts and event bindings for dynamic page content
 */
function reinitPageScripts() {
    // 1. Re-bind custom cursor hover hooks
    bindCursorHovers();

    // 2. Re-bind magnetic buttons hooks
    initMagneticElements();

    // 3. Re-initialize WOW.js
    if (typeof WOW !== "undefined") {
        new WOW().init();
    }

    // 4. Re-initialize Owl Carousels
    if (typeof jQuery !== "undefined" && jQuery.fn.owlCarousel) {
        // Main slider
        jQuery(".header-carousel").owlCarousel({
            animateOut: 'fadeOut',
            items: 1,
            margin: 0,
            stagePadding: 0,
            autoplay: true,
            smartSpeed: 500,
            dots: true,
            loop: true,
            nav: true,
            navText: [
                '<i class="bi bi-arrow-left"></i>',
                '<i class="bi bi-arrow-right"></i>'
            ]
        });

        // Testimonials slider
        jQuery(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1500,
            center: false,
            dots: false,
            loop: true,
            margin: 25,
            nav: true,
            navText: [
                '<i class="fa fa-arrow-right"></i>',
                '<i class="fa fa-arrow-left"></i>'
            ],
            responsiveClass: true,
            responsive: {
                0: { items: 1 },
                576: { items: 1 },
                768: { items: 2 },
                992: { items: 2 },
                1200: { items: 2 }
            }
        });
    }

    // 5. Re-initialize Lightbox
    if (typeof lightbox !== "undefined") {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    }

    // 6. Kill and re-create ScrollTrigger scroll-linked animations
    if (typeof ScrollTrigger !== "undefined") {
        ScrollTrigger.getAll().forEach(trigger => trigger.kill());
    }

    // 7. Re-apply card tilt interactions in test.js
    if (typeof initTiltEffect === "function") {
        initTiltEffect();
    }

    // 8. Re-apply all scroll triggers & text splitting
    initGlobalBackgroundParallax();
    initHeroParallax();
    init3DCardStacking();
    initTextSplitting();
    initCareersWipe();
    initGalleryHorizontal();
}

/**
 * Global Background Parallax using GSAP ScrollTrigger
 */
function initGlobalBackgroundParallax() {
    const gridBg = document.getElementById("globalGridBg");
    if (!gridBg) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
        gsap.to(gridBg, {
            y: "15vh",
            ease: "none",
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: true
            }
        });
    }
}

/**
 * Hero Section Elements Parallax using GSAP ScrollTrigger
 */
function initHeroParallax() {
    const heroTrack = document.getElementById("heroScrollTrack");
    if (!heroTrack) return;

    const headline = document.getElementById("heroHeadline");
    const subtitle = document.getElementById("heroSubtitle");
    const ctaGroup = document.getElementById("heroCtaGroup");
    const indicator = document.getElementById("heroScrollIndicator");
    if (!headline || !subtitle || !ctaGroup || !indicator) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: heroTrack,
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });

        tl.to(headline, { scale: 0.88, y: 80, opacity: 0, ease: "none" }, 0)
            .to(subtitle, { y: 40, opacity: 0, ease: "none" }, 0)
            .to(ctaGroup, { y: 60, opacity: 0, ease: "none" }, 0)
            .to(indicator, { opacity: 0, ease: "none" }, 0);
    }
}

/**
 * 3D Card Deck Stacking Animation using GSAP ScrollTrigger with Pause Phase & Snap
 */
function init3DCardStacking() {
    const titleStage = document.getElementById("majorsTitleStage");
    const titleContent = document.getElementById("majorsTitleContent");
    const cards = gsap.utils.toArray("#majorsSection .majors-card");

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // 1. Fullscreen Title Pinning & Scrubbed Timeline (Pin -> Fade In -> Hold -> Scale Up Fade Out)
        if (titleStage && titleContent) {
            const isMobile = window.innerWidth < 768;
            const endVal = isMobile ? "+=60%" : "+=120%";
            const titleTl = gsap.timeline({
                scrollTrigger: {
                    trigger: titleStage,
                    start: "top top",
                    end: endVal,
                    pin: true,
                    scrub: 0.8,
                    invalidateOnRefresh: true
                }
            });

            titleTl
                // Stage 1: Fade In to Dead Center (starts ONLY after pinning at top top)
                .fromTo(titleContent,
                    { opacity: 0, scale: 0.88, y: 0 },
                    { opacity: 1, scale: 1, y: 0, duration: 1, ease: "power2.out" }
                )
                // Hold phase in dead center
                .to(titleContent, { opacity: 1, scale: 1, y: 0, duration: 1 })
                // Stage 2: Scale Up Expand & Fade Out
                .to(titleContent,
                    { opacity: 0, scale: 1.25, y: 0, duration: 1, ease: "power2.in" }
                );
        }

        // 2. 3D Card Deck Stacking (Dynamically Centered Vertically on Desktop & Mobile)
        const isDesktop = window.innerWidth >= 768;
        const animDistance = isDesktop ? 450 : 320;

        // Calculate dynamic top offset per card to center it vertically on screen
        const getTopOffset = (cardEl) => {
            const vh = window.innerHeight;
            const cardH = cardEl ? cardEl.offsetHeight : (isDesktop ? 450 : 520);
            const calculatedCenter = Math.round((vh - cardH) / 2);
            const minTop = isDesktop ? 95 : 85;
            return Math.max(minTop, calculatedCenter);
        };

        // Set explicit initial states and per-card dynamic topOffset pinning
        cards.forEach((card, index) => {
            const topOffset = getTopOffset(card);

            gsap.set(card, {
                transformOrigin: "center top",
                opacity: 0,
                y: index === 0 ? 0 : 70,
                scale: index === 0 ? 0.88 : 0.96
            });

            // Pin each card at its dynamic topOffset until the end of majorsSection
            ScrollTrigger.create({
                trigger: card,
                start: `top ${topOffset}px`,
                endTrigger: "#majorsSection",
                end: "bottom bottom",
                pin: true,
                pinSpacing: false,
                anticipatePin: 1,
                invalidateOnRefresh: true
            });
        });

        // Entrance Transition for Card 1 (In-place scale-up 0.88 -> 1.0 & fade-in as title stage fades out)
        const firstCard = cards[0];
        if (firstCard) {
            const firstTopOffset = getTopOffset(firstCard);
            gsap.to(firstCard, {
                opacity: 1,
                y: 0,
                scale: 1,
                ease: "none",
                scrollTrigger: {
                    trigger: firstCard,
                    start: `top ${firstTopOffset + animDistance}px`,
                    end: `top ${firstTopOffset}px`,
                    scrub: true,
                    invalidateOnRefresh: true
                }
            });
        }

        // Entrance & Exit Transitions (Frame-Accurate 1:1 Scrub)
        cards.forEach((card, index) => {
            const nextCard = cards[index + 1];
            if (nextCard) {
                const nextTopOffset = getTopOffset(nextCard);

                // Next card slides in and fades in 0 -> 1 to its centered topOffset
                gsap.to(nextCard, {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    ease: "none",
                    scrollTrigger: {
                        trigger: nextCard,
                        start: `top ${nextTopOffset + animDistance}px`,
                        end: `top ${nextTopOffset}px`,
                        scrub: true,
                        invalidateOnRefresh: true
                    }
                });

                // Current card scales back to 0.88, moves up (-30px), and fades out 1 -> 0
                gsap.to(card, {
                    scale: 0.88,
                    y: -30,
                    opacity: 0,
                    ease: "none",
                    scrollTrigger: {
                        trigger: nextCard,
                        start: `top ${nextTopOffset + animDistance}px`,
                        end: `top ${nextTopOffset}px`,
                        scrub: true,
                        invalidateOnRefresh: true
                    }
                });
            }
        });

        // Exit Transition for the Last Card (Fades & Scales out smoothly before unpinning to prevent warp flicker)
        const lastCard = cards[cards.length - 1];
        if (lastCard) {
            gsap.to(lastCard, {
                scale: 0.88,
                y: -30,
                opacity: 0,
                ease: "none",
                scrollTrigger: {
                    trigger: "#majorsSection",
                    start: `bottom-=${animDistance}px bottom`,
                    end: "bottom bottom",
                    scrub: true,
                    invalidateOnRefresh: true
                }
            });
        }
    }
}

/**
 * Character-by-Character Scroll-Driven Text Splitting Animation
 */
function initTextSplitting() {
    const splitTargets = document.querySelectorAll(".split-text");
    if (!splitTargets.length) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        splitTargets.forEach(el => {
            if (el.dataset.splitInitialized) return;
            el.dataset.splitInitialized = "true";

            const text = el.textContent.trim();

            // Safe segmentation for Thai combining vowels and tone marks
            let segments;
            if (typeof Intl !== "undefined" && Intl.Segmenter) {
                const segmenter = new Intl.Segmenter("th", { granularity: "grapheme" });
                segments = [...segmenter.segment(text)].map(s => s.segment);
            } else {
                segments = [...text];
            }

            el.innerHTML = "";

            segments.forEach(char => {
                const span = document.createElement("span");
                span.textContent = char === " " ? "\u00A0" : char;
                el.appendChild(span);
            });

            const chars = el.querySelectorAll("span");
            gsap.from(chars, {
                scrollTrigger: {
                    trigger: el,
                    start: "top 88%",
                    end: "top 62%",
                    scrub: 1,
                    invalidateOnRefresh: true
                },
                y: 50,
                opacity: 0,
                rotateX: -55,
                stagger: 0.02,
                ease: "power2.out"
            });
        });
    }
}

/**
 * Scrubbed Scroll-Driven Fade In & Fade Out Animation for Headings & Badges
 */
function initHeadingFadeAnimations() {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    // Standard dual-phase (fade in & fade out) for non-sticky section headings
    const fadeTargets = document.querySelectorAll(".fade-heading");
    fadeTargets.forEach(el => {
        if (el.dataset.fadeAnimInitialized) return;
        el.dataset.fadeAnimInitialized = "true";

        // Set initial hidden & slightly dropped state
        gsap.set(el, { opacity: 0, y: 35, rotateX: -12, transformPerspective: 1000 });

        // Create scrubbed dual-phase timeline for enter (fade in) & exit (fade out)
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: el,
                start: "top 92%",   // Begins fading in as element enters viewport bottom
                end: "bottom 8%",   // Finishes fading out as element leaves viewport top
                scrub: 0.6,         // Smooth scrub matching scroll speed
                invalidateOnRefresh: true
            }
        });

        // Phase 1: Fade IN + slide up from below (0% -> 35% of timeline)
        tl.to(el, {
            opacity: 1,
            y: 0,
            rotateX: 0,
            duration: 0.35,
            ease: "power2.out"
        })
            // Phase 2: Hold fully visible in center of screen (35% -> 65% of timeline)
            .to(el, {
                opacity: 1,
                y: 0,
                duration: 0.30
            })
            // Phase 3: Fade OUT + slide slightly upward as it exits top (65% -> 100% of timeline)
            .to(el, {
                opacity: 0,
                y: -30,
                duration: 0.35,
                ease: "power1.in"
            });
    });

    // Fade IN ONLY (No fade out) for headings in sticky sections (Gallery & Careers)
    const fadeInOnlyTargets = document.querySelectorAll(".fade-heading-in-only");
    fadeInOnlyTargets.forEach(el => {
        if (el.dataset.fadeAnimInitialized) return;
        el.dataset.fadeAnimInitialized = "true";

        gsap.set(el, { opacity: 0, y: 35, rotateX: -12, transformPerspective: 1000 });

        gsap.to(el, {
            scrollTrigger: {
                trigger: el,
                start: "top 90%",
                end: "top 65%",
                scrub: 0.6,
                invalidateOnRefresh: true
            },
            opacity: 1,
            y: 0,
            rotateX: 0,
            ease: "power2.out"
        });
    });
}

/**
 * Animated Hero Louver Blinds scroll animation
 */
function initVideoHeroBlinds() {
    const hero = document.querySelector(".home-hero-container");
    const cover = document.querySelector(".home-hero-cover");
    if (!hero || !cover) return;

    let blindsCount = window.innerWidth <= 767 ? 25 : (window.innerWidth <= 1024 ? 35 : 52);
    const stripWidthPercent = 100 / blindsCount;

    cover.innerHTML = "";
    for (let i = 0; i < blindsCount; i++) {
        const strip = document.createElement("div");
        strip.classList.add("blind-strip-v");
        strip.style.left = `${i * stripWidthPercent}%`;
        strip.style.width = `calc(${stripWidthPercent}% + 1px)`;
        strip.style.top = "0";
        strip.style.height = "100%";
        strip.style.background = "#b71616"; // Crimson Red
        strip.style.transformOrigin = "left center";
        strip.style.transform = "rotateY(-90deg)";
        strip.style.opacity = "0";
        strip.style.position = "absolute";
        strip.style.transformStyle = "preserve-3d";
        cover.appendChild(strip);
    }

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "#heroScrollTrack",
                pin: "#heroScrollTrack .sticky-viewport",
                start: "top top",
                end: "+=220%",
                scrub: true
            }
        });

        // Rotate blinds closed and fade in to cover, starting after 35% delay
        tl.fromTo(".blind-strip-v",
            {
                rotationY: -90,
                opacity: 0
            },
            {
                rotationY: 0,
                opacity: 1,
                stagger: 0.005,
                ease: "power2.out",
                duration: 0.65
            },
            0.35
        )
            // Fade out hero content group in the first 40% of scroll
            .to("#heroContentGroup", {
                opacity: 0,
                scale: 0.85,
                y: -80,
                autoAlpha: 0,
                ease: "power1.in",
                duration: 0.4
            }, 0)
            // Fade out scroll indicator in the first 20% of scroll
            .to("#heroScrollIndicator", {
                opacity: 0,
                autoAlpha: 0,
                ease: "power1.in",
                duration: 0.2
            }, 0);
    }
}

/**
 * Storytelling Section curved top boundary & image clip-path reveal scroll animation
 */
function initStorytellingTransition() {
    const radiusSection = document.querySelector(".radius-section");
    if (!radiusSection) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        // Responsive target radius when flattened
        let targetRadius = "150px";
        if (window.innerWidth <= 767) {
            targetRadius = "50px";
        } else if (window.innerWidth <= 1024) {
            targetRadius = "100px";
        }

        // Animate curved top radius as it enters view
        gsap.to(radiusSection, {
            borderTopLeftRadius: targetRadius,
            borderTopRightRadius: targetRadius,
            scrollTrigger: {
                trigger: radiusSection,
                start: "top 95%",
                end: "+=600",
                scrub: true
            }
        });

        // Animate the image clip path reveal
        const revealWrapper = radiusSection.querySelector(".general-reveal-img");
        const img = revealWrapper ? revealWrapper.querySelector("img") : null;
        if (revealWrapper && img) {
            gsap.timeline({
                scrollTrigger: {
                    trigger: radiusSection,
                    start: "top 65%",
                    toggleActions: "play none none none"
                }
            })
                .fromTo(revealWrapper,
                    { clipPath: "polygon(0 0, 0 0, 0 0, 0 0)" },
                    { clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)", duration: 1.2, ease: "power2.out" }
                )
                .fromTo(img,
                    { scale: 1.4 },
                    { scale: 1, duration: 1.2, ease: "power2.out" },
                    0
                );
        }

        // Animate the text entries
        const subtitle = radiusSection.querySelector(".story-subtitle");
        const paragraph = radiusSection.querySelector(".story-p");
        const button = radiusSection.querySelector(".story-button");

        if (subtitle || paragraph || button) {
            const tlText = gsap.timeline({
                scrollTrigger: {
                    trigger: radiusSection,
                    start: "top 70%"
                }
            });

            if (subtitle) {
                tlText.from(subtitle, {
                    y: 20,
                    opacity: 0,
                    duration: 0.5,
                    ease: "power2.out"
                });
            }
            if (paragraph) {
                tlText.from(paragraph, {
                    y: 25,
                    opacity: 0,
                    duration: 0.6,
                    ease: "power2.out"
                }, subtitle ? "-=0.3" : "0");
            }
            if (button) {
                tlText.from(button, {
                    y: 20,
                    opacity: 0,
                    duration: 0.5,
                    ease: "power2.out"
                }, paragraph ? "-=0.3" : "0");
            }
        }
    }
}

/**
 * Seamless 3D Spatial Portal Transitions connecting major sections
 */
function init3DSpatialPortalTransitions() {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") return;
    gsap.registerPlugin(ScrollTrigger);

    const spatialSections = document.querySelectorAll(".portal-spatial-section");
    spatialSections.forEach(section => {
        gsap.fromTo(section,
            {
                scale: 0.95,
                opacity: 0.85,
                rotateX: -4,
                transformPerspective: 1200
            },
            {
                scrollTrigger: {
                    trigger: section,
                    start: "top 85%",
                    end: "top 30%",
                    scrub: 0.8,
                    invalidateOnRefresh: true
                },
                scale: 1,
                opacity: 1,
                rotateX: 0,
                ease: "power2.out"
            }
        );
    });
}

/**
 * Pizza Amici Steps Pinned Orbit Carousel GSAP Animation
 */
function initStepsPinScroll() {
    if (window.innerWidth < 1024) return;
    const pinSection = document.querySelector(".steps-pin-height");
    const container = document.querySelector(".steps-container");
    if (!pinSection || !container) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        const circle1 = document.querySelector(".steps-circle.is-01");
        const circle2 = document.querySelector(".steps-circle.is-02");
        const circle3 = document.querySelector(".steps-circle.is-03");
        const circle4 = document.querySelector(".steps-circle.is-04");
        const pizza = document.querySelector(".steps-pizza");

        // Clear pre-existing inline style transforms to prevent double stacking
        [circle1, circle2, circle3, circle4, pizza].forEach(el => {
            if (el) {
                gsap.set(el, { clearProps: 'all' });
                delete el._gsap;
                el.style.transform = '';
            }
        });

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: pinSection,
                pin: container,
                start: "top top",
                end: "bottom bottom",
                scrub: 0.1,
                anticipatePin: 1,
                invalidateOnRefresh: true
            }
        });

        // Phase 1: Slide in immediately from screen edge into column positions (0% to 20% of scroll)
        if (circle1) {
            tl.fromTo(circle1,
                { transform: "translate(10%, 0%) rotate(20deg)" },
                { transform: "translate(-7%, 0%) rotate(5.62deg)", ease: "none", duration: 0.2 }, 0);
        }
        if (circle2) {
            tl.fromTo(circle2,
                { transform: "translate(15%, 0%) rotate(22deg)" },
                { transform: "translate(-3%, 0%) rotate(8.33deg)", ease: "none", duration: 0.2 }, 0);
        }
        if (circle3) {
            tl.fromTo(circle3,
                { transform: "translate(20%, 0%) rotate(24deg)" },
                { transform: "translate(2%, 0%) rotate(11.04deg)", ease: "none", duration: 0.2 }, 0);
        }
        if (circle4) {
            tl.fromTo(circle4,
                { transform: "translate(25%, 0%) rotate(26deg)" },
                { transform: "translate(5%, 0%) rotate(15.10deg)", ease: "none", duration: 0.2 }, 0);
        }

        // Phase 2: Rotate cards along arc while staying fixed in columns (20% to 70% of scroll)
        if (circle1) {
            tl.to(circle1, { transform: "translate(-7%, 0%) rotate(-6deg)", ease: "none", duration: 0.5 }, 0.2);
        }
        if (circle2) {
            tl.to(circle2, { transform: "translate(-3%, 0%) rotate(-2deg)", ease: "none", duration: 0.5 }, 0.2);
        }
        if (circle3) {
            tl.to(circle3, { transform: "translate(2%, 0%) rotate(2deg)", ease: "none", duration: 0.5 }, 0.2);
        }
        if (circle4) {
            tl.to(circle4, { transform: "translate(5%, 0%) rotate(8deg)", ease: "none", duration: 0.5 }, 0.2);
        }

        // Phase 3: Simultaneous Sinking Exit Animation (70% to 100% of scroll)
        if (circle1) {
            tl.to(circle1, { transform: "translate(-7%, 85vh) rotate(-6deg)", ease: "power1.in", duration: 0.3 }, 0.7);
        }
        if (circle2) {
            tl.to(circle2, { transform: "translate(-3%, 85vh) rotate(-2deg)", ease: "power1.in", duration: 0.3 }, 0.7);
        }
        if (circle3) {
            tl.to(circle3, { transform: "translate(2%, 85vh) rotate(2deg)", ease: "power1.in", duration: 0.3 }, 0.7);
        }
        if (circle4) {
            tl.to(circle4, { transform: "translate(5%, 85vh) rotate(8deg)", ease: "power1.in", duration: 0.3 }, 0.7);
        }

        // Continuous Emblem Rotation (0% to 100%)
        if (pizza) {
            tl.fromTo(pizza,
                { rotate: 20 },
                { rotate: -20, ease: "none", duration: 1.0 }, 0);
        }
    }
}

/**
 * Section Ribbons Momentum Cursor Tilt Interaction
 */
function initRibbonsMomentumHover() {
    const ribbons = document.querySelectorAll(".ribbon-wrap");
    if (!ribbons.length) return;

    ribbons.forEach(wrap => {
        const target = wrap.querySelector(".ribbon");
        if (!target) return;

        wrap.addEventListener("mousemove", (e) => {
            const rect = wrap.getBoundingClientRect();
            const relX = (e.clientX - rect.left) / rect.width - 0.5;
            const relY = (e.clientY - rect.top) / rect.height - 0.5;

            const tiltX = relY * -4;
            const tiltY = relX * 10;

            if (typeof gsap !== "undefined") {
                gsap.to(target, {
                    rotate: tiltX,
                    x: tiltY,
                    duration: 0.4,
                    ease: "power2.out"
                });
            } else {
                target.style.transform = `rotate(${tiltX}deg) translateX(${tiltY}px)`;
            }
        });

        wrap.addEventListener("mouseleave", () => {
            if (typeof gsap !== "undefined") {
                gsap.to(target, {
                    rotate: 0,
                    x: 0,
                    duration: 0.6,
                    ease: "power2.out"
                });
            } else {
                target.style.transform = `rotate(0deg) translateX(0px)`;
            }
        });
    });
}



/**
 * GSAP ScrollTrigger for Kora Framer Comparison Section ("What changes when you work with us.")
 */
function initKoraComparisonScroll() {
    const section = document.getElementById("koraComparisonSection");
    if (!section) return;

    const stickyViewport = section.querySelector(".kora-sticky-viewport");
    const titleBox = document.getElementById("koraTitleBox");
    const titleLine1 = document.getElementById("koraTitleLine1");
    const titleLine2 = document.getElementById("koraTitleLine2");
    const cardsContainer = document.getElementById("koraCardsContainer");
    const cardBefore = document.getElementById("koraCardBefore");
    const cardMiddle = document.getElementById("koraCardMiddle");
    const cardAfter = document.getElementById("koraCardAfter");

    if (!stickyViewport || !titleBox || !titleLine1 || !titleLine2 || !cardsContainer || !cardBefore) return;

    if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);

        const isDesktop = window.innerWidth >= 1024;
        const shiftX = isDesktop ? 380 : 0;
        const shiftY = isDesktop ? 0 : 320;
        const splitTextShift = isDesktop ? 220 : 80;

        // Initial States
        gsap.set(titleBox, { opacity: 1 });
        gsap.set(titleLine1, { opacity: 1, x: 0, y: 0, scale: 1 });
        gsap.set(titleLine2, { opacity: 1, x: 0, y: 0, scale: 1 });
        gsap.set(cardsContainer, { opacity: 1, scale: 1, y: 0 });

        // Card 1 starts hidden in Center
        gsap.set(cardBefore, { opacity: 0, scale: 0.95, x: 0, y: 0 });
        
        // Card 2 starts hidden off to the Right
        if (cardMiddle) {
            gsap.set(cardMiddle, { opacity: 0, scale: 0.9, x: isDesktop ? 200 : 0, y: isDesktop ? 0 : shiftY });
        }
        
        // Card 3 starts hidden further to the Right
        if (cardAfter) {
            gsap.set(cardAfter, { opacity: 0, scale: 0.88, x: isDesktop ? shiftX + 200 : 0, y: isDesktop ? 0 : shiftY * 2 });
        }

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: section,
                pin: stickyViewport,
                start: "top top",
                end: "bottom bottom",
                scrub: 0.7,
                invalidateOnRefresh: true
            }
        });

        // 1. Phase 1: Entrance Hold (0% -> 10%) - Split Title lines at rest
        tl.to(titleLine1, { opacity: 1, x: 0, y: 0, duration: 0.10 }, 0)
            .to(titleLine2, { opacity: 1, x: 0, y: 0, duration: 0.10 }, 0)

            // 2. Phase 2: Split Text Exit & Reveal Card 1 Centered (10% -> 35%)
            .to(titleLine1, {
                x: -splitTextShift,
                y: -180,
                opacity: 0,
                ease: "power2.inOut",
                duration: 0.25
            }, 0.10)
            .to(titleLine2, {
                x: splitTextShift,
                y: -180,
                opacity: 0,
                ease: "power2.inOut",
                duration: 0.25
            }, 0.10)
            .to(cardBefore, {
                opacity: 1,
                scale: 1.0,
                x: 0,
                y: 0,
                ease: "power2.out",
                duration: 0.25
            }, 0.10)

            // 3. Phase 3: Card 1 shifts Left while Card 2 (ปวส. IT) and Card 3 (ปวส. Game Animation) slide in SIMULTANEOUSLY TOGETHER (35% -> 80%)
            .to(cardBefore, {
                x: isDesktop ? -shiftX : 0,
                y: isDesktop ? 0 : -shiftY,
                opacity: 1,
                ease: "power2.inOut",
                duration: 0.40
            }, 0.35);

        if (cardMiddle) {
            tl.to(cardMiddle, {
                opacity: 1,
                scale: 1.0,
                x: 0,
                y: 0,
                ease: "power2.out",
                duration: 0.40
            }, 0.35);
        }

        if (cardAfter) {
            tl.to(cardAfter, {
                opacity: 1,
                scale: 1.0,
                x: isDesktop ? shiftX : 0,
                y: 0,
                ease: "power2.out",
                duration: 0.40
            }, 0.35);
        }

        // 4. Phase 4: Reading Lock (80% -> 100%) - All 3 cards locked in 3-column view
        tl.to({}, { duration: 0.20 });
    } else {
        // Fallback for non-GSAP environments
        if (cardBefore) cardBefore.style.opacity = "1";
        if (cardMiddle) cardMiddle.style.opacity = "1";
        if (cardAfter) cardAfter.style.opacity = "1";
    }
}

/**
 * Mobile Touch Carousel Slider Controller ([ 01 / 04 ] Counter + Arrows)
 */
function initMobileStepsSlider() {
    const track = document.querySelector('.mobile-steps-track');
    const counter = document.getElementById('mobileStepCounter');
    const prevBtn = document.getElementById('prevMobileStepBtn');
    const nextBtn = document.getElementById('nextMobileStepBtn');

    if (!track || !counter) return;

    const cards = track.querySelectorAll('.mobile-step-card');
    const total = cards.length;

    const updateCounter = () => {
        const cardWidth = cards[0]?.offsetWidth || 300;
        const gap = 16;
        const scrollPos = track.scrollLeft;
        const activeIndex = Math.min(total - 1, Math.max(0, Math.round(scrollPos / (cardWidth + gap))));
        const numStr = String(activeIndex + 1).padStart(2, '0');
        const totalStr = String(total).padStart(2, '0');
        counter.textContent = `[ ${numStr} / ${totalStr} ]`;
    };

    track.addEventListener('scroll', updateCounter, { passive: true });

    if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const cardWidth = cards[0]?.offsetWidth || 300;
            track.scrollBy({ left: -(cardWidth + 16), behavior: 'smooth' });
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const cardWidth = cards[0]?.offsetWidth || 300;
            track.scrollBy({ left: cardWidth + 16, behavior: 'smooth' });
        });
    }

    updateCounter();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMobileStepsSlider);
} else {
    initMobileStepsSlider();
}










