import axios from "axios";
// state
export const state = {
  items: [],
};

// getters
export const getters = {
  items: (state) => state.items,
};

// mutations
export const mutations = {
  SET_ITEMS(state, { items }) {
    state.items = items;
  },
};

// actions
export const actions = {
  async index({ commit }) {
    const { data } = await axios.get("/api/categories");
    commit("SET_ITEMS", { items: data.items });
  },
};
