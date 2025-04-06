
document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

    let resizeTimer;

    // Handle Resize Properly
    const handleResize = () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            document.querySelectorAll('[data-split-type]').forEach(el => {
                if (el._splitInstance) el._splitInstance.revert();
            });
            ScrollTrigger.refresh();
        }, 400);
    };

    // Fix ScrollTrigger Refresh Issue
    const initEventListeners = () => {
        window.addEventListener("load", () => {
            ScrollTrigger.refresh(); // Initial load
        });

        window.addEventListener("resize", handleResize, { passive: true });

        // Fix Reload Issue after Scroll
        window.addEventListener("beforeunload", () => {
            window.scrollTo(0, 0); // Reset scroll position on reload
        });

        // ScrollTrigger Responsive Calculation
        ScrollTrigger.config({
            autoRefreshEvents: "DOMContentLoaded,load,resize",
        });
    };

    initEventListeners();

    let bigScreen = gsap.matchMedia();




    // OdoMeter Animation
    gsap.utils.toArray(".odometer").forEach(odometer => {
        let targetValue = odometer.getAttribute("data-target");
        gsap.from(odometer.parentElement, {
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                once: false,
                trigger: ".odometer-trigger",
                start: "top 90%",
                onEnter: () => {
                    odometer.innerHTML = targetValue;
                },
            }
        });
    });




    bigScreen.add("(min-width: 992px)", () => {


        gsap.from('.hero__title', {
            y: 30,
            opacity: "0",
            duration: .8,
            ease: "power1.out",
        })


        gsap.from('.hero__desc', {
            opacity: "0",
            y: 20,
            delay: .5,
            duration: 1,
            ease: "power1.out",
        })







        let leftToRight = document.querySelectorAll(".left-to-right-anim");
        leftToRight.forEach((item) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    scroller: "body",
                    start: "top bottom-=90",
                },
                x: -60,
                opacity: "0",
                duration: 1.3,
                delay: 0.2,
                ease: "power3.out",
            });
        });



        let rightToLeft = document.querySelectorAll(".right-to-left-anim");
        rightToLeft.forEach((item) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    scroller: "body",
                    start: "top bottom-=90",
                },
                x: 60,
                opacity: "0",
                duration: 1.3,
                delay: 0.2,
                ease: "power3.out",
            });
        });

        
        let bottomToTop = document.querySelectorAll(".bottom-to-top-anim");
        bottomToTop.forEach((item) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    scroller: "body",
                    start: "top bottom-=30",
                },
                y: 30,
                opacity: "0",
                duration: 1.3,
                delay: 0.2,
                ease: "power1.out",
            });
        });




        const sectionTitleBorder = gsap.utils.toArray(".section__subtitle-2");

        sectionTitleBorder.forEach((item) => {
            gsap.set(item, {
    
                '--afterWidth': '0px',
                '--beforeWidth': '0px',
    
            });
            gsap.to(item, {
                duration: 1,
                delay: .2,
                '--afterWidth': '415px',
                '--beforeWidth': '415px',
                scrollTrigger: {
                    trigger: item,
                    start: 'top bottom-=170',
                    // markers: true,
                }
            });
        });

        // Stacky Card Animation===========
        const cards = gsap.utils.toArray(".stacky__card");

        cards.forEach((cardd, i) => {

            const card = cards[i];
            let bottomPosition = 410;
            let topPosition = 200;
            let scale = 1,
                rotate = 0;


            if (i !== cards.length - 1) {
                scale = 0.6 + 0.07 * i;
                rotate = -10
            }

            console.log(window.innerWidth)
            if (window.innerWidth <= 991) {
                bottomPosition = 350;
                topPosition = 150;
            }

            let newIndex = i + 1;

            // Stacking animation
            gsap.to(card, {

                scale: scale,
                rotationX: rotate,
                transformOrigin: "top center",
                ease: "power1.out",


                scrollTrigger: {
                    trigger: card,
                    start: `top ${(topPosition + 11 * newIndex)}`,
                    end: `bottom ${bottomPosition}`,
                    endTrigger: '.end-card',
                    pin: card,
                    pinSpacing: false,
                    scrub: 2,
                    // markers: true,


                },

            });

        })




        // Button Arrow Animation

        
    // Button Animation
    let buttons = document.querySelectorAll('.arrow__btn-anim');

    buttons.forEach((button) => {

        let arrow = button.querySelector('.arrow__btn-anim svg')
        button.addEventListener('mouseenter', () => {
            gsap.to(arrow,
                {
                    x: '100%',
                    // opacity: 0,
                    duration: .2,
                    onComplete: () => {
                        gsap.set(arrow, {
                    
                            x: '-100%'
                        })
                    }
                })

            gsap.to(arrow, {
               
                x: 0,
                duration: .2,
                ease: 'none',
                delay: .2
            })
        })


    })


















    });//end big screen



    // gsap.to(".border-effect", {
    //     "--angle": 360, // CSS variable er value
    //     duration: 15, // Animation time
    //     repeat: -1,  // Infinite loop
    //     ease: "linear", // Smooth transition

    // });



});