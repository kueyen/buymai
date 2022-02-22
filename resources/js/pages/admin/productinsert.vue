<template>
  <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
      <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
        <div class="card">
          <h3 class="text-center mb-4">เพิ่มรายการสินค้า</h3>
          <div class="form-card">
            <div class="row justify-content-between text-left">
              <div class="form-group col-12 flex-column d-flex">
                <label class="form-control-label px-3"> เลือกหมวดหมู่ </label>
                <select name="" id="" class="form-control mt-2">
                  <option value="">--- กรุณาเลือก1รายการ ---</option>
                </select>
              </div>
            </div>
            <div class="row justify-content-between text-left mt-3">
              <div class="form-group col-sm-6 flex-column d-flex">
                <label class="form-control-label px-3">ชื่อสินค้า</label>
                <input
                  type="text"
                  name="name"
                  placeholder="กรุณากรอกชื่อสินค้า"
                />
              </div>
              <div class="form-group col-sm-6 flex-column d-flex">
                <label class="form-control-label px-3">ราคา</label>
                <input type="text" name="name" placeholder="กรุณากรอกราคา" />
              </div>
            </div>
            <div class="form-group col-sm-12 flex-column d-flex mt-3">
              <label class="form-control-label px-3">ข้อมูลสินค้า</label>
              <input
                type="text"
                name="name"
                class="pb-5"
                placeholder="กรุณากรอกข้อมูลสินค้า"
              />
            </div>
            <div class="form-group col-sm-12 flex-column d-flex mt-3">
              <label class="form-control-label px-3">วิธีดูแลรักษา</label>
              <input
                type="text"
                name="name"
                class="pb-5"
                placeholder="กรุณากรอกวิธีดูแลรักษา"
              />
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1" class="form-label"
                >เพิ่มรูปภาพ</label
              >
              <input type="file" class="form-control" />
            </div>

            <div class="row justify-content-end mt-3">
              <div class="form-group col-sm-6">
                <button type="submit" class="btn-block btn-primary">
                  เพิ่มรายการสินค้า
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style>
.card {
  padding: 30px 40px;
  margin-top: 60px;
  margin-bottom: 60px;
  border: none !important;
  box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2);
}

.blue-text {
  color: #00bcd4;
}

.form-control-label {
  margin-bottom: 0;
}

input,
textarea,
button {
  padding: 8px 15px;
  border-radius: 5px !important;
  margin: 5px 0px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  font-size: 18px !important;
  font-weight: 300;
}

input:focus,
textarea:focus {
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: 1px solid #00bcd4;
  outline-width: 0;
  font-weight: 400;
}

.btn-block {
  text-transform: uppercase;
  font-size: 15px !important;
  font-weight: 400;
  height: 43px;
  cursor: pointer;
}

.btn-block:hover {
  color: #fff !important;
}

button:focus {
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  outline-width: 0;
}
</style>
