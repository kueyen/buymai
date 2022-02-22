<template>
  <div class="container">
    <div class="container mt-5">
      <div class="row mt-3">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <img class="mydetailimg border myshadow" :src="product.image_url" />
          <carousel
            class="text-center mt-2"
            :paginationEnabled="false"
            :perPageCustom="[
              [480, 1],
              [768, 2],
              [960, 4],
            ]"
          >
            <slide class="me-2">
              <img src="/images/img4.jpeg" class="img-fluid myimgdt myshadow" />
            </slide>
            <slide class="me-2">
              <img src="/images/img5.jpeg" class="img-fluid myimgdt myshadow" />
            </slide>
            <slide class="me-2">
              <img src="/images/img3.jpeg" class="img-fluid myimgdt myshadow" />
            </slide>
            <slide class="me-2">
              <img src="/images/img1.png" class="img-fluid myimgdt myshadow" />
            </slide>
          </carousel>
        </div>
        <div class="col-1"></div>
        <div class="col-lg-5 col-md-12 col-sm-12">
          <h4 class="mt-3">ชื่อ: {{ product.title }}</h4>
          <div class="row mt-3">
            <div class="col-lg-3">
              <h5>สถานะ:</h5>
            </div>
            <div class="col-lg-9">
              <h5 style="color: green">มีสินค้า</h5>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-3">
              <h5>ชนิดสินค้า:</h5>
            </div>
            <div class="col-lg-9">
              <h5 class="text-gray">{{ product.category.name }}</h5>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-3">
              <h5>รายละเอียด:</h5>
            </div>
          </div>
          <h6 class="mt-3 text-gray">
            {{ product.description }}
          </h6>
          <h1 class="mt-5" style="color: red">฿120.00</h1>
          <div class="mt-5">
            <button type="button" class="btn btn-outline-dark w-100 mbtn">
              เพิ่มลงตระกร้ารถเข็น
            </button>
            <button type="button" class="btn btn-dark w-100 mbtn">
              ซื้อเลย
            </button>
          </div>
        </div>
        <div class="row"></div>
      </div>
    </div>
    <div class="clearfix mt-5">
      <div class="float-start">
        <h3>สินค้าอื่นๆ</h3>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-3 col-md-6 col-sm-1">
        <div class="warp-card myshadow">
          <h4 class="text-center">ชื่อต้นซากุระ</h4>
          <img src="/images/img4.jpeg" class="img-fluid myimghead" />
          <div class="clearfix mt-3">
            <div class="float-start">
              <h3 class="mt-2 ms-3">125 ฿</h3>
            </div>
            <div class="float-end">
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow"
              >
                <i class="fa-solid fa-cart-shopping"></i>
              </button>
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow me-3"
              >
                ดูรายละเอียด
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-1">
        <div class="warp-card myshadow">
          <h4 class="text-center">ชื่อต้นซากุระ</h4>
          <img src="/images/img4.jpeg" class="img-fluid myimghead" />
          <div class="clearfix mt-3">
            <div class="float-start">
              <h3 class="mt-2 ms-3">125 ฿</h3>
            </div>
            <div class="float-end">
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow"
              >
                <i class="fa-solid fa-cart-shopping"></i>
              </button>
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow me-3"
              >
                ดูรายละเอียด
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-1">
        <div class="warp-card myshadow">
          <h4 class="text-center">ชื่อต้นซากุระ</h4>
          <img src="/images/img4.jpeg" class="img-fluid myimghead" />
          <div class="clearfix mt-3">
            <div class="float-start">
              <h3 class="mt-2 ms-3">125 ฿</h3>
            </div>
            <div class="float-end">
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow"
              >
                <i class="fa-solid fa-cart-shopping"></i>
              </button>
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow me-3"
              >
                ดูรายละเอียด
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-1">
        <div class="warp-card myshadow">
          <h4 class="text-center">ชื่อต้นซากุระ</h4>
          <img src="/images/img4.jpeg" class="img-fluid myimghead" />
          <div class="clearfix mt-3">
            <div class="float-start">
              <h3 class="mt-2 ms-3">125 ฿</h3>
            </div>
            <div class="float-end">
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow"
              >
                <i class="fa-solid fa-cart-shopping"></i>
              </button>
              <button
                type="button"
                class="btn btn-outline-dark btn-sm mybtnshadow me-3"
              >
                ดูรายละเอียด
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- OLD -->
  <!-- <div class="row">
      <div class="col-7">
        <img :src="product.image_url" class="myimg" />
        <carousel :perPage="3">
          <slide> <img src="/images/img2.jpeg" class="myimg-sm" /> </slide>
          <slide> <img src="/images/img2.jpeg" class="myimg-sm" /> </slide>
          <slide> <img src="/images/img2.jpeg" class="myimg-sm" /> </slide>
        </carousel>
      </div>
      <div class="col-1"></div>
      <div class="col-4">
        <table style="height: 28rem">
          <tbody>
            <tr>
              <td class="align-middle ms-5">
                <h6 class="mt-5" style="color: grey">ชื่อร้าน :</h6>
                <h3 class="mt-3">{{ product.title }}</h3>
                <h6 style="color: grey">พันธ์ไม้</h6>
                <p>{{ product.category.name }}</p>
                <h6 style="color: grey">รายละเอียด</h6>
                <p>
                  {{ product.description }}
                </p>
                <h1 class="t-red mt-5">ราคา {{ product.price }} ฿</h1>

                <div
                  class="d-flex align-items-start flex-column bd-highlight mb-3"
                  style="height: 200px"
                >
                  <div class="mb-auto p-2 bd-highlight"></div>
                  <div class="p-2 bd-highlight"></div>
                  <div class="p-2 bd-highlight">
                    <button type="button" class="btn btn-outline-dark btn-lg">
                      <i class="fa-solid fa-cart-shopping"></i>
                      เพิ่มลงตระกร้ารถเข็น
                    </button>
                    <button type="button" class="btn btn-outline-dark btn-lg">
                      ซื้อเลย
                    </button>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> -->
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
.mbtn:hover {
  background: green;
  border-color: green;
}
.text-gray {
  color: gray;
}
.mydetailimg {
  width: 100%;
  height: 700px;
  object-fit: cover;
}
.warp-card {
  background-color: white;
  padding: 10px 0px;
}
.myimgdt {
  width: 100%;
  height: 100px;
  object-fit: cover;
}
</style>
