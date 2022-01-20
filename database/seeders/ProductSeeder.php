<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],
            [
                'name'=>'Fjallraven - Foldsack',
                "price"=>"110",
                "description"=>"Your perfect pack for everyday use and walks in the forest",
                "category"=>"Bags",
                "gallery"=>"https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg"
            ],
            [
                'name'=>'Slim Fit T-Shirt',
                "price"=>"22",
                "description"=>"Solid stitched shirt with round neck made for durability and a great fit for casual fashion wear",
                "category"=>"Clothing",
                "gallery"=>"https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg"
            ],
            [
                'name'=>'Cotton Jacket',
                "price"=>"55",
                "description"=>"great outerwear, suitable for many occasions, such as working, hiking, camping, rock climbing, cycling, traveling or other outdoors",
                "category"=>"Clothing",
                "gallery"=>"https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg"
            ],
            [
                'name'=>'V Neck Shirt',
                "price"=>"20",
                "description"=>"light weight & soft fabric for breathable and comfortable wearing",
                "category"=>"Clothing",
                "gallery"=>"https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg"
            ],
        ]);
    }
}
