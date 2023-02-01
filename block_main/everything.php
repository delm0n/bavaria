<section id="everything">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div v-bind:class="{ 'everything-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">BAVARIA для каждого</h2>
                <p class="subtitle">От хобби до производственных масштабов</p>

                <div class="toggle-container">
                    <div class="toggle-area" v-bind:class="{ 'toggle-area-wifi': wifiTab }">
                        <div v-on:click="wifiTab = false" class="toggle-tab nowifi" v-bind:class="{ 'toggle-tab-active': !wifiTab }">без WiFi</div>
                        <div v-on:click="wifiTab = true" class="toggle-tab wifi" v-bind:class="{ 'toggle-tab-active': wifiTab }">с WiFi</div>
                    </div>
                </div>

                <div class="everything-wrapper">
                    <vue-slick-carousel v-bind="everythingSlides">

                        <div v-for="model in goodsArray__models" class="everything-item">
                            <div class="everything-item__container">

                                <div class="everything-item__img">

                                    <div class="everything-item__img-container">
                                        <picture>
                                            <source :srcset="'<?= $build ?>images/' + model.img_m + '.<?= $webp == "webp" ? "webp" : "png" ?>'" media="(max-width: 992px)">
                                            <template>
                                                <slide-y-down-transition :duration="{ enter: 1200, leave: 300 }">
                                                    <img class="leftimg" v-show="!wifiTab" :src="'<?= $build ?>images/' + model.img + '.<?= $webp == "webp" ? "webp" : "png" ?>'" alt="Пивоварня Bavaria">
                                                </slide-y-down-transition>
                                            </template>
                                        </picture>

                                    </div>

                                    <div class="everything-item__img-container">

                                        <picture>
                                            <source :srcset="'<?= $build ?>images/' + model.img_wifi_m + '.<?= $webp == "webp" ? "webp" : "png" ?>'" media="(max-width: 992px)">
                                            <template>
                                                <slide-y-down-transition :duration="{ enter: 1200, leave: 300 }">
                                                    <img v-show="wifiTab" :src="'<?= $build ?>images/' + model.img_wifi + '.<?= $webp == "webp" ? "webp" : "png" ?>'" alt="Пивоварня Bavaria">
                                                </slide-y-down-transition>
                                            </template>
                                        </picture>

                                    </div>


                                    <div class="everything-item__img-title">
                                        <h4>Bavaria</h4>
                                        <div>
                                            <p>{{model.nameL}}</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="everything-item__content">
                                    <div class="everything-item__content-decr">
                                        <div class="content-decr__item">
                                            <p class="content-decr__item-title">Выход сусла за цикл:</p>
                                            <p class="content-decr__item-value">{{model.syslo}}</p>
                                        </div>
                                        <div class="content-decr__item">
                                            <p class="content-decr__item-title">Max вес засыпи в бак:</p>
                                            <p class="content-decr__item-value">{{model.volume}}</p>
                                        </div>
                                        <div class="content-decr__item">
                                            <p class="content-decr__item-title">Потребляемая мощность:</p>
                                            <p class="content-decr__item-value">{{model.power}}</p>
                                        </div>
                                        <div class="content-decr__item">
                                            <p class="content-decr__item-title">Вес:</p>
                                            <p class="content-decr__item-value">{{model.weight}}</p>
                                        </div>
                                    </div>

                                    <div class="everything-item__content-offer">
                                        <div>
                                            <p v-if="!wifiTab" class="old-price">{{model.oldPrice}} ₽</p>
                                            <p v-else class="old-price">{{model.oldPrice_wifi}} ₽</p>

                                            <p v-if="!wifiTab" class="new-price">{{model.price}} ₽</p>
                                            <p v-else class="new-price">{{model.price_wifi}} ₽</p>
                                        </div>

                                        <a draggable="false" v-on:click="changeModel(model.id)" href="#modal-order" data-fancybox class="button">
                                            Заказать
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </vue-slick-carousel>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var everything = new Vue({
            el: '#everything',
            data: {
                lazyBg: false,
                wifiTab: true,
                everythingSlides: {
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
                Vue2Transitions: window["Vue2Transitions"],
            },
            methods: {
                // выбор модели
                changeModel(id) {
                    user.model = goodsArray__models.find((model) => model.id == id);
                    user.model.wifi = this.wifiTab;
                },
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#everything',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(['#everything' + " .title", '#everything' + " .subtitle"], {
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