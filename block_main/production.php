<section id="production">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div class="production-bg <?= $webp == "webp" ? "webp" : "" ?>">
            <div class="container">
                <h2 class="title">Полностью<br> отечественное производство
                </h2>
                <div class="production-wrapper">
                    <vue-slick-carousel v-bind="productionSlides">
                        <div v-for="production in productions" class="production-item">
                            <div class=" production-item__container">
                                <div class="production-item__title-block">
                                    <img :src="'<?= $build ?>images/production-' + production.imgName + '.<?= $webp == "webp" ? "webp" : "png" ?>'" :alt="production.title.replace(/( |<([^>]+)>)/ig, ' ')">
                                    <p class="production-item__title" v-html="production.title"></p>
                                </div>
                                <p class="production-item__text">{{production.text}}</p>
                            </div>
                        </div>
                    </vue-slick-carousel>

                    <div class="production-wrapper__button">
                        <a draggable="false" href="#modal-order" class="button" data-fancybox>
                            Оставить заявку <br>
                            <span>
                                на приобретение пивоварни</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var production = new Vue({
            el: '#production',
            data: {

                productions: [{
                        title: "Гарантия<br>12 месяцев",
                        text: "Будьте уверены в качестве своей покупки",
                        imgName: "garantee",
                    },

                    {
                        title: "Комплектующие<br>в наличии",
                        text: "Всё, что необходимо для пивоварни, есть в продаже",
                        imgName: "complect",
                    },

                    {
                        title: "Сервисные<br>центры",
                        text: "Оперативное решение любых ваших вопросов",
                        imgName: "service",
                    },
                ],

                productionSlides: {
                    slidesToShow: 3,
                    adaptiveHeight: true,
                    draggable: false,
                    responsive: [{
                            breakpoint: 1440,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
                                arrows: true,
                                draggable: true,
                                autoplay: false,

                            },
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
                                arrows: true,
                                draggable: true,
                                autoplay: false,
                            },
                        },
                    ],
                },

            },
            components: {
                VueSlickCarousel: window["vue-slick-carousel"],
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#production',
                    once: true,
                    onEnter: () => {
                        if (window.innerWidth >= 993) {
                            gsap.from(['#production' + " .title"], {
                                delay: 0.4,
                                duration: 1.4,
                                y: 50,
                                stagger: 0.3,
                                opacity: 0,
                            });
                        }
                    },
                })

            }
        })
    })
</script>