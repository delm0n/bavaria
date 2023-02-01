<div id="modal-call">
    <div class="modal-container <?= $webp == "webp" ? "webp" : "" ?>">
        <h3 class="modal-title">Заказать обратный звонок</h3>
        <p class="modal-decr">Оставьте контактную информацию, <br>
            чтобы наш менеджер мог с вами связаться</p>
        <form id="call-modal" method="post" class="spnForm form-modal" action="sendCall.php">
            <div class="user-info">
                <label for="name" class="placeholder"> Ваше имя &nbsp; <span>*</span> </label>
                <input type="text" v-model="name" name="name" placeholder="" required>
                <label for="phone" class="placeholder">Ваш телефон &nbsp; <span>*</span></label>
                <input type="tel" v-mask="'+7 (###) ###-##-##'" v-model="phone" name="phone" placeholder="+7 (***) ***-**-**" required />
            </div>

            <input type="hidden" class="url" name="url" />
            <input type="hidden" class="gmt" name="gmt">
            <button type="submit" class="button">Отправить</button>
            <p class="modal-disclaimer">Нажимая кнопку “Отправить”, вы соглашаетесь на обработку персональных
                данных, а
                так же с
                <a href="uploadupdate/confidentiality.pdf" target="_blank"> политикой конфиденциальности </a>
            </p>
        </form>
    </div>
</div>

<script>
    var call = new Vue({
        el: '#modal-call',
        store,

        data: {

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
            }
        },
        methods: {}
    })
</script>