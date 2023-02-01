<!-- кастомный чекбокс -->
<div class="checkbox-input" v-for="model in goodsArray__models" v-if="model.id == user.model.id ">
    <div class="checkbox">
        <input class="checkbox__input" v-bind:class="{ 'checkbox__input-check': user.model.wifi }" type="checkbox">
        <label v-on:click="user.model.wifi = !user.model.wifi" class="checkbox__label">
            Блок управления c Wifi <br> <span> +&nbsp;{{user.model.price_wifi - user.model.price}}&nbsp;руб.</span></label>
    </div>
</div>
<!-- кастомный чекбокс -->

<!-- wifi: {
get() {
return store.state.user.model.wifi
},
},

//обновление состояния wifi
setWifi(val) {
store.commit('updateModelWifi', val)
}, -->