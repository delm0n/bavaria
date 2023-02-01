<div class="radio-input">
    <div class="radio">
        <input class="radio__input" v-bind:class="{ 'radio__input-check': credit }" v-model="credit" type="checkbox">
        <label v-on:click="setCredit(!credit)" class="radio__label">Покупка в
            рассрочку</label>
    </div>
</div>


<!-- 
credit: {
get() {
return store.state.user.credit
},
},

//обновление состояния рассрочки
setCredit(val) {
store.commit('updateUserCredit', val)
}, -->