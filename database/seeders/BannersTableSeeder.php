<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;


class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerRecords = [
            [ 'id'=>1, 'image'=> 'banner1.jpg', 'link'=>'', 'order'=> '1' ],
            [ 'id'=>2, 'image'=>'banner2.jpg', 'link'=>'', 'order'=> '2' ],
            [ 'id'=>3, 'image'=>'banner3.jpg', 'link'=>'', 'order'=> '3' ]

        ];

         Banner::insert($bannerRecords);
    }
}
