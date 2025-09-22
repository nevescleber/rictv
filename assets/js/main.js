document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle com GSAP
    const mobileToggle = document.querySelector('.mobile-toggle');
    const mainNav = document.querySelector('.main-nav');
    const menuItems = document.querySelectorAll('.main-nav ul li');
    const headerActions = document.querySelector('.header-actions');
    const body = document.body;
    const html = document.documentElement;
    let menuIsOpen = false;
    
    // Configurar estado inicial do menu
    if (mainNav && typeof gsap !== 'undefined') {
        gsap.set(mainNav, { 
            display: 'none',
            x: '100%'
        });
        
        gsap.set(menuItems, {
            opacity: 0,
            x: 50
        });
        
        if (headerActions) {
            gsap.set(headerActions, {
                opacity: 0,
                y: -20
            });
        }
    }
    
    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function() {
            if (!menuIsOpen) {
                // Abrir menu
                openMobileMenu();
            } else {
                // Fechar menu
                closeMobileMenu();
            }
        });
    }
    
    function openMobileMenu() {
        menuIsOpen = true;
        mobileToggle.classList.add('active');
        mainNav.classList.add('active');
        body.classList.add('menu-open');
        html.classList.add('menu-open');
        
        if (typeof gsap !== 'undefined') {
            // Timeline para animação de abertura
            const tl = gsap.timeline();
            
            tl.set(mainNav, { display: 'flex' })
              .to(mainNav, {
                  x: '0%',
                  duration: 0.6,
                  ease: 'power3.out'
              })
              .to(menuItems, {
                  opacity: 1,
                  x: 0,
                  duration: 0.4,
                  stagger: 0.1,
                  ease: 'power2.out'
              }, '-=0.3');
            
            // Animar header actions se existir
            if (headerActions) {
                tl.to(headerActions, {
                    opacity: 1,
                    y: 0,
                    duration: 0.3,
                    ease: 'power2.out'
                }, '-=0.2');
            }
        }
    }
    
    function closeMobileMenu() {
        menuIsOpen = false;
        mobileToggle.classList.remove('active');
        mainNav.classList.remove('active');
        body.classList.remove('menu-open');
        html.classList.remove('menu-open');
        
        if (typeof gsap !== 'undefined') {
            // Timeline para animação de fechamento
            const tl = gsap.timeline();
            
            // Animar header actions primeiro se existir
            if (headerActions) {
                tl.to(headerActions, {
                    opacity: 0,
                    y: -20,
                    duration: 0.2,
                    ease: 'power2.in'
                });
            }
            
            tl.to(menuItems, {
                opacity: 0,
                x: 50,
                duration: 0.3,
                stagger: 0.05,
                ease: 'power2.in'
            }, headerActions ? '-=0.1' : '0')
              .to(mainNav, {
                  x: '100%',
                  duration: 0.5,
                  ease: 'power3.in'
              }, '-=0.2')
              .set(mainNav, { display: 'none' });
        }
    }
    
    // Fechar menu ao clicar fora (opcional)
    document.addEventListener('click', function(e) {
        if (menuIsOpen && 
            !mainNav.contains(e.target) && 
            !mobileToggle.contains(e.target)) {
            closeMobileMenu();
        }
    });
    
    // Fechar menu ao redimensionar para desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth > 992 && menuIsOpen) {
            closeMobileMenu();
        }
    });
    
    // Initialize Swiper
    if (typeof Swiper !== 'undefined') {
        const mainSlider = new Swiper('.main-slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                init: function() {
                    updateProgressBar(this);
                },
                slideChange: function() {
                    updateProgressBar(this);
                },
            }
        });
        
        function updateProgressBar(swiper) {
            const progressFill = document.querySelector('.swiper-pagination-progress-fill');
            if (progressFill) {
                // Reset width
                progressFill.style.width = '0%';
                
                // Animate width from 0 to 100% over the duration of the slide delay
                let startTime = null;
                const duration = swiper.params.autoplay.delay;
                
                function animate(currentTime) {
                    if (!startTime) startTime = currentTime;
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    
                    progressFill.style.width = progress * 100 + '%';
                    
                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    }
                }
                
                requestAnimationFrame(animate);
            }
        }

        // Projetos Especiais Slider
        const projetosSlider = new Swiper('.banners .swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.banners .swiper-button-next',
                prevEl: '.banners .swiper-button-prev',
            }
        });
    }

    // Initialize Partners Swiper
    const partnersSwiper = new Swiper('.partners-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 30
            }
        }
    });

    // Initialize Cases Swiper
    const casesSwiper = new Swiper('.cases-swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 1024px
            1024: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });

    // Inicialização do Swiper de Resultados
    const resultadosSwiper = new Swiper('.resultados-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination-resultados',
            clickable: true,
            type: 'bullets',
        },
        autoplay: {
            delay: 8000,
            disableOnInteraction: false,
        },
    });

    // Swiper para Mídia Kits
    const midiaKitsSwiper = new Swiper('.midia-kits-swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        pagination: {
            el: '.midia-kits-swiper .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 15
            },
            576: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 25
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });

    // Swiper para categorias do blog
    if (document.querySelector('.blog-categories-swiper')) {
        const blogCategoriesSwiper = new Swiper('.blog-categories-swiper', {
            slidesPerView: 'auto',
            spaceBetween: 40,
            navigation: {
                nextEl: '.blog-categories-arrow-next',
                prevEl: '.blog-categories-arrow-prev',
            },
            on: {
                afterInit: function(swiper) {
                    updateCategoryArrows(swiper);
                },
                slideChange: function(swiper) {
                    updateCategoryArrows(swiper);
                },
                reachBeginning: function(swiper) {
                    updateCategoryArrows(swiper);
                },
                reachEnd: function(swiper) {
                    updateCategoryArrows(swiper);
                },
                fromEdge: function(swiper) {
                    updateCategoryArrows(swiper);
                }
            }
        });

        function updateCategoryArrows(swiper) {
            const prev = document.querySelector('.blog-categories-arrow-prev');
            const next = document.querySelector('.blog-categories-arrow-next');
            if (swiper.isBeginning) {
                prev.setAttribute('disabled', 'disabled');
                prev.classList.add('inactive');
            } else {
                prev.removeAttribute('disabled');
                prev.classList.remove('inactive');
            }
            if (swiper.isEnd) {
                next.setAttribute('disabled', 'disabled');
                next.classList.add('inactive');
            } else {
                next.removeAttribute('disabled');
                next.classList.remove('inactive');
            }
        }
    }

    // Filtro de categorias do blog
    const categoryButtons = document.querySelectorAll('.blog-categories-swiper .category');
    const blogCards = document.querySelectorAll('.blog-post-card');

    if (categoryButtons.length && blogCards.length) {
        categoryButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                // Ativa visualmente a categoria
                categoryButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const categoria = this.textContent.trim().toLowerCase();
                blogCards.forEach(card => {
                    // Busca todas as tags do card
                    const tags = Array.from(card.querySelectorAll('.blog-post-tag')).map(t => t.textContent.trim().toLowerCase());
                    if (categoria === 'todas' || tags.some(tag => tag === categoria)) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // Swiper da linha do tempo da história com navegação customizada
    if (document.querySelector('.historia-swiper')) {
        const historiaSwiper = new Swiper('.historia-swiper', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: false,
            navigation: {
                nextEl: '.timeline-next',
                prevEl: '.timeline-prev',
            },
            autoHeight: true,
            on: {
                slideChange: function() {
                    const index = this.activeIndex;
                    document.querySelectorAll('.timeline-year-btn').forEach((btn, i) => {
                        btn.classList.toggle('active', i === index);
                    });
                }
            }
        });
        document.querySelectorAll('.timeline-year-btn').forEach((btn, i) => {
            btn.addEventListener('click', function() {
                historiaSwiper.slideTo(i);
            });
        });
    }

    // Inicialização unificada do Fancybox
    $(document).ready(function() {
        if (typeof $.fancybox !== 'undefined') {
            // Inicializa Fancybox para elementos com data-fancybox
            $('[data-fancybox]').fancybox();

            // Adiciona comportamento para links PDF sem data-fancybox
            $(document).on('click', 'a[href*=".pdf"]:not([data-fancybox])', function(e) {
                e.preventDefault();
                $.fancybox.open({
                    src: this.href,
                    type: 'iframe',
                    buttons: ['close'],
                    iframe: {
                        css: {
                            width: '100%',
                            height: '100%'
                        }
                    }
                });
            });
        }
    });
});
