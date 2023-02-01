<section id="consultation">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div v-bind:class="{ 'consultation-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">
                <div class="consultation-block-bg <?= $webp == "webp" ? "webp" : "" ?>">
                    <div class="consultation-wrapper">

                        <div class="consultation-title-wrap">
                            <div class="consultation-title">
                                <h2>Консультируем по бесплатной <br> горячей линии</h2>
                            </div>
                        </div>

                        <div class="consultation-phone-wrap">
                            <div class="consultation-phone">
                                <p>8 800 250 59 32</p>
                            </div>
                        </div>

                        <div class="consultation-phone-decr-wrap">
                            <div class="consultation-phone-decr">
                                <p>Звоните прямо сейчас, задавайте&nbsp;вопросы <br> и бронируйте спецпредложения.</p>
                            </div>
                        </div>

                        <div class="consultation-button-wrap">
                            <div class="consultation-button">
                                <a href="#modal-call" data-fancybox class="button">Заказать звонок</a>
                            </div>
                        </div>

                        <div class="consultation-price-wrap">
                            <div class="consultation-price">
                                <p>Звонок по России <br> бесплатный</p>
                            </div>
                        </div>

                        <div class="consultation-img-wrap">
                            <div class="consultation-img  <?= $webp == "webp" ? "webp" : "" ?>">
                                <img class="phone" src="<?= $build ?>images/consultation-phone.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Консультация">
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
        var consultation = new Vue({
            el: '#consultation',
            data: {
                lazyBg: false,

            },
            components: {

            },
            methods: {

            },
            mounted() {
                ScrollTrigger.create({
                    trigger: '#consultation',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.to(".consultation-img img", {
                                delay: 0.9,
                                duration: 1.4,
                                rotationY: 0,
                            });
                        }
                    },
                })
            }
        })
    })
</script>