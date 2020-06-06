<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://botero.com.au/wp-content/uploads/ladies-tshirt-front-3.jpg',
            'title' => 'Black T-shirt',
            'description' => 'Loveable cool amazing.',
            'price' => 99.99,
            'category' => 'tshirt'
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://tshirt-factory.com/images/detailed/20/NEED-SUMMER-T-shirt-design-20667.jpg',
            'title' => 'Summer T-shirt 1',
            'description' => 'Black soft cotton will help you feel relax and stay cool at the same time.',
            'price' => 20.49,
            'category' => 'tshirt'
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://4menshop.com/images/thumbs/2019/01/ao-vest-nazafu-xam-muoi-tieu-1131-10576-slide-products-5c36c724b58ca.jpg',
            'title' => 'Luxury Vest',
            'description' => 'Luxury vest is a high-class product line, designed, tailor-made according to modern trends, youthful, healthy body design.',
            'price' => 250.99,
            'category' => 'vest'
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://cdn1.brandability.co.za/2017/02/26103513/BRT-Zone-Jacket-RedSilver.jpg',
            'title' => 'BRT Zone Jacket',
            'description' => 'Material: 130g Coated Ripstop 100% Polyester.',
            'price' => 60.01,
            'category' => 'jacket'
        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'https://product.hstatic.net/1000284478/product/duskypink_wmfbegoniawc9w_1_4999862052a444bf90425fc772f5d85d_1024x1024.jpg',
            'title' => 'Tailored Begonia',
            'description' => 'Bộ sưu tập Ted Baker womenswear. Thiết kế áo vest nữ hiện đại. Phối miệng đệm vai giữ dáng áo.',
            'price' => 299.99,
            'category' => 'vest'
        ]);
        $product->save();
        
    }
}
