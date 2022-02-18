<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                "name"=> "ไม้ด่าง",
                "description" => "ไม้ที่เป็นต้นไม้ขนาดเล็ก"
            ],
            [
                "name"=> "ไม้ฟอกอากาศ",
                "description" => "ไม้ที่เป็นต้นไม้ประดับตกแต่ห้องง"
            ],
            [
                "name"=> "ไม้ประดับ",
                "description" => "เอาไว้ดูแลรักษาต้นไม้"
            ],
            [
                "name"=> "ต้นไม้มงคล",
                "description" => "เอาไว้ดูแลรักษาต้นไม้"
            ],
            [
                "name"=> "ปุ๋ย ดิน และอุปกรณ์ดูแลต้นไม้",
                "description" => "เอาไว้ดูแลรักษาต้นไม้"
            ],
            
        ]);
    }
}
