document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle com GSAP
    const mobileToggle = document.querySelector('.mobile-toggle');
    const mainNav = document.querySelector('.main-nav');
    const menuItems = document.querySelectorAll('.main-nav ul li');
    const headerActions = document.querySelector('.header-actions');
    const body = document.body;
    const html = document.documentElement;
    let menuIsOpen = false;
    
    // Force hide all submenus on page load
    document.querySelectorAll('.submenu').forEach(submenu => {
        submenu.classList.remove('active');
        submenu.style.display = 'none';
    });
    // INICIALIZAÇÃO SEPARADA - não interfere entre sistemas
    if (window.innerWidth > 992) {
        // Desktop: Esconde apenas mobile submenus
        document.querySelectorAll('.mobile-submenu').forEach(submenu => {
            submenu.style.display = 'none';
            submenu.classList.remove('active');
        });
        // Desktop: Inicializa mega menus como ocultos
        document.querySelectorAll('.mega-menu').forEach(megaMenu => {
            megaMenu.style.display = 'none';
            megaMenu.classList.remove('active');
        });
        document.querySelectorAll('.mega-mobile-menu').forEach(megaMobile => {
            megaMobile.style.display = 'none';
            megaMobile.classList.remove('active');
        });
    } else {
        // Mobile: Sistemas separados
        document.querySelectorAll('.mobile-submenu').forEach(submenu => {
            submenu.classList.remove('active');
        });
        document.querySelectorAll('.mega-mobile-menu').forEach(megaMobile => {
            megaMobile.classList.remove('active');
        });
    }
    document.querySelectorAll('.menu-trigger').forEach(trigger => {
        trigger.classList.remove('active');
    });
    
    // Configurar estado inicial do menu APENAS para MOBILE
    if (mainNav && typeof gsap !== 'undefined') {
        // Aplicar configurações GSAP apenas em mobile
        if (window.innerWidth <= 992) {
            gsap.set(mainNav, { 
                display: 'none',
                x: '100%'
            });
            
            gsap.set(menuItems, {
                opacity: 0,
                x: 50
            });
            
            // Set initial state for mobile nav header
            const mobileNavHeader = document.querySelector('.mobile-nav-header');
            if (mobileNavHeader) {
                gsap.set(mobileNavHeader, {
                    opacity: 0,
                    y: -30
                });
            }
            
            if (headerActions) {
                gsap.set(headerActions, {
                    opacity: 0,
                    y: -20
                });
            }
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
            const mobileNavHeader = document.querySelector('.mobile-nav-header');
            
            // 1. Configurar e mostrar o menu
            tl.set(mainNav, { display: 'flex' })
              .set(mobileNavHeader, { opacity: 0, y: -30 })
              .set(menuItems, { opacity: 0, x: 50 })
              .set(headerActions, { opacity: 0, y: -20 })
              .to(mainNav, {
                  x: '0%',
                  duration: 0.6,
                  ease: 'power3.out'
              });
            
            // 2. Animar header mobile (logo) primeiro
            if (mobileNavHeader) {
                tl.to(mobileNavHeader, {
                    opacity: 1,
                    y: 0,
                    duration: 0.5,
                    ease: 'power2.out'
                }, '-=0.3');
            }
            
            // 3. Depois animar os itens do menu
            tl.to(menuItems, {
                opacity: 1,
                x: 0,
                duration: 0.4,
                stagger: 0.08,
                ease: 'power2.out'
            }, '-=0.2');
            
            // 4. Por último, animar header actions se existir
            if (headerActions) {
                tl.to(headerActions, {
                    opacity: 1,
                    y: 0,
                    duration: 0.3,
                    ease: 'power2.out'
                }, '-=0.1');
            }
        }
    }
    
    function closeMobileMenu() {        
        if (typeof gsap !== 'undefined') {
            // Timeline para animação de fechamento - INVERSO EXATO da abertura
            const tl = gsap.timeline();
            const mobileNavHeader = document.querySelector('.mobile-nav-header');
            
            // CHAVE: Não remover classes CSS até DEPOIS da animação terminar
            
            // FECHAMENTO (ordem inversa da abertura):
            
            // 4. Header actions SAI primeiro (inverso do último)
            if (headerActions) {
                tl.to(headerActions, {
                    opacity: 0,
                    y: -20,
                    duration: 0.3,
                    ease: 'power2.in'
                });
            }
            
            // 3. Menu items SAI depois (inverso do penúltimo)
            tl.to(menuItems, {
                opacity: 0,
                x: 50,
                duration: 0.4,
                stagger: 0.08, // Mesmo stagger da abertura
                ease: 'power2.in'
            }, '-=0.1'); // Overlap como na abertura
            
            // 2. Header mobile SAI depois (inverso do segundo)
            if (mobileNavHeader) {
                tl.to(mobileNavHeader, {
                    opacity: 0,
                    y: -30,
                    duration: 0.5,
                    ease: 'power2.in'
                }, '-=0.2'); // Overlap como na abertura
            }
            
            // 1. Menu SAI por último (inverso do primeiro)
            tl.to(mainNav, {
                x: '100%',
                duration: 0.6,
                ease: 'power3.in'
            }, '-=0.3') // Overlap como na abertura
            .set(mainNav, { display: 'none' })
            
            // APENAS DEPOIS que a animação terminar, remover as classes CSS
            .call(() => {
                menuIsOpen = false;
                mobileToggle.classList.remove('active');
                mainNav.classList.remove('active');
                body.classList.remove('menu-open');
                html.classList.remove('menu-open');
                
                // Close all mobile submenus when closing main menu
                document.querySelectorAll('.mobile-submenu').forEach(menu => {
                    menu.classList.remove('active');
                });
                document.querySelectorAll('.menu-trigger').forEach(trigger => {
                    trigger.classList.remove('active');
                });
            });
        } else {
            // Fallback sem GSAP
            menuIsOpen = false;
            mobileToggle.classList.remove('active');
            mainNav.classList.remove('active');
            body.classList.remove('menu-open');
            html.classList.remove('menu-open');
            
            document.querySelectorAll('.mobile-submenu').forEach(menu => {
                menu.classList.remove('active');
            });
            document.querySelectorAll('.menu-trigger').forEach(trigger => {
                trigger.classList.remove('active');
            });
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

    // Submenu functionality
    const menuTriggers = document.querySelectorAll('.menu-trigger');
    let activeSubmenu = null;
    let activeMegaMenu = null;

    // Initialize submenus as hidden on desktop
    if (window.innerWidth > 992) {
        document.querySelectorAll('.submenu').forEach(submenu => {
            submenu.classList.remove('active');
        });
        document.querySelectorAll('.menu-trigger').forEach(trigger => {
            trigger.classList.remove('active');
        });
    }

    menuTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            
            const parentLi = this.parentElement;
            const submenu = parentLi.querySelector('.submenu');
            const mobileSubmenu = parentLi.querySelector('.mobile-submenu');
            const isMegaTrigger = this.classList.contains('mega-trigger');
            const megaMenu = parentLi.querySelector('.mega-menu');
            
            // Check if we're on mobile or desktop
            const isMobile = window.innerWidth <= 992;
            
            if (isMobile) {
                // LÓGICA MOBILE ORIGINAL (sem interferência)
                if (isMegaTrigger) {
                    // Para mega menu mobile
                    const megaMobileMenu = parentLi.querySelector('.mega-mobile-menu');
                    const isCurrentlyActive = megaMobileMenu && megaMobileMenu.classList.contains('active');
                    
                    document.querySelectorAll('.mobile-submenu, .mega-mobile-menu').forEach(menu => {
                        menu.classList.remove('active');
                    });
                    document.querySelectorAll('.menu-trigger').forEach(t => {
                        t.classList.remove('active');
                    });
                    
                    if (!isCurrentlyActive && megaMobileMenu) {
                        megaMobileMenu.classList.add('active');
                        this.classList.add('active');
                    }
                } else {
                    // Para submenus normais mobile (LÓGICA ORIGINAL)
                    const isCurrentlyActive = mobileSubmenu && mobileSubmenu.classList.contains('active');
                    
                    document.querySelectorAll('.mobile-submenu, .mega-mobile-menu').forEach(menu => {
                        menu.classList.remove('active');
                    });
                    document.querySelectorAll('.menu-trigger').forEach(t => {
                        t.classList.remove('active');
                    });
                    
                    if (!isCurrentlyActive && mobileSubmenu) {
                        mobileSubmenu.classList.add('active');
                        this.classList.add('active');
                    }
                }
            } else {
                // LÓGICA DESKTOP ORIGINAL (sem interferência)
                if (isMegaTrigger) {
                    // Para mega menu desktop
                    const isCurrentlyActive = megaMenu && megaMenu.classList.contains('active');
                    
                    // Fecha APENAS mega menus, NÃO interfere com submenus normais
                    document.querySelectorAll('.mega-menu').forEach(menu => {
                        menu.classList.remove('active');
                        menu.style.display = 'none';
                    });
                    document.querySelectorAll('.mega-trigger').forEach(trigger => {
                        trigger.classList.remove('active');
                    });
                    
                    if (!isCurrentlyActive && megaMenu) {
                        megaMenu.style.display = 'block';
                        megaMenu.classList.add('active');
                        this.classList.add('active');
                        activeMegaMenu = megaMenu;
                    } else {
                        activeMegaMenu = null;
                    }
                } else {
                    // Para submenus normais desktop (LÓGICA ORIGINAL SEM MODIFICAÇÃO)
                    const isCurrentlyActive = submenu && submenu.classList.contains('active');
                    
                    // Fecha APENAS submenus normais, NÃO interfere com mega menus
                    document.querySelectorAll('.submenu').forEach(menu => {
                        menu.classList.remove('active');
                        menu.style.display = 'none';
                    });
                    document.querySelectorAll('.menu-trigger:not(.mega-trigger)').forEach(trigger => {
                        trigger.classList.remove('active');
                    });
                    
                    if (!isCurrentlyActive && submenu) {
                        submenu.style.display = 'block';
                        submenu.classList.add('active');
                        this.classList.add('active');
                        activeSubmenu = submenu;
                    } else {
                        activeSubmenu = null;
                    }
                }
            }
        });
    });

    // Close desktop submenus when clicking outside (LÓGICA ORIGINAL + mega menu)
    document.addEventListener('click', function(e) {
        if (window.innerWidth > 992) {
            const isMenuClick = e.target.closest('.has-submenu, .has-mega-menu');
            
            if (!isMenuClick) {
                // Fecha submenus normais (LÓGICA ORIGINAL)
                document.querySelectorAll('.submenu').forEach(menu => {
                    menu.classList.remove('active');
                    menu.style.display = 'none';
                });
                document.querySelectorAll('.menu-trigger:not(.mega-trigger)').forEach(trigger => {
                    trigger.classList.remove('active');
                });
                activeSubmenu = null;
                
                // Fecha mega menus (ADIÇÃO)
                document.querySelectorAll('.mega-menu').forEach(menu => {
                    menu.classList.remove('active');
                    menu.style.display = 'none';
                });
                document.querySelectorAll('.mega-trigger').forEach(trigger => {
                    trigger.classList.remove('active');
                });
                activeMegaMenu = null;
            }
        }
    });

    // Close desktop submenus on window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 992) {
            // Close mobile submenus and force hide them on desktop
            document.querySelectorAll('.mobile-submenu').forEach(menu => {
                menu.classList.remove('active');
                menu.style.display = 'none';
            });
            // Ensure desktop submenus are hidden by default
            document.querySelectorAll('.submenu').forEach(submenu => {
                submenu.classList.remove('active');
                submenu.style.display = 'none';
            });
            // Ensure mega menus are hidden by default
            document.querySelectorAll('.mega-menu').forEach(megaMenu => {
                megaMenu.classList.remove('active');
                megaMenu.style.display = 'none';
            });
            document.querySelectorAll('.menu-trigger').forEach(trigger => {
                trigger.classList.remove('active');
            });
            // Reset mobile nav header if exists
            const mobileNavHeader = document.querySelector('.mobile-nav-header');
            if (mobileNavHeader && typeof gsap !== 'undefined') {
                gsap.set(mobileNavHeader, {
                    opacity: 0,
                    y: -30
                });
            }
            activeSubmenu = null;
            activeMegaMenu = null;
        } else {
            // Close desktop submenus but don't interfere with mobile submenus
            document.querySelectorAll('.submenu').forEach(submenu => {
                submenu.classList.remove('active');
                submenu.style.display = 'none';
            });
            // Reset mobile menu triggers but keep mobile submenu functionality
            document.querySelectorAll('.menu-trigger').forEach(trigger => {
                trigger.classList.remove('active');
            });
            document.querySelectorAll('.mobile-submenu').forEach(menu => {
                menu.classList.remove('active');
            });
            activeSubmenu = null;
        }
    });
    
    // Mega Menu Internal Submenus Functionality
    document.addEventListener('click', function(e) {
        // Desktop mega submenu toggles
        if (e.target.closest('.mega-submenu-header')) {
            e.preventDefault();
            const header = e.target.closest('.mega-submenu-header');
            const content = header.nextElementSibling;
            const isActive = header.classList.contains('active');
            
            // Close all other mega submenus in the same column
            const column = header.closest('.mega-column');
            column.querySelectorAll('.mega-submenu-header').forEach(h => {
                h.classList.remove('active');
                if (h.nextElementSibling) {
                    h.nextElementSibling.classList.remove('active');
                }
            });
            
            // Toggle current submenu
            if (!isActive) {
                header.classList.add('active');
                if (content) {
                    content.classList.add('active');
                }
            }
        }
        
        // Desktop mega nested submenu toggles
        if (e.target.closest('.mega-nested-header')) {
            e.preventDefault();
            const header = e.target.closest('.mega-nested-header');
            const content = header.nextElementSibling;
            const isActive = header.classList.contains('active');
            
            // Close all other nested submenus in the same submenu
            const parentSubmenu = header.closest('.mega-submenu-content');
            parentSubmenu.querySelectorAll('.mega-nested-header').forEach(h => {
                h.classList.remove('active');
                if (h.nextElementSibling) {
                    h.nextElementSibling.classList.remove('active');
                }
            });
            
            // Toggle current nested submenu
            if (!isActive) {
                header.classList.add('active');
                if (content) {
                    content.classList.add('active');
                }
            }
        }
        
        // Mobile mega submenu toggles
        if (e.target.closest('.mega-mobile-toggle')) {
            e.preventDefault();
            const toggle = e.target.closest('.mega-mobile-toggle');
            const content = toggle.nextElementSibling;
            const isActive = toggle.classList.contains('active');
            
            // Close all other mobile submenus in the same section
            const section = toggle.closest('.mega-mobile-section');
            section.querySelectorAll('.mega-mobile-toggle').forEach(t => {
                t.classList.remove('active');
                if (t.nextElementSibling) {
                    t.nextElementSibling.classList.remove('active');
                }
            });
            
            // Toggle current submenu
            if (!isActive) {
                toggle.classList.add('active');
                if (content) {
                    content.classList.add('active');
                }
            }
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
