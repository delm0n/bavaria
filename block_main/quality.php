<section id="quality">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div v-bind:class="{ 'quality-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">Отечественное качество, <br> не сравнимое ни с чем</h2>
                <p class="subtitle">Сравните BAVARIA с китайским аналогом<br> и убедитесь сами:</p>

                <div class="quality-content__container">


                    <div class="row-title">
                        <div class="chine">
                            <p> Китайская пивоварня</p>
                        </div>
                        <div class="bavaria">
                            <p> BAVARIA</p>
                        </div>
                    </div>

                    <vue-slick-carousel v-bind="settingsQualitySlides" class="slider-wrapper">

                        <div v-for="quality in qualities" class="row-diff">

                            <div class="row-diff__block">
                                <div class="chine">
                                    <div class="chine-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#EB5757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 9L9 15" stroke="#EB5757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9 9L15 15" stroke="#EB5757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="chine-text">
                                        <p>
                                            {{quality.textChine}}
                                        </p>
                                    </div>

                                </div>

                                <div class="bavaria">
                                    <div class="chine-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69279 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke="#219653" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22 4L12 14.01L9 11.01" stroke="#219653" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="chine-text">
                                        <p>
                                            {{quality.textBavaria}}
                                        </p>
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
        var quality = new Vue({
            el: '#quality',
            data: {
                lazyBg: false,
                qualities: [{
                        textChine: "Вместо блока управления — полочный терморегулятор, который не предназначен для пивоварни. ",
                        textBavaria: "Специальный блок управления, который предназначен для пивоварни: можно выбирать режимы и контролировать процесс до мельчайших деталей.  ",
                    },
                    {
                        textChine: "Интерфейс и кнопки не русифицированы и не адаптированы под русскоговорящего пользователя. ",
                        textBavaria: "Простой и понятный интерфейс на русском языке.",
                    },
                    {
                        textChine: "В памяти устройства нет библиотеки для сохранённых рецептов.",
                        textBavaria: "Есть возможность сохранять любимые рецепты в памяти устройства. ",
                    },
                    {
                        textChine: "Не предусмотрена защита при отключении аппарата от сети. Если процесс прервётся — вся партия пропадёт. ",
                        textBavaria: "При отключении устройства от сети есть возможность возобновить или продолжить варку в автоматическом режиме — пиво не будет испорчено. ",
                    },
                    {
                        textChine: "Насос качает воду сверху вниз. Солод не омывается так, как нужно. ",
                        textBavaria: " Насос качает воду снизу вверх. Дробина омывается в соответствии с правильной технологией варки. ",
                    },
                    {
                        textChine: "Корпус продолговатый и вытянутый — его не удобно мыть. Внизу и вверху пивоварни образуется огромная разница температур. ",
                        textBavaria: "Конструкция без ошибок, не требующая больших усилий по уходу и обеспечивающая правильные температурные условия. ",
                    },
                ],

                settingsQualitySlides: {
                    responsive: [{
                            breakpoint: 9999,
                            settings: "unslick",
                        },

                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 1,
                                touchMove: true,
                                slidesToScroll: 1,
                                infinite: true,
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
                                touchMove: true,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
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
                    trigger: '#quality',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(['#quality' + " .title", '#quality' + " .subtitle"], {
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