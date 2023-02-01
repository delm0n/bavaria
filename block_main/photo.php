<section id="photo">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div class="container">

            <h2 class="title">Настоящие фото пивоварни Bavaria</h2>

            <vue-slick-carousel v-bind="photoSlides" class="photo-wrapper ">
                <div v-for="(photo, index) in photos" :class="'photo-container photo-container-' + (index+1)">
                    <a draggable="false" :href="'<?= $build ?>images/photo-' + photo.desktop + '.<?= $webp == "webp" ? "webp" : "png" ?>'" data-fancybox='photo'>
                        <picture>
                            <source :srcset="'<?= $build ?>images/photo-' + photo.desktop + '-preview.<?= $webp == "webp" ? "webp" : "png" ?>'" media="(min-width: 993px)">
                            <img :src="'<?= $build ?>images/photo-' + photo.mobile + '-preview.<?= $webp == "webp" ? "webp" : "png" ?>'" alt="Фото пивоварни Bavaria">
                        </picture>
                    </a>
                </div>
            </vue-slick-carousel>

        </div>

    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var photo = new Vue({
            el: '#photo',
            data: {

                photos: [{
                        desktop: 'item1',
                        mobile: 'item1-mobile'
                    },
                    {
                        desktop: 'item2',
                        mobile: 'item2-mobile'
                    },
                    {
                        desktop: 'item3',
                        mobile: 'item3-mobile'
                    },
                    {
                        desktop: 'item4',
                        mobile: 'item4-mobile'
                    },
                    {
                        desktop: 'item5',
                        mobile: 'item5-mobile'
                    },
                    {
                        desktop: 'item6',
                        mobile: 'item6-mobile'
                    },
                ],
                photoSlides: {
                    responsive: [{
                            breakpoint: 9999,
                            settings: "unslick",
                        },

                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                touchMove: true,
                                slidesToScroll: 1,
                                infinite: false,
                                dots: true,
                                arrows: true,
                                draggable: true,
                                autoplay: false,
                            },
                        },

                        {
                            breakpoint: 425,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: false,
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
                // updateWidth() {
                //     this.windowWidth = window.innerWidth;
                // },
            },
            created() {
                // window.addEventListener('resize', () => {
                //     this.windowWidth = window.innerWidth
                // });
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#photo',
                    once: true,
                    onEnter: () => {

                        if (window.innerWidth >= 993) {
                            gsap.from('#photo' + " .title", {
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