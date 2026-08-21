/**
 * Activity Journal Gallery & Lightbox Engine
 * Module: include/js/modules/gallery.js
 */
(function() {
    function initEventGallery(data, limit = 12) {
        const eventItems = Array.isArray(data) ? data : (window.__EVENT_ITEMS__ || []);
        if (!eventItems.length) return;

        let currentLightboxIdx = 0;
        let currentFilteredIndices = [];
        let currentVisibleLimit = limit;
        const loadStep = 6;

        // DOM Elements
        const modal = document.getElementById("evt-lightbox-modal");
        const lbImg = document.getElementById("evt-lb-main-img");
        const lbBadgeCat = document.getElementById("evt-lb-badge-cat");
        const lbTitle = document.getElementById("evt-lb-title");
        const lbCaption = document.getElementById("evt-lb-caption");
        const lbCounter = document.getElementById("evt-lb-counter");
        const btnClose = document.getElementById("evt-btn-close-lb");
        const btnPrev = document.getElementById("evt-btn-prev-lb");
        const btnNext = document.getElementById("evt-btn-next-lb");
        const loadMoreWrap = document.getElementById("evt-load-more-wrap");
        const btnLoadMore = document.getElementById("evt-btn-load-more");
        const loadCountBadge = document.getElementById("evt-load-count-badge");

        // ── Open Cinematic Lightbox Modal ──────────────────────────────────────
        window.openEventLightbox = function(globalIdx) {
            if (!modal || !lbImg || !eventItems[globalIdx]) return;
            currentLightboxIdx = globalIdx;
            updateLightboxContent();

            modal.classList.add("active");
            document.body.style.overflow = "hidden";

            if (typeof gsap !== 'undefined') {
                gsap.fromTo("#evt-lb-img-wrap", 
                    { opacity: 0, scale: 0.95, y: 15 }, 
                    { opacity: 1, scale: 1, y: 0, duration: 0.35, ease: "power2.out" }
                );
            }
        };

        // ── Close Lightbox Modal
        window.closeEventLightbox = function() {
            if (!modal) return;
            if (typeof gsap !== 'undefined') {
                gsap.to("#evt-lb-img-wrap", {
                    opacity: 0,
                    scale: 0.96,
                    y: 10,
                    duration: 0.2,
                    ease: "power2.in",
                    onComplete: () => {
                        modal.classList.remove("active");
                        document.body.style.overflow = "";
                    }
                });
            } else {
                modal.classList.remove("active");
                document.body.style.overflow = "";
            }
        };

        function updateLightboxContent() {
            const item = eventItems[currentLightboxIdx];
            if (!item) return;

            lbImg.src = item.src;
            lbImg.alt = item.title;
            if (lbBadgeCat) lbBadgeCat.textContent = item.catLabel;
            if (lbTitle) lbTitle.textContent = item.title;
            if (lbCaption) lbCaption.textContent = item.caption;

            const currentPosInFiltered = currentFilteredIndices.indexOf(currentLightboxIdx);
            const displayIndex = currentPosInFiltered !== -1 ? currentPosInFiltered + 1 : currentLightboxIdx + 1;
            const displayTotal = currentFilteredIndices.length > 0 ? currentFilteredIndices.length : eventItems.length;
            if (lbCounter) lbCounter.textContent = `${displayIndex} / ${displayTotal}`;
        }

        function navigateLightbox(direction) {
            if (!currentFilteredIndices.length) return;
            const currentPos = currentFilteredIndices.indexOf(currentLightboxIdx);
            let nextPos;

            if (direction === "next") {
                nextPos = (currentPos + 1) % currentFilteredIndices.length;
            } else {
                nextPos = (currentPos - 1 + currentFilteredIndices.length) % currentFilteredIndices.length;
            }

            currentLightboxIdx = currentFilteredIndices[nextPos];

            if (typeof gsap !== 'undefined') {
                gsap.fromTo("#evt-lb-img-wrap", 
                    { opacity: 0.4, scale: 0.98 }, 
                    { opacity: 1, scale: 1, duration: 0.25, ease: "power2.out" }
                );
            }
            updateLightboxContent();
        }

        // Attach Lightbox Button Event Listeners
        if (btnClose) btnClose.addEventListener("click", window.closeEventLightbox);
        if (btnPrev) btnPrev.addEventListener("click", (e) => { e.stopPropagation(); navigateLightbox("prev"); });
        if (btnNext) btnNext.addEventListener("click", (e) => { e.stopPropagation(); navigateLightbox("next"); });

        // Keyboard Shortcuts (Escape, Left, Right)
        window.addEventListener("keydown", (e) => {
            if (!modal || !modal.classList.contains("active")) return;
            if (e.key === "Escape") window.closeEventLightbox();
            else if (e.key === "ArrowLeft") navigateLightbox("prev");
            else if (e.key === "ArrowRight") navigateLightbox("next");
        });

        // ── Dynamic Multi-Column Flex Distribution ─────────────────────────────
        function distributeEventTiles(isAppending = false) {
            const col0 = document.getElementById("evt-col-0");
            const col1 = document.getElementById("evt-col-1");
            const col2 = document.getElementById("evt-col-2");
            if (!col0) return;

            // Determine column count based on viewport
            const vw = window.innerWidth;
            let numCols = 3;
            if (vw < 640) numCols = 1;
            else if (vw < 1024) numCols = 2;

            if (col1) col1.style.display = numCols >= 2 ? "flex" : "none";
            if (col2) col2.style.display = numCols >= 3 ? "flex" : "none";

            const cols = [col0];
            if (numCols >= 2 && col1) cols.push(col1);
            if (numCols >= 3 && col2) cols.push(col2);

            // Filter matching items
            currentFilteredIndices = eventItems.map((_, idx) => idx);
            const matchingItems = eventItems.map((item, idx) => ({ item, globalIdx: idx }));

            // Slice items based on visible limit
            const visibleItems = matchingItems.slice(0, currentVisibleLimit);
            const remainingCount = matchingItems.length - visibleItems.length;

            // Toggle Load More button
            if (loadMoreWrap) {
                if (remainingCount > 0) {
                    loadMoreWrap.style.display = "flex";
                    if (loadCountBadge) {
                        const nextBatch = Math.min(loadStep, remainingCount);
                        loadCountBadge.textContent = `+${nextBatch}`;
                    }
                } else {
                    loadMoreWrap.style.display = "none";
                }
            }

            // Clear existing columns
            cols.forEach(c => c.innerHTML = "");

            // Distribute items evenly across active columns
            visibleItems.forEach((entry, i) => {
                const targetCol = cols[i % numCols];
                const { item, globalIdx } = entry;

                const figure = document.createElement("figure");
                figure.className = "evt-photo-tile";
                figure.setAttribute("onclick", `window.openEventLightbox(${globalIdx})`);
                figure.setAttribute("data-idx", globalIdx);

                figure.innerHTML = `
                    <img src="${item.src}" alt="${item.title}" class="evt-tile-img" loading="${i < 6 ? 'eager' : 'lazy'}">
                    <div class="evt-hover-scrim">
                        <div class="evt-hover-top-badges">
                            <span class="evt-badge-cat-tag"><i class="fas fa-tag"></i> ${item.catLabel}</span>
                            <div class="evt-badge-zoom-icon"><i class="fas fa-search-plus"></i></div>
                        </div>
                        <div class="evt-hover-content">
                            <h4 class="evt-hover-title">${item.title}</h4>
                            <p class="evt-hover-caption">${item.caption}</p>
                        </div>
                    </div>
                `;
                targetCol.appendChild(figure);
            });

            if (typeof gsap !== 'undefined') {
                if (isAppending) {
                    const newlyAddedTiles = Array.from(document.querySelectorAll(".evt-photo-tile")).slice(currentVisibleLimit - loadStep);
                    gsap.fromTo(newlyAddedTiles, { opacity: 0, y: 25, scale: 0.96 }, { opacity: 1, y: 0, scale: 1, duration: 0.4, stagger: 0.04, ease: "power2.out" });
                } else {
                    gsap.fromTo(".evt-photo-tile", { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.35, stagger: 0.02, ease: "power2.out" });
                }
            }
        }

        // Load More Click
        if (btnLoadMore) {
            btnLoadMore.addEventListener("click", () => {
                currentVisibleLimit += loadStep;
                distributeEventTiles(true);
            });
        }

        // Initialize state
        distributeEventTiles(false);

        // Responsive resize listener with debounce
        let resizeTimer;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                distributeEventTiles(false);
            }, 150);
        });
    }

    window.initEventGallery = initEventGallery;

    if (window.__EVENT_ITEMS__) {
        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", () => initEventGallery(window.__EVENT_ITEMS__));
        } else {
            initEventGallery(window.__EVENT_ITEMS__);
        }
    }
})();
