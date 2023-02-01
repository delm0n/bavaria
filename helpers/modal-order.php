<div id="modal-order">
    <div class="modal-container <?= $webp == "webp" ? "webp" : "" ?>">
        <div class="modal-order__wrapper">
            <div class="modal-order__wrapper-img">
                <img src="<?= $build ?>images/modal-bg.<?= $webp == "webp" ? "webp" : "png" ?>" alt="пивоварня Bavaria">
            </div>
            <div class="modal-order__wrapper-content">
                <h3 class="modal-title">Пивоварня Bavaria</h3>

                <form class="spnForm form-modal" action="sendOrder.php" method="post">

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

                    <div class="input-container">

                        <p class="modal-decr ">Оформление заказа</p>
                        <div class="standart-input">
                            <label for="name" class="placeholder"> Ваше имя <span>*</span> </label>
                            <input type="text" v-model="name" name="name" placeholder="" required>
                        </div>

                        <div class="standart-input">
                            <label for="phone" class="placeholder last-modal-label">Ваш телефон
                                <span>*</span></label>
                            <input type="tel" v-mask="'+7 (###) ###-##-##'" v-model="phone" name="phone" placeholder="+7 (***) ***-**-**" required />
                        </div>

                        <p class="modal-decr last-modal-decr">Выберите объем пивоварни и дополнительные опции</p>

                        <!-- выпадающий список -->
                        <div class="standart-input">
                            <label for="modal" class="placeholder"> Объём </label>
                            <div class="custom-select">
                                <div class="selectBox " ref="collapseToggle" v-on:click="collapse=!collapse">
                                    <div>{{user.model.value}}</div>
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
                                        </ul>

                                    </collapse-transition>
                                </template>
                            </div>
                        </div>
                        <!-- выпадающий список -->

                        <!-- кастомный чекбокс -->
                        <div class="checkbox-input" v-for="model in goodsArray__models" v-if="model.id == user.model.id ">
                            <div class="checkbox">
                                <input class="checkbox__input" v-bind:class="{ 'checkbox__input-check': user.model.wifi }" type="checkbox">
                                <label v-on:click="user.model.wifi = !user.model.wifi" class="checkbox__label">
                                    Блок управления c Wifi <br> <span> +&nbsp;{{user.model.price_wifi - user.model.price}}&nbsp;руб.</span></label>
                            </div>
                        </div>
                        <!-- кастомный чекбокс -->

                    </div>

                    <div class="offer-container">

                        <div class="submit-input__price">
                            итого:
                            <span v-if="user.model.wifi">{{user.model.price_wifi}}</span>
                            <span v-else>{{user.model.price}}</span>
                            ₽
                        </div>

                        <div class="submit-input__button">
                            <button type="submit" class="button">
                                Заказать
                            </button>
                        </div>

                        <!-- кастомный radio -->
                        <div class="radio-input">
                            <div class="radio">
                                <input class="radio__input" v-bind:class="{ 'radio__input-check': credit }" v-model="credit" type="checkbox">
                                <label v-on:click="setCredit(!credit)" class="radio__label">Покупка в
                                    рассрочку</label>
                            </div>
                        </div>
                        <!-- кастомный radio -->

                        <div class="modal-disclaimer">
                            <p>Нажимая кнопку “Заказать”, вы соглашаетесь на обработку
                                персональных
                                данных, а
                                так же с
                                <a href="uploadupdate/confidentiality.pdf" target="_blank"> политикой конфиденциальности
                                </a>
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    var order = new Vue({
        el: '#modal-order',
        store,
        data: {
            user: user,
            collapse: false,
        },
        components: {
            Vue2Transitions: window["Vue2Transitions"],
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

            //обновление состояния рассрочки
            setCredit(val) {
                store.commit('updateUserCredit', val)
            },

            // выбор модели из выпадающего списка в модальном окне
            modalCollapseModel(id) {
                this.$refs.collapseToggle.click();
                user.model = goodsArray__models.find((model) => model.id == id);
                user.model.wifi = false;
            },

            // выбор модели
            changeModel(id) {
                user.model = goodsArray__models.find((model) => model.id == id);
                user.model.wifi = this.wifiTab;
            },

        }
    })
</script>