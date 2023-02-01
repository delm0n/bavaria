<section id="made">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div v-bind:class="{ 'made-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">Вы заказываете пивоварню <br> напрямую от завода -&nbsp;производителя</h2>

                <div class="made-wrapper">
                    <div class="made-wrapper__features">
                        <p class="made-wrapper__features-title">
                            Для вас это означает:
                        </p>
                        <div v-for="feature in features" class="made-wrapper__features-item">
                            <div class="features-item__img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="22" r="22" />
                                    <path d="M10.5074 15C16.8478 18.3528 23.1443 21.6859 20.2951 28C10.1944 26.1076 9.07255 20.9986 10.5074 15Z" />
                                    <path d="M10.5074 26C16.8478 29.3528 23.1443 32.6859 20.2951 39C10.1944 37.1076 9.07255 31.9986 10.5074 26Z" />
                                    <path d="M32.8605 15C33.439 23.9526 32.5568 25.1696 23.6333 28C21.1059 21.7282 26.5435 18.3312 32.8605 15Z" />
                                    <path d="M21.6262 19C16.2948 14.4546 17.6283 9.77739 20.6138 5C26.1662 9.46352 26.3837 12.3355 21.6262 19Z" />
                                    <path d="M32.8605 26C33.439 34.9526 32.5568 36.1696 23.6333 39C21.1059 32.7282 26.5435 29.3312 32.8605 26Z" />
                                </svg>
                            </div>
                            <p class="features-item__text" v-html="feature.text"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var made = new Vue({
            el: '#made',
            data: {
                lazyBg: false,
                features: [{
                        text: 'Без посредников <br> и наценок'
                    },
                    {
                        text: 'Пивоварни всегда в наличии, <br> отправка будет незамедлительно'
                    },
                    {
                        text: 'Вся продукция проходит строгие проверки <br> в отделе технического контроля - брак исключён'
                    },
                    {
                        text: 'Мы работаем исключительно в соответствии <br> с российским законодательством, а это значит, что все наши гарантии зафиксированы в договоре'
                    },
                ]
            },
            components: {

            },
            methods: {

            },
            mounted() {
                ScrollTrigger.create({
                    trigger: '#made',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(".made-wrapper__features", {
                                delay: 1.4,
                                duration: 1.3,
                                opacity: 0,
                                x: 70,
                            });

                            gsap.from("#made .title", {
                                delay: 0.6,
                                duration: 1.4,
                                opacity: 0,
                            });
                        }
                    },
                })
            }
        })
    })
</script>