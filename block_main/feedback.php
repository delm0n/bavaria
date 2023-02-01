<section id="feedback">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div class="container">

            <h2 class="title">Отзывы наших клиентов</h2>

            <vue-slick-carousel v-bind="feedbackSlides" class="feedback-wrapper ">

                <div v-for="(photo, index) in photos" class="feedback-item">
                    <a draggable="false" :href="'<?= $build ?>images/' + photo.name + '.<?= $webp == "webp" ? "webp" : "png" ?>'" data-fancybox='feedback' class="slider-wrapper__img ">
                        <img :src="'<?= $build ?>images/' + photo.name + '.<?= $webp == "webp" ? "webp" : "png" ?>'" alt="Отзывы клиентов на пивоварню Bavaria">
                    </a>
                </div>

            </vue-slick-carousel>

        </div>

    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var feedback = new Vue({
            el: '#feedback',
            data: {
                photos: [{
                        name: "feedback-item-1"
                    },
                    {
                        name: "feedback-item-2"
                    },
                    {
                        name: "feedback-item-3"
                    },
                    {
                        name: "feedback-item-4"
                    },
                    {
                        name: "feedback-item-5"
                    },
                    {
                        name: "feedback-item-6"
                    },
                ],

                feedbackSlides: {
                    slidesToShow: 3,
                    adaptiveHeight: true,
                    draggable: true,
                    dots: true,
                    lazyLoad: false, //if true - fancybox conflict
                    infinite: false,
                    autoplay: false,
                    responsive: [{
                            breakpoint: 1366,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                dots: true,
                                arrows: true,
                                draggable: true,
                            },
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                dots: true,
                                arrows: true,
                                draggable: true,
                            },
                        },

                        {
                            breakpoint: 425,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                dots: false,
                                arrows: true,
                                draggable: true,
                            },
                        },
                    ],
                },
            },
            components: {
                VueSlickCarousel: window["vue-slick-carousel"],
            },
            methods: {

            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#feedback',
                    once: true,
                    onEnter: () => {

                        if (window.innerWidth >= 993) {
                            gsap.from('#feedback' + " .title", {
                                opacity: 0,
                                delay: 1.4,
                                duration: 1.3,
                            });
                        }
                    },
                })

            }
        })
    })
</script>