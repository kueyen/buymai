<template>
  <div class="container">
    <h4>ตระกร้าสินค้า</h4>
    <div class="row mt-3">
      <div class="col-lg-12 myborder mybtnshadow">
        <div class="row p-2">
          <div class="col-1"></div>
          <div class="col-5">ชื่อสินค้า</div>
          <div class="col-4">ราคา</div>

          <div class="col-2"></div>
        </div>
      </div>
      <div class="col-1"></div>
    </div>

    <div class="row mt-3">
      <div class="col-lg-12 myborder mybtnshadow">
        <br />
        <h5 class="ms-3">ชื่อร้าน :</h5>
        <hr />
        <div class="row p-2">
          <div class="col-1"></div>
          <div class="col-5">
            <div class="row">
              <div class="col-5">
                <img src="/images/img3.jpeg" class="myimgcart" />
              </div>
              <div class="col-7">
                <table style="height: 100px">
                  <tbody>
                    <tr>
                      <td class="align-middle">
                        <h5>ชื่อสินค้า</h5>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-4">
            <table style="height: 6.25rem">
              <tbody>
                <tr>
                  <td class="align-middle" style="color: green">
                    <h5>฿120</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-2">
            <table style="height: 6.25rem">
              <tbody>
                <tr>
                  <td class="align-middle">
                    <button type="button" class="btn btn-danger btn-lg">
                      <i class="fa-solid fa-trash-can"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <hr />
        <br />
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-lg-12 myborder mybtnshadow">
        <div class="p-2">
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
            <div class="col-2"><h4 style="color: red">฿240</h4></div>
          </div>
          <hr />
          <button type="button" class="btn btn-outline-success w-100">
            ชำระเงิน
          </button>
        </div>
      </div>
    </div>
  </div>
</template>
<style>
.img-sm {
  width: 100%;
  height: 100px;
  object-fit: contain;
  margin-bottom: 10px;
}
.mybtnshadow {
  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.myborder {
  border: 1px solid rgb(192, 192, 192);
}
.myimgcart {
  width: 100%;
  height: 100px;
  object-fit: fill;
}
</style>
