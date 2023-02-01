<section id="equipment">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>

        <div class="loader"></div>

        <div v-bind:class="{ 'equipment-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">
                <h2 class="title">Создано пивоваром-экспертом</h2>
                <p class="subtitle">Для истинных ценителей пенной культуры</p>

                <div class="equipment-wrapper">

                    <div class="equipment-wrapper__controls">

                        <div class="control-item">
                            <div class="control-item__img control-item__img-anim">
                                <img src="<?= $build ?>images/equipment-lid.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Крышка">
                            </div>


                            <a v-on:click="equipmentChange($event, 1)" href="#modal-equipment" draggable="false" data-fancybox class="control-item__row control-item__row-one" v-bind:class="{ 'control-item__row_active': equipmentCheck(1) }">

                                <div class="area-img area-img-1"></div>

                                <? include './templates/helpers/control-item__arrow.php'; ?>

                                <div class="control-item__name">
                                    <h4 class="title-desktop"> Крышка </h4>
                                    <h4 class="title-mobile"> 1 </h4>
                                </div>
                            </a>
                        </div>

                        <div class="control-item">
                            <div class="control-item__img control-item__img-anim">
                                <img style="padding: 5px 0;" src="<?= $build ?>images/equipment-plank.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Прижимная планка">

                            </div>
                            <a v-on:click="equipmentChange($event, 2)" href="#modal-equipment" draggable="false" data-fancybox class="control-item__row" v-bind:class="{ 'control-item__row_active': equipmentCheck(2)  }">
                                <div class="area-img area-img-2"></div>

                                <? include './templates/helpers/control-item__arrow.php'; ?>

                                <div class="control-item__name">
                                    <h4 class="title-desktop"> Прижимная планка </h4>
                                    <h4 class="title-mobile"> 2 </h4>
                                </div>
                            </a>
                        </div>

                        <div class="control-item">
                            <div class="control-item__img control-item__img-anim">

                                <img src="<?= $build ?>images/equipment-sieve-1.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Фильтрующее сито">
                                <img src="<?= $build ?>images/equipment-sieve-2.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Сетка">
                                <img src="<?= $build ?>images/equipment-sieve-3.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Фильтрующее сито">

                            </div>

                            <a v-on:click="equipmentChange($event, 3)" href="#modal-equipment" draggable="false" data-fancybox class="control-item__row" v-bind:class="{ 'control-item__row_active': equipmentCheck(3)  }">
                                <div class="area-img area-img-3-1"></div>
                                <div class="area-img area-img-3-2"></div>
                                <div class="area-img area-img-3-3"></div>

                                <div class="control-item__arrow">

                                    <div class="sup-arow sup-arow__top">
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                            <path d="M8.5 1.5L2 8L8.5 14.5" stroke-width="2" stroke-linecap="round" />
                                        </svg>

                                        <div class="line-container">
                                            <svg class="line" xmlns="http://www.w3.org/2000/svg" width="332" height="2" viewBox="0 0 332 2" fill="none">
                                                <path d="M0 1H332" stroke-width="2" stroke-dasharray="4 4" />
                                            </svg>
                                        </div>


                                    </div>

                                    <div class="sup-arow sup-arow__center">
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                            <path d="M8.5 1.5L2 8L8.5 14.5" stroke-width="2" stroke-linecap="round" />
                                        </svg>

                                        <div class="line-container">
                                            <svg class="line" xmlns="http://www.w3.org/2000/svg" width="332" height="2" viewBox="0 0 332 2" fill="none">
                                                <path d="M0 1H332" stroke-width="2" stroke-dasharray="4 4" />
                                            </svg>
                                        </div>

                                        <svg class="rhomb" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                                            <rect y="6.01562" width="8.5" height="8.5" transform="rotate(-45 0 6.01562)" />
                                        </svg>


                                        <div class="line-container sup-arow__vertical">
                                            <svg class="line" xmlns="http://www.w3.org/2000/svg" width="332" height="2" viewBox="0 0 332 2" fill="none">
                                                <path d="M0 1H332" stroke-width="2" stroke-dasharray="4 4" />
                                            </svg>
                                        </div>

                                    </div>



                                    <div class="sup-arow sup-arow__bottom">
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                            <path d="M8.5 1.5L2 8L8.5 14.5" stroke-width="2" stroke-linecap="round" />
                                        </svg>

                                        <div class="line-container">
                                            <svg class="line" xmlns="http://www.w3.org/2000/svg" width="332" height="2" viewBox="0 0 332 2" fill="none">
                                                <path d="M0 1H332" stroke-width="2" stroke-dasharray="4 4" />
                                            </svg>
                                        </div>


                                    </div>

                                </div>
                                <div class="control-item__name">
                                    <h4 class="title-desktop"> Два фильтрующих сита <br> и сетка </h4>
                                    <h4 class="title-mobile" style="margin-bottom: 7px;"> 3 </h4>
                                </div>
                            </a>
                        </div>

                        <div class="control-item control-item-kettle">

                            <div class="control-item__img">
                                <img src="<?= $build ?>images/equipment-kettle.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Котёл">
                            </div>

                            <a v-on:click="equipmentChange($event, 4)" href="#modal-equipment" draggable="false" data-fancybox class="control-item__row control-item__row-4" v-bind:class="{ 'control-item__row_active': equipmentCheck(4) }">
                                <div class="area-img area-img-4"></div>

                                <? include './templates/helpers/control-item__arrow.php'; ?>

                                <div class="control-item__name">
                                    <h4 class="title-desktop"> Заторный бак </h4>
                                    <h4 class="title-mobile"> 4 </h4>
                                </div>
                            </a>

                            <a v-on:click="equipmentChange($event, 5)" href="#modal-equipment" draggable="false" data-fancybox class="control-item__row control-item__row-5" v-bind:class="{ 'control-item__row_active': equipmentCheck(5)  }">

                                <div class="area-img area-img-5"></div>

                                <? include './templates/helpers/control-item__arrow.php'; ?>

                                <div class="control-item__name">
                                    <h4 class="title-desktop"> Сусловарочный котел</h4>
                                    <h4 class="title-mobile"> 5 </h4>
                                </div>
                            </a>

                            <a v-on:click="equipmentChange($event, 6)" href="#modal-equipment" draggable="false" data-fancybox class="control-item__row control-item__row-6" v-bind:class="{ 'control-item__row_active': equipmentCheck(6)  }">

                                <div class="area-img area-img-6"></div>

                                <? include './templates/helpers/control-item__arrow.php'; ?>

                                <div class="control-item__name">
                                    <h4 class="title-desktop"> Кран для слива сусла</h4>
                                    <h4 class="title-mobile"> 6 </h4>
                                </div>
                            </a>

                            <a v-on:click="equipmentChange($event, 7)" href="#modal-equipment" draggable="false" data-fancybox class="control-item__row control-item__row-7" v-bind:class="{ 'control-item__row_active': equipmentCheck(7)  }">

                                <div class="area-img area-img-7"></div>

                                <? include './templates/helpers/control-item__arrow.php'; ?>

                                <div class="control-item__name">
                                    <h4 class="title-desktop"> Блок управления</h4>
                                    <h4 class="title-mobile"> 7 </h4>
                                </div>
                            </a>

                        </div>
                    </div>

                    <div id="equipment-window" class="equipment-wrapper__content equipment-animation" v-bind:class="{ 'equipment-animation-hide': !equipmentShow }">

                        <div>
                            <div class="equipment-wrapper__content-title">
                                <h4>
                                    {{equipment.title}}
                                </h4>
                            </div>

                            <div class="equipment-wrapper__content-decr">
                                <p v-html="equipment.decr"></p>
                            </div>

                            <a draggable="false" href="#modal-equipment" data-fancybox class="button">Характеристики</a>

                        </div>
                        <div class="equipment-wrapper__content-img">
                            <img :onload="setTimeout( function() { equipmentShow = true }, 600)" :src="'<?= $build ?>images/equipment-window-' + equipment.img + '.<?= $webp == "webp" ? "webp" : "png" ?>'" alt="Комплектация">
                        </div>
                    </div>

                </div>

                <div class="equipment-footer">
                    <div class="equipment-footer__item">

                        <div class="equipment-footer__item-img">
                            <img src="<?= $build ?>images/equipment-ten.<?= $webp == "webp" ? "webp" : "png" ?>" alt="ТЭН">
                        </div>

                        <div class="equipment-footer__item-text">
                            <h4>ТЭН</h4>
                            <p>Поддерживают «правильную» температуру на протяжении всего процесса варки. Имеют надёжную
                                защиту от перегорания. </p>
                            <p>
                                <span> Характеристики: <br></span>
                                Мощность: <br>
                                30 л —1, 5 кВт <br>
                                50 л — 2,8 кВт <br>
                                70 л — 3,2 кВт
                            </p>
                            <p>
                                <span>
                                    Материал — AISI 304
                                </span>
                            </p>
                        </div>

                    </div>

                    <div class="equipment-footer__item">

                        <div class="equipment-footer__item-img">
                            <img src="<?= $build ?>images/equipment-nasos.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Насос">
                        </div>

                        <div class="equipment-footer__item-text">
                            <h4>Насос</h4>
                            <p>Обеспечивает суслу непрерывную циркуляцию, позволяет варить плотные и тягучие сорта пива
                                без
                                риска поломки. </p>
                            <p>
                                <span> Характеристики: <br></span>
                                Мощность — 9 Вт <br>
                                Производительность — 0,65 м³/ч <br>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div id="modal-equipment" style="display: none;" v-bind:style="{ maxWidth: equipment.maxWidthModal + 'px' }">
            <div class="modal-container">

                <h3 class="modal-title"> <span class="title-mobile">{{equipment.key}}.</span> {{equipment.title}}</h3>

                <div class="modal-mobile-img">
                    <img :src="'<?= $build ?>images/equipment-window-' + equipment.img + '.<?= $webp == "webp" ? "webp" : "png" ?>'" alt="Комплектация">
                </div>

                <div class="modal-mobile-decr">
                    <p v-html="equipment.decr"></p>
                </div>

                <div class="modal-desktop">
                    <div v-for="(equipRow, indexRow) in equipment.modalItems" class="modal-equipment-row" v-bind:class="{ 'modal-equipment-row__title': indexRow == 0 }">
                        <div v-for="(equipCol, indexCol) in equipRow" class="modal-equipment-col" v-bind:class="{ 'modal-equipment-col__title': indexCol == 0 }">
                            <p v-html="equipCol"></p>
                        </div>
                    </div>
                </div>

                <div class="modal-mobile">
                    <p class="modal-mobile-subtitle">Характеристика</p>
                    <div v-for="(volume, index) in ['30 л', '50 л', '70 л']" class="modal-equipment-row__mobile">
                        <p class="modal-equipment-col__mobile-title">{{volume}}</p>
                        <div v-for="(title, indexTitle) in equipment.modalMobileTitle" class="modal-equipment-col__mobile">
                            <p v-html="title"></p>
                            <p v-html="equipment.modalMobileItems[index][indexTitle]"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var equipment = new Vue({
            el: '#equipment',
            data: {
                lazyBg: false,
                equipments: [{
                        key: 1,
                        title: "Крышка",
                        decr: "Изолирует процесс пивоварения <br> от внешней среды.",
                        img: "lid",

                        modalItems: [
                            ["Характеристика", "30 л", "50 л", "70 л"],
                            ["Диаметр", "350 мм", "400 мм", "450 мм"],
                            ["Материал", "AISI 304", "AISI 304", "AISI 304"],
                        ],

                        modalMobileTitle: [
                            "Диаметр", "Материал",
                        ],
                        modalMobileItems: [
                            ["350 мм", "AISI 304"],
                            ["450 мм", "AISI 304"],
                            ["450 мм", "AISI 304"],
                        ],

                        maxWidthModal: 768,
                    },

                    {
                        key: 2,
                        title: "Прижимная планка",
                        decr: "Обеспечивает надёжную <br> фиксацию бака.",
                        img: "plank",

                        modalItems: [
                            ["Характеристика", "30 л", "50 л", "70 л"],
                            ["Диаметр", "20 мм", "20 мм", "20 мм"],
                            ["Материал", "AISI 304", "AISI 304", "AISI 304"],
                        ],

                        modalMobileTitle: [
                            "Диаметр", "Материал",
                        ],
                        modalMobileItems: [
                            ["20 мм", "AISI 304"],
                            ["20 мм", "AISI 304"],
                            ["20 мм", "AISI 304"],
                        ],

                        maxWidthModal: 768,
                    },

                    {
                        key: 3,
                        title: "Два фильтрующих сита и сетка",
                        decr: "2 сита и сетка необходимы для того, <br> чтобы качественно фильтровать солод.",
                        img: "sieve",

                        modalItems: [
                            ["Характеристика", "30 л", "50 л", "70 л"],
                            ["Диаметр", "228 мм", "290 мм", "290 мм"],
                            [
                                "Толщина материала",
                                "Нижнее сито — 1 мм <br> Верхнее сито — 2 мм",
                                "Нижнее сито — 1 мм <br> Верхнее сито — 2 мм",
                                "Оба сита — 2 мм",
                            ],
                            ["Материал", "AISI 304", "AISI 304", "AISI 304"]
                        ],

                        modalMobileTitle: [
                            "Диаметр", "Толщина материала", "Материал",
                        ],
                        modalMobileItems: [
                            ["228 мм", "Нижнее сито — 1 мм <br> Верхнее сито —&nbsp;2 мм", "AISI 304"],
                            ["290 мм", "Нижнее сито — 1 мм <br> Верхнее сито — 2&nbsp;мм", "AISI 304"],
                            ["290 мм", "Оба сита — 2 мм", "AISI 304"],
                        ],


                        maxWidthModal: 1230,
                    },

                    {
                        key: 4,
                        title: "Заторный бак",
                        decr: "Необходим для затирания <br> солода.",
                        img: "tanker",

                        modalItems: [
                            ["Характеристика", "30 л", "50 л", "70 л"],
                            ["Высота", "275 мм", "355 мм", "380 мм"],
                            ["Диаметр", "230 мм", "290 мм", "330 мм"],
                            ["Материал", "AISI 304", "AISI 304", "AISI 304"],
                        ],

                        modalMobileTitle: [
                            "Высота", "Диаметр", "Материал",
                        ],

                        modalMobileItems: [
                            ["275 мм", "230 мм", "AISI 304"],
                            ["355 мм", "290 мм", "AISI 304"],
                            ["380 мм", "330 мм", "AISI 304"],
                        ],

                        maxWidthModal: 768,
                    },

                    {
                        key: 5,
                        title: "Сусловарочный котел",
                        decr: "Используется для кипячения <br> сусла вместе с хмелем.",
                        img: "kettle",

                        modalItems: [
                            ["Характеристика", "30 л", "50 л", "70 л"],
                            ["Высота", "350 мм", "400 мм", "450 мм"],
                            ["Диаметр", "350 мм", "400 мм", "450 мм"],
                            ["Материал", "AISI 304", "AISI 304", "AISI 304"],
                            ["Высота ножек", "160 мм", "160 мм", "174 мм"],
                        ],

                        modalMobileTitle: [
                            "Высота", "Диаметр", "Материал", "Высота ножек"
                        ],

                        modalMobileItems: [
                            ["350 мм", "350 мм", "AISI 304", "160 мм"],
                            ["400 мм", "400 мм", "AISI 304", "160 мм"],
                            ["450 мм", "450 мм", "AISI 304", "174 мм"],
                        ],

                        maxWidthModal: 768,
                    },

                    {
                        key: 6,
                        title: "Кран для слива сусла",
                        decr: "Кран на ½ дюйма расположен у подножья бака. <br> Сусло быстро и точно сливается в ёмкость",
                        img: "tap",

                        modalItems: [
                            ["Характеристика", "30 л", "50 л", "70 л"],
                            ["Диаметр", "350 мм", "350 мм", "350 мм"],
                            ["Материал", "AISI 304", "AISI 304", "AISI 304"],
                        ],

                        modalMobileTitle: [
                            "Диаметр", "Материал",
                        ],
                        modalMobileItems: [
                            ["350 мм", "AISI 304"],
                            ["350 мм", "AISI 304"],
                            ["350 мм", "AISI 304"],
                        ],

                        maxWidthModal: 768,
                    },

                    {
                        key: 7,
                        title: "Блок управления",
                        decr: "Необходим для контроля процесса <br> пивоварения.",
                        img: "panel",


                        modalItems: [
                            ["Характеристика", "30 л", "50 л", "70 л"],
                            ["Модификация",
                                `
                            <ul>
                                <li> С WiFi</li>
                                <li>Без WiFi</li>
                            </ul>
                            `,
                                `
                            <ul>
                                <li> С WiFi</li>
                                <li>Без WiFi</li>
                            </ul>
                            `, `
                            <ul>
                                <li> С WiFi</li>
                                <li>Без WiFi</li>
                            </ul>
                            `,
                            ],
                            ["Режимы", `
                            <ul>
                                <li>Ручной</li>
                                <li>Автомат</li>
                            </ul>
                            `, `
                            <ul>
                                <li>Ручной</li>
                                <li>Автомат</li>
                            </ul>
                            `, `
                            <ul>
                                <li>Ручной</li>
                                <li>Автомат</li>
                            </ul>
                            `, ],
                        ],


                        modalMobileTitle: [
                            "Модификация", "Режимы",
                        ],
                        modalMobileItems: [
                            [`
                            <ul>
                                <li> С WiFi</li>
                                <li>Без WiFi</li>
                            </ul>
                            `, `
                            <ul>
                                <li>Ручной</li>
                                <li>Автомат</li>
                            </ul>
                            `],

                            [`
                            <ul>
                                <li> С WiFi</li>
                                <li>Без WiFi</li>
                            </ul>
                            `, `
                            <ul>
                                <li>Ручной</li>
                                <li>Автомат</li>
                            </ul>
                            `],

                            [`
                            <ul>
                                <li> С WiFi</li>
                                <li>Без WiFi</li>
                            </ul>
                            `, `
                            <ul>
                                <li>Ручной</li>
                                <li>Автомат</li>
                            </ul>
                            `],


                        ],

                        maxWidthModal: 1050,
                    },
                ],
                //1 - Крышка
                //2 - Прижимная планка
                //3 - Два фильтрующих сита
                //4 - Заторный бак
                //5 - Сусловарочный котел
                //6 - Кран для слива сусла
                //7 - Блок управления

                equipmentActive: 1,
                equipmentShow: true,
                equipment: {}

            },
            components: {

            },
            methods: {
                //приверка активного состояния equipment
                equipmentCheck(numb) {
                    if (numb == this.equipmentActive) {
                        if (document.documentElement.clientWidth > 768) {
                            return true;
                        } else {
                            return false;
                        }
                    } else {
                        return false;
                    }
                },

                //замена изображения с fade-анимацией, которая зависит от подгрузки картинки
                equipmentChange(e, numb) {
                    if (document.documentElement.clientWidth > 768) {
                        e.preventDefault();

                        if (this.equipmentActive != numb) {

                            this.equipmentActive = numb;
                            this.equipmentShow = false;
                            document.querySelector('.equipment-wrapper__content-img').innerHTML = "";

                            this.equipment = this.equipments.find((eq) => eq.key == numb);

                            var img = new Image();
                            document.querySelector('.equipment-wrapper__content-img').appendChild(img);
                            img.src = "<?= $build ?>images/equipment-window-" + this.equipment.img + ".<?= $webp == "webp" ? "webp" : "png" ?>"

                        }

                        if (document.documentElement.clientWidth < 1281) {
                            setTimeout(() => {
                                this.scrollToSection("#equipment-window");

                                document
                                    .querySelector(".equipment-wrapper__content .button")
                                    .classList.add("equipment-pulse");

                                setTimeout(() => {
                                    document
                                        .querySelector(".equipment-wrapper__content .button")
                                        .classList.remove("equipment-pulse");
                                }, 6000);


                            }, 400);
                        }
                    } else {
                        if (this.equipmentActive != numb) {

                            this.equipmentActive = numb;
                            this.equipment = this.equipments.find((eq) => eq.key == numb);

                        }
                    }
                },


                scrollToSection(selector) {
                    gsap.to(window, {
                        duration: 1.3,
                        scrollTo: selector,
                        // scrollTo: {
                        //     x: selector,
                        //     // offsetX: 100
                        // }
                    });
                },
            },
            created() {
                this.equipment = this.equipments.find(e => e.key == 1);
            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#equipment',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {

                            gsap.from([".control-item__img-anim img"], {
                                delay: 0.3,
                                duration: 1.3,
                                y: 50,
                                stagger: 0.1,
                            });

                            gsap.from(['#equipment' + " .title", '#equipment' + " .subtitle"], {
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