<section id="credit">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div v-bind:class="{ 'credit-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">
                <h2 class="title">Начните пользоваться <br>
                    пивоварней уже сейчас
                </h2>
                <div class="credit-wrapper">
                    <div class="credit-steps">
                        <div class="credit-steps__item">
                            <div class="circle">
                                1
                            </div>
                            <p>Нажмите кнопку <br> “Купить в рассрочку”</p>

                        </div>
                        <div class="credit-steps__item">
                            <div class="circle">
                                2
                            </div>
                            <p>В появившемся окне выберите нужную комплектацию</p>
                        </div>
                        <div class="credit-steps__item">
                            <div class="circle">
                                3
                            </div>
                            <p>Нажмите<br> “Заказать”</p>
                        </div>
                    </div>

                    <div class="credit-offer">
                        <a draggable="false" v-on:click="setCredit(true)" href="#modal-order" data-fancybox class="button ">Купить в рассрочку</a>

                        <div class="credit-offer__price">
                            <p class="old">
                                <?= $bav_30['priceF'] ?> &#8381;
                            </p>

                            <p class="new">
                                <!-- за <?= $bav_30['priceF'] ?>  -->
                                от 11 247 &#8381;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var credit = new Vue({
            el: '#credit',
            store,
            data: {
                lazyBg: false
            },
            components: {

            },
            computed: {

                credit: {
                    get() {
                        return store.state.user.credit
                    },
                },


            },
            methods: {
                //обновление состояния рассрочки
                setCredit(val) {
                    store.commit('updateUserCredit', val)
                },
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: "#credit",
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(".credit-wrapper", {
                                delay: 0.7,
                                duration: 1,
                                opacity: 0,
                                x: 70,
                            });

                            gsap.from("#credit .title", {
                                delay: 0.6,
                                duration: 1.4,
                                opacity: 0,
                            });
                        }
                    },
                });

            }
        })
    })
</script>