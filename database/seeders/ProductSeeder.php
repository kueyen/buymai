<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                "title" => "สาคูด่าง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://readthecloud.co/wp-content/uploads/2021/09/variegated-plants-1.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 1,

            ],
            [
                "title" => "ถุงเงินถุงทอง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://readthecloud.co/wp-content/uploads/2021/09/variegated-plants-2-1.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 1,

            ],
            [
                "title" => "กวักพระพรหม",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://readthecloud.co/wp-content/uploads/2021/09/variegated-plants-3-750x562.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 1,

            ],
            [
                "title" => "หนวดปลาหมึกด่าง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://readthecloud.co/wp-content/uploads/2021/09/variegated-plants-4-1.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 1,

            ],
            [
                "title" => "เล็บครุฑช่อสะเดา",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://readthecloud.co/wp-content/uploads/2021/09/variegated-plants-5-750x562.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 1,

            ],
            [
                "title" => "ไผ่กวนอิมด่าง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://readthecloud.co/wp-content/uploads/2021/09/variegated-plants-6.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 1,

            ],
            [
                "title" => "ยางอินเดีย",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://s359.kapook.com/pagebuilder/20ffdf08-bad3-4fa0-b6ca-50b9343585c7.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 2,

            ],
            [
                "title" => "เขียวหมื่นปี",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://static.thairath.co.th/media/Dtbezn3nNUxytg04agFZTSrF7rvAvx4DF5PnAv4UZOErL5.webp",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 2,

            ],
            [
                "title" => "เศรษฐีเรือนใน",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://www.bloggang.com/data/f/fasaiwonmai/picture/1418431309.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 2,

            ],
            [
                "title" => "ลิ้นมังกร",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://s359.kapook.com/r/600/auto/pagebuilder/8db0851c-dd46-4538-ba34-261414823069.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 2,

            ],
            [
                "title" => "พลูด่าง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://s359.kapook.com/pagebuilder/a1db7d88-d798-4e27-baae-fd932e17a7ab.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 2,

            ],
            [
                "title" => "ไทรย้อยใบแหลม",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://fv.lnwfile.com/eqf441.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 2,

            ],
            [
                "title" => "ต้นเดหลี",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://static.thairath.co.th/media/Dtbezn3nNUxytg04agFZTSrF7rvAvx4DjTmdy56NtwvzBs.webp",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 2,

            ],
            [
                "title" => "ต้นมอนเตอรล่า",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://www.technologychaoban.com/wp-content/uploads/2021/04/2-50.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 3,

            ],
            [
                "title" => "ต้นบอนไซ",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cf.shopee.co.th/file/8b84980a4d226e299b75d57ede418a11",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 3,

            ],
            [
                "title" => "ไม้สักทอง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cf.shopee.co.th/file/e11d4642ba4282bbd96b3d5c8570facf",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 3,

            ],
            [
                "title" => "ต้นวาสนา",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://www.technologychaoban.com/wp-content/uploads/2021/04/Untitled.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 3,

            ],
            [
                "title" => "ต้นวาสนา",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://www.technologychaoban.com/wp-content/uploads/2021/04/Untitled.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 3,

            ],
            [
                "title" => "หมากเหลือง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://th-live-05.slatic.net/p/497ea0c9f08d5d45db00fed921ebe7a5.jpg_720x720q80.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 3,

            ],
            [
                "title" => "จั๋ง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://1.bp.blogspot.com/-EJG31r-X-_o/XeczN3K2xUI/AAAAAAAAPIk/kvjr0NnnJ60A_UeuxR0l-sHATk8Q0McbACLcBGAsYHQ/s1600/IMG_25621204_104407.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 3,

            ],
            [
                "title" => "เศรษฐีพันล้าน",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cf.shopee.co.th/file/e7ec7f9608490fca073440387eb576ff",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 4,

            ],
            [
                "title" => "รวยไม่เลิก",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cf.shopee.co.th/file/5c47d36cb9b0a5cb344048b7b42119a2",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 4,

            ],
            [
                "title" => "เงินไหลมา",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://s359.kapook.com/pagebuilder/f71a408e-f5d7-482f-958d-2f3ba10320cf.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 4,

            ],
            [
                "title" => "เศรษฐีน้ำเต้าทอง",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://th-live-01.slatic.net/p/74873a92fdc14e2945f66f030bfdc09e.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 4,

            ],
            [
                "title" => "เศรษฐีกอดทรัพย์",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://www.tannaew.com/wp-content/uploads/2019/04/DSCF3731.jpg",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 4,

            ],
            [
                "title" => "เต่านำโชค",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cf.shopee.co.th/file/3c55fb94b3b87a68a5777ba51c5ec638_tn",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 4,

            ],
            [
                "title" => "ปุ๋ย",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://www.soilmate.co.th/uploads/fertilizers/e089c-.png",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 5,

            ],
            [
                "title" => "ปุ๋ย",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://www.chiataigroup.com/imgadmins/product_photo/pro20200602095323.png",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 5,

            ],
            [
                "title" => "ปุ๋ย",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cf.shopee.co.th/file/8b84980a4d226e299b75d57ede418a11",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 5,

            ],
            [
                "title" => "ปุ๋ย",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cache-igetweb-v2.mt108.info/uploads/images-cache/10869/product/853d7afa7c94eedab06958ccbdce2af8_full.png",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 5,

            ],
            [
                "title" => "ปุ๋ย",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://image.makewebeasy.net/makeweb/0/6c5mjzuSp/DefaultData/%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%AA%E0%B8%AD%E0%B8%9A_20_5_28_%E0%B8%A0%E0%B8%B9%E0%B8%A1%E0%B8%A3%E0%B8%81%E0%B8%95.gif",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 1,
                "category_id" => 5,

            ],
            [
                "title" => "ปุ๋ย",
                "description" => "ต้นไม่ขนาดกลางนิยมปลูกในบ้าน",
                "howto_description" => "ใส่ปุ๋น",
                "image_url" => "https://cache-igetweb-v2.mt108.info/uploads/images-cache/10869/product/6be3cae9f2bc0b4da96672fb896c2e59_full.png",
                "price" => 150.25,
                "discount" => 5,
                "is_recommmend" => 0,
                "category_id" => 5,

            ],


        ]);
    }
}
