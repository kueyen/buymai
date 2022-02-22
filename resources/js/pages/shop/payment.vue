<template>
  <div class="container">
    <h1>ชำระเงิน</h1>
    <div class="row">
      <div class="col-lg-8 col-md-12 col-sm-12 myborder p-3 bg-white mt-3">
        <form>
          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >ที่อยู่อีเมล</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >เบอร์โทรศัพท์</label
                >
                <input type="phonenumber" class="form-control" />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >ชื่อจริง</label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >นามสกุล</label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ที่อยู่</label>
            <input type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="text" class="form-control" />
          </div>

          <div class="row">
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >จังหวัด</label
                >
                <div class="dropdown">
                  <button
                    class="btn btn-light dropdown-toggle w-100 border"
                    type="button"
                    id="dropdownMenuButton1"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    จังหวัด
                  </button>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="#">นครปฐม</a></li>
                    <li>
                      <a class="dropdown-item" href="#">นนทบุรี</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">สมุทรปราการ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">อำเภอ</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >รหัสไปรษณีย์</label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
          </div>

          <button @click="showAlert" class="btn btn-secondary w-100">
            ยืนยัน
          </button>
        </form>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 myborder p-3 bg-white mt-3">
        <div class="p-2">
          <h2 class="text-center">สรุป</h2>
          <hr />
          <div class="row ms-2">
            <div class="col-10">จำนวน</div>
            <div class="col-2">1 ชิ้น</div>
          </div>
          <br />
          <div class="row ms-2">
            <div class="col-10">ราคา</div>
            <div class="col-2">฿120</div>
          </div>
          <br />
          <div class="row ms-2">
            <div class="col-10">ค่าขนส่ง</div>
            <div class="col-2">฿120</div>
          </div>
          <br />
          <div class="row ms-2">
            <div class="col-10">ราคาทั้งหมด</div>
            <div class="col-2">฿240</div>
          </div>
          <hr />
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  methods: {
    showAlert() {
      this.$swal(
        {
          title: "สำเร็จ!",
          text: "กำลังกลับไปหน้าหลักใน 5 วินาที.",
          type: "success",
          timer: 5000,
          showConfirmButton: false,
        },
        function () {
          window.location.href = "";
        }
      );
    },
  },
};
</script>
<style></style>
