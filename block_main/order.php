<section id="order">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div v-bind:class="{ 'order-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">Закажите пивоварню BAVARIA <br> до <?= $date_c[0] ?> <?= $rus_month ?>
                </h2>
                <p class="subtitle">Получите скидку и 3 подарка, которые пригодятся любому пивовару</p>

                <div class="order-wrapper">
                    <div class="order-wrapper__img-container">
                        <div class="order-wrapper__img">
                            <img class="bar" src="<?= $build ?>images/order-bar.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Закажите пивоварню BAVARIA">
                        </div>
                    </div>

                    <div class="order-wrapper__present-container">
                        <div class="order-wrapper__present">
                            <div v-for="(present,index) in presents" class="order-wrapper__present-item">
                                <div class="circle">
                                    {{index+1}}
                                </div>
                                <div class="item-text">
                                    <p class="item-text__title" v-html="present.title"></p>
                                    <p class="item-text__price" v-html="present.price"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-wrapper__form-container">
                        <div class="order-wrapper__form <?= $webp == "webp" ? "webp" : "" ?>">
                            <!-- <form method="post" class="spnForm order-form " action="sendOrder.php"> -->
                            <form class="spnForm form-modal order-form-content" action="sendOrder.php" method="post">
                                <!-- модель -->
                                <input v-if="user.model.wifi" type="hidden" name="id" :value="user.model.id_wifi" />
                                <input v-else type="hidden" name="id" :value="user.model.id" />
                                <input type="hidden" name="quantity" value="1" />
                                <!-- модель -->

                                <input type="hidden" class="url" name="url" />
                                <input type="hidden" class="gmt" name="gmt" />

                                <!-- кредит -->
                                <input v-if="credit" type="hidden" class="comment" name="comment" value="Покупка в рассрочку. ">
                                <input v-else type="hidden" class="comment" name="comment" value="">
                                <!-- кредит -->

                                <h4 class="order-form-content__title">Закажите до <?= $date_c[0] ?>.<?= $date_c[1] ?>
                                    <br> и получите, помимо подарков, <span> скидку&nbsp;30%</span>
                                </h4>

                                <div class="order-form-offer">
                                    <p class="old-price" v-if="user.model.wifi">{{user.model.oldPrice_wifi}} ₽</p>
                                    <p class="old-price" v-else>{{user.model.oldPrice}} ₽</p>

                                    <p class="new-price" v-if="user.model.wifi">за {{user.model.price_wifi}} ₽</p>
                                    <p class="new-price" v-else>за {{user.model.price}} ₽</p>
                                </div>

                                <!-- выпадающий список -->
                                <div class="standart-input">
                                    <label for="modal" class="placeholder"> Объём </label>
                                    <div class="custom-select">
                                        <div class="selectBox " ref="collapseToggle" v-on:click="collapse=!collapse">
                                            <div>{{user.model.value}} <span v-if="user.model.wifi"> + WIFI</span> </div>
                                            <div class="arrow" v-bind:class="{'arrow-rotate': collapse}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="13" viewBox="0 0 23 13" fill="none">
                                                    <path d="M10.3432 11.7708C10.9087 12.3364 11.8257 12.3364 12.3912 11.7708L21.6075 2.55452C22.1731 1.98896 22.1731 1.07201 21.6075 0.506448C21.042 -0.0591116 20.125 -0.0591116 19.5595 0.506448L11.3672 8.69873L3.1749 0.506448C2.60934 -0.0591116 1.69239 -0.0591116 1.12683 0.506448C0.561272 1.07201 0.561272 1.98896 1.12683 2.55452L10.3432 11.7708ZM9.91898 10.0195V10.7468H12.8154V10.0195H9.91898Z" fill="black" />
                                                </svg>
                                            </div>
                                        </div>

                                        <template>
                                            <collapse-transition :duration="{ enter: 600, leave: 600 }">

                                                <ul v-show="collapse" class="dropDown">
                                                    <li v-for="model in goodsArray__models" v-on:click="modalCollapseModel(model.id)">
                                                        {{model.value}}
                                                    </li>
                                                    <li v-for="model in goodsArray__models" v-on:click="modalCollapseModelWifi(model.id)">
                                                        {{model.value}} + WIFI
                                                    </li>
                                                </ul>

                                            </collapse-transition>
                                        </template>
                                    </div>
                                </div>
                                <!-- выпадающий список -->

                                <div class="input-container">

                                    <div class="standart-input">
                                        <label for="name" class="placeholder"> Ваше имя <span>*</span> </label>
                                        <input type="text" v-model="name" name="name" placeholder="Иван" required>
                                    </div>

                                    <div class="standart-input">
                                        <label for="phone" class="placeholder last-modal-label">Ваш телефон
                                            <span>*</span></label>
                                        <input type="tel" v-mask="'+7 (###) ###-##-##'" v-model="phone" name="phone" placeholder="+7 (***) ***-**-**" required />
                                    </div>

                                    <!-- кастомный checkbox -->
                                    <div class="checkbox-input">
                                        <div class="checkbox">
                                            <input class="checkbox__input" v-bind:class="{ 'checkbox__input-check': credit }" v-model="credit" type="checkbox">
                                            <label v-on:click="setCredit(!credit)" class="checkbox__label">Покупка в
                                                рассрочку</label>
                                        </div>
                                    </div>
                                    <!-- кастомный checkbox -->

                                </div>

                                <div class="submit-input__button">
                                    <button type="submit" class="button">
                                        Заказать с подарками
                                    </button>
                                </div>

                            </form>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var order = new Vue({
            el: '#order',
            store,
            data: {
                lazyBg: false,
                wifi: " + Wifi",
                user: user,
                collapse: false,
                presents: [{
                        title: 'Книга <br> рецептов',
                        price: ''
                    },
                    {
                        title: 'Купон <br> на 1000 рублей',
                        price: ''
                    },
                    {
                        title: 'Чиллер',
                        price: '<span>1500 руб.</span>0 руб.'
                    },
                ]
            },
            computed: {
                phone: {
                    get() {
                        return store.state.user.phone
                    },
                    set(value) {
                        store.commit('updateUserPhone', value)
                    }
                },

                name: {
                    get() {
                        return store.state.user.name
                    },
                    set(value) {
                        store.commit('updateUserName', value)
                    }
                },
                credit: {
                    get() {
                        return store.state.user.credit
                    },
                },

            },
            methods: {
                // выбор модели из выпадающего списка в модальном окне
                modalCollapseModel(id) {
                    this.$refs.collapseToggle.click();
                    user.model = goodsArray__models.find((model) => model.id == id);
                    user.model.wifi = false;
                },

                modalCollapseModelWifi(id) {
                    this.$refs.collapseToggle.click();
                    user.model = goodsArray__models.find((model) => model.id == id);
                    user.model.wifi = true;

                },

                // выбор модели
                changeModel(id) {
                    user.model = goodsArray__models.find((model) => model.id == id);
                    user.model.wifi = this.wifiTab;
                },

                //обновление состояния рассрочки
                setCredit(val) {
                    store.commit('updateUserCredit', val)
                },

            },
            components: {
                Vue2Transitions: window["Vue2Transitions"],
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: "#order",
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(".order-wrapper__form-container", {
                                delay: 0.7,
                                duration: 1,
                                opacity: 0,
                                x: 70,
                            });

                            gsap.from(['#order' + " .title", '#order' + " .subtitle"], {
                                opacity: 0,
                                delay: 0.9,
                                duration: 1.3,
                            });
                        }
                    },
                });

            }
        })
    })
</script>