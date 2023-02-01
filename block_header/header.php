<div id="header-block">

    <div v-cloak>

        <!-- Отрисовка фонового изображения и запуск анимации -->
        <img :onload="loadBackrgound()" style="display: none;" class="onloadBg" src="<?= $build ?>images/header-bg.<?= $webp == "webp" ? "webp" : "png" ?>" alt="bavaria helicon пивоварня">
        <!-- Отрисовка фонового изображения  -->

        <div class="header-bg  <?= $webp == "webp" ? "webp" : "" ?>">

            <div id="header-top" class="header-top ">
                <div class="container header-top__wrapper">
                    <div class="header-top__logo" v-on:click="scrollToSection('#header-main')">
                        <picture>
                            <source srcset="<?= $build ?>images/logo.<?= $webp == "webp" ? "webp" : "png" ?>" media="(min-width: 993px)">
                            <img v-bind:class=" {'img-mobile-active': burger }  " class="logo-img" src=" <?= $build ?>images/logo-mobile.<?= $webp == "webp" ? "webp" : "png" ?>" alt="helicon">
                        </picture>
                    </div>

                    <div class="menu-container">
                        <div class="menu-toggler" v-bind:class="{ 'menu-toggler_open': burger }" v-on:click="burger=!burger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <ul class="menu header-top__menu" v-bind:class="{ 'header-top__menu_open': burger }">
                            <li>
                                <p v-on:click="scrollToSection('#destiny'); burger=!burger">О Bavaria</p>
                            </li>
                            <li>
                                <p v-on:click="scrollToSection('#equipment'); burger=!burger">Комплектация</p>
                            </li>
                            <li>
                                <p v-on:click="scrollToSection('#everything'); burger=!burger">Модели</p>
                            </li>
                            <li>
                                <p v-on:click="scrollToSection('#wifi'); burger=!burger">Bavaria с WIFI</p>
                            </li>

                            <div class="mobile-li">
                                <a draggable="false" href="tel:88002505932" class="mobile-li__phone-number">8 800 250 59
                                    32</a>
                                <p>Звонок по России бесплатный </p>
                                <a draggable="false" href="#modal-call" data-fancybox class="header-top__phone-button">
                                    <span class="deckstop-text"> Заказать обратный звонок</span>
                                </a>
                            </div>
                        </ul>
                    </div>

                    <div class="header-top__phone">
                        <p>Звонок по России бесплатный</p>
                        <a draggable="false" href="tel:88002505932" class="header-top__phone-number">8 800 250 59 32</a>

                        <a draggable="false" href="#modal-call" data-fancybox class="header-top__phone-button ">
                            <span class="deckstop-text"> Заказать обратный звонок</span>
                        </a>
                    </div>

                </div>
            </div>

            <div id="header-main" class="header-main">
                <div class="container header-main__wrapper">

                    <div class="header-main__wrapper-img__wrap">
                        <div class="header-main__wrapper-img">
                            <img class="bar" src="<?= $build ?>images/header-bar.<?= $webp == "webp" ? "webp" : "png" ?>" alt="пивоварня Bavaria">

                            <a draggable="false" class="desktopRefer">
                                <img class="bant" src="<?= $build ?>images/bant.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Подарок к пивоварне Bavaria">
                            </a>

                            <a draggable="false" data-fancybox href="#modal-present" class="mobileRefer" aria-label="Чиллер в подарок!">
                                <img class="bant" src="<?= $build ?>images/bant.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Подарок к пивоварне Bavaria">
                            </a>


                            <div class="present-info">
                                <p class="present-info__title">
                                    Чиллер <br> в подарок!
                                </p>
                                <p class="present-info__oldprice">
                                    3200₽
                                </p>
                                <p class="present-info__price">
                                    0 ₽
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="header-main__wrapper-title__wrap">
                        <div class="header-main__wrapper-title ">
                            <p class="header-main__wrapper-title__before">
                                Автоматическая пивоварня
                            </p>

                            <div class="header-main__wrapper-title__main">
                                <h1>Bavaria</h1>
                                <div class="title-garant">
                                    <div class="title-garant__img">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 45" fill="none">
                                            <g clip-path="url(#clip0_10_4031)">
                                                <path d="M7.83662 24.6983L5.23047 44.0878L15.9997 37.7027L26.7689 44.0878L24.1628 24.677" fill="#E34400" />
                                                <path d="M16 0L19.3129 3.59315L24 2.11825L25.051 6.86687L29.8564 7.90541L28.3638 12.5371L32 15.8108L28.3638 19.0845L29.8564 23.7162L25.051 24.7548L24 29.5034L19.3129 28.0285L16 31.6216L12.6871 28.0285L8 29.5034L6.94903 24.7548L2.14359 23.7162L3.63615 19.0845L0 15.8108L3.63615 12.5371L2.14359 7.90541L6.94903 6.86687L8 2.11825L12.6871 3.59315L16 0Z" fill="#FFB800" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_10_4031">
                                                    <rect width="32" height="45" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                    <p class="title-garant__text">
                                        Гарантия <br> 12 месяцев
                                    </p>
                                </div>
                            </div>
                            <p class="header-main__wrapper-title__decr">
                                Ваш надёжный проводник в мир<br> крафтового пивоварения
                            </p>

                        </div>
                    </div>

                    <div class="header-main__wrapper-features__wrap">
                        <div class="header-main__wrapper-features ">

                            <div v-for="feature in features" class="header-main__wrapper-features__item">
                                <div class="header-main__wrapper-features__item-img" v-html="feature.img">
                                </div>

                                <div class="header-main__wrapper-features__item-content">
                                    <h3 class="header-main__wrapper-features__item-title" v-html="feature.title"></h3>
                                    <p class="header-main__wrapper-features__item-text" v-html="feature.decr"> </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a draggable="false" data-fancybox class="header-main__wrapper-video " href="https://www.youtube.com/embed/-jaXMjn4hsE">
                        <div class="header-main__wrapper-video__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="none">
                                <path d="M21 11.2679C22.3333 12.0378 22.3333 13.9622 21 14.732L3 25.1244C1.66666 25.8942 6.86406e-07 24.9319 7.53704e-07 23.3923L1.66223e-06 2.60769C1.72953e-06 1.06809 1.66667 0.105844 3 0.875644L21 11.2679Z" fill="#FFB800" />
                            </svg>
                        </div>
                        <p>Видеообзор <br>
                            пивоварни</p>
                    </a>

                    <div class="header-main__wrapper-offer__wrap">
                        <div class="header-main__wrapper-offer ">
                            <div class="header-main__wrapper-offer__button">
                                <a draggable="false" href="#modal-order" data-fancybox class="button-modal ">Заказать</a>
                            </div>

                            <div class="header-main__wrapper-offer-price__container">

                                <div class="header-main__wrapper-offer__oldprice">
                                    <?= $bav_30['oldPriceF'] ?> &#8381;
                                </div>

                                <div class="header-main__wrapper-offer__newprice">
                                    <?= $bav_30['priceF'] ?> &#8381;
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div id="modal-present" style="display: none;">
                <div class="modal-container <?= $webp == "webp" ? "webp" : "" ?>">
                    <p class="modal-present__title">
                        Чиллер <br> в подарок!
                    </p>
                    <p class="modal-present__price">
                        0 ₽<span>3200₽</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var header = new Vue({
        el: '#header-block',

        data: {
            burger: false,
            loadBackrgoundBool: false,
            windowWidth: document.documentElement.clientWidth,
            features: [{
                    img: `<svg xmlns="http://www.w3.org/2000/svg" width="47" height="44" viewBox="0 0 47 44" fill="none">
                                <path d="M43.9004 40.9569H3.90039C2.80039 40.9569 1.90039 40.0715 1.90039 38.9894V33.087C1.90039 32.0049 2.80039 31.1195 3.90039 31.1195H43.9004C45.0004 31.1195 45.9004 32.0049 45.9004 33.087V38.9894C45.9004 40.0715 45.0004 40.9569 43.9004 40.9569Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M5.90039 36.0382H7.90039" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M9.90039 36.0382H11.9004" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M13.9004 36.0382H15.9004" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M4.90039 40.9569V43.9081" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M42.9004 40.9569V43.9081" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M31.9004 31.1195V7.50977" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M36.9004 7.21466C37.5004 7.8049 37.9004 8.5919 37.9004 9.47726C37.9004 10.3626 37.5004 11.1496 36.9004 11.7399" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M39.7002 4.46017C41.1002 5.73904 41.9002 7.50977 41.9002 9.47725C41.9002 11.4447 41.1002 13.2155 39.7002 14.4943" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M42.5 1.60733C44.6 3.57481 45.9 6.32928 45.9 9.37888C45.9 12.4285 44.6 15.1829 42.5 17.1504" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M26.9004 7.21466C26.3004 7.8049 25.9004 8.5919 25.9004 9.47726C25.9004 10.3626 26.3004 11.1496 26.9004 11.7399" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M24.1004 4.46017C22.7004 5.73904 21.9004 7.50977 21.9004 9.47725C21.9004 11.4447 22.7004 13.2155 24.1004 14.4943" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M21.3004 1.60733C19.2004 3.57481 17.9004 6.32928 17.9004 9.37888C17.9004 12.4285 19.2004 15.1829 21.3004 17.1504" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                            </svg>`,
                    title: 'Управление <br> через WiFi',
                    decr: 'Контролируйте процесс <br> со своего смартфона'
                },

                {
                    img: `<svg xmlns="http://www.w3.org/2000/svg" width="39" height="48" viewBox="0 0 39 48" fill="none">
                                <path d="M31.5996 6H35.5996C36.6996 6 37.5996 6.9 37.5996 8V45C37.5996 46.1 36.6996 47 35.5996 47H3.59961C2.49961 47 1.59961 46.1 1.59961 45V8C1.59961 6.9 2.49961 6 3.59961 6H7.59961" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M31.5996 10H33.5996V43H5.59961V10H7.59961" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M26.5996 5H23.5996C23.5996 2.8 21.7996 1 19.5996 1C17.3996 1 15.5996 2.8 15.5996 5H12.5996C10.8996 5 9.59961 6.3 9.59961 8V11H29.5996V8C29.5996 6.3 28.2996 5 26.5996 5Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M19.5996 4V6" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M10.5996 20L12.5996 22L16.5996 18" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M10.5996 27L12.5996 29L16.5996 25" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M10.5996 34L12.5996 36L16.5996 32" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M19.5996 20H28.5996" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M19.5996 27H28.5996" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M19.5996 34H28.5996" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                            </svg>`,
                    title: 'Персональная <br> библиотека рецептов',
                    decr: 'Сохраняйте в памяти <br> устройства до 10 рецептов'
                },

                {
                    img: `<svg xmlns="http://www.w3.org/2000/svg" width="46" height="33" viewBox="0 0 46 33" fill="none">
                                <path d="M35.51 1C35.51 1 32.059 4.06754 31.6756 4.1634C30.6211 4.35512 25.924 2.15032 24.9654 1.86274C24.0067 1.67102 14.5166 4.6427 13.8455 5.79303C13.1745 6.94336 15.9545 9.62746 18.6386 9.24401C21.3227 8.86057 25.3488 7.51852 26.4991 8.66885C28.4163 10.5861 33.8804 16.3377 36.4686 18.6383C38.6734 20.5555 45.0002 10.5861 45.0002 10.5861" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M23.9103 28.9913L20.8428 25.8279" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M29.0871 27.2658L23.623 21.4183" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M33.7841 24.4858L27.2656 17.8715" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M12.9825 28.8954C13.7494 29.6623 14.8997 29.6623 15.6666 28.8954L17.3921 27.1699C18.159 26.4031 17.9673 25.2527 17.1045 24.39C16.2418 23.5272 15.0914 23.3355 14.3246 24.1024C15.0914 23.3355 14.8997 22.1852 14.037 21.3225C13.1742 20.4597 12.0239 20.268 11.257 21.0349C12.0239 20.268 11.8322 19.1177 10.9694 18.2549C10.1067 17.3922 8.95637 17.2004 8.18948 17.9673C8.95637 17.2004 8.76464 16.0501 7.9019 15.1874C7.03915 14.3246 5.88883 14.1329 5.12195 14.8998L3.39645 16.6253C2.62957 17.3922 2.62957 18.5425 3.39645 19.3094L12.9825 28.8954Z" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M16.4336 28.1285L17.0088 28.7037L18.4467 30.1416C20.6515 32.3464 22.7604 30.7168 23.8149 28.8954C25.8279 29.9499 28.1286 28.7996 28.9913 27.1699C31.5796 28.4161 33.8802 25.8279 33.6885 24.4858C36.4685 24.2941 38.3857 21.1307 36.4685 18.5425" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M1 11.5447L3.01307 13.6536C3.20479 14.4205 3.77996 15.1874 4.25926 15.8584" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M14.0369 5.60132L10.5859 2.15033" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M8.18945 18.0632L5.21777 21.1307" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M8.18945 18.0632L5.21777 21.1307" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M11.2568 21.1307L8.28516 24.1983" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                                <path d="M14.3242 24.1982L11.3525 27.2658" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                            </svg>`,
                    title: ' Напрямую с завода',
                    decr: ' Всегда в наличии, <br> без наценок и переплат'
                },

                {
                    img: `<svg xmlns="http://www.w3.org/2000/svg" width="46" height="44" viewBox="0 0 46 44" fill="none">
                                <path d="M17 25.5772V11.8049C17 10.7228 16.1 9.8374 15 9.8374C13.9 9.8374 13 10.7228 13 11.8049V24.5935" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M9 25.5773V14.7561C9 13.674 9.9 12.7886 11 12.7886C12.1 12.7886 13 13.674 13 14.7561" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M9 18.6911C9 17.6089 8.1 16.7236 7 16.7236C5.9 16.7236 5 17.6089 5 18.6911V31.4797C5 37.087 7 39.0545 7 40.3333C7 41.6122 7 43.2845 7 43.2845" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M17 14.7561C17 13.674 17.9 12.7886 19 12.7886C20.1 12.7886 21 13.674 21 14.7561V28.5285L22.3 29.8073L24.9 25.774C26.5 23.6098 28.6 24.6919 29.3 25.5773C29.3 25.5773 25.9 34.3325 25.5 35.0212C24.8 36.1033 21 38.5626 21 39.3496C21 40.1366 21 43.2846 21 43.2846" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M28.2004 15.4447L18.3004 5.70566C17.5004 4.91867 16.3004 4.91867 15.5004 5.70566C15.1004 6.09916 14.9004 6.59102 14.9004 7.08289" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M29 32.5618C30.4 33.152 32.1 33.152 32.8 33.939C33.8 34.9227 36 37.4805 36 37.4805" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M20.5004 7.86993C19.7004 7.08293 19.7004 5.90244 20.5004 5.11545C21.3004 4.32846 22.5004 4.32846 23.3004 5.11545L34.3004 15.8382" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M33.1999 23.1179C30.3999 18.9862 34.3999 15.9366 34.3999 15.9366C35.0999 15.248 35.2999 13.1821 34.4999 11.2146C33.2999 8.46015 35.6999 7.08292 36.7999 6.88617C36.7999 6.88617 40.9999 15.4447 41.1999 16.2317C41.4999 17.5106 41.1999 21.1504 41.7999 21.7406C42.3999 22.3309 45.0999 25.5772 45.0999 25.5772" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M10 5.90244V0" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M7 6.88619L3 2.95123" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                                <path d="M6 9.8374H0" stroke="#FFB800" stroke-width="2" stroke-miterlimit="10" />
                            </svg>`,
                    title: 'Уход без хлопот',
                    decr: 'Чистка меньше, <br> чем за 30 минут'
                },
            ]
        },
        methods: {
            // плавный скролл
            scrollToSection(selector) {
                gsap.to(window, {
                    duration: 1.5,
                    scrollTo: selector
                });
            },

            //получение списка магазинов для карты внизу сайта
            async getShops() {
                await axios
                    .get("https://apispn.ru/json/shops/")
                    .then(function(response) {
                        // handle success
                        var citiesJSON = JSON.parse(response.data);

                        // создание карты с метками
                        var script = document.createElement("script");
                        script.setAttribute("async", "");
                        script.type = "text/javascript";
                        script.src = "https://api-maps.yandex.ru/2.1/?lang=ru_RU";
                        document.querySelector("body").appendChild(script);

                        script.onload = function() {
                            ymaps.ready(function() {
                                var myMap = new ymaps.Map("shop-map", {
                                    center: [55.75222, 37.61556],
                                    zoom: 10,
                                    controls: ["zoomControl"],
                                });

                                citiesJSON.forEach(function(inx) {
                                    var city = inx.city;
                                    inx.shops.forEach(function(shop) {
                                        var mark = new ymaps.Placemark(
                                            shop.coords, {
                                                hasHint: true,
                                                hintContent: "Градус Хаус в г. " + city + ", " + shop.name,
                                            }, {
                                                // Необходимо указать данный тип макета.
                                                iconLayout: "default#image",

                                                // Своё изображение иконки метки.
                                                iconImageHref: "build/images/placemark.svg",

                                                // Размеры метки.
                                                iconImageSize: [48, 65],

                                                // Смещение левого верхнего угла иконки относительно
                                                // её "ножки" (точки привязки).
                                                iconImageOffset: [-5, -38],
                                            }
                                        );

                                        mark.events.add("click", function(e) {
                                            myMap.hint.open(
                                                shop.coords,
                                                " Градус Хаус в г. " + city + ", " + shop.name
                                            );
                                        });

                                        myMap.geoObjects.add(mark);
                                    });
                                });
                            });
                        };
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    });
            },

            //как только прогрузится изображение, скроется фиксированный прелодер
            loadBackrgound() {

                window.addEventListener("DOMContentLoaded", function(event) {

                    var img = document.querySelector('.onloadBg');
                    img.remove();
                    document.getElementById('#loader').classList.remove('load');
                    if (window.innerWidth >= 993) {
                        var tl = gsap.timeline();

                        tl.from(".header-bg", {
                            duration: 0.5,
                            opacity: 0,
                            delay: 1
                        });

                        tl.from("#header-top", {
                            duration: 0.5,
                            opacity: 0,
                            delay: 0.5
                        });

                        tl.from([".header-main__wrapper-img__wrap"], {
                            duration: 0.5,
                            opacity: 0,
                            x: -50,
                        });

                        tl.from(
                            [
                                ".header-main__wrapper-title__wrap",
                                ".header-main__wrapper-features__wrap",
                                ".header-main__wrapper-offer__wrap",
                            ], {
                                duration: 0.5,
                                opacity: 0,
                                stagger: 0.25,
                                x: 50
                            }
                        );

                        tl.from([".header-main__wrapper-video"], {
                            duration: 1,
                            opacity: 0,
                        });


                    }

                })

            },


        },
        computed: {

        },
        created() {

            // shops.php YandexMap
            this.getShops();

        },
        mounted() {
            if (window.innerWidth >= 993) {
                const showAnim = gsap
                    .from("#header-top", {
                        yPercent: -100,
                        paused: true,
                        duration: 0.7,
                    })
                    .progress(1);

                ScrollTrigger.create({
                    start: "100px top",
                    end: 99999,
                    onUpdate: (self) => {
                        self.direction === -1 ? showAnim.play() : showAnim.reverse();
                    },
                });
            }
        }
    })
</script>