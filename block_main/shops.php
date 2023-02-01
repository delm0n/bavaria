<section id="shops">
    <div class="shops-bg <?= $webp == "webp" ? "webp" : "" ?>">
        <div class="container">
            <div class="shops-wrapper">
                <div class="shops-wrapper__img-container">
                    <div class="shops-wrapper__img <?= $webp == "webp" ? "webp" : "" ?>"></div>
                </div>

                <div class="shops-wrapper__title-container">
                    <h4 class="shops-wrapper__title">
                        Купить пивоварню еще удобнее <br> в наших розничных магазинах “Градус Хаус”
                    </h4>
                </div>

                <div class="shops-wrapper__text-container">
                    <div class="shops-wrapper__text-title">
                        <p>В наших магазинах вы сможете:</p>
                    </div>

                    <div class="shops-wrapper__text-list">
                        <ul>
                            <li>купить товары для консервирования, самогоноварения, копчения</li>
                            <li>оформить заявку на самовывоз и забрать товар, купленный в интернет-магазине
                            </li>
                        </ul>

                        <ul>
                            <li>оформить скидочную карту</li>
                            <li>сдать товар по гарантии, оформить возврат или обмен без бюрократии
                            </li>
                            <li>получить консультацию специалиста</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service__wrapper">
        <div class="service__map">
            <div id="shop-map" style="height: 745.33px"></div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        ScrollTrigger.create({
            trigger: '#shops',
            once: true,
            onEnter: () => {
                this.lazyBg = true;
                if (window.innerWidth >= 993) {
                    gsap.from(".shops-wrapper__img", {
                        delay: 1.4,
                        duration: 1.2,
                        y: 50,
                    });
                }
            },
        })
    })
</script>