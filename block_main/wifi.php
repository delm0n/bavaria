<section id="wifi">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div class="container">
            <h2 class="title">Контролируйте процесс</h2>
            <p class="subtitle">в мобильном приложении, благодаря блоку управления с WiFi</p>

            <div class="wifi-wrapper">
                <div class="wifi-wrapper__table-wrap">
                    <div class="wifi-wrapper__table">

                        <div class="wifi-wrapper__table-row">

                            <div class="row-function row-function-head">
                                Функции
                            </div>

                            <div class="row-nowifi row-nowifi-head">
                                Блок управления <br> без WiFi
                            </div>

                            <div class="row-wifi row-wifi-head">
                                Блок управления <br> с WiFi
                            </div>
                        </div>

                        <div v-for="row in table" class="wifi-wrapper__table-row">

                            <div class="row-function">
                                {{row.function}}
                            </div>

                            <div>
                                <p class="function-mobile">Без WiFi</p>
                                <div class="row-nowifi" v-html="row.nowifi"> </div>
                            </div>

                            <div>
                                <p class="function-mobile">с WiFi</p>
                                <div class="row-wifi" v-html="row.wifi"> </div>
                            </div>
                        </div>

                    </div>

                    <div class="wifi-wrapper__buttons">
                        <a draggable="false" v-on:click="user.model.wifi = false;" href="#modal-order" data-fancybox class="button button-nowifi ">Заказать без WiFi</a>
                        <a draggable="false" v-on:click="user.model.wifi = true;" href="#modal-order" data-fancybox class="button ">Заказать с WiFi</a>
                    </div>

                </div>

                <div class="wifi-wrapper__img-wrap">
                    <div class="wifi-wrapper__img">
                        <div class="wifi-wrapper__img-block">
                            <div class="wifi-wrapper__img-block__title">
                                <p> Блок управления без WiFi</p>
                            </div>
                            <div class="wifi-wrapper__img-block__img">
                                <img class="nowifi" src="<?= $build ?>images/wifi-blocknowifi.<?= $webp == "webp" ? "webp" : "png" ?>" alt="пивоварня Bavaria без WiFi">
                            </div>
                        </div>

                        <div class="wifi-wrapper__img-block">
                            <div class="wifi-wrapper__img-block__title">
                                <p> Блок управления с WiFi </p>
                            </div>
                            <div class="wifi-wrapper__img-block__img">
                                <img class="wifi" src="<?= $build ?>images/wifi-blockwifi.<?= $webp == "webp" ? "webp" : "png" ?>" alt="пивоварня Bavaria с WiFi">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var wifi = new Vue({
            el: '#wifi',
            data: {
                table: [{
                        function: "Дисплей",
                        nowifi: "Текстовый",
                        wifi: "Графический",
                    },

                    {
                        function: "Режим варки",
                        nowifi: "Ручной и автоматический",
                        wifi: "Ручной и автоматический",
                    },

                    {
                        function: "Сохранение рецептов",
                        nowifi: "10",
                        wifi: "8",
                    },

                    {
                        function: "Отложенный старт",
                        nowifi: "<span style='color: #27AE60;'> ✓ </span>",
                        wifi: "<span style='color: #27AE60;'> ✓ </span>",
                    },

                    {
                        function: "Звуковая сигнализация",
                        nowifi: "<span style='color: #27AE60;'> ✓ </span>",
                        wifi: "<span style='color: #27AE60;'> ✓ </span>",
                    },

                    {
                        function: "Количество температурных пауз в автоматическом режиме",
                        nowifi: "6 + температура засыпи",
                        wifi: "6 + температура засыпи",
                    },

                    {
                        function: "Удалённое управление-контроль пивоварней через WiFi",
                        nowifi: "<span style='color: #EB5757;'> × </span>",
                        wifi: "<span style='color: #27AE60;'> ✓ </span>",
                    },

                    {
                        function: "Работа с сервером wifi.bavaria-beer.ru  ",
                        nowifi: "<span style='color: #EB5757;'> × </span>",
                        wifi: "<span style='color: #27AE60;'> ✓ </span>",
                    },

                    {
                        function: "Работа с мобильным приложением  ",
                        nowifi: "<span style='color: #EB5757;'> × </span>",
                        wifi: "<span style='color: #27AE60;'> ✓ </span>",
                    },
                ]
            },
            components: {

            },
            mounted() {
                if (window.innerWidth >= 993) {
                    ScrollTrigger.create({
                        trigger: '#wifi',
                        once: true,
                        onEnter: () => {
                            // gsap.from(
                            //     ["#wifi .title", "#wifi .subtitle"], {
                            //         opacity: 0,
                            //         delay: 0.9,
                            //         duration: 1.3,
                            //         stagger: 0.3,
                            //     }
                            // );

                            gsap.from(".wifi-wrapper__img", {
                                delay: 0.7,
                                duration: 1,
                                opacity: 0,
                                x: 70,
                                stagger: 0.3,
                            });
                        },
                    })
                }
            }
        })
    })
</script>