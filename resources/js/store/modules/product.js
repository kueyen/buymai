import axios from "axios";
// state
export const state = {
  items: [],
  item_cats: [],
  show: {},
};

// getters
export const getters = {
  items: (state) => state.items,
  show: (state) => state.show,
  spotted: (state) => state.item_cats.find((el) => el.name == "spotted"),
  airpurifier: (state) =>
    state.item_cats.find((el) => el.name == "airpurifier"),
  ornamental: (state) => state.item_cats.find((el) => el.name == "ornamental"),
  auspicious: (state) => state.item_cats.find((el) => el.name == "auspicious"),
  fertilizer: (state) => state.item_cats.find((el) => el.name == "fertilizer"),
};

// mutations
export const mutations = {
  SET_ITEMS(state, { items }) {
    state.items = items;
  },
  SET_SHOW(state, { items }) {
    state.show = items;
  },
  SET_ITEMS_BY_CAT(state, { items, name }) {
    let obj = { name, items: items };
    state.item_cats.push(obj);
  },
};

// actions
export const actions = {
  async recommend({ commit }) {
    const { data } = await axios.get("/api/products", { is_recommend: 1 });
    commit("SET_ITEMS", { items: data.items });
  },
  async fetchByCat({ commit }, { category_id, name }) {
    const { data } = await axios.get(
      "/api/products?category_id=" + category_id
    );
    commit("SET_ITEMS_BY_CAT", { items: data.items, name });
  },
  async show({ commit }, { id }) {
    const { data } = await axios.get(`/api/products/${id}`);
    commit("SET_SHOW", { items: data.item });
  },
};
