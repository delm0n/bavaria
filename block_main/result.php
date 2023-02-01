<section id="result">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div class="result-bg <?= $webp == "webp" ? "webp" : "" ?>">
            <div class="container">

                <h2 class="title">Результат, который превосходит <br> все ожидания
                </h2>
                <p class="subtitle">Варите действительно качественное пиво</p>

                <template>
                    <div class="result-wrapper">

                        <vue-slick-carousel v-bind="resultSlides">
                            <div v-for="result in results" class="result-item">
                                <a draggable="false" v-on:click="modalResultText = result.text" href="#modal-result" data-fancybox class=" result-item__container">

                                    <div class="result-item__img">
                                        <img :src="'<?= $build ?>images/result-' + result.imgName + '.<?= $webp == "webp" ? "webp" : "png" ?>'" :alt="result.title.replace(/( |<([^>]+)>)/ig, ' ')">
                                    </div>

                                    <div class="result-item__box">

                                        <picture>
                                            <source srcset="<?= $build ?>images/result-box-bg.<?= $webp == "webp" ? "webp" : "png" ?>" media="(min-width: 993px)">
                                            <img src="<?= $build ?>images/result-box-bg-mobile.<?= $webp == "webp" ? "webp" : "png" ?>" alt="box">
                                        </picture>

                                        <div class="result-item__title">
                                            <p v-html="result.title"></p>
                                            <img src="<?= $build ?>images/result-arrow.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Подробнее">
                                        </div>

                                    </div>

                                </a>
                            </div>

                        </vue-slick-carousel>

                    </div>
                </template>

            </div>
        </div>

        <div id="modal-result" style="display: none;">
            <div class="modal-container <?= $webp == "webp" ? "webp" : "" ?>">
                <p class="modal-result__text"> {{modalResultText}} </p>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var result = new Vue({
            el: '#result',
            data: {

                results: [{
                        title: "Пиво по вашим<br>рецептам",
                        text: "Создавайте собственные рецепты пива, совершенствуйте их до идеала и оттачивайте мастерство — с BAVARIA нет никаких границ для творчества!",
                        imgName: "glass",
                    },

                    {
                        title: "До 98 бутылок<br>за одну варку",
                        text: "Получайте 98 бутылок всего за одну варку! Этого оборота хватит не только на домашние застолья, но и на содержание собственной пивоварни.",
                        imgName: "bottle",
                    },

                    {
                        title: "Срок хранения<br>до 1 года",
                        text: "Крафтое пиво может храниться до года. При этом в первые месяцы настаивания в нём будут активно проходить процессы «дозревания».",
                        imgName: "calendar",
                    },
                ],

                resultSlides: {
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

                modalResultText: "",

            },
            components: {
                VueSlickCarousel: window["vue-slick-carousel"],
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#result',
                    once: true,

                    onEnter: () => {

                        if (window.innerWidth >= 993) {
                            gsap.from(['#result' + " .title", '#result' + " .subtitle"], {
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