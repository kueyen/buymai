<template>
  <div class="container">
    <h1>ข้อมูลสินค้า</h1>

    <div class="row">
      <div class="col-md-8">
        <div class="product-card-detail">
          <img :src="product.image_url" class="myimg" />
        </div>
      </div>

      <div class="col-md-3 ms-4 d-flex align-items-start flex-column">
        <h2>ชื่อ : {{ product.title }}</h2>
        <h3>ราคา {{ product.price }} ฿</h3>
        <h5>รายละเอียด</h5>
        <p>
          {{ product.description }}
        </p>
        <h5>การบำรุงรักษา</h5>
        <p>
          {{ product.howto_description }}
        </p>
        <h5>รายละเอียดเพิ่มเติม</h5>
        <ul>
          <li>ชื่อร้าน</li>
          <li>พันธ์ไม้ : {{ product.category.name }}</li>
        </ul>
        <div class="mt-auto">
          <button type="button" class="btn btn-primary">
            <i class="fa-solid fa-cart-shopping"></i> เพิ่มลงตระกร้ารถเข็น
          </button>
          <button type="button" class="btn btn-success">ซื้อเลย</button>
        </div>
      </div>
    </div>
    <div class="mt-4"><hr /></div>
    <div class="mt-4"></div>
    <h3>สินค้าอื่นๆ</h3>

    <carousel :per-page="4">
      <slide>
        <div class="product-card">
          <img :src="product.image_url" class="myother" />
        </div>
        <div class="clearfix">
          <div class="float-end">
            <button type="button" class="btn btn-outline-success btn-sm">
              ดูรายละเอียด
            </button>
          </div>
        </div>
      </slide>

      <slide>
        <div class="product-card">
          <img :src="product.image_url" class="myother" />
        </div>
        <div class="clearfix">
          <div class="float-end">
            <button type="button" class="btn btn-outline-success btn-sm">
              ดูรายละเอียด
            </button>
          </div>
        </div>
      </slide>

      <slide>
        <div class="product-card">
          <img :src="product.image_url" class="myother" />
        </div>
        <div class="clearfix">
          <div class="float-end">
            <button type="button" class="btn btn-outline-success btn-sm">
              ดูรายละเอียด
            </button>
          </div>
        </div>
      </slide>

      <slide>
        <div class="product-card">
          <img :src="product.image_url" class="myother" />
        </div>
        <div class="clearfix">
          <div class="float-end">
            <button type="button" class="btn btn-outline-success btn-sm">
              ดูรายละเอียด
            </button>
          </div>
        </div>
      </slide>

      <slide>
        <div class="product-card">
          <img :src="product.image_url" class="myother" />
        </div>
        <div class="clearfix">
          <div class="float-end">
            <button type="button" class="btn btn-outline-success btn-sm">
              ดูรายละเอียด
            </button>
          </div>
        </div>
      </slide>

      <slide>
        <div class="product-card">
          <img :src="product.image_url" class="myother" />
        </div>
        <div class="clearfix">
          <div class="float-end">
            <button type="button" class="btn btn-outline-success btn-sm">
              ดูรายละเอียด
            </button>
          </div>
        </div>
      </slide>
    </carousel>
  </div>
</template>
<script>
import { mapActions, mapGetters } from "vuex";
export default {
  middleware: "auth",
  computed: {
    ...mapGetters("product", {
      product: "show",
      recommends: "items",
    }),
    id() {
      return this.$route.params.id;
    },
  },
  data: () => ({}),
  methods: {
    ...mapActions("product", {
      show: "show",
      fetch: "recommend",
    }),
  },
  async created() {
    await this.show({ id: this.id });
    await this.fetch();
  },

  metaInfo() {
    return { title: "shop/details" };
  },
};
</script>
<style>
.myimg {
  width: 100%;
  height: 800px;
  object-fit: cover;
}
.myother {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.product-card-detail {
  background-color: #fff;
  box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
  background-position: center;
  overflow: hidden;
  position: relative;
  margin: 10px auto;
  cursor: pointer;
  border-radius: 10px;
}

.product-card-detail img {
  transition: all linear 0.25s;
}

.product-card-detail:hover img {
  transform: scale(1.1);
  filter: grayscale(30%) blur(1px) !important;
}
</style>
