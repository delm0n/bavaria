<section id="pivovarov">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div v-bind:class="{ 'pivovarov-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">

            <div class="container">
                <h2 class="title">Дмитрий Пивоваров</h2>
                <p class="subtitle">Известный пивовар. Создал аппарат “BAVARIA”.</p>
                <div class="pivovarov-wrapper">
                    <div class="pivovarov-wrapper__container">
                        <div class="pivovarov-wrapper__text">

                            <p>
                                Процесс создания оказался очень сложным, необходимо было учесть разные технологии, которыми пользуются пивовары по всей
                                России, что уж там, по всему Миру.<span v-show="!textReturn" class="show-hide-inline">..</span>
                            </p>

                            <div class="show-hide-block">
                                <template>
                                    <collapse-transition :duration="{ enter: 600, leave: 200 }">
                                        <div v-show="textReturn">
                                            <br>
                                            <p v-html="hideText"></p>
                                        </div>
                                    </collapse-transition>
                                </template>
                            </div>

                            <div class="hide-show-block">
                                <p v-html="hideText"></p>
                            </div>

                            <div class="collapse-toggle show-hide-block" v-on:click="collapse = !collapse">
                                <p v-show="!collapse">Весь текст</p>
                                <p v-show="collapse">Свернуть текст</p>
                            </div>

                        </div>

                        <div class="pivovarov-wrapper__img">
                            <template>
                                <slide-y-down-transition :duration="{ enter: 700, leave: 200 }">
                                    <img v-show="imgReturn" src="<?= $build ?>images/pivovarov-paint.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Пивоварня Bavaria">
                                </slide-y-down-transition>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var pivovarov = new Vue({
            el: '#pivovarov',
            data: {
                lazyBg: false,
                collapse: false,
                hideText: `Требовалось много испытаний и доработок. Но
                                    в конечном итоге мы получили продукт, которому нет равных на рынке.
                                    <br><br>
                                    Прошло уже несколько лет, но это по прежнему моя гордость!`
                // windowWidth: window.innerWidth
            },
            components: {
                Vue2Transitions: window["Vue2Transitions"],
            },
            computed: {

                textReturn() {
                    return this.collapse;
                },

                imgReturn() {
                    return !this.collapse;
                }
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: "#pivovarov",
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(".pivovarov-wrapper", {
                                delay: 0.7,
                                duration: 1,
                                opacity: 0,
                                x: 70,
                            });

                            gsap.from(['#pivovarov' + " .title", '#pivovarov' + " .subtitle"], {
                                delay: 0.6,
                                duration: 1.4,
                                opacity: 0,
                            });
                        }
                    },
                });

            },
        })
    })
</script>