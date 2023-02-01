<a id="success" href="#order-success" data-fancybox style="display: none;"></a>
<div id="order-success" style="display:none;">
    <div class="modal-container <?= $webp == "webp" ? "webp" : "" ?>">
        <form method="post" action="sendEmail.php">
            <p class="modal-title">Благодарим за доверие!</p>
            <p class="modal-thanks-decr">Наш менеджер уже получил ваше обращение. <br>
                <span>
                    Проверьте свой номер - вдруг Вы ошиблись?
                </span>

            <div class="user-info">

                <label for="phone" class="placeholder">Ваш телефон &nbsp; <span>*</span></label>
                <input type="text" name="phone">
            </div>
            <span></span>
            </p>
            <input type="hidden" name="order" data-order="-1" value="" />
            <button type="submit" class="button">Все верно</button>

            <p id="mistake">Исправить ошибку в номере
            </p>
        </form>
    </div>
</div>

<script>
    document.querySelector('#mistake').addEventListener('click', function() {
        Fancybox.close();
        Fancybox.show(
            [{
                src: "#modal-order",
                modal: true
            }, ]
        );
    })
</script>