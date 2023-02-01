<section id="tradition">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>

        <div v-bind:class="{ 'tradition-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">Откройте для себя вековые традиции</h2>
                <p class="subtitle">Со сборником самых популярных рецептов пива</p>

                <vue-slick-carousel v-bind="traditionSlides" class="tradition-wrapper ">

                    <div v-for="(beer, index) in beers" class="tradition-item__container">
                        <div class="tradition-item">
                            <div class="tradition-item__img">
                                <img :src="'<?= $build ?>images/tradition-'+ beer.img +'.<?= $webp == "webp" ? "webp" : "png" ?>'" :alt="beer.title">
                            </div>

                            <div class="tradition-item__title">
                                <h3 v-html="beer.title"></h3>
                            </div>

                            <div class="tradition-item__comp">
                                <div v-for="(cut, cutIndex) in beer.cutComponents" class="tradition-item__comp-row">
                                    <p v-html="cutIndex+1"></p>
                                    <p>.</p>
                                    <p v-html="cut"></p>
                                </div>
                            </div>

                            <div class="tradition-item__button">
                                <a draggable="false" v-on:click="getBeer(index)" href="#modal-tradition" data-fancybox class="button">Открыть
                                    рецепт</a>
                            </div>
                        </div>
                    </div>

                </vue-slick-carousel>

            </div>
        </div>

        <div id="modal-tradition" style="display: none;">
            <div class="modal-container">

                <div class="modal-tradition-bg">
                    <div class="video-container">

                        <a class="video-item slick-slide slick-active" :data-fancybox="'https://youtu.be/' + beer.video" :href="'https://youtu.be/' + beer.video">
                            <div class="video__container main-video__video-container">
                                <div class="video__link">
                                    <picture>
                                        <source class="" type="image/webp" :srcset="'https://i.ytimg.com/vi_webp/' + beer.video + '/maxresdefault.webp'">
                                        <img class="video__media" :alt="beer.title" :src="'https://i.ytimg.com/vi/' + beer.video + '/maxresdefault.jpg'">
                                    </picture>
                                    <div class="yt-btn">
                                        <? include './templates/helpers/youtube.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="modal-tradition-content">
                    <h3 class="modal-title"> {{beer.title}}</h3>

                    <div class="modal-tradition__comp-block">
                        <div v-for="comp in beer.components" class="modal-tradition__comp">
                            <p v-html="comp[0]"></p>
                            <p v-html="comp[1]"></p>
                        </div>

                        <div v-if="beer.addish.length > 0">
                            <p class="modal-tradition__comp" style="font-weight: 700;">Дополнительно</p>
                            <div v-for="addish in beer.addish" class="modal-tradition__comp">
                                <p v-html="addish[0]"></p>
                                <p v-html="addish[1]"></p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tradition__steps-block">
                        <div v-for="(step, index) in beer.steps" class="modal-tradition__steps">
                            <p style="font-weight: 700;">Шаг {{index+1}}.</p>
                            <p v-html=" step"></p>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var tradition = new Vue({
            el: '#tradition',
            data: {
                lazyBg: false,

                beer: {},

                beers: [{
                        img: 'yachmennoe',
                        title: 'Ячменное пиво',
                        cutComponents: [
                            'Солод Vienna malt <span style="white-space: nowrap"> — 7 кг </span>',
                            'Солод Pilsner<span style="white-space: nowrap">  malt — 7 кг </span>',
                            'Вода <span style="white-space: nowrap"> — 70 л</span>',
                            'Дрожжи пивные<span style="white-space: nowrap">  — 44 г </span>',
                            'Хмель Hercules<span style="white-space: nowrap">  — 65 г </span>',
                            'Хмель Saphir<span style="white-space: nowrap">  — 50 г </span>',
                            'Таблетка ирландского мха<span style="white-space: nowrap">  — 1 шт...</span>'
                        ],

                        components: [
                            ['Солод Vienna malt', '7 кг '],
                            ['Солод Pilsner malt ', '7 кг '],
                            ['Вода', '70 л'],
                            ['Дрожжи пивные ', '44 г '],
                            ['Хмель Hercules', '65 г '],
                            ['Хмель Saphi', '50 г '],
                            ['Таблетка ирландского мха', '1 шт.'],
                        ],
                        steps: [
                            'Воду нагреваем, при температуре 52° засыпаем солод. ',
                            '70 минут выдерживаем при 70°, 10 мин — при 78°. ',
                            'Процеживаем сусло.',
                            'Общее время варки — 90 минут. В начале вносим 15 г Hercules, на 75 минуте добавляем ещё 50 г, на 80 минуте добавляем ирландский мох, на 88 минуте — Saphir.',
                            'Сусло остужаем до температуры 24–25°, вносим дрожжи, ставим гидрозатвор.',
                            'Оставляем для брожения при температуре 19–20° на 14 дней.'
                        ],

                        addish: [],

                        video: 'R9KMC-VKcT4'
                    },

                    {
                        img: 'ipa',
                        title: 'IPA',
                        cutComponents: [
                            'Солод Vienna malt <span style="white-space: nowrap"> — 7 кг </span>',
                            'Солод Pilsner malt <span style="white-space: nowrap"> — 7 кг </span>',
                            'Солод карамельный 50 ЕВС <span style="white-space: nowrap"> — 0,5 кг</span>',
                            'Солод карамельный 150 ЕВС <span style="white-space: nowrap"> — 0,2 кг</span>',
                            'Вода <span style="white-space: nowrap"> — 70 л</span>',
                            'Хмель Hercules <span style="white-space: nowrap"> — 65 г...</span>',
                        ],
                        components: [
                            ['Солод Vienna malt', '7 кг '],
                            ['Солод Pilsner malt ', '7 кг '],
                            ['Карамельный 50 ЕВС', '0,5 кг '],
                            ['Карамельный 150 ЕВС ', '0,2 кг '],
                            ['Вода', '70 л'],
                            ['Хмель Hercules', '70 г '],
                            ['Хмель Saphi', '1 шт '],
                            ['Хмель Perle', '25 г'],
                            ['Дрожжи пивные ', '44 г '],
                            ['Таблетка ирландского мха', '1 шт.'],
                        ],
                        steps: [
                            'Воду нагреваем, при температуре 52° засыпаем солод. ',
                            '70 минут выдерживаем при 70°, 10 мин — при 78°. ',
                            'Процеживаем сусло.',
                            'Общее время варки — 90 минут. На старте добавляем 70 г Hercules, на 75 минуте — 50 г Saphir, на 80 минуте — ирландский мох, за 2 мин до конца варки — 25 г Saphir и 25 г Perle.',
                            'Сусло остужаем до температуры 24–25°, вносим дрожжи, ставим гидрозатвор.',
                            'Оставляем для брожения при температуре 19–20° на 14 дней.'
                        ],
                        addish: [],

                        video: 'd0byIOuQx0w'
                    },

                    {
                        img: 'pshenichnoe',
                        title: 'Пшеничное пиво',
                        cutComponents: [
                            'Солод пшеничный <span style="white-space: nowrap"> — 7 кг</span>',
                            'Солод Vienna malt <span style="white-space: nowrap"> — 4 кг</span>',
                            'Солод Pilsner malt <span style="white-space: nowrap"> — 3 кг</span>',
                            'Вода <span style="white-space: nowrap"> — 70 л</span>',
                            'Хмель Hercules <span style="white-space: nowrap"> — 10 г</span>',
                            ' Хмель Saphir <span style="white-space: nowrap"> — 50 г</span>',
                            'Хмель Perle <span style="white-space: nowrap"> — 50 г...</span>',
                        ],

                        components: [
                            ['Солод пшеничный', '7 кг '],
                            ['Солод Vienna malt', '4 кг '],
                            ['Солод Pilsner malt ', '3 кг '],
                            ['Вода', '70 л'],
                            ['Хмель Hercules', '10 г '],
                            ['Хмель Saphi', '50 г '],
                            ['Хмель Perle', '50 г'],
                            ['Дрожжи пивные ', '44 г '],
                            ['Таблетка ирландского мха', '1 шт.'],
                        ],
                        steps: [
                            'Воду нагреваем, при температуре 52° засыпаем солод. ',
                            '90 минут выдерживаем при 70°, 10 минут — при 78°.',
                            'Процеживаем сусло.',
                            'Общее время варки — 90 минут. На старте добавляем 10 г Hercules, на 75 минуте — 50 г Perle, цедру и кориандр. На 80 минуте кидаем таблетку ирландского мха, а за 2 минуты до конца варки — 50 г Saphir.',
                            'Сусло остужаем до 25°, добавляем дрожжи, ставим гидрозатвор.',
                            ' Оставляем для брожения при температуре 24–25° на 14 дней.'
                        ],

                        addish: [
                            ['Апельсиновая цедра ', '100 г'],
                            ['Кориандр ', '20 г']
                        ],

                        video: 'eRI1P42BPWU'
                    },

                    {
                        img: 'milk',
                        title: 'Молочный стаут',
                        cutComponents: [
                            'Солод жжёный 14000 ЕВС <span style="white-space: nowrap"> — 0,4 кг</span>',
                            'Солод шоколадный 900 ЕВС <span style="white-space: nowrap"> — 0,9 кг</span>',
                            'Солод карамельный 50 ЕВС <span style="white-space: nowrap"> — 1 кг</span>',
                            'Солод карамельный — 150 ЕВС <span style="white-space: nowrap"> — 1 кг</span>',
                            'Солод Pilsner malt <span style="white-space: nowrap"> — 13 кг</span>',
                            'Вода <span style="white-space: nowrap"> — 70 л...</span>',
                        ],

                        components: [
                            ['Солод жжёный 14000 ЕВС', '0,4 кг '],
                            ['Солод шоколадный 900 ЕВС', '0,9 кг '],
                            ['Солод карамельный 50 ЕВС ', '1 кг'],
                            ['Солод карамельный 150 ЕВС ', '1 кг'],
                            ['Солод Pilsner malt', '13 кг'],
                            ['Вода', '70 л'],
                            ['Хмель Hercules', '70 г '],
                            ['Дрожжи пивные ', '44 г ']
                        ],
                        steps: [
                            'Воду нагреваем, при температуре 52° засыпаем солод. ',
                            '70 минут выдерживаем при 72°, 10 мин — при 78°. ',
                            'Процеживаем сусло.',
                            'Общее время варки — 90 минут. На старте добавляем 20 г Hercules, на 60 минуте — 1 кг лактозы, на 75 минуте — 50 г Hercules, на 80 минуте таблетку ирландского мха.',
                            'Сусло остужаем, вносим дрожжи, ставим гидрозатвор.',
                            'Оставляем для брожения при температуре 20° на 14 дней.'
                        ],

                        addish: [
                            ['лактоза ', '1 кг.']
                        ],

                        video: 'v_2QP1AUmbA'
                    },
                ],

                traditionSlides: {
                    slidesToShow: 2,
                    adaptiveHeight: true,
                    draggable: true,
                    dots: true,

                    infinite: true,
                    autoplay: false,

                    responsive: [{
                        breakpoint: 1366,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: true,
                            draggable: true,

                        },
                    }, ]
                },
            },
            components: {
                VueSlickCarousel: window["vue-slick-carousel"],
            },
            methods: {
                getBeer(i) {
                    this.beer = this.beers[i];
                }
            },
            created() {
                this.getBeer(1);
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#tradition',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(['#tradition' + " .title", '#tradition' + " .subtitle"], {
                                delay: 0.6,
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