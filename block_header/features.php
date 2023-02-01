<section id="features">
    <div class="container">
        <div class="features-bg <?= $webp == "webp" ? "webp" : "" ?>">
            <div class="features__wrapper">

                <div v-for="feature in features" class="features__wrapper-item">
                    <div class="features__wrapper-item-content">
                        <h3 class="features__wrapper-item__title" v-html="feature.title">

                        </h3>
                        <p class="features__wrapper-item__decr" v-html="feature.decr">

                        </p>
                    </div>
                    <div class="features__wrapper-item__line"></div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var features = new Vue({
            el: '#features',
            data: {
                lazyBg: false,
                features: [{
                        title: '500 000',
                        decr: 'довольных клиентов <br> по всей России'
                    },

                    {
                        title: '10 лет',
                        decr: 'успешной работы <br>  на рынке'
                    },

                    {
                        title: 'в 6 городах',
                        decr: 'уже есть наши <br> розничные магазины'
                    },

                    {
                        title: 'от 2 дней',
                        decr: 'срок доставки <br>  до вашего дома'
                    },
                ]

            },
            mounted() {

                ScrollTrigger.create({
                    trigger: '#features',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {

                            gsap.from([".features__wrapper"], {
                                delay: 0.3,
                                duration: 1.3,
                                opacity: 0,
                            });

                        }
                    },
                })

            }
        })
    })
</script>