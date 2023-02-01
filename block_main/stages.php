<section id="stages">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div class="loader"></div>
        <div v-bind:class="{ 'stages-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">Все этапы приготовления пива <br> в одном аппарате!</h2>
                <p class="subtitle">Минимум лишних действий в процессе варки</p>

                <div class="stages-container <?= $webp == "webp" ? "webp" : "" ?>">
                    <div class="stages-block">
                        <div class="stages-block__video">

                            <video style="opacity: 0;" preload="none" loop poster="<?= $build ?>images/stages-item1.<?= $webp == "webp" ? "webp" : "png" ?>" muted>
                                <source src="build/assets/stages-item1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                            </video>



                        </div>

                        <div v-for="(stage,index) in stages" class="stages-item">
                            <p class="stages-item__title">{{index+1 }}. {{stage.title}}</p>

                            <p v-for="(li, mark) in stage.list" class="stages-item__li">
                                {{mark+1}}. <span v-html="li"></span>
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
        var stages = new Vue({
            el: '#stages',
            data: {
                stages: [{
                        title: "Затирание",
                        video: "item1",
                        poster: "item1",
                        list: [
                            "Запрограммируйте пивоварню на конкретный рецепт или выберете ручной режим.",
                            "Засыпьте дроблёный солод.",
                            "Запустите процесс.",
                        ],
                    },

                    {
                        title: "Фильтрация",
                        video: "item1",
                        poster: "item2",
                        list: [
                            "Извлеките заторный бак и поставьте устройство на подставку.",
                            "Промываем дробину водой, <br> заранее нагретой до 80–90°.",
                        ],
                    },

                    {
                        title: "Варка",
                        video: "item1",
                        poster: "item3",
                        list: [
                            "Добавьте хмель для горечи <br> в самом начале варки. ",
                            "Добавьте хмель для вкуса, <br> когда прошло ¾ всего процесса.",
                            "Добавьте хмель для аромата <br> за 5–7 минут до конца варки.",
                        ],
                    },

                    {
                        title: "Охлаждение",
                        video: "item1",
                        poster: "item4",
                        list: [
                            "Подключите чиллер <br> к водопроводу при помощи шланга.",
                            "Поместите чиллер в сусло и остудите смесь до нужной для варки дрожжей температуры.",
                        ],
                    },
                ],
                lazyBg: false,

            },
            components: {

            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#stages',
                    // once: true,
                    onEnter: () => {
                        document.querySelector(".stages-block__video video").play();
                        gsap.to('.stages-block__video video', {
                            duration: 1.4,
                            delay: 0.4,
                            opacity: 1,
                        });

                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            gsap.from(['#stages' + " .title", '#stages' + " .subtitle"], {
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