<section id="controlPanel">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div v-bind:class="{ 'control-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">Продвинутый блок управления</h2>
                <p class="subtitle">Соединивший в себе все пожелания профессиональных пивоваров</p>

                <template>
                    <div class="control-wrapper">
                        <vue-slick-carousel v-bind="controlPanelSlides">

                            <div v-for="control in controls" class="control-item">
                                <div class="control-item__container">

                                    <div class="control-item__img">
                                        <img :src="'<?= $build ?>images/control-' + control.imgName + '.<?= $webp == "webp" ? "webp" : "png" ?>'" alt="Блок управления пивоварней Bavaria">
                                    </div>

                                    <p class="control-item__title" v-html="control.title"></p>

                                    <p class="control-item__text" v-html="control.text"></p>

                                    <p v-for="li in control.list" class="control-item__li" style="font-weight: 300;" v-html="li"></p>

                                    <p class="control-item__decr" v-html="control.decr"></p>

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
        var controlPanel = new Vue({
            el: '#controlPanel',
            data: {
                lazyBg: false,
                controls: [

                    {
                        title: "Защита <br> от сбоев",
                        text: "В случае отключения от электроэнергии пивоварня «запоминает» место, на котором прервалась варка.",
                        imgName: "item1",
                        list: [],
                        decr: "",
                    },

                    {
                        title: "2 режима  <br> управления",
                        text: "Доверьте процесс программе или регулируйте его самостоятельно.",
                        imgName: "item2",
                        list: [],
                        decr: "При необходимости вы всегда сможете проконтролировать конкретный этап вручную, а затем снова переключиться в автоматический режим.",
                    },

                    {
                        title: "Полная <br> автоматизация",
                        text: "Выставьте на пивоварне нужные <br> вам настройки:",
                        imgName: "item3",
                        list: ["-  Температуру", "-  Необходимые паузы", "-  Время варки"],
                        decr: "Всё остальное программа <br> сделает сама.",
                    },

                    {
                        title: "Тонкая настройка <br> температурных пауз",
                        text: "Выбирайте именно то, что нужно:",
                        imgName: "item4",
                        list: [
                            "-  4 классических паузы",
                            "-  6 температурных режимов <br> для отработки ферментов",
                            "-  До 10 засыпей хмеля    ",
                        ],
                        decr: "",
                    },
                ],
                controlPanelSlides: {
                    slidesToShow: 4,
                    adaptiveHeight: true,
                    draggable: false,
                    responsive: [{
                            breakpoint: 1536,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
                                arrows: true,
                                draggable: true,
                                autoplay: false,
                                lazyLoad: true,

                            },
                        },

                        {
                            breakpoint: 1200,

                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
                                arrows: true,
                                draggable: true,
                                autoplay: false,
                                lazyLoad: true,

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
                    trigger: '#controlPanel',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(['#controlPanel' + " .title", '#controlPanel' + " .subtitle"], {
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