<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	[
                'name'=>'LG Mobile',
                'price'=>'200',
                'category'=>'mobile',
                'description'=>'this is LG smartphone with 4gb RAM',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg'  
            ],
            [
        		'name'=>'OPPO Mobile',
	        	'price'=>'300',
	        	'category'=>'mobile',
	        	'description'=>'this is OPPO smartphone with 8gb RAM',
	        	'gallery'=>'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png'  
        	],
        	[
        		'name'=>'Panasonic Tv',
	        	'price'=>'400',
	        	'category'=>'tv',
	        	'description'=>'this is Panasonic Tv',
	        	'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154609_832_panasonic_40-inch-led-full-hd-tv-th-40e400d.jpg'
        	],
        	[
        		'name'=>'Sony Tv',
	        	'price'=>'500',
	        	'category'=>'tv',
	        	'description'=>'this is Sony Tv',
	        	'gallery'=>'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png'
        	],
        	[
        		'name'=>'LG Fridge',
	        	'price'=>'600',
	        	'category'=>'fridge',
	        	'description'=>'this is LG fridge',
	        	'gallery'=>'https://5.imimg.com/data5/MI/IE/MY-31194682/lg-single-door-refrigerator-188-ltr-500x500.png'
        	]

        ]);
    }
}
