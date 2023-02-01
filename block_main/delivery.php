<section id="delivery">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>

        <div v-bind:class="{ 'delivery-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">
                <h2 class="title">Доставка в любую точку России</h2>
                <p class="subtitle">в ближайший пункт выдачи или до вашей двери!</p>

                <div class="delivery-wrapper">
                    <div class="car-bg <?= $webp == "webp" ? "webp" : "" ?>">
                        <div class="delivery-wrapper-container">
                            <div class="form-container">

                                <form action="sendOrder.php" method="post" class="spnForm order-form ">

                                    <!-- модель -->
                                    <input v-if="user.model.wifi" type="hidden" name="id" :value="user.model.id_wifi" />
                                    <input v-else type="hidden" name="id" :value="user.model.id" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <!-- модель -->

                                    <input type="hidden" class="url" name="url" />
                                    <input type="hidden" class="gmt" name="gmt" />

                                    <!-- кредит -->
                                    <input v-if="user.credit" type="hidden" class="comment" name="comment" value="Покупка в рассрочку. ">
                                    <input v-else type="hidden" class="comment" name="comment" value="">
                                    <!-- кредит -->

                                    <div class="user-info">
                                        <label for="name" class="placeholder">Населенный пункт <input type="text" v-model="user.name" name="name" placeholder="Москва" required></label>
                                        <label for="phone" class="placeholder">Номер телефона
                                            <input type="tel" v-mask="'+7 (###) ###-##-##'" v-model="phone" name="phone" placeholder="+7 (***) ***-**-**" required />
                                        </label>
                                        <!-- <div></div> -->

                                        <button type="submit" class="button">Рассчитать стоимость</button>
                                    </div>

                                </form>

                            </div>

                            <div class="features-container">
                                <div class="features-wrapper">
                                    <div v-for="feature in features" class="features-wrapper__item">

                                        <div class="features-wrapper__item-svg" v-html="feature.svg"></div>

                                        <div class="features-wrapper__item-text">
                                            <div class="features-wrapper__item-title">
                                                <p v-html="feature.title"></p>
                                            </div>

                                            <div class="features-wrapper__item-decr">
                                                <p v-html="feature.decr"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="icons-container">

                                <div class="icons-wrapper">
                                    <img src=" <?= $build ?>images/delivery-pochta.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Доставка почта россии ">

                                    <img src=" <?= $build ?>images/delivery-dpd.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Доставка DPD">

                                    <img src=" <?= $build ?>images/delivery-cdek.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Доставка СДЭК">

                                </div>


                            </div>

                            <div class="car-container">
                                <div class="car-wrapper">
                                    <img src=" <?= $build ?>images/car-bg.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Доставка">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>

                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {

        var delivery = new Vue({
            el: '#delivery',
            store,
            data: {
                lazyBg: false,
                features: [{
                        svg: `<svg xmlns="http://www.w3.org/2000/svg" width="47" height="34" viewBox="0 0 47 34" fill="none">
                                <path d="M36.3297 1.25391C36.3297 1.25391 32.8047 4.38729 32.413 4.4852C31.3359 4.68104 26.5379 2.42892 25.5587 2.13516C24.5796 1.93933 14.8857 4.97479 14.2002 6.14981C13.5148 7.32482 16.3544 10.0665 19.0961 9.67486C21.8379 9.28319 25.9504 7.91233 27.1254 9.08735C29.0838 11.0457 34.6651 16.9208 37.3089 19.2708C39.561 21.2292 46.0236 11.0457 46.0236 11.0457" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M24.4815 29.8465L21.3481 26.6152" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M29.7693 28.0833L24.188 22.1104" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M34.5671 25.2436L27.9087 18.4873" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M13.3188 29.7487C14.1021 30.532 15.2771 30.532 16.0605 29.7487L17.823 27.9862C18.6063 27.2028 18.4105 26.0278 17.5292 25.1465C16.648 24.2653 15.473 24.0694 14.6896 24.8528C15.473 24.0694 15.2771 22.8944 14.3959 22.0132C13.5146 21.1319 12.3396 20.9361 11.5562 21.7194C12.3396 20.9361 12.1437 19.761 11.2625 18.8798C10.3812 17.9985 9.20621 17.8027 8.42286 18.586C9.20621 17.8027 9.01037 16.6277 8.12911 15.7464C7.24784 14.8651 6.07283 14.6693 5.28949 15.4526L3.52696 17.2152C2.74362 17.9985 2.74362 19.1735 3.52696 19.9569L13.3188 29.7487Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M16.8438 28.9637L17.4313 29.5512L18.9 31.0199C21.1521 33.2721 23.3063 31.6075 24.3834 29.747C26.4397 30.8241 28.7897 29.6491 29.671 27.9845C32.3148 29.2574 34.6648 26.6136 34.469 25.2428C37.3086 25.047 39.267 21.8157 37.3086 19.1719" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M1.0791 12.0254L3.13538 14.1796C3.33121 14.9629 3.91873 15.7463 4.40832 16.4317" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M14.3961 5.95377L10.8711 2.42871" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M8.42315 18.6836L5.3877 21.817" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M8.42315 18.6836L5.3877 21.817" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M11.5565 21.8164L8.521 24.9498" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                <path d="M14.6898 24.9502L11.6543 28.0836" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                                </svg>`,
                        title: 'Оплата',
                        decr: 'при <br> получении'
                    },

                    {
                        svg: `<svg xmlns="http://www.w3.org/2000/svg" width="42" height="40" viewBox="0 0 42 40" fill="none">
                            <path d="M11.7876 34.9658H12.7668C15.0189 34.9658 15.5085 37.9034 18.6419 37.9034C19.2294 37.9034 26.4753 37.9034 26.4753 37.9034" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M40.1837 24.1947C40.1837 23.1176 39.3025 22.2363 38.2254 22.2363H33.3295C32.2524 22.2363 31.3711 23.1176 31.3711 24.1947V26.153C31.3711 27.2301 32.2524 28.1114 33.3295 28.1114H38.2254C39.3025 28.1114 40.1837 27.2301 40.1837 26.153V24.1947Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M39.2042 18.3187C39.2042 17.2416 38.323 16.3604 37.2459 16.3604H32.35C31.2729 16.3604 30.3916 17.2416 30.3916 18.3187V20.2771C30.3916 21.3542 31.2729 22.2354 32.35 22.2354H37.2459C38.323 22.2354 39.2042 21.3542 39.2042 20.2771V18.3187Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M39.2042 30.0707C39.2042 28.9936 38.323 28.1123 37.2459 28.1123H32.35C31.2729 28.1123 30.3916 28.9936 30.3916 30.0707V32.029C30.3916 33.1061 31.2729 33.9874 32.35 33.9874H37.2459C38.323 33.9874 39.2042 33.1061 39.2042 32.029V30.0707Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M37.2462 35.9447C37.2462 34.8676 36.365 33.9863 35.2879 33.9863H30.392C29.3149 33.9863 28.4336 34.8676 28.4336 35.9447V36.9239C28.4336 38.001 29.3149 38.8822 30.392 38.8822H35.2879C36.365 38.8822 37.2462 38.001 37.2462 36.9239V35.9447Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M11.7874 16.3604H1.99561V37.9023H11.7874V16.3604Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M19.8167 30.0699C24.4188 28.3073 27.3564 23.9989 27.4543 19.2989C27.4543 19.2989 27.4543 14.9905 27.4543 14.403C27.4543 13.7175 28.4335 12.1508 28.4335 8.91955C28.4335 5.68826 27.846 4.51324 26.4751 2.75072C25.1043 0.988192 22.5584 1.47778 22.5584 3.24031V4.61116C22.5584 8.52788 21.0896 11.0738 18.5438 14.0113L14.725 18.3197H12.7666" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            <path d="M6.8916 19.2988V23.2155" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                            </svg>`,
                        title: 'Проверка',
                        decr: 'перед <br> оплатой'
                    },

                    {
                        svg: `<svg xmlns="http://www.w3.org/2000/svg" width="43" height="42" viewBox="0 0 43 42" fill="none">
                                <path d="M41.1628 13.6104H1.99561" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M7.87061 7.73438V9.69274H12.7665V7.73438" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M30.3916 7.73438V9.69274H35.2875V7.73438" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M7.87069 5.77707H3.95397C2.87197 5.77707 1.99561 6.65344 1.99561 7.73543V38.09C1.99561 39.172 2.87197 40.0484 3.95397 40.0484H39.2045C40.2865 40.0484 41.1628 39.172 41.1628 38.09V7.73543C41.1628 6.65344 40.2865 5.77707 39.2045 5.77707H35.2877V2.83953C35.2877 2.29902 34.8491 1.86035 34.3086 1.86035H31.371C30.8305 1.86035 30.3918 2.29902 30.3918 2.83953V5.77707H12.7666V2.83953C12.7666 2.29902 12.3279 1.86035 11.7874 1.86035H8.84987C8.30936 1.86035 7.87069 2.29902 7.87069 2.83953V5.77707Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M15.7041 21.4434H19.6208" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M23.5376 21.4434H27.4543" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M31.3711 21.4434H35.2878" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M7.87061 26.3408H11.7873" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M15.7041 26.3408H19.6208" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M23.5376 26.3408H27.4543" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M31.3711 26.3408H35.2878" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M7.87061 31.2354H11.7873" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M15.7041 31.2354H19.6208" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M23.5376 31.2354H27.4543" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10"/>
                                </svg>`,
                        title: 'Срок доставки',
                        decr: 'от <br> 2 дней'
                    },

                    {
                        svg: `<svg xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44" fill="none">
                            <path d="M15.4704 16.9106C13.7079 14.3647 8.12658 12.7001 7.53908 13.5814C7.04949 14.1689 8.51826 16.6168 9.49744 18.3794C8.12658 19.3585 6.95157 20.7294 6.26614 22.2961C5.38488 22.6878 4.30779 22.8836 2.7411 22.8836C1.37025 22.8836 1.95776 26.6045 3.23069 29.0524C4.40571 31.2066 11.7496 35.7108 12.7287 35.9067V42.4672H15.6663L17.6246 38.5505C19.4851 39.138 22.4226 39.5297 24.4789 39.5297C26.731 39.5297 29.081 39.3338 31.3332 38.6484L33.2915 42.4672H36.2291L37.502 34.9275C39.9499 32.5775 41.125 29.4441 41.125 25.8211C41.125 18.4773 32.704 13.0918 23.5976 13.0918C19.7788 13.0918 16.4496 14.1689 13.9037 15.4418" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                            <path d="M37.2082 25.7228C37.2082 21.6102 31.6268 16.9102 25.458 16.9102" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.7705 22.7842H12.7289" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                            <path d="M19.0933 11.035C18.1141 9.95787 17.6245 8.58702 17.6245 7.11825C17.6245 3.88695 20.2683 1.24316 23.4996 1.24316C26.7309 1.24316 29.3747 3.88695 29.3747 7.11825C29.3747 8.58702 28.7872 9.95787 27.9059 11.035" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round"/>
                            <path d="M41.125 25.7235L42.8875 24.5485C43.475 24.1568 44.2584 24.4506 44.4542 25.136C44.748 25.9193 45.6292 26.1152 46.2167 25.5277L47.0001 24.7443" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>`,
                        title: 'Стоимость <br> доставки по РФ',
                        decr: 'в среднем 400&#8209;800&nbsp;₽'
                    },
                ]
            },
            components: {

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
            },


            mounted() {
                ScrollTrigger.create({
                    trigger: '#delivery',
                    once: true,

                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {

                            gsap.from(['#delivery' + " .title", '#delivery' + " .subtitle"], {
                                opacity: 0,
                                delay: 0.9,
                                duration: 1.3,
                                stagger: 0.3,
                            });

                            if (window.innerWidth >= 1440) {
                                var tl = gsap.timeline();

                                tl.from(".car-bg", {
                                    delay: 1.5,
                                    duration: 1,
                                    x: -200,
                                });

                                tl.from(".delivery-wrapper-container", {
                                    delay: 0.5,
                                    duration: 1.2,
                                    opacity: 0,
                                });
                            } else {

                                gsap.from(".car-wrapper", {
                                    delay: 1,
                                    duration: 1.5,
                                    x: -200,
                                });
                            }

                        }
                    },
                })
            }
        })
    })
</script>