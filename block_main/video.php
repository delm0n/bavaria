<section id="video">
    <div <? if ($prod) : ?> v-cloak <? endif; ?>>
        <div v-bind:class="{ 'video-bg <?= $webp == "webp" ? "webp" : "" ?>': lazyBg }">
            <div class="container">

                <h2 class="title">Мойте легко и быстро</h2>
                <p class="subtitle">Вы не потратите больше 30 минут на уход за пивоварней</p>

                <a href="https://youtu.be/i0182AWPfgI" data-fancybox class="video-item">
                    <div class="video-item__img">
                        <img class="preview" src="<?= $build ?>images/video-preview.<?= $webp == "webp" ? "webp" : "png" ?>" alt="Видео пивоварня Bavaria">

                        <div class="yt-btn">
                            <? include './templates/helpers/youtube.php'; ?>
                        </div>

                        <div class="video-item__decr">
                            <div>
                                <picture>
                                    <source srcset="<?= $build ?>images/video-moisture.<?= $webp == "webp" ? "webp" : "png" ?>" media="(min-width: 861px)">
                                    <img src="<?= $build ?>images/video-moisture-mobile.<?= $webp == "webp" ? "webp" : "png" ?>" alt="пивоварня Bavaria влагозащита">
                                </picture>
                            </div>
                            <p>С влагозащитой <br>
                                IP54</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</section>

<script>
    window.addEventListener("load", function(event) {
        var video = new Vue({
            el: '#video',
            data: {
                lazyBg: false,
            },
            components: {

            },
            methods: {

            },
            mounted() {
                ScrollTrigger.create({
                    trigger: '#video',
                    once: true,
                    onEnter: () => {
                        this.lazyBg = true;
                        if (window.innerWidth >= 993) {
                            var videotl = gsap.timeline();

                            videotl.from("#video .video-item", {
                                delay: 1.4,
                                duration: 0.7,
                                opacity: 0,
                                x: 50,
                            });

                            gsap.from(["#video .title", "#video .subtitle"], {
                                opacity: 0,
                                duration: 1.4,
                                stagger: 0.3,
                                delay: 0.6,
                            });

                            videotl.from(".patent-wrapper__container", {
                                duration: 1.7,
                                opacity: 0,
                                x: 50,
                            });
                        }
                    },
                })
            }
        })
    })
</script>