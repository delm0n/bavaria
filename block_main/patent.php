<section id="patent">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div class="container">
            <div class="patent-bg <?= $webp == "webp" ? "webp" : "" ?>">
                <div class="patent-wrapper">
                    <div class="patent-wrapper__img">
                        <img src=" <?= $build ?>images/patent-img.<?= $webp == "webp" ? "webp" : "png" ?>" alt="img">
                    </div>
                    <div class="patent-wrapper__text">
                        <h2>Декларация о соответствии и патент</h2>
                        <p>подтверждают высокое качество <br>
                            и безопасность эксплуатации <br> пивоварни “Bavaria”</p>
                    </div>

                    <div class="patent-wrapper__container">
                        <div class="patent-wrapper__block">

                            <vue-slick-carousel v-bind="settingsPatentSlides" class="slider-wrapper">
                                <a href="<?= $build ?>images/patent-item1-modal.<?= $webp == "webp" ? "webp" : "png" ?>" data-fancybox class="slider-wrapper__img ">
                                    <div class="zoom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                            <rect width="33" height="33" rx="16.5" fill="#FFB800" />
                                            <path d="M16 24C20.4183 24 24 20.4183 24 16C24 11.5817 20.4183 8 16 8C11.5817 8 8 11.5817 8 16C8 20.4183 11.5817 24 16 24Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M26 26L22 22" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C12 15.4477 12.4477 15 13 15H19C19.5523 15 20 15.4477 20 16C20 16.5523 19.5523 17 19 17H13C12.4477 17 12 16.5523 12 16Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 20C15.4477 20 15 19.5523 15 19L15 13C15 12.4477 15.4477 12 16 12C16.5523 12 17 12.4477 17 13L17 19C17 19.5523 16.5523 20 16 20Z" fill="black" />
                                        </svg>
                                    </div>
                                    <img src="<?= $build ?>images/patent-item1.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Патент на пивоварню">
                                </a>

                                <a href="<?= $build ?>images/patent-item2-modal.<?= $webp == "webp" ? "webp" : "png" ?>" data-fancybox class="slider-wrapper__img ">
                                    <div class="zoom">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                                            <rect width="33" height="33" rx="16.5" fill="#FFB800" />
                                            <path d="M16 24C20.4183 24 24 20.4183 24 16C24 11.5817 20.4183 8 16 8C11.5817 8 8 11.5817 8 16C8 20.4183 11.5817 24 16 24Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M26 26L22 22" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 16C12 15.4477 12.4477 15 13 15H19C19.5523 15 20 15.4477 20 16C20 16.5523 19.5523 17 19 17H13C12.4477 17 12 16.5523 12 16Z" fill="black" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 20C15.4477 20 15 19.5523 15 19L15 13C15 12.4477 15.4477 12 16 12C16.5523 12 17 12.4477 17 13L17 19C17 19.5523 16.5523 20 16 20Z" fill="black" />
                                        </svg>
                                    </div>
                                    <img src="<?= $build ?>images/patent-item2.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Евразийский экономический союз декларации о соответствии">
                                </a>

                            </vue-slick-carousel>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var patent = new Vue({
            el: '#patent',
            data: {

                settingsPatentSlides: {
                    responsive: [{
                            breakpoint: 9999,
                            settings: "unslick",
                        },

                        {
                            breakpoint: 768,
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
                    ],
                },

            },
            components: {
                VueSlickCarousel: window["vue-slick-carousel"],
            },
            mounted() {

            }
        })
    })
</script>