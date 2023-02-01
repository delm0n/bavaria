<section id="destiny">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>

        <div class="destiny-bg <?= $webp == "webp" ? "webp" : "" ?>">
            <div class="container">

                <h2 class="title">Настоящая пивоварня,</h2>
                <p class="subtitle">которая подходит всем:</p>

                <template>
                    <div class="destiny-wrapper">
                        <vue-slick-carousel v-bind="destinySlides">
                            <div v-for="destiny in destinies" class="destiny-item">
                                <div class=" destiny-item__container">
                                    <div class="destiny-item__title-block">
                                        <img :src="'<?= $build ?>images/destiny-' + destiny.imgName + '.<?= $webp == "webp" ? "webp" : "png" ?>'" :alt="destiny.title.replace(/( |<([^>]+)>)/ig, ' ')">
                                        <p class="destiny-item__title" v-html="destiny.title"></p>
                                    </div>
                                    <p class="destiny-item__text">{{destiny.text}}</p>
                                    <ul class="destiny-item__list">
                                        <li v-for="li in destiny.list">{{li}}</li>
                                    </ul>
                                </div>
                            </div>
                        </vue-slick-carousel>
                    </div>
                </template>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var destiny = new Vue({
            el: '#destiny',
            data: {
                destinies: [{
                        title: "Новичкам-<br>энтузиастам",
                        text: "Если вы только начинаете осваивать пивоварение, BAVARIA станет вашим верным спутником в мир крафта:",
                        list: [
                            "Полностью автоматизированный процесс",
                            "Полезные советы от системы",
                            "Готовые рецепты в памяти устройства",
                            "Простая и понятная инструкция",
                        ],
                        imgName: "beer",
                    },

                    {
                        title: "Любителям<br>и профессионалам",
                        text: "BAVARIA даёт возможность не ограни-чиваться классикой! Экспериментируйте и придумывайте уникальные рецепты сами!",
                        list: [
                            "Система может «запоминать» ваши рецепты",
                            "100% повторяемость сохранённых алгоритмов варки",
                        ],
                        imgName: "profi",
                    },

                    {
                        title: "Для<br>предпринимателей",
                        text: "Домашняя пивоварня идеально подойдёт для тех, кто собирается заняться бизнесом:",
                        list: [
                            "Качество пива не уступает конвейерному производству       ",
                            "Объём продукта на выходе достаточен для содержания частной пивоварни (до 98 бутылок за одну варку)",
                        ],
                        imgName: "business",
                    },
                ],
                destinySlides: {
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
                if (window.innerWidth >= 993) {
                    ScrollTrigger.create({
                        trigger: '#destiny',
                        once: true,
                        onEnter: () => {
                            gsap.from(['#destiny' + " .title", '#destiny' + " .subtitle"], {
                                delay: 0.4,
                                duration: 1.4,
                                y: 50,
                                stagger: 0.3,
                                opacity: 0,
                            });
                        },
                    })
                }
            }
        })
    })
</script>