const allGoods = JSON.parse(document.body.getAttribute("data-goods"));

const goodsArray__models = [
  {
    id: 1823,
    price: allGoods["1823"].price,
    oldPrice: allGoods["1823"].oldPrice,
    value: "BAVARIA 30 л",

    syslo: "10 л",
    volume: "3 кг",
    power: "1,5 кВт",
    weight: "13,7 кг",
    nameL: "30 L",

    img: "model-30l",
    img_wifi: "model-30l-wifi",
    img_m: "model-30l-mobile",
    img_wifi_m: "model-30l-wifi-mobile",

    wifi: false,
    id_wifi: 4415,
    price_wifi: allGoods["4415"].price,
    oldPrice_wifi: allGoods["4415"].oldPrice,
  },

  {
    id: 1824,
    price: allGoods["1824"].price,
    oldPrice: allGoods["1824"].oldPrice,
    value: "BAVARIA 50 л",

    syslo: "30 л",
    volume: "8 кг",
    power: "2,8 кВт",
    weight: "16,3 кг",
    nameL: "50 L",

    img: "model-50l",
    img_wifi: "model-50l-wifi",
    img_m: "model-50l-mobile",
    img_wifi_m: "model-50l-wifi-mobile",

    wifi: false,
    id_wifi: 4416,
    price_wifi: allGoods["4416"].price,
    oldPrice_wifi: allGoods["4416"].oldPrice,
  },

  {
    id: 1825,
    price: allGoods["1825"].price,
    oldPrice: allGoods["1825"].oldPrice,
    value: "BAVARIA 70 л",

    syslo: "50 л",
    volume: "10,5 кг",
    power: "3,2 кВт",
    weight: "25,5 кг",
    nameL: "70 L",

    img: "model-70l",
    img_wifi: "model-70l-wifi",
    img_m: "model-70l-mobile",
    img_wifi_m: "model-70l-wifi-mobile",

    wifi: false,
    id_wifi: 4417,
    price_wifi: allGoods["4417"].price,
    oldPrice_wifi: allGoods["4417"].oldPrice,
  },
];

var user = {
  model: goodsArray__models[0],
};

const store = new Vuex.Store({
  state: {
    allGoods: JSON.parse(document.body.getAttribute("data-goods")),

    user: {
      name: "",
      phone: "",
      credit: false,
    },
  },
  mutations: {
    updateUserPhone(state, phone) {
      state.user.phone = phone.replace(/[^0-9]/g, "");
    },

    updateUserName(state, name) {
      state.user.name = name;
    },

    updateUserCredit(state, credit) {
      state.user.credit = credit;
    },
  },
});
