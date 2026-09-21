<!-- Video Hero Section Start -->
<div class="relative w-full z-10" id="heroScrollTrack">
    <!-- Sticky Viewport Wrapper -->
    <div class="sticky-viewport">
        
        <!-- Autoplay Video Background (Unconditional Playback for All Devices & Network Speeds) -->
        <div class="home-hero-container">
            <video class="home-hero-video" autoplay muted playsinline webkit-playsinline loop preload="metadata" poster="02_design/banner-1.webp" aria-label="วิดีโอนำเสนอแผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยอาชีวศึกษาเชียงราย">
                <source src="02_design/Hero.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="home-hero-overlay"></div>
        </div>
        <script>
        (function() {
            var vid = document.querySelector('.home-hero-video');
            if (vid) {
                var p = vid.play();
                if (p !== undefined) {
                    p.catch(function() {});
                }
                // Smart Performance Observer: Pause video when hero section leaves viewport
                if ('IntersectionObserver' in window) {
                    var heroTrack = document.getElementById('heroScrollTrack');
                    if (heroTrack) {
                        var obs = new IntersectionObserver(function(entries) {
                            entries.forEach(function(entry) {
                                if (entry.isIntersecting) {
                                    if (vid.paused) vid.play().catch(function() {});
                                } else {
                                    if (!vid.paused) vid.pause();
                                }
                            });
                        }, { threshold: 0.05 });
                        obs.observe(heroTrack);
                    }
                }
            }

            // Interactive Scroll Indicator Click Handler
            var scrollIndicator = document.getElementById('heroScrollIndicator');
            if (scrollIndicator) {
                var handleScrollClick = function(e) {
                    e.preventDefault();
                    var target = document.querySelector('.radius-section') || document.getElementById('majorsSection');
                    if (target) {
                        if (typeof window.lenis?.scrollTo === 'function') {
                            window.lenis.scrollTo(target, { offset: 0, duration: 1.2 });
                        } else {
                            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    }
                };
                scrollIndicator.addEventListener('click', handleScrollClick);
                scrollIndicator.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        handleScrollClick(e);
                    }
                });
            }
        })();
        </script>
        
        <!-- Content Container on Top of Video -->
        <div class="home-hero-content" id="heroContentGroup">
            <!-- Small Tagline -->
            <span class="text-white/80 font-semibold text-sm md:text-base tracking-[0.2em] uppercase mb-4 md:mb-6 select-none" id="heroSubtitle">
                INFORMATION TECHNOLOGY • CVC
            </span>
            
            <!-- Pinned Headline -->
            <h1 class="text-3xl sm:text-5xl md:text-7xl font-extrabold text-white leading-tight uppercase tracking-tight select-none" id="heroHeadline">
                <span class="block hero-line-animate">THE FUTURE OF TECH,</span>
                <span class="block hero-line-animate">THE IT WAY</span>
            </h1>
            

        </div>

        <!-- Louver Blind Strips Container -->
        <div class="home-hero-cover"></div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 flex flex-col items-center text-center select-none cursor-pointer z-20" id="heroScrollIndicator" role="button" tabindex="0" aria-label="เลื่อนลงเพื่อดูเนื้อหา">
            <span class="text-[10px] text-white/75 uppercase tracking-[0.3em] mb-2 font-medium">Scroll to explore</span>
            <div class="w-6 h-10 border border-white/30 rounded-full flex justify-center p-1">
                <div class="w-1.5 h-3 bg-primary rounded-full animate-bounce"></div>
            </div>
        </div>

    </div>
    <!-- Seamless transition red background filler -->
    <div class="hero-bg-extension"></div>
</div>
<!-- Video Hero Section End -->

<!-- Storytelling Curved Section Start -->
<section class="radius-section w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            
            <!-- Left Side: Clip-path Reveal Image -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <div class="radius-img-container">
                    <div class="general-reveal-img aspect-[4/3] sm:aspect-[16/10] lg:aspect-[4/3] w-full">
                        <img src="03_photo/3.4_room/room_242_06.webp" width="800" height="600" alt="บรรยากาศการเรียนรู้และการฝึกปฏิบัติจริงในห้องเรียน" class="w-full h-full object-cover" loading="lazy" decoding="async">
                    </div>
                </div>
            </div>
            
            <!-- Right Side: Storytelling Text Contents -->
            <div class="w-full lg:w-1/2 flex flex-col items-start">
                <!-- Tagline -->
                <span class="story-subtitle text-primary font-semibold text-xs tracking-[0.2em] uppercase block mb-3 fade-heading">
                    LEARNING EXPERIENCE
                </span>
                
                <!-- Headline -->
                <div class="story-title mb-6">
                    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight fade-heading">
                        LEARNING BY DOING.
                    </h2>
                </div>
                
                <!-- Description Paragraph -->
                <div class="story-p text-gray-600 text-sm md:text-base leading-relaxed mb-8">
                    <p>
                        ที่แผนกเทคโนโลยีสารสนเทศ เราเน้นการเรียนรู้แบบปฏิบัติจริง ฝึกฝนทักษะการเขียนโค้ด เครือข่าย คลาวด์ และแอนิเมชัน ผ่านโปรเจกต์จริงเพื่อบ่มเพาะยอดฝีมือที่พร้อมสู่อุตสาหกรรมในยุคดิจิทัล
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Storytelling Curved Section End -->
